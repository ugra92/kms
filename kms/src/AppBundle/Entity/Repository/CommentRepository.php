<?php
namespace AppBundle\Entity\Repository;

use AppBundle\Entity\Comment;
use Doctrine\ORM\EntityRepository;


class CommentRepository extends EntityRepository
{
    public function getComments($id)
    {
       return $this->findByArticleId($id);
    }

}