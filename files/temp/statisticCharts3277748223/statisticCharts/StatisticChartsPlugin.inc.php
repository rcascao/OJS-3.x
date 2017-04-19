<?php

/**
 * @file StatisticChartsPlugin.inc.php
 *
 * Copyright (c) 2013 Fran Mañez <fran.upc@gmail.com> - Universitat Politècnica de Catalunya UPC
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 * 
 * IMPORTANT: this plugin depends on 'Counter Plugin'. Only work if 'Counter plugin' is activated.
 *
 * @class StatisticChartsPlugin
 * @ingroup plugins_statisticCharts
 *
 * @brief StatisticCharts Plugin
 */


import('lib.pkp.classes.plugins.GenericPlugin');

class StatisticChartsPlugin extends GenericPlugin {
	/**
	 * Called as a plugin is registered to the registry
	 * @param $category String Name of category plugin was registered to
	 * @return boolean True iff plugin initialized successfully; if false,
	 * 	the plugin will not be registered.
	 */
	function register($category, $path) {
		$success = parent::register($category, $path);
		if ($success && $this->getEnabled()) {

			HookRegistry::register ('LoadHandler', array(&$this, 'handleRequest'));
			//HookRegistry::register ('TemplateManager::display', array(&$this, 'logRequest'));
			
			HookRegistry::register ('Templates::Common::Header::Navbar::CurrentJournal', array(&$this, 'displayHeaderLink'));
		}
		return $success;
	}

	function test($hookName, $args) {
		return __('plugins.generic.statistics');
	}
	
	function getDisplayName() {
		return __('plugins.generic.statistics');
	}

	function getDescription() {
		return __('plugins.generic.statistics.description');
	}

		
	function displayHeaderLink($hookName, $params) {
		$journal =& Request::getJournal();
		if (!$journal) return false;

		if ($this->getEnabled()) {
			$smarty =& $params[1];
			$output =& $params[2];
			$templateMgr = TemplateManager::getManager();
			$output .= '<li><a href="' . $templateMgr->smartyUrl(array('page'=>'statisticCharts'), $smarty) . '" target="_parent">' . TemplateManager::smartyTranslate(array('key'=>'plugins.generic.statistics'), $smarty) . '</a></li>';
		}
		return false;
	}
	
	function handleRequest($hookName, $args) {
		$page =& $args[0];
		$op =& $args[1];
		$sourceFile =& $args[2];

		// If the request is for the log analyzer itself, handle it.
		if ($page === 'statisticCharts') {
			$this->import('StatisticChartsHandler');
			Registry::set('plugin', $this);
			define('HANDLER_CLASS', 'StatisticChartsHandler');
			return true;
		}

		return false;
	}

	function isSitePlugin() {
		return true;
	}

 	/*
 	 * Execute a management verb on this plugin
 	 * @param $verb string
 	 * @param $args array
	 * @param $message string Location for the plugin to put a result msg
 	 * @return boolean
 	 */
	function manage($verb, $args, &$message) {
		if (!parent::manage($verb, $args, $message)) return false;
		switch ($verb) {
			case 'statisticCharts':
				Request::redirect(null, 'statisticCharts');
				return false;
			default:
				// Unknown management verb
				assert(false);
				return false;
		}
	}
}
?>
