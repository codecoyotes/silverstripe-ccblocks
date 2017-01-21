<?php

class SliderBlock extends Block {

		public function singular_name() {
				return _t('SliderBlock.SINGULARNAME', 'Slider Block');
		}

		public function plural_name() {
				return _t('SliderBlock.PLURALNAME', 'Slider Blocks');
		}

		private static $has_many = array(
				'Slides' => 'SliderBlockSlider'
		);

		public function fieldLabels($includeRelations = true) {
				$labels = parent::fieldLabels($includerelations);
				$labels['Slides'] = _t('SliderBlock.has_many_Slides', 'Slides');
				return $labels;
		}

}

class SliderBlockSlider extends DataObject {

		private static $db = array(
				'Title' => 'Varchar(255)',
				'SubTitle' => 'Varchar(255)',
				'Sort' => 'Int'
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
		
		public function getCMSFields() {
				$fields = parent::getCMSFields();
				$fields->removeByName('SliderBlockID');
				$fields->removeByName('Sort');
				return $fields;
		}

}
