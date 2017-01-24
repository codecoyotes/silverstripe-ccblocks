<div class="block_area block_area_$AreaID.LowerCase" data-areaid="$AreaID">
    <% loop BlockArea %>
		<div <% if $BackgroundImage %> class="block visual visual-lg visual-overlay parallax" style="background-image: url('$BackgroundImage.URL')"<% end_if %>>
			<div class="container">
                $BlockHTML
			</div>
		</div>
    <% end_loop %>
</div>