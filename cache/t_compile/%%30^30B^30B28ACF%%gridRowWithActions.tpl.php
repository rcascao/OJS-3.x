<?php /* Smarty version 2.6.26, created on 2013-07-15 04:31:35
         compiled from controllers/grid/gridRowWithActions.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'concat', 'controllers/grid/gridRowWithActions.tpl', 9, false),array('function', 'translate', 'controllers/grid/gridRowWithActions.tpl', 18, false),)), $this); ?>
<?php $this->assign('rowId', ((is_array($_tmp="component-")) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['row']->getGridId(), "-row-", $this->_tpl_vars['row']->getId()) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['row']->getGridId(), "-row-", $this->_tpl_vars['row']->getId()))); ?>
<tr id="<?php echo $this->_tpl_vars['rowId']; ?>
">
	<?php $_from = $this->_tpl_vars['columns']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['columnLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['columnLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['columnId'] => $this->_tpl_vars['column']):
        $this->_foreach['columnLoop']['iteration']++;
?>
		<?php if (($this->_foreach['columnLoop']['iteration'] <= 1)): ?>
			<td class="first_column">
				<div class="row_container">
					<div class="row_file <?php if ($this->_tpl_vars['column']->hasFlag('multiline')): ?>multiline<?php endif; ?>"><?php echo $this->_tpl_vars['cells'][0]; ?>
</div>
					<div class="row_actions">
						<?php if ($this->_tpl_vars['row']->getActions(@GRID_ACTION_POSITION_DEFAULT)): ?>
							<a class="settings sprite"><span class="hidetext"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "grid.settings"), $this);?>
</span></a>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['row']->getActions(@GRID_ACTION_POSITION_ROW_LEFT)): ?>
							<?php $_from = $this->_tpl_vars['row']->getActions(@GRID_ACTION_POSITION_ROW_LEFT); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['action']):
?>
								<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "linkAction/linkAction.tpl", 'smarty_include_vars' => array('action' => $this->_tpl_vars['action'],'id' => $this->_tpl_vars['rowId'],'hoverTitle' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							<?php endforeach; endif; unset($_from); ?>
						<?php endif; ?>
					</div>
					<?php if ($this->_tpl_vars['row']->getActions(@GRID_ACTION_POSITION_DEFAULT)): ?>
						<div class="row_controls">
							<?php $_from = $this->_tpl_vars['row']->getActions(@GRID_ACTION_POSITION_DEFAULT); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['action']):
?>
								<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "linkAction/linkAction.tpl", 'smarty_include_vars' => array('action' => $this->_tpl_vars['action'],'id' => $this->_tpl_vars['rowId'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							<?php endforeach; endif; unset($_from); ?>
						</div>
					<?php endif; ?>
				</div>
			</td>
		<?php else: ?>
			<td><?php echo $this->_tpl_vars['cells'][($this->_foreach['columnLoop']['iteration']-1)]; ?>
</td>
		<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
</tr>
