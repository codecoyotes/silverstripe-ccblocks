<?php

class Col3Block extends Block {

		public function singular_name() {
				return _t('Col2Block.SINGULARNAME', '3 col Block');
		}

		public function plural_name() {
				return _t('Col2Block.PLURALNAME', '3 col Blocks');
		}

		private static $db = array(
				'Col1Content' => 'HTMLText',
				'Col2Content' => 'HTMLText',
				'Col3Content' => 'HTMLText',
				'Col1SizeLG' => 'Varchar',
				'Col1SizeMD' => 'Varchar',
				'Col1SizeSM' => 'Varchar',
				'Col1SizeXS' => 'Varchar',
				'Col2SizeLG' => 'Varchar',
				'Col2SizeMD' => 'Varchar',
				'Col2SizeSM' => 'Varchar',
				'Col2SizeXS' => 'Varchar',
				'Col3SizeLG' => 'Varchar',
				'Col3SizeMD' => 'Varchar',
				'Col3SizeSM' => 'Varchar',
				'Col3SizeXS' => 'Varchar'
		);
		private static $colSizesLG = array(
				'' => 'None',
				'col-lg-12' => 'Col 12',
				'col-lg-11' => 'Col 11',
				'col-lg-10' => 'Col 10',
				'col-lg-9' => 'Col 9',
				'col-lg-8' => 'Col 8',
				'col-lg-7' => 'Col 7',
				'col-lg-6' => 'Col 6',
				'col-lg-5' => 'Col 5',
				'col-lg-4' => 'Col 4',
				'col-lg-3' => 'Col 3',
				'col-lg-2' => 'Col 2',
				'col-lg-1' => 'Col 1',
				'hidden-lg' => 'Hidden'
		);
		private static $colSizesMD = array(
				'' => 'None',
				'col-md-12' => 'Col 12',
				'col-md-11' => 'Col 11',
				'col-md-10' => 'Col 10',
				'col-md-9' => 'Col 9',
				'col-md-8' => 'Col 8',
				'col-md-7' => 'Col 7',
				'col-md-6' => 'Col 6',
				'col-md-5' => 'Col 5',
				'col-md-4' => 'Col 4',
				'col-md-3' => 'Col 3',
				'col-md-2' => 'Col 2',
				'col-md-1' => 'Col 1',
				'hidden-md' => 'Hidden'
		);
		private static $colSizesSM = array(
				'' => 'None',
				'col-sm-12' => 'Col 12',
				'col-sm-11' => 'Col 11',
				'col-sm-10' => 'Col 10',
				'col-sm-9' => 'Col 9',
				'col-sm-8' => 'Col 8',
				'col-sm-7' => 'Col 7',
				'col-sm-6' => 'Col 6',
				'col-sm-5' => 'Col 5',
				'col-sm-4' => 'Col 4',
				'col-sm-3' => 'Col 3',
				'col-sm-2' => 'Col 2',
				'col-sm-1' => 'Col 1',
				'hidden-sm' => 'Hidden'
		);
		private static $colSizesXS = array(
				'' => 'None',
				'col-xs-12' => 'Col 12',
				'col-xs-11' => 'Col 11',
				'col-xs-10' => 'Col 10',
				'col-xs-9' => 'Col 9',
				'col-xs-8' => 'Col 8',
				'col-xs-7' => 'Col 7',
				'col-xs-6' => 'Col 6',
				'col-xs-5' => 'Col 5',
				'col-xs-4' => 'Col 4',
				'col-xs-3' => 'Col 3',
				'col-xs-2' => 'Col 2',
				'col-xs-1' => 'Col 1',
				'hidden-xs' => 'Hidden'
		);

