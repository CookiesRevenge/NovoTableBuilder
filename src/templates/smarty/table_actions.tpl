{if $table_actions|count > 0}
    <div class="js__novo-table-actions table-builder-actions text-right mr-3 w-100">
        {foreach $table_actions as $table_action}
            {include file="table_buttons/{$table_action.type}.tpl"}
        {/foreach}
    </div>
{/if}