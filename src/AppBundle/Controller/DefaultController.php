<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\FOSRestController;

/**
 * 
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
    
    public function getTestAction() {
        $data = ["message"=>"plop!"];
        $view = $this->view($data,200)
                ->setTemplate("AppBundle:Data:test.html.twig")
                ->setTemplateVar("data");
                
        return $this->handleView($view);
    }
    
    public function getErrorAction() {
        $data = ["message"=>"error"];
        $view = $this->view($data,200)
                ->setTemplate("AppBundle:Data:test.html.twig")
                ->setTemplateVar("data");
                
        return $this->handleView($view);
    }
}
