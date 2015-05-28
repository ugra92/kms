<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Category;
use AppBundle\Form\Type\CategoryType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CodeController extends Controller
{
    /**
     * @Route("/code", name="code_main")
     * @param Request $request
     * @return Response
     */
    public function indexAction(Request $request)
    {

        return $this->render('Code/code-main.html.twig');
    }

}