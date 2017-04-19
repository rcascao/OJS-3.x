<?php /* Smarty version 2.6.26, created on 2016-10-19 17:00:08
         compiled from file:/var/www/repositorio/plugins/generic/phpMyVisites/settingsForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:/var/www/repositorio/plugins/generic/phpMyVisites/settingsForm.tpl', 16, false),array('function', 'plugin_url', 'file:/var/www/repositorio/plugins/generic/phpMyVisites/settingsForm.tpl', 22, false),array('function', 'fieldLabel', 'file:/var/www/repositorio/plugins/generic/phpMyVisites/settingsForm.tpl', 27, false),array('modifier', 'escape', 'file:/var/www/repositorio/plugins/generic/phpMyVisites/settingsForm.tpl', 28, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "plugins.generic.phpmv.manager.phpmvSettings"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>

<div id="phpMyVisitesSettings">
<div id="description"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.phpmv.manager.settings.description"), $this);?>
</div>

<div class="separator"></div>

<br />

<form method="post" action="<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'settings'), $this);?>
">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table width="100%" class="data">
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'phpmvUrl','required' => 'true','key' => "plugins.generic.phpmv.manager.settings.phpmvUrl"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="phpmvUrl" id="phpmvUrl" value="<?php if ($this->_tpl_vars['phpmvUrl']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['phpmvUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php else: ?>http://<?php endif; ?>" size="30" maxlength="255" class="textField" />
		<br />
		<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.phpmv.manager.settings.phpmvUrlInstructions"), $this);?>
</span>
	</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'phpmvSiteId','required' => 'true','key' => "plugins.generic.phpmv.manager.settings.phpmvSiteId"), $this);?>
</td>
		<td class="value"><input type="text" name="phpmvSiteId" id="phpmvSiteId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['phpmvSiteId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="10" maxlength="10" class="textField" />
		<br />
		<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.phpmv.manager.settings.phpmvSiteIdInstructions"), $this);?>
</span>
	</td>
	</tr>
</table>

<br />

<input type="submit" name="save" class="button defaultButton" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
"/><input type="button" class="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
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