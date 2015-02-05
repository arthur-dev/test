<?php

namespace DiabeteBundle\Services;

class BloodGlucoseData {
	
	function __construct() {

	}
	
	public function organizeChartsData($blueGlucoseData) {
		$bloodGlucoseData = array();
		if($blueGlucoseData != null) {
			$bloodGlucoseData['glucose'] = array();
			
			foreach($blueGlucoseData as $dataSet) {
				$date = $dataSet->getDate()->getTimestamp() * 1000;
				array_push($bloodGlucoseData['glucose'], array(
											$date,
											$dataSet->getGlucose(),
										));
				
			}
			$bloodGlucoseData['glucose'] = array_reverse($bloodGlucoseData['glucose']);
		}
		return array('bloodGlucoseData' => $bloodGlucoseData);
	}
}
