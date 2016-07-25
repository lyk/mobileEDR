<?php

namespace EDR\AppliBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RechercheController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $etablissements = $em->getRepository('EDRAppliBundle:Etablissement')->findAll();

        return $this->render('EDRAppliBundle:Map:recherche.html.twig', array(
            'etablissements' => $etablissements
        ));

    }

}