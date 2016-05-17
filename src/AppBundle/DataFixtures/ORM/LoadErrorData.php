<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\DataFixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Error;

/**
 * Description of LoadErrorData
 *
 * @author xnef424
 */
class LoadErrorData extends AbstractFixture implements OrderedFixtureInterface{
    

    
    public function load(ObjectManager $manager) {
        
        // Ajoute une erreur a l'image
        $errorImageData = new Error();
        $errorImageData->setImage($this->getReference('image-test'))
                ->setTitle("Titre de l'erreur lié a l'image")
                ->setDescription("Description de l'erreur liée à l'image")
                ->setAccedeCode(1)
                ->setInternCode(1)
                ->setDocLinks("http://dummy.net.address")
                ->setTarget('description')
                ->setCorrection("This is the description of the image linked to the error");
        
        $manager->persist($errorImageData);
        $manager->flush();
        
        // Ajoute une erreur à l'article
        $errorArticleData = new Error();
        $errorArticleData->setArticle($this->getReference('article-test'))
                ->setTitle("Titre de l'erreur lié a l'article")
                ->setDescription("Description de l'erreur liée à l'article")
                ->setAccedeCode(2)
                ->setInternCode(2)
                ->setDocLinks("http://dummy.net.address")
                ->setTarget('subtitle')
                ->setCorrection("<h2>Subtitle</h2>");
        
        $manager->persist($errorArticleData);
        $manager->flush();
    }

    public function getOrder() {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        // this one need to be loaded after ImageData and VideoData
        return 5;   
    }
}
