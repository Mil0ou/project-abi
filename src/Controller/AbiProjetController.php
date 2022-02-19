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
        try {
            $repository = $doctrine->getRepository(Project::class);
            $projects = $repository->findAll();
            if ($request->query->get('search')) {
                if ($request->query->get('search') === 'All') {
                    return new JsonResponse(['content' => $this->renderView('abi_projet/liste-projet/content.html.twig', [
                        'projects' => $projects
                    ])]);
                }
                $projectName = $request->query->get('search');
                $projects = $doctrine->getRepository(Project::class)->findSearchProject($projectName);
                return new JsonResponse(['content' => $this->renderView('abi_projet/liste-projet/content.html.twig', [
                    'projects' => $projects
                ])]);
            }

            return $this->render('abi_projet/liste-projet/project.html.twig', [
                'title' => 'Liste des projets',
                'projects' => $projects,
            ]);
        } catch (\Throwable $th) {
        }
    }

    // /**
    //  * @Route("/project/search",name="searchP")
    //  */
    // public function searchProjectname(ManagerRegistry $doctrine, Request $request)
    // {
    //     $nameProject = $request->query->get('search');
    //     dump('test');
    //     $projects = $doctrine->getRepository(Project::class)->findSearchProject($nameProject);
    //     return $this->render('abi_projet/liste-projet/project.html.twig', [
    //         'title' => 'Liste des projets',
    //         'projects' => $projects
    //     ]);
    // }
}
