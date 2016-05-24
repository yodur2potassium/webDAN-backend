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
use AppBundle\Entity\Documentation;

/**
 * Fixtures de données pour l'entité Documentation
 * Data fixtures for Documentation Entity
 * @author xnef424
 */
class LoadDocumentationData extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        // Set les données à inscrire en BDD
        // Set the test data to persist in DB here
        $docData = new Documentation();
        $docData->setLang("fr")
                ->setSource("http://dummy.net.address");
        // Persiste les données
        // Persist the data
        $manager->persist($docData);
        $manager->flush();
        // Crée une réference pour lier cette fixture avec une Erreur
        $this->addReference('doc-test', $docData);
        
        $docData2 = new Documentation();
        $docData2->setLang("fr")
                ->setSource("http://dummy2.net.address");
        
        $manager->persist($docData2);
        $manager->flush();
        
        $this->addReference('doc-test2', $docData2);
        
        $docData3 = new Documentation();
        $docData3->setLang("eng")
                ->setSource("http://dummy3.net.address");
        
        $manager->persist($docData3);
        $manager->flush();
        
        $this->addReference('doc-test3', $docData3);
    }

    public function getOrder() {
        // Ordre de chargement des fixtures, le plus bas, le plus tôt...
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        // this one need to be loaded after ImageData and VideoData
        return 4;
    }
}
