<?php
namespace AppBundle\Entity\Manager;
use AppBundle\Entity\Repository\CommentRepository;

 class CommentManager {

     protected $repository;

    public function __construct(CommentRepository $repository){
        $this->repository= $repository;

    }

     public function getComments($id){
        return $this->repository->getComments($id);
     }

 }