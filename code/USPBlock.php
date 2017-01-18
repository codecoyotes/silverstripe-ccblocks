<?php

class USPBlock extends Block {

	public function singular_name()
	{
		return _t('USPBlock.SINGULARNAME', 'USP Block');
	}

	public function plural_name()
	{
		return _t('USPBlock.PLURALNAME', 'USP Blocks');
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