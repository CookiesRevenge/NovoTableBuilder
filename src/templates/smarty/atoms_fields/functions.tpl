<td class="text-center">
    {foreach $field_definition.functions as $function}
        {include "builder_templates/function_buttons/{$function}.tpl"}
    {/foreach}
</td>