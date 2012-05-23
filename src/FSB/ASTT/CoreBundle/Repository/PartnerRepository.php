<?php

namespace FSB\ASTT\CoreBundle\Repository;

use Doctrine\ORM\EntityRepository;

class PartnerRepository extends EntityRepository {
    
    public function findAllDisplayed()
    {
        $qb = $this->_em->createQueryBuilder();
        
        $qb->select('p')
            ->from('FSB\ASTT\CoreBundle\Entity\Partner', 'p')
            ->where('p.deleted = :deleted')
            ->setParameter('deleted', 0)
            ->orderBy('p.title', 'ASC');
        
        return $qb->getQuery()->getResult();
    }
    
    public function find($id)
    {
        $qb = $this->_em->createQueryBuilder();
        
        $qb->select('p')
            ->from('FSB\ASTT\CoreBundle\Entity\Partner', 'p')
            ->where('p.deleted = :deleted')
            ->andWhere('p.id = :id')
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