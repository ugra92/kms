<?php
namespace AppBundle\Entity\Repository;

use AppBundle\Entity\Video;
use Doctrine\ORM\EntityRepository;


class VideoRepository extends EntityRepository
{
    public function findByName($name)
    {

    }

    public function findVideosLimited($limit){
        $em = $this->getEntityManager();
        $qb = $em->createQueryBuilder();
        $qb->select('v')
            ->from('AppBundle:Video', 'v')
            ->orderBy('v.createdAt', 'DESC')
            ->setMaxResults($limit);
        return $qb->getQuery()->getResult();
    }

    public function saveVideo(Video $video){
        $this->_em->persist($video);
        $this->_em->flush();

    }

}