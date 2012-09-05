<?php

namespace FSB\ASTT\CoreBundle\Repository;

use Doctrine\ORM\EntityRepository;

class InterviewRepository extends EntityRepository
{
    public function findAllDisplayedSorteredByDate($orderByDate = 'DESC')
    {
        $qb = $this->_em->createQueryBuilder();
        
        $qb->select('i')
            ->from('FSB\ASTT\CoreBundle\Entity\Interview', 'i')
            ->where('i.deleted = :deleted')
            ->setParameter('deleted', false)
            ->orderBy('i.date', $orderByDate);
        
        return $qb->getQuery()->getResult();
    }
    
    public function find($id)
    {
        $qb = $this->_em->createQueryBuilder();
        
        $qb->select('i')
            ->from('FSB\ASTT\CoreBundle\Entity\Interview', 'i')
            ->where('i.deleted = :deleted')
            ->andWhere('i.id = :id')
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
        
        $qb->select('i')
            ->from('FSB\ASTT\CoreBundle\Entity\Interview', 'i')
            ->where('i.deleted = :deleted')
            ->setParameter('deleted', false)
        ;
        
        return $qb->getQuery()->getResult();
    }
}