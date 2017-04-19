<?php /* Smarty version 2.6.26, created on 2016-12-07 16:54:04
         compiled from file:/var/www/repositorio/plugins/generic/sword/settingsForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:/var/www/repositorio/plugins/generic/sword/settingsForm.tpl', 16, false),array('function', 'plugin_url', 'file:/var/www/repositorio/plugins/generic/sword/settingsForm.tpl', 20, false),array('function', 'url', 'file:/var/www/repositorio/plugins/generic/sword/settingsForm.tpl', 32, false),array('modifier', 'escape', 'file:/var/www/repositorio/plugins/generic/sword/settingsForm.tpl', 53, false),array('modifier', 'to_array', 'file:/var/www/repositorio/plugins/generic/sword/settingsForm.tpl', 59, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "plugins.generic.sword.displayName"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>

<div id="swordSettings">
<div id="description"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.sword.description"), $this);?>
</div>

<div class="separator">&nbsp;</div>

<form method="post" action="<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'settings'), $this);?>
">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.sword.settings"), $this);?>
</h3>

<table width="100%" class="data">
	<tr valign="top">
		<td width="10%" class="label" align="right"><input type="checkbox" name="allowAuthorSpecify" id="allowAuthorSpecify" <?php if ($this->_tpl_vars['allowAuthorSpecify']): ?>checked="checked" <?php endif; ?>/></td>
		<td width="90%" class="value"><label for="allowAuthorSpecify"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.sword.settings.allowAuthorSpecify"), $this);?>
</label></td>
	</tr>
</table>

<input type="submit" name="save" class="button defaultButton" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
"/> <input type="button" class="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" onclick="document.location='<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'plugin'), $this);?>
';"/>
</form>
</div><!-- swordSettings -->

<div id="depositPoints">
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.sword.settings.depositPoints"), $this);?>
</h3>

<table width="100%" class="listing">
	<tr>
		<td colspan="3" class="headseparator">&nbsp;</td>
	</tr>
	<tr class="heading" valign="bottom">
		<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.importexport.sword.depositPoint"), $this);?>
</td>
		<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.type"), $this);?>
</td>
		<td width="15%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.action"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="3" class="headseparator">&nbsp;</td>
	</tr>
<?php $_from = $this->_tpl_vars['depositPoints']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['depositPoints'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['depositPoints']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['depositPoint']):
        $this->_foreach['depositPoints']['iteration']++;
?>
	<tr valign="top">
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['depositPoint']['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
		<td>
			<?php $this->assign('depositPointType', $this->_tpl_vars['depositPoint']['type']); ?>
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['depositPointTypes'][$this->_tpl_vars['depositPointType']]), $this);?>

		</td>
		<td>
			<a class="action" href="<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => ((is_array($_tmp='editDepositPoint')) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['key']) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['key']))), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.edit"), $this);?>
</a>&nbsp;|&nbsp;<a class="action" href="<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => ((is_array($_tmp='deleteDepositPoint')) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['key']) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['key']))), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
</a>
		</td>
	</tr>
	<?php if (! ($this->_foreach['depositPoints']['iteration'] == $this->_foreach['depositPoints']['total'])): ?>
		<tr valign="top">
			<td colspan="3" class="separator">&nbsp;</td>
		</tr>
	<?php endif; ?>
<?php endforeach; else: ?>
	<tr valign="top">
		<td colspan="3" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>
</td>
	</tr>
<?php endif; unset($_from); ?>
	<tr valign="top">
		<td colspan="3" class="endseparator">&nbsp;</td>
	</tr>
</table>

<p><a class="action" href="<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'createDepositPoint'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.sword.depositPoints.create"), $this);?>
</a></p>

<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.sword.depositPoints.type.description"), $this);?>


</div><!-- depositPoints -->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>