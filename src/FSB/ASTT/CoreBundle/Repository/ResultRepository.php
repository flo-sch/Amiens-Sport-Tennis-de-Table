<?php

namespace FSB\ASTT\CoreBundle\Repository;

use Doctrine\ORM\EntityRepository;

class ResultRepository extends EntityRepository
{
    public function findAllDisplayedSorteredByDate()
    {
        $qb = $this->_em->createQueryBuilder();
        
        $qb->select('r')
            ->from('FSB\ASTT\CoreBundle\Entity\Result', 'r')
            ->where('r.deleted = :deleted')
            ->setParameter('deleted', false)
            ->orderBy('r.createdAt', 'DESC')
        ;
        
        return $qb->getQuery()->getResult();
    }
    
    public function findAllByTeam($team)
    {
        $qb = $this->_em->createQueryBuilder();
        
        $qb->select('r')
            ->from('FSB\ASTT\CoreBundle\Entity\Result', 'r')
            ->where('r.deleted = :deleted')
            ->andWhere('r.team = :team')
            ->setParameter('deleted', false)
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
        
        $qb->select('r')
            ->from('FSB\ASTT\CoreBundle\Entity\Result', 'r')
            ->where('r.deleted = :deleted')
            ->setParameter('deleted', false)
        ;
        
        return $qb->getQuery()->getResult();
    }
}
