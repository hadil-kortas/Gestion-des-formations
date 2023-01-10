<?php

namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AccueilController extends AbstractController
{
    /**
     * @Route("/Accueil", name="accueil")
     */
    public function accueil()
    {
        return $this->render('registration/accueil.html.twig');
    }
}