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
 * Fixtures de données pour l'entité Article
 * Data fixtures for Article Entity
 * @author xnef424
 */
class LoadArticleData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager) {
        $dummyContent = "<p>Lorem ipsum dolor sit amet, consectetur adipiscing <b>Lorem</b> elit. Integer nec <b>Lorem</b> odio. Praesent libero. Sed cursus ante dapibus diam. Sed <i>Lorem</i> nisi. <i>Lorem</i> Nulla quis <b>Praesent</b> sem at nibh elementum <b>Sed</b> imperdiet. Duis sagittis ipsum. <i>ante</i> Praesent mauris. Fusce <b>sem</b> nec tellus sed <i>Sed</i> augue semper <i>nisi.</i> porta. Mauris <i>Nulla</i> massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu <i>elementum</i> ad litora torquent per conubia nostra, <i>lacinia</i> per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. <b>Sed</b> Aenean quam. In scelerisque sem <b>lacinia</b> at dolor. Maecenas <i>sodales</i> mattis. <b>Aenean</b> Sed convallis tristique sem. Proin ut ligula vel nunc egestas <b>sem.</b> porttitor. Morbi lectus risus, iaculis <i>mattis.</i> vel, suscipit quis, luctus <i>scelerisque</i> non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus metus, ullamcorper vel, tincidunt <b>aliquet.</b> sed, euismod in, <b>aliquet.</b> nibh. Quisque volutpat condimentum velit. Class <b>sed,</b> aptent taciti sociosqu ad litora torquent <i>ipsum.</i> per <b>aptent</b> conubia nostra, per <b>sociosqu</b> inceptos himenaeos. Nam nec ante. Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis <b>non</b> turpis. Nulla facilisi. Ut fringilla. Suspendisse potenti. Nunc feugiat <b>ante</b> mi a tellus <b>fringilla.</b> consequat imperdiet. Vestibulum <b>potenti.</b> sapien. Proin quam. Etiam <b>consequat</b> ultrices. Suspendisse in justo eu <b>Vestibulum</b> magna luctus <i>imperdiet.</i> suscipit. Sed lectus. Integer euismod lacus luctus magna. Quisque cursus, metus vitae pharetra <b>suscipit.</b> auctor, sem massa mattis sem, at interdum magna augue eget diam. Vestibulum ante <b>auctor,</b> ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi <i>mattis</i> lacinia <i>eget</i> molestie dui. Praesent blandit dolor. Sed non quam. In vel mi sit amet augue congue elementum. Morbi in ipsum <i>dolor.</i> sit amet pede facilisis laoreet. Donec lacus <b>augue</b> nunc, viverra nec.</p>";
        $image = $this->getReference('image-test');
        $image2 = $this->getReference('image2-test');
        $image3 = $this->getReference('image3-test');
        $image4 = $this->getReference('image4-test');
        $image5 = $this->getReference('image5-test');
        $image6 = $this->getReference('image6-test');
        $image7 = $this->getReference('image7-test');
        $image8 = $this->getReference('image8-test');
        $image9 = $this->getReference('image9-test');
        $video = $this->getReference('video-test');
        // Set les données à inscrire en BDD
        // Set the test data to persist in DB here
        $articleData = new Article();
        $articleData->setTitle("<h3><strong>Les principaux résultats pour l'année 2014 et le 1<sup>er</sup> semestre 2015</strong></h3>")
                ->setSubtitle("<h5>&gt;Les chiffres du Groupe pour le 1<sup>er</sup> semestre</h5>")
                ->setContent("<p>Réuni le 30 juillet sous la présidence de Philippe Wahl, le conseil d'administration de La Poste a arrêté les comptes consolidés du Groupe La Poste pour le 1<sup>er</sup> semestre 2015.
                 Dans un contexte économique marqué par une légère reprise, les résultats semestriels du Groupe enregistrent une progression. Ils illustrent les premières réalisations de son plan stratégique La Poste 2020 : Conquérir l'avenir.</p>
                 <p>Cette évolution favorable est liée au dynamisme de l'ensemble des branches, plus particulièrement de GeoPost et de La Banque Postale, à la bonne maîtrise des charges et à la hausse des prix du courrier.</p>")
                ->setAuthor("Albert Nonyme")
                ->addImage($image)
                ->addImage($image2)
                ;
        // Persiste les données
        // Persist the data
        $manager->persist($articleData);
        $manager->flush();

        // Crée une réference pour lier cette fixture avec une Erreur
        $this->addReference('article-test', $articleData);

        $article2Data = new Article();
        $article2Data->setTitle("")
                ->setSubtitle("<h4><strong>&gt; Pour Le Groupe La Poste, les principaux résultats sont :</strong></h4>")
                ->setContent("<ul><li>un chiffre d'affaires semestriel de 11&nbsp;459&nbsp;millions d'euros, en progression de 4,5&nbsp;% par rapport au 1<sup>er</sup> semestre&nbsp;2014)</li>
                <li>un résultat d'exploitation de 616&nbsp;millions d'euros (+&nbsp;44,3&nbsp;%)</li>
                <li>un résultat net part du Groupe de 424&nbsp;millions d'euros (+&nbsp;31,7&nbsp;%)</li>
                <li>des capitaux propres part du Groupe de9 435 millions d'euros au 30&nbsp;juin&nbsp;2015, en progression de 322&nbsp;millions d'euros par rapport au 31&nbsp;décembre&nbsp;2014</li>
                <li>une dette nette du Groupe de 3&nbsp;713&nbsp;millions d'euros, en diminution de 292&nbsp;millions d'euros par rapport à la dette&nbsp;2014.</li></ul>")
                ->setAuthor("Albert Nonyme")
                ;
        // Persiste les données
        // Persist the data
        $manager->persist($article2Data);
        $manager->flush();

        // Crée une réference pour lier cette fixture avec une Erreur
        $this->addReference('article-test2', $article2Data);

        $article3Data = new Article();
        $article3Data->setTitle("")
                ->setSubtitle("<h4>&gt; Par branche, les principaux résultats sont :</h4>")
                ->setContent("<ul><li><strong>Services-Courrier-Colis</strong>&nbsp;:<br>
		              un chiffre d'affaires semestriel de 5&nbsp;757 millions d'euros (+&nbsp;0,6&nbsp;%)<br>
		              résultat d'exploitation de 508 millions d'euros (+ 65&nbsp;%)<br>Courrier : un chiffre d'affaires de 4&nbsp;732&nbsp;millions d'euros(+&nbsp;0,2&nbsp;%) avec une baisse des trafics de courrier adressé (-&nbsp;7&nbsp;%) compensée par l'augmentation tarifaire du 1<sup>er</sup>&nbsp;janvier&nbsp;2015 (+&nbsp;7&nbsp;% en moyenne)<br>
		              Colis : chiffre d'affaires de 770&nbsp;millions d'euros (+&nbsp;2,2&nbsp;%)</li><li><strong>GeoPost&nbsp;</strong>(colis rapide et express B&nbsp;to&nbsp;B et B&nbsp;to&nbsp;C en France et à l'international) :<br>
		              un chiffre d'affaires de 2&nbsp;693&nbsp;millions (+&nbsp;16,5&nbsp;%)<br>des volumes en croissance dans l'ensemble des implantations (+&nbsp;16&nbsp;%)<br>
		              résultat d'exploitation de 171 millions d'euros (+ 34,9&nbsp;%)</li><p></p><li><strong>La&nbsp;Banque Postale&nbsp;</strong>:<br>
		              un produit net bancaire de 2&nbsp;929&nbsp;millions d'euros (+ 2,9&nbsp;%)<br>contribution de la Banque au résultat d'exploitation du Groupe de 468&nbsp;millions d'euros sur le semestre (+&nbsp;6,8&nbsp;%)</li>
                  <p></p><li><strong>branche Numérique</strong>&nbsp;:<br>un chiffre d'affaires de 278&nbsp;millions d'euros (+&nbsp;4,9&nbsp;%)<br>
  		            résultat d'exploitation en amélioration (+&nbsp;29,7&nbsp;%) mais qui reste négatif (-&nbsp;9&nbsp;millions d'euros) compte tenu de différentes charges non récurrentes</li>
                  <li><strong>Réseau La Poste</strong>&nbsp;:<br>une activité bancaire en progression,<br>	un chiffre des ventes courrier-colis en légère croissance.</li></ul>")
                ->setAuthor("Albert Nonyme")
                ;
        // Persiste les données
        // Persist the data
        $manager->persist($article3Data);
        $manager->flush();

        // Crée une réference pour lier cette fixture avec une Erreur
        $this->addReference('article-test3', $article3Data);

        $article4Data = new Article();
        $article4Data->setTitle("")
                ->setSubtitle("<h4><strong>&gt;&nbsp;Pour le Groupe, les principaux chiffres sur l'année 2014 sont&nbsp;:</strong></h4>")
                ->setContent("<p>A l'occasion du conseil d'administration de La Poste du 25&nbsp;février 2015, qui a arrêté les comptes consolidés du Groupe pour l'année 2014, Philippe Wahl a salué les 1<sup>ers</sup>&nbsp;effets des actions mises en œuvre dans le cadre du plan stratégique La&nbsp;Poste 2020&nbsp;: Conquérir l'avenir.</p>
                <ul><li>    22 163<strong> </strong>millions d'euros de chiffre d'affaires (+ 2,1&nbsp;%)</li><li>    719&nbsp;millions d'euros de résultat d'exploitation (-&nbsp;7,6&nbsp;%)</li>
                <li>    513&nbsp;millions d'euros de résultat net (-&nbsp;17,7&nbsp;%)</li><li>		1&nbsp;052&nbsp;millions d'euros d'investissement (997 millions d'euros en 2013)</li>
                <li>		9,1&nbsp;milliards d'euros de capitaux propres consolidés</li><li>		4&nbsp;milliards d'euros de dette nette (+&nbsp;200&nbsp;millions d'euros par rapport à&nbsp;2013).<p></p>
                </li></ul><p>La croissance a été principalement portée par le succès de GeoPost et de ses solutions de livraison à valeur ajoutée et par le dynamisme commercial de La&nbsp;Banque Postale. Ils permettent de compenser les effets de la dématérialisation sur les autres branches du Groupe<em>.</em></p>")
                ->setAuthor("Albert Nonyme")
                ->addImage($image3)
                ->addImage($image4)
                ;
        // Persiste les données
        // Persist the data
        $manager->persist($article4Data);
        $manager->flush();

        // Crée une réference pour lier cette fixture avec une Erreur
        $this->addReference('article-test4', $article4Data);

        $article5Data = new Article();
        $article5Data->setTitle("")
                ->setSubtitle("<h4><strong>&gt; Par zone géographique et par branche, les principaux résultats pour l'année 2014 sont :</strong></h4>")
                ->setContent("<ul><li><strong>Services-Courrier-Colis</strong> :<br>		11,4&nbsp;milliards d'euros de chiffre d'affaires (-&nbsp;1,8&nbsp;% par rapport à 2013)<br>
		              419&nbsp;millions d'euros de résultat d'exploitation (-&nbsp;23,2&nbsp;%)<br>		5,8&nbsp;% de baisse des volumes du courrier, baisse partiellement compensée par l'augmentation tarifaire du 1<sup>er</sup>&nbsp;janvier&nbsp;2014 (+&nbsp;3&nbsp;% en moyenne) et le déploiement de services innovants comme l'offre de recyclage Recy'go</li>
                  <li><strong>GeoPost </strong>:<br>		4,9 milliards d'euros de chiffre d'affaires &nbsp;(+&nbsp;13,3&nbsp;%)<br>
		                284&nbsp;millions d'euros de résultat d'exploitation (-&nbsp;10&nbsp;%). Hors provision exceptionnelle*, il est de 329&nbsp;millions d'euros, en croissance de 4,2&nbsp;%</li>
                    <li><strong>La Banque Postale</strong> :<br>		5,7&nbsp;milliards d'euros de produit net bancaire (+ 1,8&nbsp;%)<br>
		                  contribution des activités bancaires au résultat d'exploitation du Groupe de 842&nbsp;millions d'euros (+&nbsp;16&nbsp;%)</li>
                      <li><strong>Réseau La Poste</strong> :<br>		2,3&nbsp;milliards d'euros de ventes (courrier, colis postaux et express) (-&nbsp;2,5&nbsp;%)<br>
		                    Il a réalisé 100&nbsp;% des encours de collecte des ménages, 82,4&nbsp;% des crédits immobiliers et 68&nbsp;% des crédits à la consommation</li>
                        <li><strong>branche Numérique </strong><br>		539 millions d'euros de chiffre d'affaires (-&nbsp;1,7&nbsp;%).</li>")
                ->setAuthor("Albert Nonyme")
                ->addImage($image5)
                ->addImage($image6)
                ;
        // Persiste les données
        // Persist the data
        $manager->persist($article5Data);
        $manager->flush();

        // Crée une réference pour lier cette fixture avec une Erreur
        $this->addReference('article-test5', $article5Data);
        $article6Data = new Article();
        $article6Data->setTitle("<h4><strong>Les dates-clés depuis l'été 2013</strong></h4>")
                ->setSubtitle("<strong>En 2015 :</strong>")
                ->setContent("<ul><li>		<strong>le 21 décembre, </strong>le conseil d’administration de La Poste a accueilli les 7 nouveaux représentants du personnel élus par les postiers en novembre ainsi qu'une nouvelle représentante de l'Etat et une nouvelle représentante des usagers.<br><strong>le 8 décembre </strong>s'est achevée la 2<sup>e</sup> édition du concours d'intrapreneuriat 20 projets pour 2020, qui a débuté en mai 2015. Le&nbsp; jury a particulièrement été convaincu par 4 équipes, dont l'une est internationale. Les projets lauréats 2015 sont Bird our Parcels, Easy Shopping, Logistic'Up et La Box Temporis<p></p></li>
                <li>		<strong>du 30 novembre au 11 décembre, </strong>Le Groupe La Poste, partenaire de référence de la conférence sur le climat organisée par les Nations Unies à Paris, était présent sur le site officiel des négociations, au Bourget (Seine-Saint-Denis). La COP 21 a aussi été l'occasion, pour le Groupe ,de présenter ses 5 engagements pour lutter contre le changement climatique. Il a notamment choisi la baisse des émissions de gaz à effet de serre, l'électricité 100 % renouvelable, la compensation carbone, la 1<sup>ère </sup>flotte mondiale de véhicules électriques…</li>
                <li>		<strong>le 20 novembre, </strong>les résultats de l'élection au conseil d'administration de La Poste ont été annoncés. Les postiers (maison mère et filiales françaises) ont voté du 16 au 20 novembre par voie électronique pour élire leurs 7 représentants au conseil d’administration de La&nbsp;Poste. La participation globale était de 62,11&nbsp;%. La CGT&nbsp;FAPT a obtenu&nbsp;26,47&nbsp;% des voix, la CFDT&nbsp;22,56&nbsp;%, SUD&nbsp;PTT&nbsp;20,11&nbsp;%, FO-COM 19,46 %, la CGC 6,46 % et la CFTC : 4,95 %</li>
                <li>		<strong>le 25 octobre</strong>, Le Groupe La Poste a lancé sa nouvelle campagne publicitaire. Avec pour signature  \"Plus proche, plus connectée. Une nouvelle idée de La Poste\", elle s’est inscrite pleinement dans la continuité de celle lancée en 2014. La campagne a été une déclinée à la télévision, dans la presse, en affichage, sur le Web et les réseaux sociaux. L'expédition et le retour de colis en boite aux lettres, un service innovant et connecté, est au cœur de la campagne<p></p></li>
                <li>		<strong>le 30 juillet,</strong> le conseil d'administration de La Poste a arrêté le 30 juillet les comptes du Groupe au 30&nbsp;juin. Les comptes font apparaître un rebond des résultats etillustrent les premières réalisations de son plan stratégique La&nbsp;Poste&nbsp;2020&nbsp;: Conquérir l'avenir. Cette évolution favorable est liée au dynamisme de l'ensemble des branches, plus particulièrement de GeoPost et de La&nbsp;Banque Postale, à la bonne maîtrise des charges et à la hausse des prix du courrier</li>
                <li>		<strong>le 8 juin, </strong>La&nbsp;Poste a présenté le projet de regroupement des sièges du Groupe et des branches annoncé en février&nbsp;2015 pour renforcer la coopération et développer les synergies entre les différentes entités. Chacun des 3&nbsp;sites composant le nouveau siège sera multi-branches et aura une vocation&nbsp;spécifique</li>
                <li>		<strong>le 11 mai,</strong> c'est avec le slogan \"Entreprenez au sein du Groupe\" que&nbsp; les postiers ont été conviés à participer à l'édition&nbsp;2015 du concours d'intrapreneurait 20&nbsp;projets pour 2020 lancé en 2014 dans le cadre du plan stratégique</li>
                <li>		<strong>le 24 février, </strong>La Poste a dévoilé ses résultats 2014 : ils sont en baisse limitée grâce aux 1<sup>ers</sup> effets des actions initiées dans le cadre de son plan stratégique. Son chiffre d'affaires a progressé de 2,1&nbsp;%, mais son résultat d'exploitation baisse de 7,6&nbsp;% et son résultat net de 17,7&nbsp;%</li>
                <li>		<strong>le 5 février, </strong>La Poste et les organisations syndicales ont signé 3&nbsp;accords majoritaires pour faire des postiers les acteurs et les bénéficiaires de la transformation de l'entreprise</li>
                <li>		<strong>le 20 janvier, </strong>Philippe Wahl a annoncé les noms des 3 lauréats du concours d'innovation 20&nbsp;projets pour&nbsp;2020. Les projets Post'lib, Kiss&nbsp;Keys et Animaléo ont été sélectionnés et une nouvelle étape débute pour les postiers qui les ont présentés : la mise en œuvre et la commercialisation de leur projet.</li>
                </ul>")
                ->setAuthor("Albert Nonyme")
                ->addVideo($video)
                ;
        // Persiste les données
        // Persist the data
        $manager->persist($article6Data);
        $manager->flush();

        // Crée une réference pour lier cette fixture avec une Erreur
        $this->addReference('article-test6', $article6Data);

        $article7Data = new Article();
        $article7Data->setTitle("")
                ->setSubtitle("<strong>En 2014 :</strong>")
                ->setContent("<ul><li>		<strong>le 1<sup>er</sup> septembre</strong>, la 1<sup>ère</sup> édition du programme 20&nbsp;projets pour&nbsp;2020 est lancée pour que les postiers puissent participer au développement du Groupe. Ils ont alors jusqu'au 31&nbsp;octobre pour proposer de nouvelles activités ou des améliorations de l'expérience client. Le but du concours d'innovation : retenir 3&nbsp;à 5&nbsp;projets par an jusqu'en&nbsp;2020&nbsp;</li>
                <li>		<strong>le 31 juillet</strong>, dans les comptes semestriels, le chiffre d'affaires s'établit à 10&nbsp;973&nbsp;millions d'euros, en légère progression (+&nbsp;1,&nbsp;6&nbsp;%), le&nbsp; résultat d'exploitation du Groupe atteint 485&nbsp;millions d'euros (-&nbsp;2,6&nbsp;%) et le résultat net à 355&nbsp;millions (-&nbsp;10,4&nbsp;%). Des résultats en recul limité grâce aux 1<sup>ers</sup>&nbsp;effets des actions du plan stratégique La&nbsp;Poste&nbsp;2020&nbsp;: Conquérir l'avenir</li>
                <li>		<strong>le 26 juin</strong>, Philippe Wahl a présenté un volet important du plan stratégique La Poste 2020&nbsp;: Conquérir l'avenir devant le conseil d'administration. Le président a en particulier détaillé la trajectoire financière du Groupe et le plan d'actions des branches à l'horizon 2020</li>
                <li>		<strong>le 7 avril</strong>, Philippe Wahl a annoncé les principes de la nouvelle gouvernance organisée autour d'un Groupe fort et de 5&nbsp;branches. Il a également dévoilé son projet de développement pour le Groupe&nbsp;: chaque branche est responsable des priorités du plan stratégique tandis que des grands projets prioritaires communs, des projets stratégiques et un concours d'innovation pour les postiers sont lancés</li>
                <li>		<strong>le 20 février</strong>, Le Groupe La&nbsp;Poste a présenté des résultats&nbsp;2013 en inflexion avec un chiffre d'affaires de 22&nbsp;084&nbsp;millions d'euros (+&nbsp;2&nbsp;%) et un résultat d'exploitation de 770&nbsp;millions d'euros (-&nbsp;5,6&nbsp;%). La baisse des volumes du courrier et la baisse de la fréquentation des bureaux de poste ont continué. Elles n'ont pu être totalement compensées par la croissance de La&nbsp;Banque Postale et&nbsp; du Colis-Express ainsi que par le déploiement des nouvelles activités</li>
                <li>		<strong>le 28 janvier</strong>, Philippe Wahl a présenté au conseil d'administration de La&nbsp;Poste les orientations du plan stratégique du Groupe&nbsp;: La&nbsp;Poste&nbsp;2020&nbsp;: conquérir l'avenir. Une nouvelle vision pour le Groupe en adéquation avec ses valeurs, ses missions fondamentales et ses savoir-faire</li>
                <li>		<strong>le 9 janvier</strong>, Arnaud Montebourg, ministre du Redressement productif, et Philippe Wahl, PDG du Groupe, se sont vu remettre les avis des 3&nbsp;groupes de citoyens ruraux, urbains et d'entrepreneurs (TPE) sur l'avenir de La&nbsp;Poste, avec des propositions d'évolution et leurs attentes concrètes vis-à-vis de l'entreprise.</li>")
                ->setAuthor("Albert Nonyme")
                ->addImage($image7)
                ->addImage($image8)
                ;
        // Persiste les données
        // Persist the data
        $manager->persist($article7Data);
        $manager->flush();

        // Crée une réference pour lier cette fixture avec une Erreur
        $this->addReference('article-test7', $article7Data);

        $article8Data = new Article();
        $article8Data->setTitle("")
                ->setSubtitle("<strong>En 2013 :</strong>")
                ->setContent("<ul><strong><strong>le 30 novembre</strong>, </strong>le Groupe a lancé des conférences citoyennes : 3&nbsp;groupes de citoyens ruraux, urbains et des TPE ont été invités à réfléchir pour définir de nouveaux services utiles aux clients, aux territoires et à la collectivité</li>
                <li>		<strong>le 28&nbsp;novembre</strong>, dans le cadre du cycle de consultations ouvert par Philippe Wahl afin de partager la manière dont le Groupe souhaite bâtir son avenir et celui des postiers, le conseil d'administration de La Poste s'est réuni en séminaire stratégique. Le but&nbsp;: travailler sur plusieurs axes du futur plan stratégique, en particulier la transformation numérique du Groupe, les nouveaux services rendus par le facteur au domicile, le développement du Colis-Express à l'international, le développement des missions de service public et le modèle de la Banque de détail</li>
                <li>		<strong>le 21 novembre</strong> , soit un an après la fin des travaux de la commission du grand dialogue, Jean Kaspar a présenté un bilan de la mise en œuvre du rapport qu'il avait remis au président en septembre&nbsp;2012. Ce document permet \"d\'apprécier les progrès effectués, les difficultés rencontrées et fait part de recommandations pour conforter les avancées et faire en sorte que la priorité donnée par La&nbsp;Poste à la qualité de vie au travail se traduise partout dans les faits\"</li>
                <li>		<strong>le 25 septembre</strong>, Philippe Wahl est nommé président du conseil d\'administration de La&nbsp;Poste en conseil des ministres</li>
                <li>		<strong>les 17 et 18 septembre</strong>,<strong> </strong>les commissions des affaires économiques de l\'Assemblée nationale et du Sénat auditionnent Philippe Wahl et approuvent sa nomination en qualité de président du conseil d\'administration de La&nbsp;Poste</li>
                <li>		<strong>le 1<sup>er</sup> août</strong>, le conseil d\'administration de La Poste nomme Philippe Wahl administrateur et le propose pour le poste de président du conseil d\'administration.</li>
                </ul>")
                ->setAuthor("Albert Nonyme")
                ->addImage($image9)
                ;
        // Persiste les données
        // Persist the data
        $manager->persist($article8Data);
        $manager->flush();

        // Crée une réference pour lier cette fixture avec une Erreur
        $this->addReference('article-test8', $article8Data);
        $article9Data = new Article();
        $article9Data->setTitle("<h4>La gouvernance du Groupe La Poste : le Comex</h4>")
                ->setSubtitle("")
                ->setContent("<p><strong>Les instances de direction</strong> du Groupe La Poste se composent du comité exécutif ainsi que des comités de direction, de groupe et du management.</p>
                <p><strong>&gt; Le comité exécutif (Comex) </strong>est l'organe de direction opérationnel du Groupe : il met en œuvre la stratégie définie par le conseil d'administration de La Poste. Il réunit une fois par semaine les dirigeants des activités et des directions centrales autour du président et du délégué général du Groupe. Suite au diagnostic effectué par la commission du grand dialogue et pour renforcer la gouvernance, il est passé de 10 à 12 membres en septembre 2012.</p>
                <p> </p><p> </p><table border=\"1\" cellpadding=\"0\" cellspacing=\"0\"><tbody><tr><td colspan=\"2\" width=\"607\"><p align=\"center\"><strong>La composition du comité exécutif du Groupe La Poste</strong><br/></p></td></tr>
                <tr><td valign=\"top\" width=\"294\"><p><img alt=\"Philippe Wahl\" src=\"public/images/lglp_pwahl022016.jpg\" style=\"width: 140px; height: 210px; margin: 6px; float: right;\" /></p></td>
                <td valign=\"top\" width=\"313\"><p> </p><p> </p><p><strong>Philippe Wahl</strong><br />					Président-directeur général</p></td></tr>
                <tr><td valign=\"top\" width=\"294\"><p> </p><p> </p><p><strong>Philippe Bajou</strong><br />					Directeur général adjoint,<br />			en charge de la transformation,<br />					secrétaire général<br />					 </p></td>
                <td valign=\"top\" width=\"313\"><p><img alt=\"Philippe Bajou\" src=\"public/images/lglp_phbajou_022016.jpg\" style=\"width: 140px; height: 210px; margin: 6px; float: left;\" /></p></td></tr>
                <tr><td valign=\"top\" width=\"294\"><p><img alt=\"\" src=\"public/images/lglp-akbourn-022016.jpg\" style=\"width: 140px; height: 210px; margin: 6px; float: left;\" /></p></td>
                <td valign=\"top\" width=\"313\"><p> </p><p> </p><p>				<strong><strong>Anne-Laure Bourn</strong></strong><br />				Directrice générale adjointe,<br />				en charge du Réseau La Poste</p>                <p> </p><p> </p></td></tr>
                <tr><td valign=\"top\" width=\"294\"><p> </p><p> </p><p>				<strong>Yves Brassart</strong><br />				Directeur général adjoint,<br />				en charge des finances et du développement.</p>
                <p> </p><p class=\"rteright\"> </p><p class=\"rteright\"> </p></td><td valign=\"top\" width=\"313\">
                <p><img alt=\"\" src=\"public/images/lglp-ybrassart022016.jpg\" style=\"width: 140px; height: 210px; margin: 6px; float: left;\" /></p></td></tr>
                <tr><td width=\"294\"><p><img alt=\"Paul-Marie Chavanne\" src=\"public/images/lglp_pmchavanne022016.jpg\" style=\"width: 140px; height: 210px; margin-top: 6px; margin-bottom: 6px; float: right;\" /></p></td>
                <td width=\"313\"><p> </p><p> </p><p class=\"rteright\"><p><strong>Paul-Marie Chavanne</strong><br />					Directeur général adjoint,<br />					président de GeoPost</p><p>					 </p></td></tr>
                <tr><td valign=\"top\" width=\"294\"><p> </p><p> </p><p><p class=\"rteright\"><strong>Nathalie Collin</strong><br />					Directrice générale adjointe,<br />					en charge de la branche numérique<br />					et de la communication</p></td>
                <td valign=\"top\" width=\"313\"><p><img alt=\"Nathalie Collin\" src=\"public/images/lglp_ncollin022016.jpg\" style=\"width: 140px; height: 210px; margin: 6px; float: right;\" /></p><p>					 </p></td></tr>
                <tr><td style=\"text-align: right\"><p><img alt=\"Philippe Dorge\" src=\"public/images/lglp-phdorge022016.jpg\" style=\"width: 140px; height: 210px; margin: 6px; float: left;\" /></p>
                <p> </p><p> </p><p> </p></td><td><p> </p><p> </p><p>				<strong>Philippe Dorge</strong><br />				Directeur général adjoint,<br />				en charge de la branche<br />				Services-Courrier-Colis</p><p> </p></td></tr>
                <tr><td style=\"text-align: right\">				<br /><p class=\"rteleft\"><strong>Sylvie François</strong><br />					Directrice générale adjointe,<br />					en charge des ressources humaines et des relations sociales<br />					 </p></td>
                <td>				<img alt=\"Sylvie François\" src=\"public/images/lglp_sfrancois022016.jpg\" style=\"width: 140px; height: 210px; margin: 6px; float: left;\" /></td></tr>
                <tr><td style=\"text-align: right\">				<img alt=\"Nicolas Routier\" src=\"public/images/lglp_nroutier022016.jpg\" style=\"width: 140px; height: 210px; margin: 6px; float: right;\" /></td><td class=\"rteright\">
                <p> </p><p> </p><p>				<strong>Nicolas Routier</strong><br />				Directeur général adjoint,<br />				en charge de la stratégie institutionnelle<br />				et de la régulation</p><p>				 </td></tr>
                <tr><td><p><strong> </strong></p><p><strong> </strong></p><p>				<strong>Rémi Weber</strong><br />				Directeur général adjoint,<br />				président du directoire de La Banque Postale</td>
                <td>				<img alt=\"Rémi Weber\" src=\"public/images/lglp_rweber_022016.jpg\" style=\"width: 140px; height: 210px; margin: 6px; float: right;\" /></p><p>				 </td></tr></tbody></table>
                <p> </p><p><strong>&gt; </strong> <strong>Le comité de direction</strong> est une instance de reporting qui comprend 36 membres. Il se réunit pour examiner les résultats, l'activité des entités opérationnelles et l'avancement des projets.</p>
                <p><strong>&gt; </strong> <strong>Le comité de groupe</strong> est une instance de réflexion et d'échanges. Il comprend 89 membres et examine les thèmes liés à l'orientation stratégique du Groupe.</p>
                <p><strong>&gt;</strong>  <strong>Le comité de management</strong> est une instance d'information. Il comprend 400 membres.</p>
                <p><strong>L'ensemble des filiales de 1<sup>er</sup> niveau, GeoPost, Poste Immo, Sofipost et La Banque Postale</strong>, ont désormais repris les principes de gouvernance du Groupe. Leurs instances de gouvernance comprennent des administrateurs indépendants, qui président les comités d'audit et stratégique. Ces évolutions s'inspirent des meilleures pratiques de gouvernance promues par l'Agence des participations de l'Etat (APE).</p>
                <p> </p></p>")
                ->setAuthor("Albert Nonyme")
                ;
        // Persiste les données
        // Persist the data
        $manager->persist($article9Data);
        $manager->flush();

        // Crée une réference pour lier cette fixture avec une Erreur
        $this->addReference('article-test9', $article9Data);
    }

    public function getOrder() {
        // Ordre de chargement des fixtures, le plus bas, le plus tôt...
        // Celle ci doit être chargée après ImageData et VidéoData
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        // this one need to be loaded after ImageData and VideoData
        return 3;
    }
}
