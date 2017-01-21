<?php

class USPBlock extends Block {

		public function singular_name() {
				return _t('USPBlock.SINGULARNAME', 'USP Block');
		}

		public function plural_name() {
				return _t('USPBlock.PLURALNAME', 'USP Blocks');
		}

		private static $db = array(
				'USPs' => 'MultiValueField',
				'IconClass' => 'Varchar',
				'NumCols' => 'Int'
		);

		public function fieldLabels($includeRelations = true) {
				$labels = parent::fieldLabels($includerelations);
				$labels['USPs'] = _t('USPBlock.db_USPs', 'USPs');
				$labels['IconClass'] = _t('USPBlock.db_IconClass', 'Icon class');
				$labels['NumCols'] = _t('USPBlock.db_NumCols', 'Num cols');
				return $labels;
		}

}
