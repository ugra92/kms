<?php
/**
 * Created by PhpStorm.
 * User: Nikola
 * Date: 2.8.2015
 * Time: 18:42
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\OneToOne;

/**
 * @ORM\Entity()
 *
 */
class Post {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $postId;

    /**
     * @OneToOne(targetEntity="AppBundle\Entity\Article")
     * @JoinColumn(name="article_id", referencedColumnName="articleId", nullable=true)
     **/
    protected $articleId;

    /**
     * @OneToOne(targetEntity="AppBundle\Entity\Video")
     * @JoinColumn(name="video_id", referencedColumnName="videoId", nullable=true)
     **/
    protected $videoId;

    /**
     * @return mixed
     */
    public function getPostId()
    {
        return $this->postId;
    }

    /**
     * @param mixed $postId
     */
    public function setPostId($postId)
    {
        $this->postId = $postId;
    }

    /**
     * @return mixed
     */
    public function getArticleId()
    {
        return $this->articleId;
    }

    /**
     * @param mixed $articleId
     */
    public function setArticleId($articleId)
    {
        $this->articleId = $articleId;
    }

    /**
     * @return mixed
     */
    public function getVideoId()
    {
        return $this->videoId;
    }

    /**
     * @param mixed $videoId
     */
    public function setVideoId($videoId)
    {
        $this->videoId = $videoId;
    }




}