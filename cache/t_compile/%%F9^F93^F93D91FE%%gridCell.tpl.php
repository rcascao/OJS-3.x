<?php /* Smarty version 2.6.26, created on 2013-07-15 04:31:32
         compiled from controllers/grid/gridCell.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'concat', 'controllers/grid/gridCell.tpl', 9, false),array('modifier', 'strip_unsafe_html', 'controllers/grid/gridCell.tpl', 15, false),)), $this); ?>
<?php $this->assign('cellId', ((is_array($_tmp="cell-")) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['id']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['id']))); ?>
<span id="<?php echo $this->_tpl_vars['cellId']; ?>
">
	<?php if (count ( $this->_tpl_vars['actions'] ) > 0): ?>
		<?php $this->assign('defaultCellAction', $this->_tpl_vars['actions'][0]); ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "linkAction/linkAction.tpl", 'smarty_include_vars' => array('id' => ((is_array($_tmp=$this->_tpl_vars['cellId'])) ? $this->_run_mod_handler('concat', true, $_tmp, "-action-", $this->_tpl_vars['defaultCellAction']->getId()) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, "-action-", $this->_tpl_vars['defaultCellAction']->getId())),'action' => $this->_tpl_vars['defaultCellAction'],'objectId' => $this->_tpl_vars['cellId'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php else: ?>
		<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)); ?>

	<?php endif; ?>
</span>
