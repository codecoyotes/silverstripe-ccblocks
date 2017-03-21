<?php

class LinkExtension extends DataExtension {

	private static $db = array(
		'ButtonClasses' => 'Varchar',
		'ButtonSizeClasses' => 'Varchar'
	);

	public function updateCMSFields(FieldList $fields)
	{
		$buttonClasses = Config::inst()->get('CCBlocks', 'linkclasses');
		if($buttonClasses){
			$fields->addFieldToTab('Root.Main', DropdownField::create('ButtonClasses', null, $buttonClasses)->setHasEmptyDefault(true));
		}
		$buttonSizeClasses = Config::inst()->get('CCBlocks', 'linksizeclasses');
		if($buttonSizeClasses){
			$fields->addFieldToTab('Root.Main', DropdownField::create('ButtonSizeClasses', null, $buttonSizeClasses)->setHasEmptyDefault(true));
		}
	}

	public function updateClasses(&$classes){
		$classes = array_merge($classes, explode(' ', $this->owner->ButtonClasses));
		$classes = array_merge($classes, explode(' ', $this->owner->ButtonSizeClasses));
	}

}