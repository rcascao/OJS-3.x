<?php

/**
 * @defgroup plugins_blocks_popularArtilces
 */
 
/**
 * @file plugins/blocks/popularArticles/index.php
 *
 * Copyright (c) 2000-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_blocks_popularArtilces
 * @brief Wrapper for MostPopularArticlesBlockPlugin block plugin.
 *
 */


require_once('MostPopularArticlesBlockPlugin.inc.php');

return new MostPopularArticlesBlockPlugin();

?>