<?php

class CCBlockExtension extends DataExtension
{

	private static $db = array(
		'ShowTitle' => 'Boolean',
		'BackgroundColor' => 'Varchar'
	);

	private static $has_one = array(
		'BackgroundImage' => 'Image'
	);

	public function updateCMSFields(FieldList $fields)
	{
		$fields->addFieldToTab('Root.Background', $backgroundImageField = UploadField::create('BackgroundImage'));
		$fields->addFieldToTab('Root.Background', TextField::create('BackgroundColor'));
	}

}