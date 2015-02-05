<?php

namespace DiabeteBundle\Services;

class MesureNutritionData {
	
	function __construct() {

	}
	
	public function organizeChartsData($mesureNutritionData) {
		$nutritionData = array();
		if($mesureNutritionData != null) {
			$nutritionData['sucre'] = array();
			
			foreach($mesureNutritionData as $dataSet) {
				$date = $dataSet->getHeure()->getTimestamp() * 1000;
				array_push($nutritionData['sucre'], array(
											$date,
											$dataSet->getCalorie(),
										));
				
			}
			$nutritionData['sucre'] = array_reverse($nutritionData['sucre']);
		}
		return array('nutritionData' => $nutritionData);
	}
}