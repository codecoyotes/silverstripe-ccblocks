<div>
    <% if $ShowTitle %>
		<h2>$Title</h2>
    <% end_if %>
	<div class="items-horizontal items-stretch">
        <% loop $Counters %>
			<div>
                $TopText<br />
				<span data-counter="$CountValue">$CountValue</span><br />
                $BottomText
			</div>
        <% end_loop %>
	</div>
</div>

<%--Icon ipv text mogelijk--%>
<%--Hoe opmaak?--%>
<%--Counter een achtergrond transparant?--%>
<%--Block een parallax achtergrond?--%>