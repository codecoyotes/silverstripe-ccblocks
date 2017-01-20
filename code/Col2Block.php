<?php

class Col2Block extends Block {

	public function singular_name()
	{
		return _t('Col2Block.SINGULARNAME', '2 col Block');
	}

	public function plural_name()
	{
		return _t('Col2Block.PLURALNAME', '2 col Blocks');
	}

	private static $db = array(

	);

	public function fieldLabels($includeRelations = true)
	{
		return array_merge(
			parent::fieldLabels($includeRelations),
			array(
				'Content' => _t('Block.Content', 'Content'),
			)
		);
	}

}