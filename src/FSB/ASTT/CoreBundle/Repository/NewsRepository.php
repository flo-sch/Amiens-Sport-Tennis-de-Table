<?php

namespace FSB\ASTT\CoreBundle\Repository;

use Doctrine\ORM\EntityRepository;

class NewsRepository extends EntityRepository
{
    public function findAllDisplayedSorteredByDates()
    {
        $qb = $this->_em->createQueryBuilder();
        
        $qb->select('n')
            ->from('FSB\ASTT\CoreBundle\Entity\News', 'n')
            ->where('n.deleted = :deleted')
            ->setParameter('deleted', false)
            ->orderBy('n.date', 'DESC')
        ;
        
        return $qb->getQuery()->getResult();
    }
    
    public function findLastDisplayedSorteredByDates($nbResults)
    {
        $qb = $this->_em->createQueryBuilder();
        
        $qb->select('n')
            ->from('FSB\ASTT\CoreBundle\Entity\News', 'n')
            ->where('n.deleted = :deleted')
            ->setParameter('deleted', false)
            ->orderBy('n.starttime', 'DESC')
            ->setMaxResults($nbResults)
        ;
        
        return $qb->getQuery()->getResult();
    }
    
    public function findAllDisplayedOnTime()
    {
        $time = new \Datetime('now');
        
        $qb = $this->_em->createQueryBuilder();
        
        $qb->select('n')
            ->from('FSB\ASTT\CoreBundle\Entity\News', 'n')
            ->where('n.deleted = :deleted AND (n.starttime <= :time AND n.endtime >= :time)')
            ->setParameter('deleted', false)
            ->setParameter('time', $time)
            ->orderBy('n.starttime', 'DESC')
        ;
        
        return $qb->getQuery()->getResult();
    }
    
    public function find($id)
    {
        $qb = $this->_em->createQueryBuilder();
        
        $qb->select('n')
            ->from('FSB\ASTT\CoreBundle\Entity\News', 'n')
            ->where('n.deleted = :deleted')
            ->andWhere('n.id = :id')
            ->setParameter('deleted', false)
            ->setParameter('id', $id)
        ;
        
        return $qb->getQuery()->getSingleResult();
    }
    
    public function findOneById($id)
    {
        return $this->find($id);
    }
    
    public function findAll()
    {
        $qb = $this->_em->createQueryBuilder();
        
        $qb->select('n')
            ->from('FSB\ASTT\CoreBundle\Entity\News', 'n')
            ->where('n.deleted = :deleted')
            ->setParameter('deleted', false)
        ;
        
        return $qb->getQuery()->getResult();
    }
}