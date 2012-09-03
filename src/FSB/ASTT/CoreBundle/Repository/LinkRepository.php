<?php

namespace FSB\ASTT\CoreBundle\Repository;

use Doctrine\ORM\EntityRepository;

class LinkRepository extends EntityRepository {
    
    public function findAllDisplayedByCategory($category)
    {
        $qb = $this->_em->createQueryBuilder();
        
        $qb->select('l')
            ->from('FSB\ASTT\CoreBundle\Entity\Link', 'l')
            ->where('l.deleted = :deleted')
            ->andWhere('l.category = :category')
            ->setParameter('deleted', 0)
            ->setParameter('category', $category)
            ->orderBy('l.title', 'ASC');
        
        return $qb->getQuery()->getResult();
    }
    
    public function find($id)
    {
        $qb = $this->_em->createQueryBuilder();
        
        $qb->select('l')
            ->from('FSB\ASTT\CoreBundle\Entity\Link', 'l')
            ->where('l.deleted = :deleted')
            ->andWhere('l.id = :id')
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
        
        $qb->select('l')
            ->from('FSB\ASTT\CoreBundle\Entity\Link', 'l')
            ->where('l.deleted = :deleted')
            ->setParameter('deleted', false)
        ;
        
        return $qb->getQuery()->getResult();
    }
}