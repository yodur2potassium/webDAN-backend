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
                ->setSource("public\images\lglp_logo_1.jpg");

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
                ->setSource("public\images\index.jpg");
        // Persiste les données
        // Persist the data
        $manager->persist($image2Data);
        $manager->flush();
        // Ajoute une réference pour être passé à ArticleData
        // Set a reference to be passed to ArticleData
        $this->addReference('image2-test', $image2Data);

        $image3Data = new Image();
        $image3Data->setDescription("Chiffres 2014 du Groupe")
                ->setCaption("")
                ->setSource("public\images\lglp_chiffres-2014_1.jpg");
        // Persiste les données
        // Persist the data
        $manager->persist($image3Data);
        $manager->flush();
        // Ajoute une réference pour être passé à ArticleData
        // Set a reference to be passed to ArticleData
        $this->addReference('image3-test', $image3Data);

        $image4Data = new Image();
        $image4Data->setDescription("Chiffres 2014 du Groupe")
                ->setCaption("")
                ->setSource("public\images\lglp_chiffres-2014_2.jpg");
        // Persiste les données
        // Persist the data
        $manager->persist($image4Data);
        $manager->flush();
        // Ajoute une réference pour être passé à ArticleData
        // Set a reference to be passed to ArticleData
        $this->addReference('image4-test', $image4Data);

        $image5Data = new Image();
        $image5Data->setDescription("Chiffres 2014 du Groupe")
                ->setCaption("")
                ->setSource("public\images\lglp_chiffres-2014_3.jpg");
        // Persiste les données
        // Persist the data
        $manager->persist($image5Data);
        $manager->flush();
        // Ajoute une réference pour être passé à ArticleData
        // Set a reference to be passed to ArticleData
        $this->addReference('image5-test', $image5Data);

        $image6Data = new Image();
        $image6Data->setDescription("Chiffres 2014 du Groupe")
                ->setCaption("* Provision pour risque en lien avec l'enquête de l'Autorité de la Concurrence sur le marché du transport et de la messagerie en France.")
                ->setSource("public\images\lglp_chiffres-2014_4.jpg");
        // Persiste les données
        // Persist the data
        $manager->persist($image6Data);
        $manager->flush();
        // Ajoute une réference pour être passé à ArticleData
        // Set a reference to be passed to ArticleData
        $this->addReference('image6-test', $image6Data);

        $image7Data = new Image();
        $image7Data->setDescription("L'affiche du programme 20 projets pour 2020")
                ->setCaption("")
                ->setSource("public\images\groupe_20-projets-pour-2020_affiche.jpg");
        // Persiste les données
        // Persist the data
        $manager->persist($image7Data);
        $manager->flush();
        // Ajoute une réference pour être passé à ArticleData
        // Set a reference to be passed to ArticleData
        $this->addReference('image7-test', $image7Data);

        $image8Data = new Image();
        $image8Data->setDescription("Philippe Wahl lors de la présentation de")
                ->setCaption("Philippe Wahl lors de la présentation de La Poste 2020 : conquérir l'avenir")
                ->setSource("public\images\groupe_plan-strategique_philippe-wahl.jpg");
        // Persiste les données
        // Persist the data
        $manager->persist($image8Data);
        $manager->flush();
        // Ajoute une réference pour être passé à ArticleData
        // Set a reference to be passed to ArticleData
        $this->addReference('image8-test', $image8Data);

        $image9Data = new Image();
        $image9Data->setDescription("Les 3 groupes se sont réunis 3 fois")
                ->setCaption("Les groupes de citoyens se sont réunis 3 fois, pour être formés puis réfléchir et débattre
	               avec des représentants de la société civile")
                ->setSource("public\images\strategie_conferences-citoyennes_30112013.jpg");
        // Persiste les données
        // Persist the data
        $manager->persist($image9Data);
        $manager->flush();
        // Ajoute une réference pour être passé à ArticleData
        // Set a reference to be passed to ArticleData
        $this->addReference('image9-test', $image9Data);
    }

    public function getOrder() {
        // Définit l'ordre de chargements des fixtures, doit être fait en premier
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        // this one need to be loaded before ArticleData
        return 1;
    }
}
