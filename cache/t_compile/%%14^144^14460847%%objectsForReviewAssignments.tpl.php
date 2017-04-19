<?php /* Smarty version 2.6.26, created on 2017-01-09 17:55:30
         compiled from file:/var/www/repositorio/plugins/generic/objectsForReview/templates/editor/objectsForReviewAssignments.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'file:/var/www/repositorio/plugins/generic/objectsForReview/templates/editor/objectsForReviewAssignments.tpl', 16, false),array('function', 'translate', 'file:/var/www/repositorio/plugins/generic/objectsForReview/templates/editor/objectsForReviewAssignments.tpl', 16, false),array('modifier', 'escape', 'file:/var/www/repositorio/plugins/generic/objectsForReview/templates/editor/objectsForReviewAssignments.tpl', 24, false),)), $this); ?>
<?php $this->assign('pageTitle', ($this->_tpl_vars['pageTitle'])); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div id="objectsForReview">
<ul class="menu">
	<li class="current"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'objectsForReview','path' => 'all'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.objectsForReview.editor.assignments"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'objectsForReview'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.objectsForReview.editor.objectsForReview"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'objectsForReviewSettings'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.objectsForReview.settings"), $this);?>
</a></li>
</ul>
<br />
<?php if ($this->_tpl_vars['mode'] == @OFR_MODE_FULL): ?>
<ul class="menu">
	<li<?php if ($this->_tpl_vars['returnPage'] == 'all'): ?> class="current"<?php endif; ?>><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'objectsForReview','path' => 'all'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.objectsForReview.objectForReviewAssignments.all"), $this);?>
</a></li>
	<li<?php if ($this->_tpl_vars['returnPage'] == 'requested'): ?> class="current"<?php endif; ?>><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'objectsForReview','path' => 'requested'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.objectsForReview.objectForReviewAssignments.requested"), $this);?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['counts'][@OFR_STATUS_REQUESTED])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
)</a></li>
	<li<?php if ($this->_tpl_vars['returnPage'] == 'assigned'): ?> class="current"<?php endif; ?>><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'objectsForReview','path' => 'assigned'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.objectsForReview.objectForReviewAssignments.assigned"), $this);?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['counts'][@OFR_STATUS_ASSIGNED])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
)</a></li>
	<li<?php if ($this->_tpl_vars['returnPage'] == 'mailed'): ?> class="current"<?php endif; ?>><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'objectsForReview','path' => 'mailed'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.objectsForReview.objectForReviewAssignments.mailed"), $this);?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['counts'][@OFR_STATUS_MAILED])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
)</a></li>
	<li<?php if ($this->_tpl_vars['returnPage'] == 'submitted'): ?> class="current"<?php endif; ?>><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'objectsForReview','path' => 'submitted'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.objectsForReview.objectForReviewAssignments.submitted"), $this);?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['counts'][@OFR_STATUS_SUBMITTED])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
)</a></li>
</ul>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../plugins/generic/objectsForReview/templates/editor/objectsForReviewAssignmentsList.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>