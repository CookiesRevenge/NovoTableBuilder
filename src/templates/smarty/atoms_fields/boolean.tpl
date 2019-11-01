<td>
    {if $record[$field_definition.field_name] == 0}
        NO
    {else if $record[$field_definition.field_name] == 1}
        YES
    {/if}
</td>