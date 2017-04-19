<?php /* Smarty version 2.6.26, created on 2016-11-22 16:23:01
         compiled from file:/var/www/repositorio/plugins/generic/counter/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:/var/www/repositorio/plugins/generic/counter/index.tpl', 14, false),array('function', 'url', 'file:/var/www/repositorio/plugins/generic/counter/index.tpl', 17, false),array('function', 'call_hook', 'file:/var/www/repositorio/plugins/generic/counter/index.tpl', 20, false),array('modifier', 'escape', 'file:/var/www/repositorio/plugins/generic/counter/index.tpl', 17, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "plugins.generic.counter"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.counter.description"), $this);?>
</p>

<ul class="plain">
  <li>&#187; <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.counter.1a.title"), $this);?>
<?php $_from = $this->_tpl_vars['years']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['year']):
?>&nbsp;&nbsp;<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'report','year' => $this->_tpl_vars['year']), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['year'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a><?php endforeach; endif; unset($_from); ?></li>
  <li>&#187; XML version <?php $_from = $this->_tpl_vars['years']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['year']):
?>&nbsp;&nbsp;<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'reportxml','year' => $this->_tpl_vars['year']), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['year'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a><?php endforeach; endif; unset($_from); ?></li>
  <li>&#187; SUSHI SOAP endpoint: sushixml</li>
  <?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Template::Plugin::Generic::Counter::Index"), $this);?>

</ul>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>