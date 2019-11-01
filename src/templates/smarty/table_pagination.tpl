{if $total_pages > 1}
<nav aria-label="Page navigation" class="table_pagination">
	<ul class="pagination js__novo-table-pagination pagination-sm">
		<li class="page-item {if $active_page == 1}disabled{/if}">
			<a href="javascript:;" aria-label="Previous" class="prev page-link">
				<span aria-hidden="true">&laquo;</span>
			</a>
		</li>
		{if $total_pages <= 10}
			  {for $page=1 to $total_pages}
				    <li class="page-item {if $page == $active_page}active{/if}"><a class="page-link" href="javascript:;">{$page}</a></li>
			  {/for}
		{else}
			  {if $active_page <= 4 || $active_page >= $total_pages - 3}
				{for $page=1 to 5}
					<li class="page-item {if $page == $active_page}active{/if}"><a class="page-link" href="javascript:;">{$page}</a></li>
				{/for}
				<span style="float:left;margin:0 10px;height:30px;line-height:26px">...</span>
				{for $page=$total_pages-4 to $total_pages}
					<li class="page-item {if $page == $active_page}active{/if}" data-test="{$active_page}-{$page}">
                        <a class="page-link" href="javascript:;">{$page}</a>
                    </li>
				{/for}
			  {else}
				{if $active_page > 4 && $active_page < $total_pages - 3}
					{for $page=1 to 4}
						<li class="page-item"><a class="page-link" href="javascript:;">{$page}</a></li>
					{/for}
						<span style="float:left;margin:0 10px;height:30px;line-height:26px">...</span>
						{if $active_page - 1 > 4}<li class="page-item"><a class="page-link" href="javascript:;">{$active_page - 1}</a></li>{/if}
						<li class="page-item active"><a class="page-link" href="javascript:;">{$active_page}</a></li>
						{if $active_page + 1 < $total_pages-3}<li class="page-item"><a class="page-link" href="javascript:;">{$active_page + 1}</a></li>{/if}
						<span style="float:left;margin:0 10px;height:30px;line-height:26px">...</span>
					{for $page=$total_pages-3 to $total_pages}
						<li class="page-item"><a class="page-link" href="javascript:;">{$page}</a></li>
					{/for}
				{/if}
			{/if}
		{/if}
		<li class="page-item {if $active_page == $total_pages}disabled{/if}">
			<a href="javascript:;" aria-label="Next" class="next page-link">
				<span aria-hidden="true">&raquo;</span>
			</a>
		</li>
	</ul>
</nav>
{/if}