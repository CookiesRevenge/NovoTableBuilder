<input type="hidden"
    class="form-control js__filter-input-hidden" 
    id="js__filter-{$input_variable.name}" 
    name="{$input_variable.name}" 
    {if isset($filters[$input_variable.name])}value="{$filters[$input_variable.name]}"{/if} />