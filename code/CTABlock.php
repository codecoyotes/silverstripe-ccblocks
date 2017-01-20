<?php

class CTABlock extends Block {

	public function singular_name()
	{
		return _t('CTABlock.SINGULARNAME', 'CTA Block');
	}

	public function plural_name()
	{
		return _t('CTABlock.PLURALNAME', 'CTA Blocks');
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