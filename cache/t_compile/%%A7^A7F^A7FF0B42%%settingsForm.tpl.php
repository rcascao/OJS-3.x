<?php /* Smarty version 2.6.26, created on 2016-11-11 11:22:09
         compiled from file:/var/www/repositorio/plugins/generic/externalFeed/settingsForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'plugin_url', 'file:/var/www/repositorio/plugins/generic/externalFeed/settingsForm.tpl', 15, false),array('function', 'translate', 'file:/var/www/repositorio/plugins/generic/externalFeed/settingsForm.tpl', 15, false),array('modifier', 'escape', 'file:/var/www/repositorio/plugins/generic/externalFeed/settingsForm.tpl', 48, false),array('modifier', 'date_format', 'file:/var/www/repositorio/plugins/generic/externalFeed/settingsForm.tpl', 48, false),)), $this); ?>
<?php $this->assign('pageTitle', "plugins.generic.externalFeed.manager.settings"); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<ul class="menu">
	<li><a href="<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'feeds'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.externalFeed.manager.feeds"), $this);?>
</a></li>
	<li class="current"><a href="<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'settings'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.externalFeed.manager.settings"), $this);?>
</a></li>
</ul>

<br />

<table width="100%" class="listing">
	<tr>
		<td class="headseparator">&nbsp;</td>
	</tr>
	<tr>
		<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.externalFeed.settings.description"), $this);?>
</td>
	</tr>
	<tr>
		<td class="headseparator">&nbsp;</td>
	</tr>
</table>

<form method="post" action="<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'settings'), $this);?>
" enctype="multipart/form-data">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.externalFeed.settings.styleSheet"), $this);?>
</h4>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.externalFeed.settings.stylesheetDescription"), $this);?>
: <a href="<?php echo $this->_tpl_vars['defaultStyleSheetUrl']; ?>
" target="_blank"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.externalFeed.settings.defaultStyleSheet"), $this);?>
</a></p>

<table width="100%" class="data">
<tr valign="top">
	<td width="20%" class="label"><label for="externalFeedStyleSheet"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.externalFeed.settings.useStyleSheet"), $this);?>
</label></td>
	<td width="80%" class="value"><input type="file" name="externalFeedStyleSheet" id="externalFeedStyleSheet" class="uploadField" /> <input type="submit" name="uploadStyleSheet" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.upload"), $this);?>
" class="button" /></td>
</tr>
</table>

<?php if ($this->_tpl_vars['externalFeedStyleSheet']): ?>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileName"), $this);?>
: <a href="<?php echo $this->_tpl_vars['publicFilesDir']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['externalFeedStyleSheet']['uploadName'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'url')); ?>
" class="file"><?php echo ((is_array($_tmp=$this->_tpl_vars['externalFeedStyleSheet']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a> <?php echo ((is_array($_tmp=$this->_tpl_vars['externalFeedStyleSheet']['dateUploaded'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['datetimeFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['datetimeFormatShort'])); ?>
 <input type="submit" name="deleteStyleSheet" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
" class="button" />
<br />
<?php endif; ?>

<br />

<input type="submit" name="save" class="button defaultButton" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
"/><input type="button" class="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" onclick="history.go(-1)"/>
</form>

<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>