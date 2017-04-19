<?php /* Smarty version 2.6.26, created on 2016-12-09 14:11:54
         compiled from file:/var/www/repositorio/plugins/generic/xmlGalley/settingsForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:/var/www/repositorio/plugins/generic/xmlGalley/settingsForm.tpl', 17, false),array('function', 'plugin_url', 'file:/var/www/repositorio/plugins/generic/xmlGalley/settingsForm.tpl', 23, false),array('function', 'fieldLabel', 'file:/var/www/repositorio/plugins/generic/xmlGalley/settingsForm.tpl', 34, false),array('modifier', 'escape', 'file:/var/www/repositorio/plugins/generic/xmlGalley/settingsForm.tpl', 58, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "plugins.generic.xmlGalley.displayName"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<div id="xmlGalleySettings">
<div id="description"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.xmlGalley.settings.description"), $this);?>
</div>

<div class="separator">&nbsp;</div>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.xmlGalley.manager.settings"), $this);?>
</h3>

<form method="post" action="<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'settings'), $this);?>
" enctype="multipart/form-data">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if ($this->_tpl_vars['testSuccess']): ?>
<p>
	<div style="font-weight: bold; color: green;"><ul><li><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.xmlGalley.settings.externalXSLTSuccess"), $this);?>
</li></ul></div>
</p>
<?php endif; ?>

<table width="100%" class="data">
	<tr valign="top">
		<td width="100%" class="label" colspan="2"><h4 id="XSLTrenderer"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'XSLTrenderer','required' => 'true','key' => "plugins.generic.xmlGalley.settings.renderer"), $this);?>
:</h4></td>
	</tr>
	<tr valign="top">
		<td width="10%" class="label" align="right"><input type="radio" name="XSLTrenderer" id="XSLTrenderer-PHP5" value="PHP5" <?php if (! $this->_tpl_vars['xsltPHP5']): ?>disabled="disabled"<?php endif; ?> <?php if ($this->_tpl_vars['XSLTrenderer'] == 'PHP5'): ?>checked="checked" <?php endif; ?>/></td>
		<td width="90%" class="value"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.xmlGalley.settings.PHP5"), $this);?>

		<?php if (! $this->_tpl_vars['xsltPHP5']): ?><span class="formError"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.xmlGalley.settings.notAvailable"), $this);?>
</span><?php endif; ?>
		</td>
	</tr>
	<tr valign="top">
		<td width="10%" class="label" align="right"><input type="radio" name="XSLTrenderer" id="XSLTrenderer-PHP4" value="PHP4" <?php if (! $this->_tpl_vars['xsltPHP4']): ?>disabled="disabled"<?php endif; ?> <?php if ($this->_tpl_vars['XSLTrenderer'] == 'PHP4'): ?>checked="checked" <?php endif; ?>/></td>
		<td width="90%" class="value"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.xmlGalley.settings.PHP4"), $this);?>

		<?php if (! $this->_tpl_vars['xsltPHP4']): ?><span class="formError"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.xmlGalley.settings.notAvailable"), $this);?>
</span><?php endif; ?>
		</td>
	</tr>
	<tr valign="top">
		<td width="10%" class="label" align="right"><input type="radio" name="XSLTrenderer" id="XSLTrenderer-external" value="external" <?php if ($this->_tpl_vars['XSLTrenderer'] == 'external'): ?>checked="checked" <?php endif; ?>/></td>
		<td width="90%" class="value"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.xmlGalley.settings.externalXSLT"), $this);?>
</td>
	</tr>
	<tr valign="top">
		<td width="10%" class="label">&nbsp;</td>
		<td width="90%" class="value"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.xmlGalley.settings.externalXSLTDescription"), $this);?>
</td>
	</tr>
	<tr valign="top">
		<td width="10%" class="label">&nbsp;</td>
		<td width="90%" class="value"><input type="text" name="externalXSLT" id="externalXSLT" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['externalXSLT'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="60" maxlength="90" class="textField" /></td>
	</tr>

<?php if ($this->_tpl_vars['XSLTrenderer'] == 'external'): ?>
	<tr valign="top">
		<td width="10%" class="label">&nbsp;</td>
		<td width="90%" class="value">
		<a href="<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'test'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.xmlGalley.settings.externalXSLTTest"), $this);?>
</a>
		</td>
	</tr>
<?php endif; ?>

</table>

<div class="separator">&nbsp;</div>

<table width="100%" class="data">
	<tr valign="top">
		<td width="100%" class="label" colspan="2"><h4 id="XSLstylesheet"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'XSLstylesheet','required' => 'true','key' => "plugins.generic.xmlGalley.settings.stylesheet"), $this);?>
:</h4></td>
	</tr>
	<tr valign="top">
		<td width="10%" class="label" align="right"><input type="radio" name="XSLstylesheet" id="XSLstylesheet-NLM" value="NLM" <?php if ($this->_tpl_vars['XSLstylesheet'] == 'NLM'): ?>checked="checked" <?php endif; ?>/></td>
		<td width="90%" class="value"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.xmlGalley.settings.xslNLM"), $this);?>
</td>
	</tr>
	<tr valign="top">
		<td width="10%" class="label" align="right"><input type="checkbox" name="nlmPDF" id="nlmPDF" value="1"<?php if ($this->_tpl_vars['nlmPDF'] == 1): ?> checked="checked"<?php endif; ?> /></td>
		<td width="90%" class="value"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.xmlGalley.settings.xslFOP"), $this);?>
</td>
	</tr>
	<tr valign="top">
		<td width="10%" class="label">&nbsp;</td>
		<td width="90%" class="value"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.xmlGalley.settings.xslFOPDescription"), $this);?>
</td>
	</tr>
	<tr valign="top">
		<td width="10%" class="label">&nbsp;</td>
		<td width="90%" class="value"><input type="text" name="externalFOP" id="externalFOP" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['externalFOP'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="60" maxlength="90" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td width="10%" class="label" align="right"><input type="radio" name="XSLstylesheet" id="XSLstylesheet-custom" value="custom" <?php if ($this->_tpl_vars['XSLstylesheet'] == 'custom'): ?>checked="checked" <?php endif; ?>/></td>
		<td width="90%" class="value"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.xmlGalley.settings.customXSL"), $this);?>
</td>
	</tr>
	<tr valign="top">
		<td width="10%" />
		<td width="90%" class="value"><input type="file" name="customXSL" class="uploadField" /> <input type="submit" name="uploadCustomXSL" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.upload"), $this);?>
" class="button" /></td>
	</tr>

<?php if ($this->_tpl_vars['customXSL']): ?>
	<tr valign="top">
		<td width="10%" class="label">&nbsp;</td>
		<td width="90%" class="value"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileName"), $this);?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['customXSL'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
 <input type="submit" name="deleteCustomXSL" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
" class="button" /></td>
	</tr>
<?php endif; ?>

</table>

<br />

<input type="submit" name="save" class="button defaultButton" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
"/> <input type="button" class="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" onclick="history.go(-1)"/>
</form>

<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>