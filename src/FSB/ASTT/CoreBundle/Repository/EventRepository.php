<?php

namespace FSB\ASTT\CoreBundle\Repository;

use Doctrine\ORM\EntityRepository;

class EventRepository extends EntityRepository
{
    public function findAllDisplayedSorteredByDate($queryBuilderOnly = false, $limit = 1000)
    {
        $qb = $this->_em->createQueryBuilder();
        
        $qb->select('e')
            ->from('FSB\ASTT\CoreBundle\Entity\Event', 'e')
            ->where('e.deleted = :deleted')
            ->setParameter('deleted', false)
            ->orderBy('e.date', 'DESC')
            ->setMaxResults($limit)
        ;
        
        if ($queryBuilderOnly) {
            return $qb;
        } else {
            return $qb->getQuery()->getResult();
        }
    }
    
    public function findAllNext($nbResults = 10)
    {
        $today = new \DateTime();
        $today->setTime(0, 0, 0);
        
        $qb = $this->_em->createQueryBuilder();
        
        $qb->select('e')
            ->from('FSB\ASTT\CoreBundle\Entity\Event', 'e')
            ->where('e.deleted = :deleted')
            ->andWhere('e.date > :date')
            ->setParameter('deleted', false)
            ->setParameter('date', $today)
            ->orderBy('e.date', 'ASC')
            ->setMaxResults($nbResults)
        ;
        
        return $qb->getQuery()->getResult();
    }
    
    public function find($id)
    {
        $qb = $this->_em->createQueryBuilder();
        
        $qb->select('e')
            ->from('FSB\ASTT\CoreBundle\Entity\Event', 'e')
            ->where('e.deleted = :deleted')
            ->andWhere('e.id = :id')
            ->setParameter('deleted', false)
            ->setParameter('id', $id)
        ;

        try {
            $result = $qb->getQuery()->getSingleResult();
        }
        catch (\Doctrine\Orm\NoResultException $NRE) {
            $result = NULL;
        }

        return $result;
    }
    
    public function findOneById($id)
    {
        return $this->find($id);
    }
    
    public function findDisplayedEventsForTimeInterval($starttime, $endtime)
    {
        $qb = $this->_em->createQueryBuilder();
        
        $qb->select('e')
            ->from('FSB\ASTT\CoreBundle\Entity\Event', 'e')
            ->where('e.deleted = :deleted')
            ->andWhere('e.date >= :starttime')
            ->andWhere('e.date <= :endtime')
            ->setParameter('deleted', false)
            ->setParameter('starttime', $starttime)
            ->setParameter('endtime', $endtime)
        ;

        return $qb->getQuery()->getResult();
    }
    
    public function findNationalTropheeInTimeInterval($starttime, $endtime)
    {
        $qb = $this->_em->createQueryBuilder();
        
        $qb->select('e')
            ->from('FSB\ASTT\CoreBundle\Entity\Event', 'e')
            ->where('e.deleted = :deleted')
            ->andWhere('e.date >= :starttime')
            ->andWhere('e.date <= :endtime')
            ->andWhere('e.isTournament = :isTournament')
            ->setParameter('deleted', false)
            ->setParameter('starttime', $starttime)
            ->setParameter('endtime', $endtime)
            ->setParameter('isTournament', true)
        ;
        
        return $qb->getQuery()->getResult();
    }
    
    public function findAll()
    {
        $qb = $this->_em->createQueryBuilder();
        
        $qb->select('e')
            ->from('FSB\ASTT\CoreBundle\Entity\Event', 'e')
            ->where('e.deleted = :deleted')
            ->setParameter('deleted', false)
        ;
        
        return $qb->getQuery()->getResult();
    }
}