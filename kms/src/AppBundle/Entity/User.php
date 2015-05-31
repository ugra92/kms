<?php
namespace AppBundle\Entity;
use AppBundle\Entity\Article;
use AppBundle\Entity\CodeSnippet;
use AppBundle\Entity\Task;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinTable;
use Doctrine\ORM\Mapping\ManyToMany;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Entity\Repository\UserRepository")
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
     * @ORM\Column(type="string")
     */
    protected $name;
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Department", inversedBy="employees")
     * @ORM\JoinColumn(name="department_id", referencedColumnName="departmentId")
     */
    protected $departmentId;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Article", mappedBy="userId")
     */
    protected $articles;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\CodeSnippet", mappedBy="userId")
     */
    protected $codeSnippets;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Document", mappedBy="documentId")
     */
    protected $documents;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Comment", mappedBy="userId")
     */
    protected $comments;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $position;

    /**
     * @ManyToMany(targetEntity="Task", inversedBy="users")
     * @JoinTable(name="users_tasks")
     **/
    protected  $tasks;

    public function __construct()
    {
        parent::__construct();
        $this->comments= new ArrayCollection();
        $this->documents= new ArrayCollection();
        $this->articles= new ArrayCollection();
        $this->tasks= new ArrayCollection();
        $this->codeSnippets= new ArrayCollection();
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
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param mixed $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    /**
     * @return mixed
     */
    public function getTasks()
    {
        return $this->tasks;
    }

    /**
     * @param mixed $tasks
     */
    public function setTasks($tasks)
    {
        $this->tasks = $tasks;
    }


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
    public function getCodeSnippets()
    {
        return $this->codeSnippets;
    }

    /**
     * @param mixed $codeSnippets
     */
    public function setCodeSnippets($codeSnippets)
    {
        $this->codeSnippets = $codeSnippets;
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

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function addSnippet(CodeSnippet $codeSnippet)
    {
        $codeSnippet->setUserId($this);
        $this->codeSnippets[] = $codeSnippet;
        return $this;
    }

    /**
     * @param Task $tasks
     * @return $this
     */
    public function addTask(Task $tasks)
    {
        $tasks->addUser($this);
        $this->tasks[] = $tasks;
        return $this;
    }

    /**
     * @param Task $tasks
     */
    public function removeTask(Task $tasks)
    {
        $this->tasks->removeElement($tasks);
    }

    /**
     * Add article
     *
     * @param Article $article
     * @return User
     */
    public function addArticle(Article $article)
    {
        $article->setUserId($this);
        $this->articles[] = $article;
        return $this;
    }

    /**
     * @param Article $article
     */
    public function removeArticle(Article $article)
    {
        $this->articles->removeElement($article);
    }

    /**
     * Add document
     *
     * @param \AppBundle\Entity\Document $document
     * @return User
     */
    public function addDocument(\AppBundle\Entity\Document $document)
    {
        $this->documents[] = $document;

        return $this;
    }

    /**
     * Remove document
     *
     * @param \AppBundle\Entity\Document $document
     */
    public function removeDocument(\AppBundle\Entity\Document $document)
    {
        $this->documents->removeElement($document);
    }

    /**
     * Add comment
     *
     * @param \AppBundle\Entity\Comment $comment
     * @return User
     */
    public function addComment(\AppBundle\Entity\Comment $comment)
    {
        $comment->setUserId($this);
        $this->comments[] = $comment;
        return $this;
    }

    /**
     * Remove comments
     *
     * @param Comment $comment
     * @internal param Comment $comments
     */
    public function removeComment(\AppBundle\Entity\Comment $comment)
    {
        $this->comments->removeElement($comment);
    }
}
