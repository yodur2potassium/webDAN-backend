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
use AppBundle\Entity\Article;

/**
 * Data fixtures for Article Entity
 *
 * @author xnef424
 */
class LoadArticleData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager) {

        //Set the test data to persist in DB here
        $image = $this->getReference('image-test');
        $image2 = $this->getReference('image2-test');
        $articleData = new Article();
        $articleData->setTitle1("Main Title")
                ->setTitle2("Subtitle")
                ->setContent("<p>Lorem ipsum dolor sit amet, consectetur adipiscing <b>Lorem</b> elit. Integer nec <b>Lorem</b> odio. Praesent libero. Sed cursus ante dapibus diam. Sed <i>Lorem</i> nisi. <i>Lorem</i> Nulla quis <b>Praesent</b> sem at nibh elementum <b>Sed</b> imperdiet. Duis sagittis ipsum. <i>ante</i> Praesent mauris. Fusce <b>sem</b> nec tellus sed <i>Sed</i> augue semper <i>nisi.</i> porta. Mauris <i>Nulla</i> massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu <i>elementum</i> ad litora torquent per conubia nostra, <i>lacinia</i> per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. <b>Sed</b> Aenean quam. In scelerisque sem <b>lacinia</b> at dolor. Maecenas <i>sodales</i> mattis. <b>Aenean</b> Sed convallis tristique sem. Proin ut ligula vel nunc egestas <b>sem.</b> porttitor. Morbi lectus risus, iaculis <i>mattis.</i> vel, suscipit quis, luctus <i>scelerisque</i> non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus metus, ullamcorper vel, tincidunt <b>aliquet.</b> sed, euismod in, <b>aliquet.</b> nibh. Quisque volutpat condimentum velit. Class <b>sed,</b> aptent taciti sociosqu ad litora torquent <i>ipsum.</i> per <b>aptent</b> conubia nostra, per <b>sociosqu</b> inceptos himenaeos. Nam nec ante. Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis <b>non</b> turpis. Nulla facilisi. Ut fringilla. Suspendisse potenti. Nunc feugiat <b>ante</b> mi a tellus <b>fringilla.</b> consequat imperdiet. Vestibulum <b>potenti.</b> sapien. Proin quam. Etiam <b>consequat</b> ultrices. Suspendisse in justo eu <b>Vestibulum</b> magna luctus <i>imperdiet.</i> suscipit. Sed lectus. Integer euismod lacus luctus magna. Quisque cursus, metus vitae pharetra <b>suscipit.</b> auctor, sem massa mattis sem, at interdum magna augue eget diam. Vestibulum ante <b>auctor,</b> ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi <i>mattis</i> lacinia <i>eget</i> molestie dui. Praesent blandit dolor. Sed non quam. In vel mi sit amet augue congue elementum. Morbi in ipsum <i>dolor.</i> sit amet pede facilisis laoreet. Donec lacus <b>augue</b> nunc, viverra nec.</p>")
                ->setAuthor("Albert Nonyme")
                ->addImage($image)
                ->addImage($image2);
        // Persist the data
        $manager->persist($articleData);
        $manager->flush();
    }
    
    public function getOrder() {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        // this one need to be loaded after ImageData and VideoData
        return 3;
    }
}
