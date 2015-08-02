<?php
namespace AppBundle\Entity\Repository;

use AppBundle\Entity\Video;
use Doctrine\ORM\EntityRepository;


class VideoRepository extends EntityRepository
{
    public function findByName($name)
    {

    }

    public function saveVideo(Video $video){
        $this->_em->persist($video);
        $this->_em->flush();

    }

}