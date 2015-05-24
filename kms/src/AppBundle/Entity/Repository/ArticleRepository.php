<?php
namespace AppBundle\Entity\Repository;

use AppBundle\Entity\Article;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\ResultSetMapping;


class ArticleRepository extends EntityRepository
{
    public function findByName($name)
    {

    }

    public function save(Article $article){
        $this->_em->persist($article);
        $this->_em->flush();
    }

    public function getArticlesFiltered($sql){

        $con = $this->getEntityManager()->getConnection()->prepare($sql);
        $con->execute();
        return $con->fetchAll();
    }

}