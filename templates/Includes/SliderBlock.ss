<div class="slider">
	<div class="slider-wrapper">
        <% loop $Slides %>
			<div class="slider-slide">
                <% if $Title %>
					<h1>$Title</h1>
                <% end_if %>
				<% if $SubTitle %>
					<h2>$SubTitle</h2>
				<% end_if %>
				<% if $Button %>
					$Button
				<% end_if %>
                $Image
			</div>
        <% end_loop %>
	</div>
	<div class="slider-button-prev"></div>
	<div class="slider-button-next"></div>
	<div class="slider-pagination"></div>
</div>