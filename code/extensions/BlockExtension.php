<?php

class CCBlockExtension extends DataExtension
{

	private static $has_one = array(
		'BackgroundImage' => 'Image'
	);

	public function updateCMSFields(FieldList $fields)
	{
		$fields->addFieldToTab('Root.Background', $backgroundImageField = UploadField::create('BackgroundImage'));
	}

}