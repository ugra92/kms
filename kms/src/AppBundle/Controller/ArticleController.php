<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/articles", name="article_main")
     */
    public function indexAction()
    {
       return $this->render('Article/article-main.html.twig');
    }
}
