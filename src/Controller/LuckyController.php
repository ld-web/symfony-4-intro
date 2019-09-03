<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
    /**
     * @Route("/lucky/number", name="lucky_number")
     */
    public function number()
    {
        $mohamedLuckyNumber = mt_rand(0, 100);
        $mamadouLuckyNumber = mt_rand(0, 100);

        if ($mamadouLuckyNumber == $mohamedLuckyNumber) {
            $stateCombat = "Egalité";
        } else {
            $stateCombat = ($mamadouLuckyNumber > $mohamedLuckyNumber) ? "Vainqueur Mamadou" : "Vainqueur Mohamed";
        }

        return $this->render(
            'lucky/number.html.twig',
            [
                'mohamed_score' => $mohamedLuckyNumber,
                'mamadou_score' => $mamadouLuckyNumber,
                'state_combat'  => $stateCombat
            ]
        );
    }
}
