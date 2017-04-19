<?php /* Smarty version 2.6.26, created on 2016-11-11 11:22:01
         compiled from file:/var/www/repositorio/plugins/generic/externalFeed/externalFeeds.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'plugin_url', 'file:/var/www/repositorio/plugins/generic/externalFeed/externalFeeds.tpl', 17, false),array('function', 'translate', 'file:/var/www/repositorio/plugins/generic/externalFeed/externalFeeds.tpl', 17, false),array('function', 'url', 'file:/var/www/repositorio/plugins/generic/externalFeed/externalFeeds.tpl', 23, false),array('function', 'page_info', 'file:/var/www/repositorio/plugins/generic/externalFeed/externalFeeds.tpl', 71, false),array('function', 'page_links', 'file:/var/www/repositorio/plugins/generic/externalFeed/externalFeeds.tpl', 72, false),array('modifier', 'assign', 'file:/var/www/repositorio/plugins/generic/externalFeed/externalFeeds.tpl', 23, false),array('modifier', 'escape', 'file:/var/www/repositorio/plugins/generic/externalFeed/externalFeeds.tpl', 51, false),array('block', 'iterate', 'file:/var/www/repositorio/plugins/generic/externalFeed/externalFeeds.tpl', 50, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "plugins.generic.externalFeed.manager.feeds"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<ul class="menu">
	<li class="current"><a href="<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'feeds'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.externalFeed.manager.feeds"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'settings'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.externalFeed.manager.settings"), $this);?>
</a></li>
</ul>

<br />

<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'manager','op' => 'setup','path' => '5'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'setup56') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'setup56'));?>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.externalFeed.manager.displayBlockInstructions",'setupStep56' => $this->_tpl_vars['setup56']), $this);?>
</p>

<br />

<div id="feeds">

<table width="100%" class="listing">
	<tr>
		<td colspan="5" class="headseparator">&nbsp;</td>
	</tr>
	<tr class="heading" valign="bottom">
		<td width="40%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.externalFeed.manager.title"), $this);?>
</td>
		<td width="15%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.externalFeed.manager.displayHomepage"), $this);?>
</td>
		<td width="25%" colspan="2"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.externalFeed.manager.displayBlock"), $this);?>

			<table width="100%" class="nested">
				<tr valign="top">
					<td width="50%" style="padding: 0 4px 0 0; font-size: 1.0em"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.externalFeed.manager.displayBlockAll"), $this);?>
</td>
					<td width="50%" style="padding: 0 4px 0 0; font-size: 1.0em"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.externalFeed.manager.displayBlockHomepage"), $this);?>
</td>
				</tr>
			</table>
		</td>
		<td width="15%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.action"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="5" class="headseparator">&nbsp;</td>
	</tr>
<?php $this->_tag_stack[] = array('iterate', array('from' => 'feeds','item' => 'feed')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<tr valign="top" id="externalFeed-<?php echo ((is_array($_tmp=$this->_tpl_vars['feed']->getId())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" class="data">
		<td class="drag"><?php echo ((is_array($_tmp=$this->_tpl_vars['feed']->getLocalizedTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
		<td class="drag"><?php if ($this->_tpl_vars['feed']->getDisplayHomepage()): ?><img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/templates/images/icons/checked.gif" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.externalFeed.manager.displayHomepage.altText"), $this);?>
"/><?php else: ?><img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/templates/images/icons/unchecked.gif" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.externalFeed.manager.noDisplayHomepage.altText"), $this);?>
"/><?php endif; ?></td>
		<td class="drag"><?php if ($this->_tpl_vars['feed']->getDisplayBlock() == @EXTERNAL_FEED_DISPLAY_BLOCK_ALL): ?><img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/templates/images/icons/checked.gif" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.externalFeed.manager.displayBlockAll.altText"), $this);?>
"/><?php else: ?><img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/templates/images/icons/unchecked.gif" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.externalFeed.manager.noDisplayBlockAll.altText"), $this);?>
"/><?php endif; ?></td>
		<td class="drag"><?php if ($this->_tpl_vars['feed']->getDisplayBlock() == @EXTERNAL_FEED_DISPLAY_BLOCK_HOMEPAGE): ?><img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/templates/images/icons/checked.gif" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.externalFeed.manager.displayBlockHomepage.altText"), $this);?>
"/><?php else: ?><img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/templates/images/icons/unchecked.gif" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.externalFeed.manager.noDisplayBlockHomepage.altText"), $this);?>
"/><?php endif; ?></td>
		<td><a href="<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'move','id' => $this->_tpl_vars['feed']->getId(),'dir' => 'u'), $this);?>
" class="action">&uarr;</a>&nbsp;<a href="<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'move','id' => $this->_tpl_vars['feed']->getId(),'dir' => 'd'), $this);?>
" class="action">&darr;</a>&nbsp;|&nbsp;<a href="<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'edit','id' => $this->_tpl_vars['feed']->getId()), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.edit"), $this);?>
</a>&nbsp;|&nbsp;<a href="<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'delete','id' => $this->_tpl_vars['feed']->getId()), $this);?>
" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.externalFeed.manager.confirmDelete"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'jsparam') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'jsparam'));?>
')" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
</a></td>
	</tr>
	<tr>
		<td colspan="5" class="<?php if ($this->_tpl_vars['feeds']->eof()): ?>end<?php endif; ?>separator">&nbsp;</td>
	</tr>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php if ($this->_tpl_vars['feeds']->wasEmpty()): ?>
	<tr>
		<td colspan="5" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.externalFeed.manager.noneCreated"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="5" class="endseparator">&nbsp;</td>
	</tr>
<?php else: ?>
	<tr>
		<td colspan="2" align="left"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['feeds']), $this);?>
</td>
		<td colspan="3" align="right"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('anchor' => 'feeds','name' => 'feeds','iterator' => $this->_tpl_vars['feeds']), $this);?>
</td>
	</tr>
<?php endif; ?>
</table>

<a href="<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'create'), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.externalFeed.manager.create"), $this);?>
</a>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>