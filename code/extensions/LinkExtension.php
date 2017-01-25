<?php

class LinkExtension extends DataExtension {

	private static $db = array(
		'ButtonClasses' => 'Varchar'
	);

	public function updateCMSFields(FieldList $fields)
	{
		$buttonClasses = Config::inst()->get('HtmlEditorField_Toolbar', 'linkstyles');
		if($buttonClasses){
			$fields->addFieldToTab('Root.Main', new DropdownField('ButtonClasses', null, $buttonClasses));
		}
	}

	public function updateClasses(&$classes){
		$classes = array_merge($classes, explode(' ', $this->owner->ButtonClasses));
	}

}