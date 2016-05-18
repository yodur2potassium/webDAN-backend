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
 * Description of LoadDocumentationData
 *
 * @author xnef424
 */
class LoadDocumentationData extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $docData = new Documentation();
        $docData->setLang("fr")
                ->setSource("http://dummy.net.address");
        
        $manager->persist($docData);
        $manager->flush();
        
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
        return 4;
    }
}
