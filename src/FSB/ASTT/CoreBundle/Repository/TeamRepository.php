<?php

namespace FSB\ASTT\CoreBundle\Repository;

use Doctrine\ORM\EntityRepository;

class TeamRepository extends EntityRepository {
    
    public function findAllDisplayedByCivility($civility, $queryBuilderOnly = false)
    {
        $qb = $this->_em->createQueryBuilder();
        
        $qb->select('t')
            ->from('FSB\ASTT\CoreBundle\Entity\Team', 't')
            ->where('t.deleted = :deleted')
            ->andWhere('t.civility = :civility')
            ->setParameter('deleted', 0)
            ->setParameter('civility', $civility)
            ->orderBy('t.civility', 'DESC')
            ->addOrderBy('t.number', 'ASC');
        ;
        
        if ($queryBuilderOnly) {
            return $qb;
        } else {
            return $qb->getQuery()->getResult();
        }
    }
    
    public function findAllDisplayed($queryBuilderOnly = false)
    {
        $qb = $this->_em->createQueryBuilder();
        
        $qb->select('t')
            ->from('FSB\ASTT\CoreBundle\Entity\Team', 't')
            ->where('t.deleted = :deleted')
            ->setParameter('deleted', 0)
            ->orderBy('t.civility', 'DESC')
            ->addOrderBy('t.number', 'ASC')
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
        
        $qb->select('t')
            ->from('FSB\ASTT\CoreBundle\Entity\Team', 't')
            ->where('t.deleted = :deleted')
            ->andWhere('t.id = :id')
            ->setParameter('deleted', 0)
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
        
        $qb->select('t')
            ->from('FSB\ASTT\CoreBundle\Entity\Team', 't')
            ->where('t.deleted = :deleted')
            ->setParameter('deleted', false)
        ;
        
        return $qb->getQuery()->getResult();
    }
}