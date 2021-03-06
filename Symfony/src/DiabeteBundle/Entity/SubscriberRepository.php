<?php

namespace DiabeteBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * SubscriberRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SubscriberRepository extends EntityRepository
{
	public function search($value)
	{
		$qb = $this->_em->createQueryBuilder();
		$qb->select('s')
			->from($this->_entityName, 's')
			->where($qb->expr()->like('s.firstname', '?1'))
			->orWhere($qb->expr()->like('s.lastname', '?1'))
			->setParameter(1,'%'.$value.'%');
		return $qb->getQuery()->getResult();
	}
	
	public function findWithJoins($id) {
		$qb = $this->createQueryBuilder('s');
		$qb->leftJoin('s.doctor', 'r')
			->addSelect('r')
			->where('s.id = :id')
			->setParameter('id', $id);
		return $qb->getQuery()->getSingleResult();
	}
	
}
