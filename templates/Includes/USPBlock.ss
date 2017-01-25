<% if $ShowTitle %>
	<h2>$Title</h2>
<% end_if %>
<div class="row">
    <% loop $USPCols %>
        <div class="$Top.ColClass">
            <ul>
            <% loop $USPs %>
                <li><i class="$Top.IconClass"></i> $USP</li>
            <% end_loop %>
			</ul>
        </div>
    <% end_loop %>
</div>