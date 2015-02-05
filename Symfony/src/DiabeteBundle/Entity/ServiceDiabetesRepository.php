<?php

namespace DiabeteBundle\Entity;

use Doctrine\ORM\EntityRepository;

class ServiceDiabetesRepository extends EntityRepository
{
	public function getActiveService(Subscriber $subscriber) {
		$qb = $this->createQueryBuilder('s')
						->where("s.isActive = :isActive")
						->andWhere('s.subscriber = :subscriber')
						->setParameter('isActive', true)
						->setParameter('subscriber', $subscriber);
		return $qb->getQuery()->getOneOrNullResult();
	}

	
}
