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
        $code = $this->getDoctrine()->getManager()->getRepository('AppBundle:CodeSnippet')->findAll();
//        var_dump($code);
//        exit;
        return $this->render('Code/code-main.html.twig', array('code'=>$code));
    }

    /**
     * @Route("/code/add", name="code_add")
     */
    public function codeAddAction()
    {

        return $this->render('Code/code-add.html.twig');
    }

}
