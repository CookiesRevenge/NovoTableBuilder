<td>
    {if $record[$field_definition.field_name] == 0}
        /
    {else}
        {$record[$field_definition.field_name]|timezone_date:"d.m.Y - H:i:s"}
    {/if}
</td>