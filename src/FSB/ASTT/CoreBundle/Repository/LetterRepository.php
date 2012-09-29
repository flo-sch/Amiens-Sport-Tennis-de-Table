<?php

namespace FSB\ASTT\CoreBundle\Repository;

use Doctrine\ORM\EntityRepository;

class LetterRepository extends EntityRepository
{
    public function findAllDisplayedSorteredByDate($orderByDate = 'DESC')
    {
        $qb = $this->_em->createQueryBuilder();
        
        $qb->select('l')
            ->from('FSB\ASTT\CoreBundle\Entity\Letter', 'l')
            ->where('l.deleted = :deleted')
            ->setParameter('deleted', false)
            ->orderBy('l.date', $orderByDate);
        
        return $qb->getQuery()->getResult();
    }
    
    public function find($id)
    {
        $qb = $this->_em->createQueryBuilder();
        
        $qb->select('l')
            ->from('FSB\ASTT\CoreBundle\Entity\Letter', 'l')
            ->where('l.deleted = :deleted')
            ->andWhere('l.id = :id')
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
    
    public function findAll()
    {
        $qb = $this->_em->createQueryBuilder();
        
        $qb->select('l')
            ->from('FSB\ASTT\CoreBundle\Entity\Letter', 'l')
            ->where('l.deleted = :deleted')
            ->setParameter('deleted', false)
        ;
        
        return $qb->getQuery()->getResult();
    }
}