		public function fieldLabels($includerelations = true) {
				$labels = parent::fieldLabels($includerelations);
				$labels['Col1Content'] = _t('Col2Block.db_Col1Content', 'Col 1 content');
				$labels['Col2Content'] = _t('Col2Block.db_Col2Content', 'Col 2 content');
				$labels['Col3Content'] = _t('Col3Block.db_Col3Content', 'Col 3 content');

				$labels['Col1SizeLG'] = _t('Col2Block.db_Col1SizeLG', 'Col 1 size LG');
				$labels['Col1SizeMD'] = _t('Col2Block.db_Col1SizeMD', 'Col 1 size MD');
				$labels['Col1SizeSM'] = _t('Col2Block.db_Col1SizeSM', 'Col 1 size SM');
				$labels['Col1SizeXS'] = _t('Col2Block.db_Col1SizeXS', 'Col 1 size XS');

				$labels['Col2SizeLG'] = _t('Col2Block.db_Col2SizeLG', 'Col 2 size LG');
				$labels['Col2SizeMD'] = _t('Col2Block.db_Col2SizeMD', 'Col 2 size MD');
				$labels['Col2SizeSM'] = _t('Col2Block.db_Col2SizeSM', 'Col 2 size SM');
				$labels['Col2SizeXS'] = _t('Col2Block.db_Col2SizeXS', 'Col 2 size XS');
				
				$labels['Col3SizeLG'] = _t('Col3Block.db_Col3SizeLG', 'Col 3 size LG');
				$labels['Col3SizeMD'] = _t('Col3Block.db_Col3SizeMD', 'Col 3 size MD');
				$labels['Col3SizeSM'] = _t('Col3Block.db_Col3SizeSM', 'Col 3 size SM');
				$labels['Col3SizeXS'] = _t('Col3Block.db_Col3SizeXS', 'Col 3 size XS');
				return $labels;
		}

		public function getCMSFields() {
				$fields = parent::getCMSFields();

				$fields->addFieldToTab('Root.Col1', new DropdownField('Col1SizeLG', 'Col 1 size LG', self::$colSizesLG));
				$fields->addFieldToTab('Root.Col1', new DropdownField('Col1SizeMD', 'Col 1 size MD', self::$colSizesMD));
				$fields->addFieldToTab('Root.Col1', new DropdownField('Col1SizeSM', 'Col 1 size SM', self::$colSizesSM));
				$fields->addFieldToTab('Root.Col1', new DropdownField('Col1SizeXS', 'Col 1 size XS', self::$colSizesXS));
				$fields->addFieldToTab('Root.Col1', new HtmlEditorField('Col1Content', 'Col 1 content'));

				$fields->addFieldToTab('Root.Col2', new DropdownField('Col2SizeLG', 'Col 2 size LG', self::$colSizesLG));
				$fields->addFieldToTab('Root.Col2', new DropdownField('Col2SizeMD', 'Col 2 size MD', self::$colSizesMD));
				$fields->addFieldToTab('Root.Col2', new DropdownField('Col2SizeSM', 'Col 2 size SM', self::$colSizesSM));
				$fields->addFieldToTab('Root.Col2', new DropdownField('Col2SizeXS', 'Col 2 size XS', self::$colSizesXS));
				$fields->addFieldToTab('Root.Col2', new HtmlEditorField('Col2Content', 'Col 2 content'));
				
				$fields->addFieldToTab('Root.Col3', new DropdownField('Col3SizeLG', 'Col 3 size LG', self::$colSizesLG));
				$fields->addFieldToTab('Root.Col3', new DropdownField('Col3SizeMD', 'Col 3 size MD', self::$colSizesMD));
				$fields->addFieldToTab('Root.Col3', new DropdownField('Col3SizeSM', 'Col 3 size SM', self::$colSizesSM));
				$fields->addFieldToTab('Root.Col3', new DropdownField('Col3SizeXS', 'Col 3 size XS', self::$colSizesXS));
				$fields->addFieldToTab('Root.Col3', new HtmlEditorField('Col3Content', 'Col 3 content'));

				return $fields;
		}

}
