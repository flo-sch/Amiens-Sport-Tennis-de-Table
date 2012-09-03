<?php

namespace FSB\ASTT\CoreBundle\Repository;

use Doctrine\ORM\EntityRepository;

class MessageRepository extends EntityRepository {
    
    public function findAllDisplayedSorteredByCreatedAt()
    {
        $qb = $this->_em->createQueryBuilder();
        
        $qb->select('m')
            ->from('FSB\ASTT\CoreBundle\Entity\Message', 'm')
            ->where('m.deleted = :deleted')
            ->setParameter('deleted', 0)
            ->orderBy('m.createdAt', 'DESC');
        
        return $qb->getQuery()->getResult();
    }
    
    public function find($id)
    {
        $qb = $this->_em->createQueryBuilder();
        
        $qb->select('m')
            ->from('FSB\ASTT\CoreBundle\Entity\Message', 'm')
            ->where('m.deleted = :deleted')
            ->andWhere('m.id = :id')
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
        
        $qb->select('m')
            ->from('FSB\ASTT\CoreBundle\Entity\Message', 'm')
            ->where('m.deleted = :deleted')
            ->setParameter('deleted', false)
        ;
        
        return $qb->getQuery()->getResult();
    }
}