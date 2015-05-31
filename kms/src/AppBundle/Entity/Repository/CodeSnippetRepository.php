<?php
namespace AppBundle\Entity\Repository;


use Doctrine\ORM\EntityRepository;


class CodeSnippetRepository extends EntityRepository
{

    public function getCodeById($id){
        return $this->findByCodeSnippetId($id);
    }
    public function saveCode($code){
        $this->_em->persist($code);
        $this->_em->flush();
    }

}