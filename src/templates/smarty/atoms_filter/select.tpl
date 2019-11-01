<div {if $input_variable.html_class}class="{$input_variable.html_class}"{/if}>

    <label class="mb-2"><strong>{$input_variable.label}</strong></label>

    <div class="dropdown js__dropdown w-100" id="js__filter-{$input_variable.name}">

	    <button class="form-control btn btn-dropdown dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
		    <span class="dropdown-selection">
                Select Option
		    </span>
		    <span class="caret"></span>
	    </button>

	    <ul class="dropdown-menu" aria-labelledby="js__filter-label-{$input_variable.name}">
            {if isset($filters[$input_variable.name])}
		        <li>
			        <a href="javascript:;" class="reset-dropdown js__reset-dropdown">Clear selection</a>
		        </li>
		        {foreach $filters[$input_variable.name] as $dataset_record}
		            <li>
                        <a href="javascript:;" data-id="{$dataset_record.Id}">{$dataset_record.Title}</a>
                    </li>
		        {/foreach}
            {/if}
	    </ul>

	    <input type="hidden" name="{$input_variable.name}" vito-name="{$input_variable.name}" />
    </div>
</div>