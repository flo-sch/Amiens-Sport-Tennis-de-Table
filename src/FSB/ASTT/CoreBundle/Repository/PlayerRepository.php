<?php

namespace FSB\ASTT\CoreBundle\Repository;

use Doctrine\ORM\EntityRepository;

class PlayerRepository extends EntityRepository {
    
    public function findByTeam($teamId)
    {
        $qb = $this->_em->createQueryBuilder();
        
        $qb->select('p')
            ->from('FSB\ASTT\CoreBundle\Entity\Player', 'p')
            ->where('p.hidden = :hidden')
            ->andWhere('p.mainTeam = :team')
            ->orWhere('p.secondTeam = :team')
            ->orWhere('p.thirdTeam = :team')
            ->setParameter('hidden', 0)
            ->setParameter('team', $teamId)
            ->orderBy('p.lastname', 'ASC')
            ->addOrderBy('p.firstname', 'ASC');
        
        return $qb->getQuery()->getResult();
    }
    
    public function findActivePlayers()
    {
        $qb = $this->_em->createQueryBuilder();
        
        $qb->select('p')
            ->from('FSB\ASTT\CoreBundle\Entity\Player', 'p')
            ->where('p.hidden = :hidden')
            ->setParameter('hidden', 0)
            ->orderBy('p.lastname', 'ASC')
            ->addOrderBy('p.firstname', 'ASC');
        
        return $qb->getQuery()->getResult();
    }
    
    public function find($id)
    {
        $qb = $this->_em->createQueryBuilder();
        
        $qb->select('p')
            ->from('FSB\ASTT\CoreBundle\Entity\Player', 'p')
            ->where('p.hidden = :hidden')
            ->andWhere('p.id = :id')
            ->setParameter('hidden', 0)
            ->setParameter('id', $id)
        ;
        
        return $qb->getQuery()->getSingleResult();
    }
    
    public function findOneById($id)
    {
        return $this->find($id);
    }
    
    public function findOneByLicence($licence)
    {
        $qb = $this->_em->createQueryBuilder();
        
        $qb->select('p')
            ->from('FSB\ASTT\CoreBundle\Entity\Player', 'p')
            ->where('p.hidden = :hidden')
            ->andWhere('p.licence = :licence')
            ->setParameter('hidden', 0)
            ->setParameter('licence', $licence)
        ;
        
        return $qb->getQuery()->getSingleResult();
    }
}