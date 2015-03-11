<?php

namespace PonyF\SMSManagerBundle\Controller;

use PonyF\SMSManagerBundle\Entity\Message;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {

        $message = new Message();
        $message->setFromNum('blabla1');
        $message->setMessageId('msgid');
        $message->setMessage('monmessage');
        $message->setSentTo('ok');

        $em = $this->getDoctrine()->getManager();
        $em->persist($message);
        $em->flush();

        return $this->render('PonyFSMSManagerBundle:Default:index.html.twig', array('name' => $name));
    }
}
