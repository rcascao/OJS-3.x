<?php

/**
 * @defgroup plugins_statisticCharts
 */
 
/**
 * @file plugins/generic/statisticCharts/index.php
 *
 * Copyright (c) 2013 Fran Mañez <fran.upc@gmail.com> - Universitat Politècnica de Catalunya UPC
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 * 
 * IMPORTANT: this plugin depends on 'Counter Plugin'. Only work if 'Counter plugin' is activated.
 *
 * @ingroup plugins_statisticCharts
 * @brief Wrapper for statisticCharts plugin.
 *
 */

require_once('StatisticChartsPlugin.inc.php');

return new StatisticChartsPlugin();

?>
