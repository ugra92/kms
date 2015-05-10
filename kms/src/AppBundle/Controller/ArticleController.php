<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Article;
use AppBundle\Form\Type\ArticleType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\DateTime;

class ArticleController extends Controller
{
    /**
     * @Route("/articles", name="article-main")
     * @return string|\Symfony\Component\HttpFoundation\Response
     * @Method("GET")
     */
    public function indexAction()
    {
        $form = $this->createForm(new ArticleType());
       return $this->render('Article/article-main.html.twig', array('form'=>$form->createView()));
    }

    /**
     * @Route("/articles", name="article-add")
     * @param Request $request
     * @return string|\Symfony\Component\HttpFoundation\Response
     * @Method("POST")
     */
    public function articleAddNewAction(Request $request)
    {
            //create new article
            $article = new Article();
            // get heading and content from $_POST
            $article->setHeading($request->request->get('article')['heading']);
            $article->setContent($request->request->get('article')['content']);
            //find user and set user
            $um = $this->getDoctrine()->getRepository('AppBundle:User');
            $user= $um->findOneBy(array('username' => 'admin'));
            $article->setUserId($user);
            //find category and set category
            $cm = $this->getDoctrine()->getRepository('AppBundle:Category');
            $category= $cm->findOneBy(array('categoryId' => '1'));
            $article->setCategoryId($category);
            //insert current date time
            $article->setCreatedAt(new \DateTime(date('Y-m-d H:i:s')));
            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();
            return $this->render('Article/article-main.html.twig', array('form'=>$form->createView()));

    }

}
