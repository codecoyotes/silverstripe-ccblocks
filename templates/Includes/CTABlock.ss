<div class="cta $BgClass">
	<div class="items-horizontal items-vertical-xs items-middle items-spaced">
		<p class="heading-xl text-uppercase item-left">
			<% if $IconClasses %><i class="$IconClasses"></i> <% end_if %>$MainLine
		</p>
        <% if $SubLine %>
            <p class="item-center">
                $SubLine
            </p>
        <% end_if %>
        <% if $Button %>
            <div class="item-right">
                <a href="$Button.Link" class="btn $Button.ButtonClasses $Button.ButtonSizeClasses">$Button.Title</a>
            </div>
        <% end_if %>
	</div>
</div>