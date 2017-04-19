<?php /* Smarty version 2.6.26, created on 2015-03-26 14:19:24
         compiled from controllers/grid/citation/citationExport.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/grid/citation/citationExport.tpl', 30, false),array('function', 'translate', 'controllers/grid/citation/citationExport.tpl', 45, false),array('function', 'html_options', 'controllers/grid/citation/citationExport.tpl', 69, false),array('modifier', 'escape', 'controllers/grid/citation/citationExport.tpl', 83, false),)), $this); ?>

<div id="citationEditorExportCanvas" class="canvas">
	<div id="citationEditorExportPane" class="pane text-pane">
		<?php if ($this->_tpl_vars['errorMessage']): ?>
			<div class="help-message">
				<?php echo $this->_tpl_vars['errorMessage']; ?>

			</div>
		<?php else: ?>
			<script type="text/javascript">
				$(function() {
					// Activate the export filter selection drop-down boxes.
					$('#exportCitationForm .select')
						.change(function() {
							// Check whether a filter has been selected.
							// (The regex below deliberately excludes
							// the default value '-1').
							var filterId = $(this).val();
							if (/^[0-9]+$/.test(filterId)) {
								var $throbberId = $('#citationEditorExportPane');
								$throbberId.triggerHandler('actionStart');
								$.post(
									'<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'exportCitations'), $this);?>
',
									{
										'assocId': <?php echo $this->_tpl_vars['assocId']; ?>
,
										'filterId': filterId
									},
									function(jsonData) {
										$throbberId.triggerHandler('actionStop');
										if (jsonData !== null && jsonData.status === true) {
											$('#citationEditorExportCanvas').replaceWith(jsonData.content);
										}
									},
									'json'
								);
							} else {
								$(this).val($(this).data('original-value'));
								alert('<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.citations.editor.export.filterSelectionError"), $this);?>
');
							}
						})
						.each(function() {
							// Save the original selection.
							$(this).data('original-value', $(this).val()); 
						});

					// Activate throbber for tab reloading.
					actionThrobber('#citationEditorExportPane');

					// Activate the "select all" link.
					$('#markForExport').click(function() {
						$('#citationEditorExportPane .scrollable').selectRange();
						return false;
					});
				});
			</script>
			<form name="exportCitationForm" id="exportCitationForm" method="post" action="" >
				<br />
				<p>
					<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.citations.editor.export.filterSelectionDescription"), $this);?>
</p>
					<select class="field select" name="filterId" id="xmlExportFilterSelect">
						<option value="-1"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.citations.editor.export.pleaseSelectXmlFilter"), $this);?>
</option>
						<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['xmlExportFilters'],'selected' => $this->_tpl_vars['exportFilterId']), $this);?>

						<option value="-1">&nbsp;</option>
						<option value="-1"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.citations.editor.export.pleaseSelectPlaintextFilter"), $this);?>
</option>
						<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['textExportFilters'],'selected' => $this->_tpl_vars['exportFilterId']), $this);?>

					</select>
				</p>
			</form>
		
			<?php if ($this->_tpl_vars['exportOutput']): ?>
				<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.citations.editor.export.exportDescription"), $this);?>
</p>
				
				<div class="scrollable">	
					--<p/>
					<?php if ($this->_tpl_vars['exportFilterType'] == 'xml'): ?>
						<pre><?php echo ((is_array($_tmp=$this->_tpl_vars['exportOutput'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'htmlall')); ?>
</pre>
					<?php else: ?>
						<?php echo $this->_tpl_vars['exportOutput']; ?>

					<?php endif; ?>
					--
				</div>
			<?php endif; ?>
		<?php endif; ?>
	</div>
</div>

