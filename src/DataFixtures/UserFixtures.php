<?php

namespace App\DataFixtures;

use App\Entity\Collaborateur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $user = new Collaborateur();
        $user->setMatriculeCollaborateur("ajziuej15")
            ->setNom("Durand")
            ->setPrenom("Martin")
            ->setSalaireBrut(15000)
            ->setStatus("Admin")
            ->setRole("Admin")
            ->setPassword("test");
        $manager->persist($user);
        $manager->flush();
    }
}
