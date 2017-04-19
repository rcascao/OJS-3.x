<?php /* Smarty version 2.6.26, created on 2016-12-21 15:52:57
         compiled from file:/var/www/repositorio/plugins/generic/dataverse/templates/suppFileAdditionalMetadata.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'file:/var/www/repositorio/plugins/generic/dataverse/templates/suppFileAdditionalMetadata.tpl', 12, false),array('function', 'translate', 'file:/var/www/repositorio/plugins/generic/dataverse/templates/suppFileAdditionalMetadata.tpl', 15, false),array('modifier', 'assign', 'file:/var/www/repositorio/plugins/generic/dataverse/templates/suppFileAdditionalMetadata.tpl', 12, false),array('modifier', 'strip_unsafe_html', 'file:/var/www/repositorio/plugins/generic/dataverse/templates/suppFileAdditionalMetadata.tpl', 26, false),array('modifier', 'escape', 'file:/var/www/repositorio/plugins/generic/dataverse/templates/suppFileAdditionalMetadata.tpl', 33, false),)), $this); ?>
 
<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'dataverse','op' => 'termsOfUse'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'dataverseTermsOfUseUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'dataverseTermsOfUseUrl'));?>


<div id="dataverse">
	<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.dataverse.suppFile.title"), $this);?>
</h3>
	<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.dataverse.suppFile.description"), $this);?>
</p>

	<input type="radio" name="publishData" id="publishData-none" value="none" <?php if ($this->_tpl_vars['publishData'] == 'none'): ?>checked="checked" <?php endif; ?>/>
	<label for="publishData-none"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.dataverse.suppFile.publishDataNone"), $this);?>
</label>
	<br />
	<input type="radio" name="publishData" id="publishData-dataverse" value="dataverse" <?php if ($this->_tpl_vars['publishData'] == 'dataverse'): ?>checked="checked" <?php endif; ?>/>
	<label for="publishData-dataverse"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.dataverse.suppFile.publishDataDataverse",'dataverseTermsOfUseUrl' => $this->_tpl_vars['dataverseTermsOfUseUrl']), $this);?>
</label>
	<br />
	<?php if ($this->_tpl_vars['dataCitation']): ?>
		<p style="margin-left: 25px;"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.dataverse.suppFile.dataCitationDescription"), $this);?>
</p>
		<p style="margin-left: 25px;"><?php echo ((is_array($_tmp=$this->_tpl_vars['dataCitation'])) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)); ?>
</p>
		<?php if ($this->_tpl_vars['studyLocked']): ?>
			<p style="margin-left: 25px;" class="error"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.dataverse.suppFile.studyLocked"), $this);?>
</p>
		<?php endif; ?>
	<?php endif; ?>
	<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.dataverse.suppFile.studyDescription"), $this);?>
</h4>
	<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.dataverse.suppFile.studyDescription.description"), $this);?>
</p>
	<textarea cols="60" rows="5" class="textArea" id="studyDescription" name="studyDescription"><?php echo ((is_array($_tmp=$this->_tpl_vars['studyDescription'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea>
	<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.dataverse.suppFile.externalDataCitation"), $this);?>
</h4>
	<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.dataverse.suppFile.externalDataCitation.description"), $this);?>
</p>	
	<textarea cols="60" rows="5" class="textArea" id="externalDataCitation" name="externalDataCitation"><?php echo ((is_array($_tmp=$this->_tpl_vars['externalDataCitation'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea>		 
</div>
<div class="separator"></div>
 