<div {if $input_variable.html_class}class="{$input_variable.html_class}"{/if}>
    <label class="mb-2"><strong>{$input_variable.label}</strong></label>
    <input type="text"
           class="form-control" 
           id="js__filter-{$input_variable.name}" 
           name="{$input_variable.name}" 
           placeholder="{if null !== $input_variable.placeholder}{$input_variable.placeholder}{else}Type to filter{/if}" />
</div>