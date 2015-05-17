<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Article;
use AppBundle\Form\Type\ArticleType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
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
        //find category and set category
        $categoryId= $request->request->get('category');
        $category = $this->get('category_repository')->findById($categoryId);
        $article->setCategoryId($category);
        //set user
        $article->setUserId($this->getUser());
        //insert current date time
        $article->setCreatedAt(new \DateTime(date('Y-m-d H:i:s')));
       $this->get('article_repository')->save($article);
        return $this->redirectToRoute('article-main', array('response'=>'Succesfuly added article'));
    }

}
