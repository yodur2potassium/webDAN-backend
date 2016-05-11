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
use AppBundle\Entity\Video;

/**
 * Description of LoadVideoData
 *
 * @author xnef424
 */
class LoadVideoData extends AbstractFixture implements OrderedFixtureInterface  {

    public function load(ObjectManager $manager) {
        //Set the test data to persist in DB here
        $videoData = new Video();
        $videoData->setDescription("A wonderful video with nice people in it")
                ->setCaption("A subtitle describing whatever is in the video")
                ->setTranscription("Usualy this is a very long text transcribing the video")
                ->setSource("http://videos-dcom.laposte.fr/resource/groupe_national_perspec_20projets2020_vi/hd/sf_publication_channel/Widgets.mp4")
                ;
        $manager->persist($videoData);
        $manager->flush();
        // Persist the data
        $this->addReference('video-test', $videoData);
    }

    public function getOrder() {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        // this one need to be loaded before ArticleData
        return 2;
    }
}
