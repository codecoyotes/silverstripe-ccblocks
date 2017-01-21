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

		public function fieldLabels($includeRelations = true) {
				$labels = parent::fieldLabels($includerelations);
				$labels['Counters'] = _t('CounterBlock.has_many_Counters', 'Counters');
				return $labels;
		}

}

class CounterBlockCounter extends DataObject {

		private static $db = array(
				'CountValue' => 'Varchar',
				'TopText' => 'Varchar',
				'BottomText' => 'Varchar',
				'Sort' => 'Int'
		);
		private static $has_one = array(
				'CounterBlock' => 'CounterBlock'
		);
		private static $summary_fields = array(
				'CountValue',
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
