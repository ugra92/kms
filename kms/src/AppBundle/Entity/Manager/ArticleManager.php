<?php
namespace AppBundle\Entity\Manager;
use AppBundle\Entity\Article;
use  AppBundle\Entity\Repository\ArticleRepository;

 class ArticleManager {

     protected $repository;
     protected $categoryManager;

    public function __construct(ArticleRepository $repository, CategoryManager $categoryManager){
        $this->repository= $repository;
        $this->categoryManager= $categoryManager;

    }
     public function save(Article $article, $categoryId){
         $category= $this->getCategory($categoryId);
         $category->addArticle($article);
         $article->setCreatedAt(new \DateTime(date('Y-m-d H:i:s')));
         $this->repository->save($article);

     }

     public function getCategory($id){
         return $this->categoryManager->getCategoryById($id);
     }
 }