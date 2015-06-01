<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Category;
use AppBundle\Entity\Task;
use AppBundle\Form\Type\CategoryType;
use DateTime;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class TaskController extends Controller
{
    /**
     * @Route("/admin/tasks", name="tasks_main")
     * @return Response
     */
    public function indexAction()
    {
        $users = $this->get('user_repository')->findAll();
        $tasks= $this->getDoctrine()->getManager()->getRepository("AppBundle:Task")->findAll();
        return $this->render(':Tasks:tasks-main.html.twig', array('tasks'=>$tasks,'users'=>$users));
    }


    /**
     * @Route("json/admin/tasks/add", name="json_tasks_add")
     * @Method("POST")
     * @param Request $request
     * @return Response
     */
    public function jsonAddTaskAction(Request $request)
    {
        $task = new Task();
        $task->setTitle($request->request->get('title'));
        $task->setCreatedAt(new DateTime($request->request->get('dateFrom')));
        $task->setFinishDate(new DateTime( $request->request->get('dateTo')));
        $task->setDescription($request->request->get('description'));
        foreach($request->request->get('employees') as $employee){
         $user=  $this->get('user_repository')->findByPk($employee);
        $task->addUser($user[0]);
        }

        $this->get('task_manager')->saveTask($task);

//        var_dump($task);
//        exit;
        return "Ok";
    }

}
