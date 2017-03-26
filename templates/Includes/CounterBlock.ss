<% if $ShowTitle %>
<h2>$Title</h2>
<% end_if %>
<div class="items-horizontal items-stretch">
		<% loop $Counters %>
		<div class="$BlockClass">
				<% if $TopText %>
				<div class="heading-lg">
						<% if $TopTextIsIcon %>
						<i class="$TopText"></i>
						<% else %>
						$TopText
						<% end_if %>
				</div>
				<% end_if %>
				<div class="heading-lg">
						$CounterSuffix<span data-counter="$CountValue">$CountValue</span>$CounterPrefix
				</div>
				<% if $BottomText %>
				<div class="heading-md">
						<% if $BottomTextIsIcon %>
						<i class="$BottomText"></i>
						<% else %>
						$BottomText
						<% end_if %>
				</div>
				<% end_if %>
		</div>
		<% end_loop %>
</div>