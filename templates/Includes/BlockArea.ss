<div class="block_area block_area_$AreaID.LowerCase" data-areaid="$AreaID">
    <% loop BlockArea %>
		<div class="block $BackgroundColorClass $BackgroundOpacityClass<% if $BackgroundAltClass %> bg-alt<% end_if %><% if $BackgroundImage %> visual visual-lg visual-overlay parallax<% end_if %>"
             <% if $BackgroundImage %>style="background-image: url('$BackgroundImage.URL')"<% end_if %>>
            <% if not $FullWidth %>
			<div class="container">
            <% end_if %>
            $BlockHTML
            <% if not $FullWidth %>
			</div>
            <% end_if %>
		</div>
    <% end_loop %>
</div>