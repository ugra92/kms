<?php
namespace AppBundle\Entity\Manager;


use AppBundle\Entity\Repository\CodeSnippetRepository;


class CodeSnippetManager {

     protected $repository;

    public function __construct(CodeSnippetRepository $repository){
        $this->repository= $repository;
    }

    public  function getCodeById($id){
        return $this->repository->getCodeById($id);
    }

    public function saveCode($code){
        return $this->repository->saveCode($code);
    }

 }