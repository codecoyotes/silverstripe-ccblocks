<?php

class Col2Block extends Block
{

	public function singular_name()
	{
		return _t('Col2Block.SINGULARNAME', '2 col Block');
	}

	public function plural_name()
	{
		return _t('Col2Block.PLURALNAME', '2 col Blocks');
	}

	private static $db = array(
		'Col1Content' => 'HTMLText',
		'Col2Content' => 'HTMLText',
		'Col1Size' => 'Varchar',
		'Col2Size' => 'Varchar'
	);

	private static $colSizes = array(
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
		'col-md-1' => 'Col 1'
	);

	public function fieldLabels($includerelations = true)
	{
		$labels = parent::fieldLabels($includerelations);
		$labels['Col1Content'] = _t('Col2Block.db_Col1Content', 'Col 1 content');
		$labels['Col2Content'] = _t('Col2Block.db_Col2Content', 'Col 2 content');
		$labels['Col1Size'] = _t('Col2Block.db_Col1Size', 'Col 1 size');
		$labels['Col2Size'] = _t('Col2Block.db_Col2Size', 'Col 2 size');
		return $labels;
	}

	public function getCMSFields()
	{
		$fields = parent::getCMSFields();

		$fields->addFieldToTab('Root.Col1', new DropdownField('Col1Size', 'Col 1 size', self::$colSizes));
		$fields->addFieldToTab('Root.Col1', new HtmlEditorField('Col1Content', 'Col 1 content'));

		$fields->addFieldToTab('Root.Col2', new DropdownField('Col2Size', 'Col 2 size', self::$colSizes));
		$fields->addFieldToTab('Root.Col2', new HtmlEditorField('Col2Content', 'Col 2 content'));

		return $fields;
	}

}
