<div>
    <% if $ShowTitle %>
		<h2>$Title</h2>
    <% end_if %>
    <% loop $Counters %>
		<div>
            $TopText
			<span data-counter="$CountValue">$CountValue</span>
            $BottomText
		</div>
    <% end_loop %>
</div>