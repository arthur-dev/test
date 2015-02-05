<?php

namespace DiabeteBundle\Services;

class MesureInsulinData {
	
	function __construct() {

	}
	
	public function organizeChartsData($mesureInsulinData) {
		$insulinData = array();
		if($mesureInsulinData != null) {
			$insulinData['insulin'] = array();
			
			foreach($mesureInsulinData as $dataSet) {
				$date = $dataSet->getDate()->getTimestamp() * 1000;
				array_push($insulinData['insulin'], array(
											$date,
											$dataSet->getInsulin(),
										));
				
			}
			$insulineData['insulin'] = array_reverse($insulinData['insulin']);
		}
		return array('insulinData' => $insulinData);
	}
}