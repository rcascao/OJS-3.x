<?php /* Smarty version 2.6.26, created on 2017-02-13 19:56:40
         compiled from file:/var/www/repositorio/plugins/generic/dataverse/templates/settingsForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'plugin_url', 'file:/var/www/repositorio/plugins/generic/dataverse/templates/settingsForm.tpl', 16, false),array('function', 'translate', 'file:/var/www/repositorio/plugins/generic/dataverse/templates/settingsForm.tpl', 16, false),array('function', 'url', 'file:/var/www/repositorio/plugins/generic/dataverse/templates/settingsForm.tpl', 38, false),array('function', 'fieldLabel', 'file:/var/www/repositorio/plugins/generic/dataverse/templates/settingsForm.tpl', 121, false),array('function', 'html_options', 'file:/var/www/repositorio/plugins/generic/dataverse/templates/settingsForm.tpl', 123, false),array('modifier', 'escape', 'file:/var/www/repositorio/plugins/generic/dataverse/templates/settingsForm.tpl', 32, false),array('modifier', 'assign', 'file:/var/www/repositorio/plugins/generic/dataverse/templates/settingsForm.tpl', 43, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "plugins.generic.dataverse.displayName"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>

<ul class="menu">
	<li><a href="<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'connect'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.dataverse.settings.connect"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'select'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.dataverse.settings.selectDataverse"), $this);?>
</a></li>	
	<li class="current"><a href="<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'settings'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.dataverse.settings"), $this);?>
</a></li>
</ul>

<div id="dataverseSettings">

	<form method="post" action="<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'settings'), $this);?>
" enctype="multipart/form-data">
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

				<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.dataverse.settings.dataPolicies"), $this);?>
</h3>
		<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.dataverse.settings.dataPoliciesDescription"), $this);?>
</p>

		<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.dataverse.settings.dataAvailabilityPolicy"), $this);?>
</h4>
		<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.dataverse.settings.dataAvailabilityPolicyDescription"), $this);?>
</p>
		<textarea name="dataAvailability" id="dataAvailability" rows="12" cols="80" class="textArea richContent"><?php echo ((is_array($_tmp=$this->_tpl_vars['dataAvailability'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea>
		
		<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.sectionPolicies"), $this);?>
</h4>
		<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.dataverse.settings.sectionPoliciesDescription"), $this);?>
</p>
		<ul>
			<?php $_from = $this->_tpl_vars['sections']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['section']):
?>
				<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editSection','path' => $this->_tpl_vars['section']->getId()), $this);?>
" target="_blank"><?php echo $this->_tpl_vars['section']->getLocalizedTitle(); ?>
</a></li>
			<?php endforeach; endif; unset($_from); ?>
		</ul>
		
		<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.authorGuidelines"), $this);?>
</h4>
		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'manager','op' => 'setup','path' => '3','anchor' => 'authorGuidelinesInfo'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'authorGuidelinesUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'authorGuidelinesUrl'));?>

		<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.dataverse.settings.authorGuidelinesDescription",'authorGuidelinesUrl' => ($this->_tpl_vars['authorGuidelinesUrl'])), $this);?>
</p>
		<div id="authorGuidelinesWrapper">
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/extrasOnDemand.tpl", 'smarty_include_vars' => array('id' => 'authorGuidelinesExtras','widgetWrapper' => "#authorGuidelinesWrapper",'moreDetailsText' => "plugins.generic.dataverse.settings.default.authorGuidelines.extras",'moreDetailsLabel' => "plugins.generic.dataverse.settings.default.authorGuidelines.extras.label",'extraContent' => $this->_tpl_vars['authorGuidelinesContent'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>			
		</div>
		
		<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.submissionPreparationChecklist"), $this);?>
</h4>
		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'manager','op' => 'setup','path' => '3','anchor' => 'submissionPreparationChecklist'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'checklistUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'checklistUrl'));?>

		<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.dataverse.settings.checklistDescription",'checklistUrl' => ($this->_tpl_vars['checklistUrl'])), $this);?>
</p>
		<div id="checklistWrapper">
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/extrasOnDemand.tpl", 'smarty_include_vars' => array('id' => 'checklistExtras','widgetWrapper' => "#checklistWrapper",'moreDetailsText' => "plugins.generic.dataverse.settings.default.checklist.extras",'moreDetailsLabel' => "plugins.generic.dataverse.settings.default.checklist.extras.label",'extraContent' => $this->_tpl_vars['checklistContent'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</div>
		
		<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.reviewPolicy"), $this);?>
</h4>
		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'manager','op' => 'setup','path' => '2','anchor' => 'peerReviewDescription'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'reviewPolicyUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'reviewPolicyUrl'));?>

		<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.dataverse.settings.reviewPolicyDescription",'reviewPolicyUrl' => ($this->_tpl_vars['reviewPolicyUrl'])), $this);?>
</p>
		<div id="reviewPolicyWrapper">
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/extrasOnDemand.tpl", 'smarty_include_vars' => array('id' => 'reviewPolicyExtras','widgetWrapper' => "#reviewPolicyWrapper",'moreDetailsText' => "plugins.generic.dataverse.settings.default.reviewPolicy.extras",'moreDetailsLabel' => "plugins.generic.dataverse.settings.default.reviewPolicy.extras.label",'extraContent' => $this->_tpl_vars['reviewPolicyContent'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</div>
		
		<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.reviewGuidelines"), $this);?>
</h4>
		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'manager','op' => 'setup','path' => '2','anchor' => 'reviewGuidelinesInfo'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'reviewGuidelinesUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'reviewGuidelinesUrl'));?>
 
		<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.dataverse.settings.reviewGuidelinesUrl",'reviewGuidelinesUrl' => ($this->_tpl_vars['reviewGuidelinesUrl'])), $this);?>
</p>
		<div id="reviewGuidelinesWrapper">
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/extrasOnDemand.tpl", 'smarty_include_vars' => array('id' => 'reviewGuidelinesExras','widgetWrapper' => "#reviewGuidelinesWrapper",'moreDetailsText' => "plugins.generic.dataverse.settings.default.reviewGuidelines.extras",'moreDetailsLabel' => "plugins.generic.dataverse.settings.default.reviewGuidelines.extras.label",'extraContent' => $this->_tpl_vars['reviewGuidelinesContent'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</div>
		
		<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.copyeditInstructions"), $this);?>
</h4>
		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'manager','op' => 'setup','path' => '4','anchor' => 'copyeditInstructionsSection'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'copyeditInstructionsUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'copyeditInstructionsUrl'));?>

		<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.dataverse.settings.copyeditInstructionsUrl",'copyeditInstructionsUrl' => ($this->_tpl_vars['copyeditInstructionsUrl'])), $this);?>
</p>
		<div id="copyeditWrapper">
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/extrasOnDemand.tpl", 'smarty_include_vars' => array('id' => 'copyeditInstructionsExtras','widgetWrapper' => "#copyeditInstructionsWrapper",'moreDetailsText' => "plugins.generic.dataverse.settings.default.copyeditInstructions.extras",'moreDetailsLabel' => "plugins.generic.dataverse.settings.default.copyeditInstructions.extras.label",'extraContent' => $this->_tpl_vars['copyeditInstructionsContent'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</div>
		
		<div class="separator"></div>
		
				 

		<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.dataverse.settings.termsOfUse"), $this);?>
</h3>
		<div>
			<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.dataverse.settings.termsOfUseDescription"), $this);?>
</p>
			<input type="radio" name="fetchTermsOfUse" id="fetchTermsOfUse-true"	value="1" <?php if ($this->_tpl_vars['fetchTermsOfUse']): ?>checked="checked" <?php endif; ?> /> <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.dataverse.settings.fetchTermsOfUse"), $this);?>
<br />
			<input type="radio" name="fetchTermsOfUse" id="fetchTermsOfUse-false" value="0" <?php if (! $this->_tpl_vars['fetchTermsOfUse']): ?>checked="checked" <?php endif; ?>/> <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.dataverse.settings.defineTermsOfUse"), $this);?>

		</div>
		<div style="margin: 1em 0">
			<textarea name="termsOfUse" id="termsOfUse" rows="5" cols="40" class="textArea richContent"><?php echo ((is_array($_tmp=$this->_tpl_vars['termsOfUse'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea>					 
		</div>
		<div class="separator"></div>		 
		
				<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.dataverse.settings.metadata"), $this);?>
</h3>
		<table width="100%" class="data">
			<tr valign="top">
				<td class="label" width="20%"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'citationFormat','required' => 'true','key' => "plugins.generic.dataverse.settings.citationFormat"), $this);?>
</td>
				<td class="value">
					<?php echo smarty_function_html_options(array('name' => 'citationFormat','id' => 'citationFormat','options' => $this->_tpl_vars['citationFormats'],'selected' => $this->_tpl_vars['citationFormat']), $this);?>

			 </td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.dataverse.settings.citationFormatDescription"), $this);?>
</td>
			</tr>
			<tr valign="top">
				<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'pubIdPlugin','key' => "plugins.generic.dataverse.settings.pubIdType"), $this);?>
</td>
				<td class="value">
					<?php echo smarty_function_html_options(array('name' => 'pubIdPlugin','id' => 'pubIdPlugin','options' => $this->_tpl_vars['pubIdTypes'],'selected' => $this->_tpl_vars['pubIdPlugin']), $this);?>

			 </td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'manager','op' => 'plugins','path' => 'pubIds'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'pubIdsUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'pubIdsUrl'));?>
 
				<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.dataverse.settings.pubIdTypeDescription",'pubIdsUrl' => ($this->_tpl_vars['pubIdsUrl'])), $this);?>
</td>
			</tr>
		</table>
			
		<div class="separator"></div>					 
				<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.dataverse.settings.workflow"), $this);?>
</h3>
		<table width="100%" class="data">
			<tr valign="top">
				<td class="label" width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.dataverse.settings.requireData"), $this);?>
</td>
				<td class="value">
					<input type="checkbox" name="requireData" id="requireData" value="1" <?php if ($this->_tpl_vars['requireData']): ?> checked="checked"<?php endif; ?>/>&nbsp;
					<label for="requireData"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.dataverse.settings.requireDataDescription"), $this);?>
</label>					
				</td>
			</tr>
			<tr valign="top">
				<td class="label"><label for="studyRelease"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.dataverse.settings.studyRelease"), $this);?>
</label></td>
				<td class="value">
					<?php echo smarty_function_html_options(array('name' => 'studyRelease','id' => 'studyRelease','options' => $this->_tpl_vars['studyReleaseOptions'],'selected' => $this->_tpl_vars['studyRelease']), $this);?>

				</td>
			</tr>
			
		</table>
			
		<input type="submit" name="save" class="button defaultButton" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
"/>
		<input type="button" class="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" onclick="document.location='<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => ""), $this);?>
';"/>
		

	</form>

	<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>