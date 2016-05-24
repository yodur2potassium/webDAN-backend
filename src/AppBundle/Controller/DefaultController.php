<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\FOSRestController;

/**
 * Ce controller utilise l'autorouting du FOSRestBundle
 * 
 * This Controller uses FOSRest autorouting
 */

class DefaultController extends FOSRestController
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }
    
    /**
     * Cette action ne sert qu'a tester le web service, retourne tout les Articles
     * présent en BDD avec Images, Videos et Erreurs liées
     * 
     * This Action is for test purposes only, return an Article with Pictures
     * and Video linked to Errors
     */
    public function getTestAction() {
        $data = $this->getDoctrine()->getRepository('AppBundle:Article')->findAll();
        $view = $this->view($data[0],200)
                ->setTemplate("AppBundle:Data:test.html.twig")
                ->setTemplateVar("data")
                ->setHeader("Access-Control-Allow-Origin", "*");
                
        return $this->handleView($view);
    }
    
    public function getErrorAction() {
        $data = ["message"=>"error"];
        $view = $this->view($data,200)
                ->setTemplate("AppBundle:Data:test.html.twig")
                ->setTemplateVar("data")
                ->setHeader("Access-Control-Allow-Origin", "*");
                
        return $this->handleView($view);
    }
    // TODO: Créer les actions pour récuperer les articles par ID ainsi que la liste des Erreurs
}
