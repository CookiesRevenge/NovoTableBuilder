<p class="pb-3">Records found for search criteria: <strong>{$total_records}</strong></p>
<div class="table-responsive">
    <table class="table table-bordered table-striped table-sm" data-table-name="{$entity}">
        <thead>
            <tr>
                {foreach $field_definitions as $field_definition}
                    {if isset($field_definition.sortable) && $field_definition.sortable}
                        <th>                     
                          <a href="javascript:;" 
                             {if (($sorting_column === $field_definition.field_name) && isset($sorting_order))}data-sort-order={$sorting_order}{/if} 
                             data-sort-field="{$field_definition.field_name}" 
                             class="js__table-sorting table-sorting {if $sorting_column === $field_definition.field_name}table-sorted{/if}">
                                {$field_definition.label}
                          </a>
                        </th>
                    {else}
                        {if $field_definition.type === "multiline-checkbox"}
                          <th>
                            <input type="checkbox" class="js__table-multiline-checkbox-selectall" />
                            <span>Select All</span>
                          </th>
                        {else}
                          <th>{$field_definition.label}</th>
                        {/if}
                    {/if}
                {/foreach}
            </tr>
        </thead>
        <tbody>
            {if count($records) > 0}
                {foreach $records as $record}
                    <tr class="{if isset($record.Rejected) && $record.Rejected == 1}tr-rejected{/if}">
                        {foreach $field_definitions as $field_definition}
                            {include file="atoms_field/{$field_definition.type}.tpl"}
                        {/foreach}
                    </tr>
                {/foreach}
            {else}
                <tr>
                    <td colspan="{count($field_definitions)}" class="text-center p-1">
                        <small>*** NO RESULTS MATCH SEARCH CRITERIA ***</small>
                    </td>
                </tr>
            {/if}
        </tbody>
    </table>
</div>
{if $pagination}
    {include "table_pagination.tpl"}
{/if}