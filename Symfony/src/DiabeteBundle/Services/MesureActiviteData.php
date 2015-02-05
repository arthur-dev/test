<?php

namespace DiabeteBundle\Services;

class MesureActiviteData {
	
	function __construct() {

	}
	
	public function organizeChartsData($mesureActiviteData) {
		$activiteData = array();
		if($mesureActiviteData != null) {
			$activiteData['dureeActivite'] = array();
			
			foreach($mesureActiviteData as $dataSet) {
				$date = $dataSet->getDateDebut()->getTimestamp() * 1000;
				array_push($activiteData['dureeActivite'], array(
											$date,
											$dataSet->getDureeActivite(),
										));
				
			}
			$activiteData['dureeActivite'] = array_reverse($activiteData['dureeActivite']);
		}
		return array('activiteData' => $activiteData);
	}
}