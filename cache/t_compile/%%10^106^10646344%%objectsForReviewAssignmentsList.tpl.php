<?php /* Smarty version 2.6.26, created on 2017-01-09 17:55:30
         compiled from ../plugins/generic/objectsForReview/templates/editor/objectsForReviewAssignmentsList.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', '../plugins/generic/objectsForReview/templates/editor/objectsForReviewAssignmentsList.tpl', 13, false),array('function', 'url', '../plugins/generic/objectsForReview/templates/editor/objectsForReviewAssignmentsList.tpl', 13, false),array('function', 'html_options', '../plugins/generic/objectsForReview/templates/editor/objectsForReviewAssignmentsList.tpl', 13, false),array('function', 'html_options_translate', '../plugins/generic/objectsForReview/templates/editor/objectsForReviewAssignmentsList.tpl', 24, false),array('function', 'sort_heading', '../plugins/generic/objectsForReview/templates/editor/objectsForReviewAssignmentsList.tpl', 49, false),array('function', 'icon', '../plugins/generic/objectsForReview/templates/editor/objectsForReviewAssignmentsList.tpl', 79, false),array('function', 'page_info', '../plugins/generic/objectsForReview/templates/editor/objectsForReviewAssignmentsList.tpl', 134, false),array('function', 'page_links', '../plugins/generic/objectsForReview/templates/editor/objectsForReviewAssignmentsList.tpl', 135, false),array('modifier', 'escape', '../plugins/generic/objectsForReview/templates/editor/objectsForReviewAssignmentsList.tpl', 13, false),array('modifier', 'truncate', '../plugins/generic/objectsForReview/templates/editor/objectsForReviewAssignmentsList.tpl', 69, false),array('modifier', 'concat', '../plugins/generic/objectsForReview/templates/editor/objectsForReviewAssignmentsList.tpl', 77, false),array('modifier', 'to_array', '../plugins/generic/objectsForReview/templates/editor/objectsForReviewAssignmentsList.tpl', 78, false),array('modifier', 'assign', '../plugins/generic/objectsForReview/templates/editor/objectsForReviewAssignmentsList.tpl', 78, false),array('modifier', 'date_format', '../plugins/generic/objectsForReview/templates/editor/objectsForReviewAssignmentsList.tpl', 101, false),array('block', 'iterate', '../plugins/generic/objectsForReview/templates/editor/objectsForReviewAssignmentsList.tpl', 66, false),)), $this); ?>
<form name="filterForm" action="#">
<ul class="filter">
	<li><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.submissions.assignedTo"), $this);?>
: <select name="filterEditor" onchange="location.href='<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('path' => $this->_tpl_vars['returnPage'],'searchField' => $this->_tpl_vars['searchField'],'searchMatch' => $this->_tpl_vars['searchMatch'],'search' => $this->_tpl_vars['search'],'filterEditor' => 'EDITOR','filterType' => 'TYPE','sort' => $this->_tpl_vars['sort'],'sortDirection' => $this->_tpl_vars['sortDirection'],'escape' => false), $this))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp));?>
'.replace('EDITOR', this.options[this.selectedIndex].value).replace('TYPE', document.forms.filterForm.elements.filterType.value)" size="1" class="selectMenu"><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['editorOptions'],'selected' => $this->_tpl_vars['filterEditor']), $this);?>
</select></li>
	<li><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.objectsForReview.editor.objectType"), $this);?>
: <select name="filterType" onchange="location.href='<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('path' => $this->_tpl_vars['returnPage'],'searchField' => $this->_tpl_vars['searchField'],'searchMatch' => $this->_tpl_vars['searchMatch'],'search' => $this->_tpl_vars['search'],'filterEditor' => 'EDITOR','filterType' => 'TYPE','sort' => $this->_tpl_vars['sort'],'sortDirection' => $this->_tpl_vars['sortDirection'],'escape' => false), $this))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp));?>
'.replace('TYPE', this.options[this.selectedIndex].value).replace('EDITOR', document.forms.filterForm.elements.filterEditor.value)" size="1" class="selectMenu"><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['filterTypeOptions'],'selected' => $this->_tpl_vars['filterType']), $this);?>
</select></li>
</ul>
</form>

<form method="get" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'objectsForReview','path' => $this->_tpl_vars['returnPage']), $this);?>
">
	<input type="hidden" name="filterEditor" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['filterEditor'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
	<input type="hidden" name="filterType" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['filterType'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
	<input type="hidden" name="sort" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['sort'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
	<input type="hidden" name="sortDirection" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['sortDirection'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
	<select name="searchField" size="1" class="selectMenu">
		<?php echo $this->_plugins['function']['html_options_translate'][0][0]->smartyHtmlOptionsTranslate(array('options' => $this->_tpl_vars['fieldOptions'],'selected' => $this->_tpl_vars['searchField']), $this);?>

	</select>
	<select name="searchMatch" size="1" class="selectMenu">
		<option value="contains"<?php if ($this->_tpl_vars['searchMatch'] == 'contains'): ?> selected="selected"<?php endif; ?>><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "form.contains"), $this);?>
</option>
		<option value="is"<?php if ($this->_tpl_vars['searchMatch'] == 'is'): ?> selected="selected"<?php endif; ?>><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "form.is"), $this);?>
</option>
	</select>
	<input type="text" size="30" name="search" class="textField" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['search'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
	<input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.search"), $this);?>
" class="button" />
</form>

<br />

<?php if ($this->_tpl_vars['mode'] == @OFR_MODE_FULL): ?>
	<?php $this->assign('colspan', '6'); ?>
	<?php $this->assign('colspanPage', '3'); ?>
<?php else: ?>
	<?php $this->assign('colspan', '4'); ?>
	<?php $this->assign('colspanPage', '2'); ?>
<?php endif; ?>
<table width="100%" class="listing">
	<tr>
		<td colspan="<?php echo $this->_tpl_vars['colspan']; ?>
" class="headseparator">&nbsp;</td>
	</tr>
<?php if ($this->_tpl_vars['mode'] == @OFR_MODE_FULL): ?>
	<tr class="heading" valign="bottom">
		<td width="30%"><?php echo $this->_plugins['function']['sort_heading'][0][0]->smartySortHeading(array('key' => "plugins.generic.objectsForReview.objectForReviewAssignments.title",'sort' => 'title'), $this);?>
</td>
		<td width="7%"><?php echo $this->_plugins['function']['sort_heading'][0][0]->smartySortHeading(array('key' => "plugins.generic.objectsForReview.objectForReviewAssignments.status",'sort' => 'status'), $this);?>
</td>
		<td width="25%"><?php echo $this->_plugins['function']['sort_heading'][0][0]->smartySortHeading(array('key' => "plugins.generic.objectsForReview.objectForReviewAssignments.objectReviewer",'sort' => 'reviewer'), $this);?>
</td>
		<td width="15%"><?php echo $this->_plugins['function']['sort_heading'][0][0]->smartySortHeading(array('key' => "plugins.generic.objectsForReview.objectForReviewAssignments.dueDate",'sort' => 'due'), $this);?>
</td>
		<td width="18%" align="right"><?php echo $this->_plugins['function']['sort_heading'][0][0]->smartySortHeading(array('key' => "plugins.generic.objectsForReview.objectForReviewAssignments.submission",'sort' => 'submission'), $this);?>
</td>
		<td width="5%" align="right"><?php echo $this->_plugins['function']['sort_heading'][0][0]->smartySortHeading(array('key' => "plugins.generic.objectsForReview.objectForReviewAssignments.editor",'sort' => 'editor'), $this);?>
</td>
	</tr>
<?php else: ?>
	<tr class="heading" valign="bottom">
		<td width="70%"><?php echo $this->_plugins['function']['sort_heading'][0][0]->smartySortHeading(array('key' => "plugins.generic.objectsForReview.objectForReviewAssignments.title",'sort' => 'title'), $this);?>
</td>
		<td width="7%"><?php echo $this->_plugins['function']['sort_heading'][0][0]->smartySortHeading(array('key' => "plugins.generic.objectsForReview.objectForReviewAssignments.status",'sort' => 'status'), $this);?>
</td>
		<td width="18%" align="right"><?php echo $this->_plugins['function']['sort_heading'][0][0]->smartySortHeading(array('key' => "plugins.generic.objectsForReview.objectForReviewAssignments.submission",'sort' => 'submission'), $this);?>
</td>
		<td width="5%" align="right"><?php echo $this->_plugins['function']['sort_heading'][0][0]->smartySortHeading(array('key' => "plugins.generic.objectsForReview.objectForReviewAssignments.editor",'sort' => 'editor'), $this);?>
</td>
<?php endif; ?>
	<tr>
		<td colspan="<?php echo $this->_tpl_vars['colspan']; ?>
" class="headseparator">&nbsp;</td>
	</tr>
<?php $this->_tag_stack[] = array('iterate', array('from' => 'objectForReviewAssignments','item' => 'objectForReviewAssignment')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php $this->assign('objectForReview', $this->_tpl_vars['objectForReviewAssignment']->getObjectForReview()); ?>
	<tr <?php if ($this->_tpl_vars['objectForReviewAssignment']->isLate() && $this->_tpl_vars['objectForReviewAssignment']->getStatus() != @OFR_STATUS_SUBMITTED): ?>class="highlight"<?php endif; ?> valign="top">
		<td><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editObjectForReviewAssignment','path' => $this->_tpl_vars['objectForReviewAssignment']->getId(),'objectId' => $this->_tpl_vars['objectForReviewAssignment']->getObjectId(),'returnPage' => $this->_tpl_vars['returnPage']), $this);?>
" class="action"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['objectForReview']->getTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 40, "...") : $this->_plugins['modifier']['truncate'][0][0]->smartyTruncate($_tmp, 40, "...")); ?>
</a></td>
		<?php $this->assign('status', $this->_tpl_vars['objectForReviewAssignment']->getStatus()); ?>
		<?php $this->assign('statusString', $this->_tpl_vars['objectForReviewAssignment']->getStatusString()); ?>
		<?php $this->assign('userId', $this->_tpl_vars['objectForReviewAssignment']->getUserId()); ?>
		<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['statusString']), $this);?>
</td>
		<?php if ($this->_tpl_vars['mode'] == @OFR_MODE_FULL): ?>
			<?php if ($this->_tpl_vars['userId']): ?>
				<?php $this->assign('author', $this->_tpl_vars['objectForReviewAssignment']->getUser()); ?>
				<?php $this->assign('emailString', ((is_array($_tmp=$this->_tpl_vars['author']->getFullName())) ? $this->_run_mod_handler('concat', true, $_tmp, " <", $this->_tpl_vars['author']->getEmail(), ">") : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, " <", $this->_tpl_vars['author']->getEmail(), ">"))); ?>
				<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'email','to' => ((is_array($_tmp=$this->_tpl_vars['emailString'])) ? $this->_run_mod_handler('to_array', true, $_tmp) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp)),'redirectUrl' => $this->_tpl_vars['currentUrl']), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'url') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'url'));?>

				<td><?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
&nbsp;<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => $this->_tpl_vars['url']), $this);?>

			<?php else: ?>
				<td>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['status'] == @OFR_STATUS_REQUESTED): ?>
				<br />
				<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'acceptObjectForReviewAuthor','path' => $this->_tpl_vars['objectForReviewAssignment']->getId(),'returnPage' => $this->_tpl_vars['returnPage']), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.objectsForReview.editor.acceptObjectReviewer"), $this);?>
</a>&nbsp;|&nbsp;<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'denyObjectForReviewAuthor','path' => $this->_tpl_vars['objectForReviewAssignment']->getId(),'returnPage' => $this->_tpl_vars['returnPage']), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.objectsForReview.editor.denyObjectReviewer"), $this);?>
</a></td>
			<?php elseif ($this->_tpl_vars['status'] == @OFR_STATUS_ASSIGNED): ?>
				<br />
				<?php if ($this->_tpl_vars['objectForReview']->getCopy()): ?>
					<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'notifyObjectForReviewMailed','path' => $this->_tpl_vars['objectForReviewAssignment']->getId(),'returnPage' => $this->_tpl_vars['returnPage']), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.objectsForReview.editor.notifyObjectMailed"), $this);?>
</a>&nbsp;|
				<?php endif; ?>
				<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'removeObjectForReviewAssignment','path' => $this->_tpl_vars['objectForReviewAssignment']->getId(),'returnPage' => $this->_tpl_vars['returnPage']), $this);?>
" class="action" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.objectsForReview.editor.confirmRemoveObjectReviewer"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'jsparam') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'jsparam'));?>
')"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.objectsForReview.editor.removeObjectReviewer"), $this);?>
</a></td>
			<?php elseif ($this->_tpl_vars['status'] == @OFR_STATUS_MAILED): ?>
				<br />
				<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'removeObjectForReviewAssignment','path' => $this->_tpl_vars['objectForReviewAssignment']->getId(),'returnPage' => $this->_tpl_vars['returnPage']), $this);?>
" class="action" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.objectsForReview.editor.confirmRemoveObjectReviewer"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'jsparam') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'jsparam'));?>
')"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.objectsForReview.editor.removeObjectReviewer"), $this);?>
</a></td>
			<?php elseif ($this->_tpl_vars['userId'] && $this->_tpl_vars['status'] == @OFR_STATUS_SUBMITTED): ?>
				<br />
				<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'removeObjectForReviewAssignment','path' => $this->_tpl_vars['objectForReviewAssignment']->getId(),'returnPage' => $this->_tpl_vars['returnPage']), $this);?>
" class="action" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.objectsForReview.editor.confirmRemoveObjectReviewer"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'jsparam') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'jsparam'));?>
')"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.objectsForReview.editor.removeObjectReviewer"), $this);?>
</a></td>
			<?php else: ?>
				&nbsp;</td>
			<?php endif; ?>
			<td><?php echo ((is_array($_tmp=$this->_tpl_vars['objectForReviewAssignment']->getDateDue())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatTrunc']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatTrunc'])); ?>
</td>
		<?php endif; ?>
		<td align="right">
		<?php $this->assign('submissionId', $this->_tpl_vars['objectForReviewAssignment']->getSubmissionId()); ?>
		<?php if ($this->_tpl_vars['submissionId']): ?>
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.id"), $this);?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['submissionId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>

			<br />
			<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'editor','op' => 'submission','path' => $this->_tpl_vars['submissionId']), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.objectsForReview.editor.edit"), $this);?>
</a>&nbsp;|&nbsp;
		<?php endif; ?>
			<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'selectObjectForReviewSubmission','path' => $this->_tpl_vars['objectForReviewAssignment']->getId(),'objectId' => $this->_tpl_vars['objectForReviewAssignment']->getObjectId(),'returnPage' => $this->_tpl_vars['returnPage']), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.objectsForReview.editor.select"), $this);?>
</a>
		</td>
		<td align="right"><?php echo ((is_array($_tmp=$this->_tpl_vars['objectForReview']->getEditorInitials())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
	</tr>
	<tr>
		<td colspan="<?php echo $this->_tpl_vars['colspan']; ?>
" class="<?php if ($this->_tpl_vars['objectForReviewAssignments']->eof()): ?>end<?php endif; ?>separator">&nbsp;</td>
	</tr>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php if ($this->_tpl_vars['objectForReviewAssignments']->wasEmpty() && $this->_tpl_vars['search'] != ""): ?>
	<tr>
		<td colspan="<?php echo $this->_tpl_vars['colspan']; ?>
" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.objectsForReview.search.noResults"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="<?php echo $this->_tpl_vars['colspan']; ?>
" class="endseparator">&nbsp;</td>
	</tr>
<?php elseif ($this->_tpl_vars['objectForReviewAssignments']->wasEmpty()): ?>
	<tr>
		<td colspan="<?php echo $this->_tpl_vars['colspan']; ?>
" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.objectsForReview.objectForReviewAssignments.noneCreated"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="<?php echo $this->_tpl_vars['colspan']; ?>
" class="endseparator">&nbsp;</td>
	</tr>
<?php else: ?>
	<tr>
		<td colspan="<?php echo $this->_tpl_vars['colspanPage']; ?>
" align="left"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['objectForReviewAssignments']), $this);?>
</td>
		<td colspan="<?php echo $this->_tpl_vars['colspanPage']; ?>
" align="right"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('anchor' => 'objectForReviewAssignments','name' => 'objectForReviewAssignments','iterator' => $this->_tpl_vars['objectForReviewAssignments'],'sort' => $this->_tpl_vars['sort'],'sortDirection' => $this->_tpl_vars['sortDirection'],'filterEditor' => $this->_tpl_vars['filterEditor'],'filterType' => $this->_tpl_vars['filterType'],'searchField' => $this->_tpl_vars['searchField'],'searchMatch' => $this->_tpl_vars['searchMatch'],'search' => $this->_tpl_vars['search']), $this);?>
</td>
	</tr>
<?php endif; ?>
</table>