<?php

namespace Manuia\Bundle\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Issue
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Manuia\Bundle\AppBundle\Entity\IssueRepository")
 */
class Issue
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="labels_url", type="string", length=255)
     */
    private $labelsUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="comments_url", type="string", length=255)
     */
    private $commentsUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="html_url", type="string", length=255)
     */
    private $htmlUrl;

    /**
     * @var integer
     *
     * @ORM\Column(name="number", type="integer")
     */
    private $number;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var integer
     *
     * @ORM\Column(name="user", type="integer")
     */
    private $user;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="labels", type="object")
     */
    private $labels;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=255)
     */
    private $state;

    /**
     * @var boolean
     *
     * @ORM\Column(name="locked", type="boolean")
     */
    private $locked;

    /**
     * @var integer
     *
     * @ORM\Column(name="assignee", type="integer")
     */
    private $assignee;

    /**
     * @var string
     *
     * @ORM\Column(name="milestone", type="string", length=255)
     */
    private $milestone;

    /**
     * @var integer
     *
     * @ORM\Column(name="comments", type="integer")
     */
    private $comments;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime")
     */
    private $updatedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="closed_at", type="datetime")
     */
    private $closedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="body", type="text")
     */
    private $body;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Issue
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
     * Set labelsUrl
     *
     * @param string $labelsUrl
     * @return Issue
     */
    public function setLabelsUrl($labelsUrl)
    {
        $this->labelsUrl = $labelsUrl;

        return $this;
    }

    /**
     * Get labelsUrl
     *
     * @return string 
     */
    public function getLabelsUrl()
    {
        return $this->labelsUrl;
    }

    /**
     * Set commentsUrl
     *
     * @param string $commentsUrl
     * @return Issue
     */
    public function setCommentsUrl($commentsUrl)
    {
        $this->commentsUrl = $commentsUrl;

        return $this;
    }

    /**
     * Get commentsUrl
     *
     * @return string 
     */
    public function getCommentsUrl()
    {
        return $this->commentsUrl;
    }

    /**
     * Set htmlUrl
     *
     * @param string $htmlUrl
     * @return Issue
     */
    public function setHtmlUrl($htmlUrl)
    {
        $this->htmlUrl = $htmlUrl;

        return $this;
    }

    /**
     * Get htmlUrl
     *
     * @return string 
     */
    public function getHtmlUrl()
    {
        return $this->htmlUrl;
    }

    /**
     * Set number
     *
     * @param integer $number
     * @return Issue
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return integer 
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Issue
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set user
     *
     * @param integer $user
     * @return Issue
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return integer 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set labels
     *
     * @param \stdClass $labels
     * @return Issue
     */
    public function setLabels($labels)
    {
        $this->labels = $labels;

        return $this;
    }

    /**
     * Get labels
     *
     * @return \stdClass 
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Set state
     *
     * @param string $state
     * @return Issue
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set locked
     *
     * @param boolean $locked
     * @return Issue
     */
    public function setLocked($locked)
    {
        $this->locked = $locked;

        return $this;
    }

    /**
     * Get locked
     *
     * @return boolean 
     */
    public function getLocked()
    {
        return $this->locked;
    }

    /**
     * Set assignee
     *
     * @param integer $assignee
     * @return Issue
     */
    public function setAssignee($assignee)
    {
        $this->assignee = $assignee;

        return $this;
    }

    /**
     * Get assignee
     *
     * @return integer 
     */
    public function getAssignee()
    {
        return $this->assignee;
    }

    /**
     * Set milestone
     *
     * @param string $milestone
     * @return Issue
     */
    public function setMilestone($milestone)
    {
        $this->milestone = $milestone;

        return $this;
    }

    /**
     * Get milestone
     *
     * @return string 
     */
    public function getMilestone()
    {
        return $this->milestone;
    }

    /**
     * Set comments
     *
     * @param integer $comments
     * @return Issue
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return integer 
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Issue
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Issue
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set closedAt
     *
     * @param \DateTime $closedAt
     * @return Issue
     */
    public function setClosedAt($closedAt)
    {
        $this->closedAt = $closedAt;

        return $this;
    }

    /**
     * Get closedAt
     *
     * @return \DateTime 
     */
    public function getClosedAt()
    {
        return $this->closedAt;
    }

    /**
     * Set body
     *
     * @param string $body
     * @return Issue
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string 
     */
    public function getBody()
    {
        return $this->body;
    }
}
