<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AbiProjetController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        return $this->render('abi_projet/index.html.twig', [
            'controller_name' => 'AbiProjetController', 'title' => 'Accueil',
        ]);
    }
    /**
     * @Route("/carte", name="carte")
     */
    public function carte(): Response
    {
        return $this->render('abi_projet/geo.html.twig', ['title' => 'Où sommes nous ?',]);
    }
    /**
     * @Route("/project",name="project")
     */
    public function liste_project(): Response
    {
        return $this->render('abi_projet/project.html.twig');
    }
}
