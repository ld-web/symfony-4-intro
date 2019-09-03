<?php

namespace App\Controller;

use App\Entity\Offre;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class OffreController extends AbstractController
{
    /**
     * @Route("/offres", name="offres_list")
     */
    public function index()
    {
        $offre = new Offre();
        // Interface fluide
        $offre->setTitle("Mon titre")
            ->setDescription("Lorem ipsum...");
        $offre2 = new Offre();
        $offre2->setTitle("Autre titre")
            ->setDescription("Autre lorem ipsum");
        $offre3 = new Offre();
        $offre3->setTitle("Troisième offre")
            ->setDescription("Troisième lorem ipsum");

        return $this->render('offre/index.html.twig', [
            'offres' => [$offre, $offre2, $offre3]
        ]);
    }
}
