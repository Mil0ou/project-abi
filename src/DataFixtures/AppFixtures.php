<?php

namespace App\DataFixtures;

use App\Entity\Project;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 1; $i < 35; $i++) {
            $project = new Project();
            $project->setAbregeProject("pjt $i")
                ->setNomProject("project n°$i")
                ->setChargeEstimee(200)
                ->setDatePrevisionnelDebut(new \DateTime('2015/02/15'))
                ->setdatePrevisionnelFin(new \DateTime('2019/06/25'))
                ->setTypeProject('forfait');
            $manager->persist($project);
        }
        $manager->flush();
    }
}
