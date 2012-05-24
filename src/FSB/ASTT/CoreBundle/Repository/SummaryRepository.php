<?php

namespace FSB\ASTT\CoreBundle\Repository;

use Doctrine\ORM\EntityRepository;

class SummaryRepository extends EntityRepository {
    
    public function findAllDisplayedSorteredByDate($orderByDate = 'DESC')
    {
        $qb = $this->_em->createQueryBuilder();
        
        $qb->select('s')
            ->from('FSB\ASTT\CoreBundle\Entity\Summary', 's')
            ->where('s.deleted = :deleted')
            ->setParameter('deleted', 0)
            ->orderBy('s.date', $orderByDate);
        
        return $qb->getQuery()->getResult();
    }
    
    public function findAllDisplayedSorteredByDateWithTypeAndTournament($type, $tournament, $orderByTournament = 'DESC', $orderByDate = 'DESC')
    {
        $qb = $this->_em->createQueryBuilder();
        
        $qb->select('s')
            ->from('FSB\ASTT\CoreBundle\Entity\Summary', 's')
            ->where('s.deleted = :deleted')
            ->andWhere('s.type = :type')
            ->andWhere('s.tournament = :tournament')
            ->setParameter('deleted', 0)
            ->setParameter('type', $type)
            ->setParameter('tournament', $tournament)
            ->orderBy('s.tournament', $orderByTournament)
            ->addOrderBy('s.date', $orderByDate);
        
        return $qb->getQuery()->getResult();
    }
    
    public function find($id)
    {
        $qb = $this->_em->createQueryBuilder();
        
        $qb->select('s')
            ->from('FSB\ASTT\CoreBundle\Entity\Summary', 's')
            ->where('s.deleted = :deleted')
            ->andWhere('s.id = :id')
            ->setParameter('deleted', 0)
            ->setParameter('id', $id)
        ;
        
        return $qb->getQuery()->getSingleResult();
    }
}