<?php

class CCBlockExtension extends DataExtension {

		private static $db = array(
				'ShowTitle' => 'Boolean',
				'BackgroundColorClass' => 'Varchar',
				'BackgroundOpacityClass' => 'Varchar',
				'BackgroundAltClass' => 'Boolean',
				'FullWidth' => 'Boolean',
				'BlockSize' => 'Varchar'
		);
		private static $has_one = array(
				'BackgroundImage' => 'Image'
		);
		private static $block_sizes = array(
				'' => 'default',
				'block-xl' => 'Block XL',
				'block-lg' => 'Block LG',
				'block-md' => 'Block MD',
				'block-sm' => 'Block SM',
				'block-xs' => 'Block XS'
		);

		public function updateCMSFields(FieldList $fields) {
				$fields->addFieldToTab('Root.Main', new DropdownField('BlockSize', 'Block size', self::$block_sizes));
				$fields->addFieldToTab('Root.Background', $backgroundImageField = UploadField::create('BackgroundImage'));
				$backgroundColorClasses = Config::inst()->get('CCBlocks', 'backgroundcolorclasses');
				$backgroundOpacityClasses = Config::inst()->get('CCBlocks', 'backgroundopacityclasses');
				if ($backgroundColorClasses) {
						$fields->addFieldToTab('Root.Background', DropdownField::create('BackgroundColorClass', 'Background color', $backgroundColorClasses));
				} else {
						$fields->addFieldToTab('Root.Background', TextField::create('BackgroundColorClass', 'Background color'));
				}
				if ($backgroundOpacityClasses) {
						$fields->addFieldToTab('Root.Background', DropdownField::create('BackgroundOpacityClass', 'Background opacity', $backgroundOpacityClasses));
				} else {
						$fields->addFieldToTab('Root.Background', TextField::create('BackgroundOpacityClass', 'Background opacity'));
				}
				$fields->addFieldToTab('Root.Background', CheckboxField::create('BackgroundAltClass', 'Add background alt class'));
		}

}
