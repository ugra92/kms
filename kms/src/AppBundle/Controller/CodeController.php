<?php

namespace AppBundle\Controller;


use AppBundle\Entity\CodeSnippet;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CodeController extends Controller
{
    /**
     * @Route("/code/{id}", name="code_main")
     * @param $id
     * @return Response
     * @internal param Request $request
     */
    public function indexAction($id)
    {
        $code = $this->get('code_manager')->getCodeById($id);
        return $this->render('Code/code-main.html.twig', array('code'=>$code));
    }

    /**
     * @Route("/code/add", name="code_add")
     * @Method("GET")
     */
    public function codeAddAction()
    {

        return $this->render('Code/code-add.html.twig');
    }

    /**
     * @Route("/code/add", name="json-code-add")
     * @Method("POST")
     * @param Request $request
     * @return Response
     */
    public function jsonCodeAddAction(Request $request)
    {
        $code= new CodeSnippet();
        $code->setUserId($this->getUser());
        $code->setHtml($request->request->get('htmlCode'));
        $code->setCss($request->request->get('cssCode'));
        $code->setJs($request->request->get('jsCode'));
        $code->setHeading($request->request->get('heading'));

        return  $this->get('code_manager')->saveCode($code);

    }

}
