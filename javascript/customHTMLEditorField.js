(function($) {
	$.entwine('ss', function($) {
		$('form.htmleditorfield-form.htmleditorfield-linkform').entwine({
			getLinkAttributes: function() {
				var attributes = this._super();
				attributes.class = this.find(':input[name=Classes]').val();
				return attributes;
			},
			updateFromEditor: function() {
				var selectedEl = this.getSelection();
				if(selectedEl.length) {
					if(!selectedEl.is('a')) {
						selectedEl = selectedEl.parents('a:first');
					}
					var selectedClass = selectedEl.attr('class');
					if(selectedClass == undefined){
						selectedClass = '';
					}
					var select = this.find(':input[name=Classes]');
					select.val(selectedClass);
				}
				this._super();
			}
		});
	});
}(jQuery));