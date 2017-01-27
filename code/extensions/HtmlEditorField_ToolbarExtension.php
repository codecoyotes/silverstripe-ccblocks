<?php

class HtmlEditorField_ToolbarExtension extends Extension {

		public function updateLinkForm($form) {
				$classes = Config::inst()->get('CCBlocks', 'linkclasses');
				$numericLabelTmpl = '<span class="step-label"><span class="flyout">%d</span><span class="arrow"></span>'
								. '<strong class="title">%s</strong></span>';
				$fields = $form->Fields();
				$fields->push($styleComposite = new CompositeField(
								LiteralField::create('Step3', '<div class="step3">'
												. sprintf($numericLabelTmpl, '3', _t('HtmlEditorField.DISPLAY', 'Display')) . '</div>'
								), LiteralField::create('ExtraCss', '<style>div.force-visible{display: block!important;}</style>'), $styleField = DropdownField::create('Classes', 'Style', $classes)
				));
				$styleComposite->addExtraClass('ss-insert-link content');
				$styleField->addExtraClass('force-visible');
				$form->setFields($fields);
		}

}
