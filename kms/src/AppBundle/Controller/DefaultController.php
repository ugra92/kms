<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Department;
use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        $articles=$this->getDoctrine()->getRepository('AppBundle:Article')->findBy(array('userId'=>3));
        $comments=$this->getDoctrine()->getRepository('AppBundle:Comment')->findBy(array('userId'=>3));
        $user = $this->get('security.token_storage')->getToken()->getUser();
        var_dump($user->getId());
        exit;
        $id= $user->getId();
        return $this->render(':Dashboard:index.html.twig', array('user_articles'=>$articles, 'user_comments'=>$comments, 'user_id'=>$id));
    }
}
