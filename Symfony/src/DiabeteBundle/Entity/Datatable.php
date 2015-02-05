<?php


/*
 * This class will give us a simple interface to interact with Datatables
 * 
 * Meant to work with Datatables v1.9
 * 
 * DO NOT FORGET TO ADD A GET() METHOD TO YOUR ENTITIES...
 * 
 * http://datatables.net/
 * 
 * FROM https://gist.github.com/reel/1638094
*/

namespace DiabeteBundle\Entity;

use Doctrine\ORM\Mapping\ClassMetadata;

use Doctrine\ORM\QueryBuilder;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @author Félix-Antoine Paradis 
 */
class Datatable
{
	protected $request;
	protected $repository;
	protected $parameters;
	protected $qb;
	
	protected $fresults;
	protected $offset;
	protected $echo;
	protected $amount;
	protected $search;
	
	protected $limit;

	public function __construct(array $request, EntityRepository $repository, ClassMetadata $metadata)
	{
		$this->request = $request;
		$this->repository = $repository;
		$this->metadata = $metadata;
		$this->parameters = $this->getParameters();
		$this->qb = $repository->createQueryBuilder('d');
		$this->echo = $this->request['sEcho'];
		$this->search = $this->request['sSearch'];
		$this->offset = $this->getOffset();
		$this->amount = $this->getAmount();
	}

	public function getParameters()
	{
		if (is_numeric($this->request['iColumns'])) {
			if ($this->metadata->hasField("igfd")) {
			}
			for ($i=0;$i<intval($this->request['iColumns']);$i++) {
				if ($this->metadata->hasField($this->request['mDataProp_' . $i])) {
					$params[] = $this->request['mDataProp_' . $i];
				}
				else if($this->request['mDataProp_' . $i] == '') {
					continue;
				} else {
					throw new Exception("Field " . $this->request['mDataProp_' . $i] . " not found." , '404');
				}
			}
			return $params;
		}
	}
	public function setLimit()
	{
		if ( isset($this->offset) && $this->amount != '-1' )
		{
			$this->qb->setFirstResult($this->offset)->setMaxResults($this->amount);
		}
	}
	
	public function setOrderBy($queryId = "d")
	{
		if ( isset( $this->request['iSortCol_0'] ) )
		{
			for ( $i=0 ; $i<intval( $this->request['iSortingCols'] ) ; $i++ )
			{
				if ( $this->request['bSortable_'.intval($this->request['iSortCol_'. $i])] == "true" )
				{
					$this->qb->add('orderBy', $queryId.'.'. $this->parameters[$this->request['iSortCol_'.$i]] . ' ' . $this->request['sSortDir_'.$i]);
				}
			}
		}
	}
	
	public function setWhere($queryId = "d")
	{
		$orExpr = $this->qb->expr()->orX();
		if (isset($this->search) && $this->search != "")
		{
			$orExpr = $this->qb->expr()->orX();
			for ( $i=0 ; $i<count($this->parameters) ; $i++ )
			{
				$orExpr->add($this->qb->expr()->like($queryId.'.' . $this->parameters[$i], "?$i"));
				$this->qb->setParameter($i, "%" . $this->request['sSearch'] . "%");
			}
			$this->qb->add('where', $orExpr);
		}
// 		for ( $i=0 ; $i<count($this->parameters) ; $i++ )
// 		{
// 			if ( isset($this->request['bSearchable_'.$i]) && $this->request['bSearchable_'.$i] == "true" && $this->request['sSearch_'.$i] != '' )
// 			{
// 				$orExpr->add($this->qb->expr()->like('d.' . $this->parameters[$i], "?" . $i . "s"));
// 				$this->qb->setParameter($i . "s", "%" . $this->request['sSearch_'.$i] . "%");
// 			}
// 		}
// 		$this->qb->add('where', $orExpr);
	}
	
	public function makeSearch() 
	{
		$this->qb->select('d');
		$this->setWhere();
		$this->setOrderBy();
		$this->setLimit();
		$this->fresults = $this->qb->getQuery()->getResult();

	}
	
	public function prepareResults()
	{
		$output = array("aaData" => array());
		$rowFiltered = count($this->fresults);
		foreach ($this->fresults as $item) {
			$row = array();
			/*foreach ($this->parameters as $parameter) {
				$row[$parameter] = $item->get($parameter);
			}*/
			$row = $item->getDataTablesArray();
			$output['aaData'][] = $row;
		}
		$outputHeader = array("sEcho" => (int) $this->echo, "iTotalRecords" => $this->getCountAllResults(), "iTotalDisplayRecords" => (string) $this->getCountFilteredResults());
		$outputToJson = array_merge($outputHeader, $output);
		$serializer = new Serializer(array(new GetSetMethodNormalizer()), array('json' => new JsonEncoder()));
		$json = $serializer->serialize($outputToJson, 'json');
		$response = new Response($json);
		$response->headers->set('Content-Type', 'application/json');
		return $response;
	}
	public function getCountAllResults()
	{
		return (int) $this->repository->createQueryBuilder('a')->select('count(a.id)')->getQuery()->getSingleScalarResult();
	}
	
	public function getCountFilteredResults()
	{
		$this->qb = $this->repository->createQueryBuilder('f');
		$this->qb->select('count(f.id)');
		$this->setWhere("f");
		return (int) $this->qb->getQuery()->getSingleScalarResult();
	}
	
	public function getOffset()
	{
		return $this->request['iDisplayStart'];
	}
	
	public function getEcho()
	{
		return $this->request['sEcho'];
	}
	
	public function getAmount()
	{
		return $this->request['iDisplayLength'];
	}
	
	public function getSearch()
	{
		return  "%" . $this->request['sSearch'] . "%";
	}
}
