<% if $ShowTitle %>
	<h2>$Title</h2>
<% end_if %>
<div class="slider" style="margin: 0;">
	<div class="slider-wrapper">
        <% loop $Slides %>
			<div class="slider-slide slide-overlay" style="background-image: url('$Image.CroppedImage(1280,600).URL');">
                <% if $Title || $SubTitle || $Button %>
					<div class="slider-content $OverlayPosition">
                        <% if $Title %>
							<h1>$Title</h1>
                        <% end_if %>
                        <% if $SubTitle %>
							<h2>$SubTitle</h2>
                        <% end_if %>
                        <% if $Button %>
                            $Button
                        <% end_if %>
					</div>
                <% end_if %>
			</div>
        <% end_loop %>
	</div>
    <% if $ShowArrows %>
		<div class="slider-button-prev"></div>
		<div class="slider-button-next"></div>
    <% end_if %>
    <% if $ShowPaging %>
		<div class="slider-pagination"></div>
    <% end_if %>
</div>