<?php /* Smarty version 2.6.26, created on 2015-10-28 13:57:30
         compiled from file:/var/www/repositorio/plugins/generic/statisticCharts/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:/var/www/repositorio/plugins/generic/statisticCharts/index.tpl', 40, false),array('modifier', 'date', 'file:/var/www/repositorio/plugins/generic/statisticCharts/index.tpl', 293, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "plugins.generic.statistics"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>

<head>
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/plugins/generic/statisticCharts/js/media/css/demo_page.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/plugins/generic/statisticCharts/js/media/css/demo_table_jui.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/plugins/generic/statisticCharts/js/media/css/demo_table.css" type="text/css" />

<link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/plugins/generic/statisticCharts/css/statisticCharts.css" type="text/css" />
<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" />
</head>

<script language="javascript">
	<?php echo '
	
	var l = window.location;
	var base_location = l;
	var base_url = l.protocol + "//" + l.host + "/" + l.pathname.split(\'/\')[1];
	var typeChart = "column";

	$(document).ready(function() {
		
		/***********************************************************
		 *           			JQuery Functions
		 ***********************************************************/

		//Load data asynchronously using jQuery. On success, add the data to the options and initiate the chart.
		jQuery.fn.updateChartMonth = function() {
			optionsMonth.title.text = \''; ?>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.statistics.querysToTheJournal"), $this);?>
<?php echo ' \'+$(\'#year\').val();

			jQuery.getJSON(base_location+\'/getStatisticsByMonth?year=\'+$(\'#year\').val(), null, function(data) {

				optionsMonth.series = new Array(data.length);

				for (var i = 0; i < data.length; i++){
					optionsMonth.series[i] = new Object();
					optionsMonth.series[i].name = data[i].name;
					optionsMonth.series[i].data = data[i].values;
					optionsMonth.series[i].visible = data[i].visible;
				}
				
				chartMonth = new Highcharts.Chart(optionsMonth);
			});
		};


		//Load data asynchronously using jQuery. On success, add the data to the options and initiate the chart.
		jQuery.fn.updateChartByYear = function() {

			$yearSelected = $(\'#year\').val();
			$yearSelected5 = $yearSelected-5;

			optionsByYear.title.text = \''; ?>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.statistics.querysFrom"), $this);?>
<?php echo ' \'+$yearSelected5+\' '; ?>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.statistics.querysTo"), $this);?>
<?php echo ' \'+$yearSelected,
			optionsByYear.xAxis.categories = [$yearSelected-5,$yearSelected-4,$yearSelected-3,$yearSelected-2,$yearSelected-1,$yearSelected];

			jQuery.getJSON(base_location+\'/getStatisticsByYear?year=\'+$(\'#year\').val(), null, function(data) {

				optionsByYear.series = new Array(data.length);

				for (var i = 0; i < data.length; i++){
					optionsByYear.series[i] = new Object();
					optionsByYear.series[i].name = data[i].name;
					optionsByYear.series[i].data = data[i].values;
					optionsByYear.series[i].visible = data[i].visible;
				}
						
				chartByYear = new Highcharts.Chart(optionsByYear);
			});
		};


		/***********************************************************
		 *           			Charts
		 ***********************************************************/
		
		//Chart Statistics by month
		var chartMonth;
		var optionsMonth = {
			chart: {
	            renderTo: \'chartMonth\',
	            type: typeChart,
	            marginBottom: 80
	        },
	        title: {
	        	text: \''; ?>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.statistics.querysToTheJournal"), $this);?>
<?php echo '\'+$(\'#year\').val(),
	            x: -20 //center
	        },
	        subtitle: {
	            text: \''; ?>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.statistics.byMonth"), $this);?>
<?php echo '\',
	            x: -20
	        },
	        xAxis: {
	            categories: [\'Jan\', \'Feb\', \'Mar\', \'Apr\', \'May\', \'Jun\',
	                \'Jul\', \'Aug\', \'Sep\', \'Oct\', \'Nov\', \'Dec\']
	        },
	        yAxis: {
	            title: {
	        		text: \''; ?>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.statistics.queryNumbers"), $this);?>
<?php echo '\'
	            },
	            labels: {
	                formatter: function() {
	                    return this.value.toLocaleString();
	                }
	            },
	            min: 0,
	            plotLines: [{
	                value: 0,
	                width: 1,
	                color: \'#808080\'
	            }]
	        },
	        plotOptions: {
                column: {
                    stacking: \'\'
                }
            },
	        tooltip: {
	            formatter: function() {
	                    return \'<b>\'+ this.series.name +\'</b><br/>\'+
	                    this.x +\': \'+ this.y.toLocaleString();
	            }
	        },
	       
	        series: []
		}

		//Call function to get JSON data for chart
		//Load data asynchronously using jQuery. On success, add the data to the options and initiate the chart.
		jQuery.fn.updateChartMonth ();


		//*******************************************************************************************
		
		//Chart statistics year
		var chartByYear;
		var optionsByYear = {
			chart: {
	            renderTo: \'chartByYear\',
	            type: typeChart,
	            marginBottom: 80
	        },
	        title: {
	            text: \'\',
	            x: -20 //center
	        },
	        subtitle: {
	            text: \''; ?>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.statistics.lastYears2"), $this);?>
<?php echo '\',
	            x: -20
	        },
	        xAxis: {
	        	categories: []
	        },
	        yAxis: {
	            title: {
	        		text: \''; ?>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.statistics.queryNumbers"), $this);?>
<?php echo '\'
	            },
	            labels: {
	                formatter: function() {
	                    return this.value.toLocaleString();
	                }
	            },
	            min: 0,
	            plotLines: [{
	                value: 0,
	                width: 1,
	                color: \'#808080\'
	            }]
	        },
	        plotOptions: {
                column: {
                    stacking: \'\'
                }
            },
	        tooltip: {
	            formatter: function() {
	                    return \'<b>\'+ this.series.name +\'</b><br/>\'+
	                    this.x +\': \'+ this.y.toLocaleString();
	            }
	        },
	        series: []
		}


		//Call function to get JSON data for chart
		//Load data asynchronously using jQuery. On success, add the data to the options and initiate the chart.
		jQuery.fn.updateChartByYear ();


		/***********************************************************
		 *           			TOOLBAR JQUERY
		 ***********************************************************/

		 $(\'#tabs\').tabs({

			show: function(event, ui) {
				chartMonth = new Highcharts.Chart(optionsMonth);
		     	chartByYear = new Highcharts.Chart(optionsByYear);

			 	if(ui.index == 0 || ui.index == 1){
			 		$("#typeChart").show();
			 	}else if(ui.index == 2){
			 		$("#typeChart").hide();
				}
		    }
		 });

		 
	     $( "#prev" ).button({
	         text: false,
	         icons: {
	             primary: "ui-icon-seek-prev"
	         }
	     })
	     .click(function() {
	    	 chartMonth.showLoading();
	    	 chartByYear.showLoading();
		     
		     $("#year").val($(\'#year\').val()-1);
		     $(\'this\').updateChartMonth ();
		     $(\'this\').updateChartByYear ();

	     });
	     
	     $( "#next" ).button({
	         text: false,
	         icons: {
	             primary: "ui-icon-seek-next"
	         }
	     })
	     .click(function() {
	    	 chartMonth.showLoading();
	    	 chartByYear.showLoading();
		     
		     $("#year").val($(\'#year\').val()-0+1);
		     $(\'this\').updateChartMonth ();
		     $(\'this\').updateChartByYear ();
	     });
	     
	     $( "#typeChart" ).buttonset();


	     $("#typeChart :radio").click(function(){
		     if($(this).attr("id") == "column"){

		    	 optionsMonth.chart.type = \'column\';
		    	 optionsMonth.plotOptions.column.stacking = \'\';

		    	 optionsByYear.chart.type = \'column\';
		    	 optionsByYear.plotOptions.column.stacking = \'\';

		    	 
			 }else if($(this).attr("id") == "stack"){

				 optionsMonth.chart.type = \'column\';
				 optionsMonth.plotOptions.column.stacking = \'normal\';

				 optionsByYear.chart.type = \'column\';
				 optionsByYear.plotOptions.column.stacking = \'normal\';

				 
			 }else if($(this).attr("id") == "line"){

				 optionsMonth.chart.type = \'line\';
				 optionsMonth.plotOptions.column.stacking = \'\';

				 optionsByYear.chart.type = \'line\';
				 optionsByYear.plotOptions.column.stacking = \'\';
				 
			 }
		     chartMonth = new Highcharts.Chart(optionsMonth);
		     chartByYear = new Highcharts.Chart(optionsByYear);
	   	});

	});

 	'; ?>

</script>


<span id="toolbar" class="ui-widget-header ui-corner-all">
    <button id="prev">prev</button>
    <input id="year" name="valueYear" class="inputYear" disabled="disabled" type="text" value="<?php echo ((is_array($_tmp='Y')) ? $this->_run_mod_handler('date', true, $_tmp) : date($_tmp)); ?>
" />
    <button id="next">next</button>
 
    <span id="typeChart">
        <input type="radio" id="column" name="typeChart" checked="checked" /><label for="column"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.statistics.columns"), $this);?>
</label>
        <input type="radio" id="stack" name="typeChart" /><label for="stack"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.statistics.columnsStack"), $this);?>
</label>
        <input type="radio" id="line" name="typeChart" /><label for="line"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.statistics.lines"), $this);?>
</label>
    </span>
 
</span>

<br/><br/>

<div id="tabs">
    <ul>
        <li><a href="#tabs-2"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.statistics.lastYears"), $this);?>
</a></li>
        <li><a href="#tabs-1"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.statistics.monthly"), $this);?>
</a></li>
    </ul>
    <div id="tabs-2">
		<div id="chartByYear" style="min-width: 400px; height: 400px; margin: 0 auto"></div>
    </div>
    <div id="tabs-1" >
		<div id="chartMonth" style="min-width: 400px; height: 400px; margin: 0 auto"></div>
    </div>
</div>
<br/>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>