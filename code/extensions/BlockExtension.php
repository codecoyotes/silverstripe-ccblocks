<?php

class CCBlockExtension extends DataExtension
{

	private static $db = array(
		'ShowTitle' => 'Boolean',
		'BackgroundColorClass' => 'Varchar',
		'BackgroundOpacityClass' => 'Varchar',
		'BackgroundAltClass' => 'Boolean',
		'FullWidth' => 'Boolean'
	);

	private static $has_one = array(
		'BackgroundImage' => 'Image'
	);

	public function updateCMSFields(FieldList $fields)
	{
		$fields->addFieldToTab('Root.Background', $backgroundImageField = UploadField::create('BackgroundImage'));
		$backgroundColorClasses = Config::inst()->get('CCBlocks', 'backgroundcolorclasses');
		$backgroundOpacityClasses = Config::inst()->get('CCBlocks', 'backgroundopacityclasses');
		if($backgroundColorClasses){
			$fields->addFieldToTab('Root.Background', DropdownField::create('BackgroundColorClass', 'Background color', $backgroundColorClasses));
		}else{
			$fields->addFieldToTab('Root.Background', TextField::create('BackgroundColorClass', 'Background color'));
		}
		if($backgroundOpacityClasses){
			$fields->addFieldToTab('Root.Background', DropdownField::create('BackgroundOpacityClass', 'Background opacity', $backgroundOpacityClasses));
		}else{
			$fields->addFieldToTab('Root.Background', TextField::create('BackgroundOpacityClass', 'Background opacity'));
		}
		$fields->addFieldToTab('Root.Background', CheckboxField::create('BackgroundAltClass', 'Add background alt class'));
	}

}