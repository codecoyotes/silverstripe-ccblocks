<?php

class CounterBlock extends Block {

	public function singular_name()
	{
		return _t('CounterBlock.SINGULARNAME', 'Counter Block');
	}

	public function plural_name()
	{
		return _t('CounterBlock.PLURALNAME', 'Counter Blocks');
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