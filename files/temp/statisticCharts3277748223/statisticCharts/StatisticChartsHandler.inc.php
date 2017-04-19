<?php

/**
 * @file StatisticChartsHandler.inc.php
 *
 * Copyright (c) 2013 Fran Mañez <fran.upc@gmail.com> - Universitat Politècnica de Catalunya UPC
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 * 
 * IMPORTANT: this plugin depends on 'Counter Plugin'. Only work if 'Counter plugin' is activated.
 *
 * @class StatisticChartsHandler
 * @ingroup plugins_statisticCharts
 *
 * @brief statisticCharts request handler.
 */

import('classes.handler.Handler');

class StatisticChartsHandler extends Handler {
	/** Plugin associated with this request **/
	var $plugin;
	
	/**
	 * Constructor
	 **/
	function StatisticChartsHandler() {
		parent::Handler();
	}
	
	/**
	 * Display the statistics page.
	 */
	function index() {
		//this plugin depends on 'Counter Plugin'
		$plugins =& PluginRegistry::getPlugins();
		$counterPlugin = $plugins['generic']['counterplugin'];
		
		if($counterPlugin != null && $counterPlugin->getEnabled()){
			$this->validate();
			$this->setupTemplate();
			$plugin =& $this->plugin;
	
			$templateManager =& TemplateManager::getManager();
			
			// library highcharts jquery
			$templateManager->addJavaScript('plugins/generic/statisticCharts/js/highcharts/highcharts.js');
			$templateManager->addJavaScript('plugins/generic/statisticCharts/js/highcharts/themes/grid.js');
			$templateManager->addJavaScript('plugins/generic/statisticCharts/js/highcharts/modules/exporting.js');
			$templateManager->addJavaScript('plugins/generic/statisticCharts/js/media/js/jquery.dataTables.js');
			
			$templateManager->display($plugin->getTemplatePath() . 'index.tpl');
		}else{
			$this->setupTemplate(true);
			$templateMgr =& TemplateManager::getManager();
			$templateMgr->assign('pageTitle', 'plugins.generic.statistics');
			$templateMgr->assign('errorMsg', 'plugins.generic.statistics.errorCounterPlugin');
			$templateMgr->display('common/error.tpl');
		}
	}
	
	/**
	 * Get statistics by month
	 */
	function getStatisticsByMonth(){
		$this->validate();
		$plugin =& $this->plugin;
		$this->setupTemplate(true);

		$journalDao =& DAORegistry::getDAO('JournalDAO');
		$journal =& Request::getJournal();

		$year = Request::getUserVar('year');
		if (empty($year)) $year = date('Y');
			
		$begin = "$year-01-01";
		$end = "$year-12-01";
		
		//Use CounterReportDAO from counter plugin
		$counterReportDao =& DAORegistry::getDAO('CounterReportDAO');
		
		$entries = $counterReportDao->getMonthlyLogRange($journal->getId(), $begin, $end, true);

		//PDF
		$obj[0]->name = AppLocale::Translate('plugins.generic.statistics.viewPDF');
		StatisticChartsHandler::dataForMonthPDF($cols, $entries);
		$obj[0]->values = $cols;
		unset($cols);
		
		//HTML
		$obj[1]->name = AppLocale::Translate('plugins.generic.statistics.viewHTML');
		StatisticChartsHandler::dataForMonthHTML($cols, $entries);
		$obj[1]->values = $cols;
		unset($cols);
		
		//Other
		$obj[2]->name = AppLocale::Translate('plugins.generic.statistics.viewOther');
		StatisticChartsHandler::dataForMonthOther($cols, $entries);
		$obj[2]->values = $cols;
		$obj[2]->visible = false;
		unset($cols);

		echo json_encode($obj);
	}
	
	
	/**
	 * Get statistics by year
	 */
	function getStatisticsByYear(){
		
		$this->validate();
		$plugin =& $this->plugin;
		$this->setupTemplate(true);

		$journalDao =& DAORegistry::getDAO('JournalDAO');
		$journal =& Request::getJournal();

		$year = Request::getUserVar('year');
		if (empty($year)) $year = date('Y');
			
		for($indexYear = 5; $indexYear >= 0; $indexYear--){
			$yearTmp = $year-$indexYear;
			$begin = "$yearTmp-01-01";
			$end = "$yearTmp-12-31";
			
			//Use CounterReportDAO from counter plugin
			$counterReportDao =& DAORegistry::getDAO('CounterReportDAO');
			
			$entries = $counterReportDao->getMonthlyLogRange($journal->getId(), $begin, $end, true);
		
			//PDF
			StatisticChartsHandler::dataForYearHTML($cols, $totalYearHTML, $entries);
			$arrayTotalYearHTML[]=$totalYearHTML;
			unset($cols);
			
			//HTML
			StatisticChartsHandler::dataForYearPDF($cols, $totalYearPDF, $entries);
			$arrayTotalYearPDF[]=$totalYearPDF;
			unset($cols);
			
			//Other
			StatisticChartsHandler::dataForYearOther($cols, $totalYearOther, $entries);
			$arrayTotalYearOther[]=$totalYearOther;
			unset($cols);
			
		}
		
		$obj[0]->name = AppLocale::Translate('plugins.generic.statistics.viewPDF');
		$obj[0]->values = $arrayTotalYearPDF;

		$obj[1]->name = AppLocale::Translate('plugins.generic.statistics.viewHTML');	
		$obj[1]->values = $arrayTotalYearHTML;
		
		$obj[2]->name = AppLocale::Translate('plugins.generic.statistics.viewOther');	
		$obj[2]->values = $arrayTotalYearOther;
		$obj[2]->visible = false;

		
		echo json_encode($obj);
		
	}

