<?php /* Smarty version 2.6.26, created on 2017-01-29 16:22:15
         compiled from submission/comment/editComment.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'submission/comment/editComment.tpl', 16, false),array('function', 'fieldLabel', 'submission/comment/editComment.tpl', 31, false),array('function', 'translate', 'submission/comment/editComment.tpl', 43, false),array('modifier', 'escape', 'submission/comment/editComment.tpl', 19, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "submission.comments.editComment"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "submission/comment/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<form method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'saveComment','path' => $this->_tpl_vars['commentId']), $this);?>
">
<?php if ($this->_tpl_vars['hiddenFormParams']): ?>
	<?php $_from = $this->_tpl_vars['hiddenFormParams']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['hiddenFormParam']):
?>
		<input type="hidden" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['hiddenFormParam'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
	<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>
<?php if ($this->_tpl_vars['isPeerReviewComment']): ?>
<input type="hidden" name="viewable" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['viewable'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
<?php endif; ?>

<div id="new">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table class="data">
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'commentTitle','key' => "submission.comments.subject"), $this);?>
</td>
	<td width="80%" class="value"><input type="text" id="commentTitle" name="commentTitle" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['commentTitle'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="50" maxlength="255" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'comments','key' => "submission.comments.comments",'required' => 'true'), $this);?>
</td>
	<td class="value"><textarea name="comments" id="comments" rows="15" cols="50" class="textArea"><?php echo $this->_tpl_vars['comments']; ?>
</textarea></td>
</tr>
<?php if ($this->_tpl_vars['isPeerReviewComment']): ?>
<tr valign="top">
	<td>&nbsp;</td>
	<td class="value">
		<input type="checkbox" name="viewable" id="viewable" value="1"<?php if ($this->_tpl_vars['viewable']): ?> checked="checked"<?php endif; ?> />
		<label for="viewable"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.comments.viewableDescription"), $this);?>
</label>
	</td>
</tr>
<?php endif; ?>
</table>

<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
" class="button defaultButton" /> <?php if (! $this->_tpl_vars['isPeerReviewComment']): ?><input type="submit" name="saveAndEmail" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.saveAndEmail"), $this);?>
" class="button" /> <?php endif; ?><input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="history.go(-1);" /></p>

<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>
</div>
</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "submission/comment/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
