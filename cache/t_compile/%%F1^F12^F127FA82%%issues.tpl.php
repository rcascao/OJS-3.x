<?php /* Smarty version 2.6.26, created on 2016-12-11 14:57:29
         compiled from file:/var/www/repositorio/plugins/importexport/mets/issues.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'plugin_url', 'file:/var/www/repositorio/plugins/importexport/mets/issues.tpl', 59, false),array('function', 'translate', 'file:/var/www/repositorio/plugins/importexport/mets/issues.tpl', 61, false),array('function', 'page_info', 'file:/var/www/repositorio/plugins/importexport/mets/issues.tpl', 129, false),array('function', 'page_links', 'file:/var/www/repositorio/plugins/importexport/mets/issues.tpl', 130, false),array('modifier', 'escape', 'file:/var/www/repositorio/plugins/importexport/mets/issues.tpl', 77, false),array('modifier', 'strip_unsafe_html', 'file:/var/www/repositorio/plugins/importexport/mets/issues.tpl', 110, false),array('modifier', 'nl2br', 'file:/var/www/repositorio/plugins/importexport/mets/issues.tpl', 110, false),array('modifier', 'date_format', 'file:/var/www/repositorio/plugins/importexport/mets/issues.tpl', 111, false),array('modifier', 'default', 'file:/var/www/repositorio/plugins/importexport/mets/issues.tpl', 111, false),array('modifier', 'to_array', 'file:/var/www/repositorio/plugins/importexport/mets/issues.tpl', 113, false),array('block', 'iterate', 'file:/var/www/repositorio/plugins/importexport/mets/issues.tpl', 107, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "plugins.importexport.METSExport.export.selectIssue"); ?><?php echo ''; ?><?php $this->assign('pageCrumbTitle', "plugins.importexport.METSExport.export.selectIssue"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<script type="text/javascript">
<?php echo '
<!--


function selectAll() {
        document.getElementById(\'issues\').selButton.value = "Unselect All";
        document.getElementById(\'issues\').selButton.attributes["onclick"].value = "javascript:unSelectAll();";
	var elements = document.getElementById(\'issues\').elements;
	for (var i=0; i < elements.length; i++) {
		if (elements[i].name == \'issueId[]\') {
			elements[i].checked = true;
		}
	}
}
function unSelectAll() {
        document.getElementById(\'issues\').selButton.value = "Select All";
        document.getElementById(\'issues\').selButton.attributes["onclick"].value  = "javascript:selectAll();";
	var elements = document.getElementById(\'issues\').elements;
	for (var i=0; i < elements.length; i++) {
		if (elements[i].name == \'issueId[]\') {
			elements[i].checked = false;
		}
	}
}
function SubmitIfAnyIsChecked() {
	var elements = document.getElementById(\'issues\').elements;
	for (var i=0; i < elements.length; i++) {
		if (elements[i].name == \'issueId[]\') {
			if(elements[i].checked){
                            document.getElementById(\'issues\').submit();
                            return true;
                         }
		}
	}
        alert("No Issues selected");
        return false;
}
// -->
'; ?>

</script>

<form action="<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'exportIssues'), $this);?>
" method="post" id="issues">

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.importexport.METSExport.settings"), $this);?>
</h3>

<table width="100%" class="data">
	<tr valign="top">
		<td width="60%" class="label" align="right"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.importexport.METSExport.settings.FLocat"), $this);?>
</td>
		<td width="40%" class="value"><input type="radio" name="contentWrapper" id="contentWrapper" value="FLocat" checked="checked" /></td>
	</tr>
	<tr valign="top">
		<td class="label" align="right"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.importexport.METSExport.settings.FContent"), $this);?>
</td>
		<td class="value"><input type="radio" name="contentWrapper" id="contentWrapper" value="FContent" /></td>
	</tr>
	<tr>
		<td colspan="2"><div class="separator">&nbsp;</div></td>
	</tr>
	<tr valign="top">
		<td class="label" align="right"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.importexport.METSExport.settings.organization"), $this);?>
</td>
		<td class="value"><input type="text" name="organization" id="organization" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['organization'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="20" maxlength="50" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td class="label" align="right"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.importexport.METSExport.settings.preservationLevel"), $this);?>
</td>
		<td class="value">
		<input type="text" name="preservationLevel" id="preservationLevel" value="1" size="2" maxlength="1" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td class="label" align="right"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.importexport.METSExport.settings.exportSuppFiles"), $this);?>
</td>
		<td class="value"><input type="checkbox" name="exportSuppFiles" id="exportSuppFiles" value="on" /></td>
	</tr>
</table>

<br />

<table width="100%" class="listing">
	<tr>
		<td colspan="5" class="headseparator">&nbsp;</td>
	</tr>
	<tr class="heading" valign="bottom">
		<td width="5%">&nbsp;</td>
		<td width="60%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.issue"), $this);?>
</td>
		<td width="15%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.published"), $this);?>
</td>
		<td width="15%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.numArticles"), $this);?>
</td>
		<td width="5%" align="right"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.action"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="5" class="headseparator">&nbsp;</td>
	</tr>

	<?php $this->_tag_stack[] = array('iterate', array('from' => 'issues','item' => 'issue')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<tr valign="top">
		<td><input type="checkbox" name="issueId[]" value="<?php echo $this->_tpl_vars['issue']->getId(); ?>
"/></td>
		<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['issue']->getIssueIdentification())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
		<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['issue']->getDatePublished())) ? $this->_run_mod_handler('date_format', true, $_tmp, ($this->_tpl_vars['dateFormatShort'])) : smarty_modifier_date_format($_tmp, ($this->_tpl_vars['dateFormatShort']))))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getNumArticles())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
		<td align="right"><a href="<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => ((is_array($_tmp='exportIssue')) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['issue']->getId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['issue']->getId()))), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.export"), $this);?>
</a></td>
	</tr>
	<tr>
		<td colspan="5" class="<?php if ($this->_tpl_vars['issues']->eof()): ?>end<?php endif; ?>separator">&nbsp;</td>
	</tr>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php if ($this->_tpl_vars['issues']->wasEmpty()): ?>
	<tr>
		<td colspan="5" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.noIssues"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="5" class="endseparator">&nbsp;</td>
	</tr>
	<?php else: ?>
	<tr>
		<td colspan="2" align="left"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['issues']), $this);?>
</td>
		<td colspan="3" align="right"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('name' => 'issues','iterator' => $this->_tpl_vars['issues']), $this);?>
</td>
	</tr>
	<?php endif; ?>
</table>

<p><input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.export"), $this);?>
" class="button defaultButton" onclick="SubmitIfAnyIsChecked();return false;"/>&nbsp;<input type="button" id="selButton" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.selectAll"), $this);?>
" class="button" onclick="javascript:selectAll();" /></p>
</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>