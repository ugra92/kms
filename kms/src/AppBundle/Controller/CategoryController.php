<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Category;
use AppBundle\Form\Type\CategoryType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CategoryController extends Controller
{
    /**
     * @Route("/category", name="category_main")
     * @param Request $request
     * @return Response
     */
    public function indexAction(Request $request)
    {
        $form = $this->createForm(new CategoryType());

        $form->handleRequest($request);

        if($form->isValid()){
           $category = new Category($form['category_name']->getData());
            $em = $this->getDoctrine()->getManager();
            $em->persist($category);
            $em->flush();

        }
        return $this->render('Category/category-main.html.twig', array('form'=>$form->createView()));
    }


    /**
     * @Route("/api/categoryAll", name="ajax_all_categories")
     * @return Response
     */
    public function returnCategoriesAjaxAction()
    {
//        $request = $this->container->get('request');
        $em = $this->getDoctrine()->getManager();
        $query= $em->createQuery('SELECT p FROM AppBundle:Category p');
        $categories = $query->getResult();
        var_dump($categories);

        return new JsonResponse(array('categories' => $categories));
//        $response->headers->set('Content-Type', 'application/json');
    }

}
