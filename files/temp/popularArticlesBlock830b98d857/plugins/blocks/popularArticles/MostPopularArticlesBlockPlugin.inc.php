<?php

/**
 * @file MostPopularArticlesBlockPlugin.inc.php
 *
 * Copyright (c) 2000-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class MostPopularArticlesBlockPlugin
 * @ingroup plugins_blocks_user
 *
 * @brief Class for Popular Article Block plugin
 */


import('plugins.BlockPlugin');

class MostPopularArticlesBlockPlugin extends BlockPlugin {
	function register($category, $path) {
		$success = parent::register($category, $path);
		if ($success) {
			$this->addLocaleData();
			
			$this->import('MostPopularArticlesDAO');
			$mostPopularArticlesDAO =& new MostPopularArticlesDAO();
			$ret =& DAORegistry::registerDAO('MostPopularArticlesDAO', $mostPopularArticlesDAO);
		}
		return $success;
	}
	
	/**
	 * Get the supported contexts (e.g. BLOCK_CONTEXT_...) for this block.
	 * @return array
	 */
	function getSupportedContexts() {
		return array(BLOCK_CONTEXT_LEFT_SIDEBAR, BLOCK_CONTEXT_RIGHT_SIDEBAR, BLOCK_CONTEXT_HOMEPAGE);
	}

	/**
	 * Get the name of this plugin. The name must be unique within
	 * its category.
	 * @return String name of plugin
	 */
	function getName() {
		return 'MostPopularArticlesBlockPlugin';
	}

	/**
	 * Get the display name of this plugin.
	 * @return String
	 */
	function getDisplayName() {
		return Locale::translate('plugins.block.MostPopularArticles.displayName');
	}

	/**
	 * Get a description of the plugin.
	 */
	function getDescription() {
		return Locale::translate('plugins.block.MostPopularArticles.description');
	}

	function getContents(&$templateMgr) {
		$journal =& Request::getJournal();
		if (!$journal) return '';
		
		$mostPopularArticlesDAO =& DAORegistry::getDAO('MostPopularArticlesDAO');
		$templateMgr->assign('popularArticles', $mostPopularArticlesDAO->getMostPopularArticles($journal->getJournalId(), 10));
		
		$journalDao =& DAORegistry::getDAO('JournalDAO');
		$templateMgr->assign_by_ref('journalDao', $journalDao);
	
		return parent::getContents($templateMgr);
	}
}

?>
