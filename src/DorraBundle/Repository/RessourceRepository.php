<?php

namespace DorraBundle\Repository;

/**
 * RessourceRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class RessourceRepository extends \Doctrine\ORM\EntityRepository
{
    public function findEventDQL($ressource)
    {
        $query=$this->getEntityManager()->createQuery(" SELECT e from KoussayBundle:Event e WHERE e.ressource = :ressource")
            ->setParameter('ressource',$ressource ) ;
        return $query->getResult();
    }

    public function findEvent2DQL($id)
    {
        $query=$this->getEntityManager()->createQuery(" SELECT e from KoussayBundle:Event e WHERE e.id = :id")
            ->setParameter('id',$id ) ;
        return $query->getResult();
    }


}
