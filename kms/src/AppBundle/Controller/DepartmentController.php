<?php

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
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


}
