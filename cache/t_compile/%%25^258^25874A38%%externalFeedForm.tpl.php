<?php /* Smarty version 2.6.26, created on 2015-10-01 17:38:26
         compiled from file:/var/www/repositorio/plugins/generic/externalFeed/externalFeedForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'plugin_url', 'file:/var/www/repositorio/plugins/generic/externalFeed/externalFeedForm.tpl', 23, false),array('function', 'fieldLabel', 'file:/var/www/repositorio/plugins/generic/externalFeed/externalFeedForm.tpl', 34, false),array('function', 'form_language_chooser', 'file:/var/www/repositorio/plugins/generic/externalFeed/externalFeedForm.tpl', 39, false),array('function', 'translate', 'file:/var/www/repositorio/plugins/generic/externalFeed/externalFeedForm.tpl', 40, false),array('modifier', 'escape', 'file:/var/www/repositorio/plugins/generic/externalFeed/externalFeedForm.tpl', 25, false),array('modifier', 'assign', 'file:/var/www/repositorio/plugins/generic/externalFeed/externalFeedForm.tpl', 36, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageCrumbTitle', ($this->_tpl_vars['feedTitle'])); ?><?php echo ''; ?><?php if ($this->_tpl_vars['feedId']): ?><?php echo ''; ?><?php $this->assign('pageTitle', "plugins.generic.externalFeed.manager.edit"); ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php $this->assign('pageTitle', "plugins.generic.externalFeed.manager.create"); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<br/>

<form name="externalFeed" method="post" action="<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'update'), $this);?>
">
<?php if ($this->_tpl_vars['feedId']): ?>
<input type="hidden" name="feedId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['feedId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div id="externalFeedForm">
<table id="general" class="data" width="100%">
<?php if (count ( $this->_tpl_vars['formLocales'] ) > 1): ?>
	<tr valign="top">
		<td width="20%" class="label" colspan="2"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'formLocale','key' => "form.formLanguage"), $this);?>
</td>
		<td width="80%" class="value">
			<?php if ($this->_tpl_vars['feedId']): ?><?php echo ((is_array($_tmp=$this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'edit','id' => $this->_tpl_vars['feedId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'externalFeedFormUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'externalFeedFormUrl'));?>

			<?php else: ?><?php echo ((is_array($_tmp=$this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'create','id' => $this->_tpl_vars['feedId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'externalFeedFormUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'externalFeedFormUrl'));?>

			<?php endif; ?>
			<?php echo $this->_plugins['function']['form_language_chooser'][0][0]->smartyFormLanguageChooser(array('form' => 'externalFeed','url' => $this->_tpl_vars['externalFeedFormUrl']), $this);?>

			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "form.formLanguage.description"), $this);?>
</span>
		</td>
	</tr>
<?php endif; ?>
	<tr valign="top">
		<td width="20%" class="label" colspan="2"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'title','required' => 'true','key' => "plugins.generic.externalFeed.form.title"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="title[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['title'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" id="title" size="40" maxlength="120" class="textField" />
			<br />
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.externalFeed.form.titleDescription"), $this);?>
</span>
		</td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label" colspan="2"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'feedUrl','required' => 'true','key' => "plugins.generic.externalFeed.form.feedUrl"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="feedUrl" id="feedUrl" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['feedUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="30" maxlength="255" class="textField" />
			<br />
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.externalFeed.form.feedUrlDescription"), $this);?>
</span>
		</td>
	</tr>
	<tr>
		<td colspan="3"><div class="separator">&nbsp;</div></td>
	</tr>
	<tr valign="top">
		<td width="10%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.externalFeed.form.display"), $this);?>
</td>
		<td width="10%" class="label" align="right"><input type="checkbox" name="displayHomepage" id="displayHomepage" value="1" <?php if ($this->_tpl_vars['displayHomepage']): ?>checked="checked" <?php endif; ?>/></td>
		<td width="80%" class="value"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.externalFeed.form.displayHomepage"), $this);?>
</td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label" align="right" colspan="2"><input type="radio" name="displayBlock" id="displayBlock-none" value="<?php echo @EXTERNAL_FEED_DISPLAY_BLOCK_NONE; ?>
" <?php if ($this->_tpl_vars['displayBlock'] == @EXTERNAL_FEED_DISPLAY_BLOCK_NONE): ?>checked="checked" <?php endif; ?>/></td>
		<td width="80%" class="value"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.externalFeed.form.displayBlockNone"), $this);?>
</td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label" align="right" colspan="2"><input type="radio" name="displayBlock" id="displayBlock-homepage" value="<?php echo @EXTERNAL_FEED_DISPLAY_BLOCK_HOMEPAGE; ?>
" <?php if ($this->_tpl_vars['displayBlock'] == @EXTERNAL_FEED_DISPLAY_BLOCK_HOMEPAGE): ?>checked="checked" <?php endif; ?>/></td>
		<td width="80%" class="value"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.externalFeed.form.displayBlockHomepage"), $this);?>
</td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label" align="right" colspan="2"><input type="radio" name="displayBlock" id="displayBlock-all" value="<?php echo @EXTERNAL_FEED_DISPLAY_BLOCK_ALL; ?>
" <?php if ($this->_tpl_vars['displayBlock'] == @EXTERNAL_FEED_DISPLAY_BLOCK_ALL): ?>checked="checked" <?php endif; ?>/></td>
		<td width="80%" class="value"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.externalFeed.form.displayBlockAll"), $this);?>
</td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label" align="right" colspan="2"><input type="checkbox" name="limitItems" id="limitItems" value="1" <?php if ($this->_tpl_vars['limitItems']): ?>checked="checked" <?php endif; ?>/></td>
		<td width="80%" class="value"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.externalFeed.form.recentItems1"), $this);?>

		<input type="text" name="recentItems" id="recentItems" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['recentItems'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="2" maxlength="90" class="textField" />
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.externalFeed.form.recentItems2"), $this);?>
</td>
	</tr>
</table>
</div>

<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
" class="button defaultButton" /> <?php if (! $this->_tpl_vars['feedId']): ?><input type="submit" name="createAnother" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.externalFeed.form.saveAndCreateAnother"), $this);?>
" class="button" /> <?php endif; ?><input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="history.go(-1);" /></p>

</form>

<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>