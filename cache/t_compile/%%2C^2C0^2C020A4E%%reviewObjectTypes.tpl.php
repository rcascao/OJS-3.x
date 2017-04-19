<?php /* Smarty version 2.6.26, created on 2017-01-09 17:54:28
         compiled from file:/var/www/repositorio/plugins/generic/objectsForReview/templates/editor/reviewObjectTypes.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:/var/www/repositorio/plugins/generic/objectsForReview/templates/editor/reviewObjectTypes.tpl', 31, false),array('function', 'url', 'file:/var/www/repositorio/plugins/generic/objectsForReview/templates/editor/reviewObjectTypes.tpl', 34, false),array('function', 'page_info', 'file:/var/www/repositorio/plugins/generic/objectsForReview/templates/editor/reviewObjectTypes.tpl', 82, false),array('function', 'page_links', 'file:/var/www/repositorio/plugins/generic/objectsForReview/templates/editor/reviewObjectTypes.tpl', 83, false),array('function', 'html_options', 'file:/var/www/repositorio/plugins/generic/objectsForReview/templates/editor/reviewObjectTypes.tpl', 90, false),array('block', 'iterate', 'file:/var/www/repositorio/plugins/generic/objectsForReview/templates/editor/reviewObjectTypes.tpl', 47, false),array('modifier', 'escape', 'file:/var/www/repositorio/plugins/generic/objectsForReview/templates/editor/reviewObjectTypes.tpl', 52, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "plugins.generic.objectsForReview.editor.objectTypes"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<script type="text/javascript">
<?php echo '
<!--
function toggleChecked() {
	var elements = document.getElementById(\'reviewObjectTypesForm\').elements;
	for (var i=0; i < elements.length; i++) {
		if (elements[i].name == \'update[]\') {
			elements[i].checked = !elements[i].checked;
		}
	}
}
// -->
'; ?>

</script>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.objectsForReview.editor.objectTypes.description"), $this);?>
</p>

<div id="reviewObjectTypes">
<form id='reviewObjectTypesForm' action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'updateOrInstallReviewObjectTypes'), $this);?>
" method="post">
<table width="100%" class="listing">
	<tr>
		<td class="headseparator" colspan="3">&nbsp;</td>
	</tr>
	<tr class="heading" valign="bottom">
		<td width="3%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.objectsForReview.editor.objectTypes.update"), $this);?>
</td>
		<td width="72%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.objectsForReview.editor.objectTypes.name"), $this);?>
</td>
		<td width="25%" align="right"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.action"), $this);?>
</td>
	</tr>
	<tr>
		<td class="headseparator" colspan="3">&nbsp;</td>
	</tr>
<?php $this->_tag_stack[] = array('iterate', array('from' => 'results','item' => 'result','name' => 'reviewObjectTypes')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php $this->assign('typeKey', $this->_tpl_vars['result']['typeKey']); ?>
	<?php $this->assign('typeId', $this->_tpl_vars['result']['typeId']); ?>
	<?php $this->assign('typeName', $this->_tpl_vars['result']['typeName']); ?>
	<?php $this->assign('typeActive', $this->_tpl_vars['result']['typeActive']); ?>
	<tr valign="top" id="reviewobjecttype-<?php echo ((is_array($_tmp=$this->_tpl_vars['typeId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" class="data">
		<td><input type="checkbox" name="update[]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['typeId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"/></td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['typeName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
		<td align="right" class="nowrap">
			<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editReviewObjectType','path' => $this->_tpl_vars['typeId']), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.edit"), $this);?>
</a>&nbsp;|
			<?php echo ''; ?><?php if ($this->_tpl_vars['typeActive']): ?><?php echo '<a href="'; ?><?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'deactivateReviewObjectType','path' => $this->_tpl_vars['typeId']), $this);?><?php echo '" class="action">'; ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.deactivate"), $this);?><?php echo '</a>'; ?><?php else: ?><?php echo '<a href="'; ?><?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'activateReviewObjectType','path' => $this->_tpl_vars['typeId']), $this);?><?php echo '" class="action">'; ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.activate"), $this);?><?php echo '</a>'; ?><?php endif; ?><?php echo '&nbsp;|'; ?>

			<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'previewReviewObjectType','path' => $this->_tpl_vars['typeId']), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.preview"), $this);?>
</a>&nbsp;|
			<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'deleteReviewObjectType','path' => $this->_tpl_vars['typeId']), $this);?>
" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.objectsForReview.editor.objectType.confirmDelete"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'jsparam') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'jsparam'));?>
')" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
</a>
		</td>
	</tr>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<tr>
		<td colspan="3" class="endseparator">&nbsp;</td>
	</tr>
<?php if ($this->_tpl_vars['results']->wasEmpty()): ?>
	<tr>
		<td colspan="3" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.objectsForReview.editor.objectTypes.none"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="3" class="endseparator">&nbsp;</td>
	</tr>
<?php else: ?>
	<tr>
		<td colspan="2" align="left"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['results']), $this);?>
</td>
		<td align="right"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('anchor' => 'results','name' => 'reviewObjectTypes','iterator' => $this->_tpl_vars['results']), $this);?>
</td>
	</tr>
<?php endif; ?>
</table>

<?php if (! $this->_tpl_vars['results']->wasEmpty()): ?>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.objectsForReview.editor.objectTypes.updateLocales"), $this);?>
<p>
<p><select name="updateLocales[]" class="selectMenu" size="3" multiple><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['pluginLocales']), $this);?>
</select>&nbsp;<input type="submit" name="updateLocaleData" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.objectsForReview.editor.objectTypes.update"), $this);?>
" class="button defaultButton"/>&nbsp;<input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.selectAll"), $this);?>
" class="button" onclick="toggleChecked()" /></p>
<?php endif; ?>

<?php if ($this->_tpl_vars['missingReviewObjects']): ?>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.objectsForReview.editor.objectTypes.installObjects"), $this);?>
</p>
<p><select name="reviewObjects[]" class="selectMenu" size="3" multiple><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['missingReviewObjects']), $this);?>
</select>&nbsp;<select name="installLocales[]" class="selectMenu" size="3" multiple><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['pluginLocales']), $this);?>
</select>&nbsp;<input type="submit" name="installReviewObjects" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.objectsForReview.editor.objectTypes.install"), $this);?>
" class="button defaultButton"/></p>
<?php endif; ?>
</form>

<br />
<p><a class="action" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'createReviewObjectType'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.objectsForReview.editor.objectType.create"), $this);?>
</a></p>

</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
