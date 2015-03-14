<?php
// src/PonyF/SMSManagerBundle/DataFixtures/ORM/LoadExample.php

namespace PonyF\SMSManagerBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PonyF\SMSManagerBundle\Entity\Message;
use PonyF\SMSManagerBundle\Entity\Contact;

class LoadExample implements FixtureInterface
{
  public function load(ObjectManager $manager)
  {
    // Contact 1
    $contact1 = new Contact();
    $contact1->setSurname('Kenobi');
    $contact1->setName('Obi-Wan');
    $contact1->setNum('06********');
    $manager->persist($contact1);

    // Contact 2
    $contact2 = new Contact();
    $contact2->setSurname('Skywalker');
    $contact2->setName('Anakin');
    $contact2->setNum('06********');
    $manager->persist($contact2);


    // Message 1
    $message1 = new Message();
    $message1->setFrom($contact1);
    $message1->setMessageId('msgid1');
    $message1->setMessage('Hello');
    $message1->setDate(new \DateTime('2015-01-01 12:00:00'));
    $message1->setSentTo($contact2);
    $manager->persist($message1);

    // Message 2
    $message2 = new Message();
    $message2->setFrom($contact2);
    $message2->setMessageId('msgid2');
    $message2->setMessage('Hello');
    $message2->setDate(new \DateTime('2015-01-01 13:00:00'));
    $message2->setSentTo($contact1);
    $manager->persist($message2);

    // Message 3
    $message3 = new Message();
    $message3->setFrom($contact1);
    $message3->setMessageId('msgid3');
    $message3->setMessage('Ho ho ho merry christmas');
    $message3->setDate(new \DateTime('2015-01-01 14:00:00'));
    $message3->setSentTo($contact2);
    $manager->persist($message3);


    $manager->flush();
  }
}
