<?php
namespace AppBundle\Entity\Manager;
use AppBundle\Entity\Repository\TaskRepository;

class TaskManager {

    protected $repository;

    public function __construct(TaskRepository $repository){

        $this->repository= $repository;

    }

    public function saveTask($task){
        $this->repository->saveTask($task);
    }

}