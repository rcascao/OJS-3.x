<?php /* Smarty version 2.6.26, created on 2015-03-08 11:24:08
         compiled from file:/var/www/repositorio/plugins/importexport/crossref/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:/var/www/repositorio/plugins/importexport/crossref/index.tpl', 18, false),array('function', 'plugin_url', 'file:/var/www/repositorio/plugins/importexport/crossref/index.tpl', 21, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "plugins.importexport.crossref.displayName"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<br/>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.importexport.crossref.export"), $this);?>
</h3>
<?php if ($this->_tpl_vars['journal']->getSetting('doiPrefix')): ?>
<ul class="plain">
	<li>&#187; <a href="<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'issues'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.importexport.crossref.export.issues"), $this);?>
</a></li>
	<li>&#187; <a href="<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'articles'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.importexport.crossref.export.articles"), $this);?>
</a></li>
</ul>
<?php else: ?>
	<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.importexport.crossref.errors.noDOIprefix"), $this);?>
 <br /><br />
	<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.doiPrefixDescription"), $this);?>

<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>