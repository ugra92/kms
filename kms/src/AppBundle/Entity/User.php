<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * @ORM\Entity()
 *
 */
class User extends BaseUser{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
//    /**
//     * @ORM\Column(type="string")
//     */
//    protected $name;
//    /**
//     * @ORM\Column(type="string")
//     */
//    protected $username;
//    /**
//     * @ORM\Column(type="string")
//     */
//    protected $password;
//    /**
//     * @ORM\Column(type="string")
//     */
//    protected $email;
//    /**
//     * @ORM\Column(type="string")
//     */
//    protected $role;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Department", inversedBy="employees")
     * @ORM\JoinColumn(name="department_id", referencedColumnName="departmentId")
     */
    protected $departmentId;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Article", mappedBy="articleId")
     */
    protected $articles;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Document", mappedBy="documentId")
     */
    protected $documents;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Comment", mappedBy="commentId")
     */
    protected $comments;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
//    public function getName()
//    {
//        return $this->name;
//    }
//
//    /**
//     * @param mixed $name
//     */
//    public function setName($name)
//    {
//        $this->name = $name;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getUsername()
//    {
//        return $this->username;
//    }
//
//    /**
//     * @param mixed $username
//     */
//    public function setUsername($username)
//    {
//        $this->username = $username;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getPassword()
//    {
//        return $this->password;
//    }
//
//    /**
//     * @param mixed $password
//     */
//    public function setPassword($password)
//    {
//        $this->password = $password;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getEmail()
//    {
//        return $this->email;
//    }
//
//    /**
//     * @param mixed $email
//     */
//    public function setEmail($email)
//    {
//        $this->email = $email;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getRole()
//    {
//        return $this->role;
//    }
//
//    /**
//     * @param mixed $role
//     */
//    public function setRole($role)
//    {
//        $this->role = $role;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getGroupId()
//    {
//        return $this->groupId;
//    }
//
//    /**
//     * @param mixed $groupId
//     */
//    public function setGroupId($groupId)
//    {
//        $this->groupId = $groupId;
//    }

    /**
     * @return mixed
     */
    public function getDepartmentId()
    {
        return $this->departmentId;
    }

    /**
     * @param mixed $departmentId
     */
    public function setDepartmentId($departmentId)
    {
        $this->departmentId = $departmentId;
    }

    /**
     * @return mixed
     */
    public function getArticles()
    {
        return $this->articles;
    }

    /**
     * @param mixed $articles
     */
    public function setArticles($articles)
    {
        $this->articles = $articles;
    }

    /**
     * @return mixed
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * @param mixed $documents
     */
    public function setDocuments($documents)
    {
        $this->documents = $documents;
    }

    /**
     * @return mixed
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @param mixed $comments
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
    }


    public function serialize()
    {
        return serialize($this->username);
    }

    public function unserialize($data)
    {
        $this->username = unserialize($data);
    }


}