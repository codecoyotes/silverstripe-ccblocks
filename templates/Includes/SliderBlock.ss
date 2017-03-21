<% if $ShowTitle %>
	<h2>$Title</h2>
<% end_if %>
<div class="slider" data-slider-settings='{"infinite":false,"dots":<% if $ShowPaging %>true<% else %>false<% end_if %>,"arrows":<% if $ShowArrows %>true<% else %>false<% end_if %>}'>
    <% loop $Slides %>
		<div class="slider-slide slide-overlay">
            $Image.CroppedImage(2000,600)
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