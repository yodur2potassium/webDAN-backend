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
 * Fixtures de données pour l'entité Error
 * Data fixtures for Error Entity
 * @author xnef424
 */
class LoadErrorData extends AbstractFixture implements OrderedFixtureInterface{



    public function load(ObjectManager $manager) {
        // Set les données à inscrire en BDD
        // Set the test data to persist in DB here
        $errorImageData = new Error();
        // Ajoute une erreur a l'image
        $errorImageData->setImage($this->getReference('image-test'))
                ->setTitle("Certaines images informatives n’ont pas d’alternatives textuelles renseignées avec l’information véhiculée par l’image")
                ->setDescription("Lorsqu’une balise <img /> ou <input type=\"image\" /> informative est intégrée dans le code HTML, renseigner son attribut alt avec une information égale ou équivalente à celle véhiculée par l’image.")
                ->setAccedeCode(1)
                ->setInternCode(1)
                ->addDocumentation($this->getReference('doc-test'))
                ->setTarget('description')
                ->setCorrection("Texte décrivant l'image");
        // Persiste les données
        // Persist the data
        $manager->persist($errorImageData);
        $manager->flush();

        // Set les données à inscrire en BDD
        // Set the test data to persist in DB here
        $errorArticleData = new Error();
        // Ajoute une erreur à l'article
        $errorArticleData->setArticle($this->getReference('article-test'))
                ->setTitle("Les balises de titres allant de <h1> jusqu’à <h6> ne sont pas utilisées pour baliser les titres dans certaines pages")
                ->setDescription("Sur chaque page, utiliser les balises de titres allant de <h1> jusqu’à <h6>. La structure des titres doit être à la fois logique et exhaustive, tous les éléments ayant valeur de titres doivent être balisés comme tels et il ne doit pas y avoir de « sauts » ni d’incohérences dans la structure de ceux-ci.")
                ->setAccedeCode(2)
                ->setInternCode(2)
                ->addDocumentation($this->getReference('doc-test2'))
                ->addDocumentation($this->getReference('doc-test3'))
                ->setTarget('subtitle')
                ->setCorrection("<h4>&gt;Les chiffres du Groupe pour le 1<sup>er</sup> semestre</h4>");
        // Persiste les données
        // Persist the data
        $manager->persist($errorArticleData);
        $manager->flush();
    }

    public function getOrder() {
        // Ordre de chargement des fixtures, le plus bas, le plus tôt...
        // Celle ci doit être chargée en dernier
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        // this one need to be loaded after ImageData and VideoData
        return 6;
    }
}
