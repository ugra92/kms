<?php
namespace AppBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;


class CategoryRepository extends EntityRepository
{
    public function findByName($name)
    {
        return $this->CategoryRepository->findBy(array(
            'name' => $name
        ));
    }

    public function save(Category $category){
        $this->_em->persist($category);
        $this->_em->flush();
    }
}