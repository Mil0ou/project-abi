<?php

namespace App\Controller;

use App\Entity\Project;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class AbiProjetController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        return $this->render('abi_projet/index.html.twig', [
            'controller_name' => 'AbiProjetController',
            'title' => 'Accueil'
        ]);
    }
    /**
     * @Route("/carte", name="carte")
     */
    public function carte(): Response
    {
        return $this->render(
            'abi_projet/geo.html.twig',
            ['title' => 'Où sommes nous ?']
        );
    }
    /**
     * @Route("/project",name="project")
     */
    public function liste_project(ManagerRegistry $doctrine, Request $request): Response
    {
        if ($request->query->get('search') === 'All') {
            $repository = $doctrine->getRepository(Project::class);
            $projects = $repository->findAll();
            return new JsonResponse(['content' => $this->renderView('abi_projet/liste-projet/content.html.twig', [
                'projects' => $projects
            ])]);
        }
        if ($request->query->get('search')) {
            $projectName = $request->query->get('search');
            $projects = $doctrine->getRepository(Project::class)->findSearchProject($projectName);
            if (empty($projects)) {
                return new JsonResponse(['content' => $this->renderView('abi_projet/liste-projet/nocontent.html.twig', [
                    'message' => 'aucun project ne correspond à votre requête'
                ])]);
            }
            return new JsonResponse(['content' => $this->renderView('abi_projet/liste-projet/content.html.twig', [
                'projects' => $projects
            ])]);
        }
        $repository = $doctrine->getRepository(Project::class);
        $projects = $repository->findAll();
        return $this->render('abi_projet/liste-projet/project.html.twig', [
            'title' => 'Liste des projets',
            'projects' => $projects,
        ]);
    }
}
