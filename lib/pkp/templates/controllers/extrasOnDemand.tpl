{**
 * controllers/extrasOnDemand.tpl
 *
 * Copyright (c) 2013-2016 Simon Fraser University Library
 * Copyright (c) 2003-2016 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Basic markup for extras on demand widget.
 *}
<script type="text/javascript">
	// Initialise JS handler.
	$(function() {ldelim}
		$('#{$id}').pkpHandler(
			'$.pkp.controllers.ExtrasOnDemandHandler');
	{rdelim});
</script>
{if !$lessDetailsText}
	{assign var=lessDetailsText value=$moreDetailsText}
{/if}
{if !$lessDetailsLabel}
	{assign var=lessDetailsLabel value=$moreDetailsLabel}
{/if}
<div id="{$id}" class="pkp_controllers_extrasOnDemand">
	<div class="toggleExtras">
		<span class="ui-icon"></span>
		<span class="toggleExtras-inactive">{translate key=$moreDetailsText}
			{if $moreDetailsLabel}
				<span class="extrasOnDemand-label">{translate key=$moreDetailsLabel}</span>
			{/if}
		</span>
		<span class="toggleExtras-active">{translate key=$lessDetailsText}
			{if $lessDetailsLabel}
				<span class="extrasOnDemand-label">{translate key=$lessDetailsLabel}</span>
			{/if}
		</span>
	</div>
	
	<div class="extrasContainer">
		{$extraContent}
	</div>
</div>
