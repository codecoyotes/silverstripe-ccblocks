<?php

class Col2Block extends Block {

		public function singular_name() {
				return _t('Col2Block.SINGULARNAME', '2 col Block');
		}

		public function plural_name() {
				return _t('Col2Block.PLURALNAME', '2 col Blocks');
		}

		private static $db = array(
				'Col1Content' => 'HTMLText',
				'Col2Content' => 'HTMLText',
				'Col1Size' => 'Varchar',
				'Col2Size' => 'Varchar'
		);

		public function fieldLabels($includeRelations = true) {
				$labels = parent::fieldLabels($includerelations);
				$labels['Col1Content'] = _t('Col2Block.db_Col1Content', 'Col 1 content');
				$labels['Col2Content'] = _t('Col2Block.db_Col2Content', 'Col 2 content');
				$labels['Col1Size'] = _t('Col2Block.db_Col1Size', 'Col 1 size');
				$labels['Col2Size'] = _t('Col2Block.db_Col2Size', 'Col 2 size');
				return $labels;
		}

}
