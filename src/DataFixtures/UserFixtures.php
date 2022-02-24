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
        $user->setMatriculeCollaborateur("durand55487")
            ->setNom("Durand")
            ->setPrenom("Martin")
            ->setSalaireBrut(15000)
            ->setStatus("Admin")
            ->setRole("ROLE_ADMIN")
            ->setPassword('$2y$10$gusVEaVwDtyu9Okh1ox3F.u0JGgEpg6Ofih9J7rPE4TB7K2DgQk3.');
        $manager->persist($user);
        $manager->flush();
    }
}
