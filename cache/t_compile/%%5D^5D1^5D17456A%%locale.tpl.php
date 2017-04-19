<?php /* Smarty version 2.6.26, created on 2016-09-29 18:54:21
         compiled from file:/var/www/repositorio/plugins/generic/customLocale/locale.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:/var/www/repositorio/plugins/generic/customLocale/locale.tpl', 12, false),array('function', 'plugin_url', 'file:/var/www/repositorio/plugins/generic/customLocale/locale.tpl', 44, false),array('function', 'page_info', 'file:/var/www/repositorio/plugins/generic/customLocale/locale.tpl', 62, false),array('function', 'page_links', 'file:/var/www/repositorio/plugins/generic/customLocale/locale.tpl', 63, false),array('modifier', 'assign', 'file:/var/www/repositorio/plugins/generic/customLocale/locale.tpl', 12, false),array('modifier', 'escape', 'file:/var/www/repositorio/plugins/generic/customLocale/locale.tpl', 30, false),array('block', 'iterate', 'file:/var/www/repositorio/plugins/generic/customLocale/locale.tpl', 29, false),)), $this); ?>
<?php echo ''; ?><?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.customLocale.locale",'locale' => $this->_tpl_vars['locale']), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'pageTitleTranslated') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'pageTitleTranslated'));?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.customLocale.localeDescription"), $this);?>
</p>

<div id="localeFiles">

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.customLocale.localeFiles"), $this);?>
</h3>
<table class="listing" width="100%">
	<tr><td colspan="2" class="headseparator">&nbsp;</td></tr>
	<tr class="heading" valign="bottom">
		<td width="85%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.customLocale.file.filename"), $this);?>
</td>
		<td width="15%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.action"), $this);?>
</td>
	</tr>
	<tr><td colspan="2" class="headseparator">&nbsp;</td></tr>

<?php $this->_tag_stack[] = array('iterate', array('from' => 'localeFiles','item' => 'filename')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php $this->assign('filenameEscaped', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['filename'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'url')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'url'))); ?>
<?php if (file_exists ( $this->_tpl_vars['filename'] )): ?>
	<?php $this->assign('fileExists', 1); ?>
<?php else: ?>
	<?php $this->assign('fileExists', 0); ?>
<?php endif; ?>
	<tr valign="top">
		<td>
			<?php if ($this->_tpl_vars['fileExists']): ?>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['filename'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>

			<?php endif; ?>
		</td>
		<td>
			<?php if ($this->_tpl_vars['fileExists']): ?>
				<a href="<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'editLocaleFile','key' => $this->_tpl_vars['locale'],'file' => $this->_tpl_vars['filenameEscaped']), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.edit"), $this);?>
</a>
			<?php endif; ?>
		</td>
	</tr>
	<tr>
		<td colspan="2" class="<?php if ($this->_tpl_vars['localeFiles']->eof()): ?>end<?php endif; ?>separator">&nbsp;</td>
	</tr>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<?php if ($this->_tpl_vars['localeFiles']->wasEmpty()): ?>
	<tr>
		<td colspan="2" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="2" class="endseparator">&nbsp;</td>
	</tr>
<?php else: ?>
	<tr>
		<td align="left"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['localeFiles']), $this);?>
</td>
		<td align="right"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('anchor' => 'localeFiles','name' => 'localeFiles','iterator' => $this->_tpl_vars['localeFiles']), $this);?>
</td>
	</tr>
<?php endif; ?>

</table>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>