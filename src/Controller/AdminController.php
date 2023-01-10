<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class AdminController extends AbstractController

///**
// * Require ROLE_ADMIN for *every* controller method in this class.
// *
// * @IsGranted("ROLE_ADMIN")
// */

{
    #[Route('/admin', name: 'admin')]
    public function admin(): Response
    {
        return $this->render('admin.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

//    /**
//         * Require ROLE_ADMIN for only this controller method.
//         *
//         * @IsGranted("ROLE_ADMIN")
//     */

//    public function adminDashboard()
//    {
//        $this->denyAccessUnlessGranted('ROLE_ADMIN');
//
//        // or add an optional message - seen by developers
//        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'User tried to access a page without having ROLE_ADMIN');
//    }

    #[Route('/etudiant', name: 'etudiant')]
    public function etudiant(): Response
    {
        return $this->render('etudiant.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
}
