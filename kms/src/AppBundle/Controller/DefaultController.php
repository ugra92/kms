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

        return $this->render(':Dashboard:index.html.twig', array('user_articles'=>$articles, 'user_comments'=>$comments));
    }
}
