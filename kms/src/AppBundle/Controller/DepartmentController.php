<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Department;
use AppBundle\Form\Type\DepartmentType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DepartmentController extends Controller
{
    /**
     * @Route("admin/department", name="department-main")
     * @return string|\Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        $userManager = $this->get('fos_user.user_manager');
        $users = $userManager->findUsers();
        return $this->render('Department/department.html.twig', array('users'=>$users));
    }

    /**
     * @Route("/admin/department/new", name="department-add")
     * @param Request $request
     * @return string|\Symfony\Component\HttpFoundation\Response
     * @Method("POST")
     */
    public function departmentAddNewAction(Request $request)
    {
         //create new department
        $department = new Department();
        $department->setName($request->request->get('department_name'));

        $this->get('department_manager')->save($department);
        foreach ($request->get('users') as $userId){
            $user= $this->get('user_repository')->findByPk($userId);
            $department->addEmployee($user[0]);
        }
        $doctrine = $this->container->get('doctrine');
        $em = $doctrine->getManager();
        $em->flush();
        return new Response('Created department '.$department->getName());
    }

}
