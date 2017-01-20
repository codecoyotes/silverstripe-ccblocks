<?php

class SliderBlock extends Block {

	public function singular_name()
	{
		return _t('SliderBlock.SINGULARNAME', 'Slider Block');
	}

	public function plural_name()
	{
		return _t('SliderBlock.PLURALNAME', 'Slider Blocks');
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