<div>
    <% loop $Counters %>
		<div>
            $TopText
			<span data-counter="$CountValue">$CountValue</span>
            $BottomText
		</div>
    <% end_loop %>
</div>