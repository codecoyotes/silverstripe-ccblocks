<div class="block_area block_area_$AreaID.LowerCase" data-areaid="$AreaID">
    <% loop BlockArea %>
		<div class="block $BlockSize $BackgroundColorClass $BackgroundOpacityClass<% if $BackgroundAltClass %> bg-alt<% end_if %><% if $BackgroundImage %> visual visual-lg visual-overlay parallax<% end_if %>"
				 <% if $BackgroundImage %>style="background-image: url('$BackgroundImage.URL')"<% end_if %>>
				 <% if $BackgroundImage %>
				 <div class="visual-content">
						<% end_if %>
						<div class="container<% if $FullWidth %>-fluid<% end_if %>">
								$BlockHTML
						</div>
						<% if $BackgroundImage %>
				</div>
				<% end_if %>
		</div>
		<% end_loop %>
</div>