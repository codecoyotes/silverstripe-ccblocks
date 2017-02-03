<?php

class SliderBlock extends Block
{

	private static $db = array(
		'ShowArrows' => 'Boolean',
		'ShowPaging' => 'Boolean'
	);

	public function singular_name()
	{
		return _t('SliderBlock.SINGULARNAME', 'Slider Block');
	}

	public function plural_name()
	{
		return _t('SliderBlock.PLURALNAME', 'Slider Blocks');
	}

	private static $has_many = array(
		'Slides' => 'SliderBlockSlider'
	);

	public function fieldLabels($includerelations = true)
	{
		$labels = parent::fieldLabels($includerelations);
		$labels['Slides'] = _t('SliderBlock.has_many_Slides', 'Slides');
		return $labels;
	}

	public function getCMSFields()
	{
		$fields = parent::getCMSFields();
		$slidesField = $fields->dataFieldByName('Slides');
		if($slidesField){
			$slidesFieldConfig = GridFieldConfig_RecordEditor::create();
			$slidesFieldConfig->addComponent(new GridFieldOrderableRows());
			$slidesField->setConfig($slidesFieldConfig);
		}
		return $fields;
	}

}

class SliderBlockSlider extends DataObject
{

	private static $singular_name = 'Slide';
	private static $plural_name = 'Slides';

	private static $db = array(
		'Title' => 'Varchar(255)',
		'SubTitle' => 'Varchar(255)',
		'Sort' => 'Int',
		'OverlayPosition' => 'Varchar'
	);
	private static $has_one = array(
		'SliderBlock' => 'SliderBlock',
		'Image' => 'Image',
		'Button' => 'Link'
	);
	private static $summary_fields = array(
		'Title'
	);
	private static $default_sort = 'Sort';
	private static $overlay_positions = array(
		'right-top' => 'Right top',
		'right-center' => 'Right center',
		'right-bottom' => 'Right bottom',

		'left-top' => 'Left top',
		'left-center' => 'Left center',
		'left-bottom' => 'Left bottom',

		'center-top' => 'Center top',
		'center-bottom' => 'Center bottom',
		'' => 'Center center'
	);

	public function getCMSFields()
	{
		$fields = parent::getCMSFields();
		$fields->removeByName('SliderBlockID');
		$fields->removeByName('Sort');
		$fields->addFieldToTab('Root.Main', new LinkField('ButtonID', 'Button'));
		$fields->addFieldToTab('Root.Main', new DropdownField('OverlayPosition', 'Overlay position', self::$overlay_positions));
		return $fields;
	}

}
