<?php

namespace App\Controller;

use App\Entity\Collaborateur;
use App\Form\NouveauCollaborateurType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


class SecurityController extends AbstractController
{

    /**
     * @Route("/newc",name="newcollab")
     */
    public function nouveauCollaborateur(Request $request, ManagerRegistry $doctrine, SluggerInterface $slugger, UserPasswordHasherInterface $encoder)
    {
        $collab = new Collaborateur();
        $doctrine = $doctrine->getManager();
        $form = $this->createForm(NouveauCollaborateurType::class, $collab);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            //encodage du password
            $hash = $encoder->hashPassword($collab, $collab->getPassword());
            $collab->setPassword($hash);
            $photo_profil_file = $form->get('Photo')->getData();
            if ($photo_profil_file) {
                //si on a des "datas" alors on les récuperes pour les enregistrer des le répertoire "upload/profile-image"
                $originalFilename = pathinfo($photo_profil_file->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename); //cela est nécessaire pour inclure en toute sécurité le nom du fichier dans l'URL
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $photo_profil_file->guessExtension();
                try {
                    $photo_profil_file->move(
                        $this->getParameter('profile-photo'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    //dire un truc si le fichier ne s'upload pas mais je sais pas quoi a voir plus tard
                }
                $collab->setPhoto($newFilename);
            }
            $doctrine->persist($collab);
            $doctrine->flush();
            return $this->redirectToRoute('salarie');
        }
        return $this->render(
            'security/newcollab/newcollab.html.twig',
            ['form' => $form->createView(), 'title' => 'registry']
        );
    }


    /** 
     * @Route("/login",name="security_login") 
     */
    public function login()
    {
        return $this->render("security\login\login.html.twig", ['title' => 'login']);
    }

    /**
     * @Route("/deconexion",name="security_logout")
     */

    public function logout()
    {
    }
}
