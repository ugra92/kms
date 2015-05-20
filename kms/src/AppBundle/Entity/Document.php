<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 05.04.2015
 * Time: 16:02
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity()
 *
 */

class Document {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $documentId;
    /**
     * @ORM\Column(type="string")
     */
    protected $url;
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="documents")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $userId;


    /**
     * Get documentId
     *
     * @return integer 
     */
    public function getDocumentId()
    {
        return $this->documentId;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Document
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set userId
     *
     * @param \AppBundle\Entity\User $userId
     * @return Document
     */
    public function setUserId(\AppBundle\Entity\User $userId = null)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return \AppBundle\Entity\User 
     */
    public function getUserId()
    {
        return $this->userId;
    }
}
