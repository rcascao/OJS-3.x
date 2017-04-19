{**
 * block.tpl
 *
 * Copyright (c) 2000-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Most Popular Articles
 *
 *}
<div class="block" id="sidebarNavigation">
	<span class="blockTitle">{translate key="plugins.blocks.popularArticles.displayName"}</span>
{foreach from=$popularArticles item=article}
	&#187;<a href="{url page="article" op="view" path=$article->getArticleId()}">{$article->getArticleTitle()|escape}</a><br />
	<strong>{$article->getViews()} {translate key="plugins.blocks.popularArticles.viewsSince"}: {$article->getDatePublished()|date_format:$dateFormatShort}</strong><br />
{/foreach}
</div>