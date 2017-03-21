<?php

class CTABlock extends Block
{

	public function singular_name()
	{
		return _t('CTABlock.SINGULARNAME', 'CTA Block');
	}

	public function plural_name()
	{
		return _t('CTABlock.PLURALNAME', 'CTA Blocks');
	}

	private static $db = array(
		'MainLine' => 'Varchar(255)',
		'SubLine' => 'Varchar(255)',
		'IconClasses' => 'Varchar',
		'BgClass' => 'Varchar'
	);
	private static $has_one = array(
		'Button' => 'Link'
	);

	public function fieldLabels($includerelations = true)
	{
		$labels = parent::fieldLabels($includerelations);
		$labels['MainLine'] = _t('CTABlock.db_MainLine', 'Main line');
		$labels['SubLine'] = _t('CTABlock.db_SubLine', 'Sub line');
		$labels['Button'] = _t('CTABlock.has_one_Button', 'Button');
		$labels['IconClasses'] = _t('CTABlock.db_IconClasses', 'Icon classes');
		$labels['BgClass'] = _t('CTABlock.db_BgClass', 'Background class');
		return $labels;
	}

	public function getCMSFields()
	{
		$fields = parent::getCMSFields();
		$fields->addFieldToTab('Root.Main', new LinkField('ButtonID', 'Button'));
		return $fields;
	}

}
