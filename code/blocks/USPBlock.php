<?php

class USPBlock extends Block
{

	public function singular_name()
	{
		return _t('USPBlock.SINGULARNAME', 'USP Block');
	}

	public function plural_name()
	{
		return _t('USPBlock.PLURALNAME', 'USP Blocks');
	}

	private static $db = array(
		'USPs' => 'MultiValueField',
		'IconClass' => 'Varchar',
		'NumCols' => 'Int'
	);

	public function fieldLabels($includerelations = true)
	{
		$labels = parent::fieldLabels($includerelations);
		$labels['USPs'] = _t('USPBlock.db_USPs', 'USPs');
		$labels['IconClass'] = _t('USPBlock.db_IconClass', 'Icon class');
		$labels['NumCols'] = _t('USPBlock.db_NumCols', 'Num cols');
		return $labels;
	}

	public function getCMSFields()
	{
		$fields = parent::getCMSFields();
		$colOptions = array(
			1 => 1,
			2 => 2,
			3 => 3,
			4 => 4
		);
		$fields->addFieldToTab('Root.Main', new DropdownField('NumCols', null, $colOptions));
		return $fields;
	}

	public function ColClass(){
		switch ($this->NumCols){
			case 2:
				return 'col-md-6';
				break;
			case 3:
				return 'col-md-4';
				break;
			case 4:
				return 'col-md-3';
				break;
		}
		return 'col-md-12';
	}

	public function USPCols(){
		$totalList = $this->USPs->getValues();
		$cols = array();
		$count = 0;
		foreach($totalList as $usp){
			if(!array_key_exists($count, $cols)){
				$cols[$count] = array();
			}
			$cols[$count][] = $usp;
			$count++;
			if($count == $this->NumCols){
				$count = 0;
			}
		}
		$out = new ArrayList();
		foreach($cols as $col){
			$usps = new ArrayList();
			foreach($col as $usp){
				$usps->push(new ArrayData(array(
					'USP' => $usp
				)));
			}
			$out->push(new ArrayData(array(
				'USPs' => $usps
			)));
		}
		return $out;
	}

}
