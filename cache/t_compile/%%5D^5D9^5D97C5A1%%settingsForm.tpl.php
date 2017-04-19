<?php /* Smarty version 2.6.26, created on 2016-12-09 14:10:48
         compiled from file:/var/www/repositorio/plugins/generic/stopForumSpam/settingsForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:/var/www/repositorio/plugins/generic/stopForumSpam/settingsForm.tpl', 16, false),array('function', 'plugin_url', 'file:/var/www/repositorio/plugins/generic/stopForumSpam/settingsForm.tpl', 22, false),array('function', 'fieldLabel', 'file:/var/www/repositorio/plugins/generic/stopForumSpam/settingsForm.tpl', 27, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "plugins.generic.stopForumSpam.manager.stopForumSpamSettings"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>

<div id="stopForumSpamSettings">
<div id="description"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.stopForumSpam.manager.settings.description"), $this);?>
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
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'checkIp','key' => "plugins.generic.stopForumSpam.manager.settings.checkIp"), $this);?>
</td>
		<td width="80%" class="value"><input type="checkbox" name="checkIp" id="checkIp" value="checkIp" <?php if ($this->_tpl_vars['checkIp']): ?>checked="checked" <?php endif; ?>/></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'checkEmail','key' => "plugins.generic.stopForumSpam.manager.settings.checkEmail"), $this);?>
</td>
		<td width="80%" class="value"><input type="checkbox" name="checkEmail" id="checkEmail" value="checkEmail" <?php if ($this->_tpl_vars['checkEmail']): ?>checked="checked" <?php endif; ?>/></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'checkUsername','key' => "plugins.generic.stopForumSpam.manager.settings.checkUsername"), $this);?>
</td>
		<td width="80%" class="value"><input type="checkbox" name="checkUsername" id="checkUsername" value="checkUsername" <?php if ($this->_tpl_vars['checkUsername']): ?>checked="checked" <?php endif; ?>/></td>
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