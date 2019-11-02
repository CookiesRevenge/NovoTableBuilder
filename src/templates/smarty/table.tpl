{if isset({$title})}<h1 class="h4 mb-4 text-gray-800">{$title}</h1>{/if}
{include "table_filters.tpl"}
{if isset($table_actions) && $table_actions}
	{include "table_actions.tpl"}
{/if}
<div class="card shadow p-3 mt-3 mb-5">
	<section id="js__novo-table-wrapper" data-search-url="{$search_url}">
		{include "table_results.tpl"}
	</section>
</div>
{if isset($multiline_actions) && $multiline_actions}
	{include "multiline_actions.tpl"}
{/if}