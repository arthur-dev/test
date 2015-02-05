<?php

namespace DiabeteBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * BlueGlucoseRepository
 */
class GlucometerRepository extends EntityRepository
{
	public function getAvailableGlucometer() {
		$qb = $this->createQueryBuilder('bg')
					->where('bg.serviceDiabetes is NULL');
		return $qb->getQuery()->getResult();
	}
}