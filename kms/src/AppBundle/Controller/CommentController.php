<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class CommentController extends Controller
{

    /**
     * @Route("/json/add-comment", name="json-add-comment")
     * @param Request $request
     * @return string|\Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
       var_dump($request->request->get('comment'));
        exit;
        return $this->render('Article/article-all.html.twig', array('articles'=>$articles, 'categories'=> $categories));
    }

}
