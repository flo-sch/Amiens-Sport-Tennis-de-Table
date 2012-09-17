<?php

namespace FSB\ASTT\CoreBundle\Repository;

use Doctrine\ORM\EntityRepository;

class PlayerRepository extends EntityRepository
{
    public function findAllDisplayedSorteredByDate()
    {
        $qb = $this->_em->createQueryBuilder();
        
        $qb->select('p')
            ->from('FSB\ASTT\CoreBundle\Entity\Partner', 'p')
            ->where('p.deleted = :deleted')
            ->setParameter('deleted', false)
            ->orderBy('p.createdAt', 'DESC')
        ;
        
        return $qb->getQuery()->getResult();
    }
    
    public function findByTeam($teamId)
    {
        $qb = $this->_em->createQueryBuilder();
        
        $qb->select('p')
            ->from('FSB\ASTT\CoreBundle\Entity\Player', 'p')
            ->where('p.hidden = :hidden')
            ->andWhere('p.mainTeam = :team')
            ->orWhere('p.secondTeam = :team')
            ->orWhere('p.thirdTeam = :team')
            ->setParameter('hidden', false)
            ->setParameter('team', $teamId)
            ->orderBy('p.lastname', 'ASC')
            ->addOrderBy('p.firstname', 'ASC');
        
        return $qb->getQuery()->getResult();
    }
    
    public function findActivePlayers($qbOnly = false)
    {
        $qb = $this->_em->createQueryBuilder();
        
        $qb->select('p')
            ->from('FSB\ASTT\CoreBundle\Entity\Player', 'p')
            ->where('p.hidden = :hidden')
            ->setParameter('hidden', false)
            ->orderBy('p.lastname', 'ASC')
            ->addOrderBy('p.firstname', 'ASC');
        
        
        if ($qbOnly) {
            $res = $qb;
        } else {
            $res = $qb->getQuery()->getResult();
        }
        
        return $res;
    }
    
    public function find($id)
    {
        $qb = $this->_em->createQueryBuilder();
        
        $qb->select('p')
            ->from('FSB\ASTT\CoreBundle\Entity\Player', 'p')
            ->where('p.hidden = :hidden')
            ->andWhere('p.id = :id')
            ->setParameter('hidden', false)
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
            ->setParameter('hidden', false)
            ->setParameter('licence', $licence)
        ;
        
        return $qb->getQuery()->getSingleResult();
    }
    
    public function findAll()
    {
        $qb = $this->_em->createQueryBuilder();
        
        $qb->select('p')
            ->from('FSB\ASTT\CoreBundle\Entity\Player', 'p')
            ->where('p.hidden = :hidden')
            ->setParameter('hidden', false)
        ;
        
        return $qb->getQuery()->getResult();
    }
    
    public function removeAllPlayers()
    {
        $db = $this->_em->createQueryBuilder();
        
        $db->update('FSB\ASTT\CoreBundle\Entity\Player p')
            ->set('p.hidden', ':hidden')
            ->where('p.hidden = :lasthidden')
            ->setParameter('hidden', true)
            ->setParameter('lasthidden', false)
        ;
        
        return $db->getQuery()->execute();
    }
}