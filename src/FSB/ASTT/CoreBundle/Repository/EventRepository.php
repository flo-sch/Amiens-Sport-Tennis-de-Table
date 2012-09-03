<?php

namespace FSB\ASTT\CoreBundle\Repository;

use Doctrine\ORM\EntityRepository;

class EventRepository extends EntityRepository {
    
    public function findAllDisplayedSorteredByDate($queryBuilderOnly = false, $limit = 1000)
    {
        $qb = $this->_em->createQueryBuilder();
        
        $qb->select('e')
            ->from('FSB\ASTT\CoreBundle\Entity\Event', 'e')
            ->where('e.deleted = :deleted')
            ->setParameter('deleted', 0)
            ->orderBy('e.date', 'DESC')
            ->setMaxResults($limit)
        ;
        
        if ($queryBuilderOnly) {
            return $qb;
        } else {
            return $qb->getQuery()->getResult();
        }
    }
    
    public function find($id)
    {
        $qb = $this->_em->createQueryBuilder();
        
        $qb->select('e')
            ->from('FSB\ASTT\CoreBundle\Entity\Event', 'e')
            ->where('e.deleted = :deleted')
            ->andWhere('e.id = :id')
            ->setParameter('deleted', 0)
            ->setParameter('id', $id)
        ;
        
        return $qb->getQuery()->getSingleResult();
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
            ->setParameter('deleted', 0)
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
            ->setParameter('deleted', 0)
            ->setParameter('starttime', $starttime)
            ->setParameter('endtime', $endtime)
            ->setParameter('isTournament', 1)
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