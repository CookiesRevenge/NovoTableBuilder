{if $filter_definitions|count > 0}
    <div class="filters table-builder-filters row">

        <form id="form_id" class="js__novo-table-filters d-flex flex-wrap w-100 pt-3 pb-3 pl-1 pr-1 ml-3 mr-3 mb-3 border border-light" data-target-table="#js__novo-table-wrapper">

            {if isset($preceeding_partial) && !empty($preceeding_partial)}
                <div class="col-md-12">
                    {include $preceeding_partial}
                </div>
            {/if}

            {foreach $filter_definitions as $filter_definition}
                {assign var="input_variable" value=$filter_definition}
                {include file="./atoms_filters/{$filter_definition.type}.tpl"}
            {/foreach}

            <div class="col-md-3">
                <br clear="all" />
                <button type="button" class="btn btn-sm btn-primary js__btn-table-search mt-2">
                    <span class="fas fa-search"></span>
                    &nbsp;Search
                </button>
                <button type="button" class="btn btn-sm btn-warning js__btn-table-filters-reset mt-2">
                    <span class="fas fa-ban"></span>
                    &nbsp;Reset
                </button>
            </div>

            <br clear="all" />
            <br clear="all" />

            {if isset($succeeding_partial) && !empty($succeeding_partial)}
                <div class="col-md-12">
                    {include $succeeding_partial}
                </div>
            {/if}

        </form>

    </div>
{/if}