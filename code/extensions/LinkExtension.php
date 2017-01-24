<?php

class LinkExtension extends DataExtension {

	private static $db = array(
		'ButtonClasses' => 'Varchar'
	);

	public function updateClasses(&$classes){
		$classes = array_merge($classes, explode(' ', $this->owner->ButtonClasses));
	}

}