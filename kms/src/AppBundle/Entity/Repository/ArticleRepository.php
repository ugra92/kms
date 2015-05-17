<?php
namespace AppBundle\Entity\Repository;

use AppBundle\Entity\Article;
use Doctrine\ORM\EntityRepository;


class ArticleRepository extends EntityRepository
{
    public function findByName($name)
    {

    }

    public function save(Article $article){
        $this->_em->persist($article);
        $this->_em->flush();
    }


}