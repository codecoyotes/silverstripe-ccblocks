<?php

class CounterBlock extends Block {

		public function singular_name() {
				return _t('CounterBlock.SINGULARNAME', 'Counter Block');
		}

		public function plural_name() {
				return _t('CounterBlock.PLURALNAME', 'Counter Blocks');
		}

		private static $has_many = array(
				'Counters' => 'CounterBlockCounter'
		);

		public function fieldLabels($includerelations = true) {
				$labels = parent::fieldLabels($includerelations);
				$labels['Counters'] = _t('CounterBlock.has_many_Counters', 'Counters');
				return $labels;
		}

		public function getCMSFields() {
				$fields = parent::getCMSFields();
				$countersField = $fields->dataFieldByName('Counters');
				if ($countersField) {
						$countersFieldConfig = GridFieldConfig_RecordEditor::create();
						$countersField->setConfig($countersFieldConfig);
				}
				return $fields;
		}

}

class CounterBlockCounter extends DataObject {

		private static $singular_name = 'Counter';
		private static $plural_name = 'Counters';
		private static $db = array(
				'CountValue' => 'Varchar',
				'TopText' => 'Varchar',
				'TopTextIsIcon' => 'Boolean',
				'BottomText' => 'Varchar',
				'BottomTextIsIcon' => 'Boolean',
				'CounterSuffix' => 'Varchar',
				'CounterPrefix' => 'Varchar',
				'BlockClass' => 'Varchar',
				'Sort' => 'Int'
		);
		private static $has_one = array(
				'CounterBlock' => 'CounterBlock'
		);
		private static $summary_fields = array(
				'CounterSuffix',
				'CountValue',
				'CounterPrefix',
				'TopText',
				'BottomText'
		);
		private static $default_sort = 'Sort';

		public function getCMSFields() {
				$fields = parent::getCMSFields();
				$fields->removeByName('CounterBlockID');
				$fields->removeByName('Sort');
				return $fields;
		}

}