	/**
	 * Validate that user has site admin privileges or journal manager priveleges.
	 * Redirects to the user index page if not properly authenticated.
	 * @param $canRedirect boolean Whether or not to redirect if the user cannot be validated; if not, the script simply terminates.
	 */
	function validate($canRedirect = true) {
		parent::validate();
		$journal =& Request::getJournal();
		//if (!Validation::isSiteAdmin()) {
		//if ($canRedirect) Validation::redirectLogin();
		//else exit;
		//}

		$plugin =& Registry::get('plugin');
		$this->plugin =& $plugin;
		return true;
	}

	/**
	 * Set up common template variables.
	 * @param $subclass boolean set to true if caller is below this handler in the heirarchy
	 */
	function setupTemplate($subclass = false) {
		parent::setupTemplate();
		$templateMgr =& TemplateManager::getManager();

		$pageHierarchy = array(array(Request::url(null, 'user'), 'navigation.user'));

		if ($subclass) $pageHierarchy[] = array(Request::url(null, 'statisticCharts'), 'plugins.generic.statistics');

		$templateMgr->assign_by_ref('pageHierarchy', $pageHierarchy);
	}
	
	
	/**
	 * ************************************************************
	 * 					Parser data functions
	 * ************************************************************
	 */
	
	private function dataForMonthPDF(&$cols, $entries) {
		$currTotal = 0;
		for ($i = 1; $i <= 12; $i++) {
			$currTotal = 0;
			foreach ($entries as $entry) {
				if ($i==$entry['month']) {
					$currTotal += $entry['count_pdf'];
					break;
				}
			}
			$cols[]=$currTotal;
		}
	}
	
	private function dataForMonthHTML(&$cols, $entries) {
		$currTotal = 0;
		for ($i = 1; $i <= 12; $i++) {
			$currTotal = 0;
			foreach ($entries as $entry) {
				if ($i==$entry['month']) {
					$currTotal = $entry['count_html'] + 0;
					break;
				}
			}
			$cols[]=$currTotal;
		}
	}
	
	private function dataForMonthOther(&$cols, $entries) {
		$currTotal = 0;
		for ($i = 1; $i <= 12; $i++) {
			$currTotal = 0;
			foreach ($entries as $entry) {
				if ($i==$entry['month']) {
					$currTotal = $entry['count_other'] + 0;
					break;
				}
			}
			$cols[]=$currTotal;
		}
	}

	private function dataForYearPDF(&$cols, &$totalYear, $entries) {
		$currTotal = 0;
		$totalYear = 0;
		for ($i = 1; $i <= 12; $i++) {
			$currTotal = 0;
			foreach ($entries as $entry) {
				if ($i==$entry['month']) {
					$currTotal = $entry['count_pdf'];
					break;
				}
			}
			$cols[]=$currTotal;
			$totalYear = $totalYear + $currTotal;
		}
	}
	
	private function dataForYearHTML(&$cols, &$totalYear, $entries) {
		$currTotal = 0;
		$totalYear = 0;
		for ($i = 1; $i <= 12; $i++) {
			$currTotal = 0;
			foreach ($entries as $entry) {
				if ($i==$entry['month']) {
					$currTotal = $entry['count_html'];
					break;
				}
			}
			$cols[]=$currTotal;
			$totalYear = $totalYear + $currTotal;
		}
	}
	
	private function dataForYearOther(&$cols, &$totalYear, $entries) {
		$currTotal = 0;
		$totalYear = 0;
		for ($i = 1; $i <= 12; $i++) {
			$currTotal = 0;
			foreach ($entries as $entry) {
				if ($i==$entry['month']) {
					$currTotal = $entry['count_other'];
					break;
				}
			}
			$cols[]=$currTotal;
			$totalYear = $totalYear + $currTotal;
		}
	}
}
?>
