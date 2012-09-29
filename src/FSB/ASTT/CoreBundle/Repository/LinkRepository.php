<?php

namespace FSB\ASTT\CoreBundle\Repository;

use Doctrine\ORM\EntityRepository;

class LinkRepository extends EntityRepository
{
    public function findAllDisplayedSorteredByDates() {
        $qb = $this->_em->createQueryBuilder();
        
        $qb->select('l')
            ->from('FSB\ASTT\CoreBundle\Entity\Link', 'l')
            ->where('l.deleted = :deleted')
            ->setParameter('deleted', false)
            ->addOrderBy('l.createdAt', 'DESC');
        
        return $qb->getQuery()->getResult();
    }
    
    public function findAllDisplayedByCategory($category)
    {
        $qb = $this->_em->createQueryBuilder();
        
        $qb->select('l')
            ->from('FSB\ASTT\CoreBundle\Entity\Link', 'l')
            ->where('l.deleted = :deleted')
            ->andWhere('l.category = :category')
            ->setParameter('deleted', false)
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
            ->from('FSB\ASTT\CoreBundle\Entity\Link', 'l')
            ->where('l.deleted = :deleted')
            ->setParameter('deleted', false)
        ;
        
        return $qb->getQuery()->getResult();
    }
}