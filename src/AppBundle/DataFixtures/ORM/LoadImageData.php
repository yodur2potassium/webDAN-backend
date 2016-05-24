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
use AppBundle\Entity\Image;

/**
 * Fixtures de données pour entité Image
 * Data fixtures for Image Entity
 *
 * @author xnef424
 */
class LoadImageData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager) {
        // Set les données à inscrire en BDD
        //Set the test data to persist in DB here
        $imageData = new Image();
        $source = "http://lorempixel.com/400/200";
        $imageData->setDescription("")
                ->setCaption("A useless subtitle for the image")
                ->setSource($source);
        
        // Persiste les données
        // Persist the data
        $manager->persist($imageData);
        $manager->flush();
        // Ajoute une réference pour être passé à ArticleData
        // Set a reference to be passed to ArticleData
        $this->addReference('image-test', $imageData);
        // Set les données à inscrire en BDD
        //Set the test data to persist in DB here
        $image2Data = new Image();
        $image2Data->setDescription("Another test picture for my fixture")
                ->setCaption("A worthless subtitle for the image")
                ->setSource($source);
        // Persiste les données
        // Persist the data
        $manager->persist($image2Data);
        $manager->flush();
        // Ajoute une réference pour être passé à ArticleData
        // Set a reference to be passed to ArticleData
        $this->addReference('image2-test', $image2Data);
        
    }
    
    public function getOrder() {
        // Définit l'ordre de chargements des fixtures, doit être fait en premier
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        // this one need to be loaded before ArticleData
        return 1;
    }
}
