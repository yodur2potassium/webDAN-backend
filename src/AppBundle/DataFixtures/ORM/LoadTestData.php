<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\DataFixtures;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Test;


/**
 * Description of LoadTestData
 *
 * @author xnef424
 */
class LoadTestData implements FixtureInterface{

    public function load(ObjectManager $manager) {
        $testData = new Test();
        $testData->setContent("Plop!");
        
        $manager->persist($testData);
        $manager->flush();
        
        $testData2 = new Test();
        $testData2->setContent("Plop, plop!");
        
        $manager->persist($testData2);
        $manager->flush();
    }
}
