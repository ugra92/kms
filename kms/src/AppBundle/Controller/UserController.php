<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class UserController extends Controller
{

    /**
     * @Route("/profile/", name="profile")
     * @return string|\Symfony\Component\HttpFoundation\Response
     * @Method("GET")
     */
    public function profileAction()
    {
        $user = $this->getUser();
//        var_dump($user->getComments()[0]);
//        exit;
        return $this->render('User/user-profile.html.twig', array('user'=> $user));
    }




}
