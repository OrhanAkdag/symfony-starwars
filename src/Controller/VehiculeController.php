<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class VehiculeController extends AbstractController
{
    /**
     * @Route("/vehicule", name="vehicule")
     */
    public function index()
    {
        $vehicule = ['avion','fusée','satellite'];

        return $this->render('vehicule/index.html.twig', [
            'vehicule' => $vehicule,

        ]);
    }
    /**
     * @Route("/add-vehicule", name="add-vehicule")
     */
    public function addVehicule()
    {
        return $this->render('vehicule/addvehicule.html.twig');
    }

    /**
     * @Route("/detail-vehicule/{vehiculeName}", name="detail-vehicule")
     */
    public function vehiculeDetail($vehiculeName)
    {
        return $this->render('vehicule/detail.html.twig',[
            'vehicule' => $vehiculeName
        ]);
    }
}
