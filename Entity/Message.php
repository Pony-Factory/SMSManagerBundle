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
     * @var string
     *
     * @ORM\Column(name="from_num", type="string", length=20)
     */
    private $fromNum;

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
     * @var string
     *
     * @ORM\Column(name="sent_to", type="string", length=20)
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
     * Set fromNum
     *
     * @param string $fromNum
     * @return Message
     */
    public function setFromNum($fromNum)
    {
        $this->fromNum = $fromNum;

        return $this;
    }

    /**
     * Get fromNum
     *
     * @return string 
     */
    public function getFromNum()
    {
        return $this->fromNum;
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
     * Set sentTo
     *
     * @param string $sentTo
     * @return Message
     */
    public function setSentTo($sentTo)
    {
        $this->sentTo = $sentTo;

        return $this;
    }

    /**
     * Get sentTo
     *
     * @return string 
     */
    public function getSentTo()
    {
        return $this->sentTo;
    }
}
