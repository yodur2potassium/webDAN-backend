<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\FOSRestController;

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
    
    public function getDataAction() {
        $data = ["name" => "Robert",
            "title1" => "Organisation de la DSI Centrale",
            "title2" => "Schéma des differents pôles à la DSI Centrale",
            "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus accumsan pulvinar porta. Praesent nec dolor nec leo dictum mattis. Sed in felis eu leo placerat dapibus. Aliquam eu libero nulla. Fusce tellus sapien, cursus at tempor et, volutpat sit amet magna. Etiam pellentesque lorem nibh, a gravida nunc congue a. Vestibulum facilisis, dolor et porta ornare, elit urna tempus neque, sed ultricies ex mauris quis mauris.",
            "image" => [
                "source" => "assets/images/imageTest.png",
                "alt" => "Organisation DSI Centrale",
                "caption" => "La DSI centrale s'articule autour de six directions : deux transverses et quatre opérationnelles (cf schéma ci-dessus)"
                ]];
        $view = $this->view($data,200)
                ->setTemplate("AppBundle:Data:getdata.html.twig")
                ->setTemplateVar("data");
                
        return $this->handleView($view);
    }
}
