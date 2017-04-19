<?php

/**
 * @file MostPopularArticlesDAO.inc.php
 *
 * Copyright (c) 2000-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class MostPopularArticlesDAO
 * @ingroup plugins_blocks_popularArticles
 *
 * @brief Class for Popular Article Block plugin
 */
 
import('db.DAO');

class MostPopularArticlesDAO extends DAO {
	
	/*
	 * Gets the $num most popular articles in the last $months months. 
	 * If $months = null it shows articles of all time
	 */
	function getMostPopularArticles( $journalId, $num = 10, $months = null){
		$publishedArticleDao = DAORegistry::getDAO('PublishedArticleDAO');
		
		$returner = array();
		
		if ( $months ) {
			$result =& $this->retrieveLimit(
					sprintf('SELECT a.article_id
					FROM published_articles pa INNER JOIN articles a ON (a.article_id = pa.article_id)
					WHERE a.journal_id = ? AND 
					pa.date_published > %s
					AND pa.views > 0
					ORDER BY views DESC', 
					$this->datetimeToDB(strtotime('-' . $months . ' months'))),
					$journalId,
					$num);
		} else {
			$result =& $this->retrieveLimit(
					'SELECT a.article_id
					FROM published_articles pa INNER JOIN articles a ON (a.article_id = pa.article_id)
					WHERE a.journal_id = ? AND
					views > 0
					ORDER BY views DESC',
					$journalId,
					$num);
		}
				
		while (!$result->EOF) {
			$row = $result->GetRowAssoc(false);
			$returner[] =& $publishedArticleDao->getPublishedArticleByArticleId($row['article_id']);
			$result->moveNext();
		}
		
		$result->Close();
		unset($result);

		return $returner;
	}

}

?>