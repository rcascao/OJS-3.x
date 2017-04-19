<?php /* Smarty version 2.6.26, created on 2015-10-01 00:27:30
         compiled from file:/var/www/repositorio/plugins/generic/thesis/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'nl2br', 'file:/var/www/repositorio/plugins/generic/thesis/index.tpl', 18, false),array('modifier', 'escape', 'file:/var/www/repositorio/plugins/generic/thesis/index.tpl', 36, false),array('function', 'url', 'file:/var/www/repositorio/plugins/generic/thesis/index.tpl', 23, false),array('function', 'translate', 'file:/var/www/repositorio/plugins/generic/thesis/index.tpl', 23, false),array('function', 'html_options_translate', 'file:/var/www/repositorio/plugins/generic/thesis/index.tpl', 30, false),array('function', 'page_info', 'file:/var/www/repositorio/plugins/generic/thesis/index.tpl', 75, false),array('function', 'page_links', 'file:/var/www/repositorio/plugins/generic/thesis/index.tpl', 76, false),array('block', 'iterate', 'file:/var/www/repositorio/plugins/generic/thesis/index.tpl', 46, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "plugins.generic.thesis.theses"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<div id="theses">
<?php if ($this->_tpl_vars['thesisIntroduction'] != ""): ?>
	<?php echo ((is_array($_tmp=$this->_tpl_vars['thesisIntroduction'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

	<br />
	<br />
<?php endif; ?>

<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'submit'), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.thesis.submitLink"), $this);?>
</a>

<br />
<br />

<form method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('path' => 'thesis'), $this);?>
">
	<select name="searchField" size="1" class="selectMenu">
		<?php echo $this->_plugins['function']['html_options_translate'][0][0]->smartyHtmlOptionsTranslate(array('options' => $this->_tpl_vars['fieldOptions'],'selected' => $this->_tpl_vars['searchField']), $this);?>

	</select>
	<select name="searchMatch" size="1" class="selectMenu">
		<option value="contains"<?php if ($this->_tpl_vars['searchMatch'] == 'contains'): ?> selected="selected"<?php endif; ?>><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "form.contains"), $this);?>
</option>
		<option value="is"<?php if ($this->_tpl_vars['searchMatch'] == 'is'): ?> selected="selected"<?php endif; ?>><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "form.is"), $this);?>
</option>
	</select>
	<input type="text" size="15" name="search" class="textField" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['search'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
	<input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.search"), $this);?>
" class="button" />
</form>

<br />

<table width="100%" class="listing">
	<tr>
		<td colspan="2" class="headseparator">&nbsp;</td>
	</tr>
<?php $this->_tag_stack[] = array('iterate', array('from' => 'theses','item' => 'thesis')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<tr valign="top">
		<td width="80%"><?php echo ((is_array($_tmp=$this->_tpl_vars['thesis']->getTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
		<td width="20%" align="right"><a class="file" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'view','path' => $this->_tpl_vars['thesis']->getId()), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.thesis.view"), $this);?>
</a></td>
	</tr>
	<tr valign="top">
		<td colspan="2" style="padding-left: 30px;font-style: italic;"><?php echo ((is_array($_tmp=$this->_tpl_vars['thesis']->getStudentFullName(true))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<br /><?php echo ((is_array($_tmp=$this->_tpl_vars['thesis']->getDepartment())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
, <?php echo ((is_array($_tmp=$this->_tpl_vars['thesis']->getUniversity())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>

		</td>
	</tr>
	<tr>
		<td colspan="2" class="<?php if ($this->_tpl_vars['theses']->eof()): ?>end<?php endif; ?>separator">&nbsp;</td>
	</tr>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php if ($this->_tpl_vars['theses']->wasEmpty() && $this->_tpl_vars['search'] != ""): ?>
	<tr>
		<td colspan="2" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.thesis.noResults"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="2" class="endseparator">&nbsp;</td>
	</tr>
<?php elseif ($this->_tpl_vars['theses']->wasEmpty()): ?>
	<tr>
		<td colspan="2" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.thesis.noneExist"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="2" class="endseparator">&nbsp;</td>
	</tr>
<?php else: ?>
	<tr>
		<td align="left"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['theses']), $this);?>
</td>
		<td align="right"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('anchor' => 'theses','name' => 'theses','iterator' => $this->_tpl_vars['theses']), $this);?>
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