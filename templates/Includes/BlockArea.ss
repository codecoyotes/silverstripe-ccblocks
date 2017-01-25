<div class="block_area block_area_$AreaID.LowerCase" data-areaid="$AreaID">
    <% loop BlockArea %>
		<div class="block $BackgroundColor<% if $BackgroundImage %> visual visual-lg visual-overlay parallax<% end_if %>" <% if $BackgroundImage %>style="background-image: url('$BackgroundImage.URL')"<% end_if %>>
			<div class="container">
                $BlockHTML
			</div>
		</div>
    <% end_loop %>
</div>