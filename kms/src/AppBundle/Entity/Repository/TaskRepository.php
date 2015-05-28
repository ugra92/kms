<?php
namespace AppBundle\Entity\Repository;

use AppBundle\Entity\Category;
use AppBundle\Entity\Task;
use Doctrine\ORM\EntityRepository;


class TaskRepository extends EntityRepository
{
    public function findByPk($id)
    {
       return $this->findOneById($id);
    }

//    public function getAllUserTasks($id){
////        return $this->findBy()
//    }

    public function save(Task $task){
        $this->_em->persist($task);
        $this->_em->flush();
    }


}