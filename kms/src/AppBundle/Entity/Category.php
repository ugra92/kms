<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 05.04.2015
 * Time: 15:47
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity()
 *
 */
class Category {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $categoryId;
    /**
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Article", mappedBy="articleId")
     */
    protected $articles;
}