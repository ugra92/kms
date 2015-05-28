<?php
namespace AppBundle\Entity\Manager;
use AppBundle\Entity\Article;
use  AppBundle\Entity\Repository\ArticleRepository;
use AppBundle\Entity\Repository\TaskRepository;

class TaskManager {

    protected $repository;

    public function __construct(TaskRepository $repository){

        $this->repository= $repository;

    }

//    public function getAllUserTasks($id){
//
//        return $this->repository->getAllUserTasks($id);
//    }

}