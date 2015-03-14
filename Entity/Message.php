<?php

namespace PonyF\SMSManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PonyF\SMSManagerBundle\Entity\MessageRepository")
 */
class Message
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
    * @ORM\ManyToOne(targetEntity="PonyF\SMSManagerBundle\Entity\Contact")
    * @ORM\JoinColumn(nullable=false)
    */
    private $from;

    /**
     * @var string
     *
     * @ORM\Column(name="message_id", type="string", length=255)
     */
    private $messageId;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text")
     */
    private $message;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
    * @ORM\ManyToOne(targetEntity="PonyF\SMSManagerBundle\Entity\Contact")
    * @ORM\JoinColumn(nullable=false)
    */
    private $sentTo;

    /**
    * Init date
    */
    public function __construct()
    {
        $this->date = new \Datetime();
    }

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
     * Set messageId
     *
     * @param string $messageId
     * @return Message
     */
    public function setMessageId($messageId)
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * Get messageId
     *
     * @return string 
     */
    public function getMessageId()
    {
        return $this->messageId;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return Message
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Message
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set from
     *
     * @param \PonyF\SMSManagerBundle\Entity\Contact $from
     * @return Message
     */
    public function setFrom(\PonyF\SMSManagerBundle\Entity\Contact $from)
    {
        $this->from = $from;

        return $this;
    }

    /**
     * Get from
     *
     * @return \PonyF\SMSManagerBundle\Entity\Contact 
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * Set sentTo
     *
     * @param \PonyF\SMSManagerBundle\Entity\Contact $sentTo
     * @return Message
     */
    public function setSentTo(\PonyF\SMSManagerBundle\Entity\Contact $sentTo)
    {
        $this->sentTo = $sentTo;

        return $this;
    }

    /**
     * Get sentTo
     *
     * @return \PonyF\SMSManagerBundle\Entity\Contact 
     */
    public function getSentTo()
    {
        return $this->sentTo;
    }
}
