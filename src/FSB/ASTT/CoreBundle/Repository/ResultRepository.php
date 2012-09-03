<?php

namespace FSB\ASTT\CoreBundle\Repository;

use Doctrine\ORM\EntityRepository;

class ResultRepository extends EntityRepository {
    
    public function findAllByTeam($team)
    {
        $qb = $this->_em->createQueryBuilder();
        
        $qb->select('r')
            ->from('FSB\ASTT\CoreBundle\Entity\Result', 'r')
            ->where('r.deleted = 0')
            ->where('r.team = :team')
            ->setParameter('team', $team)
            ->orderBy('r.week', 'DESC');
        
        return $qb->getQuery()->getResult();
    }
    
    public function find($id)
    {
        $qb = $this->_em->createQueryBuilder();
        
        $qb->select('r')
            ->from('FSB\ASTT\CoreBundle\Entity\Result', 'r')
            ->where('r.deleted = :deleted')
            ->andWhere('r.id = :id')
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
        
        $qb->select('r')
            ->from('FSB\ASTT\CoreBundle\Entity\Result', 'r')
            ->where('r.deleted = :deleted')
            ->setParameter('deleted', false)
        ;
        
        return $qb->getQuery()->getResult();
    }
}
