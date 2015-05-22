<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Article;
use AppBundle\Form\Type\ArticleType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
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
        $categories= $this->get('category_repository')->findAll();
        return $this->render('Article/article-main.html.twig', array('form'=>$form->createView(), 'categories'=>$categories));
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
        $article->setUserId($this->getUser());
        $categoryId= (int)$request->request->get('category');

        $this->get('article_manager')->save($article, $categoryId);

        return new Response('Created article '.$article->getHeading());
     //   return $this->redirectToRoute('article-main', array('response'=>'Succesfuly added article'));
    }

}
