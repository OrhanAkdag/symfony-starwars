<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PlanetController extends AbstractController
{
    /**
     * @Route("/planet", name="planet")
     */
    public function index()
    {
        $planet = ['mars','saturne','pluton'];
        return $this->render('planet/index.html.twig',[
            'planet' => $planet
        ]);
    }

    /**
     * @Route("/add-planet", name="addplanet")
     */
    public function addPlanet()
    {
        return $this->render('planet/addplanet.html.twig');
    }

    /**
     * @Route("/detail-planete/{planetName}", name="detail-planet")
     */
    public function planetDetail($planetName)
    {
        return $this->render('planet/detail.html.twig',[
            'planete' => $planetName
        ]);
    }

}
