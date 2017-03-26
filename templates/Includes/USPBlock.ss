<% if $ShowTitle %>
<h2 class="text-center">$Title</h2>
<% end_if %>
<div class="row">
    <% loop $USPCols %>
		<div class="$Top.ColClass">
				<ul class="list heading-sm">
            <% loop $USPs %>
						<li><i class="$Top.IconClass color-success"></i> $USP</li>
            <% end_loop %>
				</ul>
		</div>
    <% end_loop %>
</div>