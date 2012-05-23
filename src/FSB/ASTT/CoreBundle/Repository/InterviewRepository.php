<?php

namespace FSB\ASTT\CoreBundle\Repository;

use Doctrine\ORM\EntityRepository;

class InterviewRepository extends EntityRepository {
    
    public function findAllDisplayedSorteredByDate($orderByDate = 'DESC')
    {
        $qb = $this->_em->createQueryBuilder();
        
        $qb->select('i')
            ->from('FSB\ASTT\CoreBundle\Entity\Interview', 'i')
            ->where('i.deleted = :deleted')
            ->setParameter('deleted', 0)
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
            ->setParameter('deleted', 0)
            ->setParameter('id', $id)
        ;
        
        return $qb->getQuery()->getSingleResult();
    }
    
    public function findOneById($id)
    {
        return $this->find($id);
    }
}