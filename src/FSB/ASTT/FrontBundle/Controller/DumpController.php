<?php

namespace FSB\ASTT\FrontBundle\Controller;

use FSB\ASTT\FrontBundle\Controller\FrontController;
use FSB\ASTT\CoreBundle\Entity\Article;
use FSB\ASTT\CoreBundle\Entity\Event;
use FSB\ASTT\CoreBundle\Entity\Interview;
use FSB\ASTT\CoreBundle\Entity\Link;
use FSB\ASTT\CoreBundle\Entity\Message;
use FSB\ASTT\CoreBundle\Entity\News;
use FSB\ASTT\CoreBundle\Entity\Partner;
use FSB\ASTT\CoreBundle\Entity\Player;
use FSB\ASTT\CoreBundle\Entity\Result;
use FSB\ASTT\CoreBundle\Entity\Summary;
use FSB\ASTT\CoreBundle\Entity\Team;

// SELECT * FROM `news` WHERE `id` IN (2,4,29,33,11,17,16,39,51,53,65,70,71,85,60,74,79)

class DumpController extends FrontController {

    public function indexAction($table) {
        /**
        * Export to PHP Array plugin for PHPMyAdmin
        * @version 0.2b
        */

        //
        // Database `astt`
        //

        // `astt`.`Actualites`
        $Actualites = array(
        array('id' => '1','nom' => 'Mot du président','texte' => 'Bienvenue sur notre nouveau site.

        La reconstruction totalement révisée est due à Florent SCHILDKNECHT.

        C\'est au  cours de son temps libre qu\'il a entrepris avec passion et détermination ce travail très conséquent.

        Avec les membres du Comité Directeur je lui adresse un grand merci.

        C\'est avec plaisir que j\'invite tous les visiteurs de ce nouveau site à consulter toutes les pages pour qu\'ils y trouvent facilement les informations sportives et autres renseignements à travers les liens des organismes départementaux, régionaux et nationaux.
        Le projet ambitieux du club qui consiste à intégrer un ou deux jeunes dans chaque équipe sera poursuivi. Il a montré toute son efficacité au cours de la saison  dernière.

        Merci donc aux éducateurs, entraineurs et les nombreux relanceurs qui contribuent largement à la progression de tous les jeunes du Club grâce à leur assiduité et leur motivation.

        De cette formation technique naitra à n\'en pas douter, la génération des joueurs qui seront les nouveaux acteurs des équipes phares d\'Amiens Sport T.T.

        J\'en profite pour souhaiter à toutes les équipes une bonne saison sportive 2011/2012.

        Bien sportivement et amicalement.    
        Dany Bourré.','lieu' => 'Amiens','date' => '1314828000','miseenpage' => '0','screen' => 'dany_bourre.jpg','joueur_du_we' => '0','debut_publication' => '1314828000','fin_publication' => '1323471600'),
        array('id' => '2','nom' => 'Lucas Dubois','texte' => 'Lucas Dubois (16 – 1643 pts) bat Florent Cahagne (n°692 – 2151 pts) le samedi 24 septembre en N3 Messieurs contre Villers-Bretonneux PPC 1.','lieu' => 'Amiens','date' => '1316815200','miseenpage' => '0','screen' => 'lucas_dubois.jpg','joueur_du_we' => '1','debut_publication' => '1316815200','fin_publication' => '1317420000'),
        array('id' => '3','nom' => '1er tour du championnat départemental poussins-benjamins','texte' => '2 équipes de l’ASTT sont engagées dans le championnat départemental poussins-benjamins.

        Pour la 1ère journée de ce championnat disputé le samedi 1er octobre, l’équipe 1 était composée de Eline et Elvire Vanier.
        L’équipe 2 était composée de Pauline Steelandt, Clémence Steelandt et Gustav Defosse.
        L’équipe 1 s’impose 5 à 0 face à Caix-Rosières 1 et contre Moreuil PPC 1.
        L’équipe 2 remporte également ses deux rencontres, 5 à 0 contre Moreuil PPC 3 et 3 à 2 face à Moreuil PPC 2.
        La seconde journée de ce championnat est programmée le samedi 17 décembre.','lieu' => 'Amiens','date' => '1317441600','miseenpage' => '0','screen' => 'criterium_poussins_benjamins.png','joueur_du_we' => '0','debut_publication' => '1317441600','fin_publication' => '1318219200'),
        array('id' => '4','nom' => 'Antoine Huon','texte' => 'Antoine Huon (12 – 1225 pts) bat Tony Dubeaux (15 – 1571 pts) le samedi 8 octobre en R1 Messieurs contre Villers Saint-Paul.','lieu' => 'Villers Saint-Paul','date' => '1318046400','miseenpage' => '0','screen' => 'Antoine_Huon.jpg','joueur_du_we' => '1','debut_publication' => '1318046400','fin_publication' => '1318651200'),
        array('id' => '5','nom' => 'Résultats du 1er tour du Critérium Fédéral','texte' => '63 joueurs de l’Amiens STT ont participé les 15 et 16 octobre au 1er tour du critérium fédéral.

        En N1 moins de 11 ans, Julien Martin finit 5e, Louis Chaerle et Tristan Hersent 9e, Léo Hersent ne sort pas des poules.
        En N1 moins de 12 ans, Louis Chaerle, Léo Hersent et Tristan Hersent terminent 33e, Andréï Deguingand et Julien Martin 17e.
        En N1 moins de 13 ans, Louis Chaerle et Andréï Deguingand terminent 2e de poule. Ils sont éliminés au tour suivant et finissent 33e.
        En N1 moins de 14 ans, Louis Chaerle termine 33e et Andréï Deguingand 65e.
        En N1 moins de 16 ans, Raphaël Chatelain termine 9e.
        En N1 moins de 18 ans, Raphaël Chatelain termine 1er de poule puis est éliminé. Il finit 33e.
        En N1 moins de 21 ans, Raphaël Chatelain termine 65e.
        En N1 Elite, Raphaël Chatelain termine 4e de poule (défaites contres les n°116, n°321 et n°543). Malin Plotuna termine 2e de poule (victoires contre les n°739 et n°867 et défaite contre le n°224). Il prend finalement la 17e place.

        En N2 benjamines, Elvire Vanier, Marine Huon et Eline Vanier terminent 3e, 6e et 9e.
        En N2 minimes filles, Léa Huré termine 4e.
        En N2 cadettes, Julia Flahaut termine 2e.
        En N2 cadets, Lucas Dubois finit 2e, Loïc Lefevre 4e, Antoine Huon 10e et Léo Bodinel 16e.
        En N2 juniors filles, Charline Grugeon finit 8e et Caroline Petitprez 9e.
        En N2 seniors messieurs, Yohan Lecomte termine 22e.

        En R1 benjamines, Clémence Steelandt finit 3e et Pauline Steelandt prend la 8e place.
        En R1 minimes filles, Sophie Tran termine 7e.
        En R1 minimes garçons, Paul Vandewoestyne termine 4e et Enguerrand Wallon, 13e.
        En R1 cadettes, Valentine Huré prend la 10e place.
        En R1 cadets, Floris Chartier termine 5e, Richard Tran 12e et Joffrey Hauw 13e.
        En R1 juniors garçons, Benoît Vaquier finit 4e et Cyril De Catheu 13e.
        En R1 seniors messieurs, Vincent Rasselet termine 4e, Alexandre Haigneré 5e, Bruno Marysse 17e et Bertrand Bathelot 22e.

        En D1 benjamins, Thomas Legris et Gustav Defosse terminent 1er et 2e. Ymad Hamdad est 12e et Keziah Desjonqueres 13e.
        En D1 minimes garçons, Paul Boinet termine 1er, Christophe De Catheu et Pierre-Philippe Nadau 5e, Benjamin Wilhem 10e.
        En D1 cadets, Ala-Edinne Chahir et Victor Hénao terminent 1er et 2e.
        En D1 juniors garçons, Louis Vandewoestyne termine 1er, Paul Bodinel 4e, Hugo Bouteiller et Benoît Bonté 5e, Jeoffrey Stephan 9e.
        En D1 seniors messieurs, Matthieu Lamérant termine 16e, Arnaud Feraud 17e, Jean-Paul Poulain 18e.

        En D2 juniors garçons, Rémi Couillet finit 1er et Sylvain Pruvot 4e.
        En D2 seniors messieurs : Groupe 1 : Marc Flament 4e, Thibault De Visme 12e, Olivier Cocquet 14e. Groupe 2 : Yoann Cailloin 2e, Ali Combo Combo 3e, Geoffroy Gilot 10e, Alexandre Goupil 18e, Grégory Chhe 20e.

        ','lieu' => 'Thorigné-Fouillard - Ham - Chauny - Amiens','date' => '1318651200','miseenpage' => '0','screen' => 'Julien_Martin.jpg','joueur_du_we' => '0','debut_publication' => '1318564800','fin_publication' => '1321333200'),
        array('id' => '29','nom' => 'Pierre Philippe Nadau','texte' => 'Pierre-Philippe Nadau (5 – 520 pts) bat Michel Glanddier (10 – 1060 pts) le dimanche 27 novembre en D2 Messieurs contre Eppeville.','lieu' => 'Amiens','date' => '1322348400','miseenpage' => '0','screen' => 'piph_nadau.jpg','joueur_du_we' => '1','debut_publication' => '1322348400','fin_publication' => '1322953200'),
        array('id' => '33','nom' => 'Lucas Dubois','texte' => 'Lucas Dubois remporte le 2e tour du critérium fédéral en Nationale 2 cadets le dimanche 4 décembre 2011 à Argentan. Il accède ainsi à la Nationale 1 où il retrouvera les sept autres Amiénois déjà présents à ce niveau.

        D\'autres Amiénois se sont également imposés lors de ce 2e tour du critérium fédéral :
        - Eline Vanier, 1ère en R1 benjamines qui monte en N2 benjamines
        - Caroline Petitprez, 1ère en R1 juniors filles qui monte en N2 juniors filles
        - Yohan Lecomte, 1er en R1 seniors messieurs qui monte en N2 seniors messieurs
        - Pierre-Philippe Nadau, 1er en D1 minimes garçons qui monte en R1 minimes garçons
        - Marc Flament, 1er en D2 seniors messieurs qui monte en D1 seniors messieurs

        Et aussi :
        - André Dairaine et Didier Vincent, 2e et 4e en N2 Handisport qui montent en N1 Handisport
        - Richard Tran, 2e en D1 cadets qui monte en R1 cadets

        Félicitations à tous !','lieu' => 'Argentan','date' => '1322953200','miseenpage' => '0','screen' => 'Lucas Dubois.jpg','joueur_du_we' => '1','debut_publication' => '1322953200','fin_publication' => '1323644400'),
        array('id' => '40','nom' => 'Résultats du Critérium Féminin Départemental','texte' => '8 joueuses du club ont participé au critérium féminin départemental le samedi 17 décembre à Albert :

        Dans le tableau "Open" :
        - Elvire Vanier termine 5e.
        - Marine Huon, Eline Vanier, Léa Huré et Valentine Huré finissent 9e.

        Dans le tableau "501 à 900 pts" :
        - Elvire Vanier : 2e
        - Léa Huré, Marine Huon, Valentine Huré : 9e
        - Lise Vanier, Eline Vanier : 17e

        Dans le tableau "500 pts" :
        - Clémence Steelandt : 2e
        - Lise Vanier : 3e
        - Isabelle Dargaisse : 9e','lieu' => 'Albert','date' => '1324076400','miseenpage' => '0','screen' => 'Elvire Vanier.png','joueur_du_we' => '0','debut_publication' => '1324076400','fin_publication' => '1325286000'),
        array('id' => '46','nom' => 'Résultats du 3e tour du Critérium Fédéral','texte' => 'Près de 65 joueurs de l\'Amiens Sport TT ont participé au 3e tour du critérium fédéral les 14 et 15 janvier 2012 :

        Résultats :

        En N1 moins de 11 ans, Louis Chaerle 5e, Julien Martin 5e, Tristan Hersent 1er de poule puis défaite en 1/16e de finale, Léo Hersent 2e de poule puis défaite en 1/16e de finale.
        En N1 moins de 12 ans, Louis Chaerle 9e, Léo Hersent 33e, Tristan Hersent 33e, , Julien Martin 33e et Andréï Deguingand 33e.
        En N1 moins de 13 ans, , Tristan Hersent 3e de poule, Louis Chaerle 3e de poule, Julien Martin 3e de poule, Andréï Deguingand 3e de poule et Léo Hersent 4e de poule
        En N1 moins de 14 ans, Louis Chaerle 33e, Tristan Hersent 65e, , Julien Martin 65e et Andréï Deguingand 65e.
        En N1 moins de 15 ans, Lucas Dubois termine 1er de poule puis s\'incline en 1/32e de finale. Andréï Deguingand 4e de poule.
        En N1 moins de 16 ans, Raphaël Chatelain 5e et Lucas Dubois 33e.
        En N1 moins de 18 ans, Raphaël Chatelain 17e et Lucas Dubois 4e de poule.
        En N1 moins de 21 ans, Lucas Dubois 65e et Raphaël Chatelain 65e.
        En N1 élite, Raphaël Chatelain termine 4e de poule et Malin Plotuna termine 2e de poule. Ce dernier s\'incline ensuite en 1/32e de finale.

        En N2 benjamines, Elvire Vanier 3e et Eline Vanier 4e.
        En N2 minimes filles, Léa Huré 11e.
        En N2 cadets, Antoine Huon 2e et Loïc Lefevre 10e.
        En N2 juniors filles, Charline Grugeon 3e et Caroline Petitprez 5e.
        En N2 seniors messieurs, Yohan Lecomte 22e.

        En R1 benjamines, Marine Huon 1ère, Clémence Steelandt 3e et Pauline Steelandt 7e.
        En R1 benjamins, Gustav Defosse 7e et Thomas Legris 8e.
        En R1 minimes filles, Sophie Tran 8e.
        En R1 minimes garçons, Paul Boinet 2e, Paul Vandewoestyne 8e,  et Pierre-Philippe Nadau 13e.
        En R1 cadettes, Julia Flahaut 1ère et Valentine Huré 13e.
        En R1 cadets, Ala-Edinne Chahir 7e, Léo Bodinel 8e, Floris Chartier 13e et Richard Tran 13e.
        En R1 juniors garçons, Benoît Vaquier 11e, Louis Vandewoestyne 12e.
        En R1 seniors messieurs, Bruno Marysse 3e, Alexandre Haigneré 7e, Vincent Rasselet 8e.

        En D1 benjamins, Ymad Hamdad 1er, Keziah Desjonqueres 6e
        En D1 minimes garçons, Enguerrand Wallon 3e, Christophe De Catheu 5e, Benjamin Wilhem 13e.
        En D1 cadets, Joffrey Hauw 2e, Victor Hénao 11e.
        En D1 juniors garçons, Cyril De Catheu 1er, Paul Bodinel 3e, Joffrey Stephan 4e, Florian Beaufrère 5e, Benoît Bonté 5e, Hugo Bouteiller 10e, Rémi Couillet 12e, Sylvain Pruvot 13e.
        En D1 seniors messieurs, Ali Combo Combo 4e, Yoann Cailloin 7e, Arnaud Feraud 13e, Jean-Paul Poulain 15e, Marc Flament 21e.

        En D2 seniors messieurs (Groupe 1), Olivier Cocquet 17e, Erwan Bled 18e.
        En D2 seniors messieurs (Groupe 2), Geoffroy Gilot 1er, Thibault De Visme 12e, Grégory Chhe 18e.

        En D3 seniors messieurs, Alexandre Goupil 3e.','lieu' => 'Le Creusot - St Pierre les Elbeuf - Compiègne - Amiens','date' => '1326582000','miseenpage' => '0','screen' => 'Raphael Chatelain.jpg','joueur_du_we' => '0','debut_publication' => '1326409200','fin_publication' => '1327964400'),
        array('id' => '11','nom' => 'Louis Chaerle','texte' => 'Louis Chaerle (10 – 1049 pts) bat Stéphane Gamard (13 – 1377 pts)le dimanche 23 octobre 2011 en R3 Messieurs contre Longueau','lieu' => 'Longueau','date' => '1319320800','miseenpage' => '0','screen' => 'Louis_Chaerle.jpg','joueur_du_we' => '1','debut_publication' => '1319320800','fin_publication' => '1319925600'),
        array('id' => '13','nom' => 'Résultats de la 3e édition du tournoi Stéphane Baert','texte' => 'Ce vendredi 28 octobre 2011 s’est déroulé le 3ème tournoi Stéphane BAERT.

        Le tournoi du souvenir et de l’amitié. Une cinquantaine de fidèles étaient réunis.

        Après un rapide rappel des règles par Arnaud SELLIER (pas de placage haut, fourchette interdite), le tournoi débutait à 19 heures. Sous la férule et la baguette d’Alexandre GOUPIL, arbitre international, œuvrant sur les 4 continents, mais surtout entre la rue Delpech et la rue Gaulthier de Rumilly.

        Un tournoi handicap, en set de 31 points, 2 points rendus par classements. Sous la forme de défis aléatoires, avec 1 point en cas de défaite, et 2 points en cas de transformation. Un café et l’addition.

        Après 2H30 de fights  ininterrompus, tout de même entrecoupés pour certains de pauses croque-monsieurs, crêpes, & boissons (Claudette VAQUETTE likes this), le jeune Paul BOINET s’extirpait de la mêlée. Casque d’or des temps modernes, à la frappe coup droit JeanPierreRivesque, le nouveau vainqueur du tournoi Stéphane BAERT a tout fracassé sur son passage, ses adversaires, les balles Double-Circle, ainsi qu’une table Cornilleau (avec à la clé un petit recadrage sans débordement de maître DUDU sur son jeune Jedi).

        Après l’apéro avec le chanoine Kir, Laurent CANY nous projetait, à  22 heures, pour terminer la soirée, sur le grand écran muroïde de la salle Labaume, la rediffusion du match France / Suède. Il avait opposé en 1990, entre autres, Nicolas CHATELAIN et Jan-Owe WALDNER, dans le palais des sports de Saint-Quentin. Laurent Cany was here, à l’époque. Et son petit cœur a rebattu aussi vite qu’il y a 21 ans, et pas seulement dans son genou gauche endolori. Ça s’est en plus bien terminé pour Nicolas, qui une nouvelle fois a battu JO Waldner 21/19 à la belle, dans le match pour la victoire à 3/3. Benito VAQUERO a apprécié, et presqu’autant que les croque-monsieurs.

        Stéphane aurait également aimé l’ambiance.

        Pour l’an prochain nous avons en préparation une projection d’un best-of des plus beaux points de Jean-Claude DUBOIS. L’INA et les Archives Départementales sont en effet prêtes à nous ouvrir leurs portes.

        Un grand merci à tous : joueurs, spectateurs, organisateurs, vidéo-projectionneurs, et poêles à crêpeurs. 

        Et à l’an prochain.

        Denis CHATELAIN

        Classement général :
        1er : Paul Boinet (27 points)
        2e : Alexandre Haigneré (27 points)
        3e : Lucas Dubois (26 points)
        4e : Andréï Deguingand (25 points)
        5e : Ala-Edinne Chahir (24 points)
        6e : Raphaël Chatelain (22 points)
        7e : Pierre-Philippe Nadau, Delphine Guichard, Jean-Paul Poulain, Benjamin Bathelot, Christophe Pendant (19 points)
        12e : Antoine Huon, Alexandre Ménard, Jean Paillard (17 points)
        15e : Cédric Hermant (16 points)
        16e : Jeoffrey Stephan, Philippe Riquart, Hervé Debourgia (15 points)
        19e : Kévin Couturier, Hélène Carlié (14 points)
        21e : Matthieu Lamerant, Thibaut De Visme, Grégory Carly, Félix Fauquembergue (13 points)
        25e : Loïc Lefevre, Benoît Bonté, Christophe Harlé, Arnaud Sellier (12 points)
        29e : Isabelle Dargaisse, Hugo Bouteiller (11 points)
        31e : Benoît Nadau, Eric Lefevre, Philippe Gonzales, Freddy Abraham (10 points)
        35e : Arnaud Feraud, Michel Nadau, Vincent Rasselet, Christophe Brunel (9 points)
        39e : Marine Huon, Olivier Cocquet, Dominique Gessler (8 points)
        42e : Benoît Vaquier, Emmanuel Legrand, Christine Gessler (7 points)
        45e : Gustave Defossé, Jean-Claude Dubois (6 points)
        47e : Stéphane Defossé, Thierry Alduc (4 points)
        49e : Alexandre Goupil (1 point)
        Autres participants : Aurélie Neel, Claudette Vaquette, Catherine Payen, Sonia Sellier, Dorian Sellier, Nathan Sellier, Denis Chatelain, Laurent Cany, …','lieu' => 'Amiens','date' => '1319774400','miseenpage' => '0','screen' => 'Tournoi_Handicap.jpg','joueur_du_we' => '0','debut_publication' => '1319860800','fin_publication' => '1321333200'),
        array('id' => '17','nom' => 'Pierre-Philippe Nadau','texte' => 'Pierre-Philippe Nadau (5 – 520 pts) bat Jean-François Obry (9 – 940 pts) le 6 novembre 2011 en D2 Messieurs contre Flixecourt.','lieu' => 'Amiens','date' => '1320534000','miseenpage' => '0','screen' => 'PP_Nadau.jpg','joueur_du_we' => '1','debut_publication' => '1320534000','fin_publication' => '1321138800'),
        array('id' => '22','nom' => 'La joueuse du week-end','texte' => 'Charline Grugeon (12 – 1266 pts) bat Amandine Bauduin (n°188 – 1719 pts) le samedi 19 novembre 2011 en N2 Dames contre Béthune.







        ','lieu' => 'Béthune','date' => '1321657200','miseenpage' => '0','screen' => 'Charline Grugeon.jpg','joueur_du_we' => '0','debut_publication' => '1321657200','fin_publication' => '1322262000'),
        array('id' => '23','nom' => 'Résultats du 2e tour du critérium fédéral','texte' => '64 joueurs de l’Amiens Sport TT ont participé au 2e tour du critérium fédéral les 3 et 4 décembre 2011.

        En N1 moins de 11 ans, Julien Martin termine 5e, Louis Chaerle et Tristan Hersent 9e, Léo Hersent 17e.
        En N1 moins de 12 ans, Louis Chaerle termine 9e, Julien Martin et Andréï Deguingand 17e, Tristan Hersent et Léo Hersent 33e.
        En N1 moins de 13 ans, Louis Chaerle, Julien Martin et Andréï Deguingand terminent 33e. Tristan Hersent et Léo Hersent ne sortent pas de poules.
        En N1 moins de 14 ans, Louis Chaerle, Julien Martin et Andréï Deguingand et Tristan Hersent terminent 65e.
        En N1 moins de 16 ans, Raphaël Chatelain termine 33e.
        En N1 moins de 18 ans, Raphaël Chatelain termine 17e.
        En N1 moins de 21 ans, Raphaël Chatelain termine 65e.
        En N1 Elite, Raphaël Chatelain termine 3e de poule (1 victoire contre le numéro 668 et 2 défaites contre le numéro 133 et et le numéro 255). Malin Plotuna termine 2e de poule et se qualifie pour le tableau final. Il est éliminé en seizièmes de finale par Benjamin Brossier (numéro 78).

        En N2 benjamines, Elvire Vanier termine 4e et Marine Huon 9e.
        En N2 minimes filles, Léa Huré termine 7e.
        En N2 cadets, Lucas Dubois finit 1er et monte en N1, Loïc Lefevre 5e et Antoine Huon 7e.
        En N2 cadettes, Julia Flahaut finit 11e.
        En N2 juniors filles, Charline Grugeon prend la 6e place.

        En R1 benjamines, Eline Vanier termine 1ère, Clémence Steelandt 2e et Pauline Steelandt 6e.
        En R1 benjamins, Gustav Defosse termine 5e et Thomas Legris 6e.
        En R1 minimes garçons, Paul Boinet finit 5e et Paul Vandewoestyne 7e.
        En R1 cadettes, Valentine Huré termine 6e.
        En R1 cadets, Léo Bodinel 2e, Floris Chartier 3e, Ala-Edinne Chahir 6e et Victor Hénao 13e.
        En R1 juniors filles, Caroline Petitprez termine 1ère.
        En R1 juniors garçons, Louis Vandewoestyne 2e et Benoît Vaquier 7e.
        En R1 seniors messieurs, Yohan Lecomte finit 1er, Alexandre Haigneré 3e, Vincent Rasselet 9e et Bruno Marysse 16e.

        En D1 benjamins, Ymad Hamdad 4e.
        En D1 minimes garçons, Pierre-Philippe Nadau 1er, Enguerrand Wallon 3e.
        En D1 cadets, Richard Tran 2e, Joffrey Hauw 10e.
        En D1 juniors garçons, Cyril De Catheu 3e, Jeoffrey Stephan 4e, Paul Bodinel et Hugo Bouteiller 5e, Benoît Bonte 12e et Rémi Couillet 13e.
        En D1 seniors messieurs, Bertrand Bathelot 7e, Ali Combo Combo 10e, Arnaud Feraud 11e, Yoann Cailloin 19e, Matthieu Lamerant 20e.

        En D2 cadets, Valentin Rose 4e.
        En D2 seniors messieurs (Groupe 1), Marc Flament 1er.
        En D2 seniors messieurs (Groupe 2), Geoffroy Gilot 4e, Thibault De Visme 11e, Grégory Chhe 14e.','lieu' => 'Ceyrat   Argentan   Amiens   Flixecourt   Albert   Vauchelles','date' => '1322953200','miseenpage' => '0','screen' => 'Raphael Chatelain.jpg','joueur_du_we' => '0','debut_publication' => '1322175600','fin_publication' => '1324681200'),
        array('id' => '15','nom' => 'Résultats des interclubs départementaux','texte' => 'Les Interclubs départementaux se sont déroulés le samedi 29 octobre à l\'Amiens Sport TT.

        Les trois équipes filles (benjamines, minimes filles, cadettes) étaient exemptes de ce tour départemental et qualifiées directement pour l’épreuve régionale.

        Les trois équipes benjamins terminent 1ère, 2e et 3e (qualification des équipes 1 et 2 pour l’épreuve régionale).

        Les deux équipes minimes garçons terminent 1ère et 3e (qualification de l’équipe 1 pour l’épreuve régionale).

        Les trois équipes cadets terminent 1ère, 2e et 4e (qualification des équipes 1 et 2 pour l’épreuve régionale).

        Au moins huit équipes disputeront donc les interclubs régionaux le dimanche 5 février 2012 à Soissons.','lieu' => 'Amiens','date' => '1319860800','miseenpage' => '0','screen' => 'ASTTInterclubs.jpg','joueur_du_we' => '0','debut_publication' => '1319860800','fin_publication' => '1321678800'),
        array('id' => '16','nom' => 'Ala-Edinne Chahir','texte' => 'Ala-Edinne Chahir (6 – 697 points) bat Thomas Stachowicz (9 - 998 points) le 29 octobre 2011 lors des interclubs départementaux cadets contre Villers-Bretonneux.','lieu' => 'Amiens','date' => '1319839200','miseenpage' => '0','screen' => 'AE_Chahir.jpg','joueur_du_we' => '1','debut_publication' => '1319839200','fin_publication' => '1320620400'),
        array('id' => '20','nom' => 'Résultats du Top Départemental Détection','texte' => '11 jeunes de l\'Amiens Sport TT ont participé le dimanche 13 novembre au top départemental détection organisé dans notre salle.

        En filles nées en 2003, Pauline Steelandt termine 2e.
        En garçons nés en 2003, Maël Ledoux termine 2e.

        En garçons nés en 2002, Gustav Defosse termine 1er.

        En filles nées en 2001, Elvire Vanier, Eline Vanier, Marine Huon et Clémence Steelandt prennent les 4 premières places.
        En garçons 2001, Ymad Hamdad termine 3e, Benoît Nadau 6e, Kéziah Desjonqueres 9e et Axel Carlier 10e.

        Pauline Steelandt, Maël Ledoux, Gustav Defosse, Elvire Vanier, Eline Vanier et Marine Huon devraient être qualifiés pour le top régional détection qui se déroulera le dimanche 8 janvier 2012 à l\'ASTT. Ils rejoignent Léo Hersent (né en 2002), Louis Chaerle, Tristan Hersent et Julien Martin (nés en 2001) qualifiés directement pour cette épreuve régionale.','lieu' => 'Amiens','date' => '1321138800','miseenpage' => '0','screen' => 'Top Dep ASTT 11.JPG','joueur_du_we' => '0','debut_publication' => '1321138800','fin_publication' => '1322262000'),
        array('id' => '36','nom' => 'Résultats des Internationaux de Lorraine','texte' => 'Quatre joueurs du club étaient sélectionnés par la ligue de Picardie pour participer aux Internationaux de Lorraine qui se sont déroulées les 17 et 18 décembre 2011 à Pont à Mousson :

        En moins de 11 ans, Louis Chaerle termine 3e, Julien Martin 7e et Tristan Hersent 8e.

        En moins de 13 ans, Andréï Deguingand termine 20e.

        Christophe Harlé faisait partie de l\'encadrement de la délégation picarde.','lieu' => 'Pont à Mousson','date' => '1324162800','miseenpage' => '0','screen' => 'Louis Chaerle.jpg','joueur_du_we' => '0','debut_publication' => '1324162800','fin_publication' => '1325286000'),
        array('id' => '32','nom' => 'Résultats du 1er tour du critérium fédéral handisport','texte' => 'En Nationale 2 à Saint-Laurent Blangy (62) :
        André DAIRAINE : 2e 
        Didier VINCENT : 4e
        William MANIER : 5e. 
        Dommage que les 3 Amiénois se retrouvent ensemble du même côté du tableau au tirage au sort pour les quarts de finale.
        André Dairaine et Didier Vincent montent en Nationale 1.
        William Manier se maintient.

        En Nationale 3 à Dijon (21) :
        Christophe CAUDRELIER 5e.

        En interrégions à Saint-Omer (62) :
        Emmanuel Legrand 7e.

        Le 2e tour du critérium fédéral handisport aura lieu le 4 Février 2012 avec :
        - André DAIRAINE et Didier VINCENT en Nationale 1 à Pélussin (42) 
        - William MANIER en Nationale 2 près de Niort (79)
        - Christophe CAUDRELIER en Nationale 3 à ANGERS(49).

        André DAIRAINE','lieu' => 'Saint-Laurent Blangy   Dijon','date' => '1322866800','miseenpage' => '0','screen' => 'A Dairaine.jpg','joueur_du_we' => '0','debut_publication' => '1322866800','fin_publication' => '1323644400'),
        array('id' => '37','nom' => 'Montées des équipes 4 et 6 messieurs','texte' => 'L\'équipe 4 messieurs monte en R2.
        L\'équipe 6 messieurs monte en R3.

        Félicitations aux joueurs de l\'équipe 4 (Bertrand Bathelot, François Herly, Leny Berriat, Jean-Paul Poulain, Louis Vandewoestyne, Loïc Lefevre, Andréï Deguingand et Bruno Marysse) qui joueront la 2e phase en R2 et aux joueurs de l\'équipe 6 (Arnaud Feraud, Cyril De Catheu, Florent Schildknecht, Léo Bodinel, Ali Combo Combo, Tristan Hersent et Thibault De Visme) qui joueront en R3 en 2nde phase.','lieu' => 'Amiens','date' => '1323558000','miseenpage' => '0','screen' => 'R3.jpg','joueur_du_we' => '0','debut_publication' => '1323558000','fin_publication' => '1325199600'),
        array('id' => '45','nom' => 'Résultats du Top Régional Détection','texte' => 'Gustav Defosse, 1er en garçons nés en 2002.
        Elvire Vanier, 1ère en filles nées en 2001.

        Les autres résultats :

        12 jeunes du club étaient qualifiés pour cette épreuve.
        En filles nées en 2003, Pauline Steelandt termine 3e.
        En garçons nés en 2003, Maël Ledoux termine 4e.
        En garçons nés en 2002, Gustav Defosse termine 1er. Il se qualifie pour le Top de Zone en compagnie de Léo Hersent.
        En filles nées en 2001, Elvire Vanier termine 1ère, Eline Vanier 4e et Clémence Steelandt 5e.
        En garçons nés en 2001, Tristan Hersent termine 2e, Louis Chaerle 3e et Ymad Hamdad 10e.

        Julien Martin (blessé), Léo Hersent (malade) et Marine Huon n\'ont pas pu participé.','lieu' => 'Amiens','date' => '1325977200','miseenpage' => '0','screen' => 'TopASTT.JPG','joueur_du_we' => '0','debut_publication' => '1325977200','fin_publication' => '1327964400'),
        array('id' => '39','nom' => 'Grégory Chhe','texte' => 'Grégory Chhe (7 – 738 pts) bat Jean-Paul Descobert (12 – 1229 pts) le dimanche 11 décembre 2011 en D2 Messieurs contre Fort-Mahon.','lieu' => 'Amiens','date' => '1323558000','miseenpage' => '0','screen' => 'Gregory Chhe.jpg','joueur_du_we' => '1','debut_publication' => '1323558000','fin_publication' => '1324162800'),
        array('id' => '41','nom' => 'Résultats du Critérium Vétérans Départemental','texte' => 'Félicitations à Jean Taquet qui obtient le titre de champion de la Somme Vétérans 2 le dimanche 18 décembre 2011 à Doullens.','lieu' => 'Doullens','date' => '1324162800','miseenpage' => '0','screen' => 'JTaquet.jpg','joueur_du_we' => '0','debut_publication' => '1324162800','fin_publication' => '1325286000'),
        array('id' => '57','nom' => '3e tour du championnat départemental poussins-benjamins','texte' => '2 équipes de l’ASTT sont engagées dans le championnat départemental poussins-benjamins.

        Pour la 3e journée de ce championnat disputé le samedi 4 février à l\'Amiens Sport TT, l’équipe 1 était composée de Eline et Elvire Vanier. L’équipe 2 était composée de Maël Ledoux et Kéziah Desjonquères.

        L’équipe 1 s’impose 5-0 contre Moreuil PPC 1 et 5-0 contre Moreuil PPC 2.

        L’équipe 2 remporte également ses deux rencontres, 3 à 2 face à TT Saint-Fuscien 1 et 4 à 1 contre TT Mers Tréport Eu.

        La journée finale de ce championnat est programmée le samedi 28 avril 2012.
        ','lieu' => 'Amiens','date' => '1328310000','miseenpage' => '0','screen' => 'EE  Vanier.JPG','joueur_du_we' => '0','debut_publication' => '1328310000','fin_publication' => '1329346800'),
        array('id' => '48','nom' => 'Résultats du 2e tour du Critérium Fédéral Handisport','texte' => 'Le 2e tour du critérium fédéral handisport interrégional s\'est déroulé le samedi 7 janvier 2012 à Lille. Emmanuel Legrand y représentait le club.

        Après avoir pris la 6e place lors du 1er tour, il connaît cette fois moins de réussite et termine 11e/12.

        ','lieu' => 'Lille','date' => '1325890800','miseenpage' => '0','screen' => 'ELegrand.jpg','joueur_du_we' => '0','debut_publication' => '1325890800','fin_publication' => '1326495600'),
        array('id' => '43','nom' => '2e tour du championnat départemental poussins-benjamins','texte' => '2 équipes de l’ASTT sont engagées dans le championnat départemental poussins-benjamins.

        Pour la 2e journée de ce championnat disputé le samedi 17 décembre à Eu, l’équipe 1 était composée de Gustav Defosse et Ymad Hamdad. L’équipe 2 était composée de Maël Ledoux et Timéo Herbin Teneur.

        L’équipe 1 s’impose 4 et 5-0 contre Moreuil PPC 1.

        L’équipe 2 remporte également ses deux rencontres, 4 à 1 face à TT Mers-Tréport-Eu 1 et 3 à 2 face à Moreuil PPC 2.

        La troisième journée de ce championnat est programmée le samedi 4 février 2012.','lieu' => 'Eu','date' => '1324076400','miseenpage' => '0','screen' => '','joueur_du_we' => '0','debut_publication' => '1324076400','fin_publication' => '1324681200'),
        array('id' => '49','nom' => 'Les montées du 3e tour du critérium fédéral','texte' => 'Félicitations à :
        - Marine Huon, 1ère en R1 benjamines qui monte en N2 benjamines
        - Julia Flahaut, 1ère en R1 cadettes qui monte en N2 cadettes
        - Ymad Hamdad, 1er en D1 benjamins qui monte en R1 benjamins
        - Cyril De Catheu, 1er en D1 juniors garçons qui monte en R1 juniors garçons
        - Geoffroy Gilot, 1er en D2 seniors messieurs qui monte en D1 seniors messieurs','lieu' => 'Compiègne - Amiens','date' => '1326582000','miseenpage' => '0','screen' => 'Marine Huon.jpg','joueur_du_we' => '0','debut_publication' => '1326582000','fin_publication' => '1327964400'),
        array('id' => '75','nom' => 'Résultats du Top de Zone','texte' => '4 joueurs de l\'Amiens Sport TT ont participé au top de zone (interrégional) détection les 24 et 25 mars 2012 à Mondeville.

        Félicitations à Léo Hersent, 1er en garçons 2002.

        Gustav Defosse termine 9e sur 13 en garçons 2002.

        Pauline Steelandt termine 7e sur 12 en filles 2003/2004 et 12e sur 12 en filles 2002/2003.

        Maël Ledoux termine 16e sur 17 en garçons 2003 et 21e sur 26 en garçons 2003/2004.','lieu' => 'Mondeville','date' => '1332630000','miseenpage' => '0','screen' => 'TopZoneASTT.JPG','joueur_du_we' => '0','debut_publication' => '1332630000','fin_publication' => '1334440800'),
        array('id' => '51','nom' => 'Julien Martin','texte' => 'Julien Martin (12 – 1227 pts) bat Frédéric Bousignière (15 – 1543 pts) le dimanche 22 janvier 2012 en R3 Messieurs contre Doullens-Bernaville.','lieu' => 'Doullens','date' => '1327186800','miseenpage' => '0','screen' => 'Julien Martin.jpg','joueur_du_we' => '1','debut_publication' => '1327273200','fin_publication' => '1327964400'),
        array('id' => '53','nom' => 'Julien Martin','texte' => 'Julien Martin (12 – 1227 pts) bat Julian Bouchoir (16 – 1680 pts) le samedi 28 janvier 2012 en R1 Messieurs contre Villers Saint-Paul.','lieu' => 'Villers Saint-Paul','date' => '1327705200','miseenpage' => '0','screen' => 'Julien Martin.jpg','joueur_du_we' => '1','debut_publication' => '1327878000','fin_publication' => '1328828400'),
        array('id' => '72','nom' => 'Résultats du 4e tour du Critérium Fédéral','texte' => '49 joueurs de l\'Amiens Sport TT ont participé au 4e tour du critérium fédéral les 10 et 11 mars 2012.

        Résultats :

        - En N1 moins de 11 ans : Louis Chaerle 3e, Julien Martin 5e, Tristan Hersent 9e, Léo Hersent 2e de poule puis défaite en 1/16e de finale
        - En N1 moins de 12 ans : Louis Chaerle 9e, Tristan Hersent 17e, Julien Martin 17e, Andréï  Deguingand 17e, Léo Hersent 33e, 
        - En N1 moins de 13 ans :  Léo Hersent 4e de poule, Tristan Hersent 4e de poule, Louis Chaerle 3e de poule, Julien Martin 3e de poule, Andréï Deguingand 2e de poule puis défaite en 1/32e de finale
        - En N1 moins de 14 ans : Tristan Hersent 65e, Louis Chaerle 65e, Julien Martin 33e, Andréï Deguingand 33e
        - En N1 moins de 15 ans : Andréï Deguingand 4e de poule, Lucas Dubois 1er de poule puis défaite en 1/32e de finale
        - En N1 moins de 16 ans : Lucas Dubois 65e, Raphaël Chatelain 5e
        - En N1 moins de 18 ans : Lucas Dubois 3e de poule, Raphaël Chatelain 2e de poule puis défaite en 1/32e de finale.
        - En N1 moins de 21 ans : Raphaël Chatelain 33e
        - En N1 Elite : Raphaël Chatelain 4e de poule (malgré une victoire contre le n°304), Malin Plotuna 1er de poule puis défaite en 1/32e de finale.

        - En N2 benjamines : Elvire Vanier, 1ère, Eline Vanier 4e, Marine Huon 8e
        - En N2 cadettes : Julia Flahaut 9e
        - En N2 cadets : Loïc Lefevre 5e, Antoine Huon 8e
        - En N2 juniors filles : Caroline Petitprez 1ère, Charline Grugeon 4e

        - En R1 benjamines : Clémence Steelandt 5e, Pauline Steelandt 10e
        - En R1 benjamins : Ymad Hamdad 7e
        - En R1 minimes filles : Léa Huré, 1ère, Sophie Tran 9e
        - En R1 minimes garçons : Paul Boinet 6e, Paul Vandewoestyne 7e
        - En R1 cadets : Ala-Edinne Chahir 5e, Léo Bodinel 8e, Richard Tran 12e, Joffrey Hauw 13e
        - En R1 juniors garçons : Benoît Vaquier 7e, Cyril De Catheu 11e
        - En R1 seniors messieurs : Alexandre Haigneré 1er, Yohan Lecomte 2e, Vincent Rasselet 11e, Bruno Marysse 17e

        - En D1 benjamins : Keziah Desjonqueres 1er
        - En D1 minimes garçons : Pierre-Philippe Nadau 1er, Enguerrand Wallon 3e, Christophe De Catheu 13e
        - En D1 juniors garçons : Louis Vandewoestyne 2e, Jeoffrey Stephan 3e, Hugo Bouteiller 7e, Paul Bodinel 8e
        - En D1 seniors messieurs : Jean-Paul Poulain 5e, Yoann Cailloin 6e, Geoffroy Gilot 14e, Arnaud Feraud 20e

        - En D2 seniors messieurs : Groupe 1 : Matthieu Lamerant 6e, Olivier Cocquet 14e. Groupe 2 : Alexandre Goupil 15, Grégory Chhe 17e','lieu' => 'Thouars - Béthune - Ham - Amiens','date' => '1331334000','miseenpage' => '0','screen' => 'L. Chaerle.jpg','joueur_du_we' => '0','debut_publication' => '1330902000','fin_publication' => '1332111600'),
        array('id' => '65','nom' => 'Benoît Bonté','texte' => 'Benoît Bonté (8 – 862 pts) bat Rodolphe Vagner (12 – 1250 pts) le dimanche 19 février 2012 en D2 Messieurs contre Dreuil TT 1.','lieu' => 'Dreuil','date' => '1329606000','miseenpage' => '0','screen' => 'B. Bonte.JPG','joueur_du_we' => '1','debut_publication' => '1329606000','fin_publication' => '1330210800'),
        array('id' => '56','nom' => 'Résultats du 2e tour du critérium fédéral handisport','texte' => 'Le 2e tour du critérium fédéral handisport s\'est déroulé le 4 février 2012.

        En Nationale 1 à Pélussin(Saint -Etienne) :
        - André DAIRAINE termine 13ème et se maintient en Nationale 1.
        - Didier VINCENT termine 17ème. Il descend en Nationale 2.

        En Nationale 2 à Bressuires (Niort) :  
        - William MANIER termine 13ème et se maintient en Nationale 2.

        En Nationale 3 à Angers : 
        - Christophe CAUDRELIER termine 5ème et se maintient en Nationale 3.','lieu' => 'Pélussin - Bressuires - Angers','date' => '1328310000','miseenpage' => '0','screen' => 'Handisport ASTT.jpg','joueur_du_we' => '0','debut_publication' => '1328396400','fin_publication' => '1329346800'),
        array('id' => '68','nom' => 'Résultats du Critérium Régional Féminin','texte' => 'Léa Huré, seule représentante du club, termine 11e.','lieu' => 'Breteuil','date' => '1330124400','miseenpage' => '0','screen' => '','joueur_du_we' => '0','debut_publication' => '1330124400','fin_publication' => '1330470000'),
        array('id' => '70','nom' => 'Léa Huré','texte' => 'Léa Huré (6 - 613 points) bat Arielle Van-Caemelbeke (8 - 810 points) le samedi 25 février 2012 lors du Critérium Régional Féminin disputé à Breteuil.','lieu' => 'Breteuil','date' => '1330210800','miseenpage' => '0','screen' => 'Lea Hure.jpg','joueur_du_we' => '1','debut_publication' => '1330210800','fin_publication' => '1330815600'),
        array('id' => '71','nom' => 'Lucas Dubois','texte' => 'Lucas Dubois (17 - 1710 pts) bat David Ramos (n°490 - 2226 pts) le samedi 3 mars en N3 Messieurs contre Joué les Tours TT 1.','lieu' => 'Amiens','date' => '1330729200','miseenpage' => '0','screen' => 'Lucas Dubois.jpg','joueur_du_we' => '1','debut_publication' => '1330729200','fin_publication' => '1331506800'),
        array('id' => '95','nom' => 'Résultats des championnats de la Somme','texte' => 'Les championnats de la Somme se sont déroulés le dimanche 6 mai à l\'Amiens Sport TT.

        Félicitations à :
        - Gustav Defosse, champion de la Somme benjamins
        - Andréï Deguingand, champion de la Somme minimes garçons
        - Louis Vandewoestyne, champion de la Somme juniors garçons

        Autres résultats :
        - Pierre-Philippe Nadau, 3e en minimes garçons
        - Cyril De Catheu, 2e en juniors garçons','lieu' => 'Amiens','date' => '1336255200','miseenpage' => '0','screen' => '1477168.jpg','joueur_du_we' => '0','debut_publication' => '1336255200','fin_publication' => '1337032800'),
        array('id' => '84','nom' => 'Résultats du Challenge Bernard Jeu régional','texte' => 'Le challenge Bernard Jeu régional s\'est déroulé le dimanche 22 avril à Saint-Quentin.

        Quatre équipes de l\'Amiens Sport TT étaient engagées.

        L\'ASTT 1 termine 2e avec 64 points comme l\'équipe de Saint-Quentin mais moins de finales ont été gagnées par les Amiénois.

        L\'ASTT 2 termine 4e. L\'ASTT 3 9e et l\'ASTT 4 10e.

        Félicitations à Elvire Vanier (ASTT 1), 1ère en benjamines, Tristan Hersent (ASTT 2), 1er en benjamins, Julia Flahaut (ASTT 1), 1ère en cadettes, Malin Plotuna (ASTT 1), 1er en seniors messieurs.

        Eline Vanier (BF - ASTT 2), Louis Chaerle (BG - ASTT 1), Andréï Deguingand (MG - ASTT 1), Loïc Lefevre (CG - ASTT 1), Caroline Petitprez (JF - ASTT 1), Raphaël Chatelain (JG - ASTT 1) s\'inclinent en finale.

        Résultats détaillés :

        Benjamines : Elvire Vanier 1ère, Eline Vanier 2e, Marine Huon 3e, Pauline Steelandt 5e
        Benjamins : Tristan Hersent 1er, Louis Chaerle 2e, Léo Hersent 5e, Thomas Legris 9e
        Minimes filles : Léa Huré 3e, Clémence Steelandt, Lise Vanier 5e, Sphie Tran 9e
        Minimes garçons : Andréï Deguingand 2e, Paul Boinet 5e, Paul Vandewoestyne 9e, Ymad Hamdad 13e
        Cadettes : Julia Flahaut 1ère
        Cadets : Loïc Lefevre 2e, Antoine Huon 3e, Ala-Edinne Chahir 5e, Floris Chartier 9e
        Juniors filles : Caroline Petitprez 2e
        Juniors garçons : Raphaël Chatelain 2e, Benoît Vaquier 5e, Louis Vandewoestyne 9e, Cyril DE Catheu 9e
        Seniors dames : Hélène Carlié 3e, Marion Berthelot 5e, Delphine Guichard 5e, Aurélie Neel 9e
        Seniors messieurs : Malin Plotuna 1er, Arnaud Sellier 5e, Alexandre Haigneré 5e, Vincent Rasselet 5e','lieu' => 'Saint-Quentin','date' => '1335045600','miseenpage' => '0','screen' => 'DSC02774.JPG','joueur_du_we' => '0','debut_publication' => '1335045600','fin_publication' => '1336341600'),
        array('id' => '85','nom' => 'Andréï Deguingand','texte' => 'Andréï Deguingand (11 – 1166 pts) bat Sébastien Baudry (16 – 1627 pts) et Charles-Henri Grimaux (15 – 1585 pts) le samedi 14 avril 2012 en R2 Messieurs contre Roye.','lieu' => 'Amiens','date' => '1334354400','miseenpage' => '0','screen' => 'A. Deguingand.jpg','joueur_du_we' => '1','debut_publication' => '1334354400','fin_publication' => '1335045600'),
        array('id' => '60','nom' => 'Antoine Huon','texte' => 'Antoine Huon (13 – 1349 pts) bat Pascal Perrin (17 – 1750 pts) et Valentin Carme (16 – 1625 pts) le samedi 11 février 2012 en R1 Messieurs contre Saint-Quentin.','lieu' => 'Amiens','date' => '1328914800','miseenpage' => '0','screen' => 'Antoine Huon.jpg','joueur_du_we' => '1','debut_publication' => '1329001200','fin_publication' => '1329778800'),
        array('id' => '76','nom' => 'Résultats des Interclubs Régionaux','texte' => 'Les interclubs régionaux se sont déroulés le dimanche 25 mars 2012 à Soissons. 

        Félicitations aux équipes benjamins garçons et minimes garçons qui s\'imposent et qui obtiennent leur qualification pour les interclubs nationaux les 12 et 13 mai 2012 à Joué les Tours.

        Résultats détaillés (8 équipes du club étaient qualifiées) :

        - L\'équipe benjamines (Marine Huon, Eline Vanier et Elvire Vanier) termine 2e. Un éventuel repêchage pourrait permettre à l\'équipe de participer aux interclubs nationaux.

        - L\'équipe 1 benjamins (Louis Chaerle, Thomas Legris et Julien Martin) termine 1ère. L\'équipe 2 benjamins (Kéziah Desjonqueres, Ymad Hamdad et Timéo Herbin-Teneur) termine 5e.

        - L\'équipe minimes filles (Léa Huré, Clémence Steelandt, Sophie Tran et Lise Vanier) était la seule engagée. Elle est également qualifiée pour les interclubs nationaux.

        - L\'équipe minimes garçons (Paul Boinet, Andréï Deguingand et Tristan Hersent) termine 1ère.

        - L\'équipe cadettes (Julia Flahaut, Valentine Huré et Sophie Tran) était WO.

        - L\'équipe 1 cadets (Léo Bodinel, Lucas Dubois et Antoine Huon) termine 2e. L\'équipe 2 cadets (Ala-Edinne Chahir, Floris Chartier et Richard Tran) termine 4e.

        L\'ensemble de ces bons résultats permettent au club de remporter le challenge régional interclubs (classement combiné des différentes équipes).

        Félicitations à tous les participants et un grand merci aux coachs présents qui ont contribué à ce succès.','lieu' => 'Soissons','date' => '1332630000','miseenpage' => '0','screen' => 'InterclubsMG ASTT.jpg','joueur_du_we' => '0','debut_publication' => '1332630000','fin_publication' => '1334872800'),
        array('id' => '69','nom' => 'Résultats du Critérium Régional Vétérans','texte' => 'Félicitations à Jean Taquet qui remporte le titre de Champion de Picardie Vétérans 2 (50 ans à 60 ans) le dimanche 26 février 2012 à Breteuil.

        Les championnats de France Vétérans se dérouleront du 23 au 26 mars à Ceyrat (63).','lieu' => 'Breteuil','date' => '1330210800','miseenpage' => '0','screen' => 'V2M.jpg','joueur_du_we' => '0','debut_publication' => '1330210800','fin_publication' => '1330988400'),
        array('id' => '64','nom' => 'Résultats des championnats de France des régions par équipes','texte' => 'Trois joueurs du club (Julia Flahaut en cadettes, Louis Chaerle et Julien Martin en minimes garçons) ont participé aux championnats de France des régions du 21 au 24 février 2012 à Villeneuve sur Lot.

        Les minimes garçons terminent 11e. Les cadettes terminent 13e.

        Résultats de l\'équipe minimes garçons (Julien Martin, Louis Chaerle, Pierre Ricour et Ugo Pieyre) :
        - En poules, victoire 3-1 contre la Franche-Comté (défaite de Julien contre un 10 - Louis n\'a pas joué), puis défaite 3-2 contre l\'Auvergne (2 défaites de Julien contre deux 12 - 1 victoire de Louis contre un 10). L\'équipe termine 2e de poule et jouera les places 9 à 16.
        - En places 9 à 16, victoire 3-2 contre le Centre (2 victoires de Louis contre un 13 et un 10 - Julien n\'a pas joué).
        - En places 9 à 12, défaite 3-0 contre le Midi-Pyrénées().
        - En places 11 à 12, victoire par forfait contre le Nord Pas de Calais.
        Christophe Harlé était le capitaine de l\'équipe minimes garçons.

        Résultats de l\'équipe cadettes (Julia Flahaut, Lucie Levêque, Manon Colson et Solène Grugeon) :
        - En poules, défaite 3-0 contre le Midi-Pyrénées (défaite de Julia contre une 8) et 3-1 contre la Franche-Comté (victoire de Julia contre une 11). L\'équipe termine 3e de poule et joue les places 9 à 13.
        - En place 9 à 13, défaite 3-1 contre la Champagne-Ardennes (défaite de Julia contre une 12). L\'équipe termine 13e.

        Alexandre Goupil était l\'arbitre de la délégation picarde.','lieu' => 'Villeneuve sur Lot','date' => '1329778800','miseenpage' => '0','screen' => 'Louis Chaerle.jpg','joueur_du_we' => '0','debut_publication' => '1329778800','fin_publication' => '1331334000'),
        array('id' => '67','nom' => 'Résultats du Trophée Vétérans interrégional Handisport','texte' => 'Le trophée vétérans interrégional handisport s\'est déroulé le samedi 25 février 2012 à Chevilly-Larue.

        André Dairaine termine 1er et se qualifie pour la finale nationale qui se déroulera le 2 juin 2012 à Tours. 16 joueurs seulement participeront à cette épreuve nationale.

        William Manier finit 5e (remplaçant pour la finale nationale), Christophe Caudrelier 7e et Didier Vincent 8e.

        En double: 
        - André DAIRAINE et William MANIER : 1ers
        - Christophe CAUDRELIER et Didier VINCENT : 4e','lieu' => 'Chevilly-Larue','date' => '1330124400','miseenpage' => '0','screen' => 'Handisport ASTT.JPG','joueur_du_we' => '0','debut_publication' => '1330124400','fin_publication' => '1330902000'),
        array('id' => '73','nom' => 'Les montées du 4e tour du Critérium Fédéral','texte' => 'Félicitations à :
        - Elvire Vanier, 1ère en N2 benjamines
        - Caroline Petitrez, 1ère en N2 juniors filles
        - Léa Huré, 1ère en R1 minimes filles
        - Alexandre Haigneré, 1er en R1 seniors messieurs
        - Kéziah Desjonqueres, 1er en D1 benjamins garçons
        - Pierre-Philippe Nadau, 1er en D1 minimes garçons

        - Yohan Lecomte, 2e en R1 seniors messieurs
        - Louis Vandewoestyne, 2e en D1 juniors garçons
        ','lieu' => 'Béthune - Ham - Amiens','date' => '1331420400','miseenpage' => '0','screen' => 'Elvire Vanier.JPG','joueur_du_we' => '0','debut_publication' => '1331420400','fin_publication' => '1332111600'),
        array('id' => '74','nom' => 'Charline Grugeon','texte' => 'Charline Grugeon (12 – 1253 pts) bat Marion Godefroy (n°270 – 1582 pts) le samedi 17 mars 2012 en N3 Dames contre Roubaix.','lieu' => 'Amiens','date' => '1331938800','miseenpage' => '0','screen' => 'Charline Grugeon.jpg','joueur_du_we' => '1','debut_publication' => '1332025200','fin_publication' => '1332712800'),
        array('id' => '77','nom' => 'Résultats du 3e tour du critérium fédéral handisport','texte' => 'Le 3e tour du critérium fédéral handisport s\'est déroulé le samedi 24 mars 2012 à Mèze (34), Romans sur Isère (26) et Chailles (41).

        En Nationale 3, Christophe CAUDRELIER finit 5e et se maintient en Nationale 3.

        En Nationale 2 :
        - Didier VINCENT termine 9e et se maintient 
        - William MANIER était forfait et descend en Nationale 3.

        En Nationale 1, André DAIRAINE était forfait et descend en Nationale 2.','lieu' => 'Mèze - Romans sur Isère - Chailles','date' => '1332543600','miseenpage' => '0','screen' => 'C Caudrelier.JPG','joueur_du_we' => '0','debut_publication' => '1332543600','fin_publication' => '1333576800'),
        array('id' => '78','nom' => 'Résultats du 5e tour du critérium fédéral','texte' => '9 joueurs de l\'Amiens Sport ont participé au 5e tour du critérium fédéral Nationale 1 du 7 au 9 avril 2012. Elvire Vanier et Caroline Petitprez étaient en N1 Filles à Mayenne. Léo Hersent, Tristan Hersent, Louis Chaerle, Andréï Deguingand, Lucas Dubois, Raphaël Chatelain et Malin Plotuna jouaient à Bourges en N1 Garçons.

        Résultats N1 Filles :
        - En moins de 11 ans, Elvire Vanier termine 3e de poule.
        - En moins de 12 ans, Elvire Vanier est éliminée en 16e de finale.
        - En moins de 13 ans, Elvire Vanier termine 4e de poule.
        - En moins de 18 ans, Caroline Petitprez termine 1ère de poule puis s\'incline en 32e de finale.
        - En moins de 21 ans, Caroline Petitprez s\'incline en 32e de finale.
        - En Elite, Caroline Petitprez termine 3e de poule.

        Résultats N1 Garçons :
        - En moins de 11 ans : Tristan Hersent atteint les 1/4 de finale. Léo Hersent finit 3e de poule.
        - En moins de 12 ans : Andréï Deguingand, Louis Chaerle et Tristan Hersent sont éliminés en 16e de finale. Léo Hersent est éliminé en 32e de finale.
        - En moins de 13 ans : Andréï Deguingand termine 1er de poule puis est éliminé en 8e de finale (Andréï a éliminé la tête de série n°2 en 16e de finale). Louis Chaerle termine 2e de poule puis s\'incline en 32e de finale. 
        - En moins de 14 ans : Louis Chaerle et Andréï Deguingand sont éliminés en 32e de finale
        - En moins de 15 ans : Lucas Dubois est éliminé en 32e de finale. Andréï Deguingand termine 3e de poule. Louis Chaerle termine 4e de poule.
        - En moins de 16 ans, Lucas Dubois est éliminé en 32e de finale.
        - En moins de 18 ans : Raphaël Chatelain s\'incline en 32e de finale. Lucas Dubois termine 4e de poule.
        - En moins de 21 ans, Raphaël Chatelain s\'incline en 32e de finale.
        - En Elite, Malin Plotuna termine 1er de poule puis s\'incline en 16e de finale.','lieu' => 'Mayenne - Bourges','date' => '1333836000','miseenpage' => '0','screen' => 'Andrei Deguingand.jpg','joueur_du_we' => '0','debut_publication' => '1333836000','fin_publication' => '1335304800'),
        array('id' => '79','nom' => 'Antoine Huon','texte' => 'Antoine Huon (13 – 1349 pts) bat Aurélien Hermant (18 – 1895 pts) le samedi 31 mars 2012 en R1 Messieurs contre Villers-Bretonneux.','lieu' => 'Amiens','date' => '1333144800','miseenpage' => '0','screen' => 'A. Huon.JPG','joueur_du_we' => '1','debut_publication' => '1333231200','fin_publication' => '1333836000'),
        array('id' => '80','nom' => 'Championnats de France Handisport','texte' => 'Les championnats de France Handisport se dérouleront du 26 au 28 mai 2012 à Ceyrat (63) près de Clermont-Ferrand.

        Quatre joueurs du club sont qualifiés pour cette épreuve :
        - Emmanuel Legrand (Classe 6 et 7)
        - Christophe Caudrelier (Classe 5)
        - William Manier et André Dairaine (Classe 4)

        Bonne chance à eux !','lieu' => 'Ceyrat','date' => '1337983200','miseenpage' => '0','screen' => 'E. Legrand.JPG','joueur_du_we' => '0','debut_publication' => '1337032800','fin_publication' => '1338156000'),
        array('id' => '81','nom' => 'Championnat interrégional handisport par équipes','texte' => 'L\'équipe handisport de l\'Amiens Sport TT (André Dairaine, William Manier, Didier Vincent et Christophe Caudrelier) remporte le tour interrégional des championnats de France par équipes et se qualifie pour la finale nationale qui se déroulera le 5 mai à Argentan (61).

        Les Amiénois se sont imposés 3-0 en finale contre l\'équipe d\'Evry.

        Félicitations à tous !','lieu' => 'Douai','date' => '1333749600','miseenpage' => '0','screen' => 'Handisport ASTT.jpg','joueur_du_we' => '0','debut_publication' => '1333749600','fin_publication' => '1334872800'),
        array('id' => '82','nom' => 'Résultats des championnats du Monde scolaire','texte' => 'Raphaël Chatelain a participé aux championnats du Monde scolaire du 31 mars au 6 avril à Cagliari en Italie.

        Il a participé à une compétition par équipes avec l\'équipe de France scolaire et à une compétition individuelle.


        Résultats par équipes
        Classement final 4ème (rate le podium d’un cheveu, avec une défaite 4/3 contre l’Italie ayant dans ses rangs l’un des meilleurs juniors européens)
        Poule de 7 :
        - Grèce : victoire 7/0 (Raphaël 2 victoires /2)
        - Angleterre : victoire 4/3
        - Turquie : victoire 5/2
        - Chine : défaite 7/0 (Raphaël 2 défaites/2)
        - Taïwan : défaite 6/1
        - Italie : défaite 4/3

        Résultats tournoi individuel :
        Raphaël bat un joueur turc en 1/64 de finale (3/0) et perd en 1/32 de finale contre un joueur belge (3/1).','lieu' => 'Cagliari (Italie)','date' => '1333663200','miseenpage' => '0','screen' => 'Nouvelle image.png','joueur_du_we' => '0','debut_publication' => '1333663200','fin_publication' => '1334440800'),
        array('id' => '100','nom' => 'Résultats des finales par classement régionales','texte' => 'Les finales par classement régionales se sont déroulées le dimanche 13 mai 2012 à Breteuil. Quatre joueurs de l\'Amiens Sport TT ont participé à cette épreuve.

        Félicitations à Loïc Lefevre, 2e du tableau moins de 1500 points qui se qualifie pour les finales nationales par classement qui se dérouleront les 23 et 24 juin aux Ponts de Cé à côté d\'Angers.

        Marion Berthelot termine 4e du tableau moins de 1200 points.
        Louis Vandewoestyne termine 9e du tableau moins de 1500 points.
        Grégory Chhé termine 17e du tableau moins de 800 points.','lieu' => 'Breteuil','date' => '1336860000','miseenpage' => '0','screen' => 'L Lefevre.JPG','joueur_du_we' => '0','debut_publication' => '1336860000','fin_publication' => '1337896800'),
        array('id' => '98','nom' => 'Résultats du challenge PBM départemental','texte' => 'Le challenge poussins-benjamins-minimes départemental s\'est déroulé le samedi 12 mai 2012 à l\'Amiens Sport TT.

        10 joueurs du club ont participé à cette épreuve.

        Félicitations  Ymad Hamdad, 1er en benjamins, Pierre-Philippe Nadau 1er en minimes garçons et Clémence Steelandt, 1ère en benjamines.

        Résultats complets :
        - Poussines : Pauline Steelandt 2e, Jeanne André 6e
        - Poussins : Maël Ledoux, 2e, Adem Hamdad 6e, Gauthier Brasseur 10e
        - Benjamines : Clémence Steelandt, 1ère
        - Benjamins : Ymad Hamdad 1er, Kéziah Desjonquères 3e, Timéo Herbin Teneur 17e
        - Minimes garçons : Pierre-Philippe Nadau 1er','lieu' => 'Amiens','date' => '1336773600','miseenpage' => '0','screen' => 'PBM.JPG','joueur_du_we' => '0','debut_publication' => '1336773600','fin_publication' => '1337637600'),
        array('id' => '88','nom' => 'Finale du championnat départemental poussins-benjamins','texte' => 'Deux équipes de l’Amiens Sport TT étaient engagées dans le championnat départemental poussins-benjamins.

        Après trois tours préliminaires, la finale de ce championnat qui réunissait 16 équipes s\'est déroulée le samedi 28 avril à l\'ASTT.

        L’équipe 1 composée de Eline et Elvire Vanier termine 1ère
        L’équipe 2 composée de Kéziah Desjonquières, Ymad Hamdad et Adem Hamdad termine 2e.

        Résultats détaillés :
        - 1/8 de finale : ASTT 1 bat Longueau ESC 1 5 à 0 - ASTT 2 bat Pierrepont USL 2 4 à 1.
        - 1/4 de finale : ASTT 1 bat Montdidier PPC 1 5 à 0 - ASTT 2 bat Montdidier PPC 2 5 à 0.
        - 1/2 finale : ASTT 1 bat Ville le Marclet / Flixecourt 1 5 à 0 - ASTT 2 bat TT St Fuscien 1 4 à 1.
        - Finale : ASTT 1 bat ASTT 2 3 à 2.

        Félicitations aux jeunes amiénois !','lieu' => 'Amiens','date' => '1335564000','miseenpage' => '0','screen' => 'Vanier.JPG','joueur_du_we' => '0','debut_publication' => '1335564000','fin_publication' => '1336600800'),
        array('id' => '89','nom' => 'Résultats des finales départementales par classement','texte' => 'Les finales départementales par classement se sont déroulées le dimanche 29 avril à l\'Amiens Sport TT.

        7 joueurs de l\'ASTT ont participé à cette épreuve.

        Dans le tableau 1300 à 1599 points : Loïc Lefevre 1er, Louis Vandewoestyne 2e, Leny Berriat 6e, Jean-Paul Poulain 10e
        Dans le tableau 1100 à 1299 points : Matthieu Lamérant 6e.
        Dans le tableau moins de 900 points : Grégory Chhe 5e, Alexandre Goupil 11e.
        ','lieu' => 'Amiens','date' => '1335650400','miseenpage' => '0','screen' => 'Lefevre.jpg','joueur_du_we' => '0','debut_publication' => '1335650400','fin_publication' => '1336687200'),
        array('id' => '90','nom' => 'Résultats des championnats de France minimes-juniors','texte' => 'Trois joueurs de l\'Amiens Sport TT ont participé aux championnats de France minimes-juniors du 3 au 5 mai 2012 à Agen :

        - En minimes garçons, Andréï Deguingand termine 3e de poule puis s\'incline en 1/32e de finale. Louis Chaerle termine 4e de poule et n\'intègre pas le tableau final.
        - En juniors garçons, Raphaël Chatelain termine 3e de poule et n\'intègre pas le tableau final.','lieu' => 'Agen','date' => '1336168800','miseenpage' => '0','screen' => 'Deguingand.jpg','joueur_du_we' => '0','debut_publication' => '1336168800','fin_publication' => '1337032800'),
        array('id' => '91','nom' => 'Titres par équipes Nationale 3','texte' => 'Suite à sa première place dans sa poule de championnat par équipes, l\'équipe 1 messieurs a participé le 12 mai à Tours aux titres par équipes Nationale 3.

        L\'\'équipe s\'incline en 1/8e de finale 11-09 contre Déols.','lieu' => 'Tours','date' => '1336773600','miseenpage' => '0','screen' => 'PlotunaM6.JPG','joueur_du_we' => '0','debut_publication' => '1336255200','fin_publication' => '1337464800'),
        array('id' => '99','nom' => 'Résultats des interclubs nationaux','texte' => 'Trois équipes de l\'Amiens Sport TT ont participé aux interclubs nationaux les 12 et 13 mai 2012 à Joué les Tours.

        Félicitations à l\'équipe benjamins garçons qui termine 4e et remporte la médaille de bronze.
        Les benjamines terminent 5e.
        Les minimes garçons terminent 10e.

        Résultats détaillés des benjamins (Louis Chaerle, Gustav Defosse, Thomas Legris et Julien Martin) :
        - 1er de poule (victoire 3-0 contre MSNA Multi-Smash St Nicolas d\'Aliermont et 3-1 contre Cestas)
        - victoire 3-2 en 8e de finale contre  Avoine-Beaumont
        - victoire 3-1 en 1/4 de finale contre Laval
        - défaite 3-1 en 1/2 finale contre Cournon
        - défaite 3-0 en places 3 à 4 contre Tours

        Résultats détaillés des benjamines (Marine Huon, Eline Vanier et Elvire Vanier) :
        - 1er de poule (victoire 3-0 conre St Yrieix et 3-2 contre Appoigny)
        - victoire 3-0 en 1/8e de finale contre Sandillon
        - défaite 3-2 en 1/4 de finale contre Roncq
        - victoire 3-1 en  places 5 à 8 contre Saint-Maur
        - victoire 3-0 en places 5 à 6 contre Saint-Orens

        Résultats détaillés des minimes garçons (Paul Boinet, Andréï Deguingand et Tristan Hersent) :
        - 1er de poule (victoire 3-0 contre Paris XIII et défaite 3-1 contre Le Cannet)
        - défaite 3-1 en 1/8e de finale contre Nice
        - victoire 3-0 en places 9 à 16 contre Belleville
        - victoire 3-2 en places 9 à 12 contre Gond Poutouvre
        - défaite 3-1 en places 9 à 10 contre Paris XIII

        L\'équipe minimes filles était également qualifiée mais n\'a pas été engagée.','lieu' => 'Joué les Tours','date' => '1336860000','miseenpage' => '0','screen' => 'Medaille ASTT Interclubs.jpg','joueur_du_we' => '0','debut_publication' => '1336860000','fin_publication' => '1338415200'),
        array('id' => '97','nom' => 'Résultats des Interdépartementaux','texte' => 'Les interdépartementaux 2012 se sont déroulés le mardi 8 mai 2012 à Laon.

        La délégation de la Somme, composée de 16 joueurs de l\'Amiens Sport TT, s\'impose devant l\'Oise et l\'Aisne.

        Liste des participants amiénois :

        Benjamines : Elvire Vanier, Eline Vanier, Marine Huon
        Benjamins : Tristan Hersent, Léo Hersent, Gustav Defosse (Julien Martin, Louis Chaerle et Thomas Legris ont décliné la sélection)
        Minimes filles : Léa Huré, Clémence Steelandt (BF), Sophie Tran
        Minimes garçons : Andréï Deguingand, Paul Boinet, Paul Vandewoestyne
        Cadets 1 : Loïc Lefevre, Antoine Huon, Léo Bodinel, Floris Chartier','lieu' => 'Laon','date' => '1336428000','miseenpage' => '0','screen' => 'photo.JPG','joueur_du_we' => '0','debut_publication' => '1336428000','fin_publication' => '1337032800'),
        array('id' => '101','nom' => 'Résultats des championnats de Picardie','texte' => 'Julien Martin, champion de Picardie benjamins.
        Louis Chaerle, champion de Picardie minimes garçons.
        Antoine Huon, champion de Picardie cadets.
        Caroline Petitprez, championne de Picardie juniors filles et seniors dames.
        Malin Plotuna, champion de Picardie seniors messieurs.

        Elvire Vanier, vice-championne de Picardie benjamines
        Loïc Lefevre, vice-champion de Picardie cadets.

        Julien Martin et Louis Chaerle sont champions de Picardie en double minimes garçons.
        Raphaël Chatelain et Lucas Dubois sont champions de Picardie en double juniors garçons.
        Malin Plotuna et Raphaël Chatelain sont champions de Picardie en double seniors messieurs.

        Elvire Vanier et Eline Vanier sont vice-championnes de Picardie en double benjamines.
        Tristan Hersent et Léo Hersent sont vice-champions de Picardie en double benjamins.
        Elvire Vanier et Eline Vanier sont vice-championnes de Picardie en double minimes filles.
        Lucas Dubois et Loïc Lefevre sont vice-champions de Picardie en double cadets.
        Julia Flahaut et Léa Huré sont vice-championnes de Picardie en double cadettes.
        Caroline Petitprez et Julia Flahaut sont vice-championnes de Picardie en double juniors filles.

        25 joueurs de l\'Amiens Sport TT ont participé les 19 et 20 mai 2012 à Ham aux championnats de Picardie.

        Résultats détaillés :

        - Poussines (1) : Pauline Steelandt 3e.

        - Benjamines (5) : Elvire Vanier 2e, Marine Huon 4e, Eline Vanier 5e, Clémence Steelandt éliminée en poules, Pauline Steelandt éliminée en poules.
        Doubles : Vanier-Vanier 2e, Huon-Steelandt 3e, Steelandt-Grugeon 5e.

        - Benjamins (4) : Julien Martin 1er, Léo Hersent 3e, Léo Hersent 4e, Gustav Defosse éliminé en  poules.
        Doubles : Hersent-Hersent 2e, Martin-Defosse 3e.

        - Minimes Filles (5) : Léa Huré 3e, Elvire Vanier 5e, Eline Vanier 5e, Marine Huon éliminée en poules, Sophie Tran éliminée en poules.
        Doubles : Vanier-Vanier 2e, Huré-Huon 3e, Tran-Siab 5e.

        - Minimes garçons (6) : Louis Chaerle 1er, Andréï Deguingand 3e, Tristan Hersent 4e, Julien Martin 5e, Léo Hersent éliminé en poules, Paul Boinet éliminé en poules.
        Doubles : Martin-Chaerle 1er, Hersent-Hersent 5e, Deguingand-Da Silva 5e, Boinet-Saintenoy 5e.

        - Cadettes (2) : Julia Flahaut 4e, Léa Huré éliminée en poules.
        Doubles : Flahaut-Huré 2e.

        - Cadets (5) : Antoine Huon 1er, Loïc Lefevre 2e, Lucas Dubois 5e, Andréï Deguingand éliminé en poules, Léo Bodinel éliminé en poules.
        Doubles : Dubois-Lefevre 2e, Huon-Deguingand 5e.

        - Juniors filles (3) : Caroline Petitprez 1ère, Charline Grugeon 4e, Julia Flahaut 5e
        Doubles : Petitprez-Flahaut 2e, Grugeon-Lahouel 3e.

        - Juniors garçons (4) : Raphaël Chatelain 3e, Lucas Dubois éliminé en poules, Antoine Huon éliminé en poules, Loïc Lefevre éliminé en poules.
        Doubles : Chatelain-Dubois 1er, Lefevre-Huon 5e.

        - Seniors dames (2) : Caroline Petitprez 1ère, Julia Flahaut éliminée en poules.

        - Seniors messieurs (8) : Malin Plotuna 1er, Raphaël Chatelain 4e, Yohan Lecomte 5e, Loïc Lefevre 9e, Alexandre Haigneré éliminé en poules,, Lucas Dubois éliminé en poules, Antoine Huon éliminé en poules, Vincent Rasselet (WO)
        Doubles : Plotuna-Chatelain 1er, Lecomte-Haigneré 5e','lieu' => 'Ham','date' => '1337464800','miseenpage' => '0','screen' => 'Picardie ASTT.JPG','joueur_du_we' => '0','debut_publication' => '1336946400','fin_publication' => '1338847200'),
        array('id' => '102','nom' => 'Championnats de France benjamin(e)s','texte' => 'Six joueurs de l\'Amiens Sport TT participeront du 1er au 3 juin aux championnats de France benjamin(e)s à Montceau les Mines : Léo Hersent, Tristan Hersent, Julien Martin et Louis Chaerle en benjamins, Eline Vanier et Elvire Vanier en benjamines.

        Bonne chance à tous !
        ','lieu' => 'Montceau les Mines','date' => '1338501600','miseenpage' => '0','screen' => 'Leo Hersent.JPG','joueur_du_we' => '0','debut_publication' => '1338069600','fin_publication' => '1340143200')
        );

        // `astt`.`Articles`
        $Articles = array(
        array('id' => '1','titre' => 'En souvenir de Stéphane Baert','sujet' => 'Tournoi Stéphane Baert 2011','date' => '1319752800','saison' => '2011-2012','link' => 's_baert.pdf'),
        array('id' => '2','titre' => 'Les pongistes à table','sujet' => 'Arbre de Noël de l\'Amiens Sport TT','date' => '1323820800','saison' => '2011-2012','link' => 'CP 22-12-11.pdf'),
        array('id' => '3','titre' => 'Le président retrouve le club','sujet' => 'Galette des rois','date' => '1326150000','saison' => '2011-2012','link' => 'president_is_back.pdf'),
        array('id' => '4','titre' => 'Un plateau de pongistes relevé','sujet' => 'Top Régional Détection 2012','date' => '1326240000','saison' => '2011-2012','link' => 'CP 11-01-12.pdf'),
        array('id' => '5','titre' => 'Premiers pas pongistes','sujet' => 'Premier Pas Pongiste 2012','date' => '1328050800','saison' => '2011-2012','link' => 'CP 01-02-12.pdf'),
        array('id' => '6','titre' => 'Les pongistes picards sport adapté en championnat','sujet' => 'Championnats de Picardie Sport Adapté','date' => '1330642800','saison' => '2011-2012','link' => 'CP 02-03-12.pdf'),
        array('id' => '7','titre' => 'Raphaël Chatelain franchit les frontières','sujet' => 'Présentation de Raphaël Chatelain','date' => '1332460800','saison' => '2011-2012','link' => 'CP 23-03-12.pdf'),
        array('id' => '8','titre' => 'L\'équipe de tennis de table du lycée Louis Thuilli','sujet' => 'Championnats de France UNSS','date' => '1333148400','saison' => '2011-2012','link' => 'Nouveau Document Microsoft Word.pdf')
        );

        // `astt`.`Commentaires`
        $Commentaires = array(
        array('id' => '1','auteur' => 'Bobby','club' => 'ASTT','date' => '1314831600','message' => 'Inauguration du livre d\'or de ce nouveau site.

        Ecrivez toutes vos impressions et remarques concernant le club ou le site !

        Bonne visite à tous.'),
        array('id' => '2','auteur' => 'Ch\'Bobby','club' => 'ASTT','date' => '1316462125','message' => 'Et bah alors, c\'est quoi le problème ?

        Ca marche bien ce livre d\'or, non ?'),
        array('id' => '3','auteur' => 'Ch\'Goup','club' => 'FRERE CACHER DE ZEMOUR','date' => '1316516285','message' => 'Oui maintenant ça  marche ,  Mais pas hier soir. LOL
        Vraiment super site , par contre petit problème de date dans l\'onglet "Derniers evenements" , c\'est inscrit en 2012 mais je pense que c\'était les evenements de 2011. Et si tu veux je peux te donner un résumé du tournoi de reprise de cette année. 
        Petite remarque perso , je n\'est pas de photo de moi qui apparaise dans la barre du haut ... quelle deception! mdr
        Vraiment bon travail Flo\' ! Bravo !!'),
        array('id' => '4','auteur' => 'Denis','club' => 'a les yeux qui saignent','date' => '1316634848','message' => 'C\'est beau, comme un top mi-distance canyen, le Shield. Tu as juste oublié d\'installer un correcteur automatique sur le livre d\'or.'),
        array('id' => '5','auteur' => 'Jojo','club' => 'astt','date' => '1316967040','message' => 'Joli ce site ! La grande classe meme :D'),
        array('id' => '6','auteur' => 'Ala-Eddine','club' => 'astt','date' => '1316969179','message' => 'C\'est quand le premier tour du criterium federal pour les cadets en departemental'),
        array('id' => '7','auteur' => 'Goup','club' => 'L\'informateur','date' => '1316970858','message' => 'Le Premier tour du criterium est dans 3 semaines ! '),
        array('id' => '8','auteur' => 'Bobby','club' => 'ASTT','date' => '1316987006','message' => 'Denis, je n\'ai pas 4 ans devant moi pour le livre d\'or... :o

        Je regarde pour les accents là, ensuite les actualités.

        Pour infos, \'derniers évènements\', il n\'y a pas d\'erreur de date, ils sont juste triés par ordre décroissant. Je vais changer ça également ;)'),
        array('id' => '9','auteur' => 'Portos','club' => 'Menard STT','date' => '1316988636','message' => 'Tu gères Bobby tkt.
        Faut mettre les classements à jour aussi!'),
        array('id' => '10','auteur' => 'Bobby','club' => '','date' => '1317075629','message' => 'Dès que j\'aurai le tableau ;)'),
        array('id' => '11','auteur' => 'Bobby','club' => 'ASTT','date' => '1317157450','message' => 'C\'est bon pour les caractères maintenant, ils devraient tous s\'afficher quel que soit votre navigateur et votre SE.

        J\'ai mis les résultats de ce WE en ligne, page équipe !'),
        array('id' => '12','auteur' => 'Bobby','club' => 'webmaster trop lent','date' => '1317244769','message' => 'Les classements et les équipes ont été mis à jour.

        Il se peut qu\'il manque certains joueurs ou certaines joueuses, cela sera corrigé dès que j\'aurai reçu les données correspondantes.

        Tous les résultats de match de championnat que j\'ai reçu sont en ligne.

        Je suis infiniment désolé d\'avoir osé prendre 2 jours de retard pour les poster.
        Il est vrai que ma seule raison de vivre est de développer et d\'administrer ce site pendant mon temps libre,
        aussi c\'est une faute grave d\'avoir tellement tardé...

        Merci pour vos encouragements et votre patience.'),
        array('id' => '13','auteur' => 'Arnaud','club' => '','date' => '1317369577','message' => 'Retour sur les plus belles performances du week-end du 24 et 25 septembre 2011 :
        - En N3 Messieurs, Lucas Dubois (16 – 1643 pts) bat Florent Cahagne (n°692 – 2151 pts) soit 508 points d’écart
        - En D3 Messieurs, Paul Boinet (5 – 591 pts) bat Morgane Demaie (9 – 938 pts) soit 347 points d’écart
        - En D2 Messieurs, Jeoffrey Stephan (8 – 898 pts) bat Guy Dournel (12 – 1239 pts) soit 341 points d’écart
        - En D2 Messieurs, Benoît Bonté (7 – 791 pts) bat Mickaël Val (10 – 1099 pts) soit 308 points d’écart
        - En N3 Messieurs, Vincent Rasselet (17 – 1766 pts) bat Julien Patte (20 – 2038 pts) soit 272 points d’écart
        - En D2 Messieurs, Benjamin Bathelot (7 – 789 pts) bat Marc Leroy (10 – 1014 pts) et Franck Accart (9 – 999 pts) soit 225 points d’écart et 210 points d’écart
        - En D3 Messieurs, Joffrey Hauw (6 – 691 pts) bat Philippe Hennelin (9 – 901 pts) soit 210 points d’écart
        - En D3 Messieurs, Ala-Edinne Chahir (6 – 697 pts) bat Philippe Hennelin (9 – 901 pts) soit 204 points d’écart
        - En R4 Messieurs, Tristan Hersent (10 – 1020 pts) bat Philippe Dourlens (12 – 1222 pts) soit 202 points d’écart'),
        array('id' => '14','auteur' => 'Dud','club' => '','date' => '1317382503','message' => 'C\'est bon ça....de la perf et encore de la perf'),
        array('id' => '15','auteur' => 'Jojo','club' => '','date' => '1317399063','message' => 'Lol un bon we tout ca !'),
        array('id' => '16','auteur' => 'Le Goup','club' => 'LES YEUX SAIGNANT','date' => '1317503733','message' => 'Mais qui vois-je dans la barre défilante des joueurs d\'Amiens , Mr Ludovic Delmarre apparait encore ?? Je ne me trompe pas de site  , ce n\'est pas le prototype du site d\'Abbeville de l\'an prochain ??? '),
        array('id' => '17','auteur' => 'Vince (Mr Fight)','club' => 'ASTT','date' => '1317575828','message' => '3 Aménois en terre inconnue ça donne ça !

        Mr Rass\' (moi) Mr Vandevoste et Lucas lover nous étions engagés pour le tournoi de Pacy. Gentillement accompagnés par Mr et Mme Dubois.

        Après s\'être perdu à Beauvais, pour aller à Rouen faut suivre Compiègne, j\'ai envie de dire normal on est logique chez moi (à Beauvais). On arriva à la salle à temps. Nous aussi "on était large"
        Entré dans la salle ou plutôt le four. A pacy on met le chauffage à fond pour pousser à la consommation.
        Bref après avoir vidé la buvette avec loulou on est passé à table, ou plutôt à la table. Conditions difficiles pour jouer; table / luminosité / balle blanche / reflets/ humidité et chaleur, bref la totale, mais bon on s\'adapte.
        Poule de 4 pour moi et loulou en non numéro, et donc poule de 3 pour Lucas !
        Un grand Lucas looser pour démarrer, il arrive pas à sortir de poule, mais c\'est pas grave il nous fera rêver plus tard.
        Louis passe à coté de la perf de la journée sur un 16 (1677) points, 3 balles de match au 4ème qu\'il perds 16-14.
        Je prends une race sur un jeune 18. Je l\'ai pas bien joué, j\'ai pas transpiré, mais j\'étais mouillé, je vous passe les détails.
        Louis finit 3ème de poule après une belle perf au fight sur un 14 (mené 5-1 à la belle il s\'impose 11-7)
        Je finis 2ème de poule, mais je suis pas loin de passer à la casserole. Après avoir mené 2-0 sur une 13 mes yeux ont accidentellement dérivé sur le décolleté, j\'ai vu double pendant les 2 sets suivants. Mais j\'ai réussi à décrocher à temps pour m\'imposer 3 sets à 2. Ben oui j\'ai bon goût je préfère finir par la belle 

        Loulou enchaîne directement avec la série -1500 et se retrouve en difficulté d\'entrée sur une minime classée 10. Il a failli à son tour succomber au coup de foudre, mais elle aura pas réussi à le faire craquer il l\'emporte à la belle, puis déroule sur le 10 et le 13. Il termine 1er de poule.
        Après 2h d\'attente, lucas céda ses jambes de plomb pour des jambes en bois flottés, plus légères, plus souples, plus performantes. il se retrouve encore une fois dans une poule de 3 avec un n°677 et un 15. Il livre une belle prestation sur le n° et bats le 15 sans trop forcer.
        "Si je le bats se sera pas Denis mon 2ème n°" m\'a t-il confié avant le match
        T\'inquiètes pas Lucas on aimerait tous taper dans le 1000, un jour, ça viendra !

        Je me retrouve dans une poule de 4, ou d\'entrée je me trouve en difficulté sur un 14 que je bats au fight moi aussi à la belle après avoir remonté 5-1; Merci loulou tu m\'as inspiré !
        Je finis 2ème de poule en battant un 14 et en perdant sèchement sur un 20 qui m\'aura bien fait transpirer quand même.

        En attente du lancement des 1/4 de finale de l\'open (organisation pas top) on aura eu le droit à un Dubois Lover en pleine action. 
        Il se trouva que ça tenue était assortie avec celle d\'une jeune demoiselle. Lucas à bon goût puisque encore une fois il à tapé dans l\'oeil de la seule joueuse n°.
        ça l\'aura au moins permis de se décrisper et d\'accrocher un 20 qu\'il perds 3-1 mais plus qu\'honorablement.
        Je perds ce même 20 à la belle dans l\'autre tableau, c\'est dommage je l\'emmène à la belle alors que j\'étais un peu claqué.
        J\'enchaîne avec un 18 que je bats 3-0 pour le tableau open.
        Il a pas rentré un top et à 6-2 au 3ème il a cassé sa raquette. Il avait envie d\'exploser du bois, heureusement Lucas était pas dans le coin.
        Pendant ce temps la Louis Vandevost (l\'imprimante imprimait pas les mots de plus de 9 lettres) perds à la belle sur un 15 qui jouait à la roulette. bois off avec 2 tenergy en max, il claquait tout a plat et grattait une balle sur trois.

        Je termine en 1/2 finale open sur le n°677. Une belle prestation puisque je perds 3-1 avec de superbes points, et les 3 premiers sets se sont joués aux avantages. il aurait pu prendre au moins 3 cartons mais bon c\'est lui qui m\'a finalement cartonné.

        Défaite en 1/2 finale des doubles pour Louis et Lucas et pour moi et mon coéquipier d\'un jour.

        Bilan final:
        _Lucas Lover: Victoire sur 15 et défaite sur 20/15/20/n°677 et 15€ (1/2double)
        _Loulou: Victoire sur 14/13/10/10 et défaite sur 16/18/15 et 15€ (1/2double)
        _Ch\'Rass: Victoire sur 13/14/14/14/18 et défaite sur 18/20/20/n°677 et 60€ (1/2 open + 1/2double)

        Au niveau du jeu on est plutôt satisfait, on a pris un peu d\'expérience et on a pas été loin de faire de la grosse perf.
        On est juste un peu déçu pour Lucas Lover qui aura pas réussi à chopper le numéro de la n°
        Mais surtout une bonne ambiance dans la voiture avec Papa/Maman Dub et les coupains :)'),
        array('id' => '18','auteur' => 'Le Vande','club' => 'ASTT','date' => '1317586586','message' => 'Bonne ambiance c\'était un bon tournoi le Rass\' resume tout, j\'ai un petit chagrin c\'est pour Lucas Lover mais il manque juste d\'experience. RDV pour le prochain tournoi les copains ;)'),
        array('id' => '20','auteur' => 'Ch\'Goup','club' => 'Frou-Frou','date' => '1317927348','message' => 'BRAVO VINCENT , VINCENT BRAVO !!!!! ;) mdr'),
        array('id' => '21','auteur' => 'La Mouche','club' => 'ASTT For ever','date' => '1318270860','message' => 'Après l\'homme qui a vu l\'homme qui a vu l\'homme qui a vu l\'ours, Flo Cahagne (n°692)qui a perdu Ch\'Dub (16) qui a perdu Chaplet (14) qui a perdu un 8 ... Question : Quel est le niveau actuel des numérotés ? Vous avez 4 heures ... 
        PLus sérieusement j\'ai apprécié la rebellion du Cahagne dimanche au score acquis, question d\'honneur !'),
        array('id' => '22','auteur' => 'Arnaud','club' => '','date' => '1318402123','message' => 'Retour sur les plus belles performances du week-end du 8 et 9 octobre 2011 :
        - En R1 Messieurs, Antoine Huon (12 – 1225 pts) bat Tony Dubeaux (15 – 1571 pts) soit 346 points d’écart
        - En D2 Messieurs, Benoît Bonté (7 - 791 pts) bat Benjamin Motte-Lacaze (10 – 1093 pts) soit 302 points d’écart
        - En D3 Messieurs, Ala-Edinne Chahir (6 – 697 pts) bat Jérôme Frère (9 – 977 pts) soit 280 points d’écart
        - En R3 Messieurs, Louis Chaerle (10 – 1049 pts) bat Enrique Caullier (13 – 1317 pts) soit 268 points d’écart
        - En D1 Messieurs, Geoffroy Gilot (11 – 1122 pts) bat Stéphane Ladent (13 – 1375 pts) soit 253 points d’écart
        - En D1 Messieurs, Léo Hersent (9 – 906 pts) bat Bruno Scozzesi (11 – 1143 pts) soit 237 points d’écart
        - En R3 Messieurs, Julien Martin (11 – 1112 pts) bat Julien Maucourant (13 – 1325 pts) soit 213 points d’écart
        - En D1 Messieurs, Louis Vandewoestyne (13 – 1332 pts) bat Benjamin Piction (15 – 1543 pts) soit 211 points d’écart'),
        array('id' => '23','auteur' => 'Alexandre','club' => '','date' => '1318855253','message' => 'Il y a même des résumés d\'indiv...mais où va-t-on??? Non, plus sérieusement c\'est simpa.
        '),
        array('id' => '24','auteur' => 'Ch\'Goup','club' => 'Le correcteur','date' => '1318868100','message' => 'Sympa avec un y comme Butterfly!
        Merci. '),
        array('id' => '25','auteur' => 'benitos vaqueros','club' => '','date' => '1318872970','message' => 'j\'aurais plutot dit sympas ch\'goup !!'),
        array('id' => '26','auteur' => 'Ch\'Goup','club' => '','date' => '1318878418','message' => 'Ouais , ou PathétYque !!! '),
        array('id' => '27','auteur' => 'Alexandre','club' => '','date' => '1318963305','message' => 'Mon doigt a dérapé.
        '),
        array('id' => '28','auteur' => 'Ch\'Goup','club' => '','date' => '1318972912','message' => 'J\'aime quand tu te justifie de la sorte !! :D
        SYMPA quand même de préciser. ;)'),
        array('id' => '29','auteur' => 'Bobby','club' => '','date' => '1318974750','message' => 'Moi j\'aime bien quand tu corriges l\'orthographe des autres, goup...'),
        array('id' => '30','auteur' => 'Ch\'Goup','club' => '','date' => '1319053717','message' => 'Moi j\'aime bien quand tu mets le site à jours ... Bobby ! ;) :P'),
        array('id' => '32','auteur' => 'Auteur incorrect','club' => '','date' => '1319581991','message' => 'Dans la vie, il y a des gens qui ont autre chose à penser que le ping tu sais ...'),
        array('id' => '33','auteur' => 'Arnaud','club' => '','date' => '1319615101','message' => 'Retour sur les plus belles performances du week-end du 22 et 23 octobre 2011 :
        - En R3 Messieurs, Louis Chaerle (10 – 1049 pts) bat Stéphane Gamard (13 – 1377 pts) soit 328 points d’écart
        - En D2 Messieurs, Benoît Bonté (7 – 791 pts) bat Sébastien Gueriel (10 – 1090 pts) soit 299 points d’écart
        - En R1 Messieurs, Antoine Huon (12 – 1225 pts) bat Laurent Duroyon (15 – 1518 pts) et Aymeric Sagnier (14 – 1491 pts) soit 293 points d’écart et 266 points d’écart
        - En D3 Messieurs, Pierre-Philippe Nadau (5 – 520 pts) bat Thibault Schorderet (7 – 787 pts) soit 267 points d’écart
        - En D1 Jeunes, Pierre-Philippe Nadau (5 – 520 pts) bat Lucas Hurel (7 – 780 pts) soit 260 points d’écart
        - En D2 Messieurs, Paul Vandewoestyne (8 – 843 pts) bat Sébastien Gueriel (10 – 1090 pts) soit 247 points d’écart
        - En R3 Messieurs, Julien Martin (11 – 1112 pts) bat Vincent Buignet (13 – 1331 pts) soit 219 points d’écart'),
        array('id' => '34','auteur' => 'Dud','club' => '','date' => '1319714453','message' => 'La moyenne d\'age est interéssante (attention les anciens:ca pousse derrière)'),
        array('id' => '35','auteur' => 'ppn','club' => 'astt','date' => '1319742645','message' => 'Je me suis fais deux 7.'),
        array('id' => '36','auteur' => 'Jojo','club' => 'astt','date' => '1319837092','message' => 'Bravo !'),
        array('id' => '37','auteur' => 'Mr Fight ','club' => '','date' => '1319838380','message' => 'la FFTT a créé un espace "licencié"
        pour accéder à vos données (résultats, historique de votre classement),
        ainsi que les résultats de nos équipes...
        C\'est plutôt sympa =)

        vous pouvez vous y inscrire ici : http://www.fftt.com/espacelicencie/
        '),
        array('id' => '38','auteur' => 'Alexandre Goupil','club' => '','date' => '1319880252','message' => 'Merci à tous pour votre participation. Plus de 50 participants pour rendre hommage à Stéphane. Tout les résultats et un petit résumé de Denis Chatelain (frère de la star Nicolas Chatelain :P )seront disponible dans les heures qui viennent ou demain. 
        Bonne journée à tous'),
        array('id' => '39','auteur' => 'Mr Fight ','club' => '','date' => '1319905667','message' => 'Merci à Ch\'goup, lolo, denis, aurélie, arnaud... et tous les autres organisateurs.
        La soirée était très bien organisée :) '),
        array('id' => '40','auteur' => 'Ch\'Goup','club' => 'PASSE-PARTOUT','date' => '1320060332','message' => 'Le club est ouvert aujourd\'hui , de 17H à 20h30. '),
        array('id' => '41','auteur' => 'Ch\'Goup','club' => 'L\'EQUIPE','date' => '1320095046','message' => 'Le club est fermé ce mardi 1er Novembre. Denis et Dud fête la toussain en famille et moi je digère ma crise de foie des bonbons d\'Halloween récupéré la veille ! '),
        array('id' => '42','auteur' => 'Ch\'Goup','club' => '','date' => '1320228406','message' => 'Le club est ouvert aujourd\'hui de 17h00 à 20h30.'),
        array('id' => '43','auteur' => 'Ch\'Goup','club' => 'RETARDATAIRE','date' => '1320238853','message' => 'Comptons plutôt sur 17h30 pour moi ! 
        En espèrant que Denis arrive avant. ;)'),
        array('id' => '44','auteur' => 'JCD LEOTT','club' => 'LEO LA GRANGE','date' => '1320241515','message' => 'OK pour mes plus beaux points.
        A projeter sur le mur l\'année prochaine
        Accrochez vous bien, va y avoir du sport....
        Salut les Tchiots Pd de l\'Astt!'),
        array('id' => '46','auteur' => 'Dud','club' => '','date' => '1320420203','message' => 'Coupe du monde:
        L\'horaire est officiel RDV: le samedi 12 novembre à 9h45 devant le lycée louis thuillier (soyez à l\'heure!!!!!!!!!!)'),
        array('id' => '47','auteur' => 'Bobby','club' => 'ASTT','date' => '1320447620','message' => 'Je ne sais toujours pas si je prends le bus samedi prochain...
        Ou si le métro suffira.'),
        array('id' => '48','auteur' => 'PPN','club' => 'ASTT','date' => '1320688888','message' => 'J\\\'ai gagner contre un 9,un 7et un6 mais je perds un 10 à la bel,Tôôôôôôôôôôôôô!J\\\'espère être le joueur du week-end.'),
        array('id' => '49','auteur' => 'Jojo','club' => 'ASTT','date' => '1320775438','message' => 'Ils sont cool tes exploits, mais note-les dans ton livre intime plutôt...'),
        array('id' => '50','auteur' => 'Le Goup','club' => 'Soutient les jeunes','date' => '1320790496','message' => 'Non PP , fait les partager a tout le monde. C\\\\\\\'est bien , tu progresses ... continu ! :)'),
        array('id' => '51','auteur' => 'Bobby','club' => 'Places Coupe du Monde','date' => '1320794571','message' => 'Coucou !

        J\\\'ai peut-être un petit sauvetage pour ceux qui cherchent encore une place pour la coupe du monde, avec le club de Paris XIII où je m\\\'entraîne...

        Ils viennent de m\\\'envoyer un mail pour des places de dernière minute.

        Je ne promet pas que le jour soit le \\"bon\\" (samedi), ni qu\\\'il en reste encore.
        Mais je veux bien demander, si certains en recherchent encore.

        Me contacter TRES rapidement par mail :
        flo.schild@wanadoo.fr

        A samedi,
        Florent.'),
        array('id' => '52','auteur' => 'Arnaud','club' => '','date' => '1320823885','message' => 'Retour sur les plus belles performances du week-end du 5 et 6 novembre 2011 :
        - En D2 Messieurs, Pierre-Philippe Nadau (5 – 520 pts) bat Jean-François Obry (9 – 940 pts) soit 420 points d’écart
        - En N3 Messieurs, Lucas Dubois (16 – 1643 pts) bat Kokou Agbomson (20 – 2003 pts) soit 360 points d’écart
        - En R3 Messieurs, Valentin Fendorf (14 – 1410 pts) bat Gaudéric Lapo (17 – 1711 pts) soit 301 points d’écart
        - En D2 Messieurs, Benoît Bonté (7 – 791 pts) bat Julien Wiart (10 – 1092 pts) soit 301 points d’écart
        - En R3 Messieurs, Andréï Deguingand (10 – 1070 pts) bat Mathieu Dubourdeaux (13 – 1331 pts) soit 261 points d’écart
        - En D2 Messieurs, Olivier Cocquet (7 – 729 pts) bat Jean-François Obry (9 – 940 pts) soit 211 points d’écart'),
        array('id' => '53','auteur' => 'Alexandre Goupil','club' => 'DO RE MI FA SOL LA SI DO','date' => '1320957973','message' => 'J\\\\\\\'ai les clefs du club pour une ouverture le 11 Novembre 2011 à partir de 17H30. 
        A demain.'),
        array('id' => '54','auteur' => 'Alexandre Goupil','club' => '','date' => '1321003701','message' => 'Souhaite un très Bon anniversaire à Christophe Harlé !!!!!!!!!! :D'),
        array('id' => '55','auteur' => 'Denis C','club' => 'Hannibal lecteur','date' => '1321005424','message' => 'Très bon résumés de Jeoffrey STEPHAN et Hugo BOUTEILLER. Oui messieurs, ça c\\\'est du tennis de table! 
        J\\\'attends toujours le résumé de Bertrand B. capitaine de R3. Peut-être surmené par le boulot: c\\\'est vrai qu\\\'en ce moment il y a le master de tennis à Bercy.
        Et sinon, Happy birthday Dudu.'),
        array('id' => '56','auteur' => 'JoJo','club' => 'ASTT','date' => '1321047774','message' => 'Bon anniv\\\' Dudu alors !'),
        array('id' => '57','auteur' => 'Dud','club' => '','date' => '1321214382','message' => 'Belle réussite cette coupe du monde à Paris ( a part l\'interruption pour le projecteur......)
        Merci au club pour le déplacement en bus (Denis tu sais à l\'entrée ils vendaient des places au marché noir.....dommage!!!!)'),
        array('id' => '59','auteur' => 'Tibo moll','club' => '','date' => '1321385790','message' => '+1 dudu :)'),
        array('id' => '61','auteur' => 'Denis C','club' => 'Merci Bernard','date' => '1321874176','message' => 'Merci Bertrand B pour cet excellent résumé. Probablement rédigé durant ton match contre Grégoire Lambert, ce qui doit expliquer la dérouillée que tu as prise.'),
        array('id' => '62','auteur' => 'Benjamin B','club' => '','date' => '1322073861','message' => 'Il n\'y a pas la contre de la semaine ? je pense que c\'est à instaurer! Cette semaine il y a peut être un duel entre M.Henon et M.Bathelot Sr.'),
        array('id' => '63','auteur' => 'Arnaud','club' => '','date' => '1322141147','message' => 'Retour sur les plus belles performances du week-end du 19 et 20 novembre 2011 :
        - En N2 Dames, Charline Grugeon (12 – 1266 pts) bat Amandine Bauduin (n°188 – 1719 pts) soit 453 points d’écart
        - En N3 Messieurs, Lucas Dubois (16 – 1643 pts) bat Yaacov Haik (n°899 – 2092 pts) soit 449 points d’écart
        - En N3 Messieurs, Maxime Blatrix (18 – 1862 pts) bat Axel Servais-Laval (n°422 – 2263 pts) soit 401 points d’écart
        - En R3 Messieurs, Julien Martin (11 – 1112 pts) bat Gérald Lagrele (14 – 1408 pts) et Eric Bosger (13 – 1332 pts) soit 296 points d’écart et 220 points d’écart 
        - En N3 Messieurs, Vincent Rasselet (17 – 1766 pts) bat Yoann Dekowski-Richard (20 – 2056 pts) soit 290 points d’écart
        - En R3 Messieurs, Andréï Deguingand (10 – 1070 pts) bat Thierry Lefevre (13 – 1360 pts) soit 290 points d’écart
        - En R3 Messieurs, Louis Chaerle (10 – 1049 pts) bat Eric Bosger (13 – 1332 pts) soit 283 points
        - En N2 Dames, Caroline Petitprez (14 – 1477 pts) bat Amandine Bauduin (n°188 – 1719 pts) soit 242 points d’écart
        - En D2 Messieurs, Benjamin Bathelot (7 – 789 pts) bat Bertrand Tricottet (10 – 1025 pts) soit 236 points d’écart
        - En R3 Messieurs, Loïc Lefevre (12 – 1285 pts) bat Patrice Vanicat (14 – 1486 pts) soit 201 points d’écart'),
        array('id' => '64','auteur' => 'Bertrand','club' => 'Astt','date' => '1322389165','message' => 'Il est 11H20 Dimanche, le compte rendu de la R1 n\'est pas encore en ligne.
        Mais que fait M. Chatelain ?'),
        array('id' => '65','auteur' => 'Catherine','club' => '','date' => '1322417865','message' => 'Bravo Hélène pour les commentaires ! C\'est très agréable à lire.'),
        array('id' => '66','auteur' => 'Denis C','club' => 'Triathlète','date' => '1322481351','message' => '11h20, c\'est l\'heure à laquelle je suis rentré de mon footing de 35 km avec Philippe L\'HOTE; puis j\'ai enchainé sur 180 km à vélo et 15 km de natation. C\'est pour ça que le résumé n\'a été posté et mis en ligne qu\'à 16 heures ce dimanche.'),
        array('id' => '67','auteur' => 'Dud','club' => '','date' => '1322507844','message' => 'YES...on se maintient en N3 (bravo à toute l\'équipe)
        Allez la R1 encore une petite marche et c\'est bon...(la R3,la R4 aussi....)
        Du suspense lors de la dernière journée....'),
        array('id' => '68','auteur' => 'Tin','club' => '','date' => '1322680842','message' => '+1 Dudu !'),
        array('id' => '69','auteur' => 'Arnaud','club' => '','date' => '1322729549','message' => 'Retour sur les plus belles performances du week-end du 26 et 27 novembre 2011 :
        - En D2 Messieurs, Pierre-Philippe Nadau (5 – 520 pts) bat Michel Glanddier (10 – 1060 pts) soit 540 points d’écart
        - En D1 Messieurs, Kévin Couturier (10 – 1026 pts) bat Loïc Sauve (14 – 1428 pts) soit 402 points d’écart
        - En N2 Messieurs, Raphaël Chatelain (20 – 2011 pts) bat Cornel Stoica (n°354 – 2308 pts) soit 297 points d’écart
        - En Pré-Nationale Dames, Marion Berthelot (10 – 1001 pts) bat Véronique Repesse (12 – 1290 pts) soit 289 points d’écart
        - En R3 Messieurs, François Herly (15 – 1573 pts) bat Jean-Michel Leroy (18 – 1852 pts) soit 279 points d’écart
        - En R3 Messieurs, Julien Martin (11 – 1112 pts) bat Hoc Tan Kim (13 – 1341 pts) soit 229 points d’écart
        - En R3 Messieurs, Louis Chaerle (10 – 1049 pts) bat David Jean-Louis (12 – 1255 pts) soit 206 points d’écart'),
        array('id' => '70','auteur' => 'Bobby','club' => '','date' => '1322730137','message' => 'Si même Flipper et Franky se mettent à faire des perfs\' maintenant... On va remonter en Pro B !'),
        array('id' => '71','auteur' => 'POLO,B','club' => '','date' => '1322985583','message' => 'beaucoup de perf au critériums 823,789,706,782,789 dont une défaite 830 a la belle je mene 2a0 tooot'),
        array('id' => '72','auteur' => 'Ala-Eddine','club' => 'astt','date' => '1323009529','message' => 'Je gagne cedric neel qui est 11 et care clément qui est 10 et je perd léo bodinel 3-2 a la belle :('),
        array('id' => '73','auteur' => 'Alexandre Goupil','club' => 'Forges-hôtel','date' => '1323022717','message' => 'Bien joué Ala-Edine , par contre perde 3-2 a la belle c\'est logique ?! ;)'),
        array('id' => '74','auteur' => 'Ala-Eddine','club' => 'astt','date' => '1323024077','message' => 'merci et toi ta fais quoi ch\'goup?'),
        array('id' => '75','auteur' => 'Ch\'goup','club' => 'J\'ai un métier moi monsieur','date' => '1323027320','message' => 'Je suis en stage cher ami en se moment ... Je n\'ai donc point pu faire ce tour d\'indiv ;).... Dommage ! '),
        array('id' => '76','auteur' => 'Ala-Eddine','club' => 'astt','date' => '1323027723','message' => 'de toute façon tu serais monté en régionale et ta pas voulu les ridiculiser :)'),
        array('id' => '77','auteur' => 'Ch\'Goup','club' => 'Il t\'en reste un peu','date' => '1323030752','message' => 'Merci Ala-Eddine , tu as tout à fait raison pour le coup !! ;)'),
        array('id' => '78','auteur' => 'Benjamin B','club' => '','date' => '1323100403','message' => 'Souhaite souligner la fin d\'une ère chez la famille Chatelain,le fils a dépassé le père  sur le classement mensuel(n°843 contre 870 écart de 8,75 pts)Tout va se jouer sur le critérium et la dernière journée de championnat pour la place sur la licence. ;) '),
        array('id' => '79','auteur' => 'Ch\'Goup','club' => 'Des sacrés numéro','date' => '1323114588','message' => 'Houlala , cela sent le gros fight familial .... C\'est bon ça !!!!! '),
        array('id' => '80','auteur' => 'Dud','club' => 'quelle belle surprise','date' => '1323117332','message' => 'Quelle joie de revenir d\'un tour de critérium, et de s\'apercevoir que la salle n\'a pas été débarassée des marqueurs,chaises,tables de marqueurs et des bancs.
        Merci à tous les auteurs du dimanche après-midi pour ce moment de pure bonheur!!!!!!!!!!!!!!!'),
        array('id' => '81','auteur' => 'Denis C','club' => 'Numéro vert','date' => '1323161362','message' => 'Souhaite souligner au père de Benjamin B que ce dernier semble plus consulter le classement FFTT que ses bouquins de comptabilité.
        Félicite également Bertrand B pour sa belle 7ème place aux individuels.'),
        array('id' => '84','auteur' => 'Bobby','club' => 'Les Cénobites Tranquilles','date' => '1323523488','message' => 'Bonne chance à toutes les équipes pour cette dernière journée !

        Et Tchouga particulier pour les équipes M3, M4, M6 pour la montée éventuelle, et pour les équipes M1 et F2 pour le maintien !!'),
        array('id' => '83','auteur' => 'Ch\'Goup','club' => 'La tristesse','date' => '1323513106','message' => 'Je souhaite bonne chance à toutes les équipes de l\'Amiens Sport TT pour cette dernière journée de championnat pour la 1ere phase. Mais , c\'est avec tristesse que je suivrais les résultats à distance car je ne pourrai être présent. '),
        array('id' => '85','auteur' => 'Arnaud','club' => '','date' => '1323849455','message' => 'Retour sur les plus belles performances du week-end du 10 et 11 décembre 2011 :
        - En D2 Messieurs, Grégory Chhe (7 – 738 pts) bat Jean-Paul Descobert (12 – 1229 pts) soit 491 points d’écart
        - En R3 Messieurs, Julien Martin (11 – 1112 pts) bat Mickaël Bacq (15 – 1523 pts), Davy Gilleron (14 – 1447 pts) et Dominique Houant (13 -1358 pts) soit 411 points, 335 points et 246 points d’écart
        - En D2 Messieurs, Paul Boinet (5 – 591 pts) bat Charles Ways (9 – 936 pts) soit 345 points d’écart
        - En R3 Messieurs, Louis Chaerle (10 – 1049 pts) bat Aimé Bienvenu (13 -1325 pts) et Vincent Desestre (13 - 1310 pts) soit 276 points et 261 points d’écart
        - En R3 Messieurs, Loïc Lefevre (12 – 1285 pts) bat Romuald Monteiro (15 – 1545 pts) soit 260 points d’écart
        - En D1 Messieurs, Benjamin Bathelot (7 – 789 pts) bat Hugues Croutelle (10 – 1023 pts) et Olivier Demolder (10 – 1005 pts) soit 234 points et 216 points d’écart
        - En D2 Messieurs, Olivier Cocquet (7 – 729 pts) bat Charles Ways (9 – 936 pts) soit 207 points d’écart'),
        array('id' => '86','auteur' => 'Le Goup','club' => 'IS BACK','date' => '1324047329','message' => 'Voilà , les vacances débutent. Le Goup est de retour à l\'ASTT !!! :D'),
        array('id' => '87','auteur' => 'Dud','club' => '','date' => '1324049244','message' => 'Pour nous fini les vacances!!!!!!!!!!
        Non je déconne, tu nous manquais le goup........'),
        array('id' => '88','auteur' => 'Ch Goup','club' => '','date' => '1324077021','message' => 'HAHA ! :P
        Ca fait plaisir , vous m\'avez énormément manqué aussi ........ :)'),
        array('id' => '96','auteur' => 'Alexandre Goupil','club' => '','date' => '1324887240','message' => 'Ouverture du club ce Lundi 26 décembre à partir de 17H.'),
        array('id' => '97','auteur' => 'Dud','club' => '','date' => '1324944570','message' => 'Mardi 27,tous à vos raquettes de 15h à 17h à la salle,entrainement intensif pour les motivés..................'),
        array('id' => '98','auteur' => 'Ppn','club' => '','date' => '1325065066','message' => 'Le club est-il ouvert aujourd\'hui?'),
        array('id' => '105','auteur' => 'Alexandre Goupil','club' => 'Repos','date' => '1325195177','message' => 'Vendredi 30 décembre 2011 , salle fermé à priori ... je n\'ouvre pas ... si une autre personne ayant les clefs peut ouvrir qui fasse un signe sur le Livre d\'Or ! =)'),
        array('id' => '100','auteur' => 'Alexandre Goupil','club' => 'Aucuns repis','date' => '1325068651','message' => 'Le club ouvrira ses portes à partir de 17H , ce mercredi 28 décembre.'),
        array('id' => '101','auteur' => 'Ppn','club' => '','date' => '1325075864','message' => 'Je te remercie Ch\'Goup.'),
        array('id' => '102','auteur' => 'remplaçant','club' => '','date' => '1325095928','message' => 'la salle est elle ouverte le 29/12 merci à l\'avance'),
        array('id' => '110','auteur' => 'Dud','club' => '','date' => '1325596856','message' => 'On a reçu les engagements pour la coupe de la Somme.
        Meme principe que les années prédédentes.
        Inscriptions au club + 10€ par équipes à l\'ordre du CD.Somme.
        Limite des inscriptions le 28 janvier: 1er tour le 24 février.
        Bonne chance à tous.'),
        array('id' => '127','auteur' => 'Denis C','club' => 'Impressed','date' => '1327488080','message' => 'Bravo à Hélène CARLIE: 3 Victoires et 2 résumés (N3 & pré-Nat) dans le week-end. C\'est pas beautiful ça?'),
        array('id' => '128','auteur' => 'Arnaud','club' => '','date' => '1327502304','message' => 'Retour sur les plus belles performances du week-end du 21 et 22 janvier 2012 :
        - En R3 Messieurs, Julien Martin (12 – 1227 pts) bat Frédéric Bousignière (15 – 1543 pts) soit 316 points d’écart
        - En D3 Messieurs, Florian Beaufrère (6 – 693 pts) bat Jérôme Frere (9 – 991 pts) soit 298 points d’écart
        - En N3 Dames, Julia Flahaut (9 – 957 pts) bat Célia Chauvris (11 – 1195 pts) soit 238 points d’écart
        - En D1 Messieurs, Xavier Vaucheret (9 – 950 pts) bat Cédric Bloquet (11 – 1183 pts) soit 233 points d’écart
        - En N3 Messieurs, Maxime Blatrix (18 – 1896 pts) bat Philippe Thieuleux (n°821 – 2105 pts) soit 209 points d’écart'),
        array('id' => '160','auteur' => 'B MARYSSE','club' => '','date' => '1329757980','message' => 'OK Pour samedi aprés midi moi et claire à bientot bruno'),
        array('id' => '173','auteur' => 'DIDIER HUON','club' => '','date' => '1330262444','message' => 'ET POUR  N OUBLIER PERSONNE UN GRAND MERCI AUSSI A DENIS'),
        array('id' => '92','auteur' => 'remplaçant ','club' => '','date' => '1324733930','message' => 'bon noel à tous et bonne année 2012'),
        array('id' => '93','auteur' => 'Le Goup','club' => 'L\'original ','date' => '1324759919','message' => 'Je souhaite un excellent réveillon et un merveilleux Noel à tous les pongistes Amiénois et Picards , bien sur aux autres également! :D'),
        array('id' => '94','auteur' => 'Tibo Moll','club' => '','date' => '1324777850','message' => 'MERRY X-MAS !'),
        array('id' => '133','auteur' => 'La mouche','club' => 'ASTT','date' => '1327926442','message' => 'Pis la santé parce que la santé c\'est important quand la santé est là le reste suit hein !!!'),
        array('id' => '134','auteur' => 'Denis C','club' => 'I\'m bad','date' => '1327928029','message' => 'Un petit Badminton la semaine prochaine monsieur Mouche?
        Mais comme tu pourras le constater ce joli sport a également été contaminé par le Benoitvaquiérisme: http://www.youtube.com/watch?v=pV5MveuRaB8&feature=related
        '),
        array('id' => '135','auteur' => 'Arnaud','club' => '','date' => '1328081593','message' => 'Retour sur les plus belles performances du week-end du 28 et 29 janvier 2012 :
        - En R1 Messieurs, Julien Martin (12 – 1227 pts) bat Julian Bouchoir (16 – 1680 pts) soit 453 points d’écart
        - En N3 Messieurs, Benoît Vaquier (15 – 1583 pts) bat Christopher Frichet (20 – 2007 pts)  et Guillaume Maucourant (18 – 1829 pts) soit 424 points d’écart et 246 points d’écart
        - En R1 Messieurs, Antoine Huon (13 – 1349 pts) bat Alexis Roseiller (17 – 1709 pts) et Julian Bouchoir (16 – 1680 pts) soit 360 points d’écart et 331 points d’écart
        - En R3 Messieurs, Louis Chaerle (11 – 1187 pts) bat Elie Chamillard (14 – 1477 pts) soit 290 points d’écart
        - En R1 Messieurs, Louis Vandewoestyne (14 – 1469 pts) bat Sylvain Heyvaert (17 – 1751 pts) soit 282 points d’écart
        - En R3 Messieurs, Arnaud Feraud (12 – 1295 pts) bat Laurent Dournel (15 – 1556 pts) soit 261 points d’écart
        - En D2 Messieurs, Paul Vandewoestyne (9 – 900 pts) bat Axel Cherville (11 – 1147 pts) Aurélien Gerin (11 – 1138 pts) soit 247 points d’écart et 238 points d’écart
        - En D2 Messieurs, Ala-Edinne Chahir (9 – 914 pts) bat Benjamin Motte-Lacaze (11 – 1133 pts) soit 219 points d’écart
        - En D2 Messieurs, Floris Chartier (9 – 930 pts) bat Aurélien Gerin (11 – 1138 pts) soit 208 points d’écart'),
        array('id' => '104','auteur' => 'Alexandre Goupil','club' => '','date' => '1325101499','message' => 'Oui , la salle sera ouverte ce Jeudi 29 Décembre. A partir de 15H pour les motivés de l\'entrainement dirigé Dudien et 17H pour les autres. '),
        array('id' => '107','auteur' => 'Dud','club' => '','date' => '1325424622','message' => 'Bonne année 2012 à tous.
        Fini les chocolats et autres gourmandises!!!!!!
        Retour au ping dès lundi avec un entrainement club dirigé de 17h à19h.
        A vos raquettes'),
        array('id' => '126','auteur' => 'Alexandre Goupil','club' => 'Arbitre national','date' => '1327004963','message' => 'Je souhaite bonne chance aux joueurs d\'Amiens Sport Tennis de Table pour ce week-end de championnat par équipe. Attention aux collages des plaques ... surtout aux filles , ne pas s\'enlever le verni a ongle avec le Dit Solvant qui n\'est pas très apprécié en ce moment ... surtout dans la zone entre Amiens et le Creuso.'),
        array('id' => '138','auteur' => 'remplaçant ','club' => '','date' => '1328554801','message' => 'pour samedi, je serai à la salle à 13h45 j\'aimerai ne pas prendre ma voiture. A bientot bonne semaine '),
        array('id' => '140','auteur' => 'Corinne','club' => '','date' => '1328797953','message' => 'Bonjour,

        Vous n\'avez pas renseigné la rubrique Entraînement - horaires.

        Merci'),
        array('id' => '145','auteur' => 'Bobby','club' => 'ASTT','date' => '1328981765','message' => 'Bonjour,

        En effet, c\'est résolu.

        Merci de l\'avoir signalé.'),
        array('id' => '146','auteur' => 'criticman','club' => '','date' => '1329044885','message' => 'mauvais point pour le staff astt
        jaja n\'a pas suffit pour faire gagner l\'eq 2M
        par contre par son abscence en eq 1 il a fait perdre celle ci'),
        array('id' => '147','auteur' => 'criticman','club' => '','date' => '1329046116','message' => 'désolé pour la faute
        absence et non abscence'),
        array('id' => '148','auteur' => 'Denis C','club' => '','date' => '1329126700','message' => 'Non Criticman, ça valait la peine de tenter le coup. La défaite de l\'équipe 1 ne portera pas à conséquences.
        Sinon: "n\'a pas suffi", c\'est mieux.
        Tu peux retirer le "t" et ton masque Goupil. On t\'a reconnu...'),
        array('id' => '149','auteur' => 'Alexandre Goupil','club' => 'Réfléchir','date' => '1329129835','message' => 'Heu Denis , merci de ne pas m\'accuser de ces conneries mi sur le livre d\'or .... ce fameux Criticman , ce n\'est pas moi , aucuns interets à écrire ça.'),
        array('id' => '150','auteur' => 'Bertrand','club' => '','date' => '1329133718','message' => 'Je pense également que c\'était le bon choix pour essayer d\'assurer le maintient de l\'équipe 2.

        Cela n\'est pas passé loin et l\'équipe 1 a toujours son destin entre les mains.'),
        array('id' => '151','auteur' => 'Denis C','club' => 'Sorryman','date' => '1329142313','message' => 'Un anonymous se faisant passer pour Goupil alors. Un imposteur vraiment diabolique...
        Peut-être son voisin en classe de Littérature comparée?'),
        array('id' => '152','auteur' => 'Ch\'Goup','club' => 'It\'s nothingMan','date' => '1329214595','message' => 'Merci Denis , en effet ... un imposteur! De nos jours , c\'est dommage de voir ça ... Je mènne l\'enquéte ! ;)'),
        array('id' => '162','auteur' => 'Dud','club' => '','date' => '1329852904','message' => 'samedi 25 février
        Championnat de Picardie de sport adapté.
        Le club recherche des volontaires pour arbitrer les parties,petits ou grands sont les bienvenus....
        Merci d\'avance'),
        array('id' => '155','auteur' => 'Bobby','club' => 'ASTT','date' => '1329256699','message' => 'J\'ai son adresse IP si tu veux jouer le détective, alexandre.

        3e journée dommage-presque pour moi...
        Ou comment passer à côté d\'une perf\' à 500pts en perdant 11-09 à la belle après avoir mené 2-0, puis d\'une à 400pts en perdant 11-08 à la belle après avoir mené 2-1...

        Fail.'),
        array('id' => '156','auteur' => 'Arnaud','club' => '','date' => '1329295436','message' => 'Retour sur les plus belles performances du week-end du 11 et 12 février 2012 :
        - En R1 Messieurs, Antoine Huon (13 – 1349 pts) bat Pascal Perrin (17 – 1750 pts) et Valentin Carme (16 – 1625 pts) soit 401 pts d’écart et 276 points d’écart
        - En R3 Messieurs, Julien Martin (12 – 1227 pts) bat Frédéric Bédier (15 – 1561 pts) et Gérard Dacheux (14 – 1435 pts) soit 334 points d’écart et 208 points d’écart
        - En R3 Messieurs, Cyril De Catheu (12 – 1231 pts) bat Gérald Patte (15 – 1535 pts) soit 304 points d’écart
        - En R2 Messieurs, Louis Vandewoestyne (14 – 1469 pts) bat Boris Faity (17 – 1752 pts) soit 283 points d’écart
        - En R3 Messieurs, Louis Chaerle (11 – 1187 pts) bat Alain Caumartin (14 – 1468 pts) et Sylvain Coffinier (14 – 1427 pts) soit 281 points d’écart et 240 points d’écart
        - En R3 Messieurs, Léo Bodinel (11 – 1160 pts) bat Frédéric Martin (14 – 1412 pts) soit 252 points d’écart
        - En D2 Messieurs, Richard Tran (7 – 731 pts) bat Pierre Minard (9 – 953 pts) soit 222 points d’écart'),
        array('id' => '157','auteur' => 'La Mouche','club' => 'Labaume au coeur','date' => '1329302517','message' => 'Salut les pongeux !!! Merci à l\'équipe 6 d\'avoir remporté sa rencontre pour sauver l\'honneur du club, week-end noir question résultats mais du bon fight apparemment, alors courage pour la suite de la phase, battez-vous ! See U soon !'),
        array('id' => '158','auteur' => 'Criticman','club' => 'Marié à ma prof de français','date' => '1329429072','message' => 'Mauvais pour le staff revers ... 
        Aujourd\'hui Denis , ne m\'a pas impressionné par la plaque qu\'il a en revers. Je lui est plutôt mi des tatanes , d\'ailleurs ce n\'est pas lui qui as gagné la montante de Dud ... 
        Et puis au final , il ne gagne pas les matchs , mais ses adversaires les perdent! 
        A bon entendeur... ;-)'),
        array('id' => '163','auteur' => 'Arnaud','club' => '','date' => '1329900780','message' => 'Retour sur les plus belles performances du week-end du 18 et 19 février 2012 :
        - En D2 Messieurs, Benoît Bonté (8 – 862 pts) bat Rodolphe Vagner (12 – 1250 pts) soit 388 points
        - En D2 Messieurs, Pierre-Philippe Nadau (6 – 695 pts) bat Laurent Poix (10 – 1020 pts) soit 325 points d’écart
        - En R3 Messieurs, Ali-Combo-Combo (13 – 1353 pts) bat Christophe Caffin (16 – 1631 pts) soit 278 points d’écart
        - En R3 Messieurs, Julien Martin (12 – 1227 pts) bat Christophe Dupont (14 – 1464 pts) soit 237 points d’écart
        - En R3 Messieurs, Cyril De Catheu (12 – 1231 pts) bat Jérôme Dupuis (14 – 1456 pts) soit 225 points d’écart
        - En R1 Messieurs, Antoine Huon (13 – 1349 pts) bat Bérenger Ambeza (15 – 1569 pts) soit 220 points d’écart
        - En R3 Messieurs, Louis Chaerle (11 – 1187 pts) bat Romuald Peschke (13 – 1390 pts) soit 203 points d’écart'),
        array('id' => '170','auteur' => 'Goupss','club' => 'Coupe de la Somme','date' => '1330195942','message' => 'Victoire de l\'équipe Vaquero/Goup -->4-1 contre St Fuscien.
        Victoire de l\'équipe Boinet/Feraud --> 4-1 contre St Fuscien.'),
        array('id' => '171','auteur' => 'ppn','club' => 'amienssport tt','date' => '1330244571','message' => 'Bien jouer Amiens'),
        array('id' => '172','auteur' => 'Denis C','club' => 'Muchos gratias','date' => '1330257381','message' => 'Remercie: Lucas Dubois, Andréï Deguingand, Benjamin Bathelot, Richard Tran, Sophie Tran, Laurent Vandewoestyne, Paul Bodinel, Léo Bodinel, Didier Huon, Antoine Huon, Marine Huon, Bertrand Bathelot, Bruno Marysse, Claire Marysse, Loïc Lefevre, Paul Boinet, Philippe Riquart, Aurélie Neel, Christophe Harlé, Clémence Steelandt, Pierre-Philippe Nadeau, Yohan Leconte, Marie-Jeanne Volkamer, Xavier Vaucheret et Dany Bourré, pour leur participation à l\'organisation du championnat de picardie sport adapté ce week-end. ça fait plaisir.'),
        array('id' => '175','auteur' => 'Benjamin B','club' => '','date' => '1330288395','message' => 'Un grand merci à Denis qui à dirigé ça d\'une main de maître. Journée et compétition très agréable.'),
        array('id' => '179','auteur' => 'Dud','club' => '','date' => '1330348200','message' => 'Bien joué Dedeuche pour samedi dernier....
        N\'oublie pas mardi 27 février 7h30 à la salle...ça pique...'),
        array('id' => '1773','auteur' => 'Arnaud','club' => '','date' => '1330854062','message' => 'Retour sur la plus belle performance du samedi 3 mars 2012 : 
        - En N3 Messieurs, Lucas Dubois (17 – 1710 pts) bat David Ramos (n°490 – 2226 pts) soit 516 points d’écart
        '),
        array('id' => '2488','auteur' => 'Bobby','club' => 'ASTT','date' => '1330990367','message' => 'Bonsoir,

        je suspend momentanément le livre d\'or le temps de mettre en place un blocage aux robots qui le polluent si désagréablement.

        Merci de votre compréhension,

        Florent.'),
        array('id' => '2491','auteur' => 'Alexandre Goupil','club' => 'A dream','date' => '1335298073','message' => 'Tout Amiens Sport en rêvait , Flo Schild l\'a refait ... le Livre d\'Or enfin de retour. hallelujah !!!!'),
        array('id' => '2490','auteur' => 'Bobby','club' => 'ASTT','date' => '1335210725','message' => 'Hello.

        Désolé du retard, j\'ai pas vraiment eu une période vacancière ces derniers mois !

        Le livre d\'or est de nouveau là, avec un petit nouveau, qui se nomme CAPTCHA...
        Il est pas très très joli, mais il devrait bien bloquer les robots qui nous spammaient.

        Bonne soirée à tous,
        Bon chat...

        Flo.'),
        array('id' => '2492','auteur' => 'Arnaud','club' => '','date' => '1335335895','message' => 'Retour sur les plus belles performances du week-end du 17 et 18 mars 2012 :
        - En N3 Dames, Charline Grugeon (12 – 1253 pts) bat Marion Godefroy (n°270 – 1582 pts) soit 329 points d’écart
        - En R1 Messieurs, Loïc Lefevre (14 – 1429 pts) bat Julien Lision (17 – 1755 pts) soit 326 points d’écart
        - En N3 Dames, Julia Flahaut (9 – 957 pts) bat Claire Baritaux (12 – 1270 pts) soit 313 points d’écart
        - En R3 Messieurs, Ali Combo Combo (13 – 1353 pts) bat Sébastien Savreux (16 – 1643 pts) soit 290 points d’écart
        - En D2 Messieurs, Pierre-Philippe Nadau (6 – 695 pts) bat Lény Rose (9 – 909 pts) soit 214 points d’écart
        - En R1 Messieurs, Antoine Huon (13 – 1349 pts) bat Grégoire Lambert (15 – 1560 pts) soit 211 points d’écart'),
        array('id' => '2493','auteur' => 'Arnaud','club' => '','date' => '1335335963','message' => 'Retour sur les plus belles performances du week-end du 31 mars et 1er avril 2012 :
        - En R1 Messieurs, Antoine Huon (13 – 1349 pts) bat Aurélien Hermant (18 – 1895 pts) soit 546 points d’écart
        - En N3 Messieurs, Benoît Vaquier (15 – 1583 pts) bat Jérôme Vieillart (20 – 2017 pts) soit 434 points d’écart
        - En N3 Dames, Julia Flahaut (9 – 957 pts) bat Sophie Cave (13 – 1315 pts) soit 358 points d’écart
        - En D2 Messieurs, Pierre-Philippe Nadau (6 – 695 pts) bat Jean Gérard (10 – 1028 pts) et Vincent Hoornaert (9 – 900 pts) soit 333 points d’écart et 205 points d’écart
        - En N3 Messieurs, Christophe Harlé (n°595 – 2180 pts) bat Marc Le Penven (n°175 – 2509 pts) soit 329 points d’écart
        - En R3 Messieurs, Léo Bodinel (11 – 1160 pts) bat Fabrice Quatremer (14 – 1477 pts) soit 317 points d’écart
        - En D3 Messieurs, Emmanuel Lecocq (5 – 500 pts) bat Didier Cotrelle (8 – 800 pts) soit 300 points d’écart
        - En R3 Messieurs, Yoann Cailloin (13 – 1321 pts) bat Justine Maertens (16 – 1611 pts) soit 290 points d’écart
        - En R3 Messieurs, Matthieu Lamérant (12 – 1216 pts) bat Serge Paradis (16 – 1689 pts) soit 273 points d’écart
        - En D1 Messieurs, Paul Boinet (8 – 825 pts) bat Sébastien Dacheux (10 – 1070 pts), Hugues Lebrun (10 – 1060 pts) et Clément Delépine (10 – 1039 pts) soit 245 points d’écart, 235 points d’écart et 214 points d’écart
        - En R2 Messieurs, Leny Berriat (14 – 1480 pts) bat Romuald Belgueul (17 – 1712 pts) soit 232 points d’écart
        - En D3 Messieurs, Alexandre Goupil (5 – 587 pts) bat Didier Cotrelle (8 – 800 pts) soit 213 points d’écart'),
        array('id' => '2267','auteur' => 'Alexandre Goupil','club' => '','date' => '1330947042','message' => 'Ouverture de la salle ce lundi 5 février à partir de 17H. A vos raquettes.... Indiv\' ce week-end. '),
        array('id' => '2494','auteur' => 'Arnaud','club' => '','date' => '1335336028','message' => 'Retour sur les plus belles performances du week-end du 14 et 15 avril 2012 :
        - En R1 Messieurs, Andréï Deguingand (11 – 1166 pts) bat Sébastien Baudry (16 – 1627 pts) et Charles-Henri Grimaux (15 – 1585 pts) soit 461 points d’écart et 419 points d’écart
        - En D1 Messieurs, Paul Boinet (8 – 825 pts) bat Daniel Foulon (12 – 1221 pts) et Mickaël Le Pors (10 – 1067 pts) soit 396 points d’écart et 242 points d’écart
        - En D2 Messieurs, Pierre-Philippe Nadau (6 – 695 pts) bat Patrick Morival (10 – 1061 pts) soit 366 points d’écart
        - En R3 Messieurs, Léo Bodinel (11 – 1160 pts) bat Eric Lefebvre (15 – 1502 pts) soit 342 points d’écart
        - En R1 Messieurs, Pierre Le Galloudec (17 – 1784 pts) bar Rudy Venard (n°805 – 2110 pts) soit 326 points d’écart
        - En D3 Messieurs, Hugo Bouteiller (8 – 899 pts) bat Thierry Declerck (11 – 1194 pts) soit 295 points d’écart
        - En D3 Messieurs, Alexandre Goupil (5 – 587 pts) bat Gérard Théron (8 – 842 pts) et Fabien Leroy (8 – 806 pts) soit 255 points d’écart et 219 points d’écart
        - En D1 Messieurs, Léo Hersent (9 – 985 pts) bat Daniel Foulon (12 – 1221 pts) soit 236 points d’écart
        - En D3 Messieurs, Florian Beaufrère (6 – 693 pts) bat Pascal Pruvot (9 – 927 pts) soit 234 points d’écart
        - En D3 Messieurs, Joffrey Hauw (7 – 709 pts) bat Pascal Pruvot (9 – 927 pts) soit 218 points d’écart
        - En R2 Messieurs, Leny Berriat (14 – 1480 pts) bat Eddy Gontarczyk (16 – 1691 pts) soit 211 points d’écart
        - En D1 Jeunes, Ymad Hamdad (5 – 500 pts) bat Aymeric Jur (7 – 708 pts) soit 208 points d’écart'),
        array('id' => '2495','auteur' => 'Bobby','club' => 'ASTT','date' => '1335539521','message' => 'Une "petite" surprise à venir...

        Qui, j\'espère pour vous, vous plaira.'),
        array('id' => '2496','auteur' => 'Goup','club' => 'Surprise surprise','date' => '1335605739','message' => 'à venir ??
        Nous sommes le 27 Avril 2012 , c\'est Flo qui fait la surprise (Flo+surprise²/temps de mise en marche X livre d\'or = ...) Ok , je reviens sur le site en Octobre pour la surprise! J\'ai hâte.'),
        array('id' => '2497','auteur' => 'Bobby','club' => 'ASTT','date' => '1335621569','message' => 'Bien avant ça quand même, mais je préfère ne pas m\'avancer sur les dates, avec les projets que j\'ai et que je vais avoir très bientôt...

        Refonte technique (dev) + graphique + back-office complète...'),
        array('id' => '2498','auteur' => 'Goup','club' => 'Le Schlid Fort','date' => '1335645762','message' => 'Allez Bobby , on croit en toi. Ne nous déçoit pas... fait ça en un temps record !!!!
        Oui , le Schild , le changement  , c\'est maintenant.'),
        array('id' => '2499','auteur' => 'Dud','club' => '','date' => '1335776885','message' => 'finale critérium poussins/benjamins:samedi 28 avril à l\'ASTT:16 équipes de la Somme engagées.
        2 équipes d\'Amiens terminent 1er et 2e, bravo à Eline, Elvire ainsi qu\'Ymad,Kéziah et Adem (1ere compétition)'),
        array('id' => '2500','auteur' => 'Goup','club' => 'Championship of the Somme','date' => '1336318474','message' => 'Félicitation à 
        -Andrei Deguingand champion de la Somme 2012 en Minime Garçon.
        -Gustave Defosse champion de la Somme 2012 en Benjamin Garçon.
        -Cyril de Catheu champion de la Somme 2012 en Junior Garçon. Et Louis Vandewoestyne Vice-Champion de la Somme 2012 en Junior Garçon.'),
        array('id' => '2501','auteur' => 'Goup','club' => 'une réctification doit se faire','date' => '1336331046','message' => '-Louis Vandewoestyne Champion de la Somme 2012 en Junior Garçon et Cyril de Catheu Vice-Champion de la Somme 2012 en Junior Garçon.'),
        array('id' => '2502','auteur' => 'Goup','club' => 'Les Bons Samaritains ','date' => '1336500406','message' => 'Félicitation à la délégation Samarienne pour sa belle prestation au Challenge Interdépartementaux 2012. Une victoire "large" avec 78 points devant l\'Oise deuxième et l\'Aisne deuxième. 
        Un grand merci aux Coachs de la Somme et au 17 joueurs de l\'Amiens Sport Tennis de Table pour leur participation en force. =)'),
        array('id' => '2503','auteur' => 'Alexandre Goupil','club' => 'Challenge PBM','date' => '1336844577','message' => 'Résultats du Challenge P.B.M du 12 Mai 2012: 
        - En Benjamins Garçon ,Hamdad Ymad termine 1er , Desjonquère Keziah termine 3ème et Herbin Teneur Timeo termine 17ème.
        - En Minimes Fille , Steeland Clémence termine 2ème.
        - En Minimes Garçon , Nadeau Pierre-Philippe termine 1er.
        - En Poussines , Steeland Pauline termine 2ème et Andre Jeanne termine 6ème.
        - En Poussins , Ledoux Mael termine 2ème , Hamdad Adem termine 9ème et Brasseur Gauthier termine également à la 9ème place.
        Bravo à tous les joueurs pour leur très belle prestation du jour. Merci aux parents d\'avoir assuré l\'ambiance. Et un grand merci aux coachs présent ( Marion , Cyril et Vincent) pour leur implication et leur envi de réussite pour les joueurs.'),
        array('id' => '2504','auteur' => 'Alexandre Goupil','club' => 'Finale by regional classification','date' => '1336923610','message' => 'Aujourd\'hui , 4 joueurs de l\'Amiens Sport TT étaient qualifié pour participer aux Finales par Classement Régional qui se sont déroulé à Breteuil.
        Après des matchs à la hauteur des attentes , seul Loic Lefevre à réussi à se qualifier pour la grande finale National qui se déroulera près de Angers (Poncey) les 23 et 24 Juin 2012.
        Bravo à Marion Bertelot , Loic Lefevre , Louis Vandewoestyne et Gregory Chhe pour votre participation. Merci à Héléne Carlie d\'avoir fait le deplacement pour le coaching.'),
        array('id' => '2507','auteur' => 'Denis C','club' => '','date' => '1337344406','message' => 'Louis VANDE a effectivement tout déchiré: son slip et sa race. Il gagne le tableau (poussin-benjamin) 900-1499 points du tournoi de Reims 2012. Le gain du Magnum de Champagne l\'aura survolté. Son capitaine d\'équipe l\'an prochain sait ce qui lui reste à faire.'),
        array('id' => '2506','auteur' => 'le vande','club' => 'ASTT','date' => '1337115693','message' => 'Départ pour Reims demain a 18h30, avec la team emmener par les Bathelot ! on va tout déchirer.. '),
        array('id' => '2508','auteur' => 'Inconnu du club','club' => 'Amiens stt','date' => '1337889154','message' => 'Vive le tennis de table!!!!!!!!!!!!!!!'),
        array('id' => '2509','auteur' => 'Goup','club' => 'Obstiné','date' => '1337891332','message' => 'En ce jour du Jeudi 24 Avril 2012, une très grande chose c\'est produite salle Labaume d\'Amiens. Car oui même à Amiens Sport Tennis de Table "Le changement, c\'est maintenant", Denis Chatelain, n\'est plus invaincu à hauteur de 3/0 sur Alexandre Goupil. J\'ai réussi à lui mettre un set dans sa face... ;-)Merci Denis pour avoir eu un "Coup de faiblesse", je terminerai sur une citation d\'un ami (que je déforme pour l\'adapter à la situation) , Le Tennis de Table Fort.')
        );

        // `astt`.`Equipes`
        $Equipes = array(
        array('id' => '1','numero' => '1','genre' => 'M','division' => 'N3','nb_jrs' => '6','lien' => 'http://www.fftt.com/sportif/chpt_equipe/chp_div.php?organisme_pere=100001&cx_poule=39747&D1=6597&virtuel=0','capitaine' => '8011054'),
        array('id' => '2','numero' => '2','genre' => 'M','division' => 'N3','nb_jrs' => '6','lien' => 'http://www.fftt.com/sportif/chpt_equipe/chp_div.php?organisme_pere=100001&cx_poule=39746&D1=6597&virtuel=0','capitaine' => '805540'),
        array('id' => '3','numero' => '3','genre' => 'M','division' => 'R1','nb_jrs' => '6','lien' => 'http://www.fftt.com/sportif/chpt_equipe/chp_div.php?organisme_pere=1019&cx_poule=804825&D1=6096&virtuel=0','capitaine' => '8011223'),
        array('id' => '4','numero' => '4','genre' => 'M','division' => 'R2','nb_jrs' => '6','lien' => 'http://www.fftt.com/sportif/chpt_equipe/chp_div.php?organisme_pere=1019&cx_poule=804827&D1=6100&virtuel=0','capitaine' => '804888'),
        array('id' => '5','numero' => '5','genre' => 'M','division' => 'R3','nb_jrs' => '6','lien' => 'http://www.fftt.com/sportif/chpt_equipe/chp_div.php?organisme_pere=1019&cx_poule=804831&D1=6101&virtuel=0','capitaine' => '8011876'),
        array('id' => '6','numero' => '6','genre' => 'M','division' => 'R3','nb_jrs' => '6','lien' => 'http://www.fftt.com/sportif/chpt_equipe/chp_div.php?organisme_pere=1019&cx_poule=804830&D1=6101&virtuel=0','capitaine' => '8014047'),
        array('id' => '7','numero' => '7','genre' => 'M','division' => 'D1','nb_jrs' => '6','lien' => 'http://www.fftt.com/sportif/chpt_equipe/chp_div.php?organisme_pere=80&cx_poule=805525&D1=6426&virtuel=0','capitaine' => '8011159'),
        array('id' => '8','numero' => '8','genre' => 'M','division' => 'D2','nb_jrs' => '4','lien' => 'http://www.fftt.com/sportif/chpt_equipe/chp_div.php?organisme_pere=80&cx_poule=805527&D1=6427&virtuel=0','capitaine' => '8016191'),
        array('id' => '9','numero' => '9','genre' => 'M','division' => 'D2','nb_jrs' => '4','lien' => 'http://www.fftt.com/sportif/chpt_equipe/chp_div.php?organisme_pere=80&cx_poule=805528&D1=6427&virtuel=0','capitaine' => '8013188'),
        array('id' => '10','numero' => '10','genre' => 'M','division' => 'D3','nb_jrs' => '4','lien' => 'http://www.fftt.com/sportif/chpt_equipe/chp_div.php?organisme_pere=80&cx_poule=805533&D1=6428&virtuel=0','capitaine' => '8016137'),
        array('id' => '11','numero' => '11','genre' => 'M','division' => 'D3','nb_jrs' => '4','lien' => 'http://www.fftt.com/sportif/chpt_equipe/chp_div.php?organisme_pere=80&cx_poule=805536&D1=6428&virtuel=0','capitaine' => '8015741'),
        array('id' => '12','numero' => '12','genre' => 'M','division' => 'D4','nb_jrs' => '4','lien' => 'http://www.fftt.com/sportif/chpt_equipe/chp_div.php?organisme_pere=80&cx_poule=805540&D1=6429&virtuel=0','capitaine' => '8014985'),
        array('id' => '13','numero' => '1','genre' => 'F','division' => 'N3','nb_jrs' => '4','lien' => 'http://www.fftt.com/sportif/chpt_equipe/chp_div.php?organisme_pere=100006&cx_poule=727003&D1=32262&virtuel=0','capitaine' => '8013575'),
        array('id' => '14','numero' => '2','genre' => 'F','division' => 'PreNat','nb_jrs' => '4','lien' => 'http://www.fftt.com/sportif/chpt_equipe/chp_div.php?organisme_pere=10006&cx_poule=54044&D1=7966&virtuel=0','capitaine' => '807050'),
        array('id' => '15','numero' => '1','genre' => 'J','division' => 'D1','nb_jrs' => '4','lien' => 'http://www.fftt.com/sportif/chpt_equipe/chp_div.php?organisme_pere=80&cx_poule=805542&D1=23328&virtuel=0','capitaine' => ''),
        array('id' => '16','numero' => '2','genre' => 'J','division' => 'D1','nb_jrs' => '4','lien' => 'http://www.fftt.com/sportif/chpt_equipe/chp_div.php?organisme_pere=80&cx_poule=805543&D1=23328&virtuel=0','capitaine' => ''),
        array('id' => '17','numero' => '3','genre' => 'J','division' => 'D2','nb_jrs' => '4','lien' => 'http://www.fftt.com/sportif/chpt_equipe/chp_div.php?organisme_pere=80&cx_poule=805546&D1=23329&virtuel=0','capitaine' => '')
        );

        // `astt`.`Evenements`
        $Evenements = array(
        array('id' => '1','nom' => 'Journée nationale du ping','description' => '','lieu' => 'Amiens','date' => '1315609200','tournoi' => '0'),
        array('id' => '2','nom' => 'Tournoi d\'Amiens','description' => '','lieu' => 'Amiens','date' => '1315609200','tournoi' => '1'),
        array('id' => '3','nom' => 'Tournoi d\'Amiens','description' => '','lieu' => 'Amiens','date' => '1315695600','tournoi' => '1'),
        array('id' => '4','nom' => 'Championnat par équipes [1]','description' => '','lieu' => '','date' => '1316732400','tournoi' => '0'),
        array('id' => '5','nom' => 'Championnat par équipes [1]','description' => '','lieu' => '','date' => '1316818800','tournoi' => '0'),
        array('id' => '6','nom' => 'Championnat par équipes [1]','description' => '','lieu' => '','date' => '1316905200','tournoi' => '0'),
        array('id' => '7','nom' => 'Critérium Poussins-Benjamins [1]','description' => '','lieu' => '','date' => '1317423600','tournoi' => '0'),
        array('id' => '8','nom' => 'Championnat par équipes [2]','description' => '','lieu' => '','date' => '1317870000','tournoi' => '0'),
        array('id' => '9','nom' => 'Championnat par équipes [2]','description' => '','lieu' => '','date' => '1317956400','tournoi' => '0'),
        array('id' => '10','nom' => 'Championnat par équipes [2]','description' => '','lieu' => '','date' => '1318042800','tournoi' => '0'),
        array('id' => '11','nom' => 'Critérium Fédéral [1]','description' => '1er tour du critérium fédéral','lieu' => '','date' => '1318633200','tournoi' => '0'),
        array('id' => '12','nom' => 'Critérium Fédéral [1]','description' => '1er tour du critérium fédéral','lieu' => '','date' => '1318719600','tournoi' => '0'),
        array('id' => '13','nom' => 'Championnat par équipes [3]','description' => '','lieu' => '','date' => '1319079600','tournoi' => '0'),
        array('id' => '14','nom' => 'Championnat par équipes [3]','description' => '','lieu' => '','date' => '1319238000','tournoi' => '0'),
        array('id' => '15','nom' => 'Championnat par équipes [3]','description' => '','lieu' => '','date' => '1319324400','tournoi' => '0'),
        array('id' => '16','nom' => 'Interclubs départementaux','description' => '','lieu' => '','date' => '1319842800','tournoi' => '0'),
        array('id' => '17','nom' => 'Tournoi Stéphane Baert','description' => '','lieu' => 'Amiens','date' => '1319684400','tournoi' => '0'),
        array('id' => '18','nom' => 'Championnat par équipes [4]','description' => '','lieu' => '','date' => '1320289200','tournoi' => '0'),
        array('id' => '19','nom' => 'Championnat par équipes [4]','description' => '','lieu' => '','date' => '1320447600','tournoi' => '0'),
        array('id' => '20','nom' => 'Championnat par équipes [4]','description' => '','lieu' => '','date' => '1320534000','tournoi' => '0'),
        array('id' => '21','nom' => 'Top Départemental Détection','description' => '','lieu' => '','date' => '1321074000','tournoi' => '0'),
        array('id' => '22','nom' => 'Championnat par équipes [5]','description' => '','lieu' => '','date' => '1321570800','tournoi' => '0'),
        array('id' => '23','nom' => 'Championnat par équipes [5]','description' => '','lieu' => '','date' => '1322521200','tournoi' => '0'),
        array('id' => '24','nom' => 'Championnat par équipes [5]','description' => '','lieu' => '','date' => '1321743600','tournoi' => '0'),
        array('id' => '25','nom' => 'Championnat par équipes [6]','description' => '','lieu' => '','date' => '1322175600','tournoi' => '0'),
        array('id' => '26','nom' => 'Championnat par équipes [6]','description' => '','lieu' => '','date' => '1322262000','tournoi' => '0'),
        array('id' => '27','nom' => 'Championnat par équipes [6]','description' => '','lieu' => '','date' => '1322348400','tournoi' => '0'),
        array('id' => '28','nom' => 'Critérium Fédéral [2]','description' => '2e tour du critérium fédéral','lieu' => '','date' => '1322866800','tournoi' => '0'),
        array('id' => '29','nom' => 'Critérium Fédéral [2]','description' => '2e tour du critérium fédéral','lieu' => '','date' => '1322953200','tournoi' => '0'),
        array('id' => '30','nom' => 'Championnat par équipes [7]','description' => '','lieu' => '','date' => '1323385200','tournoi' => '0'),
        array('id' => '31','nom' => 'Championnat par équipes [7]','description' => '','lieu' => '','date' => '1323471600','tournoi' => '0'),
        array('id' => '32','nom' => 'Championnat par équipes [7]','description' => '','lieu' => '','date' => '1323558000','tournoi' => '0'),
        array('id' => '33','nom' => 'Critérium Poussins-Benjamins [2]','description' => '','lieu' => '','date' => '1324076400','tournoi' => '0'),
        array('id' => '34','nom' => 'Critérium féminin départemental','description' => '','lieu' => 'Albert','date' => '1324076400','tournoi' => '0'),
        array('id' => '35','nom' => 'Critérium vétérans départemental','description' => '','lieu' => '','date' => '1324162800','tournoi' => '0'),
        array('id' => '36','nom' => 'Critérium Fédéral [3]','description' => '3e tour du critérium fédéral','lieu' => '','date' => '1326495600','tournoi' => '0'),
        array('id' => '37','nom' => 'Critérium Fédéral [3]','description' => '3e tour du critérium fédéral','lieu' => '','date' => '1326582000','tournoi' => '0'),
        array('id' => '38','nom' => 'Championnat par équipes [8]','description' => '','lieu' => '','date' => '1327014000','tournoi' => '0'),
        array('id' => '39','nom' => 'Championnat par équipes [8]','description' => '','lieu' => '','date' => '1327100400','tournoi' => '0'),
        array('id' => '40','nom' => 'Championnat par équipes [8]','description' => '','lieu' => '','date' => '1327186800','tournoi' => '0'),
        array('id' => '41','nom' => 'Top Régional Détection','description' => '','lieu' => 'Amiens','date' => '1325977200','tournoi' => '0'),
        array('id' => '42','nom' => 'Critérium Poussins-Benjamins [3]','description' => '','lieu' => '','date' => '1328310000','tournoi' => '0'),
        array('id' => '43','nom' => 'Interclubs régionaux','description' => '','lieu' => '','date' => '1328396400','tournoi' => '0'),
        array('id' => '44','nom' => 'Championnat par équipes [9]','description' => '','lieu' => '','date' => '1327618800','tournoi' => '0'),
        array('id' => '45','nom' => 'Championnat par équipes [9]','description' => '','lieu' => '','date' => '1327705200','tournoi' => '0'),
        array('id' => '46','nom' => 'Championnat par équipes [9]','description' => '','lieu' => '','date' => '1327791600','tournoi' => '0'),
        array('id' => '47','nom' => 'Championnat par équipes [10]','description' => '','lieu' => '','date' => '1328828400','tournoi' => '0'),
        array('id' => '48','nom' => 'Championnat par équipes [10]','description' => '','lieu' => '','date' => '1328914800','tournoi' => '0'),
        array('id' => '49','nom' => 'Championnat par équipes [10]','description' => '','lieu' => '','date' => '1329001200','tournoi' => '0'),
        array('id' => '50','nom' => 'Championnat par équipes [11]','description' => '','lieu' => '','date' => '1329433200','tournoi' => '0'),
        array('id' => '51','nom' => 'Championnat par équipes [11]','description' => '','lieu' => '','date' => '1329519600','tournoi' => '0'),
        array('id' => '52','nom' => 'Championnat par équipes [11]','description' => '','lieu' => '','date' => '1329606000','tournoi' => '0'),
        array('id' => '53','nom' => 'Championnat de France des régions Cadets','description' => '','lieu' => '','date' => '1329778800','tournoi' => '0'),
        array('id' => '54','nom' => 'Championnat de France des régions Cadets','description' => '','lieu' => '','date' => '1329865200','tournoi' => '0'),
        array('id' => '55','nom' => 'Championnat de France des régions Minimes','description' => '','lieu' => '','date' => '1329951600','tournoi' => '0'),
        array('id' => '56','nom' => 'Championnat de France des régions Minimes','description' => '','lieu' => '','date' => '1330038000','tournoi' => '0'),
        array('id' => '57','nom' => 'Critérium féminin régional','description' => '','lieu' => 'Breteuil','date' => '1330124400','tournoi' => '0'),
        array('id' => '58','nom' => 'Critérium vétérans régional','description' => '','lieu' => '','date' => '1330210800','tournoi' => '0'),
        array('id' => '59','nom' => 'Critérium Fédéral [4]','description' => '4e tour du critérium fédéral','lieu' => '','date' => '1331334000','tournoi' => '0'),
        array('id' => '60','nom' => 'Critérium Fédéral [4]','description' => '4e tour du critérium fédéral','lieu' => '','date' => '1331420400','tournoi' => '0'),
        array('id' => '61','nom' => 'Championnat par équipes [12]','description' => '','lieu' => '','date' => '1331852400','tournoi' => '0'),
        array('id' => '62','nom' => 'Championnat par équipes [12]','description' => '','lieu' => '','date' => '1331938800','tournoi' => '0'),
        array('id' => '63','nom' => 'Championnat par équipes [12]','description' => '','lieu' => '','date' => '1332025200','tournoi' => '0'),
        array('id' => '64','nom' => 'Top de Zone Détection','description' => '','lieu' => '','date' => '1332543600','tournoi' => '0'),
        array('id' => '65','nom' => 'Top de Zone Détection','description' => '','lieu' => '','date' => '1332630000','tournoi' => '0'),
        array('id' => '66','nom' => 'Championnat de la Somme','description' => '','lieu' => '','date' => '1336172400','tournoi' => '0'),
        array('id' => '67','nom' => 'Championnat par équipes [13]','description' => '','lieu' => '','date' => '1333062000','tournoi' => '0'),
        array('id' => '68','nom' => 'Championnat par équipes [13]','description' => '','lieu' => '','date' => '1333148400','tournoi' => '0'),
        array('id' => '69','nom' => 'Championnat par équipes [13]','description' => '','lieu' => '','date' => '1333234800','tournoi' => '0'),
        array('id' => '70','nom' => 'Critérium Fédéral [5]','description' => '5e tour du critérium fédéral','lieu' => '','date' => '1333753200','tournoi' => '0'),
        array('id' => '71','nom' => 'Critérium Fédéral [5]','description' => '5e tour du critérium fédéral','lieu' => '','date' => '1334703600','tournoi' => '0'),
        array('id' => '72','nom' => 'Championnat par équipes [14]','description' => '','lieu' => '','date' => '1334271600','tournoi' => '0'),
        array('id' => '73','nom' => 'Championnat par équipes [14]','description' => '','lieu' => '','date' => '1334358000','tournoi' => '0'),
        array('id' => '74','nom' => 'Championnat par équipes [14]','description' => '','lieu' => '','date' => '1334444400','tournoi' => '0'),
        array('id' => '75','nom' => 'Critérium vétérans national','description' => '','lieu' => '','date' => '1334876400','tournoi' => '0'),
        array('id' => '76','nom' => 'Critérium vétérans national','description' => '','lieu' => '','date' => '1334962800','tournoi' => '0'),
        array('id' => '77','nom' => 'Critérium vétérans national','description' => '','lieu' => '','date' => '1335049200','tournoi' => '0'),
        array('id' => '78','nom' => 'Challenge Bernard Jeu régional','description' => '','lieu' => '','date' => '1335049200','tournoi' => '0'),
        array('id' => '79','nom' => 'Finale Critérium Poussins-Benjamins','description' => '','lieu' => '','date' => '1335567600','tournoi' => '0'),
        array('id' => '80','nom' => 'Finales par classement départementales','description' => '','lieu' => '','date' => '1335654000','tournoi' => '0'),
        array('id' => '81','nom' => 'Championnat de France Minimes','description' => '','lieu' => '','date' => '1336086000','tournoi' => '0'),
        array('id' => '82','nom' => 'Championnat de France Juniors','description' => '','lieu' => '','date' => '1336086000','tournoi' => '0'),
        array('id' => '83','nom' => 'Championnat de France Minimes','description' => '','lieu' => '','date' => '1336172400','tournoi' => '0'),
        array('id' => '84','nom' => 'Championnat de France Juniors','description' => '','lieu' => '','date' => '1336172400','tournoi' => '0'),
        array('id' => '85','nom' => 'Championnat de France Minimes','description' => '','lieu' => '','date' => '1336258800','tournoi' => '0'),
        array('id' => '86','nom' => 'Championnat de France Juniors','description' => '','lieu' => '','date' => '1336258800','tournoi' => '0'),
        array('id' => '87','nom' => 'Interdépartementaux','description' => '','lieu' => '','date' => '1336431600','tournoi' => '0'),
        array('id' => '88','nom' => 'Challenge PBM départemental','description' => '','lieu' => '','date' => '1336777200','tournoi' => '0'),
        array('id' => '89','nom' => 'Interclubs nationaux benjamins et minimes','description' => '','lieu' => '','date' => '1336777200','tournoi' => '0'),
        array('id' => '90','nom' => 'Journée des titres','description' => '','lieu' => '','date' => '1336777200','tournoi' => '0'),
        array('id' => '91','nom' => 'Interclubs nationaux benjamins et minimes','description' => '','lieu' => '','date' => '1336863600','tournoi' => '0'),
        array('id' => '92','nom' => 'Journée des titres','description' => '','lieu' => '','date' => '1336863600','tournoi' => '0'),
        array('id' => '93','nom' => 'Finales par classement régionales','description' => '','lieu' => '','date' => '1336863600','tournoi' => '0'),
        array('id' => '94','nom' => 'Championnat de Picardie','description' => '','lieu' => '','date' => '1337382000','tournoi' => '0'),
        array('id' => '95','nom' => 'Championnat de Picardie','description' => '','lieu' => '','date' => '1337468400','tournoi' => '0'),
        array('id' => '96','nom' => 'Championnat de France Benjamins','description' => '','lieu' => '','date' => '1338505200','tournoi' => '0'),
        array('id' => '97','nom' => 'Championnat de France Cadets','description' => '','lieu' => '','date' => '1338505200','tournoi' => '0'),
        array('id' => '98','nom' => 'Championnat de France Benjamins','description' => '','lieu' => '','date' => '1338591600','tournoi' => '0'),
        array('id' => '99','nom' => 'Championnat de France Cadets','description' => '','lieu' => '','date' => '1338591600','tournoi' => '0'),
        array('id' => '100','nom' => 'Championnat de France Benjamins','description' => '','lieu' => '','date' => '1338678000','tournoi' => '0'),
        array('id' => '101','nom' => 'Championnat de France Cadets','description' => '','lieu' => '','date' => '1338678000','tournoi' => '0'),
        array('id' => '102','nom' => 'Challenge Bernard Jeu national','description' => '','lieu' => '','date' => '1339196400','tournoi' => '0'),
        array('id' => '103','nom' => 'Challenge Bernard Jeu national','description' => '','lieu' => '','date' => '1339282800','tournoi' => '0'),
        array('id' => '104','nom' => 'Challenge PBM régional','description' => '','lieu' => '','date' => '1339282800','tournoi' => '0'),
        array('id' => '105','nom' => 'Tournoi national Open','description' => '','lieu' => '','date' => '1339801200','tournoi' => '0'),
        array('id' => '106','nom' => 'Tournoi national Open','description' => '','lieu' => '','date' => '1339887600','tournoi' => '0'),
        array('id' => '107','nom' => 'Finales par classement nationales','description' => '','lieu' => '','date' => '1340406000','tournoi' => '0'),
        array('id' => '108','nom' => 'Finales par classement nationales','description' => '','lieu' => '','date' => '1340492400','tournoi' => '0'),
        array('id' => '109','nom' => 'Stage d\'entraînement','description' => 'Le club organise un stage d\'entraînement pour les jeunes du club du lundi 24 octobre au vendredi 28 octobre.
        Les séances d\'entraînements auront lieu de 10h00 à 12h30 et/ou de 13h30 à 17h30.
        Le club offre le goûter pour les joueurs.
        Coût du stage : 25€ les 5 jours, 6€ par jour ou 5€ la demi-journée.  
        Pour tout renseignement : s’adresser à Christophe Harlé : astt@wanadoo.fr / 03 22 95 37 99 / 06 59 15 56 52
        ','lieu' => 'Amiens Sport Tennis de Table','date' => '1319338800','tournoi' => '0'),
        array('id' => '110','nom' => 'Stage d\'entraînement','description' => 'Le club organise un stage d\'entraînement pour les jeunes du club du lundi 24 octobre au vendredi 28 octobre.<br />
        Les séances d\'entraînements auront lieu de 10h00 à 12h30 et/ou de 13h30 à 17h30.<br />
        Le club offre le goûter pour les joueurs.<br />
        Coût du stage : 25€ les 5 jours, 6€ par jour ou 5€ la demi-journée.  <br />
        Pour tout renseignement : s’adresser à Christophe Harlé : astt@wanadoo.fr / 03 22 95 37 99 / 06 59 15 56 52<br />
        ','lieu' => 'Amiens Sport Tennis de Table','date' => '1319425200','tournoi' => '0'),
        array('id' => '111','nom' => 'Stage d\'entraînement','description' => '','lieu' => 'Amiens Sport Tennis de Table','date' => '1316919600','tournoi' => '0'),
        array('id' => '112','nom' => 'Stage d\'entraînement','description' => 'Le club organise un stage d\'entraînement pour les jeunes du club du lundi 24 octobre au vendredi 28 octobre.<br />
        Les séances d\'entraînements auront lieu de 10h00 à 12h30 et/ou de 13h30 à 17h30.<br />
        Le club offre le goûter pour les joueurs.<br />
        Coût du stage : 25€ les 5 jours, 6€ par jour ou 5€ la demi-journée.  <br />
        Pour tout renseignement : s’adresser à Christophe Harlé : astt@wanadoo.fr / 03 22 95 37 99 / 06 59 15 56 52<br />
        ','lieu' => 'Amiens Sport Tennis de Table','date' => '1319598000','tournoi' => '0'),
        array('id' => '113','nom' => 'Stage d\'entraînement','description' => 'Le club organise un stage d\'entraînement pour les jeunes du club du lundi 24 octobre au vendredi 28 octobre.<br />
        Les séances d\'entraînements auront lieu de 10h00 à 12h30 et/ou de 13h30 à 17h30.<br />
        Le club offre le goûter pour les joueurs.<br />
        Coût du stage : 25€ les 5 jours, 6€ par jour ou 5€ la demi-journée.  <br />
        Pour tout renseignement : s’adresser à Christophe Harlé : astt@wanadoo.fr / 03 22 95 37 99 / 06 59 15 56 52<br />
        ','lieu' => 'Amiens Sport Tennis de Table','date' => '1319684400','tournoi' => '0'),
        array('id' => '114','nom' => 'Stage d\'entraînement','description' => 'Le club organise un stage d\'entraînement pour les jeunes du club du lundi 24 octobre au vendredi 28 octobre.<br />
        Les séances d\'entraînements auront lieu de 10h00 à 12h30 et/ou de 13h30 à 17h30.<br />
        Le club offre le goûter pour les joueurs.<br />
        Coût du stage : 25€ les 5 jours, 6€ par jour ou 5€ la demi-journée.  <br />
        Pour tout renseignement : s’adresser à Christophe Harlé : astt@wanadoo.fr / 03 22 95 37 99 / 06 59 15 56 52<br />
        ','lieu' => 'Amiens Sport Tennis de Table','date' => '1319511600','tournoi' => '0'),
        array('id' => '115','nom' => 'Championnat de France Open Handisport','description' => '','lieu' => 'Ceyrat','date' => '1337914800','tournoi' => '0'),
        array('id' => '116','nom' => 'Championnat de France Open Handisport','description' => '','lieu' => 'Ceyrat','date' => '1338001200','tournoi' => '0'),
        array('id' => '117','nom' => 'Championnat de France Open Handisport','description' => '','lieu' => 'Ceyrat','date' => '1338087600','tournoi' => '0'),
        array('id' => '118','nom' => 'Championnat de France par équipes Handisport','description' => '','lieu' => 'Argentan','date' => '1336100400','tournoi' => '0'),
        array('id' => '119','nom' => 'Championnat de zones par équipes Handisport','description' => '','lieu' => '','date' => '1333681200','tournoi' => '0'),
        array('id' => '120','nom' => 'Trophée Vétérans national handisport','description' => '','lieu' => 'Tours','date' => '1338519600','tournoi' => '0'),
        array('id' => '121','nom' => 'Trophée Vétérans de zone handisport','description' => 'Participants amiénois : André Dairaine, Didier Vincent, William Manier, Christophe Caudrelier','lieu' => 'Chevilly Larue','date' => '1330124400','tournoi' => '0'),
        array('id' => '122','nom' => '1er tour du Critérium Fédéral Handisport','description' => '','lieu' => '','date' => '1322866800','tournoi' => '0'),
        array('id' => '123','nom' => '2e tour du critérium fédéral handisport','description' => '','lieu' => '','date' => '1328310000','tournoi' => '0'),
        array('id' => '124','nom' => '3e tour du critérium fédéral handisport','description' => '','lieu' => '','date' => '1332471600','tournoi' => '0'),
        array('id' => '125','nom' => 'Championnat par équipes [5]','description' => '','lieu' => '','date' => '1321592400','tournoi' => '0'),
        array('id' => '126','nom' => 'Arbre de Noël','description' => '','lieu' => 'Amiens Sport TT','date' => '1323820800','tournoi' => '0'),
        array('id' => '127','nom' => 'Galette des rois','description' => '','lieu' => 'Amiens Sport TT','date' => '1325804400','tournoi' => '0'),
        array('id' => '128','nom' => 'Stage Jeunes du 19 au 23 décembre 2011','description' => 'Le club organise un stage du lundi 19 décembre au vendredi 23 décembre 2011.

        Les entraînements auront lieu de 9h45 à 12h30 et(ou) de 13h30 à 17h30.

        Possibilité de déjeuner sur place et de faire réchauffer son repas.

        Le club offre le goûter pour les participants.

        Coût du stage : 25 euros les 5 jours, 6 euros par jour ou 5 euros la demi journée.

        Pour plus de renseignements, contacter Christophe au 03 22 95 37 99 ou astt@wanadoo.fr.','lieu' => 'Amiens','date' => '1324249200','tournoi' => '0'),
        array('id' => '129','nom' => 'Stage Jeunes du 19 au 23 décembre 2011','description' => 'Le club organise un stage du lundi 19 décembre au vendredi 23 décembre 2011.

        Les entraînements auront lieu de 9h45 à 12h30 et(ou) de 13h30 à 17h30.

        Possibilité de déjeuner sur place et de faire réchauffer son repas.

        Le club offre le goûter pour les participants.

        Coût du stage : 25 euros les 5 jours, 6 euros par jour ou 5 euros la demi journée.

        Pour plus de renseignements, contacter Christophe au 03 22 95 37 99 ou astt@wanadoo.fr.','lieu' => 'Amiens','date' => '1324335600','tournoi' => '0'),
        array('id' => '130','nom' => 'Stage Jeunes du 19 au 23 décembre 2011','description' => 'Le club organise un stage du lundi 19 décembre au vendredi 23 décembre 2011.

        Les entraînements auront lieu de 9h45 à 12h30 et(ou) de 13h30 à 17h30.

        Possibilité de déjeuner sur place et de faire réchauffer son repas.

        Le club offre le goûter pour les participants.

        Coût du stage : 25 euros les 5 jours, 6 euros par jour ou 5 euros la demi journée.

        Pour plus de renseignements, contacter Christophe au 03 22 95 37 99 ou astt@wanadoo.fr.','lieu' => 'Amiens','date' => '1324422000','tournoi' => '0'),
        array('id' => '131','nom' => 'Stage Jeunes du 19 au 23 décembre 2011','description' => 'Le club organise un stage du lundi 19 décembre au vendredi 23 décembre 2011.

        Les entraînements auront lieu de 9h45 à 12h30 et(ou) de 13h30 à 17h30.

        Possibilité de déjeuner sur place et de faire réchauffer son repas.

        Le club offre le goûter pour les participants.

        Coût du stage : 25 euros les 5 jours, 6 euros par jour ou 5 euros la demi journée.

        Pour plus de renseignements, contacter Christophe au 03 22 95 37 99 ou astt@wanadoo.fr.','lieu' => 'Amiens','date' => '1324508400','tournoi' => '0'),
        array('id' => '132','nom' => 'Stage Jeunes du 19 au 23 décembre 2011','description' => 'Le club organise un stage du lundi 19 décembre au vendredi 23 décembre 2011.

        Les entraînements auront lieu de 9h45 à 12h30 et(ou) de 13h30 à 17h30.

        Possibilité de déjeuner sur place et de faire réchauffer son repas.

        Le club offre le goûter pour les participants.

        Coût du stage : 25 euros les 5 jours, 6 euros par jour ou 5 euros la demi journée.

        Pour plus de renseignements, contacter Christophe au 03 22 95 37 99 ou astt@wanadoo.fr.','lieu' => 'Amiens','date' => '1324594800','tournoi' => '0'),
        array('id' => '133','nom' => '2e tour du critérium fédéral handisport','description' => 'Emmanuel Legrand participera au deuxième Tour du Critérium Fédéral Handisport Interrégional "A2-A3" le samedi 7 janvier 2012 à Lille.','lieu' => 'Lille','date' => '1325890800','tournoi' => '0'),
        array('id' => '134','nom' => 'Réunion bilan de la 1ère phase du championnat par équipes','description' => 'La réunion débutera à 18h00.','lieu' => 'Amiens Sport TT','date' => '1324335600','tournoi' => '0'),
        array('id' => '135','nom' => 'Stage d\'entraînement','description' => 'Le club organise un stage d\'entraînement du mardi 28 février au jeudi 1er mars.

        Les séances d\'entraînement auront lieu de 9h45 à 12h30 et/ou de 13h30 à 17h30 (possibilité de déjeuner au club).

        Le club offre le goûter.

        Coût du stage : 15€ les 3 jours, 6€ par jour ou 5€ la demi-journée

        Pour plus de renseignements, s\'adresser à Christophe Harlé au 03 22 95 37 99 ou astt@wanadoo.fr.','lieu' => 'Amiens Sport TT','date' => '1330383600','tournoi' => '0'),
        array('id' => '136','nom' => 'Stage d\'entraînement','description' => 'Le club organise un stage d\'entraînement du mardi 28 février au jeudi 1er mars.

        Les séances d\'entraînement auront lieu de 9h45 à 12h30 et/ou de 13h30 à 17h30 (possibilité de déjeuner au club).

        Le club offre le goûter.

        Coût du stage : 15€ les 3 jours, 6€ par jour ou 5€ la demi-journée

        Pour plus de renseignements, s\'adresser à Christophe Harlé au 03 22 95 37 99 ou astt@wanadoo.fr.','lieu' => 'Amiens Sport TT','date' => '1330470000','tournoi' => '0'),
        array('id' => '137','nom' => 'Stage d\'entraînement','description' => 'Le club organise un stage d\'entraînement du mardi 28 février au jeudi 1er mars.

        Les séances d\'entraînement auront lieu de 9h45 à 12h30 et/ou de 13h30 à 17h30 (possibilité de déjeuner au club).

        Le club offre le goûter.

        Coût du stage : 15€ les 3 jours, 6€ par jour ou 5€ la demi-journée

        Pour plus de renseignements, s\'adresser à Christophe Harlé au 03 22 95 37 99 ou astt@wanadoo.fr.','lieu' => 'Amiens Sport TT','date' => '1330556400','tournoi' => '0'),
        array('id' => '138','nom' => 'Interclubs Régionaux','description' => '','lieu' => 'Soissons','date' => '1332630000','tournoi' => '0'),
        array('id' => '139','nom' => 'Championnats de France Handisport','description' => '','lieu' => 'Ceyrat','date' => '1337983200','tournoi' => '0'),
        array('id' => '140','nom' => 'Championnats de France Handisport','description' => '','lieu' => 'Ceyrat','date' => '1338069600','tournoi' => '0'),
        array('id' => '141','nom' => 'Championnats de France Handisport','description' => '','lieu' => 'Ceyrat','date' => '1338156000','tournoi' => '0')
        );

        // `astt`.`Interviews`
        $Interviews = array(
        array('id' => '1','joueur' => '8015152','date' => '1293058800','texte' => 'Surnom : Vaquero.
        1ère licence : avril 2008.
        Style de jeu : gaucher, joueur de toucher, déplacement économe.
        Bois : "attends j\'vais voir", Butterfly Maze Off.
        Plaques : Joola Energy Green Power 2.0mm
        Point fort : zit.
        Point faible : aucun.
        Cri : "Youguiiiii"
        Meilleur souvenir : Point de ouf à Tours interclubs en mai 2009. Vidéo disponible sur Facebook.
        Joueur favori : Michael MAZE. Au club : Yannick MARAIS.
        Sportif favori : Raphaël NADAL.
        Objectif : classé 16 en fin de saison, championnat de France des régions.
        Meilleur performance : 17 (Oudaille).
        Temps qu\'il se donne pour battre son relanceur Denis Chatelain : "2 mois même pas !"
        Cadeau de noël réclamé au président : une raquette à chaque perf\'.
        Futur : entraîneur.'),
        array('id' => '2','joueur' => '8014092','date' => '1286834400','texte' => 'Surnom : Biloute.
        1ère licence : 2008.
        Bois : Matsushita Power Defense.
        Plaques : Pilot Style 1.9mm, Feint Long III 0.9mm
        Cri : "Tchô"
        Meilleur souvenir : Victoire aux interclubs nationaux en 2009
        Plus mauvais souvenir : Ma contre à 8 en 1/4 de finale sur le match décisif.
        Joueur favori : Timo Boll.
        Au club : Yannick MARAIS.
        Point fort : Jeu varié.
        Point faible : Mon agacement parfois.
        Objectif : classé 12.
        Message : Dédicace à tous !'),
        array('id' => '3','joueur' => '807050','date' => '1287612000','texte' => 'Surnom : Coachette !
        Bois : Tibhar IV S.
        Plaques : Nimbus.
        Cri : "Tchô !!"
        Meilleur souvenir : Finales par classement il y a trois ans (2007).
        Plus mauvais souvenir : Toutes les montées ratées vers la pré-nat.
        Sportif favori : Raphaël Nadal.
        Joueur favori : aucun...
        Au club : Julia Flahaut pour sa confiance en elle !
        Point fort : Pivot.
        Point faible : Services.
        Objectif : classé 10 en fin de saison.
        Message : "Ah bon faut faire dans le social ?"'),
        array('id' => '4','joueur' => '8013188','date' => '1293058800','texte' => 'Surnom : Ben J.
        Bois : Andro Core Cell off.
        Revêtements : Ouragan 37 en CD, Skyline TG3 en Revers.
        Meilleur souvenir : Victoire de Simon Gauzy (Levallois) sur Andrej Gacina (Charleroi) en ECL.
        Plus mauvais : "Aucun, que du bonheur !"
        Sportif préféré : Vladimir Samsonov pour ses blocs actifs.
        Au club : Jan Ove Goupil et Philippe Riquart.
        Superstition : Jouer l\'estomac plein.
        Cri : "Tchaaaaaaa"
        Point fort : Bloc.
        Point faible : Tendu en compétition
        Objectif : Maintien en D2 aux indivs et 950 points au compteur pour arbitrer au niveau national.
        Message : "Que le ping reste un jeu !"')
        );

        // `astt`.`Joueurs`
        $Joueurs = array(
        array('licence' => '8016191','nom' => 'ALBERT','prenom' => ' Clotilde ','date_naissance' => '1999-08-11','sexe' => 'F','categorie' => 'M2','points' => '500','classement' => '5','equipe' => NULL,'equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8013188','nom' => 'BATHELOT','prenom' => ' Benjamin ','date_naissance' => '1991-03-21','sexe' => 'M','categorie' => 'S','points' => '789','classement' => '7','equipe' => '9','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8011223','nom' => 'BATHELOT','prenom' => ' bertrand ','date_naissance' => '1966-10-04','sexe' => 'M','categorie' => 'V1','points' => '1778','classement' => '17','equipe' => '3','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8015740','nom' => 'BEAUFRERE','prenom' => ' Florian ','date_naissance' => '1995-03-02','sexe' => 'M','categorie' => 'J2','points' => '684','classement' => '6','equipe' => '11','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8015571','nom' => 'BELOT','prenom' => ' Maxime ','date_naissance' => '1993-11-05','sexe' => 'M','categorie' => 'S','points' => '526','classement' => '5','equipe' => NULL,'equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '1414595','nom' => 'BERRIAT','prenom' => ' Leny ','date_naissance' => '1989-08-08','sexe' => 'M','categorie' => 'S','points' => '1459','classement' => '14','equipe' => '4','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '508698','nom' => 'BERTHELOT','prenom' => ' marion ','date_naissance' => '1990-01-31','sexe' => 'F','categorie' => 'S','points' => '1001','classement' => '10','equipe' => '14','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8011182','nom' => 'BLATRIX','prenom' => ' Maxime ','date_naissance' => '1992-09-03','sexe' => 'M','categorie' => 'S','points' => '1862','classement' => '18','equipe' => '2','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '808987','nom' => 'BLOQUET','prenom' => ' Jacques ','date_naissance' => '1943-10-04','sexe' => 'M','categorie' => 'V3','points' => '884','classement' => '8','equipe' => '12','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8013900','nom' => 'BODINEL','prenom' => ' Léo ','date_naissance' => '1998-03-04','sexe' => 'M','categorie' => 'C1','points' => '1082','classement' => '10','equipe' => '6','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8013061','nom' => 'BODINEL','prenom' => ' Paul ','date_naissance' => '1995-12-12','sexe' => 'M','categorie' => 'J2','points' => '1100','classement' => '11','equipe' => '7','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8016279','nom' => 'BOINET','prenom' => ' paul ','date_naissance' => '2000-01-15','sexe' => 'M','categorie' => 'M1','points' => '591','classement' => '5','equipe' => '7','equipe_m' => NULL,'equipe_j' => '15'),
        array('licence' => '8013176','nom' => 'BONTE','prenom' => ' Benoit ','date_naissance' => '1995-12-18','sexe' => 'M','categorie' => 'J2','points' => '791','classement' => '7','equipe' => '8','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8018','nom' => 'BOURRE','prenom' => ' Dany ','date_naissance' => '1949-01-24','sexe' => 'M','categorie' => 'V3','points' => '580','classement' => '5','equipe' => NULL,'equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8015741','nom' => 'BOUTEILLER','prenom' => ' Hugo ','date_naissance' => '1995-10-29','sexe' => 'M','categorie' => 'J2','points' => '816','classement' => '8','equipe' => '11','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8013916','nom' => 'CAHAGNE','prenom' => ' Brigitte ','date_naissance' => '1958-09-08','sexe' => 'F','categorie' => 'V2','points' => '500','classement' => '5','equipe' => NULL,'equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8011378','nom' => 'CAILLOIN','prenom' => ' Yoann ','date_naissance' => '1978-08-06','sexe' => 'M','categorie' => 'S','points' => '1336','classement' => '13','equipe' => '5','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '804688','nom' => 'CANY','prenom' => ' laurent ','date_naissance' => '1976-05-20','sexe' => 'M','categorie' => 'S','points' => '1961','classement' => '19','equipe' => '0','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '806027','nom' => 'CARLIE','prenom' => ' hélène ','date_naissance' => '1984-02-29','sexe' => 'F','categorie' => 'S','points' => '1424','classement' => '14','equipe' => '13','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8016695','nom' => 'CARLIER','prenom' => ' Axel ','date_naissance' => '2001-05-20','sexe' => 'M','categorie' => 'B2','points' => '500','classement' => '5','equipe' => NULL,'equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8014985','nom' => 'CATTEAU','prenom' => ' Didier ','date_naissance' => '1967-06-01','sexe' => 'M','categorie' => 'V1','points' => '921','classement' => '9','equipe' => '12','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '5942528','nom' => 'CAUDRELIER','prenom' => ' Olivier ','date_naissance' => '1978-07-16','sexe' => 'M','categorie' => 'S','points' => '1319','classement' => '13','equipe' => '5','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8014536','nom' => 'CHAERLE','prenom' => ' louis ','date_naissance' => '2001-02-11','sexe' => 'M','categorie' => 'B2','points' => '1049','classement' => '10','equipe' => '6','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8011105','nom' => 'CHAERLE','prenom' => ' Patrice ','date_naissance' => '1961-10-01','sexe' => 'M','categorie' => 'V2','points' => '839','classement' => '8','equipe' => NULL,'equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8016475','nom' => 'CHAHIR','prenom' => 'Ala-eddine ','date_naissance' => '1997-03-09','sexe' => 'M','categorie' => 'C2','points' => '697','classement' => '6','equipe' => '9','equipe_m' => NULL,'equipe_j' => '15'),
        array('licence' => '8014532','nom' => 'CHARTIER','prenom' => ' Floris ','date_naissance' => '1998-07-13','sexe' => 'M','categorie' => 'C1','points' => '921','classement' => '9','equipe' => '8','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8011978','nom' => 'CHATELAIN','prenom' => ' denis ','date_naissance' => '1967-06-15','sexe' => 'M','categorie' => 'V1','points' => '2070','classement' => 'N1000','equipe' => '1','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8014053','nom' => 'CHATELAIN','prenom' => ' raphaël ','date_naissance' => '1996-04-22','sexe' => 'M','categorie' => 'J1','points' => '2011','classement' => '20','equipe' => '2','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8016216','nom' => 'CHHE','prenom' => ' Gregory ','date_naissance' => '1977-11-09','sexe' => 'M','categorie' => 'S','points' => '738','classement' => '7','equipe' => '10','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8014369','nom' => 'COCQUET','prenom' => ' Olivier ','date_naissance' => '1990-05-02','sexe' => 'M','categorie' => 'S','points' => '729','classement' => '7','equipe' => '9','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '9G671','nom' => 'COMBO','prenom' => ' Combo ali ','date_naissance' => '1986-11-05','sexe' => 'M','categorie' => 'S','points' => '1276','classement' => '12','equipe' => '6','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '9414158','nom' => 'CORRE','prenom' => ' Cédric ','date_naissance' => '1977-04-10','sexe' => 'M','categorie' => 'S','points' => '2392','classement' => 'N277','equipe' => '1','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '619249','nom' => 'CREMET','prenom' => ' Jessica ','date_naissance' => '1984-07-07','sexe' => 'F','categorie' => 'S','points' => '500','classement' => '5','equipe' => NULL,'equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8010745','nom' => 'CREUNET','prenom' => ' Alexandre ','date_naissance' => '1989-08-19','sexe' => 'M','categorie' => 'S','points' => '1663','classement' => '16','equipe' => NULL,'equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8016669','nom' => 'DA COSTA','prenom' => 'Fabien ','date_naissance' => '1997-10-09','sexe' => 'M','categorie' => 'C2','points' => '500','classement' => '5','equipe' => NULL,'equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '3411267','nom' => 'DAVID','prenom' => ' ludovic ','date_naissance' => '1979-08-14','sexe' => 'M','categorie' => 'S','points' => '962','classement' => '9','equipe' => '0','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8013573','nom' => 'DE CATHEU','prenom' => 'Christophe ','date_naissance' => '1999-09-10','sexe' => 'M','categorie' => 'M2','points' => '520','classement' => '5','equipe' => NULL,'equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8011160','nom' => 'DE CATHEU','prenom' => 'Cyril ','date_naissance' => '1995-05-31','sexe' => 'M','categorie' => 'J2','points' => '1235','classement' => '12','equipe' => '5','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8011161','nom' => 'DE CATHEU','prenom' => 'Henry ','date_naissance' => '1993-09-04','sexe' => 'M','categorie' => 'S','points' => '704','classement' => '7','equipe' => NULL,'equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8014420','nom' => 'DE VISME','prenom' => 'Thibault ','date_naissance' => '1991-11-02','sexe' => 'M','categorie' => 'S','points' => '1049','classement' => '10','equipe' => '6','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8016766','nom' => 'DEFOSSE','prenom' => ' Gustav ','date_naissance' => '2002-03-07','sexe' => 'M','categorie' => 'B1','points' => '500','classement' => '5','equipe' => NULL,'equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8014484','nom' => 'DEGUINGAND','prenom' => ' Andrei ','date_naissance' => '2000-01-30','sexe' => 'M','categorie' => 'M1','points' => '1070','classement' => '10','equipe' => '4','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8016693','nom' => 'DEMOL','prenom' => ' Adrien ','date_naissance' => '1999-12-05','sexe' => 'M','categorie' => 'M2','points' => '500','classement' => '5','equipe' => NULL,'equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8016288','nom' => 'DESJONQUERES','prenom' => ' Keziah ','date_naissance' => '2001-04-24','sexe' => 'M','categorie' => 'B2','points' => '500','classement' => '5','equipe' => NULL,'equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8014432','nom' => 'DUBOIS','prenom' => ' Lucas ','date_naissance' => '1997-01-26','sexe' => 'M','categorie' => 'C2','points' => '1643','classement' => '16','equipe' => '2','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8016697','nom' => 'DUC','prenom' => ' Pierre antoine ','date_naissance' => '2000-04-03','sexe' => 'M','categorie' => 'M1','points' => '500','classement' => '5','equipe' => NULL,'equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8012651','nom' => 'FENDORF','prenom' => ' Valentin ','date_naissance' => '1992-02-06','sexe' => 'M','categorie' => 'S','points' => '1410','classement' => '14','equipe' => '5','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8013652','nom' => 'FERAUD','prenom' => ' Arnaud ','date_naissance' => '1993-12-07','sexe' => 'M','categorie' => 'S','points' => '1277','classement' => '12','equipe' => '6','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8013575','nom' => 'FLAHAUT','prenom' => ' Julia ','date_naissance' => '1997-07-29','sexe' => 'F','categorie' => 'C2','points' => '969','classement' => '9','equipe' => '13','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '804295','nom' => 'FLAMENT','prenom' => ' Marc ','date_naissance' => '1963-05-20','sexe' => 'M','categorie' => 'V1','points' => '1335','classement' => '13','equipe' => NULL,'equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8015204','nom' => 'FOURNIER','prenom' => ' quentin ','date_naissance' => '1992-04-01','sexe' => 'M','categorie' => 'S','points' => '738','classement' => '7','equipe' => '0','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '7627502','nom' => 'GILOT','prenom' => ' Geoffroy ','date_naissance' => '1992-12-27','sexe' => 'M','categorie' => 'S','points' => '1122','classement' => '11','equipe' => '7','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8016137','nom' => 'GOUPIL','prenom' => ' Alexandre ','date_naissance' => '1993-03-27','sexe' => 'M','categorie' => 'S','points' => '608','classement' => '6','equipe' => '10','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '6015008','nom' => 'GRUGEON','prenom' => ' Charline ','date_naissance' => '1996-02-28','sexe' => 'F','categorie' => 'J1','points' => '1266','classement' => '12','equipe' => '13','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '809648','nom' => 'GUICHARD','prenom' => ' Delphine ','date_naissance' => '1968-08-24','sexe' => 'F','categorie' => 'V1','points' => '898','classement' => '8','equipe' => '14','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8012827','nom' => 'HAIGNERE','prenom' => ' Alexandre ','date_naissance' => '1993-01-07','sexe' => 'M','categorie' => 'S','points' => '1883','classement' => '18','equipe' => '1','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8016694','nom' => 'HAMDAD','prenom' => ' Adem ','date_naissance' => '2005-09-02','sexe' => 'M','categorie' => 'P','points' => '500','classement' => '5','equipe' => NULL,'equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8016585','nom' => 'HAMDAD','prenom' => ' Ymad ','date_naissance' => '2001-08-17','sexe' => 'M','categorie' => 'B2','points' => '500','classement' => '5','equipe' => NULL,'equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '805540','nom' => 'HARLE','prenom' => ' Christophe ','date_naissance' => '1973-11-11','sexe' => 'M','categorie' => 'S','points' => '2174','classement' => 'N621','equipe' => '2','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8013574','nom' => 'HAUW','prenom' => ' Joffrey ','date_naissance' => '1997-06-02','sexe' => 'M','categorie' => 'C2','points' => '691','classement' => '6','equipe' => '11','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8012855','nom' => 'HELAINE','prenom' => ' Béatrice ','date_naissance' => '1955-02-27','sexe' => 'F','categorie' => 'V2','points' => '500','classement' => '5','equipe' => NULL,'equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8096','nom' => 'HELAINE','prenom' => ' Jacques ','date_naissance' => '1941-05-25','sexe' => 'M','categorie' => 'V4','points' => '979','classement' => '9','equipe' => NULL,'equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8010806','nom' => 'HENON','prenom' => ' Christian ','date_naissance' => '1967-05-23','sexe' => 'M','categorie' => 'V1','points' => '1876','classement' => '18','equipe' => '3','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8016219','nom' => 'HERBIN','prenom' => ' TENEUR Timeo ','date_naissance' => '2002-02-18','sexe' => 'M','categorie' => 'B1','points' => '500','classement' => '5','equipe' => NULL,'equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '804888','nom' => 'HERLY','prenom' => ' François ','date_naissance' => '1984-04-19','sexe' => 'M','categorie' => 'S','points' => '1573','classement' => '15','equipe' => '4','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '804914','nom' => 'HERMANT','prenom' => ' Cédric ','date_naissance' => '1980-06-28','sexe' => 'M','categorie' => 'S','points' => '1998','classement' => '19','equipe' => '3','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8015277','nom' => 'HERSENT','prenom' => ' Léo ','date_naissance' => '2002-05-16','sexe' => 'M','categorie' => 'B1','points' => '906','classement' => '9','equipe' => '7','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8015387','nom' => 'HERSENT','prenom' => ' Tristan ','date_naissance' => '2001-01-05','sexe' => 'M','categorie' => 'B2','points' => '1020','classement' => '10','equipe' => '6','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8014092','nom' => 'HUON','prenom' => ' Antoine ','date_naissance' => '1998-10-05','sexe' => 'M','categorie' => 'C1','points' => '1225','classement' => '12','equipe' => '3','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8015295','nom' => 'HUON','prenom' => ' Marine ','date_naissance' => '2001-08-30','sexe' => 'F','categorie' => 'B2','points' => '594','classement' => '5','equipe' => NULL,'equipe_m' => NULL,'equipe_j' => '16'),
        array('licence' => '8015875','nom' => 'HURE','prenom' => ' Léa ','date_naissance' => '2000-02-18','sexe' => 'F','categorie' => 'M1','points' => '609','classement' => '6','equipe' => '14','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8014768','nom' => 'HURE','prenom' => ' Valentine ','date_naissance' => '1997-12-01','sexe' => 'F','categorie' => 'C2','points' => '597','classement' => '5','equipe' => '14','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8015466','nom' => 'KLOPP','prenom' => ' Thibaut ','date_naissance' => '1999-01-10','sexe' => 'M','categorie' => 'M2','points' => '526','classement' => '5','equipe' => NULL,'equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8011159','nom' => 'LAMERANT','prenom' => ' Matthieu ','date_naissance' => '1991-09-25','sexe' => 'M','categorie' => 'S','points' => '1233','classement' => '12','equipe' => '7','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8012296','nom' => 'LAMOUR','prenom' => ' Maximilien ','date_naissance' => '1989-10-04','sexe' => 'M','categorie' => 'S','points' => '1516','classement' => '15','equipe' => '5','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '4916071','nom' => 'LE GALLOUDEC','prenom' => 'Pierre ','date_naissance' => '1984-06-09','sexe' => 'M','categorie' => 'S','points' => '1814','classement' => '18','equipe' => '3','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8012235','nom' => 'LECOMTE','prenom' => ' Patrice ','date_naissance' => '1957-02-10','sexe' => 'M','categorie' => 'V2','points' => '1085','classement' => '10','equipe' => NULL,'equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8010540','nom' => 'LECOMTE','prenom' => ' Yohan ','date_naissance' => '1986-06-12','sexe' => 'M','categorie' => 'S','points' => '1941','classement' => '19','equipe' => '1','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8013561','nom' => 'LEFEVRE','prenom' => ' Loïc ','date_naissance' => '1998-10-09','sexe' => 'M','categorie' => 'C1','points' => '1285','classement' => '12','equipe' => '4','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8014935','nom' => 'LEGRIS','prenom' => ' Thomas ','date_naissance' => '2001-08-31','sexe' => 'M','categorie' => 'B2','points' => '621','classement' => '6','equipe' => NULL,'equipe_m' => NULL,'equipe_j' => '15'),
        array('licence' => '80499','nom' => 'L\'HOTE','prenom' => ' Philippe ','date_naissance' => '1967-02-25','sexe' => 'M','categorie' => 'V1','points' => '1808','classement' => '18','equipe' => '3','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8011054','nom' => 'MARAIS','prenom' => ' Yannick ','date_naissance' => '1979-09-13','sexe' => 'M','categorie' => 'S','points' => '2495','classement' => 'N186','equipe' => '1','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8515270','nom' => 'MARIE','prenom' => ' Eddy ','date_naissance' => '1991-01-06','sexe' => 'M','categorie' => 'S','points' => '1454','classement' => '14','equipe' => NULL,'equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '625731','nom' => 'MARTEL','prenom' => ' Christian ','date_naissance' => '1952-04-30','sexe' => 'M','categorie' => 'V2','points' => '526','classement' => '5','equipe' => NULL,'equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8015484','nom' => 'MARTIN','prenom' => ' Julien ','date_naissance' => '2001-05-28','sexe' => 'M','categorie' => 'B2','points' => '1112','classement' => '11','equipe' => '5','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '80133','nom' => 'MARYSSE','prenom' => ' Bruno ','date_naissance' => '1958-09-28','sexe' => 'M','categorie' => 'V2','points' => '1752','classement' => '17','equipe' => NULL,'equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8011876','nom' => 'MENARD','prenom' => ' Alexandre ','date_naissance' => '1980-02-15','sexe' => 'M','categorie' => 'S','points' => '1316','classement' => '13','equipe' => '5','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8016214','nom' => 'NADAU','prenom' => ' Benoit ','date_naissance' => '2001-12-26','sexe' => 'M','categorie' => 'B2','points' => '500','classement' => '5','equipe' => NULL,'equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8015847','nom' => 'NADAU','prenom' => 'Pierre-philippe ','date_naissance' => '2000-01-27','sexe' => 'M','categorie' => 'M1','points' => '520','classement' => '5','equipe' => '9','equipe_m' => NULL,'equipe_j' => '15'),
        array('licence' => '807050','nom' => 'NEEL','prenom' => ' Aurélie ','date_naissance' => '1983-06-14','sexe' => 'F','categorie' => 'S','points' => '914','classement' => '9','equipe' => '14','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8012824','nom' => 'PETITPREZ','prenom' => ' Caroline ','date_naissance' => '1995-09-05','sexe' => 'F','categorie' => 'J2','points' => '1477','classement' => '14','equipe' => '13','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '7624666','nom' => 'PLOTUNA','prenom' => ' Malin ','date_naissance' => '1978-05-07','sexe' => 'M','categorie' => 'S','points' => '2487','classement' => 'N195','equipe' => '1','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8016171','nom' => 'POULAIN','prenom' => ' Jean-paul ','date_naissance' => '1959-03-03','sexe' => 'M','categorie' => 'V2','points' => '1391','classement' => '13','equipe' => '4','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8015210','nom' => 'PRUVOT','prenom' => ' Sylvain ','date_naissance' => '1995-08-08','sexe' => 'M','categorie' => 'J2','points' => '585','classement' => '5','equipe' => '12','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '6013925','nom' => 'RASSELET','prenom' => ' Vincent ','date_naissance' => '1993-02-05','sexe' => 'M','categorie' => 'S','points' => '1766','classement' => '17','equipe' => '2','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8013548','nom' => 'RIQUART','prenom' => ' Philippe ','date_naissance' => '1967-11-08','sexe' => 'M','categorie' => 'V1','points' => '1473','classement' => '14','equipe' => NULL,'equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8016698','nom' => 'ROSE','prenom' => ' Valentin ','date_naissance' => '1998-03-24','sexe' => 'M','categorie' => 'C1','points' => '500','classement' => '5','equipe' => NULL,'equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8016696','nom' => 'ROUGIER','prenom' => ' Armand ','date_naissance' => '2001-08-06','sexe' => 'M','categorie' => 'B2','points' => '500','classement' => '5','equipe' => NULL,'equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8014047','nom' => 'SCHILDKNECHT','prenom' => ' Florent ','date_naissance' => '1991-10-27','sexe' => 'M','categorie' => 'S','points' => '1173','classement' => '11','equipe' => '6','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '804423','nom' => 'SELLIER','prenom' => ' Arnaud ','date_naissance' => '1979-11-09','sexe' => 'M','categorie' => 'S','points' => '2279','classement' => 'N395','equipe' => NULL,'equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '805450','nom' => 'SELLIER','prenom' => ' Jean-robert ','date_naissance' => '1951-05-03','sexe' => 'M','categorie' => 'V3','points' => '526','classement' => '5','equipe' => NULL,'equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8016192','nom' => 'STEELANDT','prenom' => ' Clemence ','date_naissance' => '2001-02-05','sexe' => 'F','categorie' => 'B2','points' => '500','classement' => '5','equipe' => NULL,'equipe_m' => NULL,'equipe_j' => '16'),
        array('licence' => '8016193','nom' => 'STEELANDT','prenom' => ' Pauline ','date_naissance' => '2003-07-16','sexe' => 'F','categorie' => 'P','points' => '500','classement' => '5','equipe' => NULL,'equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8016668','nom' => 'STEELANDT','prenom' => ' Stephane ','date_naissance' => '1970-10-15','sexe' => 'M','categorie' => 'V1','points' => '500','classement' => '5','equipe' => NULL,'equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8014847','nom' => 'STEPHAN','prenom' => ' Jeoffrey ','date_naissance' => '1995-01-03','sexe' => 'M','categorie' => 'J2','points' => '898','classement' => '8','equipe' => '8','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '80167','nom' => 'TAQUET','prenom' => ' Jean ','date_naissance' => '1953-12-11','sexe' => 'M','categorie' => 'V2','points' => '2026','classement' => '20','equipe' => NULL,'equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8015291','nom' => 'TRAN','prenom' => ' Richard ','date_naissance' => '1997-06-13','sexe' => 'M','categorie' => 'C2','points' => '744','classement' => '7','equipe' => '10','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8015385','nom' => 'TRAN','prenom' => ' Sophie ','date_naissance' => '2000-04-08','sexe' => 'F','categorie' => 'M1','points' => '502','classement' => '5','equipe' => NULL,'equipe_m' => NULL,'equipe_j' => '16'),
        array('licence' => '8012315','nom' => 'VANDEWOESTYNE','prenom' => ' Louis ','date_naissance' => '1996-02-29','sexe' => 'M','categorie' => 'J1','points' => '1332','classement' => '13','equipe' => '4','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8014240','nom' => 'VANDEWOESTYNE','prenom' => ' Paul ','date_naissance' => '1999-02-12','sexe' => 'M','categorie' => 'M2','points' => '843','classement' => '8','equipe' => '8','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8015708','nom' => 'VANIER','prenom' => ' Eline ','date_naissance' => '2001-08-03','sexe' => 'F','categorie' => 'B2','points' => '569','classement' => '5','equipe' => NULL,'equipe_m' => NULL,'equipe_j' => '16'),
        array('licence' => '8015709','nom' => 'VANIER','prenom' => ' Elvire ','date_naissance' => '2001-08-03','sexe' => 'F','categorie' => 'B2','points' => '605','classement' => '6','equipe' => NULL,'equipe_m' => NULL,'equipe_j' => '16'),
        array('licence' => '8016670','nom' => 'VANIER','prenom' => ' Lise ','date_naissance' => '1999-07-31','sexe' => 'F','categorie' => 'M2','points' => '500','classement' => '5','equipe' => NULL,'equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8011366','nom' => 'VAQUETTE','prenom' => ' Claudette ','date_naissance' => '1941-08-18','sexe' => 'F','categorie' => 'V3','points' => '500','classement' => '5','equipe' => NULL,'equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8015152','nom' => 'VAQUIER','prenom' => ' Benoit ','date_naissance' => '1996-05-19','sexe' => 'M','categorie' => 'J1','points' => '1570','classement' => '15','equipe' => '2','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8013932','nom' => 'VAUCHERET','prenom' => ' Xavier ','date_naissance' => '1945-07-08','sexe' => 'M','categorie' => 'V3','points' => '992','classement' => '9','equipe' => '7','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '808254','nom' => 'VOLKAMER','prenom' => ' Marie-jeanne ','date_naissance' => '1957-04-23','sexe' => 'F','categorie' => 'V2','points' => '500','classement' => '5','equipe' => NULL,'equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8013577','nom' => 'WALLON','prenom' => ' enguerrand ','date_naissance' => '1999-11-29','sexe' => 'M','categorie' => 'M2','points' => '665','classement' => '6','equipe' => '11','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8016180','nom' => 'WILHEM','prenom' => ' Benjamin ','date_naissance' => '2000-03-20','sexe' => 'M','categorie' => 'M1','points' => '500','classement' => '5','equipe' => NULL,'equipe_m' => NULL,'equipe_j' => '15'),
        array('licence' => '089309','nom' => 'COUTURIER','prenom' => 'Kévin','date_naissance' => '1993-11-30','sexe' => 'M','categorie' => 'S','points' => '1032','classement' => '10','equipe' => '7','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8015292','nom' => 'HENAO','prenom' => 'Victor','date_naissance' => '1998-07-06','sexe' => 'M','categorie' => 'C1','points' => '659','classement' => '6','equipe' => '10','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '721967','nom' => 'BLED','prenom' => 'Erwan','date_naissance' => '1993-04-11','sexe' => 'M','categorie' => 'S','points' => '595','classement' => '5','equipe' => '10','equipe_m' => NULL,'equipe_j' => NULL),
        array('licence' => '8013114','nom' => 'COUILLET','prenom' => 'Rémi','date_naissance' => '1995-11-17','sexe' => 'M','categorie' => 'J2','points' => '714','classement' => '7','equipe' => '12','equipe_m' => '0','equipe_j' => '0')
        );

        // `astt`.`Liens`
        $Liens = array(
        array('id' => '1','categorie' => '1','libelle' => 'CD Somme','lien' => 'http://www.cdtt80.com'),
        array('id' => '2','categorie' => '1','libelle' => 'CD Aisne','lien' => 'http://www.cd02tt.net/'),
        array('id' => '3','categorie' => '1','libelle' => 'CD Oise','lien' => 'http://www.comiteoisett.fr/'),
        array('id' => '5','categorie' => '1','libelle' => 'CR Arbitrage','lien' => 'http://www.cra19.fr/'),
        array('id' => '6','categorie' => '1','libelle' => 'FFTT','lien' => 'http://www.fftt.com/'),
        array('id' => '7','categorie' => '1','libelle' => 'ETTU','lien' => 'http://www.ettu.org/'),
        array('id' => '8','categorie' => '1','libelle' => 'ITTF','lien' => 'http://www.ittf.com/'),
        array('id' => '4','categorie' => '1','libelle' => 'Ligue de Picardie','lien' => 'http://www.lptt.net/index2.htm'),
        array('id' => '9','categorie' => '1','libelle' => 'Zone','lien' => 'http://www.z6tt.net/'),
        array('id' => '10','categorie' => '2','libelle' => 'Abbeville','lien' => 'http://www.acabbevillett.com/'),
        array('id' => '11','categorie' => '2','libelle' => 'Amiens LL','lien' => 'http://amiensleolagrange.free.fr/index.php'),
        array('id' => '12','categorie' => '2','libelle' => 'Villers-Bretonneux','lien' => 'http://pingpongcvillersbtx.free.fr/'),
        array('id' => '13','categorie' => '2','libelle' => 'Péronne','lien' => 'http://ttperonne.free.fr/'),
        array('id' => '14','categorie' => '2','libelle' => 'Mers','lien' => 'http://www.ttmte.fr/pages/0.html'),
        array('id' => '15','categorie' => '2','libelle' => 'Berck','lien' => 'http://www.berck-tt.fr.gd/'),
        array('id' => '16','categorie' => '2','libelle' => 'Doullens','lien' => 'http://www.db-tennis-de-table.com/'),
        array('id' => '17','categorie' => '2','libelle' => 'Saint Fuscien','lien' => 'http://stfuscientt.free.fr/'),
        array('id' => '18','categorie' => '2','libelle' => 'Flixecourt','lien' => 'http://ville-le-marclet-flixecourt-tt.org/plan.html'),
        array('id' => '19','categorie' => '2','libelle' => 'Poix de picardie','lien' => 'http://us-poix-tennis-de-table.kif.fr/accueil-c103549'),
        array('id' => '20','categorie' => '2','libelle' => 'Eppeville','lien' => 'http://tennisdetableeppevillois.jimdo.com/'),
        array('id' => '21','categorie' => '2','libelle' => 'Longueau','lien' => 'http://escltt.free.fr'),
        array('id' => '22','categorie' => '2','libelle' => 'Proyart','lien' => 'http://asttproyart.free.fr/topic/index.html'),
        array('id' => '23','categorie' => '2','libelle' => 'Muillois','lien' => 'http://ppcmuillois.e-monsite.com/'),
        array('id' => '24','categorie' => '3','libelle' => 'Villers Saint Paul','lien' => 'http://www.ttvillersstpaul.fr/'),
        array('id' => '25','categorie' => '3','libelle' => 'Vignemont','lien' => 'http://membres.multimania.fr/chevignemont/'),
        array('id' => '26','categorie' => '3','libelle' => 'Coudun','lien' => 'http://membres.multimania.fr/ttcoudun/'),
        array('id' => '27','categorie' => '3','libelle' => 'Beauvais','lien' => 'http://beauvaisoisett.free.fr/'),
        array('id' => '28','categorie' => '3','libelle' => 'Clermont EP','lien' => 'http://www.epclermont.free.fr/'),
        array('id' => '29','categorie' => '3','libelle' => 'Compiègne','lien' => 'http://tt.compiegne.free.fr/'),
        array('id' => '30','categorie' => '3','libelle' => 'Feuquieres AP','lien' => 'http://feuquieresap.forumactif.net/forum'),
        array('id' => '31','categorie' => '3','libelle' => 'Gouvieux','lien' => 'http://gouvieuxsott.unblog.fr/'),
        array('id' => '32','categorie' => '3','libelle' => 'Lamorlaye','lien' => 'http://www.pplamorlaye.fr/'),
        array('id' => '33','categorie' => '3','libelle' => 'Villers Saint Leu','lien' => 'http://uniek.pagesperso-orange.fr/'),
        array('id' => '34','categorie' => '3','libelle' => 'Choisy au bac','lien' => 'http://www.cttcb.fr/'),
        array('id' => '35','categorie' => '3','libelle' => 'Saint Leu d\'Esserent','lien' => 'http://membres.multimania.fr/esmsl/'),
        array('id' => '36','categorie' => '3','libelle' => 'ASPC','lien' => 'http://aspc.oise.pagesperso-orange.fr/'),
        array('id' => '37','categorie' => '3','libelle' => 'EPEV LTLJ','lien' => 'http://dusport.free.fr/assotj/'),
        array('id' => '38','categorie' => '4','libelle' => 'Laon','lien' => 'http://aspttlaontt.free.fr/'),
        array('id' => '39','categorie' => '4','libelle' => 'Chateau-Thierry','lien' => 'http://ctt-chateau-thierry.clubeo.com/'),
        array('id' => '40','categorie' => '4','libelle' => 'ASPTT St Quentin','lien' => 'http://www.asptt.com/club-de-sport/asptt-saint-quentin_c171/'),
        array('id' => '41','categorie' => '4','libelle' => 'Guise','lien' => 'http://ttguise.octetclub.com/spip/'),
        array('id' => '42','categorie' => '4','libelle' => 'Hirson','lien' => 'http://tt-hirson-coingt.asso.st/spip/'),
        array('id' => '43','categorie' => '4','libelle' => 'Chauny','lien' => 'http://tt-hirson-coingt.asso.st/spip/'),
        array('id' => '44','categorie' => '4','libelle' => 'Beautor Charmes','lien' => 'http://club.sportsregions.fr/tennisdetablebeautor/'),
        array('id' => '45','categorie' => '4','libelle' => 'Cuffies','lien' => 'http://llcuffies02.pagesperso-orange.fr/default.htm'),
        array('id' => '46','categorie' => '4','libelle' => 'Crouy','lien' => 'http://astt.crouy.pagesperso-orange.fr/'),
        array('id' => '47','categorie' => '4','libelle' => 'Saint Quentin','lien' => 'http://www.ttsq.new.fr/'),
        array('id' => '48','categorie' => '4','libelle' => 'Soisson','lien' => 'http://www.asptt-soissons.fr/index3.htm'),
        array('id' => '49','categorie' => '4','libelle' => 'Tergnier','lien' => 'http://www.esc-tergnier-tt.com/'),
        array('id' => '50','categorie' => '4','libelle' => 'Villers-Cotterêts','lien' => 'http://ttfc.wlc.pagesperso-orange.fr/'),
        array('id' => '51','categorie' => '4','libelle' => 'Venizel','lien' => 'http://ttvenizel.pagesperso-orange.fr/'),
        array('id' => '52','categorie' => '4','libelle' => 'Chezy','lien' => 'http://pingconcept.canalblog.com/'),
        array('id' => '53','categorie' => '4','libelle' => 'Conde en Brie','lien' => 'http://uttcb.euskadi-web.com/'),
        array('id' => '54','categorie' => '4','libelle' => 'Holnon','lien' => 'http://tthf.asso.fr/'),
        array('id' => '55','categorie' => '4','libelle' => 'Portes de Thierache','lien' => 'http://club.sportsregions.fr/ttcpt'),
        array('id' => '56','categorie' => '3','libelle' => 'Monchy St Eloi','lien' => 'http://tt.epml.free.fr/'),
        array('id' => '57','categorie' => '5','libelle' => 'CROS Picardie','lien' => 'http://picardie.franceolympique.com/accueil.php')
        );

        // `astt`.`Partenaires`
        $Partenaires = array(
        array('id' => '1','nom' => 'Amiens Métropole','lien' => 'www.amiens.fr','num_tel' => NULL),
        array('id' => '2','nom' => 'Conseil Régional de Picardie','lien' => 'www.cr-picardie.fr','num_tel' => NULL),
        array('id' => '3','nom' => 'Conseil Général de la Somme','lien' => 'www.cg80.fr','num_tel' => NULL),
        array('id' => '4','nom' => 'DRDJS','lien' => 'http://www.drdjs-picardie.jeunesse-sports.gouv.fr/','num_tel' => NULL),
        array('id' => '7','nom' => 'Pizza Paï','lien' => 'http://www.pizzapai.com/restaurant_italien/PIZZA_PAI_AMIENS.asp','num_tel' => '0322958989'),
        array('id' => '5','nom' => 'Cornilleau','lien' => 'www.cornilleau.com','num_tel' => NULL),
        array('id' => '6','nom' => 'Dauphin','lien' => 'http://tennis-de-table-dauphin.com/','num_tel' => NULL),
        array('id' => '8','nom' => 'Assurance Fréville','lien' => NULL,'num_tel' => '0322716800'),
        array('id' => '9','nom' => 'Stores Clôtures Fermetures Menuiseries de Picardie Dupont','lien' => NULL,'num_tel' => '0322915320'),
        array('id' => '10','nom' => 'Electr\'Ohm','lien' => 'http://www.electr-ohm.fr/','num_tel' => NULL),
        array('id' => '11','nom' => 'Coiffure Enzo','lien' => 'http://www.enzolecoiffeur.com/','num_tel' => NULL),
        array('id' => '12','nom' => 'Le Quai','lien' => 'http://www.restaurant-le-quai.com/','num_tel' => NULL),
        array('id' => '13','nom' => 'Boucherie La Côte de Boeuf','lien' => NULL,'num_tel' => '0322955270'),
        array('id' => '14','nom' => 'Colas Nord Picardie','lien' => 'http://www.colasnordpicardie.com/','num_tel' => NULL),
        array('id' => '15','nom' => 'Géodis Calberson','lien' => 'http://www.calberson.com/','num_tel' => NULL)
        );

        // `astt`.`Resultats`
        $Resultats = array(
        array('id' => '50','equipe' => '3','journee' => '2','date' => '1318050000','lieu' => 'Villers Saint-Paul','adversaire' => 'VILLERS ST PAUL 1','score' => '14','score_adv' => '6','commentaire' => 'VILLERS SAINT PAUL 6 / AMIENS STT III 14

        Renfort Saganne

        Samedi 8 octobre 2011. L’ASTT 3 rencontrait Villers Saint Paul. Un match déjà décisif pour le maintien (d’après ph3nlx, hacker-pongeur). Et c’est vrai, un match qui foutait les jetons. Avec des Villers-saint-Paulytechniciens au taquet, j’en ai pour preuve leur brillant match nul arraché contre Compiègne (Le nom et le prénom d’un grand joueur sont cachés dans cette phrase. Les trouveras-tu ? Non, ce n’est pas Benitos Vaqueros).

        Alors c’est vrai, nous l’avons plus joué comme Breteuil que comme Beckham. On a renforcé l’équipe… Comme des Batardessamères, une espèce de hyènes emasculées vivant à la lisière du 9.3 et du Val de Marne. Profitant d’un calendrier favorable et d’une équipe d’Argentan désargentée en N3, l’ASTT III avait recruté deux joueurs de renommée nationale : Christophe HARLE, concentré, et Vincent RASSELET, en poudre. Par contre difficile de trouver 2 joueurs de R1 prêts à s’enquiller 6 heures de route pour aller à Argentan: l’un avait piscine, les autres : théâtre, dentiste et certains diner chez belle-maman. Plus un inventaire à la Florian GAY qu’à la Prévert. Deux volontaires ont été finalement envoyés au sacrifice en N3, sur les bords de l’Orne : Denis CHATELAIN, pour soigner son arthrose, et Pierre LE GALLOUDEC, pour se rapprocher de sa Bretagne natale. Où d’ailleurs c’est encore l’été : même la pluie est chaude.

        Alors on ne va pas se mentir madame Chabot… : je n’ai rien vu de la rencontre de R1. J’ai juste lu la feuille des parties. Et j’ai fermé les yeux. Les plus grands matchs sont ceux que l’on fait en rêvant.
        Une lutte intense jusque 5/5. Puis accélération, et victoire d’Amiens 14/6.

        Plus que le prochain match à négocier, contre Breteuil 2, et nous serons maintenus. Petitement et sans gloire. Mais à part EricL, qui s’en rappellera dans 20 ans ?

        Les soutenus

        Christophe HARLE (3 victoires + double en A) : Dudu est grand. Dudu est beau. Dudu pourrait résoudre le problème de la crise Grecque. Dudu pourrait aussi arrêter les guerres et faire régner la paix dans le Monde. Mais pas aujourd’hui. Ce samedi, c’était 3 plus le double au programme. L’important, c’était les 3 points. Le monde attendra.

        Cédric HERMANT (2 victoires en A) : Une reprise de Jeux interdits cet après-midi. A commencé par Défense d’entrer, puis Défense de courir dans les couloirs, pour finir par Défense de nourrir les animaux en captivité. Tout de même brûlé vif par DELATOUR infernale, comme Steve Mac Queen en 1974 (17-15 au 5ème set).

        Vincent RASSELET (2 victoires en A + double) : Le cinquième élément. Après l’air, l’eau, la terre et le feu : le FIGHT. De gros combats contre Thibault BOUCHOIR (défaite 3/2) et Sébastien DELATOUR (victoire 3/2).

        Christian HENON (3 victoires en B) : Victime d’une chiraquite subaiguë depuis 15 jours. Ou anosognosie : trouble neuropsychologique désignant la méconnaissance par l’individu de sa maladie, de son état, même grave : la perte de ses capacités mentales et top-spinelles. Mais a oublié d’oublier ce jour : 3 victoires en B. Une petite victoire contre la maladie d’Alzheimer. De grandes victoires contre Villers Saint Paul.

        Philippe L’HOTE (2 victoires en B) : Est monté au Villet mais s’est pris quelques passings par Clément (défaite 3/2). Toujours leader du challenge « Linda de Souza » avec, dans sa valise, le petit carton jaune durement gagné lors du dernier match.

        Antoine HUON (1 victoire en B) : Grands débuts dans la compétitihuon Et première satisfactihuon : victoire contre Tony DUBEAUX et perf à 15. Congratulatihuon.

        Les expatriés

        Denis CHATELAIN (2 victoires + double en A de N3) : De retour d’un voyage d’une semaine au Lumbago, petit pays d’Afrique vertébrale. A tout de même forcé comme un cadet contre les terribles 16 argentanais. Séjournera probablement la semaine prochaine à Sciatalgie, sur les bords de la rivière Infiltration.

        Pierre LE GALLOUDEC (1 victoire en B de N3) : Merci pour ton sens du sacrifice monsieur Le  GALLOUDEC. Tu nous a montré que tu n’avais pas un Pierre à la place du cœur. Chouchen pour tous !

        Les souteneurs

        Thibault BOUCHOIR (1 victoire en A) : Dans la famille BOUCHOIR, je voudrais le frère. Pioche. Mais trois sets dans ta face, Vincent.

        Sébastien DELATOUR (1 victoire en A) : A resserré les boulons contre Cédric HERMANT : un DELATOUR de vis, à bloc, au 5ème set (victoire 3/2, à l’arrache).

        Alexis ROSEILLER (0 victoire en A) : N’a pas envoyé que des fleurs aujourd’hui mais également de gros top frappés. Mais Christophe, Cédric, Vincent, François, Paul et les autres, sont restés intraitables et insensibles au langage floral. Les bourrins.

        Julian BOUCHOIR (1 victoire en B+ double): L’autre géant vert. Mais l’ogre, celui qui mange des enfants, pas du maïs. A dévoré le petit Antoine HUON (3/0).

        Clément VILLET (2 victoires en B + double): Avait oublié son VILLET de sauvetage sur Christian HENON. S’est noyé, 3 sets à 0.

        Tony DUBEAUX (0 victoire en B) : Cette semaine à Oslo c’était la distribution des prix NOBEL de l’année. A raté de peu le Nobel de la Paix mais pourra concourir pour le prix UNICEF. Car a redonné cet après-midi le sourire à un enfant, le petit Antoine HUON.

        Le détail

        En A
        Christophe HARLE (2174 points) bat Thibault BOUCHOIR (1965 points) (4,8,6), Alexis ROSEILLER (1649 points) (7,4,2) et Sébastien DELATOUR (1893 points) (6,7,7).
        Cédric HERMANT (1998 points) bat Thibault BOUCHOIR (1965 points) (9,8,5) et Alexis ROSEILLER (1649 points) (6,-4,6,8), et perd Sébastien DELATOUR (1893 points) (10,8,-6,-8,-14)
        Vincent RASSELET bat Alexis ROSEILLER (1649 points) (7,8,-5,8) et Sébastien DELATOUR (1893 points) (-10,6,-7,8,6) et perd Thibault BOUCHOIR (1965 points) (-5,6,11,-7,-5)
        Christophe et Vincent battent Thibault et Sébastien (6,-10,-9,11,9)

        En B
        Christian HENON (1876 points) bat Julian BOUCHOIR (1668 points) (8,5,-10,5), Tony DUBEAUX (1571 points) (6,2,10) et Clément VILLET (1792 points) (6,9,6)
        Phlippe L’HOTE (1808 points) bat Julian BOUCHOIR (1668 points) (6,5,-10,11), Tony DUBEAUX (1571 points) (8,-10,5,7) et perd Clément VILLET (1792 points) (-7,6,-11,11,-7)
        Antoine HUON bat Tony DUBEAUX (1571 points) (9,1,9) et perd Julian BOUCHOIR (1668 points) (-9,-9,-5) et Clément VILLET (1792 points) (-4,-5,-7).
        Christian et Philippe perdent Julian et Clément (-8,10-6,-7)

        Denis CHATELAIN'),
        array('id' => '2','equipe' => '2','journee' => '1','date' => '1316840400','lieu' => 'Amiens','adversaire' => 'Villers-Bretonneux PPC 1','score' => '11','score_adv' => '8','commentaire' => 'Millésime Amiénois : A : Dubois 16 Cany 19 Harlé n°621 B : Blatrix 18 Rasselet 17 Vaquier 15

        Grands crus Bretonvillois : A : Cahagne n°692 Malrain 17 Perpette n°375 B : Hermant 19 Dacheux 16 Patte 20

        La foire aux 20 ne suffisant plus à contenir les ambitions de Villers Bretonneux, cette équipe de fins gourmets s\'était offert un nectar intéressant à l\'intersaison lors de la grande foire aux numéros  de l\'ASTT, sorte de « mois portes ouvertes » où les départs et les arrêts furent plus nombreux que les fautes d\'orthographe du Goup\' sur un commentaire de tournoi de reprise (Denis en a encore des céphalées !) Ainsi le château Cahagne (n°692) trouva sa place en cave aux côtés des 5 autres références indiscutables.

        De notre côté, du beau Rasselet nouveau, un Clos du Vaquier et un Côte de Dubois (qui n\'a rien d\'un Oasis monsieur Chatelain, des fruits pas d\'eau d\'source mais \' du fun !!!) : en bref, que des primeurs qui auraient pu pâlir devant les appellations adverses, à l\'image d\'un Saint Julien peut-être dopé aux médocs en cette période de rentrée scolaire mais qui a tout d\'un grand 20. Il suffisait d\'ailleurs de lire les étiquettes pour constater d\'une moyenne de 1951 (tiens, l\'année du premier Beaujolais nouveau !) points par joueur pour nos visiteurs contre 1829 (tiens, l\'année du premier titre de Secrétin \') chez nous. Mais d\'entrée, Lucas a eu du pif en ne mirant pas trop longtemps Florent, qui lui, du coup, a dégusté toute la soirée, mais est tout de même reparti avec son carton, pas bégueule monsieur le JA !

        4/0 avant que les visiteurs ne réagissent en dégoupillant quelques  clavelins qui ont failli nous faire rire jaune. Le duel Harlé / Perpette (qui se connaissent « Parker ») a tenu ses promesses (3/2 pour Séb, toujours aussi exceptionnel ce millésime 1976). 4/5 après un double en B perdu 12/10 à la belle. Mais Maxime, têtu comme une barrique, carafa Patte 3/2 et la situation put donc commencer à se décanter. Vincent, sans se carapater, comprenez sans se faire la belle (2 fois 3/0 sur Dacheux et Hermant) n\'avait plus qu\'à lui faire boire le calice jusqu\'à la lie, 4 à la belle cette fois (qui font 28 !), et humer le bouquet d\'une journée rondement menée (3 sur 3). Enfin, non content d\'avoir réalisé l\'exploit d\'entrée de jeu, Lucas tint à conclure lui-même les hostilités, pourtant mené 2/0 contre Sébastien Malrain, en s\'enfilant les 3 dernières manches cul-sec ! Hic hic hic \' hourra !

        Benoît Presque, lui, a raté un revers. Dommage.

        A côté, en R1, il y avait de la bouteille \' notre troisième mi-temps nous a rapprochés d\'eux ! Merci Denis ! (Tiens ça me rappelle un beau soir de 2001 \')

        Le carton des 6 : Dubois 2/3 [692, 17] Cany 1/3 [17] Harlé 2/3 [692,17] Blatrix 2/2 [19,20] Rasselet 3/3 [16,19,20] Vaquier 1/3 [16] Dicton du jour : A la Saint Thècle, Ch\'Dub fait la perf du siècle !'),
        array('id' => '3','equipe' => '14','journee' => '1','date' => '1316840400','lieu' => 'Argentan','adversaire' => 'Argentan Bayard 1','score' => '8','score_adv' => '10','commentaire' => 'Pour cette première journée de cette année 2011/2012, nous sommes allées à Argentan. Notre équipe était composée de Valentine et Léa HURE, 5 et 6, Marion BERTHELOT, 10 et de Hélène CARLIE, 14.
        L\'équipe d\'Argentan comprenait DELEUSE Laëticia, 10, SECRETAIN Betty, 10, BERTIN Caroline, 8 et COMTE Agathe 7.

        Marion perd d\'entrée de jeu sur SECRETAIN puis ensuite fait une belle performance sur DELEUSE. Je bas ces deux mêmes adversaires sans grande complication.
        Valentine et Léa perdent leurs deux matchs face à BERTIN et COMTE mais elles n\'ont pas démérités et pour le match de Léa contre COMTE, le score aurait pu tourner en faveur de Léa. Très beau match !

        Valentine et Léa perdent leur double contre SECRETAIN et COMTE alors que Marion et moi remportons aisément le notre face à DELEUSE et BERTIN.

        Après les doubles, le score est de 6-4 pour nos adversaires.

        Marion et moi remportons nos matchs respectivement contre BERTIN et COMTE. Nous revenons à 6-6.
        Valentine s\'incline sur DELEUSE après un super match et Léa perd sur SECRETAIN. 8-6 pour Argentan.
        Marion remporte facilement son match sur COMTE et moi sur BERTIN. Egalité parfaite 8-8.
        Valentine perd sur SECRETAIN en accrochant les deux premiers sets et Léa perd de la même manière sur DELEUSE.

        Score final : 10-8 pour Argentan.

        Félicitations à Marion pour sa perf sur DELEUSE et à Valentine et Léa qui ont fait une très belle prestation pour cette première en pré nationale.

        Hélène CARLIE.'),
        array('id' => '42','equipe' => '12','journee' => '2','date' => '1317963600','lieu' => 'Amiens','adversaire' => 'Exempt','score' => '18','score_adv' => '0','commentaire' => ''),
        array('id' => '16','equipe' => '8','journee' => '1','date' => '1316926800','lieu' => 'Amiens','adversaire' => 'POIX USTT 2','score' => '3','score_adv' => '15','commentaire' => ''),
        array('id' => '17','equipe' => '9','journee' => '1','date' => '1316926800','lieu' => 'Moreuil','adversaire' => 'MOREUIL PPC 4','score' => '2','score_adv' => '16','commentaire' => ''),
        array('id' => '18','equipe' => '10','journee' => '1','date' => '1316926800','lieu' => 'Amiens','adversaire' => 'VILLERS-BRETONNEUX PPC 6','score' => '8','score_adv' => '10','commentaire' => ''),
        array('id' => '19','equipe' => '11','journee' => '1','date' => '1316926800','lieu' => 'Amiens','adversaire' => 'EPPEVILLE TT 3','score' => '10','score_adv' => '8','commentaire' => ''),
        array('id' => '20','equipe' => '12','journee' => '1','date' => '1316754000','lieu' => 'Canaples','adversaire' => 'CANAPLES CTT 1','score' => '2','score_adv' => '16','commentaire' => ''),
        array('id' => '66','equipe' => '14','journee' => '2','date' => '1318050000','lieu' => 'Amiens','adversaire' => 'ENTENTE CABOURG - HOULGATE 1','score' => '7','score_adv' => '10','commentaire' => 'Samedi 8 octobre : l\'équipe de Cabourg était attendue salle Labaume. Notre équipe était composée de Valentine et Léa HURE, 5 et 6, Aurélie NEEL, 9 et de Hélène CARLIE, 14. L\'équipe de Cabourg comprenait METIVIER Lucie, 12, QUAGLIA Marina, 10, ANQUETIL Estelle, 9 et CARBON Karine, 9.

        Le début de rencontre fût très difficile, nous étions vite menées 5-1 avant de revenir à 6-6. Ensuite nous sommes "restées sur place" en perdant le match 10-7.

        Valentine (4 défaites) : match accroché face à ANQUETIL 3-1 (-6/-7/9/-7) mais après les trois autres matchs furent plus compliqués pour Valentine, 3-0 à chaque fois ; sur METIVIER (-9/-6/-2), sur CARBON (-4/-7/-1) et sur QUAGLIA (-4/-5/-5).

        Léa (4 défaites) : Léa toujours aussi accrocheuse mais se fût plus dur pour cette journée. Les fins de set sont compliquées. Défaites 3-0 sur METIVIER (-6/-7/-11) et sur ANQUETIL (-3/-8/-9). Match plus serré sur QUAGLIA avec de beaux points mais Léa s\'incline 3-1 (-7/-8/6/-8) puis perte du dernier match sur CARBON 3-0 (-5/-3/-2).

        Valentine et Léa perdent leur double face à ANQUETIL et QUAGLIA 3-0 (-7/-5/-7).

        Aurélie (2 victoires et 2 défaites) : notre capitaine retrouvait sa place en pré nationale après un petit séjour en N2 (au tour de Marion de monter dans l\'équipe 1 pour cette journée !). Aurélie perd son premier match 3-1 sur CARBON (-10/-7/11/-4) et ensuite fait deux très belles performances en s\'imposant sur QUAGLIA 3-2 (7/-5/9/-4/6) et sur ANQUETIL 3-1 (5/5/-5/10). Aurélie s\'incline 3-1 lors de son dernier match sur METIVIER (-6/-5/6/-5).

        Hélène (4 victoires) : je remporte mes matchs 3-1 sur QUAGLIA (-7/10/6/4), CARBON (-5/4/5/11) et METIVIER (-11/8/6/6) et le dernier match 3-0 sur ANQUETIL (4/4/7).

        Aurélie et Hélène gagnent leur double 3-0 face à METIVIER et CARBON (8/11/9).

        Rendez-vous pour le prochain match contre l\'équipe de Doullens !

        Hélène CARLIE '),
        array('id' => '24','equipe' => '7','journee' => '1','date' => '1316926800','lieu' => 'Doullens','adversaire' => 'DOULLENS - BERNAVILLE 3','score' => '15','score_adv' => '5','commentaire' => ''),
        array('id' => '59','equipe' => '6','journee' => '2','date' => '1318136400','lieu' => 'Amiens','adversaire' => 'EPPEVILLE TT 1','score' => '15','score_adv' => '5','commentaire' => 'En cette période trouble et difficile, l\'équipe 6, qui revient d\'un match \'dommage\', doit se bouger pour espérer le maintien.

        Des changements, il doit y  en avoir.
        Marc Liévremont l\'a dit, nous ne valons pas mieux que des footballeurs.

        Pour Bobby, qui a pas mal de choses à se faire pardonner depuis le premier match, il s\'agit d\'un réinvestissement matériel pratiquement complet. Retour aux sources, les mêmes plaques qu\'en 2e phase l\'année dernière, toutes neuves, contrôlables, et entraînement sérieux à Paris XIII le mardi soir.

        Pour cette première à domicile, Belin De Catheu est présent, en forme et prêt à en découdre avec Eppeville.
        C\'est Biloute Bodinel, absent du jour, qui laisse sa place.

        Remplacement presque poste pour poste en B, Bobby ayant reculé à la 3e place, en demi d\'ouverture. Forcément, avec des lentilles, on y voit beaucoup mieux aussi...

        La surprise du chef, c\'est Eppeville.
        Eppeville qu\'on donnait favori avec 4 joueurs meilleurs que notre leader, Eppeville qu\'on voyait déjà en R3, Eppeville qu\'on s\'imaginait déjà sentir passer douloureusement...

        Eppeville qui arrive avec 3 joueurs, puis 4... Puis 5.
        Mais rien de plus.
        3 points que l\'équipe amiénoise prend avec la plus grande philosophie.
        En plus de ça, c\'est leur leader est absent. Et un autre blessé de leur équipe les pousse à remplacer avec un joueur de l\'équipe 2.

        Fin des vacances de noël, place au combat.

        Cette fois, pas question de jouer petit bras, de rater 4 services par 7, de prier notre Père le filet, ou de trembler à chaque top-spin.

        C\'est sereins et confiants que les amiénoise démarrent la partie.

        Balou, bulldozer local, écrase sans la moindre pitié un Jean-Marc Delville pas très en forme, alors que Belin, après une belle frayeur, emporte son premier match au 4e set, sur un surprenant Fabien Perez, qui aurait pu nous mettre un essai dans le dos en début de partie.
        5-0, puis 6-1, puis 9-2, puis 11-3 après la belle performance de Brutus contre Emmanuel Adoux, puis 15-5.
        Rencontre à sens unique malgré les inquiétudes amiénoises d\'avant match, et excellente opération pour le maintien, voire plus si affinités ?

        Salutations et bonne suite à de sympathiques adversaires eppevillois qui n\'ont pas vu le jour, mais ont joué avec plaisir et motivation tout de même.

        Compos & détail :
        ASTT 6 :
        Brutus Feraud (1277), Balou Combo (1276), Boris De Visme (1047)
        Belin De Catheu (1235), Bobby Schield (1173), Bleu Hersent (1020)

        Eppeville TT 1 :
        Emmanuel Adoux (1430), Christian Carton (1222), Jean-Marc Delville (1174)
        André Nicolau (1110), Fabien Perez (734)

        En A : 5-5
        Brutus Feraud : 1V (Adoux), 2D (Carton et Delville)
        Du doute, depuis la première journée, des gestes un peu moins sûrs, des services un peu moins frottés, des tops un peu moins puissants...
        Encore quelques frissons pour Arnaud aujourd\'hui lors du 1er match.
        Self-contrôle retrouvé lors du 2e match, avec une belle victoire et perf\' à 150 points, avec le point de la victoire à la clé.
        Dernier match du jour au score acquis (15-4), et défaite sur un petit manque de motivation contre Jean-Marc Delville.
        On a partiellement retrouvé nono. Cherchons encore !!

        Balou Combo : 3V (Delville, Carton et Adoux) et + double
        Encore en forme, Combo-Ali à survolé le match et ses 2 adversaires directs, ne laissant pas la moindre chance ni à Jean-Marc Delville, ni à Christian Carton.
        Lors du 2e match sur Emmanuel Adoux, un peu plus de difficultés... Et une belle bien disputée.
        Première balle de match à 10-9, remportée mais remise en jeu à cause d\'une 2e balle arrivant au mauvais moment.
        Sauvetage d\'une balle de match à 11-12, puis victoire finalement 13-11.
        2e bon double avec Thibault, paire gagnante à suivre !

        Boris De Visme : 3D (Adoux, Delville et Carton) + double
        Match peu évident pour Thibault, avec 3 adversaires plus forts que lui.
        Pas loin de mettre un set à Emmanuel Adoux, mais les services de ce dernier auront raison du score.
        Encore un très bon double avec Combo-Ali, remporté à la belle.
        Et un très bon gâteau, excellent pour le moral.

        En B : 10-0
        Belin De Catheu : 3V (Perez + Nicolau + /) + double
        1er match pour Cyril, un peu léger au départ contre un surprenant Fabien Perez (1er set concédé 11-4), avant un come-back efficace lors du 2e set alors qu\'il était mené 8-3.
        Bon double avec Florent, puis un peu de mal à nouveau sur Nicolau, mais finit par l\'emporter à la belle.
        Un sans-faute (logique, mais tout de même) pour un début, de bon augure.

        Bleu Hersent : 3V (Nicolau, /, Perez)
        Encore un bon match de Tristan, qui s\'impose d\'entrée à la belle face à Nicolau, après avoir bien couru.
        Puis apport d\'un 10e point pour la B lors du dernier match, remporté sans trop de difficulté sur Perez.
        Doit poursuivre sur cette belle lancée...

        Bobby Schield : 3V (/, Perez, Nicolau) + double
        Il y a des jours on est pas dedans (comme il y a 2 semaines), des jours où l\'on doute, on rien ne passe, où le filet nous en veut bref...
        Des jours ou on est mauvais.
        D\'autres, comme hier, où tout va bien. Certain d\'apporter au moins 1 point, Florent tente le double avec Cyril, histoire de tester une nouvelle paire.
        3-0 tranquille, un excellent début à domicile.
        Même score lors des 2 simples contre Perez et Nicolau (ce dernier étant un peu fatigué).
        Pas de tremblement à domicile.
        A vérifier lors du prochain match.

        Score final : ASTT 6   15 - 5   Eppeville TT 1
        Une victoire innatendue à domicile, pour un très grand pas vers le maintien, et une remise en course pour un haut de tableau difficile mais pas hors d\'atteinte.'),
        array('id' => '25','equipe' => '16','journee' => '2','date' => '1318050000','lieu' => 'Amiens','adversaire' => 'Exempt','score' => '18','score_adv' => '0','commentaire' => ''),
        array('id' => '53','equipe' => '9','journee' => '2','date' => '1318136400','lieu' => 'Amiens','adversaire' => 'LONGUEAU ESC 4','score' => '11','score_adv' => '7','commentaire' => ''),
        array('id' => '49','equipe' => '3','journee' => '1','date' => '1316840400','lieu' => 'Amiens','adversaire' => 'Clermont EP 1','score' => '12','score_adv' => '8','commentaire' => 'REPRISE
        Silence s\'il vous plaît (Jacques DORFMANN, Roland Garros, 1984).
        Les joueurs sont prêts (Lolo CANY, Laurent Garros, 2011). 

        Samedi 24 septembre 2011. Rangez le pop-corn. Rallumez les lumières. La superproduction Régional-Uno débute. Et c\'est reparti pour une nouvelle saison. Pleine de sueur, de sang, de larmes, de joies, d\'embrouilles, et de chattoune. L\'avantage avec la Hérain c\'est que ça n\'est jamais ennuyeux. Même si c\'est toujours la même chose. Les mêmes salles tristes. Les mêmes joueurs gais (Tu peux aussi mettre un «y » à la place du « i ». Oui, ça marche aussi). Les mêmes équipes, coincées comme des \'ufs, dans la même poule depuis 2000 ans. Forcément la consanguinité comme à faire des ravages.  La R1 c\'est comme une soirée au Macumba de Boulzicourt. Difficile d\'y rentrer. Encore plus difficile d\'en sortir. 
        Pour augmenter le brassage et le renouvellement, de nouveaux règlements seraient les bienvenus. C\'est pourquoi, cette saison, toutes les équipes qui nous battront lors de la première phase descendront directement en R2.  EricL trouve que c\'est anti-sportif et injuste. Mais la vie est injuste. D\'après Dudu, elle n\'est plus belle qu\'entre 20h10 et 20h35. 
        C\'est donc avec des idées révolutionnaires, mais c\'est vrai, peut-être légèrement à notre avantage, que nous abordions cette première rencontre contre CLERMONT.
        Le jeu des chaises musicales amiénoises avait entrainé la montée de Pierre LE GALLOUDEC, vraisemblablement d\'origine Bretonne, de R3 en R1. Il remplaçait Vincent RASSELET, vraisemblablement d\'origine Fightonne, et exfiltré en N3. Le jeu des chevilles musicales avait, lui, entrainé le remplacement d\'Antoine HUON, entorse légère, par Bruno MARYSSE, en torse velu.
        La rencontre débutait pas mal : 3/0 pour Amiens. Puis tétanisation avec égalisation à 6/6 des Clermontois. Le double en A, à l\'arrache, puis une accélération de la B : 10/7,  pour finir à 11/8 puis 12/8 après la première victoire de Pierre LE GALLOUDEC en terre picarde.
        Soulagés, après une rencontre disputée sur une équipe de CLERMONT accrocheuse et sympa.
        Les deux prochains matchs s\'annoncent décisifs, contre Villers-Saint-Paul et Breteuil 2.
        Nous prierons saint DUBOIS, saint BLATRIX et saint RASSELET, auteurs d\'un match énorme contre Villers-Bretonneux en N3 (victoire amiénoise 11/7). Ce serait bien qu\'ils puissent bénir notre équipe. L\'apposition des mains sur nos joueurs est toutefois optionnelle. 

        Les repriseurs
        Denis CHATELAIN (3 victoires + double en A) : Capitaine de la plus vieille équipe de tous les temps en R1. En a profité pour enrichir sa collection de cheveux blancs sur le banc.
        Cédric HERMANT (1 victoire en A) : Ne dira plus « Je me suis fait un fix avec Cyril samedi » mais « J\'ai pris ma dose hier ». Victime malheureusement d\'une overdose sur Emeric PERRAULT et Francis COPPE.
        Pierre LE GALLOUDEC (1 victoire + double en A) : Evangile selon saint Labaume, chapitre XVI, verset 18 : « « Et moi je te dis que tu es Pierre. Et sur cette pierre je bâtirai mon Église ». Les fondations ont un peu tremblé sur Emeric PERRAULT et Francis COPPE. Mais a repris 3 fois de l\'hostie sur Cyril DOSIERE.
        Christian HENON (2 victoires en B) : Recherche désespérément son coup droit. Pourrait consulter un magnétiseur. Et peut-être même un exorciste. Un témoin d\'une grande probité, Benoît VAQUERO, aurait ainsi vu l\'extrémité céphalique de Christian tourner à 360°C, avant qu\'il ne se mette à cracher de la bave verte, après son deuxième match contre Francis SAINTE CROIX.
        Philippe L\'HOTE (2 victoires en B) : Avait entrepris un concours de smashs de balles Nittaku dans le mur, contre Guillaume OUDAILLE. Avant une projection raquettale contre la cloison de la salle Labaume. Un happening artistique salué par le commissaire de l\'exposition, Michel LEROUX. Son aïeul Gaston faisait plutôt dans le Mystère de la chambre jaune. Michel, lui, ce n\'est pas mystérieux, est resté dans la même couleur pour cartonner Phlippe, cadet 2ème année.
        Bruno MARYSSE (2 victoires en B) : Est passé à un poil du hat-trick. Mais cet après-midi c\'était plus Bruno le Sauveur que Bruno Dommage. Merci monsieur MARYSSE.

        Les reprisés
        Emeric PERRAULT (2 victoires en A) : Le détail des comptes et des contes de PERRAULT cet après-midi : 2 prix des lecteurs, avec le Chat topé sur Cédric HERMANT, et le Petit Poucette sur Pierre LE GALLOUDEC.
        Cyril DOSIERE (0 victoire en A) : La NASA n\'a plus besoin de rechercher son satellite égaré. Il s\'est écrasé salle Labaume, sur le crâne de Cyril, cet après-midi. Fier gaulois, il n\'avait pourtant peur de rien. Mais le ciel lui est quand même tombé sur la tête.
        Francis COPPE (2 victoires en A) : Jean-François, secrétaire général de l\'UMP. Francis, également. Mais de l\'Union des Magiciens du Picot. Christian HENON voudrait intégrer le mouvement. Sébastien PERPETTE reste pour le moment sur liste d\'attente.
        Francis SAINTE CROIX (2 victoires + double en B) : Joli parcours. Trainé dans les rues de Jérusalem. Appuyé sur le dos de Jésus. Planté sur le mont Golgotha. Découpé en petits morceaux pour les reliquaires des églises du monde entier. Et la SAINTE-CROIX, à Amiens, a encore les ressources de faire deux, plus le double. Alleluia.
        Yves LETELLIER (0 victoire en B) : Des physiciens ont découvert cette semaine des neutrinos, particules se déplaçant plus rapidement que la lumière. Ils auraient gagné du temps, en traînant dans les salles de ping-pong. Ça fait bien longtemps que les frappes de Yves LETELLIER dépassent les 300 000 000 m/s. Mais, dommage, pas à 9/9 au 5ème set sur Christian HENON.
        Guillaume OUDAILLE (1 victoire + double en B) : Son physique et sa force de perforation avait tapé dans l\'\'il de Marc LIEVREMONT. Mais a élégamment décliné sa sélection contre les All Blacks. A préféré défoncer du Philippe L\'HOTE cet après-midi.


        Le détail
        En A
        Denis CHATELAIN (2070) bat Cyril DOSIERE (1844 points) (5,8,7), Emeric PERRAULT (1879 points) (7,5,4) et Francis COPPE (1783 points) (4,-9,-8,3,4).
        Cédric HERMANT (1998 points) bat Cyril DOSIERE (1844 points) (8,9,-9,-13,7) et perd Emeric PERRAULT (1879 points) (9,-9,-5,8,-6)) et Francis COPPE (1783 points) (-9,-3,-8).
        Pierre LE GALLOUDEC (1814 point) bat Cyril DOSIERE (1844 points) (8,4,8) et perd Emeric PERRAULT (1879 points) (7,9,-5,-4,-8) et Francis COPPE (1783 points) (-9,-1,10,-5).
        Denis et Pierre battent Cyril et Francis (-16,-8,5,8,7)
        En B
        Christian HENON (1876 points) bat Guillaume OUDAILLE (1653 points) (10,4,9) et Yves LETELLIER (1609 points) (7,1,-6,-9,9) et perd Francis SAINTE CROIX (1757 points) (6,-5,-8,6,-10)
        Phlippe L\'HOTE (1808 points) bat Francis SAINTE CROIX (1757 points) (5,6,4) et Yves LETELLIER (1609 points) (7,8,7) et perd Guillaume OUDAILLE (1653 points) (11,-8,8,-10,-10)
        Bruno MARYSSE (1752 points) bat Guillaume OUDAILLE (1653 points) (9,8,-7,7) et Yves LETELLIER (1609 points) (7,6,9) et perd Francis SAINTE CROIX (1757 points) (7,10,-8,-8,-11).
        Christian et Philippe perdent Guillaume et Francis (7,-13,-7,-6)'),
        array('id' => '62','equipe' => '4','journee' => '2','date' => '1318050000','lieu' => 'Flixecourt','adversaire' => 'VILLE LE MARCLET - FLIXECOURT 2','score' => '9','score_adv' => '11','commentaire' => ''),
        array('id' => '60','equipe' => '1','journee' => '2','date' => '1318050000','lieu' => 'Amiens','adversaire' => 'NANTES TTCNA 1','score' => '2','score_adv' => '11','commentaire' => 'Rencontre expéditive pour un résumé expéditif...

        Ce samedi 8 octobre, l\'ASTT 1 avait rendez-vous à 15H à la salle pour y monter le dé « corre » puis pour rencontrer une redoutable équipe Nantaise. Cependant, les joueurs arrivèrent à la salle avec une certaine envie de bien faire. Malheureusement, après avoir vu les compositions des deux équipes, ils se rendirent compte qu\'il n\'y avait pas besoin d\'avoir fait des études dans les sciences du sport pour savoir que ça allait être difficile ou plus simplement que ça allait être « chaud de night » (Petite dédicasse à Yoh et nos amis abbevillois).

        Equipe Amiénoise (les plumés)
        A: Yannick MARAIS (n°186), Malin PLOTUNA (n°195), Cédric CORRE (n°277)
        B: Raphaël CHATELAIN (20), Yohan LECOMTE (19), Alexandre HAIGNERE (18)

        Equipe Nantaise (les canaris)
        A: Julien PIETROPAOLI (n°104), Gilles DE LA BOUDONNAYE (n°143), Romain RUIZ (n°437)
        B: Maxime REPUSSEAU (n°341), Thomas LEMANSEC (n°377), Damien JACQUES (18)

        La rencontre commença de manière équilibrée avec les victoires de Yannick contre Romain RUIZ et de Raphaël contre Damien JACQUES et les défaites de Malin contre Gilles DE LA BOURDONNAYE et de Yohan contre Maxime REPUSSEAU : 2/2. Puis trou noir , amnésie générale et quand ils rallumèrent les lumières : 11/02...le score était sévère !

        Détails:

        Yannick MARAIS (1/2) : Victoire d\'entrée de jeu sur Romain RUIZ (mais au fait cette chevelure, teinture ou naturelle ? Selon ch’Goup, Gauthier LEROY n’a rien à lui envier !!). Puis défaite sur Julien PIETROPAOLI. Notre capitaine a voulu ouvrir la voie mais malheureusement, le reste de l\'équipe était resté en gare.

        Malin PLOTUNA (0/2) : Le malchanceux du jour avec une défaite 14/12 à la belle (pas celle d\'à côté voyons!!!) contre Gilles DE LA BOURDONNAYE et une défaite 12/10 à la belle face à Romain RUIZ (qu’il est Ruizé comme un renard). Malin est passé un peu à côté de la rencontre mais comme il le dit si bien (je ne parle pas de l’accent)  « Dans un championnat on ne peut pas toujours être à 100% ». Effectivement, bonne remarque de ce prophète du XXIème siècle. Mais bon, nous restons persuadés que tu vas donner tes 100% sur les bons matchs.

        Cédric CORRE (0/2) : La « pouffiasse » de l\'équipe... Il en fallait une et c\'est gentil à lui de s\'être désigné. Cédric s\'incline successivement et plutôt rapidement face à Julien PIETROPAOLI (malgré un coup de jus au tendon, cela n’a pas suffi pour le faire repartir de plus belle) et à Gilles DE LA BOUDONNAYE. Deux matchs difficiles pour Cédric qui semblait avoir servi de « hochet », ou « d\'ouvre boite » (au choix) à ces deux adversaires du jour...selon ses propres termes. Allez Cédric, pour qu\'un grand cru soit bon, il lui faut du « CORRE » et à vrai dire, ça tombe bien, dans 15 jours: déplacement à Reims.

        Raphël CHATELAIN (1/2) : Raphaël a tout de suite assuré en s\'imposant sur Damien JACQUES puis lors de sa seconde recontre face à Maxime REPUSSEAU, il s\'est incliné logiquement. Un petit écart de niveau entre ses deux adversaires du jour (un peu plus d’HARIBO le prochain coup). Mais ne t\'inquiète pas Raphaël, nous allons, je l\'espère, nous « raphi » stoler lors du prochain match.

        Yohan LECOMTE (0/2) : Yohan s\'est incliné successivement face à Maxime REPUSSEAU et à Thomas LEMANSEC. Il n\'a pas réussi à retrouver son niveau de jeu d\'il y a 15 jours mais cette fois – ci, ses adversaires étaient un peu plus jeunes (que lui bien sûr). Cependant, nous restons persuadés que notre « chouchou » réussira à ouvrir « lecompteur » en faisant quelques belles perfs durant la saison.

        Alexandre HAIGNERE (0/1) : Défaite face à Thomas LEMANSEC. Bilan de la journée : Est presque arrivé à l\'heure, a ramené les Haribo, servi de sparing-partner à Raphaël durant l\'échauffement, arbitré un match, fait parti du paysage et ... c\'est tout ! Ah si, Malin m\'a remercié d\'être venu. « De rien Malin, c\'était avec plaisir ». Mais a décidé de faire son come-back à l\'entrainement. Bonne initiative, je pense.

        Au final, « Lecomte » fut mauvais car pour gagner une rencontre de tennis de table, il faut arriver à 11 avant les adversaires. Afin de retenir la leçon, nous allons donc partir en pèlerinage pour que, lors de la prochaine journée contre Reims, nous puissions goûter au millésime de la victoire... et pourquoi pas au millésime Barons De Rothschild... (c\'est beau de rêver !).

        En attendant de partir pour  REIMS et d’ouvrir le champagne,               
        je vous dis……………………tchousse et …………vive la mousse.

        Alex et Yo, les seuls « REPUSSEAU » au niveau des victoires !!!

        Alexandre HAIGNERE et Yohan LECOMTE'),
        array('id' => '65','equipe' => '2','journee' => '2','date' => '1318050000','lieu' => 'Argentan','adversaire' => 'ARGENTAN BAYARD 3','score' => '11','score_adv' => '3','commentaire' => 'Samedi 8 octobre 2011

        Argentan 3 / Amiens STT 2 : 3/11

        Ou l’i-point de bonus offensif !

        Une longue journée s’annonçait. En une semaine, nous venions de perdre 15 degrés, d’un été indien (qui vaut toujours mieux que deux « tu l’auras ») tout Dassiniste nous avons sombré dans un jour blanc qui aurait fait tombé plus d’un Tomba. Nous avons également failli perdre Bénito Vaquero, auquel Dudu, pour le tenir en bride, a tenté de faire faire le Japonais à l’entraînement! Amateur de pains, il fallait savoir qu’il eût préféré le Suédois ! Nous avons ensuite vu disparaître la grosse équipe que nous nous attendions à affronter au profit de valeureux et sympathiques assoiffés de perfs, Argentan misant sur le match avancé au dimanche 9 octobre contre Villers-Bretonneux (Oui, le lendemain, j’en reviens, 11/5 pour les Normands) pour se rapprocher du maintien. Le jeu des chaises musicales de débuts de phases n’étant plus une « Harlésienne » pour personne, notre capitaine décida de la composition suivante :
        A : Cany (19) Chatelain (n°1000) Blatrix (18) 
        B : Le Galloudec  (18) Vaquier (15) Dubois (16)

        En bons Ornais, les tendeurs de Perche (pour ne pas couler en R1) :
        A : Launay (16) Liévrot (16) Peaudecerf (16)	
        B : Bousselet (14) Jean-Baptiste (13) Caplet (14)

        Seule anecdote à raconter : le scratchage de Carlier (Breteuil) contre le 13 de B lors d’un tournoi, le Britulien ayant cru que son adversaire n’avait jamais été appelé ! (« Table 4, Jean-Baptiste/Carlier »)

        600 bornes à faire dans la journée, autant vous dire que le breakfast était crucial ! C’est là que dès potron-jacquet, ou plutôt dès potron-Liévremont (très Aimé aussi depuis peu), 15 bons hommes aux antipodes (Mais plutôt pro-iPhone) décidèrent d’offrir du rosbif à toute la nation ! Un festin à « bécoter » tout Anglais en lui chantant la version Le Luronesque assez primaire de « L’important, c’est la rose » ! Info de dernière minute : Yves Lecoq serait déjà au point sur l’imitation de Martin Johnson !

        Argentan, où Timo Boll aurait pu passer son enfance à répéter à sa maman « L’Orne est là, Mutti ! », nous accueillait donc, entre Falaise et Lisieux, mais nous n’en étions plus à envisager un précipice ou un miracle ! Il y avait désormais un juste milieu !

        Peut-être certains voyaient-ils encore la petite balle un peu ovale, c’est alors qu’à 4/0 après les good jobs de Maxime aux tablettes tactiles selon Noémie, de Laurent, Pierre, Denis, Benoît… Lucas, porté aux nues (Quoi de plus normal en pleine adolescence !) il y a 15 jours ne voulut pas croquer dans une pomme trop tendre et perdit son 14 ! Au coaching Ch’Dub se plaignait « J’comprends rien iMac-célère toutes les balles ! »

        S’en suivit une espèce de solidarité malsaine qui vit Laurent puis Maxime s’incliner sur le prometteur Liévrot (Cadet 2, 16) qui nous a fait passer pour des « hases »-been, et qui  finit le tableau de chasse, en obligeant Pierre à nous payer Lapereau … 500 points d’écart : comme disait ma grand-mère petite main, « Le point d’Argentan ne fait pas dans la dentelle ! ». Il est vrai qu’il a paré Louis XV, il peut bien remettre quelques Amiénois à leur place ! Jobs n’aura pas eu le temps d’inventer la i-contre, Bruno d’hommage ne fera point !

        Laurent 1V 16 1D 16 : Difficile de décrire la traversée du désert que je connais depuis presqu’un an, mais pour un mec qui roule en Citroën, ça va quand même beaucoup moins vite que Pierre Lartigue !

        Denis 2V 16,16 : Normal qu’en ces temps funestes, il tire son épingle du jeu avec son « micro-soft »!

        Maxime 2V 16,16 1D 16 : A fait une belle rencontre jusqu’au score acquis (bah au score à nous pardi), alors ses avions se sont perdus façon Mermoz, mais malheureusement pas le locataire du pays de l’ovalie, celui de « La croix du sud »… Les Wriggles chanteraient « La vie parfois fait plouf ».

        Maxime et Denis gagnent le double 3/0 en mode fort.

        Pierre 1V 14 1D 13 : Merci pour l’Ice-tea (grr Sam, qui conduit donc ne boit pas, a apprécié ;-)), la solidarité, le niveau de blagues au « Gondola » (pizzéria locale décevante, pas de serveuse au blond vénitien …). Reviens quand tu veux, et comme on dit à Argentan : « Hasta l’Wei-Guo ! A bientôt si Dieu le veut ! »

        Benoît 2V 13,14 : A suivi la voie du maître Chatelain, pour les points, l’absence de contre, l’apéro, l’entrée, le plat (modulo l’usage des couverts pour lequel il va sûrement falloir qu’il charge l’application dans son « cerveau ambidextre » comme il a si bien su nous le préciser !), le dessert, mais l’a lâchement abandonné pour une petite course d’orientation dans le camion du Lolo à travers les bocages ornés de vaches rousses blanches et noires sur lesquelles tombe la pluie et de cerisiers blancs made in Normandie ! Il a donc fini stone.

        Lucas 1V 14 1D 14 : ne cherche pas à mettre un antipode en revers, tu risques de faire le tour du monde avant d’en trouver un ! Quand tu dois être actif, tu vires à l’andouille, manche après manche, et puis tu dois être trop jeune pour avoir vu au moins une fois Gay mener, mais Saint-Lô sera toujours là pour te rappeler le droit chemin.

        Lucas et Benoît gagnent le double après avoir été menés 2/0, et ont donc prouvés i-Nextremis (sûrement une invention posthume du visionnaire du siècle) qu’ils n’avaient pas la gauche molle ! Cela leur sera certainement utile à Lille.

        Dicton du jour :
        A la Saint Morgan
        God save Argentan !

        Laurent CANY'),
        array('id' => '56','equipe' => '8','journee' => '2','date' => '1318136400','lieu' => 'Boves','adversaire' => 'BOVES ASTT 1','score' => '9','score_adv' => '9','commentaire' => 'Composition des équipes de BOVES STT 1 contre AMIENS STT 8 :
        LECOINTE Yannick (926)
        MOTTE-LACAZE Benjamin (1093)
        DUBOIS Jimmy (950)
        DECAGNY Claude (768)

        AMIENS STT 8 :
        STEPHAN Jeoffrey (898)
        BONTE Benoît (791)
        VANDEWOESTYNE Paul (843)
        CHARTIER Floris (921)

        Ce matin, dimanche 9 octobre, nous avions rendez-vous à Boves. C\'est le père de paul qui nous a tous conduits. Voici le déroulement de la matinée :
        Victoire de Benoît  BONTE contre Benjamin MOTTE-LACAZE 3 sets à 2
        Victoire de Jeoffrey STEPHAN contre Yannick LECOINTE  en 3 sets
        Puis :
        Victoire de Floris CHARTIER contre Claude DECAGNY Claude 3 sets à 1.
        Défaite de Paul VANDEWOESTYNE contre Jimmy DUBOIS en 5 sets ...Paul s\'est bien battu  avec 11 à 13 dans le dernier set.
        Défaite de Jeoffrey contre Benjamin en 3 sets 
        Victoire de Benoît contre Yannick en 5 sets
        Victoire de Paul contre Claude 3-0
        Défaite de Floris contre Jimmy 3 sets à 2

        Ce fut au tour des doubles :
        Le Double A-B, Benoît et Jeoffrey, gagne 3-1 contre Claude et Benjamin
        Le Double C-D, Paul et Floris, gagne 3-1 contre Yannick et Jimmy

        Poursuite en  individuel :
        Défaite de Floris contre Yannick 3-1
        Défaite de Paul contre Benjamin 3-0
        Défaite de Benoît contre Jimmy 3-0
        Victoire de Jeoffrey contre Claude 3-1
        Défaite de Floris contre Benjamin 3-0
        Défaite de Paul contre Yannick 3-2
        Et pour finir :
        Victoire de Benoit contre Claude 3-1
        Défaite de Jeoffrey contre Jimmy 3-2

        BILAN : 9 à 9 !! 
        On s\'attendait à perdre sur papier et on finit à égalité ! L\'équipe peut être satisfaite... A noter les 2 perfs de Benoît à 302 et 135 points et 1 plus modeste de Jeoffrey à 28 points (lol) !'),
        array('id' => '54','equipe' => '11','journee' => '2','date' => '1318136400','lieu' => 'Combles','adversaire' => 'COMBLES FR 1','score' => '10','score_adv' => '8','commentaire' => ''),
        array('id' => '55','equipe' => '7','journee' => '2','date' => '1318136400','lieu' => 'Amiens','adversaire' => 'SALEUX LL 1','score' => '8','score_adv' => '12','commentaire' => ''),
        array('id' => '61','equipe' => '5','journee' => '2','date' => '1318136400','lieu' => 'Vénizel','adversaire' => 'VENIZEL TT 4','score' => '6','score_adv' => '14','commentaire' => 'Pour ce second match de la phase, nous nous sommes déplacés à Venizel avec l\'espoir de faire un résultat même si nous nous savions moins forts sur le papier. Pour ce match, les deux jeunes recrues de l\'équipe étaient présentes, notamment Julien Martin qui effectuait là son baptême du feu avec l\'Amiens STT. Malgré de bons échanges, et surtout un nombre conséquent de matchs perdus à la belle (en menant sur 4 matchs, 2 sets à rien), nous repartions avec une défaite 13-07 qui cependant peut nous donner beaucoup d\'espoir pour la suite. 

        En A, 
        LAMOUR Maximilien (1516 pts) bat MAUCOURANT Julien (1325 pts) (7,9,4) et MAERTENS Justine (1626 pts) (4,12,8), et perd GUERIN Mickael (1487pts) (11,8,-7,-9,-8).
        FENDORF Valentin (1410 pts) bat  MAUCOURANT Julien (1325 pts) (-7,11,5,8) mais perd MAERTENS Justine (1626 pts) (-6,-6,-6) et GUERIN Mickael (1487pts) (8,-9,-8,-5).
        MARTIN Julien (1112 pts) bat MAUCOURANT Julien (1325 pts) (-7,9,7,-9,8) et perd GUERIN Mickael (1487pts) (-5,9,-9,-6) et MAERTENS Justine (1626 pts) (-6,-5,-6)
        Le double, composé de Valentin et Maximilien, gagne en 4 sets (-5,9,10,8)

        En B, 
        CAILLOIN Yoann (1336 pts) bat CAULLIER Enrique (1317pts) (-7,-9,11,5,9) et perd MERY Pascal (1353 pts) (-6,-7,9,-9) et FONTAINE Julien (1417 pts) (-10,8,-9,7,-9)
        MENARD Alexandre (1316 pts) perd FONTAINE Julien (1417 pts) (8,9,-7,-8,-6), CAULLIER Enrique (1317pts) (7,7,-4,-9,-4) et MERY Pascal (1353 pts) (5,-5,-10,-8).
        CHAERLE Louis (1049 pts) bat CAULLIER Enrique (1317pts) (1,8,9) et perd MERY Pascal (1353 pts) (-6,-8,-7) et FONTAINE Julien (1417 pts) (-7,8,-11,-8).
        Le double, composé de Yoann et Louis, s’incline en 5 sets (9,5,-5,-6,-5).

        Alexandre MENARD'),
        array('id' => '40','equipe' => '5','journee' => '1','date' => '1316926800','lieu' => 'Amiens','adversaire' => 'LES AGEUX FR 1','score' => '12','score_adv' => '8','commentaire' => 'Pour cette nouvelle saison en R3, nous remportons le match 12-08 face une équipe amoindrie (deux joueurs classés 7 en B). Bonne intégration de Louis en attendant de le voir jouer contre des adversaires mieux classés.

        En A : 
        Maximilien, notre leader, gagne ses deux premiers matchs facilement en 3 sets contre le 13 et le 14. Pour son dernier match, il perd en 3 sets contre le 15.
        Valentin, diminué par une douleur à la cheville, perd ses matchs en ayant donné l’impression d’être à 50% de ses capacités. Il s’incline 3-1 contre le 14, 3-2 contre le 15 et 3-0 contre le 13.
        Alexandre perd son premier match le 15 en 4 sets accrochés, et ensuite gagne 3-1 contre le 13. Enfin, il perd contre le 14 à la belle 19-17 dans un match plein de suspense et beaucoup de regrets.
        Le double, composé de Valentin et Maximilien, s’incline 3-1.

        En B :
        Chaque joueur remporte aisément leurs matchs en 3 sets contre les deux 7.
        Olivier commence par jouer le 11 et l’emporte à la belle 11-9 en perdant dans celle-ci 9-6.
        Ensuite, c’est au tour de Yoann de l’affronter.  Il gagne facilement le 1er set avant de perdre les trois suivants.
        Enfin, Louis gagne sereinement et facilement contre ce même 11. Bon début de championnat pour lui, à confirmer dans les prochaines rencontres.
        Le double, composé de Yoann et Louis, s’impose en 3 sets.

        Alexandre Ménard'),
        array('id' => '46','equipe' => '13','journee' => '2','date' => '1318050000','lieu' => 'Amiens','adversaire' => 'VANNES AJK 1','score' => '1','score_adv' => '10','commentaire' => ''),
        array('id' => '67','equipe' => '6','journee' => '1','date' => '1316926800','lieu' => 'Saint-Just en Chaussée','adversaire' => 'ACLES ST JUST 1','score' => '7','score_adv' => '13','commentaire' => 'Dimanche 25 septembre, 13h25.

        Après de nombreux, mais habituels, calculs, débats et changements au niveau des compositions des équipes amiénoises avant un début de phase, la composition de l\'équipe 6 se fixe avec les départs de Boum Deguingand et de Bryan Vande, tous deux envoyés au niveau supérieur, en R3, en équipe 4, et les arrivées de Belin De Catheu, et de Bleu Hersent, nouveau joueur du club et de l\'équipe.

        7 places donc, en comptant les 5 habitués,  Brutus Feraud, Balou Combo, Boris De Visme, Biloute Bodinel et Bobby Schield.

        \'Les cénobites tranquilles\', ainsi désignés par leurs fidèles représentants lors des 24 heures de Villers Saint Paul en juin dernier, repartaient à l\'assaut d\'une nouvelle poule.

        Le concept du jour : le Timing, façon Bobby.

        Testé 3 fois ce jour.
        Pour l\'arrivée à l\'heure au club (seulement 25 minutes de retard), pour le temps de transport en régional (c\'est plus long...), et pour l\'adaptation au jeu le dimanche après-midi.
        Un concept totalement incompris, qui va causer le départ plutôt précipité de l\'équipe 6 vers Saint-Just en Chaussée, avec le ventre vide pour Boris & Bobby.


        Heureusement, pour pallier au temps de déplacement, il y a 2 solutions plus ou moins bonnes :
        l\'autoroute, et le fait d\'avoir donné un DRV plutôt large au club.

        Finalement, chacun put s\'échauffer dans la salle de St-Just.

        Les cénobites :
        Brutus Feraud (1277), Balou Combo (1276), Boris De Visme (1047), Biloute Bodinel (1082), Bobby Schield (1173) et Bleu Hersent (1020).

        Les moines (Dédicasse pour LoLo, pas évident quand même celui là !) :
        David Fettre (1442), Jean-Luc Dourlens (1278), Aurélien Lecamp (1170), Philippe Dourlens (1207), Laurent Patinotte (1198) et Cécile Chatelain (1152).


        Le match commence difficilement pour Amiens qui, malgré les quelques espoirs qui perdureront jusqu\'au score acquis, ne reviendra jamais au score, à cause de quelques belles perdues et des mauvaises performances de Brutus et de Bobby.
        Score final : 13-07 pour Saint-Just en Chaussée.

        Les détaux :
        En A [Saint-Just en Chaussée    06 - 04   ASTT 6]
        Brutus Feraud : 3D (Fettre, Dourlens et Lecamp).
        Journée noire pour Brutus, qui n\'inscrit qu\'un unique set en 3 matchs face à deux adversaires pourtant à sa portée, et défaite logique sur David Fettre malgré un match plutôt bon.

        Balou Combo : 2V (Dourlens et Lecamp), 1D (Fettre).
        Excellent match de Combo-Ali, qui s\'impose aisément sur deux adversaires du même classement, mais s\'incline de peu sur David Fettre. Confirmation de la puissance de notre gaucher si explosif !

        Boris De Visme : 1V (Lecamp), 2D (Fettre et Dourlens).
        3 adversaires plutôt difficiles pour Thibault qui a laissé une grosse impression à l\'équipe, échouant de très très peu sur Jean-Luc Dourlens (15-13 à la belle) lors du premier match, remportant le 2e 11-7 à la belle, et s\'inclinant à peu de choses au 4e sur David Fettre.
        Très solide en double avec Combo-Ali également.

        Boris et Balou remportent le double.

        En B [Saint-Just en Chaussée   07 - 03   ASTT 6].
        Biloute Bodinel : 2V (Dourlens et Patinotte), 1D (Chatelain).
        Très gros match de Léo également, qui a réalise un 1er match parfait sur Philippe Dourlens (3-0 sévère), avant de jouer à la place de Bobby lors du 2e match (c\'est pas grave Léo, un jour tu sauras lire une feuille de match, avant d\'assurer à tout le monde que c\'est à toi de jouer.) et de remporter une victoire sur Laurent Patinotte avec un peu plus de mal. Dans la foulée, défaite sur Cécile Chatelain dont le jeu "trop passif" énerve un peu notre biloute, qui ne rentre pas vraiment dans son dernier match.

        Bleu Hersent : 1V (Dourlens), 2D (Patinotte et Chatelain).
        Bon premier match de Tristan qui s\'incline de peu sur Laurent Patinotte, notamment grâce à des erreurs d\'innatention (balles hautes flottantes, services manqués), puis sur Cécile Chatelain, dont les marmonnements et diverses remarques assez désagréables l\'ont sorti du match alors qu\'il menait 2-0, avant de s\'imposer sur Philippe Dourlens au terme d\'un bon match.

        Bobby Schield : 3D (Dourlens, Patinotte et Chatelain).
        Match remarquable de Florent, qui aura réussi avec beaucoup de difficultés à inscrire 1 set lors du premier match sur Cécile Chatelain. Un niveau de jeu de "gros 7", largement insuffisant pour ce premier match, et défaites logiques (en vue du jeu produit) 3-0 sur les deux matchs suivants, malgré un peu de suspense (défaite 18-16 au 3e set sur Laurent Patinotte).

        Léo et Tristan s\'inclinent à la belle en double.


        Petite déception pour l\'équipe 6 qui pouvait espérer mieux de ce match... Mais à 4 contre 6, c\'est très, très compliqué.
        Bravo à Combo-Ali, Thibault, Léo et Tristan pour leur bon début, à confirmer par la suite.'),
        array('id' => '5','equipe' => '4','journee' => '1','date' => '1316926800','lieu' => 'Amiens','adversaire' => 'Noyonnais 1','score' => '18','score_adv' => '2','commentaire' => 'Une saison bien entamée avec une victoire 18/2 et de bonnes performances des jeunes.

        En A

        Loic a un peu de mal a rentrer dans la rencontre et perd son premier match 3/0 contre Coffinier Sylvain (14).
        Il se reprend ensuite très bien et atomise Barre Julien (14) et Fofana (11) 3/0 avec quelques coups supersoniques.

        François paye son manque provisoire d\'entrainement sur son premier match et perd 3/1 contre Barre Julien (14).
        Il bat ensuite Fofana 3/1 et Coffinier 3/2 après avoir bien réagi en étant mené 2/0.

        Bertrand commence très laborieusement par une victoire 3/2 contre Fofana en étant mené 2/0 et en ne passant pas très loin de la contre de l\'année.
        Une fois dans le match, victoires relativement faciles contre les deux 14.

        Bertrand et François gagnent le double 3/0

        En B

        Très beau sans faute de la B.

        Andrei, alias Fightman, bat Sausage Jean Marie (12), Brisacq Damien (12) et Pechon Nicolas (11) en 5 sets avec
        un bon niveau de jeu et de grandes qualités de combattant. 3 belles perfs pour commencer la saison.

        Leny gagne ses 2 matches 3/0 sans trop de problèmes (forfait de Sausage sur blessure)

        Louis a un peu de mal à se mettre dans le rythme et bat Pechon (11) 3/2. Une fois plus relâché il bat sans problème
        Brisacq (12) 3/0

        Louis et Leny gagnent le double 3/0.'),
        array('id' => '9','equipe' => '15','journee' => '1','date' => '1316840400','lieu' => 'Amiens','adversaire' => 'Exempt','score' => '18','score_adv' => '0','commentaire' => ''),
        array('id' => '8','equipe' => '13','journee' => '1','date' => '1316840400','lieu' => 'Seclin','adversaire' => 'SECLIN PPP 1','score' => '3','score_adv' => '10','commentaire' => ''),
        array('id' => '52','equipe' => '15','journee' => '2','date' => '1318050000','lieu' => 'Abbeville','adversaire' => 'ABBEVILLE AC 1','score' => '16','score_adv' => '2','commentaire' => ''),
        array('id' => '11','equipe' => '16','journee' => '1','date' => '1316840400','lieu' => 'Amiens','adversaire' => 'LL AMIENS 1','score' => '11','score_adv' => '7','commentaire' => ''),
        array('id' => '12','equipe' => '1','journee' => '1','date' => '1316840400','lieu' => 'Saint Pierre les Elbeuf','adversaire' => 'Saint Pierraise Entente 1','score' => '5','score_adv' => '11','commentaire' => 'Le 1er déplacement de l\'année 2011-2012 se fit en banlieue rouennaise, dans la ville de Saint Pierre Les Elbeuf avec une équipe rajeunie.
        Rendez-vous était pris à 13H15 devant la salle Albéric LABAUME. Yannick MARAIS alias \'jaja\' ainsi que la CHATELAIN\'S family arrivèrent à leur tour. Seule personne encore absente, le \'beegees\' HAIGNERE. 4 appels en absence et 3 messages plus tard, la star arriva vêtue d\'une paire de lunettes de soleil et d\'une coiffure digne du leader du groupe de punk rock \'Offspring\' mais avec un maillot tout aussi rock\'n\'roll où était écrit « j\'aime le ping » la classe à Dallas Douglas, j\'ai envie de dire.
        Une fois la team réunie, ainsi que les sacs rangés, c\'est- à-dire 10 bonnes minutes plus tard. De la faute à qui et bien à bibi ! J\'eus une idée lumineuse en proposant de mettre les sacs dans ma titine (309) ! Un gros blanc s\'installa ! Finalement, nous fûmes repartis plus vite que prévu (à part pour Raphi qui est mineur !!)
        117km/h de moyenne et 1H45 plus tard (15H), ainsi que quelques directions données à Jaja par Alex nous arrivâmes devant ????.. Bricorama !?! (toi aussi, si tu n\'as pas de GPS, demande à Alex, lui seul t\'emmènera dans des endroits où il a le secret)
        Raphi, qui ne stressa pas, nous sortit « on est large les gars ! ».
        En parlant de \'large\', ni une ni deux, Jaja appela Malin en terre Saint Pierraise. Ce dernier parlant français comme une vache roumaine, tout devint claire pour jaja et nous arrivâmes, après 10 ronds-points et des explications claires, au gymnase pour pouvoir en découdre avec l\'équipe adverse.
        COMPOSITION des EQUIPES
        Entente St Pierraise : 
        A : GUAN Wei Jing (n°169), JAKUBOWICZ Arek (n°287), SIMULESCU Eugen (n°693)
        B : CERNEA Doru Nicolae (n°295), CAPRON Nicolas (n°373), BOUMEDOUHA Karim (n°997)

        Amiens Sport Tennis de Table:
        A (les vieux) : MARAIS Yannick (n°186), PLOTUNA Malin (n°195), CORRE Cédric (n°277)
        B (les d\'jeunes) : CHATELAIN Raphaël (20), LECOMTE Yohan (19), HAIGNERE Alexandre (18)

        Notre A fût sereine lors du début de la rencontre. En revanche, du côté de la B, ce fût un petit peu tendu. Finalement, défaite 11/5 mais ceci reste\' «\'honorable\'» sur une équipe qui va jouer le haut du tableau.

        PLOTUNA Malin (3/3) : L\'homme fort de cette journée. Il a montré que l\'on pouvait compter sur lui.
        Telle une vache normande, il a écrasé ses adversaires.
        CORRE Cédric (1/3) : Cédric s\'imposa d\'entrée sur Simulescu (3/0) puis joua ensuite Guan Wei Jing qui évolua un ton au-dessus. Puis, Cédric finit son dernier match au score acquis sur Jakubowicz Arek en menant 2/0 mais le dernier match, une fois le score acquis, est toujours un piège. Finalement, défaite 3/2.      
        « Corre un match de plus et ce sera jackpot »
        MARAIS Yannick ( 1/ 2) : D\'entrée Yannick joue le Chinois donc un peu fort et trop rapide pour le premier match de la saison. Ensuite il s\'impose face à Jakubowicz dans un match disputé. Yannick a fait le «\'job\'».                                                            
        Service marteau et revers ont payé en fin de match, merci de m\'avoir écouté jaja.
        CHATELAIN Raphaël (0/3) : D\'entrée de jeu Raphaël poussa au 5 ème set le n°373 en menant même 2/1 (3/0). Malheureusement, il s\'inclina lors de la manche décisive. Lors de son second match (contre le n°997) à peu près le même scénario se produisit puisqu\'il s\'inclina encore une fois à la belle (saperlipopette). Puis, lors de sa dernière rencontre, il s\'incline 3/1 face à Cernea Dorue Nicolae. Il montra qu\'il fût capable d\'avoir un rôle majeur dans le groupe B mais son 1er match l\'a vraiment bien entamé physiquement. 
        « tu avais bien raison dans la voiture ; on était large » 
        LECOMTE Yohan (0/2) : Je m\'incline d\'entrée face à Boumedouha Karim qui fit un super match tandis que je fus plus tendu (mais bon 1er match en N2 oblige !). Lors de ma seconde rencontre, un super Yohan est apparu (on n\'est jamais mieux servi que par soi même). Je menais 2/0 sur Cerna Dorue Nicolae et ayant même 2 balles de match au 3ème set puis 1 balle de match au 4ème set. Mais bon, avec l\'expérience ça viendra.
        Comme dirait Denis « do mage monsieur presque »
        HAIGNERE Alexandre (0/2) : S\'incline d\'entrée 3/0 face à Cernea Doru Nicolae en faisant un match «\'correct\'». Lors de son second match «\'interminable\'» sur Capron, il mena 6/2 à la belle, avant que celui-ci ne prenne un temps « mort ». Ce fut le début de la fin pour lui ; il resta bloqué à 8. (GAME OVER).
        « Une balle cassée partout » la team a apprécié cet instant, tu nous fais rêver !

        Rendez-vous dans 15 jours à domicile contre Nantes.

        Les \'Bee gees\' Yoh and Alex.'),
        array('id' => '64','equipe' => '10','journee' => '2','date' => '1318136400','lieu' => 'Beauval','adversaire' => 'BEAUVALOIS TT 2','score' => '6','score_adv' => '12','commentaire' => 'Un résumé qui va être Beau pour des joueurs qui Val le coup … hé oui moi aussi je copie sur Denis Chatelain et je glisse des réponses dans mes phrases. Dans cette première phrase le nom de l’équipe adverse s’y cache.

        Pour cette deuxième journée le capitaine exemplaire que je suis s’est décidé à faire un résumé, oui la première journée une Flemme-atique Vaquerius aigu s’est attaqué a moi … j’en suis sorti indemne … ouf.

        Notre équipe composée de deux très jeunes joueurs Amiénois que j’ai nommé Richard Tran (7) et Paul Boinet (6) et de deux jeunes joueurs également que j’ai appelé Grégory Chhe (7) et Alexandre Goupil (6) qui affrontaient une équipe Beauvalloise très en forme composée de Douay Jean-Paul (7) , Maison Jean-Pierre (7) (Oui Beauval aime les prénoms composés), Valour Fabrice (6) et la révélation du jour Caron Patrick (5).

        Commençons par Richard qui a fait une petite bullos qui ne lui a pas plus du tout , notre Chuany Amiénois s’est malheureusement incliné devant un J.Paul plus Douay que lui (il l’a pris pour son Poulain , un J.Pierre qui l’a renvoyé manger des gâteaux chez maman a la Maison , un Patrick qui faisait des Caron sur chaque boule et un Fabrice qui jouait bien.

        Continuons avec le Goup , Ch’Goup , Goupil , enfin moi Alexandre quoi , moi aussi avec un niveau très élevé j’ai pensé faire une Sellier et me dire qu’il valait mieux arrêter pour ne pas continuer les dégâts mais assoiffé par l’envie de ressembler a mon idole que je ne citerais pas … un petit indice pour les Nuls , ça commence par Arnaud et ça termine par Sellier (toi aussi envois des fleurs a ton Vice-Président) , j’ai continué sans pleurer a jouer mes matchs mais malgrè un talent en communication débordant je ne suis pas parvenu a gagner un match … maintenant que Cahagne est parti d’Amiens il faut bien un nouvel agent 0 … trouvé !!!!

        Ré-enchérissons avec Paul Boinet qui , même un peu moins en forme que la première journée , nous encore une fois montré son talent … il a su chatouiller ses adversaires et les faires rire pour pouvoir passer devant et s’impose devant Valour et Maison , sacré J.Pierre Boinet a brulé la Maison de bois… s’incline devant les deux autres joueurs qui ont su le mettre en difficulté et le mettre hors de lui … heureusement super Captain’ a su le canalisé…ouf !

        Enfin, notre recrue de Villers-Bretonneux (hé oui même si Perpette nous pique des joueurs, Dud en pique aussi et ça a Seb … «  Ca lui fait mal a l’interieur …. » , bref notre Greg as sur faire table rase des pongistes Beauvalois … ayant vu son idole (Yanick Marrais) jouer la veille , il a tapé la boule comme lui , avec un toucher de balle énorme. Il s’impose sur 3 matchs  et se péte la figure sur Patrick …l’étoile de mer de Bob L’éponge. Très belle performance de Greg aujourd’hui.

        Au final , tout le monde l’a compris , Beauval s’impose 12-06 face à Amiens. Une bonne ambiance malgré tout et un grand merci au célèbre Mr Tran pour nous avoir accompagné sur ce déplacement. Dans 15 jours … rendez-vous à Flixecourt, pour un match plein de sang et de fight. Haaaa Flixecourt le club de notre Président de ligue …. J’ai hâte.

        Alexandre Goupil'),
        array('id' => '68','equipe' => '13','journee' => '3','date' => '1319259600','lieu' => 'Marmande','adversaire' => 'MARMANDE RAQUETTE 1','score' => '1','score_adv' => '10','commentaire' => ''),
        array('id' => '69','equipe' => '14','journee' => '3','date' => '1319259600','lieu' => 'Doullens','adversaire' => 'DOULLENS / BERNAVILLE 1','score' => '9','score_adv' => '9','commentaire' => 'Samedi 22 octobre : départ 15h pour un déplacement à Doullens. C\'était un match très important car pour l\'instant nous comptabilisons deux défaites. Notre équipe comprenait GUICHARD Delphine, 8, NEEL Aurélie, 9, BERTHELOT Marion, 10 et CARLIE Hélène, 14.
        L\'équipe de Doullens était composée de MICHEL Carole, 11, FRANCOIS Anne, 10, DUBREUCQ Mechthil, 10 et FALSARELLA Maud, 7.

        Le juge arbitre pour cette rencontre était Monsieur Gérard FERAUD, juge arbitre très pointilleux !
        Le juge arbitre lançait un "quelle heure avez-vous ?" Aurélie répondit : "17h01" et il s\'empressa de lancer les deux premiers matchs en annonçant la vérification de chaque raquettes... une, deux, trois, quatre, cinq, six, sept et ...... STOP !! "Madame MICHEL Carole, votre raquette gondole ! Vous ne jouez pas avec ce matériel !" Vingt minutes de perdues pour ce match qui l\'opposait à Delphine et vingt minutes d\'échauffement de gagnées pour le match d\'Aurélie !!

        Aurélie (1 victoire, 3 défaites) : de belles rencontres en début de match face à FRANCOIS, défaite 3-1 (-8/7/-7/-5) et MICHEL, défaite 3-1 (4/-6/-6/-4) puis après les doubles en totale perdition sur DUBREUCQ, défaite 3-1 (-9/-9/7/-5) avant de se ressaisir, avec quand même encore quelques imperfections, contre FALSARELLA, victoire 3-1 (1/-9/10/9).

        Marion (2 victoires, 2 défaites) : bonne partie de première rencontre en remportant ses deux premiers matchs sur FALSARELLA 3-1 (-9/9/8/11) et sur DUBREUCQ 3-1 (8/6/-3/7). Ensuite défaite dure à avaler pour Marion qui perd face à MICHEL 3-2 alors qu\'elle menait 2 sets à 0 et 6-2... (7/9/-6/-9/-6) puis elle s\'incline sur FRANCOIS 3-0 (-9/-7/-5).

        Aurélie et Marion remportent leur double face à FALSARELLA et FRANCOIS 3-2 (-7/6/-6/7/10).

        Delphine (1 victoire, 3 défaites et ... un carton jaune pour son retour !!!!) : Delphine s\'incline 3-1 face à MICHEL (-3/-6/10/-7) et 3-0 face à FRANCOIS (-9/-10/-9). Après elle remporte son match contre FALSARELLA 3-0 (3/5/6) puis perd sur DUBREUCQ 3-1 (-9/11/-4/-12) avec le carton jaune à la clé !!

        Hélène (4 victoires) : je remporte mes matchs sur DUBREUCQ 3-1 (5/-6/6/7) et sur FALSARELLA 3-1 (9/2/-12/2) puis 3-0 sur FRANCOIS (6/3/6) et MICHEL (4/3/9).

        Delphine et Hélène s\'inclinent face à DUBREUCQ et MICHEL 3-2 (-7/10/-7/6/-5).

        Pas de victoire mais un match nul qui laisse un goût amer......

        Prochaine rencontre à domicile face à St Nicolas.

        Hélène Carlié'),
        array('id' => '70','equipe' => '15','journee' => '3','date' => '1319259600','lieu' => 'Amiens','adversaire' => 'TT MERS TREPORT EU 1','score' => '16','score_adv' => '2','commentaire' => ''),
        array('id' => '71','equipe' => '16','journee' => '3','date' => '1319259600','lieu' => 'Fourdrinoy','adversaire' => 'FOURDRINOY-CAVILLON 1','score' => '17','score_adv' => '1','commentaire' => ''),
        array('id' => '72','equipe' => '1','journee' => '3','date' => '1319259600','lieu' => 'Reims','adversaire' => 'REIMS OLYMPIQUE 1','score' => '11','score_adv' => '9','commentaire' => 'Sur la route du SACRE…

        Apres Saint Pierre Les Elbeuf, puis Nantes, direction était prise à Reims pour cette 3éme journée de championnat, déjà capital dans l’optique du maintien.

        Amiens &#61664;13h15, toujours la même heure de rendez vous, et oui on ne change pas les habitudes monsieur.

        2 voitures pour partir. D’un coté Jaja, ainsi que ch’Goup, ce « dernier » s’était dit qu’après avoir demandé les chaussettes Cornilleau (un peu de pub c’est toujours bon à prendre !) de Cédric dans la semaine, que peut-être ce coup ci Jaja lui donnerait…tout sauf des fringues. Jaja lui donnait un peu d’eau bénite pour pouvoir nous sacrer a l’issue de la journée (tu ne pensais pas que tu allais avoir son slip ou autre chose quand même !!). Par contre moi, je lui donnais tom tom (gps), ne t’inquiètes pas monsieur Grassart ton tour viendra !! Un bon quart d’heure après l’avoir fixé, la 1ère voiture partait en direction de la grande ville des rois. 

        De l’autre coté Alex  proposait de prendre sa voiture, bein oui on a retenu la leçon de la 1ère journée. Ce coup ci il avait prévu tom tom n°2 (attends encore un peu monsieur Grassart ce n’est pas encore là !), on espérait tous de ne pas arriver devant…. Bricorama !

        Déjà en écoutant la radio pendant le trajet, Alex savait que  nous étions sur la bonne route (du succès) car nous entendions passer la chanson des LMFAO (je sens une incompréhension chez les plus de 30 ans) « champagne shower », si ça c’est pas un signe. 

        2ème révélation, au bout de trois quarts d’heure de route, je voyais Malin pencher la tête, sans doute était-il en pleine méditation ! En tout cas on voyait qu’il était dans sa « bulle ». Comme dirait Jeanne d’arc, ça fait beaucoup de signes quand même (oui oui elle l’a dit comme ça !!!!!). Pendant ce temps là à l’arrière, Raphi et moi nous nous amusions entre autres à comparer les tailles de nos vêtements (wé je sais on est des fous, on sait s’amuser !! on se demande bien qui est-ce qui a 15 ans et l’autre 25 !!). 

        Et là 3ème révélation, après le « on est large » de Saint Pierre Les Elbeuf, Raphi me sortait « chui mastoc » !! Alors là c’était sûr on ne pouvait pas perdre.

        Par contre, perdre la route, ça on pouvait, malgré le GPS, on arrivait devant…. plein d’HLM. Selon les experts en géographie on n’est pas dans la « diagonale du vide » pour rien. Mais au bout d’une heure, Malin avait fini sa méditation, on sentait que tout était clair d’un coup, il valait mieux l’avoir à coté de lui qu’au téléphone pour arriver à destination. Heureusement qu’il connaissait l’endroit pour ainsi « sabrer » les futurs adversaires et surtout le champagne, afin de ne pas se faire « rincer »

        Equipe Amiénoise (les sacrés, champagne)
        A: Yannick MARAIS (n°186), Yohan LECOMTE (19), Malin PLOTUNA (n°195)
        B: Raphaël CHATELAIN (20), Alexandre HAIGNERE (18), Cédric CORRE (n°277)

        Equipe Rémoise (les rincés, champomy)
        A: Cyril MAYEUX (n°606), fabien GILARDI (n°143), Guillaume GALLOIS (n°436)
        B: Jérôme REMY (20), Thomas GRASSART (n°797), Farid GRINE (n°682)

        Evolution du score :
        REIMS - AMIENS
        0-2 / 2-2 / 2-4 / 4-4 / 4-6 / 5-7 / 8-7 / 8-10 / 9-10 / 9-11

        Détails:

        Yannick MARAIS (2/3) : dit « le Pieux », d’entrée Jaja a fait perdre la vue a Cyril (et oui ça fait ‘Ma(l)yeux’ !, je sais elle est un peu tirée par les cheveux celle là !!). Mais au fur et à mesure des matchs, un pieu (toi aussi apprends le Picard, ça pourra toujours servir !) serait le bienvenu au moment des fins de set et du temps mort. Beau finish dans les bâches quand même sur Gilardi, tu étais à une bulle qu’elle touche la table (tu nous as envoyé du rêve Jaja).

        Malin PLOTUNA (2/3) : dit « le Gros », ne s’est pas laissé faire sur le « Gallois » pour nous mettre sur la route du succès. Par contre sur Gilardi n’a pas fait le poids à la fin malgré un match épique. La méditation dans la voiture t’a grandement servi.

        Cédric CORRE (3/3) : dit « le Bref », a failli se faire ‘sabrer’ d’entrée sur Grine mais cette fois ci la « poufiasse » a bien ‘accordé’ sa raquette pour nous mettre sur le chemin du sacre et nous offrir une guerre de « Troyes » réussie.

        Raphaël CHATELAIN (3/3) : dit « le Jeune » a gouté au 20 d’entrée, puis a fait perdre la tête a Tom Tom (ne trouvait plus le chemin de la victoire !! je t’avais bien dit que ce serait ta fête&#61514;) au dernier moment pour ainsi finir en beauté sur Grine. La fougue de ta jeunesse a eu raison de tes adversaires. Tu avais finalement bon dans la voiture, tu étais bien « mastoc », les signes ont parlé d’eux-mêmes.

        Yohan LECOMTE (0/3) : dit « la pucelle » d’Amiens,  si je veux un jour passer du grade de Conte à celui de Roi, il faudra passer par des victoires et arrêter de compter sur des signes. Et comme j’ai fait une bulle, je me suis consolé sur le champagne à l’apéro de fin de match après m’être fait ‘rincé’ sous la douche (quoi de plus normal !)

        Alexandre HAIGNERE (1/3) : « après le baptême de Clovis » voici le baptême d’Alex qui a mis le point le plus important pour sacrer toute l’équipe. Lui aussi comme Raphi, a gouté au 20 de la victoire (qu’il a bien savouré d’ailleurs !!)

        Au final :
        Malgré une douche archi brulante, cela n’avait pas suffit pour nous brûler les ailes.
        N’oublions pas non plus les 15 points perdus par le ‘Jean Paul Loth’ du ping &#61664; Lucas Créange (pour toi Jaja)
        Comme disait Malin, c’était le meilleur buffet apéro depuis que je joue (ça c’est clair, t’as fini tout le boudin blanc !! sacré Malin)
        Et pour finir, un Macdo à rallonge avec une commande à 205 euros par un groupe de basketteurs (oui monsieur !), forcément avec Raphi on est arrivé juste après eux !! 
        Comme dirait Jean Claude Convenant « t’en veux » (dédicace à toute la Team)               

        Tchousse et …………..vive la mousse.

        Alex et Yo, le baptisé et la pucelle.

        Alexandre HAIGNERE ET YOHAN LECOMTE'),
        array('id' => '73','equipe' => '2','journee' => '3','date' => '1319259600','lieu' => 'Amiens','adversaire' => 'MONDEVILLE USO TTO 1','score' => '2','score_adv' => '11','commentaire' => 'Samedi 22 octobre 2011 Amiens II / Mondeville I

        Co-leaders fabuleux (à l’image du destin de Jean-Paul Poulain) après deux journées, nous aurions bien bu à nouveau l’eau de cette Fontaine de jouvence. Jean, ce fidèle Castro … théodoricien, qui avait plus d’une morale dans le cigare, nous l’aurait certainement déconseillé. En effet, son Héron (J’ai bien dit Héron, petit, pas Tapon !) le précise si bien ; « il ne faut être si difficile :
        Les plus accommodants, ce sont les plus habiles :
        On hasarde de perdre en voulant trop gagner.
        Gardez-vous de rien dédaigner,
        Surtout quand vous avez à peu près votre compte. »

        Et notre compte, nous l’avions bien après ces victoires sur Villers et un Argentan remanié, en attendant une équipe plus abordable que celle du jour, en l’occurrence Mondeville, forte de :
        A : Douine 391, Parment 19 Perrot 383
        B : Legendre 19 Lefèvre 18 Louer 709
        face aux grenouilles qui se voulaient faire aussi grosse que le bœuf :
        A : Dubois 16 Harlé 621 Cany 19
        B : Vaquier 15 Blatrix 18 Rasselet 17

        Après un 2/2 logique, au prix d’une belle remportée par Maxime contre Julien Lefèvre (-6/8/-9/12/3), l’affable Perrot ne s’en laissa pas conter, et ses camarades ne s’en laissèrent donc pas « contrer ».  Ce contemporain de La Fontaine ouvra donc ses comptes, et le Petit Poucet ASTT2 eut bien besoin de semer des balles cassées pour retrouver le chemin de la douche et du club-house, tant l’Ogre Normand avait chaussé ses bottes de neuf lieues. Oui, neuf, plus deux qui font onze, le conte est mauvais, Yohan est beau, Henri est gros, mais le compte est bon ! 11/2 pour Mondeville.

        Les frogs :
        Lucas Dubois 2D (383,391) Faut-il que je conseille ici à l’érudit en devenir, la lecture de « l’Ane et le petit Chien » … En voici simplement la morale :
        « Ne forçons point notre talent,
        Nous ne ferions rien avec grâce 
        Jamais un lourdaud, quoiqu\'il fasse
        Ne saurait passer pour galant. »
        (Euh … lourdaud, c’est une allégorie Lucas !) (Euh … allégorie c’est … « une autre manière de dire ») (Bon, en gros t’as rien d’un lourdaud !)

        Christophe Harlé : 1V (19) 1D (391)
        « Il était expérimenté,
        Et savait que la méfiance
        Est mère de la sûreté. »
        Il a donc assuré son point logique avant d’offrir une belle prestation contre Douine. (Défaite 3/2) Mais la comparaison au vieux rat s’arrête là, car il a tout de même souri un peu plus tard à l’heure du fromage…

        Laurent Cany : 2D (19,383) J’aurais dû lire mon horoscope (celui de La Fontaine bien sûr), car … 
        On rencontre sa destinée
        Souvent par des chemins qu\'on prend pour l\'éviter !
        On m’a également tellement dit que je jouais bien que j’aurais bien voulu faire vérifier à mes adversaires que tout flatteur vit aux dépens de celui qui l’écoute … raté !

        Benoît Vaquier : 2D (19,709) Dommage, aurait presque pu battre Legendre, idéal en fin de manche comme dit sa belle-maman… Il a mené, mené et encore mené, pour se faire coiffer au poteau dans les deux premiers sets, avant de s’écrouler 11/5 au 3è. Il se voyait peut-être encore beau … alors qu’il aurait dû jouer les renards. Mais une morale lui colle encore mieux au pelage :
        Rien ne sert donc de courir, il faut partir à point. C’est bête, j’aurais juré qu’il eût joué le rôle de la tortue !

        Maxime Blatrix : 1V (18) 1D (19) : A l\'œuvre on connait l\'artisan. (Les frelons et les mouches à miel)
        Et de ces deux points au total, il fallait avoir de l’abnégation pour en être l’artisan. Max a même failli enrayer la mécanique céleste de Legendre (défaite -9/-3/8/9/-12).

        Vincent Rasselet : 1D (709) : Bien au-delà des résultats sportifs du jour, une parole de Socrate pour notre coéquipier :
        Chacun se dit ami ; mais fol qui s\'y repose.
        Rien n\'est plus commun que ce nom ;
        Rien n\'est plus rare que la chose.

        Enfin, les deux doubles n’ont pas pesé lourd (défaites 3/0). Mais Patience et longueur de temps font plus que force ni que rage. Alors rendez-vous le 5/11 chez l’enfant de la balle. 

        Dicton du jour :
        A la Saint Salomé
        Il y a une moralité.

        Laurent CANY'),
        array('id' => '74','equipe' => '3','journee' => '3','date' => '1319259600','lieu' => 'Amiens','adversaire' => 'WAVIGNIES / BRETEUIL 2','score' => '17','score_adv' => '3','commentaire' => 'A la poursuite d’Octobre rouge

        Samedi 22 octobre, Match contre Breteuil 2.

        Rencontre pour le maintien, vaut mieux que deux tu l’auras. Un proverbe probablement piqué à notre maître Cany. Mais il a généreusement abandonné tous ses droits sur le copyright.

        Breteuil, sûr de son fait, avait décidé de mettre au repos deux joueurs majeurs : les sieurs HERSENT et ROBINET. C’eût pu être considéré comme de l’arrogance. Oui Monsieur. Le subjonctif plus-que-parfait dans un résumé de R1. Alexandre GOUPIL est en train de convulser… Mais en fait, non, aucune suffisance. La routine : Breteuil règne actuellement sur la Picardie pongiste. Et bientôt sur le Monde.

        Regardons objectivement les faits. En championnat : deux équipes en R1 ; l’une d’entre elles déjà dans l’ascenseur, le doigt appuyé sur le bouton « N3 ». Avec une participation programmée l’an prochain en Champion’s League. Et le week-end dernier, en individuels : deux montées de Régionale en Nationale : Arnaud Ma Long DAMAY en sénior, et Aurélien Wang LiQin ROBINET en junior. J’oubliais, la 3ème place de Bruno Poulidor CRNIC. Mais on oublie toujours les loosers.

        Le secret de cette réussite insolente ? Certes, l’argent... La découverte d’un gisement phénoménal de méthane dans les toilettes du complexe sportif britulien a ainsi vu débouler Gazprom, les oligarques soviétiques, et la mafia russe. Les euros coulent à flot, on prend des douches à la vodka, et l’on se fait frotter le dos par des ukrainiennes lascives, aux longs cheveux blonds, et au regard clair. J’ignore pourquoi mais le jeune ROBINET cherche absolument à intégrer l’équipe 1…
        Les contres-parties : jouer avec un maillot rouge, période Brejnev/Spartak Moscou. Et soviétiser le nom des capitaines : Etienne Vladislav Brochov et Laurent Dimitri Duroyonski.  Acceptable… L’achat de joueurs et d’entraîneurs de renommée internationale (Cyprien Samsonov-BORGHOO et Fabien Mourinhov-AMBEZA), et des pressions amicales exercées par des poètes kazakhs, à coups de battes de base-ball dans les genoux des joueurs adverses, n’expliquent cependant qu’en partie ces résultats ahurissants. Le Petit-plus réside probablement dans l’état d’esprit ouavignio-britulien : l’&#1076;&#1091;&#1096;&#1072;… Mais cessons les digressions sur l’âme slave. Pour les acharnés, vous pouvez toujours vous reporter à la thèse de 3ème cycle de François FELDMAN, soutenue en 1988: http://www.youtube.com/watch?v=ybj2APwndu4.

        Nullement impressionnée, l’OTAN-en-emporte-le-vent amiénois, jouait son ticket pour la deuxième phase en R1, ce samedi. Contre les forces du Pacte de Varsovie Bret-Wavigniennes. Quelques agents-doubles, sous-mariniers brituliens, s’étaient infiltrés dans nos lignes lors des entraînements pour nous superviser. Mais ils ont tout de même été torpillés. A grands coups de grenades, de barre à mine, et de bar à vin. Leur sous-marin atomique, le Breteuil II, éventré, gît désormais par 200 mètres de fond, juste à côté du Koursk. C’est triste pour la marine soviétique
        Mais maintenant, avec au moins 3 équipes dans le dos au classement, on est normalement maintenu. Avant d’attaquer la première vodka avec DUDU (un peu abattu par une défaite sèche 11/2 contre Mondeville en N3), j’ai envie de dire : Za Vachè zdarovié !

        Les torpilleurs

        Jean TAQUET (3 victoires en A): A fait le boulot avec 3 victoires. Spassiba Jean. A alors lentement tourné le regard vers la table A pour apercevoir son fils spirituel, Cédric. Puis vers la table B, pour admirer son petit-fils spiritueux, Antoine. Un sourire éclaira alors son visage et lui frisa la moustache : Defense will never die…

        Denis CHATELAIN (3 victoires + double en A) : Des rafales de kalashnikov contre Guillaume MENARD (victoire 3/0). A tout de même pris quelques coups de knout contre Fabien KAPELA (victoire 3/0). A terminé en faisant donner les orgues de Staline contre Olivier DESCAMPEAUX (victoire 3/0).

        Cédric HERMANT (3 victoires + double en A) : Taillade et coupe avec une précision chirurgicale. A commencé par amputer de 3 sets et des deux jambes Olivier DESCAMPAUX. Puis a greffé le foie de la loose à Guillaume MENARD (victoire 3/0).  Et a fini par suturer les paupières de Fabien KAPELA, avec 2 softs, pour qu’il ne voit plus son malheur (victoire 3/0).

        Christian HENON (3 victoires en B) : N’a jamais aussi bien joué que depuis qu’il ne joue plus. Peut-être le fait de regarder Benito VAQUERO s’entraîner tous les après-midis. Avec une possible diffusion osmotique, par capillarité, du talent. Une équipe de neurophysiciens est déjà sur le coup. Ils envisagent d’ouvrir la boîte crânienne de Benito pour analyser sa matière cérébrale. Super intéressant. Mais il y aura probablement de l’écho. Ou alors on entendra le bruit de la mer.

        Pierre LE GALLOUDEC (2 victoires en B) : Pierre qui roule sur Laurent DUROYON (victoire 3/0). Pierre qui coule sur Aymeric SAGNIER (défaite 3/2). Et Pierre qui amasse la mousse et quelques embrouilles sur Fabien AMBEZA (victoire 3/1). De bonnes primaires, mais une gauche un peu molle contre Aymeric. Comme un symbole de François HOLLANDE.

        Antoine HUON (2 victoires en B): Jouer dans des équipes de vieux c’est pas mal. On écoute de vieilles histoires de guerre. On les entend se plaindre de leurs douleurs arthrosiques. On les pousse dans les escaliers… Et au final, 2 perfs, et on se dit qu’on a de la chance d’être jeune.

        Philippe L’HOTE (touriste) : Prend ce jour la tête du « challenge Florian GAY », jeune joueur trop tôt disparu. Avec un forfait pour un lumbago-double axel-triple loop. A en plus grossièrement imité la signature de sa mère sur le mot d’excuse. Dudu pense lui coller 4 heures de colle. Thibault FORRET likes this.

        Les torpillés

        Fabien KAPELA (0 victoire en A) : A commencé la rencontre en mode Kapela tarte sur Jean TAQUET. Mais après sa première défaite, étriquée, sur le score de 3/0, est passé en mode Kapela creuser sa tombe (2 défaites supplémentaires sur Cédric et Denis).

        Olivier DESCAMPAUX (0 victoire en A): Olivier porte bien le maillot écarlate de Breteuil. Et manie sa raquette comme un tomahawk. Ne dites plus : « Des assemblées de tentes et de tipis dans lesquels Olivier, l’indien, porte le tee-shirt de Breteuil » mais « DESCAMPEAUX rouge ». Un peu tiré par les cheveux... D’ailleurs son scalp pendait à la ceinture de Cédric à l’issue du premier match.

        Guillaume MENARD (0 victoire en A) : Un match magique et féérique contre Jean TAQUET, menant 2 sets à 1. Mais Jeannot brisa le rêve à coups de claquettes du revers. Guillaume dut alors, à regret, quitter le monde de MENARD nia, pour retrouver la dure réalité (défaite 3/2).

        Fabien AMBEZA (1 victoire en B + double): Sortis du terrier coudunois, les AMBEZA ont essaimé à travers toute la campagne picarde. Ces petits mammifères léporidés, à grandes oreilles et petite queue blanche (ah non, mille excuses, c’est en fait l’inverse), ont souvent les yeux rouges. Mais pas à cause de la myxomatose. Une victoire facile sur le jeune renardeau Antoine HUON (3 sets à 0).

        Laurent DUROYON (0 victoire en B): Son altesse sérénissime Laurent du ROYON de la frappe au rebond. Mais des placements aussi hasardeux que ceux de la banque DEXIA ou du trader CRNC (par souci de confidentialité, et afin qu’on ne puisse identifier ce grand escroc, les voyelles ont été effacées de son nom par l’éditeur). A vu sa note dégradée par l’agence Moody’s, passant du triple A à la triple bulle en l’espace d’une après-midi.

        Aymeric SAGNIER (1 victoire en B) : Présent dans les regroupements. Premier dans les zones de rucks. A gratté quelques balles au sol contre Pierre LE GALLOUDEC pour le plier 3 sets à 2. Good game Aymeric.

        Christophe LEFAY (au repos) : LEFAY maison ce jour. Préservé comme joker pour l’équipe 1. En fait plutôt LEFAY tiche.

        Aurélien ROBINET (mode Titi): Z’ai cru voir un ROBINET. Mais non d’un chat de nom d’un chat, il s’agissait juste d’une illusion.

        Christophe HERSENT (convalescent): Sa greffe de la main droite n’ayant pas complètement prise après l’amputation subie l’an dernier, les grands professeurs américains ont préféré qu’il ne recroise pas l’ignoble CHATELAIN devant une table de ping-pong. A ainsi pu participer au goûter d’anniversaire de madame HERSENT, et s’empiffrer de crêpes Nutella et de Chamallow. Veinard.

        Le détail
        En A
        Denis CHATELAIN (2070 points) bat Olivier DESCAMPAUX (1707 points) (7,2,6), Guillaume MENARD (1641 points) (3,1,2) et Fabien KAPELA (1668 points) (2,8,6).
        Jean TAQUET (2026 points) bat Olivier DESCAMPAUX (1707 points) (7,5,7), Guillaume MENARD (1641 points) (4,-8,-9,6,3) et Fabien KAPELA (1668 points) (7,9,12).
        Cédric HERMANT (1998 points) bat Olivier DESCAMPAUX (1707 points) (4,-4,7,5), Guillaume MENARD (1641 points) (9,-9,6,5) et Fabien KAPELA (1668 points) (10,8,-8,5).
        Denis et Cédric battent Fabien et Olivier (4,4,2).
        En B
        Christian HENON (1876 points) bat Laurent DUROYON (1518 points) (9,9,7), Aymeric SAGNIER (1491 points) (7,11,6) et Fabien AMBEZA (1641 points) (6,6,5).
        Pierre LE GALLOUDEC (1814 point) bat Laurent DUROYON (1518 points) (12,8,7), et Fabien AMBEZA (1641 points) (6,-3,5,5) et perd Aymeric SAGNIER (1491 points) (-4,6,10,-8,-6)
        Antoine HUON (1225 points) bat Laurent DUROYON (1518 points) (6,7,5), Aymeric SAGNIER (1491 points) (-13,2,9,6) et perd Fabien AMBEZA (1641 points) (-6,-5,-8).
        Christian et Pierre perdent Aymeric et Fabien (12,-4,-8,-9).

        Denis CHATELAIN'),
        array('id' => '75','equipe' => '4','journee' => '3','date' => '1319346000','lieu' => 'Amiens','adversaire' => 'VAUCHELLES ASV 1','score' => '15','score_adv' => '5','commentaire' => 'Ayant beaucoup plus de travail et beaucoup moins de temps libre que le capitaine de la R1, mon compte rendu sera succinct (Non Benoit ce n’est pas un gros mot).

        En ce dimanche nous avons donc affronté Vauchelles, équipe jusque là invaincue (1 victoire et 1 nul).

        En A : 2 14 et 1 13

        François 3 victoires plus le double
        Jean Paul plus à l’aise sur les 17 et les 18, 3 défaites
        Bertrand 3 victoires plus double et 68 % de services gagnants, mais pas d’aces

        En B : 2 13 et 1 12
        Loic 2 victoires en perf et une défaite sur 13.
        Lenny 3 victoires et conserve son invincibilité
        Louis 3 victoires, 2 perfs et conserve son invincibilité
        Lenny et Louis perdent le double et devront faire 30 pompes au prochain entrainement.

        Victoire 15/05

        Bertrand BATHELOT'),
        array('id' => '76','equipe' => '5','journee' => '3','date' => '1319346000','lieu' => 'Longueau','adversaire' => 'LONGUEAU ESC 1','score' => '8','score_adv' => '12','commentaire' => ''),
        array('id' => '77','equipe' => '6','journee' => '3','date' => '1319346000','lieu' => 'Albert','adversaire' => 'ALBERT BRAY 1','score' => '14','score_adv' => '6','commentaire' => 'Resume will come soon.'),
        array('id' => '78','equipe' => '7','journee' => '3','date' => '1319346000','lieu' => 'Amiens','adversaire' => 'FOURDRINOY-CAVILLON 1','score' => '17','score_adv' => '3','commentaire' => ''),
        array('id' => '79','equipe' => '8','journee' => '3','date' => '1319346000','lieu' => 'Béthencourt','adversaire' => 'BETHENCOURT US 1','score' => '12','score_adv' => '6','commentaire' => 'Dimanche 23 octobre

        AMIENS STT 8 composée de Benoît BONTE, Paul VANDEWOESTYNE, Floris CHARTIER et de Jeoffrey STEPHAN avait rendez-vous a 7H00 au club pour disputer la 3ème journée de championnat...
        Il est 7H03, on décolle, le père de Floris était le pilote.
        Direction : Béthencourt sur Mer !
        - «C\'est où Béthencourt sur Mer ?
        -Euh... attends je vais regarder sur Google ! … Rien ! Peut-être sur Google Earth alors... C\'est dingue ça ! T\'es sur qu\'il existe ce patelin au moins ? »
        Apparemment oui parce que Mappy a trouvé le bled en 10 secondes qui se situe en gros, en très gros à côté d\'Abbeville...
        Enfin bref, le père de Floris était bien mieux renseigné que moi puisqu\'on avait prévu 30 minutes de marge pour trouver la salle que nous avons trouvée en 3 minutes pétantes !
        A 7H59, nous sommes devant la salle ! Mais on n\'est pas censé avoir des adversaires ? Effectivement personne !... Quand je dis personne, j\'exagère ! Pas une voiture, pas un chien, pas un chat, pas une vache, pas une mobylette, pas un vélo, pas même un pigeon ! Ah si un pigeon sur le parking ! Il à d\'ailleurs raté son atterrissage et a perdu une plume... Avant de devenir dingue (ce qui est déjà le cas) et de raconter les aventures de « Vaillant pigeon de combat », on va commencer à chercher une boulangerie, s\'il y en a une...
        Après avoir augmenté de 2,24% la densité de population de Béthencourt à nous 5, nous sommes partis dans le centre ville à la recherche de cette fameuse boulangerie lorsque tout à coup 2 PERSONNES ! LA DANS LA RUE ! 
        « Benoît, prends une photo ! Vite, grouille, on va les louper ! 
        •	Bien joué ça faisait longtemps que j\'en avais pas vu...! »
        Oh ! Une boulangerie ! Même si la boulangère, après l\'arrivée du père de Floris et de Benoît avait réalisé 40% de sa recette dominicale en vendant 2 pains chocos et 3 croissants, les regardant comme deux extraterrestres, elle n\'en revenait toujours pas de voir deux « touristes » dans sa boulangerie ! Même si la journée d\'aujourd\'hui était loin d\'être la visite touristique de Béthencourt sur Mer... Après avoir repris des forces, nous sommes repartis à la salle où il n\'y avait toujours personne...
        8H30 une voiture passe et s\'arrête, puis redémarre... Fausse alerte ! La tension est à son maximum.
        8H31 une autre voiture passe et s\'arrête devant la salle ! Le joueur sort - ou plutôt l\'agriculteur... Il était bien licencié mais il avait pô les clés !
        8H32 une troisième voiture s\'arrête ! Décidément ils devraient mettre des parcmètres ! Le gars sort, lui nous plus n\'a pas les clés ! Non, non, ce n\'est pas un sketch !
        8H33 deux voitures arrivent au même moment dont une voiture avec 2 personnes a l\'intérieur ! 15% de densité de population, 5 personnes en 3 minutes c\'est magnifique ! La troisième journée de championnat est lancée !
        A l\'attaque !!!!!!!!!!!!!!! 
        Enfin l\'euphorie est très vite descendue lorsque le hall de la salle - ou du hangar (au choix) - sentait le fumier. Pas de revêtement au sol enfin c\'était bétonné...Ayant déjà joué là-bas, j\'avais prévenu l\'équipe car à l\'époque Freddy avait gueulé :D. On le sent ça va être dur, surtout de résister au chauffage qui balance 80 décibels pendant 20 minutes pour réchauffer la salle ! Évidemment le clown de service que j\'ai nommé Benoît s\'amusait à imiter le bruit du chauffage comme si ça suffisait pas !

        Composition de BETHENCOURT US 1 :
        OMER Maxime 724pts/A
        BOULY Florent 826pts/B
        GUERIEL Sébastien 1090pts/C
        BOULY Jérôme 845pts/D

        Composition de AMIENS STT 8 :
        BONTE Benoît 791pts/W
        CHARTIER Floris 926pts/X
        VANDEWOESTYNE Paul 843pts/Y
        STEPHAN Jeoffrey 898pts/Z

        C\'est parti après 2minutes de régul à la table la journée commence enfin par une défaite 3-2 de Floris contre BOULY Florent
        et une victoire de Benoît 3-2 contre OMER Maxime.
        Ça commence fort, les matchs sont serrés mais sur le papier on a moyen de faire quelque chose, gagner par exemple !
        S\'ensuit une victoire de Jeoffrey 3-0 contre BOULY Jérôme et de Paul 3-1 contre GUERIEL Sébastien ! Paul fait une perf à 247pts !

        Amiens mène 3-1. Béthencourt restera mené durant toute la matinée !

        Floris gagne son match contre OMER Maxime 3 sets à 2. Floris nous a fait peur mais il apporte un point supplémentaire à l\'équipe.
        Benoît perd ensuite 3-2 contre BOULY Florent, un match aussi très serré mais qui tourne à l\'avantage de Béthencourt,
        Paul perd lui aussi contre BOULY Jérôme 3 sets à 2.
        Une victoire de Jeoffrey 3-2 contre GUERIEL Sébastien et une perf à 192pts au passage qui conclut la première série de simples par une domination Amiénoise 5-3

        Les doubles : Comme contre Boves il y a 15 jours, on a aligné les mêmes doubles. 
        D\'abord la victoire de Floris/Paul contre OMER Maxime et BOULY Florent 3 sets à 2 encore une fois !
        Puis la victoire du double Benoît/Jeoffrey 3 sets à 2 contre GUERIEL Sébastien et BOULY Jérôme. Avec Benoît on était mené 2 sets à 0 et on a fait beaucoup de fautes (mes tops et les frappes de Benoît). Mais Benoît a décidé de jouer plus cool et de me laisser toper. Bonne stratégie puisqu\'on leur a mis le set. A 2-1 Benoît a commencé à envoyer des parpaings ! Coup droit / revers, il s\'est bien ressaisi malgré beaucoup de fautes de ma part ; on remonte. Au 5ème set, on a tout tenté et tout est passé !
        Une bonne stratégie en double avec Floris/Paul et Benoît/Jeoffrey, je pense qu\'on a trouvé la bonne combinaison !

        A ce moment-là, Amiens mène 7 à 3. 

        La victoire paraît très proche, trop proche si bien que Benoît perd 3-0 contre BOULY Jérôme et Floris perd 3-2 contre GUERIEL Sébastien...Il passe tout proche de la perf mais s\'est bien battu !
        La suite est plus heureuse, victoire de Paul 3-1 contre BOULY Florent et de Jeoffrey 3-0 contre OMER Maxime.
        9-5 pour Amiens, l\'égalité est assurée mais avec encore 4 matchs à jouer, la victoire est à portée de raquette !
        C\'est Benoît qui fera en quelque sorte la balle de la victoire, puisqu\'il gagne 3-1 contre GUERIEL Sébastien et s\'offre une perf à 299 points. 5 balles de match mais une seule suffira ! Service long légèrement coupé de Sébastien et frappe coup droit en plein sur la ligne (BOOM !) pour Benoît qui a maitrisé l\'adversaire tout au long du match !
        Floris va s\'incliner contre BOULY Jérôme en 5 sets. On y a cru jusqu\'au bout mais le jeu de Floris était très apprécié de son adversaire...
        Une victoire de Paul 3-0 contre OMER Maxime et une autre 3-0 également de Jeoffrey contre BOULY Florent !
        Fin de la journée : 12-6 pour Amiens
        Une belle journée, du bon coaching, des encouragements et une bonne entente dans l\'équipe, contrairement aux adversaires, qui nous ont aussi permis de gagner aujourd\'hui !

        Bilan :
        Floris : 1 + double
        Paul : 3 + double
        Benoit : 3 + double
        Jeoffrey : 4 + double
        9 matchs se sont finis à la belle !!! Le niveau était proche entre les 2 équipes !

        Prochaine journée contre Amiens Léo Lagrange premier au classement où la victoire sera très difficile ! Encore 1 match à gagner pour se maintenir sera nécessaire ! Dreuil et Puzeaux semblent les plus « accessible » car Dreuil a fait 9-9 contre Boves comme nous et que Puzeaux à perdu contre Dreuil 13-5...

        PS: Merci au père de Floris pour les pains chocos et à une équipe de Béthencourt fair-play !

        Jeoffrey Stephan
        '),
        array('id' => '80','equipe' => '9','journee' => '3','date' => '1319346000','lieu' => 'Amiens','adversaire' => 'BETHENCOURT US 2','score' => '4','score_adv' => '14','commentaire' => ''),
        array('id' => '81','equipe' => '10','journee' => '3','date' => '1319346000','lieu' => 'Flixecourt','adversaire' => 'VILLE LE MARCLET / FLIXECOURT 7','score' => '16','score_adv' => '2','commentaire' => ''),
        array('id' => '82','equipe' => '11','journee' => '3','date' => '1319346000','lieu' => 'Pierrepont','adversaire' => 'PIERREPONT USL 2','score' => '7','score_adv' => '11','commentaire' => 'Christophe nous avait avertis que le match ne se déroulait pas à pierrepont exactement mais à Contoire-Hamel, un petit village situé juste à coté, car la salle de Pierrepont (salle des fêtes) n\'était pas libre. On a pas eu trop de mal à la trouver mais on s\'est vite aperçus que la salle était très petite : elle ne pouvait accueillir que 2 tables et il n\'y avait pas beaucoup de place derrière pour pouvoir défendre. Après quelques rapides échanges de balles pour se chauffer en attendant l\'arrivée complète de tous les joueurs adverses, nous découvrons le classement de l\'équipe adverse:

        USL PIERREPONT 2
        COQUERET Florian 1032 pts
        DELANAUD Stéphane 874 pts
        VAN KERCKNOVE Vincent 748 pts
        SOMMER Bastien 606 pts

        AMIENS STT 11
        BOUTEILLER Hugo 816 pts
        CHAHIR Ala-eddine 697 pts
        HAUW Joffrey 691 pts
        BEAUFRERE Florian 684 pts

        Entame de match équilibrée entre les 2 équipes : 2 partout après les 4 premiers matchs, malgré une perf manquée pour hugo due à un petit manque d\'échauffement, de même pour Florian, qui avait une raquette empruntée ce jour-là car il n\'avait pas de raquette (problème technique).
        Ala-eddine puis Joffrey battent leurs adversaires sans trop de difficultés.
        COQUERET Florian (10) était plus fort que nous ce jour-là et nous a tous battus , Hugo s\'impose sans problème ainsi qu\'Ala-eddine, plus de difficultés par contre Joffrey qui s\'incline devant son adversaire sans trouver la solution car il avait un picot en revers.

        Viennent ensuite les doubles, Hugo et Florian ont livré un combat acharné, menés 2-0 assez facilement dans un 1er temps, puis ont rejoins à 2sets partout avec des scores assez sévères approchant les 11-2, et finalement se sont inclinés 3 sets à 2 sur un score serré de 11-9 avec une balle grattée en balle de match pour l\'adversaire : petite déception après le match qui nous avait échappé car on était vraiment pas loin.
        Ala-eddine et Joffrey s\'en sont sortis eux aussi en sortant un grand match, plutôt équilibré au début puis les Amiénois se sont évidemment imposés.

        Hugo s\'impose 3-0 sans problème, un peu plus de difficultés pour Florian qui doit s\'incliner face au joueur du picot 3-2.
        Joffrey ne créera pas la surprise en s\'inclinant face à COQUERET Florian (10), match beaucoup plus serré pour Ala-eddine face à Stéphane, là vraiment on y a cru tout le match, Ala-eddine menait 2-1 et tenait bien son match, puis s\'est fait rejoindre 2-2 et s\'en est suivi un combat acharné dans le 5e set, match très serré où Ala-eddine s\'inclinera finalement. On notera d\'après ses dires que ce joueur grattait beaucoup sur ses points, ce que je ne peux pas confirmer car je ne n\'ai pas pu voir le match dans son intégralité, bref, petite déception pour ce point qui s\'envole au score.

        Ensuite, une grosse surprise nous a frappé car Florian s\'est incliné face à SOMMER Bastien (6) 3 sets à 2 , un match très serré, Florian a même eu 4 balles de matchs mais s\'est finalement s\'est incliné, ceci s\'expliquant par de nombreuses fautes étant dues à un changement de raquette je le rappelle.

        A ce stade du match, nous n\'espérions plus que le match nul, puisque nous étions menés 9-
        7 , malheureusement Ala-eddine puis Joffrey se sont inclinés face à leurs adversaires respectifs.
        Score final : 11-7

        On retiendra de ce déplacement que c\'était un match très serré, on était vraiment pas loin d\'aller chercher le match nul voire la victoire, malheureusement on a perdu des points sur des matchs qu\'on devait gagner, bon 1ère défaite en championnat tout n\'est pas fini, on espère bien se rattraper car là on a joué contre les plus forts de notre poule et qu\'on a bien l\'intention de les suivre au classement général.

        Merci à tous !

        Hugo BOUTEILLER

        Déroulement des matchs :

        COQUERET Florian bat BOUTEILLER Hugo
        DELANAUD Stéphane bat BEAUFRERE Florian
        CHAHIR Ala-eddine bat VAN KERCKNOVE Vincent
        HAUW Joffrey bat SOMMER Bastien
        COQUERET Florian bat BEAUFRERE Florian
        BOUTEILLER Hugo bat DELANAUD Stéphane
        CHAHIR Ala-eddine bat SOMMER Bastien
        VAN KERCKNOVE Vincent bat HAUW Joffrey

        Doubles :
        COQUERET Florian / SOMMER Bastien bat BOUTEILLER Hugo / BEAUFRERE Florian
        CHAHIR Ala-eddine / HAUW Joffrey bat DELANAUD Stéphane / VAN KERCKNOVE Vincent
        BOUTEILLER Hugo bat SOMMER Bastien
        VAN KERCKNOVE Vincent bat BEAUFRERE Florian
        COQUERET Florian bat HAUW Joffrey
        DELANAUD Stéphane bat CHAHIR Ala-eddine
        BOUTEILLER Hugo bat VAN KERCKNOVE Vincent
        SOMMER Bastien bat BEAUFRERE Florian
        COQUERET Florian bat CHAHIR Ala-eddine
        DELANAUD Stéphane bat HAUW Joffrey'),
        array('id' => '83','equipe' => '12','journee' => '3','date' => '1319173200','lieu' => 'Pierrepont','adversaire' => 'PIERREPONT USL 3','score' => '10','score_adv' => '8','commentaire' => ''),
        array('id' => '84','equipe' => '1','journee' => '4','date' => '1320472800','lieu' => 'Amiens','adversaire' => 'BOULOGNE BILLANCOURT AC 1','score' => '7','score_adv' => '11','commentaire' => 'Ce samedi 5 novembre 2011 la quatrième journée  de championnat par équipe était programmé. L’ASTT 1 recevait un gros poisson de la poule : l’ ACBB 1. 

        Composition des équipes :
        Amiens : 
        A : MARAIS Yannick (n°186), PLOTUNA Malin (n°195), SELLIER Arnaud (n°395)
        B : CHATELAIN Raphaël (20), LECOMTE Yohan (19), HAIGNERE Alexandre (18)

        ACBB :
        A : SERISIER Benjamin (n°183), BORDAS Hugo (n°188), LETHOREL Serge (n°391)
        B : MONGA Adrien (n°276), MELE Grégory (n°419), REUSEAU Nicolas (n°880)

        Finalement le match fut assez accroché (défaite 11/07)  malgré de grosses différences de classement.  Raphaël m’avait même dit en arrivant : « Si l’on gagne…je te lêche les pieds toute la soirée ».  Comme quoi, la confiance n’était pas vraiment là avant la rencontre. 

        Bilan : 

        MARAIS Yannick (2/3) : Yannick s’incline d’entrée face  à SERISIER Benjamin mais s’impose avec style et élégance lors de ces deux dernières rencontres. Et même une petite perf à la clé … BRAVO ! 

        PLOTUNA Malin (2/3) : Malin a remporté le prix du fair-play cette après-midi. Il s’incline 11-09 à la belle face à SERISIER Benjamin sur une balle qui touche l’arrête. Personne ne l’avait vu mais Malin donna le point à l’adversaire. Il s’imposa en cinq sets face à BORDAS Hugo et en quatre sets face à LETHOREL Serge. 

        SELLIER Arnaud  (0/3) : Merci à lui d’être venu remplacer Cédric parti en vadrouille. Journée un peu difficile mais reprendre le rythme sur des joueurs de ce niveau n’est jamais facile. 

        CHATELAIN Raphaël (1/3) : Raphaël s’impose d’entrée 3-0 face au n°880 puis s’incline logiquement face à ses deux autres adversaires du jour. Une perf qui lui permet à mon avis d’entrer dans le monde des numérotés. A confirmer lors de la fin de la phase. 

        LECOMTE Yohan (0/3) : Encore une fois l’homme qui a failli gagner. Yohan pousse à la belle MONGA et MELE mais s’incline finalement. Auteur d’un bon match, espérons que ça se concrétise lors du prochain déplacement à Mayenne.

        HAIGNERE Alexandre (0/2) : Je m’incline face à MONGA et à MELE en faisant un très bon match sur ce dernier mais pas suffisant pour gagner alors qu’il y avait la place. Un peu agacé à la fin de la rencontre. Tiens à s’excuser auprès de ses coéquipiers. 

        Pour une fois les deux doubles ont été remportés par la team amiénoise. 

        CORRE Cédric : Parti s’entraîner… à monter des tables, des sols, des séparations, vendre du matos et faire quelques photos depuis le début de la semaine à Magdeburg,  in Germany for the WORL TEAM CUP avec la septième compagnie de chez Cornilleau). Cédric sera donc affuté pour le prochain match à Mayenne.  Notre petit « Salut les gayzzz » de début de rencontre nous a manqué mais bon c’est n’est peux-être pas à cause de cela que l’on a perdu. Quoi que…

        Rendez-vous dans 15 jours pour un déplacement qui se pourrait être décisif à Mayenne.

        Alexandre HAIGNERE '),
        array('id' => '85','equipe' => '2','journee' => '4','date' => '1320472800','lieu' => 'Lille','adversaire' => 'LYS LILLE METROPOLE CP 1','score' => '3','score_adv' => '11','commentaire' => 'Samedi 5 novembre 2011

        Lys lez Lannoy / Amiens II 

        Nous sommes tous des enfants de la balle, alors show devant !

        Péniblement arrivé à l’ASTT sur une patte, je rageais encore de m’être cru l’as du volant, à l’occasion d’un « so bad » minton à Villers Bretonneux … Villers, décidément, qui aurait mieux fait de battre Coutances plutôt que de continuer à nous piller jusqu’à nos ligaments croisés, c’est moche ! Ayant donc rampé jusqu’à Labaume, je m’engouffrai, après de longues secondes de haute lutte pour plier une jambe aussi raide qu’un déplacement Vaquierien, dans la Dudu-mobile, et  après un festival de cannes anglaises qui n’avait rien d’une promenade (It wasn’t Nice !!!), je pus enfin accompagner mes coéquipiers à Lys, délice !

        A noter pour que la N3 ne tombe pas à l’eau la présence de Philippe Riquart pour me remplacer, pour ne pas non plus dépareiller avec mon rire … jaune, et la glace sur mon genou … tout cela est très compatible après tout !

        Le cas Lys :
        A : Quentin Lamon 18 Jean-Luc Potteau 359 Jacques Secrétin 228
        B : Pierre-Edouard Galland 14 Patrick Lefèvre 486 Kokou Agbomson 20

        Le cas maté :
        A : Maxime Blatrix 18 Christophe Harlé 621 Vincent Rasselet 17
        B : Benoît Vaquier 15 Philippe Riquart 14 Lucas Dubois 16

        Evidemment, comment ne pas me mordre les béquilles, à la vue de LA légende vivante, Jacques Secrétin, toujours en Lys à 62 printemps, la fleur de l’âge ! Et à l’image d’une ratatouille qui replongea le grand critique gastronomique Anton Ego en enfance, ses première balles d’échauffement m’ont fait faire un bond dans le passé de 25 ans. 1986, Purkart-Secrétin, un gamin de 10 ans des étoiles plein les yeux devant celui qui venait de remporter son 17è titre national en simple contre le jeune Mommessin. 2011, ce Vincent-Jacques aura bien lieu grâce à notre ami Rasselet, et franchement, ce match, à Lys, donna un sacré récital, défaite 3/2 après deux balles de match, mais une telle défaite contre le grand Jacques, à Lys, ça glisse !

        Maxime avait bien ouvert le compteur contre le valeureux Lamon (18) qui s’est évertué à vouloir couper sur le service lifté de l’Amiénois, et à Lys, couper, ça a toujours été hard ! Quant à Lucas Yvan Dubois, certes, c’est même écrit sur sa carte d’identité, mais du rêve aussi, et ça, y’a qu’à Lys qu’on pouvait le voir contre Agbomson (20), victoire 3/1 … Lystérie ! 

        Mais ils aiment les coups, Lys, peut-être pour mieux entrer en scène. Et Lys, ça tourne drôlement bien avec un Secrétin qui remet ça sur Christophe, 3/2, malgré des vertèbres tassées, certainement à cause du déplacement de sa vitrine de trophées. Coluche aurait traité Dudu d’andouille pour avoir perdu contre Secrétin, malheureusement notre chef de file n’a pas réussi à viser les yeux de son adversaire comme dans le célèbre sketch (Oui monsieur Delcambre, c’était un sketch !!!). Ils ont bien fini par avoir notre peau, Lys, avec un Potteau (n° 359) irréprochable, très carré, qui a repoussé toutes les tentatives de Christophe et Maxime, il paraîtrait même qu’il rend ses adversaires verts de rage depuis un fameux soir de 1976 !

        Ainsi fit Lys pour véroler nos ambitions, point par point, avec un Galland en B autant 14 que Philippe Riquart est un attaquant ! (Victoires contre Lucas et Benoît), deux doubles dominés avec maLys et un Lefèvre solide (2 sur 2). Un Lys royal qui nous a fait hisser le drapeau blanc !

        11/3, à peine le temps de faire dédicacer la vie et l’œuvre du natif de Carvin pour Philippe, de raccompagner notre plus fervent supporter (merci papa !), d’engloutir une pizza et de se désaltérer en contemplant le titre de championnes de France de Pro A des « locales » Li, Yang, Odorova et Borza.

        La Lys-te :

        Maxime 1V (18) 1D (359) : A fait le taf, dans la logique, et n’en a pas trop voulu à ses partenaires de ne pas avoir résisté 3 matchs de plus pour entrer, lui aussi, dans la légende de l’homme qui écrivait son nom sur les tables.

        Christophe Harlé 2D (359,228) : Sérieux sur Lamon, un peu trop Lys-se sur Secrétin, mais il aura fait dire à celui-ci à deux reprises : « Bien joué » après quelques échanges de bricoles-biquettes-essuie-glaces dans tous les sens. Ca a bien dégoûté Vincent qui nous avait fait rêver quelques minutes auparavant en rentrant des coups supersoniques, mais ça pour le grand Jacques, ce n’est pas du ping !

        Vincent Rasselet 1V (18) 1D (228) : A remplacé Purkart au pied levé. Et à 2 cm près, avait le niveau champion de France 86 !

        Benoît Vaquier 2D (14,486) : Continue Benoît, tu y es … presque ! A quand même demandé qui était ce petit monsieur dégarni au jeu bizarre et si c’était lui le 14 … coup de vieux …

        Philippe Riquart 2 D (486, 20) 1V (autographe de la légende) : Aurait mérité au moins un p’tit set contre Lefèvre (486), mais l’essentiel pour un Riquart était de faire son apparition sur le circuit national !

        Lucas Dubois 1V (20) 1D (14) : Garde toute son application à équilibrer ses statistiques en alternant perfs et contres avec la précision d’un coucou Suisse (La Suisse, le pays après Saint-Louis !)

        Laurent Cany : mort en genou. Capitaine de l’ASTT II mais pas capitaine de soirée, on ne peut pas être partout !

        Jacques Secrétin : mort en dos.

        Cerise sur le gâteau : Lamon : mort en Si. (On l’appelle « Tit Bémol » dans le milieu pongiste)

        Dicton du jour :
        A la Saint Sylvie
        Ne lâche pas tes amis !

        Laurent Cany'),
        array('id' => '86','equipe' => '3','journee' => '4','date' => '1320472800','lieu' => 'Abbeville','adversaire' => 'ABBEVILLE AC 2','score' => '13','score_adv' => '7','commentaire' => 'Lard de la guerre

        Pour la quatrième journée, Amiens affrontait Abbeville. Sur les terres du Ponthieu. En fait plutôt dans les sables mouvants, et émouvants, de la salle du Rivage. Dans la chaleur, la moiteur, les cris, les hurlements, et les balles traçantes. Le Vietnam quoi.

        Mais avant d’entrer dans le détail, revoyons les enjeux de ce match : 
        - Pour Abbeville : Engranger une seconde victoire et les 3 points. Pour conforter une place dans le ventre mou de la poule. Entre les pattes et le jabot.
        - Pour Amiens : Poursuivre la chevauchée fantastique. Maintenir la pression, et faire douter les équipes du Triumvirat de tête. Les faucons du Pentagone appellent ça la guerre psychologique. Mais pour l’ASTT, ce sera la guerre sale ; version Apocalyse now. Désormais, lorsque les adversaires entreront salle Labaume, les amplis et les enceintes cracheront à plein tube la symphonie des Walkyries de Richard Wagner. Parce que, comme le lieutenant-colonel KILGORE, Antoine HUON adore respirer l’odeur du napalm au petit matin

        Un match à priori indécis donc, mais avec quelques incertitudes, pour les amiénois :
        - L’équipe abbevilloise serait-elle au complet ? La côte sur BetClic était de 2,14.
        - Fallait-il jouer avec un protège-slip doublé en Kevlar sur la table A ? Les frappes de Rudy VENARD et de Laurent LENTE piquent toujours un peu.

        Pour nous rassurer, nous avions tout de même quelques certitudes:
        - Le score final serait de 11 à 9. En effet, depuis le début de la phase Abbeville totalisait une victoire et 2 défaites, toutes trois sur le score de 11/9. Hommage appuyé des abbevillois, cette année à Ground Zero et au dixième anniversaire du 11 septembre. Barack OBAMA souhaitait d’ailleurs prendre une licence à l’AC Abbeville. Mais comme il n’a toujours pas donné son certificat médical, ce petit rigolo n’est pas prêt de jouer.
        - Seconde certitude : sur la balance le pack abbevillois nous rendrait au moins un petit quintal. Certes l’équipe amiénoise a gardé les gros L’HOTE et CHATELAIN. En fait surtout L’HOTE (l’avantage d’écrire les résumés). Mais on perdu VAQUERO et DUB. On risquait de reculer à l’impact, sur la première mêlée, ainsi qu’à l’apéro.
        - Dernière conviction : la réhydratation post-rencontre s’effectuerait à base de punch rhum-orange- sauce Lenté.  Par voie orale pour les plus valides. Par voie intra-veineuse pour les plus mal-en-point. Et les enfants. La loi Evin s’appliquant en Régionale, les jeunes abbevillois ne peuvent ainsi jouer plus d’une phase en R1. Et doivent rapidement monter en Nationale. Souvenons-nous des ictériques Erwan LEROY et Maxime LENTE. Un début de cirrhose à 16 ans limite toujours un peu la progression et le plan de carrière. 

        Un match indécis donc, avec des certitudes et des doutes. Ma seule conviction, toujours adepte du pessimysticisme, était toutefois qu’on allait se faire caisser. Mais il ne faut jamais jouer les matchs avant de les jouer (Henri LECONTE & La comtesse de SEGUR, Les mémoires d’un âne, 1986).

        Après 2 matchs perdus au 5ème set en A (Pierre LE GALLOUDEC sur Rudy VENARD et Cédric HERMANT sur Laurent LENTE), et menés 3/1, la roue tournait lentement pour l’ASTT. Amiens égalisait à 4/4 pour se détacher 6/4 (première victoire du double B HENON-L’HOTE), puis 9/6 (victoire étriquée de Denis CHATELAIN sur Laurent LENTE 3/2 puis du double en A, 3/1). Et enfin 11/6 après la victoire de Cédric sur Jean-René THIBAULT. Pour finalement l’emporter 13/7.

        Quatrième match et quatrième victoire. Toujours premiers au classement. Incroyable. Unglaublich (traduction pour Timo BOLL. Il paraît qu’il s’intéresse à la R1. En fait surtout aux matchs de Christian HENON). Quand même plus sympa d’avoir un torticolis en admirant le haut du classement, qu’une cyphoscoliose en regardant le fond de la poule. Alors évidemment, ça commence à doucement s’enflammer. Philippe L’HOTE demande si en Nationale ça voyage en classe affaire. Pierre LE GALLOUDEC s’interroge si, comme au FMI, la société Eiffage et ses hôtesses sponsorisent les après-matchs. 

        Je ne suis pas très inquiet. Le trio Saint Quentin-Breteuil-Compiègne va vite nous calmer tout ça.

        Les enflammeurs

        Denis CHATELAIN (3 victoires + double en A) : En mode Christian HENON. La différence entre Dieu et Christian? Dieu, lui, de temps en temps, commet des erreurs.

        Cédric HERMANT (1 victoire en A) : Quelques Hermant sur Laurent LENTE, the Undertaker. Avec quelques air-defense sur Rudy the Butcher (défaites 3/2 et 3/0). Mais a scoré le 11ème point libérateur sur Jean-René (victoire 3/0). Muchos gratias el libertador.

        Pierre LE GALLOUDEC (2 victoires en A + double): A emprunté des chemins escarpés et dangereux sur son premier match contre Rudy, avec une chute de Pierre (défaite 3/2). Puis deux victoires de Pierre précieuses : couleur rubis sur Jean-René THIBAUT (3/2) ; puis avec des reflets émeraude sur Laurent LENTE (3/0).

        Christian HENON (3 victoires en B + double): A une nouvelle fois pulvérisé ses adversaires. Son picot long va bientôt être inscrit comme une arme de deuxième catégorie. Plus dangereux qu’un lance-roquette ou qu’un lance-flamme. A de nouveau été plus mélomane que mégalomane (encore que). Et a encore rendu une partition parfaite : 3 + double en B. Comme MOZART. Le silence qui suit un match de Christian HENON est encore de Christian HENON.

        Philippe L’HOTE (2 victoires en B + double) : De retour après un joker médical pour un lumbago. A pourtant joué comme un dévertébré sur Christian OUBLIER et Sébastien CAILLET (victoires 3/1).  Mais n’en a pas fini avec le milieu hospitalier. A en effet trop serré les fesses lors du match contre Léo COULMONT (défaite 3/0). Va devoir consulter un proctologue lundi. 

        Antoine HUON (0 victoire en B) : Un grand pouvoir implique de grandes responsabilités. Malheureusement pour notre petit Spiderman, les abbevillois ne sont pas tombés dans sa toile. Pas grave, se ré-entrainera à tisser. Mais seulement quand il aura fini de tiser. Et de bouder.

        Laurent CANY  (sur la rotule): Toujours aussi seventies. Tourne actuellement un remake de la série Joe MENISQUE. L’avantage c’est qu’il carbure à la morphine depuis une semaine. Et puis le trip grand corps malade/docteur House, avec des béquilles, ça fait toujours craquer les filles. Bon rétablissement senor Cany.

        Les carbonisés

        Rudy VENARD (2 victoire en A) : Fier cheminot. Et fer de lance de la SNCF : Sert-Neutralise-Claque-Frappe. Petit déraillement contre Denis (défaite 3/1). Mais Rudy, l’alchimiste, a transformé des balles de plomb en victoire en or sur Pierre, philosophale à l’issue du match (victoire 3/2).

        Jean-René THIBAULT (0 victoire en A) : Banquier. Donne du crédit à Gricol et évite les paris bas. A cause de la crise, n’a toutefois pas réussi à envoyer les amiénois se faire voir chez les grecs.

        Laurent LENTE  (1 victoire en A): Expert-laitier. Avec un bras en yaourt sur Denis (défaite 3/2). A fini par légèrement brasser sur Pierre Le gars-qui-cache-ses-services-Loudec (défaite 3/0). Par contre en mode Lenté-christ sur Cédric. Avec une endurance digne du fils des ténèbres. Et des frappes apocalyptiques (belle victoire 3/2. Pour le plus beau match de la journée, 11/9 au 5ème set).

        Christian OUBLIER (1 victoire en B) : Austin Powers abbevillois. A perdu son mojo l’espace de 2 matchs sur Christian HENON et Philippe L’HOTE (défaites 3/1). Va devoir se faire ré-hospitaliser. Ce sont les infirmières qui vont être contentes.

        Sébastien CAILLET (1 victoire en B) : Libraire. Le caillet de brouillon sur Christian HENON avec quelques ratures (défaite 3/2). Puis le caillet de correspondance sur Philippe L’HOTE avec quelques escales dans les séparations (défaite 3/1). Le caillet d’exercice sur Antoine HUON (victoire 3/1). Pour finir par quelques souvenirs, hauts en couleurs, de sa filmographie pongiste, sur le grand écran du bar : les caillet du cinéma.

        Léo COULMONT (2 victoires en B): Trafiquant de CD-rhum. Ses enzymes hépatiques grimpant parallèlement à son nombre de points, l’International Center of Liver transplantation basé à Villers-Bretonneux, et le professeur PERPETTE, sont passés en alerte rouge. Et préparent la salle d’opération, un foie de babouin (plus aucun humain donneur sain sur Villers depuis mille ans), ainsi qu’une feuille de mutation pour l’an prochain.

        Le détail
        En A
        Denis CHATELAIN (2070 points) bat Rudy VENARD (2104 points) (5,-6,4,2), Laurent LENTE (1878 points) (7,-9,10,-1,3) et Jean-René THIBAULT (1926 points) (5,-8,5,7).
        Cédric HERMANT (1998 points) bat Jean-René THIBAULT (1926 points) (9,9,4) et perd Rudy VENARD (2104 points) (-4,-6,-9) et Laurent LENTE (1878 points) (4,-12,10,-5,-9).
        Pierre LE GALLOUDEC (1814 point) bat Laurent LENTE (1878 points) (7,8,8) et Jean-René THIBAULT (1926 points) (-6,-10,4,8,7) et perd Rudy VENARD (2104 points) (8,-8,-7,8,-7).
        Pierre et Denis battent Rudy et Jean-René (-16,9,10,5).
        En B
        Christian HENON (1876 points) bat Léo COULMONT (1697 points) (-11,10,10,6), Sébastien CAILLET (1833 points) (9,6,-10,8) et Christian OUBLIER (1885 points) (6,-5,6,7).
        Philippe L’HOTE (1808 points) bat Sébastien CAILLET (1833 points) (-7,8,6,6) et Christian OUBLIER (1885 points) (4,-9,5,2)et perd Léo COULMONT (1697 points) (9,8,8).
        Antoine HUON (1225 points) perd Léo COULMONT (1697 points) (6,8,9), Sébastien CAILLET (1833 points) (-5,-7,10,-8) et Christian OUBLIER (1885 points) (8,-9,-2,9,-7).
        Philippe et Christian battent Léo et Sébastien (-11,10,10,6).

        Denis CHATELAIN'),
        array('id' => '87','equipe' => '4','journee' => '4','date' => '1320559200','lieu' => 'Beauvais','adversaire' => 'BEAUVAIS TT 2','score' => '19','score_adv' => '1','commentaire' => ''),
        array('id' => '88','equipe' => '5','journee' => '4','date' => '1320559200','lieu' => 'Amiens','adversaire' => 'MONTDIDIER PPC 1','score' => '5','score_adv' => '15','commentaire' => ''),
        array('id' => '89','equipe' => '6','journee' => '4','date' => '1320559200','lieu' => 'Amiens','adversaire' => 'LL AMIENS 2','score' => '17','score_adv' => '3','commentaire' => ''),
        array('id' => '90','equipe' => '7','journee' => '4','date' => '1320559200','lieu' => 'Friville','adversaire' => 'TT FRIVILLE 2','score' => '13','score_adv' => '7','commentaire' => ''),
        array('id' => '91','equipe' => '8','journee' => '4','date' => '1320559200','lieu' => 'Amiens','adversaire' => 'LL AMIENS 3','score' => '6','score_adv' => '12','commentaire' => 'Dimanche 6 novembre,

        On prend les mêmes et on recommence ! Rendez-vous pris à 8H30 dans notre salle préférée (la nôtre !) et début de la rencontre à 9H00 contre Léo Lagrange 3. Nous sommes tous arrivés entre 8H10 et 8H45, ce qui n\\\'a pas été le cas de Léo Lagrange, puisqu\\\'à 8H59 on ne comptait qu\\\'un seul joueur présent. Mais en 2 minutes, les 3 autres arrivèrent et après un échauffement à la table et un remplissage de la feuille de match, la rencontre débuta à 9H10. 
        On savait que ce serait dur ! On n\\\'a pas été déçu ! Ça nous a rappelé la journée contre Poix où nous avions perdu 15-3 (et Léo Lagrange a battu Poix !) et là aussi, nous nous attendions à prendre une raclée... Pour faire passer la pilule, j\\\'ai ramené des pains choco et croissants qui ont eu un certain succès (notamment auprès de ch\\\'goup ;) )

        Composition de AMIENS STT 8 :
        STEPHAN Jeoffrey 898 pts / A
        CHARTIER Floris 921 pts / B
        VANDEWOESTYNE Paul 843 pts / C
        BONTE Benoît 797 pts / D

        Composition de LEO LAGRANGE 3 :
        CASTEL Éric 1243 pts / W
        WIART Julien 1092 pts / X
        FRANCOIS Antoine 699 pts / Y
        TOURNANT Nicolas 1208 pts / Z

        Et on commence avec 2 défaites d\\\'emblée ! Une de Jeoffrey 3-1 contre Castel Eric et l\\\'autre de Floris contre Wiart Julien. 
        On continue dans la logique des points avec une victoire de Paul contre François Antoine et une défaite de Benoît contre Tournant Nicolas, mais en battant Wiart Julien, Jeoffrey fait une perf à 192 pts.
        Mais juste après, la logique des points reprend avec une défaite de Floris contre Castel Eric, la victoire de Benoît contre François Antoine et la défaite de Paul contre Tournant Nicolas.
        5 - 3 juste avant d\\\'attaquer les doubles, ce qui est assez motivant !

        Après la réussite de nos doubles à Béthencourt, nous avons donc gardé la même compo à savoir : Paul/Floris et Benoît/Jeoffrey, stratégie qui avait payé !
        Quant à nos adversaires, la stratégie était plus aléatoire puisque c\\\'est à « pierre-feuille-ciseau » qu\\\'ils ont décidé de former les doubles...
        Finalement le hasard a bien fait les choses puisqu\\\'ils ont gagné les deux doubles... Malgré une belle remontée du double Benoît / Jeoffrey, on a quand même perdu 3-2 contre Julien et Nicolas...jusqu\\\'au bout, on y croyait...
        Floris et Paul se sont inclinés devant Eric et Antoine.

        A 7-3, aie! ça sent le roussi !

        Effectivement puisqu\\\'après ces doubles s\\\'ensuivent 3 victoires pour Léo Lagrange : Eric contre Benoît, Julien contre Paul et Nicolas contre Jeoffrey.
        Floris ramène un point supplémentaire en gagnant contre Antoine.
        10-4, c\\\'est fini, ou presque car après une nouvelle défaite de Paul contre Eric, Benoît crée la surprise de cette journée en s\\\'offrant une perf (encore une !) à 301 points contre Julien en 5 sets. 
        Bon bon bon, une dernière victoire de Jeoffrey contre Antoine et une défaite de Floris contre Nicolas mettent un terme à cette 4ème journée.

        Bilan :
        Jeoffrey : 2
        Floris : 1
        Paul : 1
        Benoît : 2

        Malheureusement on ne pouvait pas faire grand-chose pour cette journée. On perd 12-6 au lieu de 14-4 (dans la logique des points). Ce n\\\'est pas une raclée mais ça reste une défaite. La prochaine journée aura lieu à et contre Dreuil, où la victoire sera largement plus jouable mais il nous faudra gagner pour se maintenir en D2 ! 

        Jeoffrey Stéphan'),
        array('id' => '92','equipe' => '9','journee' => '4','date' => '1320559200','lieu' => 'Flixecourt','adversaire' => 'VILLE LE MARCLET / FLIXECOURT 6','score' => '14','score_adv' => '4','commentaire' => ''),
        array('id' => '93','equipe' => '10','journee' => '4','date' => '1320559200','lieu' => 'Amiens','adversaire' => 'DREUIL TT 3','score' => '14','score_adv' => '4','commentaire' => ''),
        array('id' => '94','equipe' => '11','journee' => '4','date' => '1320559200','lieu' => 'Amiens','adversaire' => 'ROYE PPC 5','score' => '17','score_adv' => '1','commentaire' => 'Composition des équipes pour le match :

        AMIENS STT 11 :
        BOUTEILLER Hugo 816 pts
        BEAUFRERE Florian 684 pts
        CHAHIR Ala-eddine 697 pts
        HENAO Victor 653 pts

        ROYE PPC 5 :
        GRAIN Valentin 728 pts
        CHORON Sebastien 683 pts
        GENTY Joel 571 pts
        PIRROT Logan 523 pts

        On a donc joué ce match à domicile cette fois, et on était content parce qu\\\'on avait joué
        2 fois de suite à l\\\'extérieur et souvent au fin fond de la somme. La veille Joffrey HAUW m\\\'avait averti qu\\\'il était malade et que donc il ne pourrait pas jouer ce match dimanche, j\\\'ai du alors trouver un joueur très rapidement un samedi, ce que j\\\'ai réussi à trouver avec l\\\'aide de christophe (merci à toi!). Nous avons donc joué avec Victor HENAO, qui nous a sauvé a mise ce jour-là, et je tiens à le remercier personnellement, il nous a prouvés sa disponibilité en tant que remplaçant. Il est 8h30 nous commençons à nous préparer et à accueillir l\\\'équipe adverse. Je savais que nous n\\\'allions pas jouer un match très difficile, sans manquer de respect aux joueurs adverses, car j\\\'ai pu voir leur classement quelques jours avant. Le temps de s\\\'échauffer et de remplir la feuille de match, il est 9h : le match commence.

        Hugo bat Sebastien 11-7 11-7 11-5 beau match même si on était pas très chaud, des attaques plutôt timides en début de match. 
        Florian bat Joel 5-11 11-7 13-11 11-8 Des difficutés pour florian a rentrer dans son match mais il faut préciser que le joueur adverse jouait avec des plaques très lentes et restait la table, jouant principalement en bloc. Florian conclue : 2-0 pour Amiens.
        Ala-eddine bat Logan 11-5 11-6 11-5 sans problème Victor perd contre Valentin 3-11 11-9 8-11 11-8 8-11 Match très très serré, j\\\'ai vu tous les points car j\\\'étais l\\\'arbitre, Victor s\\\'est vraiment bien battu, il manquait vraiment pas grand chose pour arracher ce match.

        Hugo bat Joel 11-8 12-10 11-4 Victoire logique même si quelques fautes grossières en début de match.
        Florian bat Sébastien 11-7 11-8 11-9 Match où Florian a plutôt dominé même si l\\\'adversaire a remonté un peu sur la fin de match. Score : 5-1 Ala-eddine bat Valentin 11-2 11-4 11-9 sans problème encore une fois.
        Victor bat Logan 11-8 15-13 12-10 Match serré où Victor a réussi à prendre le dessus.

        Il est alors venu l\\\'heure des doubles : pour amiens on associe Hugo avec Florian, et Ala- eddine en grande forme avec Victor.
        Hugo/Florian battent Sébastien/logan 11-9 11-3 11-8 pas de grandes difficultés malré des fautes grossières quelques fois.
        Ala-eddine/Victor battent Joel/valentin 13-11 6-11 11-5 11-9 Un peu plus de difficultés même s\\\'ils l\\\'emportent. Score : 9-1. Nous avions assuré alors le match nul et nous étions quasiment sur de gagner ce match.

        Les matchs se poursuivent (les match ne sont plus dans l\\\'ordre il y a eu une erreur ):
        Ala-eddine bat Sébastien 11-6 11-4 11-8 aucun problème encore une fois pour Ala-eddine qui déroule facilement.
        Ala-eddine bat Joel 11-1 11-3 15-13 victoire très facile, il a voulu s\\\'amuser un peu sur le dernier set =) Victor bat Joel 11-9 11-6 13-11 bien joué victor Hugo bat Logan 11-13 11-5 6-11 11-9 11-9 De très grosses difficultés dans ce match que ne peut expliquer des tops qui ne passaient pas, d\\\'énormes fautes grossières, mené 7-4 dans le dernier set, le stress de la contre-perf à 300 pts, l\\\'expérience a parlé : j\\\'ai rattrapé le score à 9-7, pour finalement m\\\'imposer 11-9 avec un très grand soulagement.
        Victor bat Sébastien 11-5 11-8 11-7 belle victoire de Victor Florian bat Valentin 11-1 7-11 11-7 8-11 11-4 match serré à cause des fautes principalement, sinon Florian dominait, bien joué : 15-1.
        Hugo bat Valentin 11-9 11-5 11-6 pas de difficultés sur ce match malgrè le précedent très éprouvant.
        Florian bat Logan 11-7 9-11 11-4 11-2 sans trop de problèmes, Florian nous offre la victoire assez large avec un score de : 17-1 .

        Après s\\\'être remis de cette victoire, nous avons offert à coup à boire à l\\\'équipe adverse, qui ont du partir assez rapidement car ils avaient de la route à faire.

        Hugo Bouteiller'),
        array('id' => '95','equipe' => '12','journee' => '4','date' => '1320382800','lieu' => 'Amiens','adversaire' => 'FOURDRINOY-CAVILLON 2','score' => '12','score_adv' => '6','commentaire' => ''),
        array('id' => '96','equipe' => '13','journee' => '4','date' => '1320469200','lieu' => 'Amiens','adversaire' => 'CHELLES TT 1','score' => '0','score_adv' => '10','commentaire' => ''),
        array('id' => '97','equipe' => '14','journee' => '4','date' => '1320472800','lieu' => 'Amiens','adversaire' => 'MSNA MULTI SMASH 1','score' => '6','score_adv' => '10','commentaire' => 'Samedi 5 novembre, nous rencontrons St Nicolas, équipe juste devant nous au classement avec un point de plus.
        Cette équipe se composée de BOSSOREIL FONTAINE Pascale, 12, RENIER Elisabeth, 9, HERBILLE Elise, 8 et LEFEVRE Célia, 7.
        L\\\'équipe amiénoise : GUICHARD Delphine, 8, NEEL Aurélie, 9, BERTHELOT Marion, 10 et CARLIE Hélène, 14.

        Aurélie (1 victoire, 2 défaites) : un premier match compliqué sur BOSSOREIL FONTAINE 3-0 (-5/-5/-5), une ancienne 20, puis une superbe rencontre face à HERBILLE (anciennement 30) pour s\\\'incliner à la belle ; défaite 3-2 (-6/-5/10/8/-8). Ensuite, Aurélie remporte son match contre LEFEVRE 3-0 (4/9/10).

        Marion (1 victoire, 3 défaites) : Marion s\\\'impose facilement sur LEFEVRE 3-0 (7/4/6) mais ensuite perd ses trois autres matchs face à RENIER 3-1 (-6/10/-10/-10), BOSSOREIL FONTAINE 3-1 (-5/-2/9/-9) puis HERBILLE 3-2 (1/9/-4/-9/-8).

        Encore une victoire pour le double d\\\'Aurélie et Marion 3-1 contre RENIER et LEFEVRE (7/5/-7/8).

        Delphine (3 défaites ) : Delphine perd HERBILLE 3-1 (-7/-5/5/-5) et BOSSOREIL FONTAINE 3-1 également (-3/8/-9/-4). Ensuite, elle s\\\'incline sur RENIER 3-0 en faisant la course en tête sur les trois sets avant de craquer sur la fin (-9/-9/-8).

        Hélène (3 victoires, 1 défaite) : je remporte facilement mes matchs sur RENIER 3-0 (10/5/6) et sur LEFEVRE 3-0 (5/6/7). Après, très bon match sur HERBILLE où je m\\\'impose 3-1 (-9/5/9/8) puis première défaite de l\\\'année face à BOSSOREIL FONTAINE ; défaite 3-2 en menant 8-4 au cinquième set (11/-7/9/-5/-8) et surtout défaite qui apporte le point de la victoire à l\\\'équipe adverse !

        Delphine et Hélène s\\\'inclinent en double contre BOSSOREIL FONTAINE et HERBILLE 3-1 (-8/6/-3/-6).

        Nous perdons le match sur le score de 10-6 !

        Ca se complique sérieusement pour nous ! Maintenant nous n\\\'avons plus le droit à l\\\'erreur...

        REMERCIEMENTS :
        - aux filles de l\\\'équipe 1 pour leurs encouragements (leur match n\\\'ayant duré que 1h20...) ;
        - à tous nos supporters venus nous soutenir ;
        - à Florent et Arnaud pour leurs conseils et leurs soutiens entre les sets.

        Hélène CARLIE'),
        array('id' => '98','equipe' => '15','journee' => '4','date' => '1320469200','lieu' => 'Amiens','adversaire' => 'Exempt','score' => '18','score_adv' => '0','commentaire' => ''),
        array('id' => '99','equipe' => '16','journee' => '4','date' => '1320469200','lieu' => 'Montdidier','adversaire' => 'MONTDIDIER PPC 1','score' => '12','score_adv' => '6','commentaire' => ''),
        array('id' => '100','equipe' => '13','journee' => '5','date' => '1321660800','lieu' => 'Béthune','adversaire' => 'BETHUNE ASTT-BF 1','score' => '3','score_adv' => '10','commentaire' => ''),
        array('id' => '101','equipe' => '14','journee' => '5','date' => '1321660800','lieu' => 'Alençon','adversaire' => 'ET ALENCON 1','score' => '10','score_adv' => '7','commentaire' => 'Samedi 19 novembre

        Départ 12h30 et direction Alençon avec dans les sacs, raquettes, licences, paquets de bonbons, clémentines, gâteau au chocolat, cake aux poires ; sans oublier baskets aux pieds pour notre capitaine !

        La victoire est obligatoire pour la course au maintien.

        Après 3h de route, nous arrivons dans la superbe salle spécifique d\'Alençon.
        L\'équipe d\'Alençon se composée de VINCLAIR Patricia, 10, RION Karine, 10, SOLEIMANI Violaine, 8 et BOURGOUIN Tiphaine, 7.
        L\'équipe amiénoise était formée de GUICHARD Delphine, 8, NEEL Aurélie, 9, BERTHELOT Marion, 10 et CARLIE Hélène, 14.

        Marion (3 victoires, 1 défaite) : Marion bat facilement BOURGOUIN 3-0 (8/9/2), SOLEIMANI 3-0 (7/6/8) et RION 3-1 (5/-8/2/15). Ensuite, Marion s\'incline sur VINCLAIR 3-0 (-8/-8/-4).

        Aurélie (2 victoires, 2 défaites et "j\'ai le seum") : Aurélie perd 3-1 sur VINCLAIR (-4/7/-4/-3) puis 3-0 sur RION (-6/-5/-9). Après les doubles (que nous perdons !!), le stress d\'Aurélie s\'intensifie... Elle remporte tout de même ses deux matchs laborieusement mais le principal c\'est la victoire et pas la façon de l\'obtenir ! Elle a quand même "le seum" ! Elle bat donc SOLEIMANI 3-2 (-11/7/9/-9/9) puis BOURGOUIN 3-2 (-8/8/8/-6/3).

        Marion et Aurélie perdent leur double 3-1 face à SOLEIMANI et BOURGOUIN (-7/-9/10/-9) VDM !

        Delphine (2 victoires, 2 défaites) : Delphine perd 3-0 sur RION (-8/-10/-5) et aussi sur VINCLAIR (-2/-4/-1). Après, elle remporte son match face à BOURGOUIN 3-1 (10/-9/7/7) et apporte le point de la victoire en s\'imposant sur SOLEIMANI 3-0 (-8/-8/-4).

        Hélène (4 victoires) : je bas SOLEIMANI 3-0 (6/5/3), BOURGOUIN 3-1 (3/-9/4/5), VINCLAIR 3-1 (-8/5/8/5) en prenant des "fait chier cette plaque de merde..." dans la tête puis RION 3-0 (8/6/8).

        Delphine et Hélène s\'inclinent 3-1 contre VINCLAIR et RION (8/-5/-8/-5). VDM !

        Après les doubles, nous étions menées 6-4 avant de nous imposer 10-7 ! Très belle victoire qui nous permet d\'espérer le maintien. Les matchs de play-off se joueront contre Bolbec et Mondeville.

        Hélène CARLIE'),
        array('id' => '102','equipe' => '15','journee' => '5','date' => '1321660800','lieu' => 'Flixecourt','adversaire' => 'VILLE LE MARCLET / FLIXECOURT 1','score' => '9','score_adv' => '9','commentaire' => ''),
        array('id' => '103','equipe' => '16','journee' => '5','date' => '1321660800','lieu' => 'Amiens','adversaire' => 'MOREUIL PPC 1','score' => '13','score_adv' => '5','commentaire' => ''),
        array('id' => '104','equipe' => '1','journee' => '5','date' => '1321660800','lieu' => 'Mayenne','adversaire' => 'MAYENNE CA 1','score' => '11','score_adv' => '5','commentaire' => 'La mayennaise à bien tournée !

        Après le succès contre Reims puis un bon résultat obtenu contre Boulogne Billancourt, une victoire était quasi obligatoire contre les derniers de la poule pour pouvoir espérer se maintenir au plus vite.

        Rendez-vous était fixé à 9h devant la salle, même Corrus n’en croyait pas ses yeux (celui-ci m’ayant même envoyé un message dans la nuit pour confirmer !!).

        5 minutes plus tard (jamais ponctuel celui là c’est dingue) j’arrivais avec le minibus, à peine le temps d’installer les affaires, Corrus et Chatelain junior avaient déjà squatté les banquettes de 3 places pour pouvoir méditer à l’horizontal, histoire que la mayennaise prenne pendant le trajet. Seul Alex était assez motivé pour me tenir compagnie à l’avant (en même temps il n’avait pas le choix car il n’y avait plus de places !). Papa Patrice n’étant pas là, j’en ai profité pour demander à Alex de tout payer durant le trajet (tant qu’à faire !).

        Ayant fait une petite halte pour prendre Malin à Saint Pierre les ELBEUF, nous nous dirigeâmes en direction de Mayenne… mais à peine Malin avait ouvert la bouche, on savait qu’on allait mangeait (étonnant) et avec le budget que nous avait laissé Claudette, on s’était dit pourquoi pas aller dans un restaurant. Malheur, sentant la crise cardiaque arrivée, du coup on s’est rabattu sur Flunch (et oui c’est à volonté, et pour le plus grand bonheur de … indice : ça commence par ‘ma’ et ça finie par ‘lin’, Wai je sais ce n’est pas évident !!).

        Du coup avec ma superbe maitrise du véhicule et surtout du freinage, j’ai fait tomber petit Chatelain, l’écrasant ainsi comme une crêpe. En entrant dans le Flunch nous avons tous pris une sauce à la mayennaise avec notre plat avant de nous diriger par la suite, en direction de la ville de Mayenne pour faire saigner du nez l’équipe adverse.

        Même en ayant mangé tranquillement, on est arrivé devant la salle à………….. 14H45 !! on était vachement ‘large’ (enfin il vaut mieux ça que l’inverse, petit souvenir avec Cyril Legrand et Simon Ambeza !), au moins les heures de rendez vous avec Jaja font qu’on ne risque pas d’être en retard (quel timing en tout cas).

        Equipe Amiénoise (Amora)
        A: Yannick MARAIS (n°186), Yohan LECOMTE (19), Malin PLOTUNA (n°195)
        B: Raphaël CHATELAIN (20), Alexandre HAIGNERE (18), Cédric CORRE (n°277)

        Equipe Mayennaise (Maille)
        A: Mickael STEVENS (20), Pierre JANOT (n°331), Kilian MOUSSET  (n°237)
        B: Didier DE PENDRAY (15), Marc JANOT (n°489), Aurélien DEVAUX (n°772)

        Evolution du score :
        MAYENNE - AMIENS
        0-2 / 2-2 / 2-7 / 4-7 / 4-9 / 5-9 / 5-11

        Détails:
        Yannick MARAIS (2/3) : match plus difficile qu’il n’y paraissait sur STEVENS, autrement appelé « the Wall » mais a finalement cassé des briques sur ce dernier ainsi que JANOT. Par contre s’est fait MOUSSET sur Kilian 3 à 1, mais le score était déjà acquis à ce moment, ceci expliquait surement cela. « N’a jamais fait un si grand nombre de top d’affilée en 3 matchs »

        Malin PLOTUNA (3/3) : d’entrée de jeu Malin se trouva face au défenseur MOUSSET, mais ce dernier s’est vu se faire transpercer par le jeu de l’amiénois, avec un récital des coups du ping (top, contre top, en coup droit, revers puis amortie et j’en passe…). PLOTUNA était bien le plus malin des deux. S’en est suivi un match au mental sur JANOT gagné à la belle, juste AMAZING. Et pour finir cela devait être le match des extrêmes sur STEVENS, mais un match gagné difficilement 3 à 1 par notre killer. « Rien de tel qu’un bon sandwich en guise de goûter pour faire le plein » 

        Cédric CORRE (3/3) : la ‘pleureuse’ d’après Jaja ! après le match sans problème sur DE PENDRAY, les 2 victoires à la belle sur DEVAUX puis JANOT ont été tout autre, avec des cris relevés à 105 décibels qui lui ont permis de se lâcher et ainsi de pouvoir enchainer contre top, coup droit, revers et même roulettes (oui monsieur ! on l’a tous vu…). « Tu ne vaux peut être plus ton classement mais tu as gagné la bataille du corps à corps »

        Raphaël CHATELAIN (1/2) : le 1er match du junior CHATELAIN fut plus complexe que prévu sur DE PENDRAY, finalement match gagné 3 à 1 après un coaching gagnant de la ‘pleureuse’ qui ce coup-ci ne s’est pas fait viré !! Un 2nd match sur JANOT (the Wall) qui lui a joué en bloc tout le long du match mais qui aura suffit à faire plier Junior à la belle. « Encore un petit peu plus de médiation dans le mini bus et ce sera bon »

        Yohan LECOMTE (0/2) : alors que dire !!!! au moins 4h de conduite, 2 match joués, 0 set gagné !! dur dur. Le compte à rebours est lancé pour les 2 prochaines journées afin d’ouvrir mon compteur pour ne pas ainsi revenir fanny.

        Alexandre HAIGNERE (0/2) : comme moi, s’est pris 3 à 0 d’entrée sur le frangin JANOT alias « the Wall 2 » les tops d’Alex n’auront pas suffit à casser les briques de ce dernier.  Ensuite, malgré une belle effectuée sur DEVAUX, on sentait que l’attitude, le fight n’était pas au rendez-vous. « L’homme ‘incoachable’ du jour qui est resté dans le mini bus »

        Au final :

        Malgré une douche qui partait bien, une odeur nauséabonde s’est manifestée en ouvrant la porte.
        Un très bon repas proposé par l’équipe adversaire, pas trop rancunière. Avec une de ces paupiettes  « la vérité » comment c’était trop bon et un gâteau aussi, mais laisse tomber !! Enfin non ça c’est sur on ne l’a pas laissé tomber.
        La mini discothèque dans le mini bus proposé par Malin et Corrus. (David Guetta n’a qu’à bien se tenir)
        L’arrêt express de Corrus pour Malin qui nous a réveillé une rue entière avec une partie de son corps dont je vous laisse imaginer.  « Surement le relâchement de la victoire »
        Et pour finir, la fameuse « boîte à clous » de Raphi (à mon réveil lors de l’arrivée à Amiens), que je cherche toujours d’ailleurs. 

        A plus dans le (mini) bus !

        Yohan LECOMTE'),
        array('id' => '105','equipe' => '2','journee' => '5','date' => '1321660800','lieu' => 'Amiens','adversaire' => 'DRAVEIL SC TT 1','score' => '4','score_adv' => '11','commentaire' => 'Amiens - Draveil:  "Des amiénois en éveil"

        Amiens reçevait Draveil pour une déculotée programée.
        Merci à Louis Vandewoestyne de s\'être sacrifié pour l\'équipe. Au moins il aura pas eu besoin de faire 400 bornes.
        La team était donc légèrement rajeunit avec un moyenne d\'âge de 21 ans. Faut bien compenser avec les papy de la R1 !
        Mais Padre Dudu a encore une fois géré sa compo d\'une main de maître.

        Draveil:
        En A: Hillairet Florian N°302 / Pothain Bruce 20 / Servais-Laval Axel N°422 En B: Dekowski-Richard Yoann 20 / Haik Yaacov N°899 / Odeant Mathias 20
        Amiens: 
        En A: Harlé Christophe N°621 / Blatrix Maxime 18 / Vaquier Benoit 15 En B: Rasselet Vincent 17 / Dubois Lucas 16 / Vandewoestyne Louis 13

        Un début de rencontre équilibré, avec une bonne A. Max pourtant atteint d\'une "Hénonite" passagère avec symptôme aggravant. 
        Un non entraînement hebdomadaire ajouté d\'une perte de raquette. Cependant il a décidé de faire bien plus qu\'acte de présence.
        Et oui Denis le pot de colle Trichlo-nitro-strychnine-white spirit datant de 1992 trouvé par Antoine dans l\'armoire n\'est pas de Seb Perpette, mais bien de Maxime Blatrix.
        J\'en ai pour preuve 5 sets de tops sur tops stratophèriques, pour lancer la fusée Amiénoise sur orbite. Il aura pas décroché la lune, mais néanmoins le 1er point.
        Dudu aux commandes remporte logiquement son match et organise la résistance 2 à 1 !
        Malheureusement on aura été trop friable. C\'était plus top en mousse que bloc béton pour nous aujourd\'hui. On aura chuter bien plus vite que le mur de Berlin. 
        Un simple coup de pied de Mr L\'Hote aurait suffit à nous faire craquer.
        Réveil donc de Draveil, 8 à 3 pour eux, jusqu\'à la révélation !

        Lucas auteur de l\'événement surnaturel du jour.
        Pris d\'une crise hypnotique allié d\'une euphorie aïgue subite, méné 10-5 à la belle sur le N°899.
        Lucas l\'emporte magistralement en remontant à 11-10 après 6 points de folie et des "tcho" à n\'en plus finir, pour finalement s\'imposer 13-11.
        Un moment de folie contagieux lui aussi puisque un pti\' quart d\'heure à peine plus tard Pierre Le Galloudec assoma à coup de "tcho" le dernier rempart St-Quentinois pour offrir en R1 le point libérateur de la victoire.
        Nous nous inclinons donc 11-4 ou plutôt 12-4 après mon dernier assaut, je n\'ai pu que poser un genou au sol (heureusement pour moi le ligament n\'a pas craqué).
        Lolo si tu nous lis dans ton lit. On te souhaites bon rétablissement !
        On nous avait prévu l\'arrivé d\'une "bande de cons" dixit Seb Perpette.
        Heureusement pour nous ils sont pas restés dîner.
        Paraît qu\'à Paris il fait beau et qu\'en Picardie il fait gris.
        A croire que Paris c\'est hawaï et qu\'ils connaissent pas le k way.
        A part parler météo c\'était pas l\'extase au bar !
        Bref on a encore prit une fessée.


        DUDU (1V ; 2D) Maître dans l\'art de placer les noms dans les bonnes cases pour réaliser des perfs. C\'est à se demander s\'il n\'est pas champion cruciberviste.
        Aura assuré logiquement son point contre le seul 20 présent en A, mais s\'est battu en vain contre les 2 N° !

        MAXOU (1V ; 1D) En mode patator pour ouvrir le score, on lui donnerait une poële ce serait pareil. N\'as rien pus faire cependant contre le N°302.
        Garde secretement sa raquette de chasse pour la semaine prochaine !

        VAQUERO (2 D) L\'agent zero a eu 2 matchs difficiles contre 20 et N°302 qu\'il perd 3-1.
        Il a su resté plutôt discret à la table, et appliqué. Continu ça va payer !

        DUB\' (1 V ;1 D) Dubois: Produit hautement enflamable, pouvant parfois éblouir la salle Labaume le samedi après-midi.
        Résultat détonnant garantis !
        N\'a pas attendu de jouer Denis pour battre son 2ème N°, et ça c\'est beau !

        VINCE ! (1 V ; 2 D)  S\'est fait dépouillé par le prise porte plume, il a pas été très SOFT. Se reprend en mettant une grosse race sur l\'autre 20 (3-0),
        puis finit par se faire évincer à la belle sur le N°899;  pourtant j\'avais tout fais pour gagner je perdais 10-5 ...

        LOULOU (2D) L\'agent zero (2) est passé nous dire bonjour. A fait 2 prestations honnorables en concédant des sets plutôt sérés. Passer de la R3 à la N3 n\'est pas chose facile. 
        Yohan approuvera !


        Les 2 doubles perdus 3-0 par Dud\' et Maxou, mais ils ont pas été ridicule. En revanche Lucas et moi on l\'a été.
        Merci à Paul Vandewostyne et Papa Dubois pour nous avoir aidé à l\'arbitrage !

        Rendez-vous le week-end prochain à Coutance. Victoire indispensable pour le maintien !

        Dicton du jour: 
        A la Saint Tanguy,
        Max nous éblouis...
        Et j\'Dub\' aussi !

        Vincent Rasselet'),
        array('id' => '106','equipe' => '3','journee' => '5','date' => '1321660800','lieu' => 'Amiens','adversaire' => 'ST QUENTIN TT 2','score' => '11','score_adv' => '9','commentaire' => 'I have a dream

        Samedi 19 novembre. L’ASTT III rencontrait Saint Quentin II. Caressant secrètement l’espoir d’une cinquième victoire d’affilée en R1. Du jamais vu depuis 1957.

        Conscient du caractère solennel du moment, et à une heure du match, Dudu HARLE, l’ASTT’s Prime minister, convoquait les joueurs dans le vestiaire. Aux portes de l’Histoire, et sur un ton Gaullien. Pour leur lire la lettre de Guy MÔQUET. Pensant galvaniser la troupe, réveiller l’esprit de sacrifice et de résistance, et le sentiment patriotique. Mais Pierre LE GALLOUDEC précisa qu’en tant que Breton, il n’entendait rien aux stations du Métro parisien. Et Philippe L’HOTE, qu’en tant que Syndicaliste il ne s’intéressait pas aux agences immobilières capitalistes. Ça partait mal…

        Antoine HUON a alors retrouvé, dans une armoire, un vieux pot de colle Trichlo-nitro-strychnine-white spirit datant de 1992. Et appartenant au jeune chimiste Sébastien PIPETTE. Insouciant, il l’a ouvert. L’atmosphère est devenue irrespirable. Un mix entre l’haleine du père FOURAS, l’odeur régnant au fond du sac de Benoit VAQUIER, et celle des baskets d’Etienne BROCHOT. Nos muscles se sont brutalement relâchés ; ainsi que nos sphincters. Et nos paupières sont devenues lourdes, très lourdes. ..Pour résumer, on est tombé dans les pommes… Dans une lumière blanche éblouissante, et dans un brouillard naissant, Martin Luther PING nous est alors apparu. Toujours aussi classe. Dans son costume noir il a expliqué, qu’en rêve, il nous avait vus gagner le championnat de R1.  Un songe vachement impressionnant. En plus en américain... Mais qu’on ferait mieux de se grouiller, car ça faisait deux heures que les saint-quentinois nous attendaient dans la salle d’à côté : après avoir effectué 1 heure de sprint, 30 minutes de colin-maillard, et avoir joué à 1-2-3-soleil durant une demi-heure, ils auraient bien aimé débuter la rencontre.

        Un match qui commençait donc sous les meilleurs auspices pour le TTSQ : menant 2/0 après les victoires de Baptiste SILVESTRE sur Pierre LE GALLOUDEC et d’Arnaud LAMBERT sur Antoine HUON. Puis 5/4 et 9/6 après la victoire de Jonathan WAZE sur Philippe L’HOTE. Puis vint le trou noir saint-quentinois. Un manque de fighting spirit durant 59 minutes : la durée d’un épisode de l’inspecteur DERRICK. Après le départ de notre chat noir, Philippe L’HOTE, Amiens égalise à 9/9 et s’impose 11/9, après les victoires d’Antoine HUON sur Valentin CARME et de Pierre LE GALLOUDEC sur Pascal PERRIN. L’ASTT n’aura mené qu’une fois dans la rencontre. Mais au bon moment. C’est injuste. Mais la vie est injuste.

        Sinon the Referee, Daniel GACQUER, a relancé le challenge de la biscotte HEUDEBERT en cartonnant Pierre LE GALLOUDEC et Cédric HERMANT. Ils rejoignent au palmarès Philippe L’HOTE, simple auteur ce samedi d’une petite reprise de volée, en ami, dans la CORNILLEAU 740. Mais niveau Division d’Honneur. En plus quand Daniel avait le dos tourné. Le métier.

        Nous enchaînons donc une 5ème victoire d’affilée. Le rêve de Martin Luther, ce grand homme, pourrait-il donc se réaliser ?  J’en doute quand même. Car pour finir premier il va quand même falloir dérouiller les Orques brituliens et les Uruk-hai compiégnois. On a quand même vachement intérêt à retrouver le numéro de portable de GANDALF le Magicien.

        Les onnycroitencore

        Pierre LE GALLOUDEC (1 victoire + double en A): De retour d’Eurodisney, pensant toujours attraper MINNIE, a joué comme un MICKEY sur Baptiste SILVESTRE (défaite 3/1) et Franck DELCAMBRE (défaite 3/0). Mais par contre, sur Pascal PERRIN, pour la gagne, c’était Space mountain (victoire 3/1).

        Denis CHATELAIN  (2 victoires + double en A): A craqué sur Franck DELCAMBRE (défaite 3/2). Comme un symbole de ligament croisé antérieur lors d’un match de Badminton. Bon match Monsieur Delcambre. Et bon rétablissement Monsieur Cany.

        Cédric HERMANT (3 victoires en A) : Sous le plus grand chapiteau du Monde. Est entré dans la cage aux lions saint-quentinois, le regard fier. Mais en short. N’a même pas eu besoin d’utiliser son fouet. A regardé les 3 fauves adverses, droit dans les yeux. Et les a domptés : a fait sauter Franck DELCAMBRE dans le cercle de feu (victoire 3/2). Puis a fait se rouler Baptiste SILVESTRE dans la sciure (victoire 3/1). Pour parachever le spectacle, aurait volontiers mis sa tête dans la gueule ouverte du, plus très jeune/pas encore vieux, lion PERRIN. Mais Pascal avait une bouche trop petite. Monsieur L’HOTE aurait alors suggéré d’y introduire un autre appendice. Mais madame PERRIN était là. En plus avec les enfants. Et de toute façon Brigitte BARDOT aurait encore râlé… Cédric s’est donc contenté de lui faire faire le beau, debout, sur les pattes de derrière (victoire 3/1).

        Christian HENON (1 victoire en B + double): L’homme-volant, le Voltigeur, est lourdement tombé du trapèze, pour la première fois, sur Jonathan WAZE (défaite 3/0). Puis a souillé son collant moulant, blanc et or, sur Valentin CARME, après un match pas très joli-joli, avec peu de Fair et encore moins de Play (défaite 3/2). A tout de même eu le cran de se bander les yeux et d’enfiler sa cagoule noire pour effectuer, avec succès, le saut de la mort sur Arnaud LAMBERT (victoire 3/1).

        Philippe L’HOTE (1 victoire en B + double) : Après les acrobates, place au numéro des Lhotaries. FiFi en a le positionnement et le déplacement derrière la table. Il utilise d’ailleurs souvent autant ses bras qu’elles pour jeter la balle au service. Et, comme ces jeunes phoques, il est capable de garder une balle Nittaku en équilibre sur le nez durant 3 minutes. Un peu pénible de devoir garder un seau de glace, empli de poissons frais, sur le banc, durant toute la rencontre. Mais toujours aussi marrant de lui jeter une sardine dès qu’il marque un point. Il faut l’avouer, ce n’est quand même que rarement arrivé cet après-midi (une seule victoire nette, 3/0, sur Valentin CARME, pour 2 défaites aussi sèches 3/0 sur Arnaud LAMBERT et Jonathan WAZE). N’a pu rester au goûter d’après match car il devait enchaîner à 19H30  une autre prestation au cirque BOUGLIONE.

        Antoine HUON (1 victoire en B) : Deux premières rencontres difficiles contre Arnaud LAMBERT (défaite 3/1) puis Jonathan WAZE (défaite 3/0). Mais marque le dixième point sur Valentin CARME (victoire 3/2) à l’issue d’un match de toute beauté. Bravo à vous, messieurs les Cadets : ça, c’était du tennis de table !… A depuis gardé le pot de colle de S. PERPETTE. Et l’ouvre tous les soirs avant de se coucher. Hier c’est Charlize THERON et Bar REFEALI qui l’ont embrassé sur la joue. L’ont bordé, et lui HUON souhaité une bonne nuit. Sympa.

        Julien ALLART (Iron-man) : A enchaîné : applaudissements-encouragements / passage de bouteilles d’eau / coaching gagnant. Un bien beau triathlon en ce samedi après-midi. Muchos gratias Julio.

        Paul VANDEWOESTYNE et Alexandre GOUPIL (Paul et Virginie) :   Un arbitrage de haut niveau, sympa, et très apprécié. Ça change de l’ignoble monsieur JOUBERT, la pipe qui a arbitré France/All blacks le mois dernier.

        Les onnycroitplus

        Franck DELCAMBRE (2 victoires en A) : Depuis qu’il est Joueur numéroté se rend dans les salles de ping en limousine rose. Arrive à la table les cheveux gominés, bien rasé de près. Et parfumé au santal. Il joue dans un smoking en alpaga blanc. Avec des mocassins Finsbury, en cuir d’alligator du Brésil. Il boit du thé à 17 heures. Et fait écrire des mots d’excuses par son secrétaire particulier lorsqu’il vole une balle. Mais en fait, en début de match, en capitaine avisé et bon maître, Arnaud LAMBERT lui ôte son collier. Franck se met alors à se dépoiler et à se dépouiller. Et entre deux « Okay ! » il glisse un : « Il est nul, mais il est toujours là !! »… Ouf, j’ai eu peur… Il n’a pas changé. Et c’est rassurant : Francky-Danny the Dog is still here.

        Baptiste SILVESTRE (1 victoire en A): A imité il y a 15 jours Laurent CANY avec ses béquilles. Mais s’est depuis régénéré la cheville dans des bains de plasma et de whisky (victoire 3/1 sur Pierre LE GALLOUDEC). Depuis la semaine dernière refabrique du tendon et reconstitue son stock protéinique en dévorant des placentas et des fœtus humains. Frais et encore vivants bien sur. La cuisson dénature toujours les acides aminés. Mais ça n’a malheureusement pas suffit sur Cédric HERMANT et Denis CHATELAIN (défaites 3/1 et 3/0).

        Pascal PERRIN (0 victoire en A): A failli cesser d’écouter du Mylène FARMER. Un bon niveau de jeu, mais à 9/9 a toujours du mal à conclure. Un peu le Jean-Claude DUSSE saint-quentinois. C’est vrai que dans PERRIN il y a « R1 » ; mais malheureusement il y a aussi « Perd ». Commence pourtant à bénéficier des entraînements amiénois de DUDU. Ça devrait payer. En 2024.

        Jonathan WAZE (3 victoires en B) : Balise en B. Lumineux comme un feu tricolore : Jaune attend* (la bonne balle sur Christian HENON, victoire 3/0). Rouge s’arrête (quand Antoine HUON s’est effondré, victoire sanglante 3/0). Vert passe (sur un Philippe L’HOTE dépité, victoire sans appel 3/0).
        * : jeu de mot jauni

        Arnaud LAMBERT (2 victoires en B) : A bien tricoté salle Labaume. Une maille à Lambert sur Antoine HUON (victoire 3/0). Et une maille à l’endroit sur Philippe L’HOTE (victoire 3/0). A quand même un peu perdu le fil, avec les nerfs en pelote, sur Christian HENON (défaite 3/1).

        Valentin CARME (1 victoire en B): cArme Fatale, depuis le début de la phase. Christian HENON, le Roger MURTAUGH de l’ASTT, s’est brutalement « senti trop vieux pour ces conneries » (victoire 3/2). Par contre s’est fait châtier par le brutal Martin RIGGS-LHOTE (défaite 3/0). Et a cédé dans le 5ème set sur le roublard Léo GETZ-HUON (défaite 3/2).

        Le détail
        En A
        Denis CHATELAIN (2070 points) bat Baptiste SILVESTRE (2113 points) (8,5,9) et Pascal PERRIN (1724 points) (9,9,9) et perd Franck DELCAMBRE (2073 points) (-10,11,-4,5,-6).
        Cédric HERMANT (1998 points) bat Baptiste SILVESTRE (2113 points) (13,4,-10,10), Pascal PERRIN (1724 points) (-9,5,7,2) et Franck DELCAMBRE (2073 points) (7,-9,10,-10,6)
        Pierre LE GALLOUDEC (1814 point) bat Pascal PERRIN (1724 points) (-13,6,8,8,) et perd Franck DELCAMBRE (2073 points) (-12,-5,-,6) et Baptiste SILVESTRE (2113 points) (-9,-6,4,-11).
        Pierre et Denis battent Franck et Baptiste (6,6,8).
        En B
        Christian HENON (1876 points) bat Arnaud LAMBERT (1778 points) (-8,9,9,1) et perd  Valentin CARME (1388 points) (-11,11,8,-16,-5) et Jonathan WAZE (1968 points) (-6,-5,-9).
        Philippe L’HOTE (1808 points) bat Valentin CARME (1388 points) (8,3,5) et perd Arnaud LAMBERT (1778 points) (-9,-10,-8) et Jonathan WAZE (1968 points) (-7,-2,-13).
        Antoine HUON (1225 points) bat Valentin CARME (1388 points) (-10,6,-11,5,6) et perd Arnaud LAMBERT (1778 points) (9,-5,-5,-7) et Jonathan WAZE (1968 points) (-6,-6,-2).
        Philippe et Christian battent Arnaud et Valentin (4,5,9).

        Denis CHATELAIN'),
        array('id' => '107','equipe' => '4','journee' => '5','date' => '1321660800','lieu' => 'Amiens','adversaire' => 'COMPIEGNE TT 2','score' => '16','score_adv' => '4','commentaire' => 'A
        Bathelot Bertrand
        Herly François   
        Lefèvre Loic

        B
        Berriat Lenny
        Poulain Jean Paul
        Deguingand Andrei

        En A victoire 8/2

        Loic bat Gérard Vannier (14) 3/2. Un peu stressé Loic a su revenir dans le 4e set et s’imposer au 5e en ayant bien tenu la balle à mi-distance.

        Bertrand bat Vanicat Patrice 3/0

        François perd Lambert Grégoire (14) 3/1

        Bertrand bat Vannier Gérard 3/0

        Loic bat Lambert Grégoire 3/2

        François bat Vanicat Patrice 3/1

        En double Bertrand fait découvrir à Loic ce qu’est le tennis de table de haut niveau et Amiens s’impose 3/0

        Bertrand perd 3/1 contre Lambert Grégoire (14) en jouant 20, mais cela n’a pas suffit contre un adversaire qui jouait n°300 sur ce match.

        François perd contre Gérard Vannier (14) sur abandon bris de raquette.

        Loic bat Vanicat Patrice (14) 3/1

        En B 9/1

        Andrei bat Mulliez Raymond (12) 3/2 en faisant preuve de ses qualités habituelles de combattant et en ayant su se montrer agressif.

        Lenny bat par abandon Alleaume Pascal (13) dans le 2e set.

        Jean Paul bat Lefevre Thierry (13)

        Jean Paul et Andréi perdent le double 3/1

        Lenny bat Mulliez Raymond 3/0

        Pour la première fois Andréi décide de ne pas aller au 5e set et s’impose 3/1 contre Lefevre Thierry (13)

        Lenny bat Lefevre Thierry 3/0

        Jean Paul bat Mulliez Raymond 3/1

        Jean Paul et Loic battent Alleaume Pascal par WO.

        Bertrand Bathelot'),
        array('id' => '108','equipe' => '5','journee' => '5','date' => '1321660800','lieu' => 'Pinon','adversaire' => 'PINON-ANIZY TT 1','score' => '16','score_adv' => '4','commentaire' => ''),
        array('id' => '109','equipe' => '6','journee' => '5','date' => '1321747200','lieu' => 'Sérifontaine','adversaire' => 'SERIFONTAINE TT 1','score' => '10','score_adv' => '10','commentaire' => ''),
        array('id' => '110','equipe' => '7','journee' => '5','date' => '1321747200','lieu' => 'Amiens','adversaire' => 'VILLE LE MARCLET / FLIXECOURT 4','score' => '18','score_adv' => '2','commentaire' => ''),
        array('id' => '111','equipe' => '8','journee' => '5','date' => '1321747200','lieu' => 'Dreuil','adversaire' => 'DREUIL TT 1','score' => '16','score_adv' => '2','commentaire' => 'Dimanche 20 novembre,

        Rendez-vous à l\'ASTT à 8h15 pour cette 5ème journée contre nos voisins de Dreuil-Les-Amiens.

        Souvenir, souvenir ! Il y a 2 ans avec Benoît et Floris, nous nous étions rendus à cette salle :  à 23h les lumières s\'étaient éteintes et l\'alarme s\'était déclenchée !
        On espérait qu\'aujourd\'hui, en pleine journée, tout se passerait bien !
        On arrive là-bas pour 8h20, en plein brouillard !
        4 joueurs nous scrutent : ils attendaient les clés ! Ça me rappelle un autre déplacement...mais je ne sais plus lequel !!
        J\'avais regardé la composition de Dreuil et on s\'attendait à 9-8-8-6.

        Bref, après avoir dit « bonjour » 4 fois, 2 voitures arrivent 2 minutes après nous avec 5 autres joueurs, qui, eux, avaient les clés ! Ouf...Ils ouvrent le gymnase mais n\'entrent pas tout de suite...Ça aurait pu être suspect.  5 minutes après,  on rentre dans le gymnase. Pouf ! L\'alarme ! Ninu ninu ninu (c\'est le bruit de l\'alarme...) Ninu ninu ninu...On ne pouvait que parler avec des gestes Ninu ninu ninu... car l\'alarme Ninu ninu ninu... nous a bien explosé Ninu ninu ninu... les tympans jusque Ninu ninu ninu... 8h45. La blague du jour revient à Paul qui a quand même proposé de jouer dans la mosquée juste à côté ; mais on a préféré continuer d\'entendre le fameux NiNuNiNu de l\'alarme déjà si familier !
        Ninu ninu ninu NI....Et STOP ! Oufffff... Ça fait du bien quand ça s\'arrête, même si ça résonne encore dans nos têtes...

        La police est arrivée mais elle est repartie (les policiers sont même pas sortis de leur voiture, juste un tour de parking...il faisait trop froid ! Euh...Ils étaient appelés ailleurs plutôt !).

        9h...Je finis de noter le nom des joueurs sur la feuille de match, à savoir :
        Benoît BONTE, Floris CHARTIER, Paul VANDEWOESTYNE (et sa fidèle 3ème place !) et Jeoffrey STEPHAN.

        Composition de Dreuil :
        Stéphane LEROY (650 pts), Hérouanne COLLET (574 pts), Fabien ROUTIER (888 pts) et Pierre POURCHEL (874 pts).

        Premier match gagné par Floris contre Stéphane en 4 sets puis victoire de Benoît en 3 sets face à  Hérouanne, Jeoffrey contre Fabien en 3 sets aussi et enfin Paul en 4 sets contre Pierre.
        Oui ! Déjà 4-0...

        On continue avec la victoire de Floris contre  Hérouanne 3 à 1 et de Benoît contre Stéphane 3 à 1, ainsi que Jeoffrey contre Pierre 3 à 1, mais une défaite de Paul contre Fabien en 5 sets (12-10 à la belle).

        7 – 1 pour Amiens, juste avant les 2 doubles constitués de la recette gagnante :
        Benoît/Jeoffrey et  Floris/Paul.

        Benoît/Jeoffrey contre Pierre/Stéphane : on perd le 1er set, on remonte à 1-1 grâce à la méthode coupe-coupe, puis on mène 2-1 (toujours avec la méthode coupe-coupe), et dans le 4ème set, après avoir été mené 7-0 puis 8-1, on l\'emporte 11 à 8, grâce à la méthode coupe-coupe de Benoît et top-top de Jeoffrey !!
        Dans le double Floris/Paul contre Hérouanne/Fabien : 1-0, 1-1, 2-1, 2-2...le match était serré ! Mais à 10-9 pour Amiens, après avoir perdu une balle de match,  Floris/Paul demande un temps mort. Paul a déclaré : « Viens, je frappe !!! » et Floris de répondre : « O.K. »...Bonne stratégie puisqu\'au service adverse, Paul a frappé...et a marqué ! C\'est la méthode frappe-frappe ! A ajouter à notre répertoire ! :)

        A ce moment-là, Amiens mène 9 à 1, autrement dit l\'égalité est assurée !
        S\'ensuivent 4 victoires : Benoît contre Fabien 3-0 (« bravo Benoît, Benoît bravo » notre méthode d\'encouragement !), Jeoffrey contre Hérouanne 3-0, Paul contre Stéphane 3-0 et Floris contre Pierre 3-1...

        Par la suite, Floris perd contre Fabien en 5 sets (11-8 au dernier set) mais Benoît l\'emporte contre Pierre en 4 sets, ainsi que Paul contre Hérouanne en 4 sets également, et Jeoffrey contre Stéphane en 3 sets (dont 16-14).

        Eh bien voilà...On s\'attendait à une rencontre assez équilibrée puisque Dreuil comme Amiens avait fait 9-9 à Boves mais nous avons gagné 16-2, face à une équipe affaiblie au classement qui nous offre le maintien.

        Bilan :
        Floris : 3 + double
        Paul : 3 + double
        Benoît : 4 + double
        Jeoffrey : 4 + double

        Prochaine journée contre Friville TT, à l\'ASTT, où les matchs seront plus serrés...Affaire à suivre !!

        Jeoffrey Stéphan'),
        array('id' => '112','equipe' => '9','journee' => '5','date' => '1321747200','lieu' => 'Amiens','adversaire' => 'PROYART ASTT 1','score' => '3','score_adv' => '15','commentaire' => ''),
        array('id' => '113','equipe' => '10','journee' => '5','date' => '1321747200','lieu' => 'Ribemont sur Ancre','adversaire' => 'RIBEMONT TT 1','score' => '10','score_adv' => '8','commentaire' => ''),
        array('id' => '114','equipe' => '11','journee' => '5','date' => '1321747200','lieu' => 'Albert','adversaire' => 'ALBERT BRAY 2','score' => '12','score_adv' => '6','commentaire' => 'Enguerrand remplaçait Florian.
        Le match se déroulait à Albert et on est partis un peu en avance de l\'ASTT vers 7h30 pour arriver de bonne heure la-bas et histoire de bien se chauffer. Résultat à 8h15 on était là-bas et on a poireauté quasiment 1/2 heure devant la salle avant que le gardien vienne ouvrir le gymnase. Vu qu\'il faisait même pas 10 ° dehors, on est rentrés pas tellement de bonne humeur, bref nous nous changeons dans les vestiaires puis nous découvrons que l\'équipe adverse n\'a que 3 joueurs : on avait déjà 5-0 d\'avance, ça nous a un petit peu soulagé.

        Composition des équipes:

        Albert-bray 2
        \'Franck\' 816 pts
        \'Elise\' 676 pts
        \'Maryline\' 512 pts
        4e joueur absent

        Amiens STT 11 :
        BOUTEILLER Hugo 816 pts
        CHAHIR Ala-eddine 695 pts
        HAUW Joffrey 692 pts
        WALLON Enguerrand 664 pts

        Déroulement des parties :
        Joffrey bat Maryline 6-11 10-12 11-5 11-5 11-8 on a démarré avec quelques tensions avec ce match qui était largement à la portée de jojo qui a eu des difficultés à rentrer dans son match mais s\'impose très justement. 
        Ala-eddine bat Franck 11-3 11-3 8-11 11-6 bon match, quelques fautes directes qui lui ont coûté le 3e set.
        Elise bat Enguerrand 11-6 13-11 8-11 11-13 11-9 match très serré, Enguerrand s\'est battu, ça s\'est joué à rien du tout sur la fin du match, dommage il tenait presque la victoire après une belle remontée.

        Hugo bat Maryline 11-2 11-7 11-4
        Elise bat Joffrey 11-9 7-11 11-9 15-13 également match très serré sur la fin, vraiment il manquait pas grand chose dommage, il n\'a pas démérité.
        Hugo bat Franck 12-10 10-12 11-9 12-10 match très serré et équilibré, il a su prendre les 
        points décisifs.
        Ala-eddine bat Maryline 11-5 11-2 11-7 sans problème bien joué.

        Le double alliait Ala-eddine et Joffrey : Albert bat Amiens 11-4 11-6 8-11 11-9 un manque de concentration certain que je leur ai reproché, énormément de fautes directes alors que les points étaient quasiment acquis.

        Joffrey bat Franck 10-12 11-7 11-6 11-5 très beau match, jojo a su prendre l\'avantage sur le jeu, bravo !
        Elise bat Hugo 11-4 11-5 11-6 grande surprise, le jeu de la joueuse était basé sur le bloc actif, mon jeu principal étant de toper, je n\'ai pas réussi a trouvé la solution ni la faille dans le jeu adverse, qui a néanmoins très bien joué.
        Maryline bat Enguerrand 11-6 5-11 10-12 11-8 11-9 match très serré avec beaucoup de rebondissement, le mental était soumis à ne rude épreuve, Maryline s\'impose finalement mais Enguerrand n\'a pas démérité.

        Score final : 12 - 6
        Malgré un absent, le résultat est positif, bravo à toute l\'équipe.

        Hugo BOUTEILLER'),
        array('id' => '115','equipe' => '12','journee' => '5','date' => '1321574400','lieu' => 'Glisy','adversaire' => 'GLISY ASTT 1','score' => '10','score_adv' => '8','commentaire' => ''),
        array('id' => '116','equipe' => '13','journee' => '6','date' => '1322265600','lieu' => 'Amiens','adversaire' => 'SAINT MAUR VGA 2','score' => '2','score_adv' => '10','commentaire' => ''),
        array('id' => '117','equipe' => '14','journee' => '6','date' => '1322265600','lieu' => 'Amiens','adversaire' => 'ENT MONDEVILLE / LA BUTTE 1','score' => '10','score_adv' => '5','commentaire' => 'Samedi 26 novembre

        Pour cette première journée de play-off, nous avons accueillis l\'équipe de Mondeville.
        Cette équipe était formée de REPESSE Véronique, 12, BRODIN Adèle, 8, GUILLAUME Chloé, 7 et DURAND Coralie, 5.
        Notre équipe comprenait GUICHARD Delphine, 8, NEEL Aurélie, 9, BERTHELOT Marion, 10 et CARLIE Hélène, 14.

        Un début de rencontre très serré avec des contres performances pour Aurélie, Delphine et Hélène ; score à 3-3. Ensuite nous nous sommes détachées en menant 7-3. Nouvelle contre performance venant de la part de Marion cette fois ; 7-4 pour finalement nous imposer 10-5.

        Delphine (1 victoire, 2 défaites et un "tchô" destabilisant) : Delphine bat facilement DURAND 3-0 (6/6/8). Après, elle fait une superbe rencontre face à GUILLAUME. Alors qu\'elle est menée 2 sets à 0, elle remonte à 2-2 et mène 7-6 à la belle. Alors qu\'elle remporte le point pour mener 8-6 avec un "tchô" quelque peu agressif, le juge-arbitre Monsieur FERAUD lui fait la remarque que son encouragement est trop violent vis-à-vis de l\'adversaire... Delphine complètement destabilisée s\'incline 11-9 à la belle (défaite 3-2 : -6/-11/7/4/-9). Delphine perdra son dernier match 3-2 face à REPESSE (11/6/-9/-11/-7) en défiant le juge-arbitre mais celui-ci ne sortira pas le carton !

        Aurélie (2 victoires, 1 défaite et un silence de mort) : Aurélie entame son match par une belle contre. Elle s\'incline 3-2 contre GUILLAUME (7/-9/8/-8/-10). Cette contre nous a transformé notre capitaine où est-ce son extinction de voix qui lui a permis de ne pas pouvoir râler... mais pour les matchs qui ont suivis, Aurélie nous a vendu du rêve ! Match gagné 3-0 sur DURAND (8/6/6) et victoire 3-1 face à BRODIN (8/9/-8/7) avec des pivots à montrer dans toutes les écoles de pongistes.

        Marion (3 victoires, 1 défaite) : Marion s\'impose face à BRODIN 3-1 (9/4/-8/8) et fait une belle performance en battant REPESSE 3-1 (-7/9/13/8). Point noir dans la journée de Marion, cette contre performance sur GUILLAUME qu\'elle perd 3-2 (-8/9/4/-9/-6) puis victoire sur DURAND 3-0 (4/6/5).

        Hélène (3 victoires, 1 défaite et une sciatique) : d\'entrée de jeu, je m\'incline 3-1 sur REPESSE (-9/-6/5/-8)... j\'avais le coup droit de Yohan LECOMTE, le revers de Vincent RASSELET et les jambes de Benoît VAQUIER !! Autant vous dire que la tâche s\'avérée difficile ! Ensuite je me suis remise à jouer mon jeu et là, y\'a pas photo... je bas BRODIN 3-0 (1/7/5), DURAND 3-0 (8/4/4) et GUILLAUME 3-0 (2/6/2).

        Nouveauté pour cette journée : nous avons changés les doubles et nous remportons les deux !

        Aurélie et Delphine battent GUILLAUME et DURAND 3-0 (12/7/6) et Marion et Hélène gagnent 3-0 sur REPESSE et BRODIN (13/11/7).

        Victoire qui remonte le moral des troupes. Prochaine rencontre face à Bolbec.

        Phrase du jour (Julia FLAHAUT à Caroline PETITPREZ) : "tu vas pas m\'pêter le citron" !!

        Hélène CARLIE. '),
        array('id' => '118','equipe' => '15','journee' => '6','date' => '1322265600','lieu' => 'Amiens','adversaire' => 'DOULLENS / BERNAVILLE 1','score' => '15','score_adv' => '3','commentaire' => ''),
        array('id' => '119','equipe' => '16','journee' => '6','date' => '1322265600','lieu' => 'Villers-Bretonneux','adversaire' => 'VILLERS - BRETONNEUX PPC 1','score' => '13','score_adv' => '5','commentaire' => ''),
        array('id' => '120','equipe' => '1','journee' => '6','date' => '1322265600','lieu' => 'Amiens','adversaire' => 'LE HAVRE ASPTT 1','score' => '9','score_adv' => '11','commentaire' => 'Pour cette avant-dernière journée, nous avions la délicate réception de l’équipe du Havre. Match qui a priori allait être serré,  Le Havre n’étant qu’une place au-dessus de nous dans la poule.

        Compositions des équipes :

        ASTT : 
        A : MARAIS Yannick (n°186), PLOTUNA Malin (n°195), LECOMTE Yohan (19 mais n° dans nos cœurs)
        B : CORRE Cédric (n°277), CHATELAIN Raphaël (20), HAIGNERE Alexandre (18 Non non, ce n’est pas encore mon nombre de défaites mais juste mon classement)

        LE HAVRE :
        A : REILAND Hervé (n°126), PILLE David (n°259), LAVALLE Lilian (n°339)
        B : STOICA Cornel (n°354), MARGAINE Dimitri (n°686), DRUEZ Arnaud (20)

        Le match se déroula comme prévu, de manière équilibrée mais à 6-6 LE HAVRE prit l’avantage avec les victoires à la belle de STOICA contre moi puis de DRUEZ contre Raphaël.

        En B, le match se déroula relativement calmement tandis que sur l’autre table, il était vraiment impossible de ne pas entendre les : « TCHAAA », « C’EST BON CA », « TU AS UN PROBLEME , VIENS DEHORS »,… En effet, j’ai trouvé dans le dico que STOÏQUE (tel MR Cornel) venait du latin « stoïcus » et voulait dire : « ferme, impassible, imperturbable, inébranlable,… ». J’ai envie de dire « respect Monsieur » .

        En revanche, dans ce même dictionnaire j’ai trouvé « REILAND » qui voulait dire : « Guerrier, accrocheur, impulsif ,… mais fort. » Voici donc un antonyme parfait au sein d’une même équipe. Comme quoi, il peut y avoir deux équipes au sein d’une même équipe.

        Bilan :

        MARAIS Yannick , « le poilu »(2/3) : Yannick fait le job en s’imposant sur les deux adversaires plus faibles que lui. Petite déception, peut-être sur REILAND en ayant mené 2/0. Enfin bref, du grand Yannick tout de même. Serait-ce grâce au petit bouc ?

        PLOTUNA Malin, « le trop gentil » (2/3) : Idem, Malin s’incline malheureusement au bout de 5 sets acharnés face à REILAND. Cependant, il  n’est pas trop mis en difficulté face à LAVALLE et PILLE. Bien joué quand même.

        LECOMTE Yohan « le crucifié » (0/3) : Encore une journée dure dure qui en plus se solde par un coup à boire avec moi dans le club house… j’imagine la déprime.  Yohan a réussi à élever son niveau de jeu mais face à des joueurs de ce niveau, c’est vraiment dur de gagner. Allez Yo, la dernière c’est la bonne !

        CORRE Cédric « l’assistante sociale » (2/3) : Cédric commence d’entrée par une surprenante défaite face à DRUEZ alors qu’il menait 2/0 et assez facilement. Mais bon, il faut le comprendre…il aime faire «briller les gens » ;) Enfin, il s’est repris face à MARGAINE puis STOICA avec une victoire en 5 manches sur ce dernier (Le fight !). Sa victoire sur ce dernier relève du miracle selon lui : « C’est un miracle, je ne l’avais jamais battu ». Donc les miracles arrivent, même en N2. Merci Cédric de m’avoir « remis » en confiance.

        CHATELAIN Raphaël, « le killer » (2/3) : N’était pas loin d’être élu « l’homme du match » mais DRUEZ en avait décidé autrement.  Deux belles perfs tout de même pour Raphaël…Un nouveau numéro dans l’équipe. Bravo Monsieur !

        HAIGNERE Alexandre, « le blasé » (0/3) : Journée qui se solde une nouvelle fois par 0 victoire malgré une défaite 11/9 au 5ème set face à STOICA puis une balle de set à 1/1 face à DRUEZ dans l’ultime match pour le nul. Ca ira mieux en deuxième phase.

        Victoire des deux doubles.

        Défaite 11/09 … « dommage ». Gagner avec deux machines à bulles dans l’équipe c’est dur mais au bout d’un moment les bulles éclatent !  Prochain match décisif pour le maintien avec un déplacement à MERS-EU-LE TREPORT.

        Alexandre HAIGNERE '),
        array('id' => '121','equipe' => '2','journee' => '6','date' => '1322265600','lieu' => 'Coutances','adversaire' => 'COUTANCES JA 2','score' => '11','score_adv' => '7','commentaire' => 'Amiens - Coutances
        Chapître 6: La Croisade

        Amiens se rendait non pas en Terre inconnue, mais surtout en Terre promise avec l\'ambition de conquérir le maintien. Un chemin de croix qui débutait par un pèlerinage matinal.Rendez-vous 10h30 à l\'ASTT. Avec en chauffeur Mr Sellier et Mr Harlé. On a embarqué au passage un immigré, il avait l\'air bien sympathique et il avait surtout à manger. Merci donc à Fred Dubois d\'avoir fait le déplacement pour nous prêcher la bonne parole à l\'aller. On était donc parti pour "une boucherie" 
        annoncée par le capitaine ! Pas de place pour faire le haka, mais la Marseillaise tournait en boucle, l\'esprit était là. Pause déjeuner puis arrivé à Coutances à 15h. On était large, un petit peu trop même. Le temps de faire un footing post digestif de fumer 3 clops et de mater la replay du match France-Serbie de handball de la veille de l\'année dernière par les -13 de Coutances Vs Cherbourg.
        15H40 : Ouverture du round, entrée dans l\'abattoir.

        Au menu c\'était:
        Amiens:
        En A : DUBOIS Lucas 1643.0 (16) / SELLIER Arnaud 2279.0 (N 395) / HARLE Christophe 2174.0 (N 621)  
        En B : VAQUIER Benoit 1570.0 (15) / RASSELET Vincent 1766.0 (17) / BLATRIX Maxime 1862.0 (18)

        Coutances:
        En A : MENAND Jean-baptiste 1927.0 (19) / BREARD Christophe 1791.0 (17) / VAILLANT Fabien 1919.0 (19)  
        En B : MARIE Matthieu 1868.0 (18) / LEMIERE Alain 1823.0 (18) / LAFORET Antoine 1712.0 (17)  

        17H: Début de la boucherie !
        Benoit et Lucas envoyés au 1er round se sont fait charcuter.Benoit n\'a rien pu faire sur MARIE. Trop bien éduqué il n\'a même pas essayé de lui prendre un set, gentleman le Benoit.
        Lucas auteur d\'un bon match, MENAND même 1-0 n\'a pas su concrétiser et s\'incline logiquement à la belle.
        Le duo Sellier / Rasselet remporte dans la douleur mais logiquement leur match pour recoller à 2-2.
        Dud\' enchaîne difficilement sur VAILLANT en remontant 2-0 pour gagner à la belle.
        On avait beau avoir fait 400 bornes il avait encore besoin de chauffer un peu le moteur.
        Maxou en difficulté se perd dans LAFORET, mais réussi à réédité la Spécial Ch\'dub\'. Il remonte de 5-10 à 11-10 pour lui à la belle mais s\'incline malheureusement 15-13, LAFORET a de la ressource.

        18H40: Fin du 2ème Round  3-3 ! Coutances sort son tiercé magique en enchaînant le triplé dont la victoire du double en B 11-9 à la belle. La défaite de Nono en MENAND tout le match pour s\'incliner lui aussi 11-9 à la belle. La défaite de Lucas malgré une attitude bien VAILLANTE contre son adversaire.

        19H15: 6 belles de jouées pour être mené 6-3 après le 3ème round . Et la réunion de crise du captain\'. "Les belles c\'est bien mais ça rapporte pas de point. On est mené 6-3 mais faut y aller maintenant !" 6-6 de l\'autre côté, côté hérain !

        Le duo Harlé / Rasselet l\'emporte facilement sur BEARD et MARIE. Je sais pas pourquoi mais j\'ai retrouvé mon niveau de jeu face à MARIE, j\'ai pourtant pas croisé la vierge. Puis apparition de l\'illuminé de la journée. Auteur d\'un super match, mené 2-0 / 9-5, Benoit l\'emporte à la belle, nous permet de recoller à 6-6,et de nous insuffler l\'espoir de la victoire. Un match au fight comme on les aime, de l\'énergie, de l\'envie un gros mental, un match sublime. A force de tailler DUBOIS, il a finit par massacrer LAFORET. Victoire du double Sellier / Harlé qui nous permet de mener pour la première fois de la journée.

        19H50 Round 4: K.O. technique pour Amiens, Coutances reste collé au parquet. 8-8 chez nos cousins hérain.
        Maxou retrouve la LEMIERE et son jeu par la même occasion.
        Nono enchaîne et reste vigilant face à VAILLANT.
        Dud\' met le 10ème à MENAND en menant 2-0 puis 3-1 et en menant de superbes points en top/contre top et en enchaînant biquette sur biquette.Il l\'a sentait bien, j\'ai apprécié la leçon et j\'ai admiré, le touché par la grâce !
        Vince se laisse aller sur LAFORET, il a pas trouvé le chemin pour se sortir du bourbier. 10-10 coté hérain et plus qu\'un point chez nous pour le maintien.

        21H00 : Maxou rencontre MARIE. Il gagne le 1er set puis perds le 2ème en menant 10-7. Gagne le 3ème à l\'arraché. Prend le large en début de 4ème manche puis se fait remonter. Temps mort technique à 6-5 pour maxou. On sort l\'éponge la gourdasse et on repart au combat. C\'était dans ses cordes, et malgré un forfait grattage illimité pour MARIE qui devait pas être tout vierge, Maxou fait preuve d\'un sang-froid diabolique pour l\'emporter au fight. Un "tcho" de rage de maxou qui sur le banc nous
        soulage. Sans pitié il crucifie donc MARIE sur le Marqueur de score pour notre plus grand bonheur !

        21H30 : Fin du 5ème round par K.O. physiologique. Amiens est à 11, Coutances ne s\'en relèvera pas, et Lucas en profite par une victoire pour conclure se chemin de croix !

        12-7 Victoire magistrale d\'Amiens qui ramène le grâal !

        22H : On aurait bien fait "champagne showers" pour fêter le sacre Amiénois, mais on est resté soft (http://www.youtube.com/watch?v=UA8rcLvS1BY&ob=av3e) : Champomy pour Lucas et Benoit ça suffira ! Un apéro sympa partagé avec convivialité avant de repartir en croisade.

        00H : "Le premier qui trouve un Quick ou Mc Do crie". Pas la peine d\'avoir un GPS, pour ça. Suffisait de demander à Vince. La dernière étape de nôtre pélerinage,un peu comme le passage à "Lourdes" parce que trouvé un Mc Do pour se ressourcer c\'était pas gagner. Arrivé au Mc Do gentillement proposé et offert par Nono, on se retrouve à manger sur la parking en mode clodo. Mais ça pour Nono "Le Mc Do à minuit ça m\'avait manqué". Ca lui fait tellement d\'effet "Je trouve pas le trou" et "j\'ai du mal a aspirer" nous a t-il intimement confié sous le coup de l\'émotion.(Non cette partie ne sera pas censurée) !
        Ps: Dans le noir et sans paille c\'est plus dur pour manger !;)

        3H : Fin du long chemin de croix, et arrivé à Amiens avec en poche le MAINTIEN !

        Les Preux Chevaliers :

        Ch\'dub\' (1V ; 2D) "Judas" : Lucas aura attendu qu\'on mette 11 points pour gagner son match, mais on lui en veut pas. Même si c\'est le 12ème ça fait du bien.

        Nono\' (2V + D ; 1D) "Le bon Samaritin" : A sacrifier sa journée et quelques points, pour nous ramené le maintien. N\'a quand même pas totalement perdu sa journée. Il s\'est lié d\'affection pour un certain Rasselet. Et puis le Mc Do à minuit ça n\'a pas de prix !

        Dudu (3V + D) : "Dudu / Dieu" Super Dudu, Magic Dudu. Oui Dudu, est fort, Dudu est bon, dudu est grand !Il pourrait sauvé le monde de la crise. Mais pas aujourd\'hui. Encore une fois c\'était 3 plus double au programme. En plus de sauver la R1, faut qu\'il s\'occupe de sauver la N3.Oui il parait qu\'en R1 on joue toujours le maintien !

        Vaquero (1V ; 1D) :"Le Saint". Au Vatican ils ont Benoît XVI, à Amiens on a Benoit V. Aujourd\'hui Benoît avait envie, mais surtout il nous a donné envie. En ce samedi jour bénit, pas besoin de suivre le chemin de la foi, il suffit de suivre Benoit.

        Maxou (2V ; 1D) "Moïse" : S\'est perdu dans LAFORET mais à retrouver le chemin de la lumière grâce à Benoit V. Le "Libérateur" du peuple Amiénois. Il nous offre le point de la victoire au cours d\'un match semé d\'embuches. Et un "tchô" libérateur à en faire frémir tout le banc.

        Vince (2V ; 1D) "Le Prophète" : S\'est lui aussi perdu dans LAFORET sombre ou il n\'a pas vu le jour, mais aura réussi à assurer l\'essentiel avant. Aura été plus efficace dans son coaching et la gestion des temps mort. Aura également été plus efficace que la radio pour maintenir éveillé Nono\' lors du trajet retour. Aujourd\'hui Amiens est venu, Amiens a vu, Amiens a Vaincu !

        A la Saint-Delphine
        Tourne a plein régime L\'amiènoise divine
        Avec en prime Le maintien !Et tous avec la R1 !!!

        Vincent Rasselet                                               '),
        array('id' => '122','equipe' => '3','journee' => '6','date' => '1322265600','lieu' => 'Breteuil','adversaire' => 'WAVIGNIES / BRETEUIL 1','score' => '10','score_adv' => '10','commentaire' => 'Objectif nul

        Samedi 26 novembre 2011, 16 heures. Ici, c’est BRETEUIL.

        Des nuages noirs s’amoncèlent dans le ciel isarien. Le vent se lève. Les oiseaux se sont arrêtés de chanter. Les villageois courent s’abriter. Les mères cachent leurs enfants. Oui, aujourd’hui, c’est la FINALE de R1.

        Et malheur aux vaincus : les chiens galeux dépèceront leurs corps, les corbeaux picoreront leurs globes oculaires, les enfants des écoles joueront au foot avec leurs têtes décapitées, et leurs os sècheront au soleil de novembre.

        L’équipe amiénoise s’apparentait pourtant plus à une horde de sans-culottes qu’à un groupe de vikings sanguinaires. Alors qu’en face, côté Breteuil, étaient alignés en A : Le Bon, la Brute et le Truand, et en B : Les Trois Lanciers du Bengale.

        Les tentatives de déstabilisations d’avant-match s’avérèrent vaines : 
        -	Côté Britulien : Invitation de l’équipe amiénoise à l’hôtel Carlton de Lille, puis à un séjour de récupération place Tahir en Egypte, et enfin à un stage de préparation mentale à Fukushima, Japon.
        -	Côté Amiénois : Appel anonyme à la Présidence de la République pour signaler qu’une cellule secrète du groupe Al Qaida se réunissait tous les vendredis soirs dans la salle de ping de Breteuil ; on aurait également volontiers caché 2kg de cocaïne dans le sac d’Etienne BROCHOT, jeudi soir, salle Labaume, mais le jeune Antoine HUON et les petits HERSENT avaient tout sniffé dans l’après-midi.

        Conscient de l’importance de cette rencontre, la ligue avait dépêché un arbitre international, l’impitoyable JR SELLIER, amiénois et père d’Arnaud. Oui, en Picardie on aime l’impartialité.

        La rencontre débutait bien pour Breteuil : menant 2/0, et 4/2. Puis une succession d’égalisation : 4-4, 5-5, 6-6, 7-7. Et là c’est le drame : Philippe L’HOTE reçoit sur la tête, non pas le carton de Jean-Robert, mais le carton « Panasonic » qui oblitérait l’une des fenêtres du gymnase. Plus d’argent pour acheter des rideaux opaques, Breteuil obligé de bricoler des fenêtres en carton. Il est vrai que les brituliens préfèrent investir dans des stages de préparation physique aux Bahamas : le Sportif avant tout. Donc duel, fenêtre en carton contre cervelle en carton : même pas mal, Philippe repartit gaillardement au combat. Mais pour se faire déchirer. Puis nouvelle égalisation à 8/8, et petite accélération : 10/8 pour Amiens. Les portes de l’Eden N3 s’entrouvrirent alors, et nous entendîmes même chanter les anges. Mais l’intraitable Jean-Baptiste CARLIER dérouilla Antoine HUON 3/0. Et Cyprien BORGOO fit preuve de sang-froid pour châtier Pierre LE GALLOUDEC au 5ème set. Nous claquant la porte de la Nationale au nez. Pas de bol j’avais laissé les doigts dans l’embrasure. Ça pique encore un peu ce matin.

        Match NUL. Au niveau comptable peut-être, mais pas pour le suspens ni le fight.

        Excellente ambiance, malgré quelques (rares) débordements verbaux. Il est vrai plutôt côté amiénois. Désolé. Certains ont fait Allemand/Mauvais joueur en 2ème langue, et pas Fair-play. Bruno CRNIC gagnait le prix Orange en remettant une balle-coin-de-table que l’intègre-et-au-dessus-de-tout-soupçon Philippe L’HOTE avait jugé faute. Pierre LE GALLOUDEC, lui, gagnait le prix Citron après quelques réflexions acides lors du match Cypriennesque.

        Un match nul qui laisse Breteuil/Amiens, et ramène Compiègne, dans la course à la montée. Breteuil probablement mieux placé que nous. Tout le monde fait du calcul mental et ça fait un peu mal à la tête. On jouera les matchs dans 15 jours et on verra bien. Avec une nouvelle finale contre Compiègne. Presque la routine maintenant.

        La Hérain c’est quand même vachement mieux que la nouvelle saison de Desperate Housewifes.

        Les nuls amiénois

        Cédric HERMANT (3 victoires en A) : Est une nouvelle fois descendu du mont Olympe parmi les mortels pongistes. A fait ses 3 points, sans même retirer sa petite jupette blanche. Puis est retourné s’assoir à la droite de Zeus, pour se gaver d’ambroisie, de nectar, et d’hydromel.

        Pierre LE GALLOUDEC (0 victoire en A + double) : S’est fait découper par Arnaud DAMAY (défaite 3/2) et Etienne BROCHOT (défaite 3/2), avant d’être renvoyé à son dictionnaire de courtoisie par Cyprien BORGOO (défaite 3/2). Est ainsi passé de l’ère de la Pierre taillée à l’ère de la Pierre polie.

        Denis CHATELAIN (2 victoires en A + double) : A l’issue du match contre Etienne BROCHOT (défaite 3/2, as usual), s’est allongé au fond du Drakkar, comme tout capitaine viking vaincu. A demandé à ses coéquipiers d’y mettre le feu et de pousser le navire au centre de l’étang Saint-Pierre. Refus des joueurs amiénois : pas possible. Car pas d’allumette, et en plus Cédric ne voulait pas jouer le double.

        Christian HENON (2 victoires en B + double) : Tombé de son piédestal contre Bruno CRNIC (défaite 3/0). Telle une statue de Lénine, déboulonnée lors de la Glasnost. Comme un symbole du post-communisme. Ou du manque d’entraînement ; j’hésite. A tout de même réussi à remobiliser le Komintern contre Jean-Baptiste CARLIER (victoire 3/2), et Benoît BROCHOT (victoire 3/1).

        Philippe L’HOTE (1 victoire en B + double) : Le conseil général de la Somme organise en cette fin d’année un référendum pour que les habitants du Département se déterminent sur un gentilé : Sommois, Samaréens, Samariens… Philippe a proposé Somnanbule. Après des débuts convaincants contre Jean-Baptiste CARLIER (victoire 3/2), s’est endormi contre Benoit BROCHOT (défaite 3/1), et a traversé la salle comme un zombie contre Bruno CRNIC (défaite 3/0).

        Antoine HUON (0 victoire en B) : 119 : le numéro vert SOS enfant maltraité. Composé plusieurs fois par ses coéquipiers contre Benoît, Bruno et Jean-Baptiste (défaites 3/1 et 3/0). Sans résultat. Toujours occupé... Mais de jolis points et une belle attitude monsieur HUON. A souvent fait trembler ses adversaires.

        Julien ALLARD (Coach Fruits et Primeurs) : Toujours la banane, la pêche et la patate. Un grand merci pour le soutien.
        Arnaud SELLIER (Secouriste N3) : Comme Jésus, parti 40 jours dans le désert, Arnaud s’en est allé à Coutances. Pour permettre à la N3 de se maintenir et nous laisser une chance pour cette fin de championnat. Merci à lui pour son sens du sacrifice et son Sport & club spirit. Denis CHATELAIN likes this.

        Les nuls brituliens

        Etienne BROCHOT (2 victoires en A): Virologue-parachutiste. S’est volontairement inoculé cette semaine, dans son laboratoire, Rhabdoviridae Delcambrus, le virus de la Rage. Ça a pas mal marché sur Denis CHATELAIN et Pierre LE GALLOUDEC (victoires 3/2). Mais, avec les yeux hagards et l’écume aux lèvres, triste évolution naturelle de l’infection, est tombé dans le coma contre Cédric HERMANT (défaite 3/1). A émergé lors de l’après match pour nous servir un excellent punch : l’école abbevilloise.

        Arnaud DAMAY (1 victoire en A): En manque de confiance, Arnaud s’est plongé dans les Grands Classiques de la Pléiade pour relire « Les Mémoires de l’incroyable Jean-Paul POULAIN », le GIGNAC de l’ASTT (transfuge Saint-Pierriste, mais toujours amiénois, après un mercato raté à Longueau). Arnaud, fan de littérature. C’est son fabuleux destin: DAMAY lit Poulain. Audrey TAUTOU lui a d’ailleurs filé son numéro de portable. Revigoré, Demolition man a pulvérisé Pierre LE GALLOUDEC (mené 2/0, victoire au sprint 3/2). Pas loin sur Cédric HERMANT (défaite 3/2). Mais usé sur Denis CHATELAIN (défaite 3/0).

        Cyprien BORGOO (1 victoire en A): Le Julien SOREL picard. Après Clermont, poursuit désormais son éducation sentimentale à Breteuil. Dans le creux des épaules des frères BROCHOT. Porte désormais le Rouge et le Noir du maillot bret-wavignien comme un vrai héros Stendhalien. Mèche rebelle, regard romantique ; mais top coup droit d’arriviste et revers de tueur. A anéanti madame de Rénal-LE GALLOUDEC dans le match pour l’égalisation (victoire 3/2, à l’expérience).

        Bruno CRNIC (3 victoires en B): Trader isarien, le Bernard MADOFF du Bret-Wav. L’un des plus grand escrocs pongistes de tous les temps: a fourgué de la SICAV toxique à Christian HENON (victoire 3/0), des emprunts russes à Philippe L’HOTE (victoire 3/0), et même un plan-épargne retraite à Antoine HUON, 13 ans (victoire 3/0). Sans pitié et sanguinaire, a éliminé tous les usual suspects amiénois. Keyser SOZE règne vraiment sans partage sur la B britulienne.

        Jean-Baptiste CARLIER (1 victoire en B): Dernier Hussard de la République. Blouse noire, petites lunettes rondes, baguette de bois. A fracassé les phalanges d’Antoine HUON avec une règle en métal (victoire 3/0). Mais s’est retrouvé au coin, à genoux sur sa raquette, contre Christian HENON et Philippe L’HOTE (2 défaites, 11/9 au 5ème set. Dommage, presque).

        Benoît BROCHOT (2 victoires en B): Début de la saison hivernale ce mois-ci, avec le BROCHOT à ski. Benoît s’est élancé du tremplin enneigé, atteignant sa vitesse de croisière de 100 km/h (victoire 3/1 contre Antoine HUON). Après l’impulsion, s’est élevé dans les airs, et a flotté dans les cieux, en V, comme un faucon (victoire 3/1 sur Philippe L’HOTE). Sur Christian HENON, a raté sa réception en télémark, et a croisé les skis (défaite 3/1). La classe quand même : a terminé par un pas de moonwalk sur le tarmac. Mais juste pour la déconne.

        Le détail

        En A
        Cédric HERMANT (1998 points) : bat Arnaud DAMAY (1959 points) (-8,10,6,-6,7), Cyprien BORGOO (1888 points) (6,5,5) et Etienne BROCHOT (2150 points, n°694) (11,5,-12,8).
        Denis CHATELAIN (2070 points, n°1000) bat Arnaud DAMAY (1959 points) (2,8,10), Cyprien BORGOO (1888 points) (5,-7,11,5) et perd Etienne BROCHOT (2150 points, n°694) (-3,10,-11,9,-9).
        Pierre LE GALLOUDEC (1814 points) perd Arnaud DAMAY (1959 points) (8,5,-5,-7,-4), Cyprien BORGOO (1888 points) (9,-8,-7,9,-7) et Etienne BROCHOT (2150 points, n°694) (8,-2,10,6,-4).

        En B
        Christian HENON (1876 points) bat Benoit BROCHOT (1900 points) (6,7,6), Jean-Baptiste CARLIER (1861 points) (-10,6,10,-13,9) et perd Bruno CRNIC (1952 points) (-2,-12,-7).
        Philippe L’HOTE (1808 points) bat Jean-Baptiste CARLIER (1861 points) (-10,6,10,-13,9) et perd Benoit BROCHOT (1900 points) (9,-10,-4,-7) et Bruno CRNIC (1952 points) (-17,-12,-9).
        Antoine HUON (1225 points) perd Benoit BROCHOT (1900 points) (-9,-5,9,-12), Jean-Baptiste CARLIER (1861 points) (-8,-6,-6) et Bruno CRNIC (1952 points) (-5,-9,9,-8).

        Denis CHATELAIN'),
        array('id' => '123','equipe' => '4','journee' => '6','date' => '1322352000','lieu' => 'Saintines','adversaire' => 'SAINTINES ATT 1','score' => '16','score_adv' => '4','commentaire' => 'Cette semaine le compte rendu sera bref et approximatif car le capitaine a oublié de récupérer son exemplaire de feuille de match.

        Victoire de l\'ASTT 16/4

        En A
        Amiens : Lenny Beriat (14), François Herly (15), Bertrand BAthelot (17)
        Saintines : Jean Michel Leroy (18), Philippe Leroy (14), Pascale Choron (12)

        Magnifique réaction d\'orgueil de François le briseur de bois qui fait 3 points et une belle perf à 18.
        Bertrand fait également 3 en profitant probablement du mal de dos de JM Leroy.
        Lenny fait 2 et s\'incline contre le 18.
        Le double est perdu au 5e set par François et Bertrand.

        En B
        Amiens : Andrei Deguingand (10), Jean Paul Poulain (13), Louis Vandewoestyne (12)
        Saintines : 6, 12, 13

        Jean Paul et Louis font 3 sans être réellement inquiétés.
        Andréi fait 2 en s\'imposant facilement 18/16 au cinquième set contre le 12.
        Jean Paul et Louis s\'inclinent en double.

        Prochain match décisif pour la montée contre Feuquières.

        Bertrand Bathelot'),
        array('id' => '124','equipe' => '5','journee' => '6','date' => '1322352000','lieu' => 'Amiens','adversaire' => 'BEAUTOR CHARMES 1','score' => '16','score_adv' => '4','commentaire' => ''),
        array('id' => '125','equipe' => '6','journee' => '6','date' => '1322352000','lieu' => 'Amiens','adversaire' => 'VENIZEL TT 5','score' => '17','score_adv' => '3','commentaire' => ''),
        array('id' => '126','equipe' => '7','journee' => '6','date' => '1322352000','lieu' => 'Abbeville','adversaire' => 'AMICALE ST JACQUES 1','score' => '9','score_adv' => '11','commentaire' => ''),
        array('id' => '127','equipe' => '8','journee' => '6','date' => '1322352000','lieu' => 'Amiens','adversaire' => 'TT FRIVILLE 3','score' => '9','score_adv' => '9','commentaire' => 'Dimanche 27 novembre,

        Rendez-vous comme d\'habitude à 8h30 à la salle lorsque nous jouons à domicile. Je suis arrivé le premier puis Paul 3 minutes après et Floris à 8h45 environ mais aujourd\'hui on ne savait pas que cette journée serait... bizarre... Car où est Benoît ? Bonne question à laquelle nous n\'avons pas pu répondre... A 8h58 pas de Benoît et pas d\'équipe adverse ! Paul se voyait déjà en train de se rhabiller et de rentrer chez lui mais on a décidé de laisser 15 minutes de rab\'... A peine dit que l\'équipe de Friville arrive ! 1,2,3... Il leur manque un joueur aussi ??? Alors là, j\'avais jamais vu ça : 3 joueurs contre 3 ! Mais en fait ils étaient bien 4 , le dernier est arrivé 2 minutes après les autres... On continue notre échauffement à la table avec Paul et Floris, Friville note ses joueurs et nous propose de jouer la partie en 14 points. On a dit non, on était d\'accord, il nous manque un joueur alors on fait avec ; si on perd, tant pis, de toute façon quel que soit le résultat on ne pouvait ni descendre, ni monter tout comme Friville qui n\'avait rien à perdre ni gagner !
        On lance donc les matchs avec Floris en 1ère place, Jeoffrey en 2ème et Paul toujours scotché à sa bienfaisante 3ème place !

        COMPOSITION de TT Friville 3 :
        JOURDAIN Vincent 1027pts
        MEURICE Gilles 888pts
        SEGARD Antoine 777pts
        MINARD Pierre 951pts

        On commence cette journée par une défaite de Floris contre Vincent et une victoire de Jeoffrey contre Gilles.
        Une victoire de Paul contre Antoine en 5 sets, match assez serré mais Paul s\'est bien appliqué dans le dernier set pour l\'emporter largement (11-4).
        Un point donné à Friville ensuite avec le joueur absent contre Pierre... Logique...
        Cependant une bonne série s\'ensuit avec la victoire de Floris contre Gilles, celle de Jeoffrey contre Vincent et de Paul contre Pierre. Une perf\' à 108 points pour Paulo et une autre à 129 points pour Jeoffrey ! La moyenne de 2 perfs par journée est donc atteinte !
        Juste avant d\'attaquer les doubles, Amiens mène 5-3 ! Une bonne surprise !

        Mais on est vite rattrapé par Friville puisque leur équipe remporte les 2 doubles, un facilement (forcément avec l\'absent) et l\'autre Floris/Jeoffrey. Paul sur le match d\'avant s\'est tordu la cheville et est parti la soigner dans les vestiaires. On a donc fait le double avec Floris mais on s\'est incliné 3 sets à rien... Nos jeux ne correspondent pas trop, mais c\'est surtout le fait de ne pas être habitué à jouer ensemble en double... Ça nous a confortés dans l\'idée que notre stratégie Benoît/Jeoffrey et Paul/Floris est vraiment la bonne !

        Puis après ces doubles, mauvaise série pour les Amiénois, 3 défaites d\'affilée... Celle de Paul contre Gilles, Floris contre Pierre et l\'absent contre Vincent. Ensuite une victoire de Jeoffrey contre Antoine en 5 sets et la victoire de Paul contre Vincent, la 2ème perf pour Paul à 184 points cette fois-ci.
        Absent contre Gilles perd évidemment puis après un match très serré Floris s\'impose en 5 sets contre Antoine, évitant une belle contre perf à 144 points mais aussi la défaite de notre équipe. Il était mené 10-7 dans le dernier set et est remonté à 10-10 pour enfin s\'imposer 14-12 ! Bien joué ! 
        Peu de temps après, Jeoffrey gagne contre Pierre en 4 sets sur une balle grattée qui signe la fin de la rencontre ! 

        Score final : 9-9. 
        Floris : 2
        Paul : 3
        Jeoffrey : 4
        Absent : 0
        Eh bien 9-9 c\'est pas mal du tout ! On a signé 4 perfs entre 50 et 184 points qui nous ont sauvés de la défaite ! Chacun a fait son job sauf l\'absent évidemment qui devra s\'expliquer...

        Pour la dernière journée on se déplacera à Puzeaux qui est à 4 points derrière nous au classement, la victoire sera donc jouable !

        Jeoffrey Stéphan'),
        array('id' => '128','equipe' => '9','journee' => '6','date' => '1322352000','lieu' => 'Eppeville','adversaire' => 'EPPEVILLE TT 2','score' => '7','score_adv' => '11','commentaire' => ''),
        array('id' => '129','equipe' => '10','journee' => '6','date' => '1322352000','lieu' => 'Amiens','adversaire' => 'ABBEVILLE AC 7','score' => '14','score_adv' => '4','commentaire' => ''),
        array('id' => '130','equipe' => '11','journee' => '6','date' => '1322352000','lieu' => 'Amiens','adversaire' => 'MUILLOIS PPC 3','score' => '16','score_adv' => '2','commentaire' => 'Ce match se déroulant à Amiens, pas de problème de déplacement, rendez-vous à 8h30 devant la salle. On savait que l\'on jouait contre une équipe qui était dernière du classement donc pas trop de stress quant à l\'enjeu du match.Pour ce match, florian ne pouvait pas jouer, c\'est Enguerrand qui l\'a remplacé. Nous accueillons nos adversaires, nous remplissons la feuille de match puis nous découvrons la composition de leur équipe :

        MUILLOIS PPC 3
        DEVEAUX Patrice 705 pts
        LEVACHER Stéphanie 575 pts
        DEVEAUX Kevin 500 pts
        LABILLE Théo 500 pts

        AMIENS STT 11
        BOUTEILLER Hugo 816 pts
        CHAHIR Ala-eddine 697 pts
        HAUW Joffrey 691 pts
        WALLON Enguerrand 646 pts

        Déroulement des matchs :

        Hugo bat Kevin 11-1 11-2 11-3.
        Joffrey bat Théo 11-4 11-4 11-6.
        Stéphanie bat Enguerrand 11-5 7-11 7-11 11-7 11-8 match très serré, dommage pour Dnguerrand.
        Ala-eddine bat Patrice 11-6 11-13 4-11 11-7 11-4 quelques difficultés à rentrer dans le match et à trouver les failles de l\'autre, mais conclue très bien.

        Joffrey bat Théo 11-6 11-7 11-3.
        Hugo bat Théo 11-6 11-7 11-8 sans trop de soucis.
        Patrice bat Enguerrand 9-11 6-11 11-1 11-9 11-9 très bonne entrée de match, fin de match assez décevante, avec le 3e set qui a quasiment été donné, dommage.
        Ala-eddine bat Stéphanie 11-2 11-4 11-7.

        1er double : Ala-eddine et Enguerrand battent Théo et Stéphanie 7-11 11-5 12-10 11-2.
        2e double : Hugo et Joffrey battent Patrice et Kevin 8-11 11-9 11-2 11-6.

        Hugo bat Patrice 11-4 11-4 11-1.
        Joffrey bat Stéphanie 11-8 11-3 15-13 serré sur la fin mais jojo s\'impose, bien joué.
        Ala-eddine bat Kevin 11-2 11-3 11-3.
        Enguerrand bat Théo 11-7 11-6 12-10.

        Hugo bat Stéphanie 11-5 11-8 11-4.
        Joffrey bat Patrice 11-4 11-9 7-11 11-1 beau match.
        Enguerrand bat Kevin 11-5 11-6 11-3.
        Ala-eddine bat Théo 11-3 11-3 11-1.

        Bilan : 16-2 bon match de l\'équipe, bravo à tous.

        Hugo Bouteiller'),
        array('id' => '131','equipe' => '12','journee' => '6','date' => '1322179200','lieu' => 'Amiens','adversaire' => 'MUNICIPX AMIENS 1','score' => '9','score_adv' => '9','commentaire' => ''),
        array('id' => '132','equipe' => '1','journee' => '7','date' => '1323475200','lieu' => 'Mers','adversaire' => 'TT MERS TREPORT EU 1','score' => '9','score_adv' => '11','commentaire' => 'La dernière…

        Nous finissons donc cette phase par un petit derby qui tourna malheureusement en faveur des Eudois (défaite 11/09).

        Composition des équipes :

        TTMTE :
        A : DORCESCU Christian (n°230), MENAND Pierre (n°306), GUEYE Mohamed (n°518)
        B : DEHESDIN Nicolas (n°318), NOAH ESSOMBA Hubert (n°358), BALBIANO Gaëtan (18)

        ASTT :
        A : MARAIS Yannick (n°186), PLOTUNA Malin (n°195), LECOMTE Yohan (19)
        B: CORRE Cédric (n°277), CHATELAIN Raphaël (20), HAIGNERE Alexandre (18)

        Nous avons rapidement été menés  5/2 avec les victoires de Alexandre contre BALBIANO et de Malin contre GUEYE. Puis 9/5 et enfin nous sommes revenus à 9/9 pour périr à 9 ! 

        MARAIS Yannick (2/3) : Yannick s’incline d’entrée  12/10 à la belle face à DORCESCU après avoir mené 2 sets à 0. Dommage ! En revanche, il s’est bien repris avec une victoire en 3 sets face à GUEYE et en 5 sets face à MENAND.

        PLOTUNA Malin : (3/3) : Bien joué Monsieur ! Deux victoires en 3 sets (MENAND et GUEYE) et une victoire en 5 sets face à DORCESCU. 

        LECOMTE Yohan (0/3) : Trois défaites en 3 sets… « Retour sur Terre ! » (on ne pas être au top tous les week-ends) . Ca ira mieux en deuxième phase. Et je pense que l’on peut le remercier d’avoir accepté d’aller jouer quasiment tous les matchs en A. Donc MERCI YOYO

        CORRE Cédric (2/3) : Cédric  perd d’entrée face à NOAH  13/11 à la belle dans un match âprement disputé puis se reprend avec deux victoires en 3 sets.

        CHATELAIN Raphaël (1/3) : Raphaël perd en 3 sets face à NOAH, en 4 face à DEHESDIN puis s’impose facilement face à BALBIANO. Bon rétablissement à la famille CHATELAIN…

        HAIGNERE Alexandre (1/3) : Gagne d’entrée en 3 sets face à BALBIANO (ça rassure), puis perd en 3 sets face à DEHESDIN. S’incline dans le match à 10/09 pour eux face à NOAH après avoir mené 1/0 (10/08) Comme d’hab… ! Mais bon, nous  étions censés être maintenus…

        Défaites des doubles amiénois.

        Bilan : Rendez-vous en N3. Dommage avec deux victoires et deux défaites 11/09.

        Bonnes fêtes de fin d’année. 

        Alexandre HAIGNERE'),
        array('id' => '133','equipe' => '13','journee' => '7','date' => '1323475200','lieu' => 'Poitiers','adversaire' => 'POITIERS TTACC 86 2','score' => '0','score_adv' => '10','commentaire' => ''),
        array('id' => '134','equipe' => '14','journee' => '7','date' => '1323475200','lieu' => 'Bolbec','adversaire' => 'TS BOLBEC 2','score' => '10','score_adv' => '5','commentaire' => 'Les filles au pays des Bisounours

        14h15, tambour battant : en route pour Bolbec. Notre capitaine sort son G.P.S. et... "merde, j\'ai pas l\'adresse" ! Le départ se fera donc à 14h30 !

        Aux alentours de 15h20, pluie et soleil se mêlaient et un magnifique arc-en-ciel apparu. Dans l\'euphorie de cette belle apparition, nous espérions voir Gros Bisous, Gros Coquin, Gros Câlin, Gros Chéri (les Bisounours) mais nous les vîmes que dans notre tête.
        Cinq minutes plus tard, un panneau annonciateur de danger, nous indiqué : ATTENTION, ANIMAL ERRANT. Ca y est, on va les voir nos Bisounours !

        Arrivée à Bolbec : 15h45. Nous tombons directement sur la rue qu\'Aurélie avait rentré dans son G.P.S. : avenue du Maréchal Foch mais point de salle ! Le co-pilote Hélène reprit le papier avec l\'adresse et remarqua que celle-ci n\'était pas la bonne ! Aurélie, c\'est avenue du Maréchal Joffre ! Et voilà, on a notre premier surnom : Gros Boulet. Arrivée au gymnase : 16h05.

        Après un non-accueil de nos adversaires, on alla directement dans les vestiaires où Marion Jollès s\'invita ! C\'était confessions intimes : "mes barrettes sont assorties à mes sous-vêtements", "j\'ai un string fétiche que je met à chaque rencontre" (non, je ne nommerai pas !!).

        Compositions des équipes :

        BOLBEC : GALLIER Mathilde, 10, BARON DE FRANCE Matylou, 9, DAGEONS Sandrine, 9, BENICOURT Mathilde, 8.

        ASTT : GUICHARD Delphine, 8, NEEL Aurélie, 9, BERTHELOT Marion, 10, CARLIE Hélène, 14.

        Delphine alias Gros Tchô (1 victoire, 2 défaites) : Delphine perd facilement sur GALLIER 3-0 (-5/-5/-3). Ensuite, super match face à BARON DE FRANCE avec victoire 3-1 à la clé (2/-8/9/9) et des "tchô" mais en baissant les yeux cette fois ! Tu as bien retenu la leçon de Monsieur FERAUD, félicitations. Delphine finira par une défaite 3-0 contre DAGEONS (-11/-7/-9).

        Aurélie alias Gros Boulet (2 victoires, 1 défaite) : Aurélie super impressionnante en pivot mais n\'a pas le niveau pour comprendre le flip frappé ! Elle bat BARON DE FRANCE 3-1 (8/-7/9/8), perd face à GALLIER (-1/-6/-5) puis s\'impose après un beau fight sur BENICOURT 3-1 (4/10/-8/9).

        Aurélie et Delphine perdent 3-0 contre DAGEONS et BENICOURT (-8/-8/-8).

        Marion : Gros Serveur (3 victoires, 1 défaite) : Marion s\'est fait une petite frayeur sur BENICOURT. Menée 2-0, elle s\'impose finalement 3-2 (-5/-8/9/7/6). Après, victoire 3-1 sur DAGEONS (8/5/-5/9), 3-1 sur BARON DE FRANCE (4/10/-8/9) puis défaite 3-0 face à GALLIER avec une multitude de services offerts, mais notre victoire était acquise.

        Hélène dit Gros Bourrin (4 victoires) : après une semaine éprouvant tant sur le plan physique (tendinite du moyen fessier) que sur le plan psychique, j\'entamais ce dernier match avec beaucoup d\'appréhension. Je m\'étais dit que si mon niveau de jeu n\'était pas performant, j\'aurai fait ma "pleureuse" façon Alex Haigneré !! Mais au contraire, j\'ai géré ! Des tops coup droit, tops revers, frappes coup droit, smatchs, en veux-tu ? En voilà ! Je remporte tous mes matchs 3-0, sur DAGEONS (5/8/10), sur BENICOURT (3/6/6), sur GALLIER (8/8/5) et sur BARON DE FRANCE (5/7/8).

        Marion et moi perdons notre double face à GALLIER et BARON DE FRANCE 3-1 (-3/6/-9/-7).

        Nous remportons ce match 10-5. Nous terminons donc 9ème et nous assurons notre maintien.

        Merci à vous les filles pour cette phase. Nous l\'avions mal commencé mais on a très bien géré la pression des trois derniers matchs.

        Un merci également à tous nos supporters.

        Hélène CARLIE'),
        array('id' => '135','equipe' => '2','journee' => '7','date' => '1323475200','lieu' => 'Amiens','adversaire' => 'BOULOGNE SUR MER ABCP 1','score' => '1','score_adv' => '11','commentaire' => 'Amiens - Boulogne-sur-Mer

        Match sans enjeu, Amiens assuré du maintien, Boulogne assuré de monter.
        La team acceuillait pour cette dernière la venue d\'un nouveau POULAIN. Jean-Paul était donc venu nous soutenir et jouer pour remplacer notre Lolo national.
        15h à la salle pour les plus courageux. Un échauffement correct avec un Dub\' et "Zitant" comme jamais.
        16h30, échauffement violent d\'Elensky et Wanin. Un topeur et un bloqueur d\'élite pour une régularité diabolique.
        Trois arbitres de classe internationale, avec Paulo, Loïc et Lolo.
        Des Boulonnais sans pitié à la table, une boucherie. C\'était des bons biftecks même s\'ils ont pas été très tendres.
        Pour la petite histoire la compo ça donnait:

        Boulogne sur Mer
        En A : BOSCHER Sebastien (2353.0 / N 310), PRINCE Tony (2212.0 / N 528), ELENSKY Gregory (2638.0 / N 87)  
        En B : WANIN Ludovic (2203.0 / N 555), MOUNINE Abdeslam (2131.0 / N 754), WILLER Frederic (2218.0 / N 506)

        Amiens
        En A : RASSELET Vincent (1766.0 / 17), BLATRIX Maxime (1862.0 / 18), HARLE Christophe (2174.0 / N 621)  
        En B : VAQUIER Benoit (1570.0 / 15), DUBOIS Lucas (1643.0 / 16), POULAIN Jean-Paul (1391.0 / 13) 

        Et 1 et 2 et 3 ... et 10 - 0
        Yes papa ! 10-0 et 2 sets seulement de marqués pour les Amiénois, Vince perd Boscher 3-1 et Dub\' sur Mounine 3-1 également.

        Aujourd\'hui on était en mode kho-lanta pour la N3.
        Dud\' en leader a prouvé qu\'il était le seul et dernier survivant.
        Auteur du seul point Amiénois face au petit PRINCE. Et franchement c\'était du gâteau 3-0 pour Dudu.
        11-1 score final, voire même 12-1 après un dernier double en A magistral.
        Ça c\'était pour la petite histoire, car la grande ce passait du coté hérain.
        A 18h30 on avait rattrapé notre retard sur la R1 qui était à 4-6.

        Un grand merci au public venu en masse pour applaudir la prestation tragico-gramaturgique de l\'équipe.
        La performance de muet de Denis, les monologues de Pierre, les mimiques de Cédric, les larmes de Philippe, la déception d\'Antoine, la joie de vivre de Christian ((ironie).
        Du grand art, avec notamment une démonstration de Casse Brique de la part de Joël Walk sur Cédric Hermant. Vraiment impressionnant !

        Un punch offert par la maison avec la pleine contribution d\'un Dudu déchaîné. Un punch bien dosé.
        Une journée a bien vite oublié à la table. Mais à l\'apéro on joue n° !

        En bref,
        On est pas fanny grâce à qui, grâce à qui ?
        Dudu Merci !

        A la Saint Romaric
        On fête les maintiens
        Dans une ambiance électrique !

        Vincent RASSELET'),
        array('id' => '136','equipe' => '15','journee' => '7','date' => '1323475200','lieu' => 'Friville','adversaire' => 'TT FRIVILLE 1','score' => '16','score_adv' => '2','commentaire' => ''),
        array('id' => '137','equipe' => '16','journee' => '7','date' => '1323475200','lieu' => 'Amiens','adversaire' => 'DREUIL TT 1','score' => '9','score_adv' => '9','commentaire' => ''),
        array('id' => '138','equipe' => '3','journee' => '7','date' => '1323475200','lieu' => 'Amiens','adversaire' => 'COMPIEGNE TT 1','score' => '8','score_adv' => '12','commentaire' => 'Die Hard 7. Une journée en enfer


        Note de l’éditeur pour le fond sonore lecturiel:
        - Pour Breteuil (version sous-titrée pour les malentendants) : http://www.youtube.com/watch?v=w5Z-XslFYEw
        - Pour Amiens : La mort du sergent HENON. Abattu par les Vietcongs brituliens. Dans le dos. Normal, ce sont de gros lâches: http://www.youtube.com/watch?v=9HzIVc2vwVE&feature=related

        Samedi 10 décembre. Amiens recevait Compiègne. Dernier match de la 1ère phase. Et nouvelle FINALE. La routine, depuis 15 jours.
        Mais avec cette fois une lutte à mort binaire :
        - un Nul ou une Victoire : et Amiens monterait au paradis de la N3, le Walhalla des guerriers celtes et des pongistes de la Hérain.
        - une Défaite : Philippe L’HOTE pleurerait. Et Amiens resterait à croupir dans les eaux stagnantes et saumâtres du marigot régionalistique. Pour les siècles des siècles. Amen.

        Pour la préparation mentale de ce gros match, DUDU avait donc décidé d’emmener l’équipe en pèlerinage : Lourdes pour les chrétiens, Les Alpes pour les crétins, La Mecque, Jérusalem, Bodh-Gaya, les sources du Gange, et, pour finir, l’étable dans laquelle naquit un 24 décembre Jean-Philippe GATIEN, entre un âne et un bœuf, à Bethléem. Avec un petit crochet par l’appartement de Sébastien PERPETTE. Mais juste parce que Christophe y avait oublié son appareil à raclette et sa cuve à punch.

        Un dernier entraînement à la POUDLARD Academy, et les joueurs seraient prêts. Oui, Antoine HUON parle aussi le Fourchelang. Mais ça ne sert pas à grand-chose pour jouer au ping. Pierre LE GALLOUDEC, lui, avait décidé de se teindre en roux. Moins pour ressembler à Ronald WEASLEY, l’ami poil-de-carotte de Harry POTTER, que pour choper Delphine WESPISER, la nouvelle Miss France aux longs cheveux rouges.

        Ce samedi 10 décembre était donc un beau jour pour mourir. Les amiénois étaient prêts à affronter les Trolls des cavernes et les Mangemorts compiégnois.

        Après les dernières recommandations et la vérification des baguettes magiques par le juge DUMBLEDORE-FERAUD, la rencontre débutait. Après la victoire de Denis CHATELAIN sur Jérémy FOUILLET (3/2), premier coup de théâtre avec la défaite 3/2 de Philippe L’HOTE contre Joris THOMAS, après avoir mené 8-4 au 5ème set avec, à suivre, une balle de la hauteur de la tour PERRET. Puis 2-2, 3-3, 4-4, 5-5 et échappée de Compiègne 9-6 après les victoires de Joël WALK sur Cédric HERMANT (3/1) et de Joris THOMAS sur Christian HENON (3/0).

        Le sol de la salle Labaume craqua et se brisa alors sous nos pieds. Comme la glace du lac Peïpous sous les trop lourdes armures des Chevaliers Teutoniques. C’était en 1242, mais Jean TAQUET s’en rappelle comme si c’était hier. Des chevaliers amiénois pourtant orgueilleux, et fièrement menés par le délégué du Saint-Empire Romain Germanique, Herr Mant. Mais des combattants qui, outre l’humiliation et l’eau glacée, durent subir les tirs meurtriers des flèches et des tops frappés des archers compiégnois. Tout cela nous amènera tout doucement à 10/8 après la victoire d’Audric THOMAS sur Denis CHATELAIN (3/2). Pour finir à 12/8 avec les dernières victoires de Jérémy FOUILLET sur Pierre LE GALLOUDEC (3/1) et de Joris THOMAS sur Antoine HUON (3/1).

        Dans le même temps, BRETEUIL 1 l’emportait sur VILLERS SAINT PAUL. 
        Donc résultats des courses : Breteuil, 1er, est en N3. Compiègne, 2ème, et Amiens, 3ème, sont enterrés vivants en R1.

        Une victoire à la Pyrrhus pour Compiègne (pour les petits HERSENT : la carrière sportive, les différents clubs et l’évolution du classement FFTT de Serge PYRRHUS : http://fr.wikipedia.org/wiki/Pyrrhus_Ier). Et pour résumer, dans le résumé, deux équipes de loosers à la fin de la rencontre. Mais un beau match avec du Fight et de la Grinta. Merci aux supporters et aux supporteuses.

        Avec l’attribution du prix Orange à Joël WALK donnant le point pour une balle-coin-de-table que, ni son adversaire, Denis CHATELAIN, ni l’arbitre Pierre LE GALLOUDEC n’avaient vu toucher. Beau zeste. Et le prix Citron pour DUDU. Car il aurait quand même pu en rajouter dans son punch.

        Fin de la phase donc. Et comme l’aurait dit Jean-Louis AUBERT : Voilà, c’est fini.
        Philippe L’HOTE, lui, est déjà remonté dans l’hélico, et chiale au dessus de la jungle de la Hérain. Philosophant comme un Bernard-Henri, ressassant des histoires de combattants qui ne se battaient pas contre l’ennemi, mais contre eux-mêmes, car l’ennemi était en eux : http://www.youtube.com/watch?v=xnSqGilESC0&feature=fvwrel

        Punaise, j’ai rien compris. Mais peut-être parce que le punch d’après-match de DUDU était trop dosé. En tout cas le plan rouge a été décrété et une cellule de crise a été parachutée sur Amiens, avec 7 commando-psychiatres. Oui, il en fallait bien 2 pour Philippe L’HOTE. En janvier, après 12 séances d’électrochoc, et à l’arrêt du traitement anti-dépresseur, on desserrera leur camisole, et les amiénois repartiront en campagne. Il faudra peut-être qu’ils profitent de la trêve pour lire le Petit Livre Rouge, le parfait manuel du joueur de Régionale : « Comment j’ai monté en N3 ». Rédigé par Etienne BROCHOT. Dans la collection Les Gros Chatteux.

        Les gagnants perdant

        Jérémy FOUILLET (1 victoire en A): Le Robert PATTINSON compiégnois. En mode Twilight. Assoiffé de sang, a planté ses canines dans le cou gracile de Pierre LE GALLOUDEC (victoire 3/1). Denis CHATELAIN l’a joué avec des gousses d’ail accrochées au filet (défaite 3/2). Et Cédric HERMANT a fini par lui enfoncer un pieu en bois dans le cœur (défaite 3/2, malgré deux balles de match pour Jérémy).

        Audric THOMAS (2 victoires en A): Une musculature impressionnante, des poils partout, de grandes dents, de longues griffes, et des déplacements de bête fauve. Oui, je pense qu’il s’est fait mordre un soir de pleine lune par un loup-garou. Il aurait fallu des balles d’argent pour l’arrêter. Malheureusement on n’avait que des Nittaku. A dévoré Pierre LE GALLOUDEC (3/1) et Denis CHATELAIN (3/2).

        Joël WALK (2 victoires en A): La brutalité d’une machine humanoïde, couplée à la délicatesse d’un concertiste russe : Goldorachmaninov. A détruit sauvagement ses adversaires, a grand coup de tops frappés. Mais avec la grâce d’une sonate pour violoncelle. Du Fulguropoing sur Pierre LE GALLOUDEC (victoire 3/1), de la Cornofulgure sur Cédric HERMANT (victoire 3/1). Un peu à court d’Astérohaches sur Denis CHATELAIN (défaite 3/1).

        Julien LISION (1 victoire en B): A fait graver sur son bois de raquette « Corpus defuncti hostes semper olet bonum ». Ne sort pas ton Gaffiot. Alexandre GOUPIL, brillant latiniste-de-sa-mère, te donne la traduction de cette citation du général romain Aulus VITELLIUS: « Le corps d’un ennemi mort sent toujours bon». A donc pris une grande inspiration et s’en ait mis plein les naseaux sur Antoine HUON (victoire 3/1).

        Matthieu VANICAT (2 victoires en B): A eu le malheur de naître à la mauvaise période. Le guerrier qui aurait pu combattre sur les champs de bataille du Moyen-âge, ou dans l’arène du Coliseum, traverse de nos jours les salles de ping. Solitaire et impitoyable, comme le Chevalier Noir. A facilement dérouillé Philippe L’HOTE (3/0) et Antoine HUON (3/1).

        Joris THOMAS (3 victoires en B): Incandescent et rayonnant. Comme un militant écologiste trop longtemps planqué dans une centrale nucléaire française. Hat-trick en B : L’homme du match. Ou The Man of the Day. Si tu parles couramment l’allemand.

        Les perdants perdant

        Cédric HERMANT (2 victoires en A): ODIN, le Dieu de la Mort. THOR, le Dieu de la Guerre. CEDRIC, le Dieu du ping. Demi-Dieu en fait. De temps en temps il perd un match pour nous prouver qu’il est encore un peu humain (défaite 3/1 contre Joël WALK, malgré des balles dantesques).

        Denis CHATELAIN (2 victoires en A + double): Madame Gastro et monsieur Entérite lui ont tenu la jambe toute la nuit. Avec une nuit blanche, déshydraté, et un peu anémié, le grand professeur DUDU lui a prescrit une transfusion. Mais l’hosto s’est gourré et lui a injecté du sang de navet. Ça s’est un peu senti sur Audric THOMAS (défaite 11/9 au 5ème set).

        Pierre LE GALLOUDEC (0 victoire en A + double) : Ne dîtes plus : « Roche volcanique, de faible densité, flottant à la surface de l’eau, dans le coma, lors d’une finale de ping » mais « Pierre pionce ». Dans le dur aujourd’hui. Avec une petite bulle. Mais en face, pour rester dans le domaine de la pierre, Pierre, c’était des joueurs en granit.

        Christian HENON (2 victoires en B): A écouté les paroles du vieux sage, Lao Tseu : « Si quelqu’un t’a offensé, ne cherche pas à te venger. Assieds-toi au bord de la rivière et bientôt tu verras passer son cadavre ». Reste donc assis, sur son petit carton jaune, depuis samedi, passant ses jours et ses nuits, sur les bords de la Somme. Mais n’a toujours pas vu passer Joris THOMAS, flottant sur le dos, le teint vert, le ventre ballonisé et empli d’eau (défaite 3/0).

        Philippe L’HOTE (1 victoire en B) : L’agence de notation Standard & Poor’s a un peu hésité pour l’évaluation de sa performance. Est passé du triple AAA à Ah !Ah !Ah ! (défaite 3/2 sur Joris THOMAS), puis Oh !Oh !Oh ! (défaite 3/0 en double) et ih !ih !ih ! (défaite 3/0 sur Matthieu VANICAT). Malgré sa victoire sur Julien LISION (3/2), les Indignés ont quitté leur campement de Wall Street et ont entamé un sit-in devant sa maison, à Domart.

        Antoine HUON (0 victoire en B): The Artist. Joue déjà avec un gros talent. Mais son compteur est resté comme Jean DUJARDIN : muet. Pas grave, ça cartonnera plus en deuxième phase.

        Denis CHATELAIN'),
        array('id' => '139','equipe' => '4','journee' => '7','date' => '1323561600','lieu' => 'Amiens','adversaire' => 'FEUQUIERES AP 1','score' => '14','score_adv' => '6','commentaire' => 'Mission  accomplie !!!

        Une fois de plus, n\'ayant pas pensé à récupérer mon exemplaire de feuille de match, le résumé comportera quelques approximations sur les scores et noms.
        L\'équipe 4  ayant beaucoup plus de nerfs (mon statut d?enseignant m\'empêche d\'illustrer mon propos par une autre partie de l\'anatomie) que l\'équipe 3, nous avons atteint notre mission et accédons à la R2.

        En A
        Bruno Marysse
        Louis Vandewo. (etc)
        Bertrand Bathelot

        Bruno a un peu de mal à se mettre dedans contre le 12 qu\'il bat 3/1. Il bat ensuite Leroux (16) , contribue largement à la victoire du double et s\'incline fatigué 3/1 contre Duchaussoy (16).

        Louis fait un très bon match contre Duchaussoy (16) mais s\'incline 3/2 après 3 balles de match au 4eme et après avoir mené 7/2 à la belle. Louis s\'impose difficilement contre le 12 et laisse les 2 vieux jouer en double. Il s\'incline ensuite 3/0 contre Leroux en n\'ayant pas digéré son premier match.

        Bertrand fait 3 et le double (3/1 Leroux et 3/0 sur les autres matchs) sans forcément bien jouer, mais bien aidé par 85% de services gagnants.

        En B
        Loic Lefevre
        Lenny Berriat
        François Herly

        Loic continue sa série. Il bat le 15 3/2 après avoir été mené 2/0. Dans le premier set Loïc a attendu sa septième tentative pour mettre un service correct sur la table. Très bonne adaptation tactique dans les 3 derniers sets. Loïc bat ensuite 3/2 le 9 et 3/2 le 14 avec un bon niveau de jeu sur un joueur difficile à manier.

        Lenny s\'incline 3/2 sur son premier match (14) en ayant du mal à rentrer dans la rencontre. Il s\'incline ensuite 3/0 sur le 15 et bat le 9 3/0. Un mauvais jour qui ne porte pas à conséquence.

        François impérial gagne ses 3 rencontres 3/1, 3/2 3/0. On ne l\'arrête plus depuis son bris de raquette contre Compiègne.

        François et Loic s\'inclinent 3/2 en double.

        Un grand merci à Bruno pour son renfort fort utile et à l\'esprit d\'équipe de Jean Paul et Andréi  qui sont venus nous soutenir. Merci également à nos supporters du jour.

        Conclusion heureuse d?une phase agréable.
        R2 nous voilà !!!!

        Bertrand Bathelot'),
        array('id' => '140','equipe' => '5','journee' => '7','date' => '1323561600','lieu' => 'La Capelle','adversaire' => 'LA CAPELLE TT 1','score' => '11','score_adv' => '9','commentaire' => ''),
        array('id' => '141','equipe' => '7','journee' => '7','date' => '1323561600','lieu' => 'Amiens','adversaire' => 'VAUCHELLES ASV 2','score' => '11','score_adv' => '9','commentaire' => ''),
        array('id' => '142','equipe' => '6','journee' => '7','date' => '1323561600','lieu' => 'Godenvillers','adversaire' => 'GODENVILLERS AS 1','score' => '14','score_adv' => '6','commentaire' => 'Bref, Les Cénobites Tranquilles montent en R3.


        Aujourd\'hui, je m\'organise.
        Une pré bonne-résolution.
        Après avoir vérifié environ 7.68 fois en une semaine que chacun était dispo pour le match, qu\'on avait assez de chauffeur, que quelqu\'un avait préparé un gâteau etc.
        On fixe le RDV.
        13h35 pour jouer à 14h30 à Godenvillers (50min de route).

        J\'ai raté mon coup. Heureusement, dans l\'équipe, on a Cyril De Catheu et Christophe Hersent. Eux, ils ont suivi.
        Pas les autres. Les autres, ils s\'en fichent. Ou alors ils savent pas lire l\'heure, mais faut pas trop leur en demander.
        On doit jouer à 6.
        Ca fait 2 voitures.
        En fait non, la famille Feraud fait le déplacement, plus Boris, fidèle titulaire qui laissait sa place pour l\'occasion.
        Ca fait 3 voitures. Ca fait plaisir d\'avoir des supporters.
        Du coup, on a avancé le départ d\'une heure : 12h50. On avait prévu les 25 minutes habituelles de recherche de salle le dimanche pendant le temps d\'échauffement.
        Mais en fait, quand on a Christophe Hersent sous la main, ça ne sert à rien.
        Christophe, il connait bien la Picardie.
        Moi, j\'ai bien failli la connaître, de très, très près après un dépassement très, très optimiste entre deux patelins locaux...

        Au lieu de 7 joueurs présents, l\'équipe à failli jouer à 4. Mais c\'était pas possible. Du coup j\'ai finit la route.
        Christophe à tourné dans un champ 2 kilomètres avant l\'arrivée.
        En fait c\'était une route. On commençait à avoir très peur. Mais c\'était le bon chemin.

        On arrive sur place à 13h44. On a jamais été aussi ponctuels. Ca m\'a perturbé.
        Du coup j\'ai été m\'échauffer physiquement. J\'ai perdu l\'habitude. Il faisait entre 5 et 10°.
        Courrir en décembre dehors, c\'est pas conseillé. Je suis vite rentré.


        On s\'est habillés, on s\'est échauffés.
        Nos adversaires étaient prêts à commencer la rencontre à 14h15. Pas nous.
        On a commencé à 14h25.

        Arnaud commence sur leur leader et échoue 11-9 à la belle. Ca m\'agace. Je ne le montre pas, ça agace mon équipe de me savoir agaçé.
        Léo, quant à lui, après avoir mené 2-0 sur Frédéric Zarita, rate 3 balles de match au 4e set. Ca m\'inquiète. Je ne le montre pas non plus.
        Il mène 10-4 à la belle. C\'est bon.
        En fait non, 10-10. Puis 10-11. Quel con !
        Au final, il l\'emporte 13-11. Sale gosse. Belle frayeur.

        C\'est à moi de jouer, j\'ai oublié de mettre mon maillot. Pas grave, il n\'y a pas de JA.
        Je débute approximativement à 2 classements de moins que mon niveau habituel. Heureusement, mon premier adversaire n\'était pas chaud du tout.
        Je finis par l\'emporter au 4e set, en commencant à rejouer "potablement".
        De son côté, Tristan remporte aussi son match. Ca fait 3-1. Je souris.

        C\'est à Combo-Ali et Cyril. Le premier est très chaud, c\'est rare. Ca fait plaisir, il remporte son premier match 3-0.
        Cyril s\'impose aussi en 3 sets (4/7/3). Ca fait 5-1. Je jubile...

        C\'est le double en B, ils gagnent 3-0.
        Moi, je joue le leader adverse.
        Je perd le premier set 16-14. Merde, dommage.
        Je gagne le troisième en jouant plutôt bien, mais c\'est insuffisant, défaite 3-1.

        6-2... Plus que 5 points.
        Arnaud remporte son 2e match et Tristan s\'incline.
        Puis Combo-Ali et Léo apportent 2 points de plus.
        9-3.

        C\'est le double en A. J\'ai envie de le jouer. Combo-Ali et Arnaud aussi. Ils le jouent.
        Ils perdent 3-0, mais Cyril inscrit un 10e point.

        On a alors 6 matchs pour apporter un dernier point et monter...
        ...
        ..
        .

        Je joue en même temps que Tristan. Je voulais apporter le 11e point. Mais mal engagé, je sens que ce n\'est pas pour moi.
        Tristan avait commencé avec 2 sets d\'avance, et j\'ai juste le temps de prendre un temps mort pour le voir nous apporter ce 11e point !

        Je gueule un coup. L\'équipe aussi. Reste la suite des matchs...
        Je perd mon match finalement, 11-5.

        Combo-Ali et Arnaud écrasent leurs derniers adversaires.
        Léo termine sur un sans-faute, Cyril perd un peu de motivation pour battre Frédéric Zarita...

        Score final : 14-6.


        On était partis pour se maintenir.
        On commence avec une défaite, c\'est pas bon.
        On devait prendre 2 caisses par la suite, on gagne 2 fois. On était fiers de notre maintien !
        Puis 1 victoire, 1 nul et une autre victoire...
        Même plus besoin de Louis Vandewoestyne.

        Bref, on monte en R3 !!!


        Le détail :
        en A :
        [Brutus] Arnaud Feraud (1285pts - perd Clément Poitevin (1514), bat Manuel Noiret (1231) et Camille Poitevin (1124)) :
        Du grand Brutus. Solide, fiable, et généreux. suffisamment pour rater 2 services lors de son premier match contre Clément Poitevin à 1-1 10-8, et un autre à 2-2 9-9.
        Sinon, c\'est trop facile. Dommage, le perfect n\'est pas passé loin.
        Mais cela reste très bon. On a retrouvé le soldat Feraud.

        [Balou] Combo-Ali Combo (1326 - bat Manuel Noiret (1231), Camille Poitevin (1124) et Clément Poitevin (1514)) :
        Perfect, Rien à redire. Le Home Run qu\'il nous fallait. Quand Balou est motivé, ses adversaires n\'ont qu\'à bien sa cacher.
        J\'entend encore ses claquettes revers résonner dans ma tête... Et la table doit s\'en souvenir aussi.

        [Bobby] Florent Schildknecht (1153 - bat Camille Poitevin (1124), perd Clément Poitevin (1514) et Manuel Noiret (1231)) :
        Motivé, comme souvent, jusqu\'au score acquis. Deux premiers bons matchs dans l\'ensemble, même si Clément Poitevin était au dessus.
        N\'a rien compris au picot de Manuel Noiret. Cherche encore comment éviter de faire sortir tous les tops.
        Aura évité la bulle pour le dernier match !

        En B :
        [Bidochon] Léo Bodinel (1143 - bat Frédéric Zarita (1168), Gilles Lambert (1067) et Arnaud Fievez (1185)) :
        Solide, dans la lancée de son excellente première phase.
        A même réussi à sourire après sa première victoire du jour, après avoir halluciné sur le jeu de son premier adversaire !
        Un bilan difficilement améliorable ; 18 matchs, 17 victoires... A confirmer en R3. M\'a encore privé de son gâteau et sera puni pour cette impertinence.

        [Bleu] Tristan Hersent (1026 - bat Arnaud Fievez (1185), perd Frédéric Zarita (1168) et bat Gilles Lambert (1067)) :
        Dans un bon jour le bleu, bien mieux que sa performance extra-ordinaire de la 6e journée... Mais c\'était pas difficile.
        Bon match de Tristan, bien motivé aussi, qui réalise deux petites perfs\' dans la foulée.
        Une bonne première phase pour Tristan malgré un incident de parcours à oublier.

        [Belin] Cyril De Catheu (1232 - bat Gilles Lambert (1067), Arnaud Fievez (1185) et perd Frédéric Zarita (1168)) :
        Début de rencontre sur un nuage pour Cyril, qui déroule tranquillement son jeu sans faute et s\'impose logiquement.
        A buté contre Frédéric Zarita au score acquis, au terme d\'un match sympathique tout de même.
        14 / 17 en première phase, résultat logique pour Cyril, qui mérite largement sa place en R3.

        En C :
        [Boris] Thibault De Visme (1095)
        Aura laissé sa place (sans regret au vu du résultat du jour), aura fait le déplacement avec son équipe pour l\'encourager et la voir monter.
        N\'aura pas perdu sa journée ! N\'avait pas pris sa raquette de peur de succomber à la tentation.
        A passé son code cette année.
        Le permis, prévu en 2015, devrait bien nous aider à emmener l\'équipe sur les routes de R3.

        Christophe Hersent :
        Organisateur, chauffeur, coach, supporter... Difficile de faire plus.
        Excellente phase, sans fautes. Merci à toi !

        La famille Feraud :
        Encore et toujours présents, merci pour les nombreux déplacements cette phase-ci, et le soutien de l\'équipe. A charge de revanche !

        Loulou :
        A défaut d\'une pom-pom girl, on aura eu une photographe improvisée de luxe... Même si je n\'ai pas encore retrouvé la photo d\'équipe.


        A bientôt en R3 !
        Flo Schield\' Bobby.'),
        array('id' => '143','equipe' => '8','journee' => '7','date' => '1323561600','lieu' => 'Puzeaux','adversaire' => 'PUZEAUX AAE 1','score' => '10','score_adv' => '8','commentaire' => 'Dimanche 11 décembre,

        Aujourd\'hui, pour cette dernière journée de la première phase, le père de Floris avait fixé le rendez-vous à 7h30 au club pour se déplacer à 40km de là c\'est à dire à Puzeaux dans le Santerre juste à côté de Chaulnes... Aujourd\'hui encore nous n\'étions que 3 mais Benoît avait prévenu qu\'il ne pourrait pas être là ; pourtant nous n\'avons pas réussi à trouver un 4ème joueur malgré 4 tentatives ! Le destin voulait que l\'on ne joue qu\'à 3... Comme d\'hab, j\'avais « espionné » l\'équipe de Puzeaux et j\'avais prévenu Floris et Paul qu\'en face ça jouerait 9-9-8-7. De toute façon, quel que soit le score, nous étions assurés de nous maintenir ! Nous quittons donc Amiens pour nous diriger vers Puzeaux et sa diversité de paysages... champ de patates à droite, champ de betteraves à gauche, champ de patates à droite, champ de betteraves à gauche etc... On a donc fait une petite virée sympathique dans le Santerre, c\'était tellement sympa qu\'on s\'est perdu à un moment ! Le père de Floris ne s\'inquiétait pas puisqu\'il y avait la gare en face (gare de Chaulnes). Malheureusement c\'est une gare où aucun plan ne figurait …. Bon c\'est pas un problème : il est 8h28 et on est juste à côté de Puzeaux mais les panneaux de direction n\'affichent que 3 villes : Amiens – Roye – Compiègne. Avec ça, on va aller loin ! Notre chauffeur sort donc son netbook avec sa clé 3G mais bercés par une radio dont j\'ai oublié le nom, qui passait en boucle de la guinguette, on a vite déprimé ! A 8h45 on était toujours sur le portail Orange du netbook, bah oui on capte déjà pas la radio, alors internet ! En plus la ville était déserte et puis les habitants peu fréquents ! J\'ai donc appelé ma mère, la situation devenait critique et en 1 minute on a su que Puzeaux se situait à 2,3km de notre position ! Demi-tour, puis on tourne à droite et on avait juste à suivre la route lorsque Paul nous a dit qu\'on allait jouer là (dans un chalet). Comique le Paulo, ceci dit quand on a vu l\'allure de la salle polyvalente (aussi appelée salle des fêtes) j\'me suis demandé si j\'aurais pas préféré le chalet...
        Mais bon on était arrivé c\'est le principal ! 44% des licenciés à Puzeaux étaient présents ! 
        OK y\'avait que 4 joueurs mais 44% quand même, ils ne sont que 9 dans le club !
        Bon pas de vestiaires, pas de chaises, enfin si, des chaises y\'en avait, 178 au total d\'ailleurs mais elles étaient toutes rangées sur l\'estrade ! Alors on s\'est vite changé ; Floris et Paul ont commencé à s\'entrainer et j\'ai rempli la feuille de match... 9-9-7-5, c\'est ce qui nous attendait... La salle était carrelée, donc glissante et on a tous ressenti la même chose : les raquettes n\'accrochent pas ! Ça devait être l\'air du Santerre... Sur 2 pans de mur, 2 paysages de 2m sur 2m environ avec la nature (pour changer) et une autre avec la montagne et un ruisseau ! Amusant...
        Bon il était déjà 8h50 lorsque nous sommes arrivés, 9h00 maintenant et on lance les matchs :

        COMPOSITION de Puzeaux AAE 1:
        VASSEUR Claude 951pts
        BRUYER Patrick 959pts
        VASSEUR Romuald 500pts
        POTIER Laurent 798pts

        Chez nous : Jeoffrey en 1er, Floris en 2ème et Paul en 3ème.

        On commence bien, avec 3 victoires d\'entrée de match : celle de Jeoffrey contre Claude, Floris contre Patrick et Paul contre Romuald.
        Ensuite Puzeaux marque 2 points avec notre absence et la défaite de Floris contre Claude.
        2 nouvelles victoires Amiénoises : celle de Paul contre Laurent et Jeoffrey contre Patrick.
        L\'absent offre un point à Puzeaux.
        On mène déjà 5-3 juste avant les doubles, ce qui est plutôt pas 
        mal ! Pour les doubles, il y a 15 jours, on avait essayé Floris et Jeoffrey mais ça n\'avait pas marché alors aujourd\'hui on change : ce sera Floris et Paul, le duo de choc !
        Malheureusement ça n\'a pas payé puisqu\'ils s\'inclinent 11-8/11-8 et 11-2. Mais leurs adversaires étaient mieux préparés.
        5-5 après les doubles, on rigole un peu moins mais après la victoire de Jeoffrey contre Laurent et celle de Floris contre Romuald, on reprend confiance ! Pas longtemps puisque Paul s\'incline face à Patrick et l\'absent offre un nouveau point. 
        Retour à la case départ... 7 partout ! 
        J\'ai dit à Paul et Floris qu\'il fallait gagner les 3 derniers matchs puisque Puzeaux commençait à se montrer moins fair-play...ils venaient de faire une 3ème erreur de score sur la feuille de match, qui aurait pu leur rapporter 3 points ! Mais bon... Jeoffrey gagne contre Romuald et Floris gagne lui aussi contre Laurent : 9 à 7 ! Enfin 9 à 8 avec l\'absent, tout se joue donc sur le dernier match c\'est-à-dire Paul contre Claude. Mais Paul l\'emporte 3 sets à 1 sur peut-être le plus beau match de la journée... On termine donc 10 à 8 pour Amiens ! 

        Bilan : 
        Jeoffrey : 4
        Floris : 3
        Paul : 3
        Absent absent : 0

        Une nouvelle victoire pour notre petite équipe qui nous permet de clôturer en beauté cette 1ère phase puisque nous finissons 4ème de poule avec 3 victoires, 2 nuls et 2 défaites ! Malheureusement pour nos adversaires car Puzeaux descend en D3...
        Aujourd\'hui c\'était une nouvelle recette : on visite les fins fonds de la Picardie, on joue à 3, on gagne et on finit 1h plus tôt que d\'habitude !

        Jeoffrey Stéphan'),
        array('id' => '144','equipe' => '9','journee' => '7','date' => '1323561600','lieu' => 'Amiens','adversaire' => 'AAE FORT MAHON 1','score' => '8','score_adv' => '10','commentaire' => ''),
        array('id' => '145','equipe' => '10','journee' => '7','date' => '1323561600','lieu' => '/','adversaire' => 'Exempt','score' => '18','score_adv' => '0','commentaire' => ''),
        array('id' => '146','equipe' => '11','journee' => '7','date' => '1323561600','lieu' => 'Roye','adversaire' => 'ROYE PPC 6','score' => '10','score_adv' => '8','commentaire' => ''),
        array('id' => '147','equipe' => '12','journee' => '7','date' => '1323388800','lieu' => 'Amiens','adversaire' => 'ST SAUFLIEU ASL 1','score' => '5','score_adv' => '13','commentaire' => ''),
        array('id' => '149','equipe' => '3','journee' => '7','date' => '1323907200','lieu' => 'Amiens','adversaire' => 'Bilan de la 1ère phase','score' => '0','score_adv' => '0','commentaire' => 'Le bilan de la phase

        Une phase Unbelievable, Amazing, I’m so glad!!!. Oui, moi aussi j’aime beaucoup regarder les actrices américaines lors de la cérémonie des Oscars.

        Arnaud SELLIER m’aurait dit au mois de septembre qu’on finirait 3ème de R1, j’aurais appelé le Procureur de la République pour le faire interner et déclencher son Placement d’Office. Arnaud serait actuellement encore en Quartier de Haute Sécurité, enchaîné, attendant sa lobotomie.
        Mais on a effectivement fini 3ème. Et en plus, au goal-average (premiers ex aequo avec Breteuil et Compiègne aux points). Et c’est toute l’équipe qui va être internée. A part Christian ; ne mélangeons pas travail et loisir. Car on avait fini par y croire.

        L’équipe n’aura raté la montée que d’un set. Et rétrospectivement vraiment plus contre Breteuil que contre Compiègne (10/9 pour nous, les gentils, et 2 sets partout dans l’ultime match). Dommage. Presque. Ce sont les méchants qui montent.

        Car maintenant la deuxième phase s’annonce quand même très très compliquée…

        Les satisfactions
        - Une phase stratosphérique avec 5 victoires (Clermont, Villers Saint Paul, Breteuil 2, Abbeville, Saint Quentin), 1 nul (Breteuil 1), et seulement 1 défaite (Compiègne).
        - On finit invaincu en A. Juste un nul sur les compiégnois. Mais non. On avait dit qu’on ne parlerait plus du match contre Compiègne.
        - On finit invaincu en double en A. Avec Pierre et Denis, les Igor et Grichka BOGDANOV de la R1.
        - J’aurais bien aimé écrire la même chose pour la B.
        - On a lancé la carrière d’Antoine HUON. Un jour, au coin du feu, interviewé par Gérard HOLTZ, devant ses coupes et médailles de Champion Olympique et de Champion du Monde, il se souviendra de nous et de cette saison en R1.
        Nota bene : J’ai peut-être eu une absence, mais je n’ai pas vu beaucoup d’équipes picardes de R1 intégrer un cadet 1ère année, classé 12. Notamment sur les matchs de montée.

        Le bilan des dix fantastiques

        En A

        Cédric HERMANT (71% de victoires): Plus fort que Sylvester STALLONE dans Rocky IV. Plus endurant que Mickey ROURKE dans The Wrestler. A encore haussé son niveau de jeu dans le money time, notamment sur les 3 dernières rencontres. Maillekeul JORDAN n’aurait pas fait mieux. A malheureusement raté son dernier panier à 3 points contre Compiègne.

        Denis CHATELAIN (83% de victoires) : A attendu le dernier set du dernier match de la dernière rencontre pour effectuer sa première contre de la phase. En plus sur le match de montée. La réaction du champion.

        Pierre LE GALLOUDEC (33% de victoires) : Arrivé depuis peu en Picardie. Et déjà de nombreux amis sur Facebook, et dans les clubs britulien et abbevillois. Pense également se présenter aux présidentielles de 2012. Un score de 33% et il sera au second tour.
        En B

        Christian HENON (76% de victoires) : Victime d’un accident vasculaire cérébral juste avant que ne débute le championnat. Seule la zone du lobe frontal antérieur droit a été atteinte. Elle commandait malheureusement l’orientation temporo-spatiale, et devait le guider de chez lui à la salle d’entraînement. Il aurait atteint 100% de victoires en première phase. Pas intéressant. Préfère se laisser un challenge pour la seconde phase.

        Philippe L’HOTE (50% de victoires) : Victime également d’une congestion cérébrale, mais lui, juste avant que ne débute les gros matchs sur les clubs du Top four. La zone du lobe temporal gauche a été atteinte. Dommage, elle commandait la mobilité du bras droit. Il s’est atrophié à partir du match contre Abbeville. Le syndrome du petit bras. Ou syndrome de L’HOTE, caractérisé par une courte moyenne de 1 victoire par rencontre. Monsieur L’HOTE fait toujours les choses à moitié : 50% de victoires, 50% de de perf, 50% de contres.

        Antoine HUON (22% de victoires): Un dur apprentissage. Mais la R1 c’est l’école de la vie. A condition d’en sortir. Encore souvent en mode Caliméro. Mais ne tardera pas à briser sa coquille pour élever encore son niveau de jeu. Et s’envoler vers des sphères équipières plus élevées.

        Les remplaçants

        Christophe HARLE et Jean TAQUET en A (100% de victoires) ; Bruno MARYSSE en B et Vincent RASSELET en A (66% de victoires) : Les prendre dans ton équipe c’est un peu comme les grands films d’action américains. Ça castagne, ça pulse, ça explose. Et à la fin ce sont toujours les gentils qui gagnent.

        Denis CHATELAIN '),
        array('id' => '150','equipe' => '13','journee' => '8','date' => '1327104000','lieu' => 'Amiens','adversaire' => 'ENT SOTTEVILLE / VAUDREUIL1','score' => '10','score_adv' => '4','commentaire' => 'Après une première phase compliquée en N2 où nous avons comptabilisé que des défaites, cette première journée en N3 était cruciale pour le moral des troupes.

        Compositions des équipes :

        SOTTEVILLE : TANGUY Marie-Christine, 13, BOUTEILLER Carine, 12, CHAUVRIS Célia, 11 et NGUYEN TAM TRUE Claudine, 11.

        AMIENS : PETITPREZ Caroline, 14, CARLIE Hélène, 14, GRUGEON Charline, 12 et FLAHAUT Julia, 9.

        La semaine fût très compliquée pour les joueuses amiénoises... Julia blessée au genou, Caroline au doigt, Charline à l\'oeil et Hélène au poignet !! Une équipe d\'éclopée 
        mais très motivée donc on y croyait !

        Charline (2 victoires, 1 défaite) : Charline commence par une belle perf face à TANGUY 3-0 (10/7/12). Ensuite, elle bat BOUTEILLER 3-1 (-10/4/9/11) puis s\'effondre totalement sur NGUYEN TAM TRUE avec un gros manque de concentration, défaite 3-0 (-6/-3/-7).

        Caroline (3 victoires, 1 défaite) : Caroline remporte facilement ses deux premiers matchs contre CHAUVRIS (7/6/7) et contre NGUYEN TAM TRUE 3-0 (4/3/6). Après les doubles, match plus compliqué face à BOUTEILLER mais Caro n\'a rien lâché et s\'impose 3-2 (-9/12/-4/6/8) puis pour son dernier match, manque de concentration et de  sérénité, elle perd face à TANGUY 3-0 (-8/-10/-6).

        Julia (1 victoire, 2 défaites) : Julia s\'incline sur BOUTEILLER 3-0 (-4/-3/-8) et sur TANGUY 3-0 (-8/-4/-6). Ensuite, superbe perf face à CHAUVRIS 3-1 (-9/11/9/4) avec à la fin du match une altercation d\'anthologie... Mademoiselle CHAUVRIS n\'a pas apprécié la SEULE balle volée à 8-8 au 3ème set et a pété un plomb "que de la moule" ; réplique de Julia "tu ne vas pas me faire un sketch pour qu\'une balle volée !!".

        Hélène (3 victoires) : je bas facilement NGUYEN TAM TRUE 3-0 (6/7/5) puis CHAUVRIS 3-1 (9/3/-9/8). Juste après les doubles, match Corre-sé face à TANGUY mais j\'ai bien su gérer mon match ; victoire 3-2 (-7/3/-9/11/5).

        Caroline et Charline remportent leur double 3-2 face à CHAUVRIS et TANGUY (6/-8/-2/9/9) mais que d\'erreurs... Les filles arrêtées de frapper sur des balles coupées ou de viser l\'affiche "SOMME"......

        Julia et Hélène perdent 3-1 contre NGUYEN TAM TRUE et BOUTEILLER (-6/-6/8/-8) mais pour un premier double ensemble c\'est pas mal... il y a du potentiel !

        Nous gagnons ce match 10-4. Nous renouons avec la victoire... Quelle sensation étrange pour cette équipe !

        Et merrrci aux supporterrrs pourrr les encourrragements.

        Hélène CARLIE.'),
        array('id' => '151','equipe' => '14','journee' => '8','date' => '1327104000','lieu' => 'Amiens','adversaire' => 'MSNA MULTI SMAS 1','score' => '6','score_adv' => '10','commentaire' => 'Pour cette seconde phase, les équipes ont été quelque peu modifiées. Notre équipe se compose maintenant de BERTHELOT Marion, 10, NEEL Aurélie, 9, GUICHARD Delphine, 8 et HURE Léa, 6.
        CARLIE Hélène est montée dans l\'équipe au-dessus mais reste titulaire de la notre pour les résumés.

        Nous avons reçu l\'équipe de St Nicolas qui se composée de BOSSOREIL FONTAINE Pascale, 12, RENIER Elizabeth, 10, LANGLOIS Pascale, 9 et LEFEVRE Célia, 6.

        Marion (3 victoires, 1 défaite) : Marion remporte facilement ses deux premiers matchs sur LANGLOIS 3-0 (6/7/7) et sur LEFEVRE 3-0 (6/3/9). Pour son match sur RENIER, Marion fait une superbe remontée. Alors qu\'elle est menée 2 sets à 0, elle finit par s\'imposer 3-2 (-12/-8/8/9/5). Seule défaite de Marion aujourd\'hui face à BOSSOREIL FONTAINE 3-0 (-5/-9/-10).

        Aurélie (2 victoires, 2 défaites) : Aurélie s\'impose aisément face à LEFEVRE 3-0 (5/5/6) qui lui a gentiment offert le premier set : sur 8 services, elle en rate 7... et contre LANGLOIS 3-0 (8/7/11). Ensuite, Aurélie s\'incline face à BOSSOREIL FONTAINE 3-0 (-11/-5/-9) et perd également sur RENIER 3-2 après un très beau match (-8/7/7/-2/-7)

        Marion et Aurélie perdent leur double 3-1 contre BOSSOREIL FONTAINE et RENIER (-9/10/-5/-4).

        Léa (4 défaites) : Léa s\'accroche toujours mais cette journée fût compliquée. Elle s\'incline 3-0 contre BOSSOREIL FONTAINE (-1/-2/-4), 3-1 face à RENIER (-5/9/-5/-3), 3-1 sur LEFEVRE (-3/-2/8/-6) puis 3-0 contre LANGLOIS (-11/-3/-2). Courage Léa !

        Delphine (1 victoire, 2 défaites) : Delphine perd sur RENIER 3-0 (-6/-7/-9), sur BOSSOREIL FONTAINE 3-0 (-9/-5/-8) et gagne son dernier match 3-0 face à LANGLOIS (3/11/4).

        Dommage pour le double de Léa et Delphine ! Elles s\'inclinent 3-2 face à LANGLOIS et LEFEVRE (-7/8/-7/8/-5).

        Score final du match : 10-6 pour St Nicolas.

        Rendez-vous la semaine prochaine pour un gros déplacement à Equeur !

        Hélène CARLIE.'),
        array('id' => '152','equipe' => '15','journee' => '8','date' => '1327104000','lieu' => 'Dreuil','adversaire' => 'DREUIL TT 1','score' => '13','score_adv' => '5','commentaire' => ''),
        array('id' => '153','equipe' => '16','journee' => '8','date' => '1327104000','lieu' => 'Amiens','adversaire' => 'VILLERS-BRETONNEUX PPC 1','score' => '15','score_adv' => '3','commentaire' => ''),
        array('id' => '154','equipe' => '17','journee' => '8','date' => '1327104000','lieu' => 'Montdidier','adversaire' => 'MONTDIDIER PPC 2','score' => '15','score_adv' => '3','commentaire' => ''),
        array('id' => '155','equipe' => '1','journee' => '8','date' => '1327104000','lieu' => 'Amiens','adversaire' => 'LILLE CHEMINOTS 1','score' => '11','score_adv' => '5','commentaire' => 'La journée des 1ères…….

        21 janvier 2012 ( 335 jours avant la « fin du monde ») , reprise du championnat pour l’équipe amiénoise en ………………………..  Nationale 3, ( il faut remonter à l’époque des Beegees, les « vrais » pour revoir l’équipe 1 à ce niveau). 

        Comme d’habitude l’heure de rendez-vous donnée par JAJA était de 15H et bien sûr nous arrivâmes à ………………………….. pas à cette heure là en tout cas (enfin surtout pour Yoyo )

        15H30 l’heure pour captain JAJA de mobiliser ses troupes et de décider de la composition d’équipe ( le ping c’est tactique… oui monsieur, enfin pour Vaquero et Dub un peu moins, d’après ce que  j’ai entendu de la part de nos amis de l’autre N3 ! j’en connais qui ont dû se faire fesser à l’heure où je vous parle…. Mais cela ne nous regarde pas. 

        Un peu plus tard, nous vîmes arriver en gare amiénoise (à la salle quoi !!) l’équipe des cheminots de Lille.

        Une quinzaine de minutes plus tard, un collègue de la R1 passa à coté de nous (indice : quand il s’entraine 2 fois de suite on dit que c’est un exploit… Hé OUI ( big indice là encore dans les 2 derniers mots  pour ceux qui ont du mal !! ) ). Voyant la corpulence de certains dans l’équipe adverse, il me murmura «  je préfère être 18 avec un corps comme le mien c\'est à dire  pas mal quoi, que d’être 600 ou 700 et être costaud comme eux. C’est sûr qu’avec ce qu’il à vu, ca ne va pas le forcer à venir s’entrainer….. ah jte jure saperlipopette !!!

        BREF, 2012 fin du monde peut-être (mais nous en avions décidé autrement)		  
        Enfin plus de lumière à la salle Albéric Labaume (petite dédicace à Aurélie). 
        Et oui, il faut bien que ça commence quelque part. 

        Compositions :
        Equipe Amiénoise (les TGV)
        A : MARAIS Yannick (n°192), LECOMTE Yohan (19), PLOTUNA Malin (n°200)
        B : CORRE Cédric (n°280), HAIGNERE Alexandre (19), BLATRIX Maxime (18)

        Equipe Lilloise (les RER)
        A : PLYWACZ Arnaud (20), SLEMBROUCK Lucas (n°672), MOREELS Olivier (n°470)
        B : MOREELS Laurent (n°781), THIEULEUX Philippe (n°821), CLAEYS Timothee (20)

        Détails :

        MARAIS Yannick (2/2) : comme l’exercice d’échauffement, 2 Cd puis 2 Revers et plus de bonhommes........en face. S’est légèrement fait peur sur SLEMBROUCK en allant à la belle mais ‘no soucy’ le JAJA a géré, avec un petit peu d’essoufflement à la fin, mais ce n’est qu’une reprise. Voila comment jouer 200 avec quasiment pas d’entrainement depuis des années… RESPECT y’a du talent quand même. S’il y avait un statut FACEBOOK Denis « aimerait » ça.

        PLOTUNA Malin (3/3) : alors on essaiera de ne pas écrire trop de choses sur Malin… promis. De toute façon il n’y a rien à dire tellement le rouleau compresseur à écraser tout sur son passage. Il s’est même offert le luxe de mettre une « bulle » à notre adversaire SLEMBROUCK dans le dernier set….  c’est fort et c’est beau…la team likes this !

        LECOMTE Yohan (1/2) : l’heure de la victoire a sonné, après une 1ère phase complètement fanny ! D’entrée notre YOYO national (3) s’impose en 3 sets face à SLEMBROUCK où il réalisa le match quasi parfait, pleins de tops, de contre-tops, de services gagnants et de fight (1er match gagné en national c’est beau !!). Lors de son second match face à MOREELS il s’incline en 4 sets serrés en faisant là aussi un très bon match. BREF, un très bon niveau de jeu pour Yohan tout au long de la journée.

        CORRE Cédric (3/3) : Cédric remporte ses trois matchs en gérant parfaitement le fait de jouer toutes les 1H30. Prix du mérite pour avoir joué avec Alexandre en double où il a essayé de combler les « lacunes » de son coéquipier. Finalement le fait d’avoir travaillé ton swing au golf  t’a grandement servi pour sentir la boule au long des rencontres. On en veut ‘encore’.

        HAIGNERE Alexandre (0/2) : s’incline d’entrée 3/0 face à CLAEYS en menant 5-1 puis 6-3 au premier et troisième set. A fait un double assez catastrophique et pour continuer sur sa lancée s’incline également en 3 sets face à MOREELS. BREF, ça reflète un peu la saison… dit-il, mais s’il arrive à garder le sérieux comme à l’entrainement je suis sûr que là nous aurons un autre fighter…. J’en prend le PARI (à bon entendeur DENIS). Le meilleur est à venir biloute et non ‘biroute’ !

        BLATRIX Maxime (1/2) : Merci à Max la menace d’être venu remplacer Denis. Max s’incline en 5 sets face à MOREELS puis s’impose en 5 sets face à THIEULEUX alors que le score général de la rencontre était encore serré (7/5). Bonne journée pour lui avec une belle perf à la clé… Bravo.

        Au final :
        Le compte à rebours est lancé avec cette 1ère victoire de la TEAM ainsi que celle de Yohan… il a dû prendre cher à la fin de la rencontre dans les douches… mais ceci bien sûr ne nous regarde pas !!

        Alexandre Haigneré et Yohan Lecomte'),
        array('id' => '156','equipe' => '2','journee' => '8','date' => '1327104000','lieu' => 'Saint-Divy','adversaire' => 'SAINT DIVY SPORT 1','score' => '10','score_adv' => '10','commentaire' => 'Pour le 1er stage commando J8, la section ASTT 2 était composée de :

        Captain\' Dudu assisté du Lieutenant Chatelain 1er du nom, des Aspirants Rasselet et Chatelain Jr, accompagnés des valeureux Soldats Dubois et Vaquero.
        Je sais pas vraiment si c\'était la "Dream Team" mais en tout cas c\'était "petite mine" en ce samedi 8h, au QG de l\'ASTT (Petit dossier de presse pour immortaliser le voyage : http://www.casimages.com/galerie.php?id=226171h84702)

        Direction St-Divy, 7h de mini bus que demander de plus !
        Du brouillard et de la pluie tout le trajet ou presque, seul sur le pont magique on aura eu du répit.
        On était dans le gaz, mais on avait une équipe de joyeux lurons.
        Arrêt Total pour recharger le char de guerre Amiénois, et arrêt Mc Do pour remplir les réservoirs des soldats.
        Et si t\'as des Sandwichs "Tu les manges trou de nez". Dub\' like this ;)
        Petite escale à l\'hôtel Brestois, pour que Lucas puisse gentiment déposer ses doudou, il en a toute une valise,  puis direction les bois.
        Perdu en pleine forêt, la salle de ping se cachait dans un bunker, l\'assaut est lancé.
        Ca sentait le traquenard à plein nez. Vestiaire de 8m² et douche froide pour bien débuter.
        Première surprise de la journée sur la compo en nôtre faveur.
        Captain\' Dudu toujours en grande forme place ses soldats sur le champ de bataille.

        Le Commando Amiénois:
        En A : CHATELAIN Raphaël (N836/2099), HARLE Christophe (N595/2180), DUBOIS	Lucas (17/1710)

        En B : CHATELAIN Denis (N879/2089), RASSELET Vincent (18/1885), VAQUIER	 Benoit (15/1583)

        Les irréductibles Bretons:
        En A : DAVID Pierre (N835/2100), LE GOURIELLEC Anthony (18/1890), LE MARC Clément (N382/2292)

        En B : MORVAN	Quentin	 (19/1974), GREGORI	Philippe	 (20/2002), BEUGIN Baptiste (18/1873)

        1-1 / 3-1

        Puis le fabuleux set de Vaquero sur Morvan, pour animer la salle 25-23, avec une gestion du temps mort magique, puis une fin de match tragique.

        Le Marc ramène le score à 3-3.

        7-4 pour Amiens grâce à la team Chatelain.

        9-8 pour Amiens avec en Prime time le show Dubois-Vaquero, un suspens époustoufflant, de l\'action, de l\'émotion, des dialogues à couper le souffle, de la soufrance, du rire et des larmes.
        Deux prestations de haut niveau pour deux athlètes dans leur bulle. Malheureusement, ils n\'auront pas réussi à décrocher le dixième.

        Après l\'euphorie de la doublette des "bulleman", Vince se retrouve à jouer le dernier match face à un Beugin accrocheur.

        Et mené 2-0, il réussit finalement à l\'emporter pour offrir le match nul. J\'vous cache pas qu\'à 2-0 ça sentait plus ambiance "les petits mouchoirs" que : http://www.youtube.com/watch?v=rCN4BS-jCws

        Bref on a fait nul. On s\'en sort bien, on prend 1 point pour le maintien

        Dub\' : (0V ) S\'est fait ouvrir par David tel Goliath, s\'est fait découper par Le Marc comme un bucheron coupe du bois. Puis aura mené et resisté face à Le Gouriellec, mais n\'aura pas réussi à conclure pour le mettre le 10ème. Un point qui aurait fait du bien au moral, mais bon avec l\'expérience ça viendra.

        Raph\' : (2V + D) Victoire facile sur le 18, puis s\'incline en 3 sets sérrés face au N382. N\'aura pas réussi à lui Marcer un set, dommage. S\'impose enfin face à David à la belle, après avoir mené 2-0 pour la petite perf qui fallait.

        Dudu :  (2V +D) Facile sur Gouriellec et David, il s\'incline à la belle sur Le Marc. Aura néamoins avalé les kms comme il enchaine les biquettes.

        Vaquero : (0V ) Après un entame exceptionelle sur le morveux Morvan 25-23 au 1er set, plus un top (sur la table) ... Puis plus un mot, et un bon niveau de jeu, jusqu\'à ses 2 balles de gratte en sa défaveur à 8-8 à la belle sur Beugin. Enfin un pti manque d\'expérience face à Gregori, ou il s\'incline une nouvelle fois à la belle à 9-8 pour Amiens.

        Deudeuch\' : (2V + D) Facile sur Beugin, puis sur Gregori ou il s\'impose par deux fois 3-0, et malheureusement un peu moins sur Morvan ou il s\'incline 3-1. Aura secondé Dudu aux commandes de l\'opération Divyne.

        Vince : (2V + D) S\'impose face à Gregori à la belle pour inscrire le premier point, et conclu à la belle face à Beugin pour inscrire le dernier, synonyme de match nul. Entre les deux... rien. s\'est pris une grosse race face à Morvan.

        Les deux doubles sont remportés 3-0 par Christophe et Raphaël et A et Denis et Vincent en B. Deux doubles qui font énormément de bien !

        Sur le chemin du retour, on a essayé de convertir Denis à la Raggatitude. Il a bien aimé les chansons douces de petit Benito : http://www.youtube.com/watch?v=kUjqkO9YbFY

        Sisi ça marche Benoit s\'endort tous les soirs avec !

        Un grand merci à Christophe et Denis pour le resto, et de s\'être tapé la route, pour récolter un match nul.
        Qui est un bon point de pris pour le maintien !

        Vincent Rasselet'),
        array('id' => '157','equipe' => '3','journee' => '8','date' => '1327104000','lieu' => 'Amiens','adversaire' => 'LONGUEILLOIS TT 1','score' => '4','score_adv' => '16','commentaire' => 'En A : Amiens 2 / Longueuil 8

        Christian HENON (1784 points) (1 victoire en A) : bat Michel TROCHUT (1842 points) (-9,7,5,6) et perd Cyril LEGRAND (2122 points, n°759) (-4,7,-7,-7), et Guillaume ROY (1730 points) (8,-4,-4,-10).
        Philippe L’HOTE (1792 points) (0 victoire en A) : perd Cyril LEGRAND (2122 points, n°759) (12,-3,11,-5,-6), Michel TROCHUT (1842 points) (5,-10,-8,-5) et Guillaume ROY (1730 points) (-11,11,-8,-5)
        Pierre LE GALLOUDEC (1784 points) (1 victoire en A) : bat Guillaume ROY (1730 points) (4,8,-8,-6,9) et perd Cyril LEGRAND (2122 points, n°759) (-4,11,-9,-8) et Michel TROCHUT (1842 points) (-7,-8,-3). 
        Double : Pierre et Christian perdent Cyril et Guillaume (10,-9,-7,-7).

        En B : Bertrand 2 / Longueuil 8
        Bertrand BATHELOT (1705 points) (2 victoires en B) : bat Cédric LEGRAND (1768 points) (8,11,7) et Peter TRIART (1629 points) (6,6-11,7) et perd Cyrille LEGRIS (1760 points) (-7,4,11,-5,-8).
        Bruno MARYSSE (1751 points (0 victoire en B) : perd Cyrille LEGRIS (1760 points) (11,-7,5,-5,-10), Cédric LEGRAND (1768 points) (8,-9,8,-8,-10) et Peter TRIART (1629 points) (-8,-8,-11).
        Antoine HUON (1349 points) (0 victoire en B) : perd Cyrille LEGRIS (1760 points) (-11,8,-10,9,-7), Cédric LEGRAND (1768 points) (-7,9,9,-8,-3) et Peter TRIART (1629 points) (-11,-10,8,11,-7).
        Double : Bertrand et Bruno perdent Cyrille et Cedric (-12,8,-9,-8).'),
        array('id' => '158','equipe' => '4','journee' => '8','date' => '1327104000','lieu' => 'Breteuil','adversaire' => 'WAVIGNIES / BRETEUIL 2','score' => '3','score_adv' => '17','commentaire' => 'AAE WAVIGNIES BRETEUIL 2

        En A : 
        ROBINET Aurélien (1752), KAPELA Fabien (1706), HERSENT Christophe (1715)
        En B :
        DESCAMPEAUX Olivier (1709), MENARD Guillaume (1666), AMBEZA Fabien (1608)

        AMIENS STT 4

        En A :
        BERIAT Leny (1480), POULAIN Jean-Paul (1350), HERLY François (1583)
        En B : 
        VANDEWOESTYNE Louis (1469), DEGUINGAND Andrei (1166), LEFEVRE Loïc (1429)

        Pour le tableau A, vraiment pas grand chose à dire avec une domination incontestable de nos adversaires. Une grosse raclée 10-0 très dur à encaisser.

        Il faut regarder en B pour voir quelques exploits avec trois perfs pour les jeunes pousses Amiènoise, deux pour Louis (homme du match) et une pour Loïc. Un tableau B qui s\'incline 7-3. 

        BERRIAT Leny : L\'homme fort de notre B en première phase de R3, Leny contraint de jouer en A est passé à coté de sa rencontre. Il s \'incline malheureusement en 3 sets sur ces 3 matchs.

        POULAIN Jean-Paul : Même constat pour Mister Poulain, le chiffre « 3 » était à l\'honneur cette après midi avec 3 défaites en 3 sets.

        HERLY François : Le capitaine d\'un jour n\'a pas su gérer ces fins de sets avec deux belles perdues sur Kapela et Hersent. Dommage !

        VANDEWOESTYNE Louis : Sans conteste l\'homme du match avec deux très belles perfs sur Menard 12-10 au cinquième et sur Ambeza en trois sets. Le style marcel blanc, boxer et chaussure orange un cocktail gagnant.

        DEGUINGAND Andrei : Rencontre difficile au vu des classements de nos adversaires, cependant Andrei n\'a pas démérité avec deux défaites en 4 sets sur Ambeza et Descampeaux.

        LEFEVRE Loïc : Loïc s\'impose facilement en début de rencontre sur Ambeza puis continu sur sa lancée en poussant Descampeaux au cinquième set (défaite 11-08). 

        François HERLY'),
        array('id' => '159','equipe' => '5','journee' => '8','date' => '1327190400','lieu' => 'Amiens','adversaire' => 'CHOISY AU BAC CTT 2','score' => '9','score_adv' => '11','commentaire' => ''),
        array('id' => '160','equipe' => '6','journee' => '8','date' => '1327190400','lieu' => 'Doullens','adversaire' => 'DOULLENS / BERNAVILLE 1','score' => '7','score_adv' => '13','commentaire' => ''),
        array('id' => '161','equipe' => '7','journee' => '8','date' => '1327190400','lieu' => 'Longueau','adversaire' => 'LONGUEAU ESC 2','score' => '5','score_adv' => '15','commentaire' => ''),
        array('id' => '162','equipe' => '8','journee' => '8','date' => '1327190400','lieu' => 'Saint Valery','adversaire' => 'ASTT ST VALERY 1','score' => '10','score_adv' => '8','commentaire' => 'Dimanche 22 janvier,

        Ce matin c\'est la reprise ! Pour une reprise c\'est une reprise, rendez-vous fixé à 7h25 à la salle pour se déplacer à Saint-Valery-sur-Somme, le plus long déplacement de cette seconde phase ! L\'objectif est de monter, comme convenu lors de la réunion, donc aujourd\'hui il fallait gagner même si on ne partait pas gagnant sur le papier ! On part donc à 7h35 après que tout le monde a embarqué avec le père de Floris, notre conducteur du jour. On est arrivé à 8h30 à St-Valery mais il nous a fallu 20 minutes pour trouver la salle malgré les indications de 3 passants ; les panneaux étaient plutôt introuvables ! Enfin on trouve le gymnase avec des chauffages qui étaient encore plus bruyants qu\'à Béthencourt ! Pendant que l\'équipe, qu\'on ne présente plus, formée de Paul, Floris et Benoît s\'échauffe, je remplis la feuille de match. Nos adversaires ont gardé le suspense en cachant leur composition d\'équipe, mais finalement ils ont levé le rideau à 9h00 et on a pu lire : 10-10-10-5.

        J\'avais prévenu dans la voiture que St-Valery pourrait mettre 10-10-10-10 mais ils ont préféré un 5 qui a certainement changé le cours de la rencontre...

        COMPOSITION de ASTT ST Valéry 1:
        GALLE Jocelyn 1070pts
        VALLOIS Charles-Paul 1016pts
        LAMOUR Franck 1036pts
        LAMOUR Antoine 500pts

        Chez nous : Jeoffrey en 1er, Floris en 2ème, Paul en 3ème et Benoît en 4ème.

        On commence fort avec une belle victoire de Jeoffrey contre Jocelyn en 5 sets après un match serré (17-15 au 2è set), celle de Floris contre Charles-Paul en 3 sets, celle de Benoît contre Antoine en 3 sets et une défaite de Paul contre Franck en 5 sets. On continue sur notre lancée avec 3 nouvelles victoires : Floris contre Jocelyn 3-1 (qui fait une bonne reprise avec une perf à 140pts), Jeoffrey contre Charles-Paul 3-1 et Paul contre Antoine.

        3-0. Une défaite tout de même de Benoît contre Franck en 3 sets et Amiens mène 6-2 avant les doubles. Pour les doubles on a refait les mêmes compos c\'est-à-dire Floris et Paul d\'un côté, Benoît et Jeoffrey de l\'autre.

        Floris et Paul gagnent en 4 sets contre Jocelyn et Charles-Paul.
        Jeoffrey et Benoît en 4 sets également contre Antoine et Franck.
        Très content de ces doubles gagnés qui ont été décisifs aujourd\'hui et des automatismes entre chaque double qui se met bien en place !

        … 8-2 on ne pouvait pas rêver mieux !

        Pourtant on va très vite se faire rattraper malgré la victoire de Jeoffrey contre Antoine en 3 sets ; Floris perd contre Franck, Benoît contre Jocelyn et Paul contre Charles-Paul, tout le monde en 3 sets ! L\'égalité est assurée mais la victoire de Floris contre Antoine en 4 sets nous amène à 10 points, synonyme de victoire. 

        3 défaites vont s\'ensuivre : Benoît contre Charles-Paul, Jeoffrey contre Franck et Paul contre Jocelyn, en 3 sets pour chacun encore une fois !

        Bilan : 
        Jeoffrey : 3 + double
        Floris : 3 + double
        Paul : 1 + double
        Benoît : 1 + double

        Première victoire de la 2ème phase qui était obligatoire pour la montée, malgré la remontée au score de nos adversaires en fin de rencontre, il faudra rester concentrés jusqu\'au bout... La semaine prochaine on jouera contre Bouzincourt, les plus forts de la poule où un renfort sera nécessaire à mon avis...

        Jeoffrey Stéphan'),
        array('id' => '163','equipe' => '9','journee' => '8','date' => '1327190400','lieu' => 'Amiens','adversaire' => 'BOUZINCOURT PPC 2','score' => '11','score_adv' => '7','commentaire' => ''),
        array('id' => '164','equipe' => '10','journee' => '8','date' => '1327190400','lieu' => 'Doullens','adversaire' => 'DOULLENS / BERNAVILLE 6','score' => '9','score_adv' => '9','commentaire' => ''),
        array('id' => '165','equipe' => '11','journee' => '8','date' => '1327190400','lieu' => 'Amiens','adversaire' => 'COMBLES FR 1','score' => '15','score_adv' => '3','commentaire' => 'Match à domicile, nous accueillons Combles FR 1 :
        FRERE Jérome 991 pts
        POTELLE Bruno 619 pts
        VERCRUYSSE Rémy 560 pts
        LOBBENS Samuel 500 pts

        Amiens stt 11 :
        BOUTEILLER Hugo 899 pts
        HAUW Joffrey 706 pts
        BEAUFRERE Florian 693 pts
        WALLON Enguerrand 625 pts

        Déroulement des matchs :

        Jérome bat Hugo 8-11 11-8 12-10 11-7
        Joffrey bat Rémy 11-5 11-8 11-3
        Florian bat Bruno 11-5 13-11 8-11 11-9
        Enguerrand bat Samuel 12-14 11-6 13-11 11-5

        Hugo bat Rémy 11-4 11-8 11-6
        Jérome bat Joffrey 11-5 11-5 11-5
        Enguerrand bat bruno 11-9 11-9 11-6
        Florian bat Samuel 11-9 8-11 11-3 11-3

        Doubles :
        Florian/Hugo battent Jérome/Bruno 11-9 11-7 11-9
        Joffrey/Enguerrand battent Rémy/Samuel 7-11 11-7 11-8 11-4

        Jérome bat Enguerrand 11-3 11-9 11-7
        Florian bat Rémy 11-2 11-5 11-8
        Hugo bat Samuel 6-11 11-3 11-8 11-5
        Joffrey bat Bruno 11-3 11-4 11-8

        Florian bat Jérome 11-8 9-11 11-8 11-9 très beau match et très belle perf !
        Enguerrand bat Rémy 9-11 11-7 11-8 11-4
        Hugo bat Bruno 11-4 16-14 11-6
        Joffrey bat Samuel 11-9 11-4 11-8

        Beau match, quelques petites faiblesses individuelles sur certains matchs, mais bravo à toute l\'équipe.

        Hugo BOUTEILLER'),
        array('id' => '166','equipe' => '12','journee' => '8','date' => '1327017600','lieu' => 'Canaples','adversaire' => 'CANAPLES CTT 1','score' => '0','score_adv' => '18','commentaire' => ''),
        array('id' => '167','equipe' => '1','journee' => '9','date' => '1327708800','lieu' => 'Besançon','adversaire' => 'BESANCON PS 1','score' => '11','score_adv' => '0','commentaire' => 'Une rencontre trop z’ouverte

        Pour la seconde journée de cette 2ème phase, un départ matinal (8H30 de la salle) était prévu à la salle pour se rendre en terre franc comtoise.

        Arrivant à la salle à 8H40, donc à l’heure (ah l’fameux quart d’heure picard !) avec le minibus pour prendre mes coéquipiers qui étaient entrain de se les cailler sévère dehors en m’attendant, je décidais de les accueillir avec une bonne dose de chauffage et surtout une bonne station de radio bien viril « Fréquence Gay » (one again and bistoofly). En fait c’était surtout pour Alex comme il kiff grave. Mais Denis en avait décidé autrement en me prenant le volant et nous mettant de la bonne musique bien rock et qui bouge….. Coldplay  (rock’n roll men).

        Plus tard, la route avait des allures digne du salon de l’érotisme avec sur notre chemin des noms tel quel : « Beaune », « Saint-Claude » la capitale de la pipe dixit Raphaël, « Bèze ». Il n’en fallait pas plus pour que notre chère Alex nous raconte quelques anecdotes trop z’ouvertes. (celle là elle est bonne, c’est le cas de le dire !!).

        5H plus tard et 45000 tours de Coldplay en boucle, nous arrivions devant l’hôtel ibis pour déposer nos affaires. Aucune place de parking n’étant disponible, il nous fallu faire 4 fois le tour de l’hôtel pour pouvoir trouver une place !!! (quelle idée de mettre un hôtel en plein centre ville !).

        La manœuvre s’annonçait périlleuse pour entrer dans le parking de l’hôtel. Rentrer un minibus de 1,92m de large dans une allée de 1,98m de large, c’est chaud de night. Mais heureusement Raphi et Alex me donnaient les directions avec une petite chorégraphie inspirée des « village people » (FREQUENCE GAY doit y être pour quelque chose). Mais c’était sans compter sur la caméra de vidéo surveillance qui enregistra tout, du coup, plus d’Alex (GAME OVER).

        A peine entré dans le parking, on avait l’impression d’être dans la cour de Prison Break. Ne voyant pas Malin et Denis revenir, Alex et Raphi (toujours dans les mauvais coups ceux la c’est pas possible !!!) tentaient une échappée en escaladant le mur mais le mirador Lecomte les rappela à l’ordre pour pouvoir se diriger chez nos adversaires bisontins (et non besançonnais !! y’en a qu’ont dû se poser la question…).


        Composition des équipes :

        Equipe Bisontine (les DOUBlés)
        A : CROIZIER Gabin (n°571), MOMMESSIN Serge (n°750), TRUCHE Florent (n°864)
        B : VINSU Jérémie (18), BASSIGNOT Mickaël (18), TISSOT Renaud (17)

        Equipe  Amiénoise (les DOUBleurs)
        A : PLOTUNA Malin (n°200), CORRE Cédric (n°280), CHATELAIN Raphaël (n°836)
        B : CHATELAIN Denis (n°879), LECOMTE Yohan (19), HAIGNERE Alexandre (19)

        Le match débuta par un duel entre deux grands  noms du tennis de table : MOMMESSIN/CHATELAIN. Raphaël s’imposa en 5 sets (les CHATELAIN ce sont des winners !) Le score se déroula de façon assez fluide et régulière. Le tout, dans une « Beaune » ambiance, ça fait ZIZIR !

        Evolution du score :
        BESANCON – AMIENS
        0-2 / 0-4 / 0-6 / 0-8 / 0-10 / 0-11 !!!   oui oui monsieur, même que Vincent likes this…

        Détails :

        PLOTUNA Malin (2/2) : « Ah bon, on dort à l’hôtel ? » victoire tranquille sur CROIZIER, puis s’impose à la belle sur TRUCHE en ayant été mené 5-2, mais a été plus  « malin » que « l’autruche » sur les derniers points pour pouvoir s’imposer.

        CORRE Cédric (2/2) : « j’en suis pas fier », mené 10-7 à la belle sur MOMMESSIN, Cédric craque… en envoyant la balle contre le mur (vitesse enregistrée à 255 km/h, plus fort que Roddick !!), un peu de chance, pas de carton lui !! et une remontée pour l’emporter 12-10, Cédric encore plus fort que le roquefort. Si Patrice Chaerle avait su ça il en aurait mangé son costard !!!

        CHATELAIN Raphaël (2/2) : Bon niveau de jeu avec 2 victoires en 5 sets face à MOMMESSIN et CROIZIER synonyme de 2 perfs. Bien joué mais ce n’est pas parce que l’on gagne que l’on à le droit de péter les plombs et du coup il a prit son 1er carton de sa jeune carrière …… et c’est mérité !!!! on ne discute pas, mouhahaha ! Mais la team a apprécié le petit « allez popo »,  moment clé de ce match.

        CHATELAIN Denis (2/2) : Le maitre ! S’impose en 3 sets face à TISSOT et en 4 sets face à VINSU. No stress ! Omniprésent ce week end : dans le mini bus, sur le banc, à la table, en double, à l’apéro, au bar… un vrai compétiteur quoi, Bravo !

        LECOMTE Yohan (2/2) : Yohan gagne successivement face à BASSIGNOT en 3 sets et TISSOT en 4 sets.  Bonne journée pour YOYO version national 3 (rien à voir avec la N2). Petit point noir : à défaut de se prendre une veste, l’a perdue. Surement le seul point gagné par Besançon.

        HAIGNERE Alexandre (1/1) : Alexandre le grand s’impose en 4 sets face à VINSU.  A eu des z’ « ouvertures » plus tard dans la soirée mais est resté sage.

        Au final :

        Raphi qui ne s’en remet toujours pas d’avoir eu son 1er carton (tu l’as mérité et pis c’est tout !!), du coup papa Denis l’a autorisé à se venger sur le muscat et la guinness.
        6H de route, une bonne ambiance (pas que l’ambiance hein Alex ?) et une victoire 11/0 (y’a longtemps que ça n’a pas dû arriver) synonyme de 2ème victoire et avec la manière svp.

        Rendez vous la prochaine journée pour accueillir la Team de MONACO !

        Alexandre HAIGNERE et Yohan LECOMTE'),
        array('id' => '168','equipe' => '2','journee' => '9','date' => '1327708800','lieu' => 'Amiens','adversaire' => 'VENIZEL TT 1','score' => '11','score_adv' => '4','commentaire' => 'Amiens - Vénizel, une rencontre qui donne des ailes !

        Amiens accueillait comme il se doit Vénizel pour un duel picard. Pour l\'occasion on avait récupéré un sacré numéro. Non je ne parle pas de Benito Vaquero mais de nôtre Yannick national sorti de son Marais nous faire un p’ti coucou (oui je sais elle est facile). A l\'échauffement on aurait dit timo boll contre son fils. Oui benoit et Yannick jouant ensemble c\'est impressionnant ! Bref y’avait du lourd à la table.

        Les Amiénois survoltés :
        En A : MARAIS Yannick (N192/2488), HARLE Christophe (N595/2180), DUBOIS	Lucas (17/1710)
        En B : BLATRIX	Maxime (18/1896), RASSELET Vincent (18/1885), VAQUIER Benoit (15/1583)


        Les engourdis Vénizelois
        En A : BEAUVISAGE David (20/2043), DYER Alexandre (20/2009), DEPOERS Damien (18/1879)
        En B : FRICHET	Christopher (20/2007), CHADUFAUD Frédéric (19/1938), MAUCOURANT	Guillaume (18/1829)

        1-1
        Après la défaite de Lucas contre Beauvisage après un bon match, et une victoire à l\'arrache de Maxou sur Chadufaud (parti à 2-0).

        Puis 2-2 après la contre de Vince à la belle après avoir mené 2-1. Et la victoire de Jaja sur Depoers en 3 sets facile.

        4-2 après la victoire à l\'expérience de Dudu sur Dyer à la belle en sauvant 2 balles de matchs.
        Et enfin, enfin la victoire du gamin, j\'ai nommé Benito Timo Vaquero. Un match complet pour une victoire 3-1 face à Frichet qui fait beaucoup de bien.

        Puis 5-2 après la victoire du double en B.
        Belle frayeur de Jaja qui à l\'échauffement contre Beauvisage ressent une douleur au pied et reste cloué par terre durant 5 bonnes minutes.
        6-3 avec une victoire de Dyer sur Dub\' et de Jaja en 4 sets finalement.
        Vince une nouvelle fois à la peine se retrouve à 2-1 10-7 en sa défaveur contre Chadufaud. 
        Après un point litigieux, Vince remet le point, mais se trouve piqué d\'une colère noire, qui lui fera gagner le set 12-10. Puis il s’imposera à la belle.
        Certainement le point de la journée qui l\'a sauvé. Car gros gros manque de fight même s\'il s\'est bien battu.

        Nous étions donc à 7-3 puis 9-3 après les victoires de Dudu sur Depoers et du double en A, 3-0 facile.
        Benito Timo Jacquo Philou Vaquero, remet une couche en assomant Maucourant à coup de top pour inscrire le 10ème.

        Jaja conclut sur Dyer, c\'est du caviar pour lui d\'inscrire le 11eme et nous emmener au 7ème ciel.

        Vince rate le 12eme face à Frichet. Il manque sa chance au 4ème puis prends sa bulle au 5ème.
        Oui Mr 11-0 la tête à Toto. Le prochain coup c\'est moi qui paye l\'apéro !

        Victoire 11 à 4 officiel. 11- 5 officieux.

        Un pas de plus vers le maintien ! Encore une fois, on s\'est pas levé pour rien.

        A l\'issue de la rencontre, un apéro a été gentiment offert par Dub\' pour fêter sa 15ème perf ! Nan j\'déconne c\'était juste pour sa 15ème année. Les perfs ça viendra, on s\'inquiète pas ;)

        Jaja (3V + D) : Il pourrait jouer les yeux fermés ça serait pareil. Quand Yannick joue il ne bouge pas, c\'est la balle qui vient à lui. Il l\'a sent tellement bien qu\'elle lui obéît !

        Dudu (2V +D) : Impressionnant de calme de sérénité et de maîtrise tout au long de la journée. Aura gardé au chaud ses biquettes, mais ça suffit pour aujourd\'hui. " Si t\'as le mental au ping t\'es bon, t\'as beau être nul si tu l\'as t\'es bon !" A méditer

        Dub\' (2D) : Auteur de 2 bons matchs, il n\'aura pas réussit à ouvrir son compteur pour la 2ème phase.
        On espère qu\'il attend pas le retour de Cahagne pour le faire. 
        Ps: Merci pour l\'apéro

        Benito (2V) : L\'homme du match. Deux perfs pour Benito. En même temps quand on s\'échauffe avec son idole on ne peut que jouer dingue ! Copie parfaite, donc rien à redire. Espérons que ça dure.

        Maxou (1V ; 1D + D) : A eu beaucoup de mal à passer le 3ème braquet. Maxou blessé à l\'épaule n\'a pas pu envoyer comme il le voulait. S\'est néamoins déchiré face à Chadufaud pour la victoire, puis à la belle sur Frichet dans la défaite.

        Vince (1V ; 2D + D) : Un peu mou du genou aujourd\'hui. J\'aurais évité la bulle sur la journée, mais pas sur le dernier set. En même temps quand papa Jaja n\'est plus là, rien ne va. un grand merci à lui, car j\'étais pas loin de couler sur Chadufaud... Aura survécu et contribué à la victoire, c\'est bien là le principal.

        Une bonne ambiance et un esprit d\'équipe présent tout au long de la journée.
        Prochain déplacement à Draveil, pour grappiller un point, on sait jamais.

        Vincent Rasselet'),
        array('id' => '169','equipe' => '3','journee' => '9','date' => '1327708800','lieu' => 'Villers St Paul','adversaire' => 'VILLERS ST PAUL 1','score' => '14','score_adv' => '6','commentaire' => 'Composition :

        VILLERS ST PAUL EN A 19,17 et 15 en B 16,14,17. 

        ASTT en A No448,18,14 en B 17,13,12.

        EN A :

        CHRISTIAN 1V +DBLE BAT DUBEAUX 3/0 PERD BOUCHOIR TH 3/2 ET HEYVAERT 3 /2 Que c\'est dur de veillir.....

        ARNAUD : 3v 3 sets à 0 + double. La classe quoi !!!!! 

        LOUIS : 2v Bat HEYVAERT 3/2, DUBEAUX 3/1 ET PERD BOUCHOIR TH 3/0. En grand forme

        En B :

        ANTOINE : 3V+ dble BAT BOUCHOIR J 3/1, ALIX 3/0 ET ROSEILLER 3/1. L\'homme du match.

        JULIEN : 1V Bat BOUCHOIR 3/2 PERD ALIX 3/2 (16/14 à la belle) et perd ROSEILLER 3/2. La perf du week end je pense avec une victoire sur le 16 (453 pts d\'écart), avec un peu de chance aurait du faire 2 voire 3. Quel plaisir de voir jouer ce gamin de 10 ans 1/2. 

        PHILIPPE 2V + dble bat ALIX 3/0, BOUCHOIR 3/1 ET perd ROSEILLER 3/1. Sans commentaire, en mode sous marin depuis le début de la phase. 

        Donc victoire 14/6, un grand merci à Arnaud, Julien et Louis pour leur renfort payant.

        Un grand bonheur de voir évoluer la jeunesse , les anciens sont prêts à vous laisser la place.

        Prochain match contre St Quentin à domicile.

        Signé le capitaine par obligation : Ph L\'hote (petit 17)'),
        array('id' => '170','equipe' => '4','journee' => '9','date' => '1327708800','lieu' => 'Amiens','adversaire' => 'TT MERS TREP EU 2','score' => '13','score_adv' => '7','commentaire' => 'Première et belle victoire en R2. 
        7 perfs réalisées.

        Les équipes :

        Amiens :

        Taquet Jean 2022
        Bathelot Bertrand 1705
        Berriat Lenny 1480

        Deguingand Andrei 1166
        Lefevre Loic 1429
        Herly François 1583

        Mers :

        Leblond Frederic 1769
        Necker Olivier 1600
        Omer Gregory 1614

        Lepors Mathieu 1254
        Martin David 1609
        Velon David 1605

        Les résultats :

        A :

        Jean : 2V/1D
        Jean a un peu de mal à rentrer dans la rencontre et perd 3/2 contre Leblond après avoir eu une balle match. Il s’impose ensuite 3/1 et 3/0 sans trop de problème. Jean s’est un peu trop entrainé contre Julien Patte et Denis et a perdu l’habitude des tops spins normaux de régionale.

        Lenny : 1V/2D
        Lenny rempli son contrat en battant et perfant 3/1 Necker le N°3 de la A. Il s’incline ensuite 3/0 sur les 2 autres matches.

        Bertrand : 3V 3/2 difficilement contre Leblond et 3/0 contre les deux autres joueurs.

        Jean et Bertrand perdent 3/0 en double en jouant très mal.

        B :

        Andréï nous donne un point qui fait du bien en début de rencontre en s’imposant 3/1 contre Lepors avec une petite perf à la clé.

        Loïc survole la rencontre en s’imposant deux fois 3/0 contre les 2 16 et s’impose 3/1 contre le 12 sans être trop concentré. Très bon niveau de jeu.

        François en bonne forme également s’impose 3/1 contre les 2 16 et 3/0.

        Défaite du double Loic/François 3/1

        Prochain match à St-Quentin qui s’annonce difficile.

        Bertrand Bathelot'),
        array('id' => '171','equipe' => '5','journee' => '9','date' => '1327795200','lieu' => 'Poix','adversaire' => 'POIX USTT 1','score' => '6','score_adv' => '14','commentaire' => ''),
        array('id' => '172','equipe' => '6','journee' => '9','date' => '1327795200','lieu' => 'Amiens','adversaire' => 'COMPIEGNE TT 2','score' => '7','score_adv' => '13','commentaire' => ''),
        array('id' => '173','equipe' => '7','journee' => '9','date' => '1327795200','lieu' => 'Amiens','adversaire' => 'POIX USTT 2','score' => '16','score_adv' => '4','commentaire' => ''),
        array('id' => '174','equipe' => '8','journee' => '9','date' => '1327795200','lieu' => 'Amiens','adversaire' => 'BOUZINCOURT PPC 1','score' => '9','score_adv' => '9','commentaire' => 'imanche 29 janvier, 

        Rendez-vous à la salle à 8h30 où nous jouons à domicile contre une équipe forte sur le papier : Bouzincourt (13-11-11-11) !
        Mais dans la réalité, l\'équipe se compose de trois 11 et un 9, ce qu\'on a fini par savoir à 9h20, après qu\'ils ont rempli la feuille de match... On lance donc les matchs sans oublier qu\'aujourd\'hui la rencontre est importante car si elle se solde par une victoire, nous avons toutes les chances de monter !

        COMPO de BOUZINCOURT PPC 1 :
        SECQ Alexandre 908pts
        CHERVILLE Axel 1147pts
        GERIN Aurélien 1138pts
        DHEILLY Cyril 1107pts

        Chez nous on a Jeoffrey en 1er, Floris en 2è, Paul en 3è - évidemment - et Benoît en 4è place !
        On commence la rencontre avec la victoire de Jeoffrey contre Alexandre en 3 sets mais la défaite de Floris contre Axel. Puis une victoire : celle de Paul contre Aurélien qui signe une perf à 238pts ! 
        Cependant la défaite de Benoît contre Cyril ramène le score à égalité : 2 à 2.
        Puis deux nouvelles victoires amiénoises : Floris contre Alexandre et Jeoffrey contre Axel ! Nous allons vite être rattrapés avec la défaite de Paul contre Cyril et celle de Benoît contre Aurélien.

        4-4 juste avant les doubles, la rencontre est serrée malgré l\'écart de points sur la feuille !

        Alors on lance les doubles : Benoît/Jeoffrey d\'un côté et Floris/Paul de l\'autre, comme d\'habitude !
        Malheureusement les deux doubles seront des défaites... avec Benoît on s\'incline face à Alexandre et Aurélien en 4 sets. Floris et Paul, quant à eux, perdent en 5 sets dont 15-13 dans le dernier set. Une défaite difficile à digérer puisqu\'ils étaient proches de la victoire mais un beau duo quand même !

        On est finalement mené 6-4 et bientôt 7-4 avec la défaite de Jeoffrey contre Cyril. 
        Mais Floris ramène 1 point précieux à Amiens en battant Aurélien et signe au passage une perf à 208 pts !
        Benoît qui aujourd\'hui n\'aura pas brillé perd face à Alexandre.
        Nous sommes menés 8 à 5 et la victoire semble nous échapper mais c\'est sans compter sur notre motivation ! 
        On aligne donc 4 belles victoires d\'affilée qui nous relancent tous : Paul contre Axel, qui fait sa 2ème perf de la journée à 247 pts cette fois-ci ! Puis Jeoffrey contre Aurélien dans un match très stressant, celle de Floris contre Cyril, assez facilement et enfin celle de Paul contre Alexandre en 4 sets !

        9-8 pour Amiens, la chance a tourné ! 
        Il reste donc le dernier match, celui de Benoît ; très serré et très tendu vu son importance... soit faire gagner notre équipe soit la mettre à égalité... Finalement, après 5 sets, Benoît s\'incline dans un match où il n\'est pas rentré dedans... Il se rattrapera dans 15 jours !

        Bilan :
        Jeoffrey : 3
        Floris : 3
        Paul : 3
        Benoît : 0

        Un match nul contre l\'équipe la plus forte de la poule certainement, très encourageant pour la suite, bien qu\'aucun double n\'ait été gagné cette fois-ci et le 0 de Benoît qui pourra (devra) se faire pardonner contre Beauval !

        Ps: Merci à Geoffroy pour son coaching et espérons que Beauval soit plus sympathique que Bouzincourt !

        Jeoffrey Stephan'),
        array('id' => '175','equipe' => '9','journee' => '9','date' => '1327795200','lieu' => 'Boves','adversaire' => 'BOVES ASTT 1','score' => '10','score_adv' => '8','commentaire' => ''),
        array('id' => '176','equipe' => '10','journee' => '9','date' => '1327795200','lieu' => 'Amiens','adversaire' => 'BEAUVALOIS TT 2','score' => '7','score_adv' => '11','commentaire' => 'L\'équipe perd 11/07 contre Beauvalois TT.

        Dans le détail :
        - Goupil gagne un 715 et un 685. 
        - Chhe gagne un 685, 715, 706.
        - Tran gagne un 706.

        Alexandre Goupil'),
        array('id' => '177','equipe' => '11','journee' => '9','date' => '1327795200','lieu' => 'Muille-Villette','adversaire' => 'MUILLOIS PPC 3','score' => '18','score_adv' => '0','commentaire' => 'Nous nous rendons à Muille-villette, nous avons eu quelques difficultés à trouver la salle, mais nous y sommes parvenus tout de même. Après quelques balles d\'échauffement, nous découvrons que leur équipe a été en fait totalement chamboulée, plusieurs absents ayant été remplacés dans leurs équipes, nous découvrons une équipe telle qu\'est la suivante :

        Muillois PPC 3 :
        GUERIN Christian 558 pts
        TALON Marie 558 pts
        PLINGUET Daniel 532 pts
        MORELLE Eddy 500 pts

        Amiens STT 11:
        BOUTEILLER Hugo 899 pts 
        BEAUFRERE Florian 693 pts
        HAUW Joffrey 706 pts
        WALLON Enguerrand 625 pts

        Tous les matchs ont été remportés 3 sets à 0 (sauf 1).
        L\'équipe adverse n\'avait manifestement pas pu aligner une équipe à la hauteur de la D3 cela étant du en remplacements de certains de ses joueurs.

        Hugo BOUTEILLER'),
        array('id' => '178','equipe' => '12','journee' => '9','date' => '1327622400','lieu' => 'Amiens','adversaire' => 'TT ST FUSCIEN 2','score' => '13','score_adv' => '5','commentaire' => ''),
        array('id' => '179','equipe' => '13','journee' => '9','date' => '1327708800','lieu' => 'Deauville','adversaire' => 'AG DEAUVILLAISE 1','score' => '10','score_adv' => '5','commentaire' => 'Dam Dam Déo OOO
        Dam Dam Déo OOOO !!!!

        En ce samedi 28 janvier, nous vous invitons aux DEAUVILLE-AMIENS PLAYERS AWARDS.
        Aujourd\'hui, plusieurs prix vont être attribués. Voici les différentes catégories :
        - meilleure interprète ;
        - meilleure talent ;
        - meilleure comique ;
        - meilleure fair-play ;
        - meilleure agaçante ;
        - meilleure influence ;
        - meilleure statue ;
        - meilleure "plus faible".

        Pour toutes ces catégories, les nominées sont :
        Les deauvillaises : LECOURT Claire, 13, AUDOU Eva, 11, COUPARD Camille, 10 et DOLLEY Lisa 7.
        Les amiénoises : PETITPREZ Caroline, 14, CARLIE Hélène, 14, GRUGEON Charline, 12 et FLAHAUT Julia, 9.

        Avant d\'entrer dans le détail, deux prix spéciaux sont décernés aujourd\'hui. Tout d\'abord le prix de la meilleure salle pour celle de Deauville : on se croyait en discothèque (musique à fond entre deux matchs de hand) et également sur une patinoire (changement de chaussures pour Charline ; au lieu de ses @asics, ça sera ses BENSIMON défoncées). Et le second sera pour Stéphane ; celui du meilleur pilote et du meilleur supporter. Merci à toi !

        Julia (3 défaites) : pendant qu\'elle s\'échauffait avec Charline, Julia me dit : "Regardes Hélène, la balle ne rebondit pas sur le sol." Elle va alors essayer 15 fois mais la balle ne rebondira toujours pas... ça l\'a sans doute perturbé pour le reste de sa journée car Julia va connaître trois défaites. Elle perd d\'abord 3-0 sur COUPARD (-6/-3/-3), 3-0 sur LECOURT (-9/-7/-6) puis 3-1 sur AUDOU après une très bon match (-11/-8/10/-8). Par contre, Julia va remporter l\'award de la meilleure comique. Je vous cite ses meilleures répliques : "Si on mange sur le port, on est obligé de manger du cochon" ; "ça fait quoi un chinois qui tombe : chine toc" ; "comment on appelle un chinois qui loupe son car : un karaté".

        Charline (2 victoires, 1 défaite) : à 20 minutes de l\'arrivée, Charline nous dit : "Au fait, ma raquette est cassée !" Trop forte Charline. Ensuite pendant l\'échauffement : "Je suis complètement à l\'ouest ! Mais c\'est normal, on est à Deauville !" Charline fait un bon match sur LECOURT mais s\'incline malheureusement 3-2 (7/-8/-5/3/-4). Ensuite, elle remporte ses deux autres matchs sur COUPARD 3-2 (6/-3/-4/11/3) et sur DOLLEY 3-0 (6/9/7).

        Caroline (4 victoires) : aucune anecdote à dire sur Caroline avant et pendant le match... par contre elle va se lâcher après ! Je vous en reparlerais un peu plus tard. 
        Caroline bat AUDOU 3-0 (8/3/13), DOLLEY 3-0 (2/2/7), COUPARD 3-0 (9/6/6) puis petite frayeur sur LECOURT où elle est menée 2 sets à 0 mais elle s\'impose tout de même 3-2 (-8/-10/9/12/10).

        Hélène (4 victoires) : je m\'impose 3-1 sur DOLLEY (5/5/-5/9) puis pour mon deuxième match sur AUDOU j\'étais au fond du trou et je creusais encore... impossible de me déplacer à cause d\'une cheville blessée mais un mental d\'acier et une volonté de fer qui vont me permettre de remporter ce match 3-2 (-8/-4/6/7/10). Après un peu de pommade et un bon strap, j\'étais de nouveau à mon meilleur niveau. Je bas LECOURT 3-1 (3/5/-8/5) avec des phrases cultes : "J\'me kiffe" et après la perte du 3ème set : 
        "Faut que j\'arrête de me regarder jouer". Bien dans l\'humilité Hélène ! D\'ailleurs après ce match, mes coéquipières me diront : "tu nous as fait rêver, tu envoyais du rêve " 
        et Stéphane ajouta : "tu nous as fait vibrer". Pour mon dernier match, je bas COUPARD 3-0 (6/8/7). Mon match contre LECOURT me vaudra l\'award du meilleur talent.

        Caroline et Charline perdent leur double 3-2 face à LECOURT et DOLLEY (-8/-6/6/11/-10). Pendant ce double, Charline nous a fait un super cri "Ahooouuuuuh" qui lui permet de remporter l\'award de la meilleure interprète ("She wolf" ; Shakira).

        Julia et Hélène s\'imposent face à AUDOU et COUPARD 3-1 (4/7/-7/3).

        Victoire 10-5 ! Nous sommes bien en confiance maintenant.

        Nous décernons l\'award de la meilleure "plus faible" à Mademoiselle Lisa DOLLEY ; désolée mais elle avait le plus petit classement. L\'award de la meilleure statue est attribué à Eva AUDOU ; plantée devant la table et aucune émotion. Award de la plus agaçante pour Camille COUPARD ; les "tchô\' à chaque point, les regards vers papa et maman dans les tribunes tout le temps, à force ça lasse. Et celui de la meilleure fair-play est pour Claire LECOURT ; très bon comportement.

        Et le meilleur pour la fin : la petite Caroline qui était toute calme toute la journée... eh bien, elle obtient l\'award de la plus influente... alors que le jet de ma douche bien chaude s\'arrêta, elle arriva avec Julia (fortement influencée) et m\'arrosa de deux bouteilles d\'eau froide... la sensation chaud/froid n\'est pas agréable !

        Caroline, Julia : la vengeance est un plat qui se mange froid...

        Hélène CARLIE'),
        array('id' => '180','equipe' => '14','journee' => '9','date' => '1327708800','lieu' => 'Equeur','adversaire' => 'ENT EQUEUR / LA GLACERIE 1','score' => '6','score_adv' => '10','commentaire' => 'Samedi 28 janvier : long déplacement pour les filles ce samedi... direction Cherbourg. 
        Match important pour mes anciennes partenaires d\'équipe ; elles espèrent une victoire car c\'est l\'une des équipes les plus faible de la poule.

        Compositions des équipes :

        Equeur :BOURDON Laëtitia, 8, LE GOFF Catherine, 10, FAUTRAT Béatrice, 10 et JOUAN Caroline, 7.
        Amiens : BERTHELOT Marion, 10, NEEL Aurélie, 9, GUICHARD Delphine, 8 et HURE Léa, 6.

        Marion (1 victoire, 3 défaites) : d\'après ses propres termes "journée excellente"...... LOL !!!!! Marion passe totalement à côté de cette journée. Elle perd d\'entrée de jeu sur 
        BOURDON 3-0, puis sur LE GOFF 3-0. L\'orgueil va reprendre le dessus après les doubles et elle va s\'imposer sur JOUAN 3-2 (11-9 à la belle) et perdra son dernier match 
        face à FAUTRAT.

        Aurélie (2 victoires, 2 défaites) : Aurélie bat LE GOFF en se faisant un remake du bon vieux temps du baby-ping.... des belles balles hautes sans effet.... mais ça marche 
        !! Ensuite, elle bat BOURDON ("elle ne top qu\'en ligne" me raconta Aurélie). Après les doubles, Aurélie va perdre ses deux derniers matchs face à FAUTRAT et JOUAN 
        (Aurélie, tu as oublié le bon vieux temps du set en poussette de Jean-Marie....).

        Aurélie et Marion perdent leur double.

        Delphine (2 victoires, 2 défaites) : belle perf grâce à sa victoire sur FAUTRAT et victoire également sur JOUAN. Ensuite, Delphine enchaînera deux défaites sur LE GOFF 
        et BOURDON.

        Léa (3 défaites) : Léa s\'est bien battu mais les joueuses adverses étaient plus fortes aujourd\'hui. Elle perd sur JOUAN, FAUTRAT et BOURDON.

        Par contre, belle performance de Léa et Delphine qui remportent leur double.

        Malheureusement pour les filles : défaite 10 à 6. Le maintien va être compliqué mais je crois en vous les filles !

        Sinon, vous vous êtes bien réconfortées avec un bon petit mac do et les fameux menus maxi best off Mc Cloporte !!!!

        Hélène CARLIE.'),
        array('id' => '181','equipe' => '15','journee' => '9','date' => '1327708800','lieu' => 'Amiens','adversaire' => 'ROYE PPC 1','score' => '11','score_adv' => '7','commentaire' => ''),
        array('id' => '182','equipe' => '16','journee' => '9','date' => '1327708800','lieu' => '/','adversaire' => 'Exempt','score' => '18','score_adv' => '0','commentaire' => ''),
        array('id' => '183','equipe' => '17','journee' => '9','date' => '1327708800','lieu' => 'Amiens','adversaire' => 'LONGUEAU ESC 1','score' => '12','score_adv' => '6','commentaire' => ''),
        array('id' => '184','equipe' => '13','journee' => '10','date' => '1328918400','lieu' => 'Amiens','adversaire' => 'EVREUX EC 1','score' => '9','score_adv' => '9','commentaire' => 'Ce match s\'annonçait très serré entre les deux équipes et le résultat final en est la preuve : match nul.

        Beaucoup de changements pour cette journée : changement de territoire, changement de chaussures, changement de plaques, changement de nourriture... Certains d\'entre eux fonctionnent mieux que d\'autres !

        Compositions des équipes :

        EVREUX : 
        GEORGESCU Michaela, n°25 / 2451
        LEGRAND Lucie, 13 / 1333
        RABAUX Perrine, 12 / 1251
        RABAUX Marion, 10 / 1002

        AMIENS :
        PETITPREZ Caroline, 14 / 1466
        CARLIE Hélène, 14 / 1406
        GRUGEON Charline, 12 / 1253
        FLAHAUT Julia, 9 / 957

        Julia (4 défaites, changement de territoire) : est-ce le fait de ne pas jouer au milieu qui l\'a empêché de faire un point aujourd\'hui ?
        Elle ne passera pourtant pas loin de la victoire face à LEGRAND ; défaite 3-2 (-11/8/8/-6/-8). Après, défaite plus sèche face à GEORGESCU (joueuse du jour) 3-0 (-3/-4/-5). Julia perdra 3-1 contre RABAUX P. (6/-8/-11/-4) et 3-0 contre RABAUX M. (-8/-3/-1).

        Charline (2 victoires, 2 défaites, changement de territoire et de chaussures) : Charline perd 3-0 sur GEORGESCU (-9/-7/-5) puis perf en remportant son match 3-0 contre LEGRAND (5/8/3). Charline bat RABAUX M. 3-0 (4/10/2) puis perd 3-1 sur RABAUX P. (-9/-4/6/-11). Mais bon, elles sont belles tes chaussures !

        Caroline (3 victoires, 1 défaite, changement de territoire, de plaques et de nourriture) : Caro nous a fait rêver ! Elle gagne 3-0 contre RABAUX P. (7/7/9), RABAUX M. 
        (5/3/4), LEGRAND (9/2/1). Mais pas d\'exploit : elle perdra 3-0 comme nous toutes sur GEORGESCU (-7/-4/-9). Tu as trouvé tes plaques !

        Hélène (3 victoires, 1 défaite, changement de territoire et de nourriture) : mon match contre RABAUX M. est un match complètement décousu et la belle sera le reflet de ce match. Je gagne 3-2 (8/-8/6/-9/9). A la belle, je tourne à 5-1 contre moi puis je mène 6-5. Time out du côté d\'Evreux, 9-6 pour elle puis je m\'impose 11-9 !! Du grand n\'importe quoi ! (plus de nuggets pour moi. Je prendrai le même burger que Caro la prochaine fois !). Ensuite je bas RABAUX P. 3-1 (7/-8/10/14). Je prend une correction par la joueuse du jour : 3-0 (-3/-6/-3) puis remporte mon dernier match 3-1 face à LEGRAND (-10/9/8/4).

        Caroline et Charline gagnent 3-0 contre the RABAUX\'s sisters (5/4/7) alors que Julia et Hélène perdent 3-0 face à GEORGESCU et LEGRAND (-4/-3/-10).
        Pour ces doubles, des arbitres de marque : Arnaud FERAUD et Philippe CARLIE !!

        Belle rencontre, haletante jusqu\'au bout. Nous menions 5-2 puis 7-4 et encore 9-7 avant que les adversaires reviennent à 9-9.

        Hélène CARLIE'),
        array('id' => '185','equipe' => '14','journee' => '10','date' => '1328918400','lieu' => 'Amiens','adversaire' => 'TS BOLBEC 1','score' => '2','score_adv' => '10','commentaire' => 'Pour cette 10ème journée, les filles ont accueilli l\'équipe de Bolbec.

        15h30 : Monsieur GACQUER annonçait : "une équipe de filles va jouer dans la salle du bas". La pré nat se sacrifiera pour nous laisser la place en haut. Merci les filles.

        Les belles aires de jeux montées par Monsieur LHOTE n\'auront pas suffi pour faire gagner les filles.
        Défaite 10-2.

        Equipe de Bolbec : DELAHAYS Laura, 11, GALLIER Mathilde, 10, HEBERT Marion, 10 et LEBAILLEUR-LACAGE Monique, 10.

        Equipe amiénoise : BERTHELOT Marion, 10, NEEL Aurélie, 9, GUICHARD Delphine, 8 et HURE Léa, 6.

        Delphine (2 défaites) : Delphine s\'incline face à HEBERT 3-0 (-4/-13/-10) et face à DELAHAYS 3-0 (-1/-16/-5).

        Léa (2 défaites) : Léa perd 3-1 contre DELAHAYS (8/-2/-3/-2) puis 3-0 contre HEBERT (-8/-4/-4).

        Encore un très beau double de la part de Delphine et Léa. Elles s\'inclinent 3-2 sur DELAHAYS et GALLIER (-1/-5/9/9/-5).

        Marion (1 victoire, 2 défaites) : belle perf pour Marion d\'entrée de match. Elle bat LEBAILLEUR-LACAGE 3-0 (8/7/4). Ensuite, défaite 3-0 face à GALLIER (-6/-6/-3) puis manque de peu sa seconde perf face à DELAHAYS en s\'inclinant 3-2 (-5/-7/11/6/-7).

        Aurélie (1 victoire, 2 défaites) : Aurélie perd 3-0 sur GALLIER (-5/-1/-4) et remporte son match sur LEBAILLEUR-LACAGE (une perf) 3-2 (-5/-9/9/7/12). Aurélie aussi ne passera pas loin de la deuxième victoire... elle perd 3-2 contre HEBERT (13/-11/-7/8/-7).

        Marion et Aurélie perdent leur double 3-1 face à HEBERT et LEBAILLEUR-LACAGE (-8/-8/5/-12).

        Nouvelle défaite pour mes coupines :-(

        Le maintien s\'éloigne encore un petit peu !

        Hélène CARLIE'),
        array('id' => '186','equipe' => '15','journee' => '10','date' => '1328918400','lieu' => 'Flixecourt','adversaire' => 'VILLE LE MARCLET / FLIXECOURT 1','score' => '10','score_adv' => '8','commentaire' => ''),
        array('id' => '201','equipe' => '17','journee' => '10','date' => '1328918400','lieu' => 'Eppeville','adversaire' => 'EPPEVILLE TT 2','score' => '10','score_adv' => '8','commentaire' => ''),
        array('id' => '200','equipe' => '16','journee' => '10','date' => '1328918400','lieu' => 'Amiens','adversaire' => 'ABBEVILLE AC 1','score' => '5','score_adv' => '13','commentaire' => ''),
        array('id' => '189','equipe' => '1','journee' => '10','date' => '1328918400','lieu' => 'Amiens','adversaire' => 'MONACO AS 1','score' => '9','score_adv' => '11','commentaire' => 'Comme un ouragan...

        Arrivée à 14H50 à la salle pour Alex et première surprise de la journée… la salle était déjà montée et Denis en tenue. Nous remercions donc Denis, Raphaël et Christophe pour nous avoir mâché le travail (j’espère n’avoir oublié personne). Lors de cette rencontre « du milieu » (seconde surprise de la journée) nous avons eu à faire à une team Monégasque hyper motivée (en même temps, traverser toute la France et ne pas l’être…on n’aurait pas compris !!!).

        C’est donc une affiche de rêve qui nous attendait, rien que le nom ça donne envie d’y être (et on pourra dire « on y était », « on l’a fait » !!

        On attendait donc SAS (Sans Albert Sûrement) le prince, féru de sport pour accompagner les pongistes Monégasques mais rien !!

        On attendait sa sœur alors, Stéphanie, mais là encore rien, quedchi, quenéni, nada, sûrement avait t’elle encore la voix cassée depuis son fameux « ouragan », en même temps quelle idée de chanter de ce temps là !! Voila ça l’apprendra.

        Alors il nous restait plus que l’autre princesse … Caroline, mais là rien encore (c’est la bérézina dit donc). Ah mais si (pas Lionel !) j’oubliais, on avait quand même notre Caro nationale au club pour nous consoler et qui jouait à coté de nous, même qu’Alexandre likes this, (ein biloute !!!).

        Après avoir entendu la veille par le président de Monaco : « on vient pas, on est 5 », après  « on joue à 6 mais avec un remplaçant », finalement ce serait une équipe au complet qui viendrait à nous. Alors jvous raconte pas comment Denis est passé par tous les états possibles, se voyant dans un premier temps chez lui regarder le rugby, puis dans un second temps aller à Draveil pour finalement, avoir l’honneur d’en découdre avec la team Monégasque afin de leur mettre la pâté (tiens en parlant de pâté, on te remercie tous Denis !!).


        Composition des équipes :

        Equipe Amiénoise (la princi boté)
        A : CORRE Cédric (n°284), HAIGNERE Alexandre (19),  PLOTUNA Malin (n°200)
        B : VAQUIER Benoit (15), CHATELAIN Denis (n°876), LECOMTE Yohan (19) 

        Equipe Monégasque (la princi pauté)
        A : SORIA Julien (18), TISO Martin (n°436), SAMSON David (n°193)
        B : ROTT Oliver-Tim (18), ZELEZ Alexander (19), ANDRE Eric (19)

        Détails :

        PLOTUNA Malin (1/3) : Malin s’incline en 5 sets face à SAMSON et TISO. Il s’impose logiquement en 3 sets face à SORIA. Un Malin pas très en forme « pour une fois », mais il était un peu enrhumé. Sans doute les cheveux rasés y sont pour quelque chose, seulement un poil sur le « rocher », celui de la victoire.  

        CORRE Cédric (2/3) : « Le retour du Jedi » ! Cédric s’impose en 3 sets face à SORIA puis s’incline en 3 sets face à TISO. Finit la journée en apothéose en battant SAMSON en 5 sets… on en resta bouche bée ! « SAMSON ». Sérieux et motivé, il était sur son petit « rocher »  ce samedi. A également livré un bon double.

        HAIGNERE Alexandre (1/3) : Alex s’incline d’entrée en 3 sets face à TISO après avoir eu 2 balles de sets au 1er et 3ème set. Mais bon,  « service-remise à ce niveau là, je n’en joue pas souvent à l’entrainement ! » dit-il. Il s’incline également en 3 sets face à SAMSON qui frappait comme un « sourd ». Bref, c’était un peu trop fort. Lors de son dernier match il s’impose en 4 sets face à SORIA. Bon niveau de jeu mais pas suffisant pour jouer «150».

        CHATELAIN Denis (2/3) : The Captain. Un 1er match âprement disputé avec un ZELEZ le poussant à la belle, puis un 2ème match parfaitement négocié sur ANDRE 3 à 0. Par contre au moment de marquer le 10éme point, Denis se fait asphyxier par ROTT (celui là étant trop fort)

        LECOMTE Yohan (1/3) : victoire 3 à 0 d’entrée sur ANDRE, mais par la suite pas très ZELEZ sur Alexander, malgré une coupure de courant, s’est fait exploser 3 à 0 puis s’est fait asphyxier par un ROTT aussi trop puissant 3 à 1.

        VAQUIER Benoit (0/3) : Aujourd’hui nous avions l’honneur de jouer avec Benito Timo Vaquero. Mais comme tous les grands champions du moment, il ne fût au top de sa forme (forfait de BOLL au top 12 et blessure de MATTENET). Benoit s’incline en 3 sets lors de ses deux premiers matchs sur ROTT et ZELEZ, puis il livra un bon match en s’inclinant en 4 sets sur ANDRE (quasi tous aux avantages) lorsque le score était de 9/8 pour Monaco. Dommage ! (enfin tu fais chier quand même lol)

        Evolution du score :
        AMIENS - MONACO
        1-1 / 2-2 / 3-3 / 4-5 / 5-7 / 7-7 / 7-9 / 8-10 / 9-11   

        Au final : 
        Malgré une interruption de jeu d’une dizaine de minutes à cause du pétage de plomb des lumières (et de vaquero aussi) cela ne nous a pas permis de renverser la vapeur.
        Que ce soit au tennis de table ou au foot,  nous sommes incapables de prendre les 3 points.
        Merci à Denis de nous avoir ramené un bon pâté bien picard avec un ptit Saint Emilion et son gros camembert maison.
        ‘Now’ plus le droit à l’erreur si nous voulons vraiment monter !!!

        Alexandre HAIGNERE et Yohan LECOMTE'),
        array('id' => '190','equipe' => '2','journee' => '10','date' => '1328918400','lieu' => 'Draveil','adversaire' => 'DRAVEIL SC TT 1','score' => '9','score_adv' => '11','commentaire' => 'Draveil - Amiens : Ici c\'est Paris !

        En aparté, je tiens à signaler que je ne suis pas en retard. Ils ont reporté le France-Irlande pour cause de froid. Je me suis donc permis de reporté mon résumé pour cause de flemme.

        Pour cette 10 ème journée Amiens ce déplaçait à Draveil pour essayé de glaner des points en quête du maintien. Rendez - Vous 13h à l\'ASTT, pour une après-midi à Paris.

        Ici c\'est Paris.
        On s\'est paumé 2 fois y allant, on s\'est balladé place de l\'étoile. L\'arc de triomphe c\'est un signe.

        Ici c\'est Paris.
        En sortant du tunnel on a aperçu le Parc des Princes, le terrain des premiers.
        Tout la journée Dub\' a répété, je vais me faire un n°
        Puis Dub\' a dit:" A 10-9 .Je mets le 11ème."
        On y allait renforcé par notre Jaja national.
        On ne pouvait que gagner.

        Les "Fatals Picards" 
        En A : HARLE Christophe (N595), MARAIS Yannick (N192), RASSELET Vincent (18)	
        En B : DUBOIS Lucas (17), CHATELAIN Raphaël (N836), BLATRIX Maxime (18)	

        Les "Paris Go"
        En A : HILLAIRET Florian (N306), SERVAIS-LAVAL Axel (N346), ODEANT Mathias (20)
        En B : HAIK Yaacov (N920), DEKOWSKI-RICHARD Yoann (N996), POTHAIN Bruce (20)

        Ici c\'est Paris.
        On te mets la pression dès les premières secondes.
        Après un faux départ Amiénois, ou plutot un top départ Draveillois, on était moins serein.
        4-0 avec 2 branlées prises par Dub\' et Vince. Avec 2 défaites à la belle de Dudu et Maxou.

        Heureusement on avait 2 fighters de renomé international pour ramener le score à 4-2.
        Merci Jaja et Raphi.

        Puis défaite à l\'arrachée du double en B (12-10 à la belle avec une balle de match), et grosse branlée de Dudu sur Hilllairet.
        Oui mais Dudu quand il prend une branlée, il nous fait quand même rever !
        A force de jouer avec Vaquier, il commencerait presque à devenir aussi insolent.
        Auteur du point de la journée, un enchainement de 10 tops, suivi d\'un side spin plein coup droit pour déporter son adversaire, il se fait alors méchament zité.
        Oui mais Dud\' c\'est le talent, à bout de bras il envoie un contre-zit en plein sur le coin de table adverse pour nous déchainer.

        7-3 après ma 2ème branlée de la journée.
        (La je suis en mode déprime, toujours pas mis un set dans la journée)
        Jaja, maxou et raphi s\'imposent à la belle, mais Défaite de Ch\'dub et du double en A
        9 à 6, ça sent pas bon pour nous.

        Ici c\'est Paris
        Ca fight à tous les points, ya une ambiance de dingue.
        Défaite de Jaja, juste après le double. Quatre matchs à enchainer, il était un peu cramé notre Jaja.

        10-6 pour Draveil, ici c\'est Paris,et pour nous ça sent le roussi...
        Puis petit moment de répis
        Alors que Dud\' était entrain de se faire crucifier. Il est lui même descendu de la croix, pour nous montrer la voie de l\'espoir.
        Il s\'impose à la belle, après avoir été méné largement tout au long de la rencontre.
        Du fight, du fight, du fight !
        Max s\'impose également en B, puis Vince finit par rentrer un pti set, puis deux, puis trois, pour ramené Amiens à 10-9.

        22h10 pétante.
        5h de rencontre acharné, pour ce moment.
        Celui de Dub\'. Mettre l\'espoir de l\'équipe dans les mains d\'un gamin de 14 ans. On est vraiment fou à Amiens!
        Oui, mais ici c\'est Paris !
        Comme promis Dub\' a joué a 10-9, il a donc mis le 11ème.
        Malheureusement il l\'a mis pour Draveil.
        Ben oui,  ici c\'est Paris ! Oui oui on a compris !

        Dommage presque, on aurait pu gratter le point du nul.
        Faut croire que le Parc des Princes et l\'Arc de Triomphe c\'est réservé aux Parisiens, et que pour les touristes vaut mieux aller à Disney !
        Bref nous Somme venu, nous nous Somme battu, nous avons perdu !

        Un match qui s\'est passé dans un bon état d\'esprit. Bonne ambiance, et après match sympa.
        (Non non, j\'essaye pas de me rattraper après ma boulette du match aller)

        Jaja (2V, 1D) Un Jaja un peu fatigué pour son 4éme match. Il aura enchainé les 4 à la suite. Mais malheureusement pas que des victoires.

        Dudu (1V, 2D) Mal embarqué d\'entrée avec une défaite sur le 20, il se rattrape en nous faisant rêver sur le premier 300, puis en s\'imposant sur le deuxième 300. Merci d\'avoir sauvé ma journée !

        Vince (1V , 2D) A pris 3 grosses races ! Deux à la table, et une au bar. A mis un petit point en fin de rencontre, qui fait du bien.

        Double perdu par Jaja et Dudu 3-1, aux avantages à chaque set.

        Raphi (3V) L\'homme fort de la B. N\'a pas tremblé, enfin presque pas sur les 3 guerriers Draveillois.

        Maxou (2V, 1D) S\'incline d\'entrée à la belle sur le 20, il se déchaine sur les deux numéros. Un très bon niveau de jeu et de magnifiques prestations !

        Ch\'dub\' (3D) Pas de spécial Dub\' aujourd\'hui. Il était plutôt fatigué et n\'a pas réussi à élevé son niveau de jeu. C\'est pas grave. On t\'en veux pas gamin.

        Double perdu à l\'arraché à la belle par Raph\' et Max.

        Vincent'),
        array('id' => '191','equipe' => '3','journee' => '10','date' => '1328918400','lieu' => 'Amiens','adversaire' => 'ST QUENTIN TT 2','score' => '3','score_adv' => '17','commentaire' => ''),
        array('id' => '192','equipe' => '4','journee' => '10','date' => '1328918400','lieu' => 'Saint-Quentin','adversaire' => 'ST QUENTIN TT 3','score' => '8','score_adv' => '12','commentaire' => 'ASTT4 s’incline 12/8 à Saint Quentin : une défaite 12/8 qui laisse beaucoup de regrets. 

        Amiens :
        Louis Vandewoestyne 14
        Bertrand Bathelot 17
        Bruno Marysse 17
        Lefevre Loïc 14
        Herly François 15
        Berriat Lenny 14

        Saint Quentin :
        Archer Thibaut 17
        Dhollande Antoine 15
        Faity Boris 17
        Bialek Romain 13
        Bauduin Emeline 11
        Thaissart Julien 15

        En A :
        Louis s’incline sèchement 3/0 contre Archer (17), bat Faity (17) 3/1 et s’incline 3/2 contre d’Hollande 15 sans motivation et dans un match sans enjeu.
        Bruno bat Faity 3/2 et s’incline 3/0 contre Dhollande après un 1 er set très accroché et 3/1 contre Archer.
        Bertrand bat Dhollande 3/0 et Archer 3/1 et s’incline 3/1 contre Faity
        Bertrand et Bruno perdent le double 3/1

        En B :
        Loic s’incline 3/1 contre Bialek dans un match au super niveau de jeu puis s’impose 3/0 contre Bauduin et 3/1 contre Thaissart.
        François bat Bauduin 3/0 puis s’incline lui aussi malgré un bon niveau de jeu et une balle de match contre Bialek. La défaite ayant laissé des traces il perd ensuite contre Thaissart 3/0. 
        Lenny perd de justesse 3/2 contre Thaissart puis 3/0 contre Bialek et bat 3/2 Bauduin
        François et Loic perdent le double 3/1

        Un match qui laisse pas mal de regrets au vu des matches qui nous échappent de peu en B et de notre faiblesse en double.

        Le maintien est encore possible mais cela sera difficile.

        Bertrand Bathelot'),
        array('id' => '193','equipe' => '5','journee' => '10','date' => '1329004800','lieu' => 'Longueil Ste Marie','adversaire' => 'LONGUEILLOIS TT 2','score' => '5','score_adv' => '15','commentaire' => ''),
        array('id' => '194','equipe' => '6','journee' => '10','date' => '1329004800','lieu' => 'Amiens','adversaire' => 'VILLERS-BRETONNEUX PPC 2','score' => '11','score_adv' => '9','commentaire' => ''),
        array('id' => '195','equipe' => '7','journee' => '10','date' => '1329004800','lieu' => 'Saint-Fuscien','adversaire' => 'TT ST FUSCIEN 1','score' => '7','score_adv' => '13','commentaire' => ''),
        array('id' => '196','equipe' => '8','journee' => '10','date' => '1329004800','lieu' => 'Beauval','adversaire' => 'BEAUVALOIS TT 1','score' => '6','score_adv' => '12','commentaire' => 'Dimanche 12 février,

        Pour cette 3ème journée de la seconde phase, le rendez-vous était fixé à 8h00 à la salle pour jouer à Beauval à 30km. Après notre victoire contre St-Valery et le nul contre Bouzincourt, nous étions motivés pour jouer contre Beauval malgré les -12° affichés au compteur de la voiture de Paul (son père nous a conduit aujourd\'hui). Après avoir passé 35 minutes au chaud dans la voiture, nous avons trouvé la salle rapidement et affronté le froid sibérien ! Les adversaires étaient déjà là, à l\'échauffement dans le gymnase. 
        Je note la feuille de match en faisant jouer Benoît en 1er, Floris en 2ème, Paul en 3ème et moi en 4è...
        Cette rencontre devait être plus simple que contre Bouzincourt et St-Valery mais finalement elle sera plus compliquée que ce qu\'on avait pensé... Pas de surprise côté composition adverse, leur équipe était celle « prévue ».

        COMPOSITION de Beauval TT 1 :
        MATHON Serge 764pts
        POTEL Christophe 958pts
        DOUAY Jonathan 954pts
        MAYEUX Eddy 1074pts

        On commence bien comme à chaque fois avec une victoire de Benoît contre Serge en 3 sets et celle de Floris contre Christophe en 3 sets également.
        Puis la défaite de Paul contre Jonathan en 3 sets et la victoire de Jeoffrey contre Eddy en 4 sets nous donne l\'avantage.
        Après ce bon début Benoît s\'incline face à Christophe en 5 sets, Paul perd face à Eddy et Jeoffrey face à Jonathan. Floris ramène 1 point supplémentaire en battant Serge en 3 sets !
        4 à 4, le match se resserre juste avant les doubles. Ce sera donc Benoît et Jeoffrey d\'un côté et Floris et Paul de l\'autre (comme d\'habitude !).
        Malheureusement, nos deux doubles vont s\'incliner en 4 sets tous les deux … la déception est grande puisqu\'à partir de là les choses vont s\'emballer mais pas dans le bon sens !

        On va subir 3 nouvelles défaites : Paul contre Christophe en 4 sets, Benoît contre Eddy en 5 sets, Floris contre Jonathan en 4 sets. La victoire de Jeoffrey contre Serge en 4 sets ramène le score de la rencontre à 9-5..... 
        L\'hémorragie ne va pas cesser et de nouveau on va subir 3 défaites qui vont nous démoraliser totalement :
        la défaite de Jeoffrey contre Christophe en 5 sets malgré la balle de match contestable, celle de Floris contre Eddy en 5 sets et celle de Benoît contre Jonathan en 5 sets également !
        Paul bat Serge en 5 sets encore et clot le score à 12-6 en faveur de Beauval...

        Bilan :
        Benoît : 1
        Floris : 2
        Paul : 1
        Jeoffrey : 2

        Bon ben voilà.... On repart tous très déçus après cette rencontre, on s\'attendait à une victoire, même assez large avec nos bons résultats sur les 2 dernières rencontres, mais cette défaite ne nous permet plus de jouer la montée, on se contentera du maintien et l\'équipe tournera très certainement...

        Jeoffrey Stéphan'),
        array('id' => '197','equipe' => '10','journee' => '10','date' => '1329004800','lieu' => 'Amiens','adversaire' => 'ABBEVILLE AC 7','score' => '14','score_adv' => '4','commentaire' => 'Notre équipe de D3 (10) s\'impose 14/04 face à Abbeville.

        Dans le détail : 

        - Gregory Chhe bat 748-719-708-700.
        - Alexandre Goupil bat 748-708-700 et perd 719.
        - ERwan Bled bat 748-719-708-700.
        - Victor Hénao bat 700 et perd 748-719-708.

        Les deux doubles ont été brillamment remporté par Alex et Greg qui affrontaient Christophe et Loic (victoire à la belle), et l\'autre par Erwan et Victor qui affrontaient Hubert et Mickael (victoire 3-1).

        Alexandre Goupil
        '),
        array('id' => '198','equipe' => '11','journee' => '10','date' => '1329004800','lieu' => 'Amiens','adversaire' => 'EPPEVILLE TT 4','score' => '12','score_adv' => '6','commentaire' => 'Nous disputons ce match à domicile, nous découvrons la composition de l\'équipe adverse :

        Eppeville TT 4 :
        GATIEN Baptiste 646 pts
        LEFEVRE Dominique 707 pts
        BOURGY Florian 642 pts
        LEFEVRE Clément 500 pts

        AMIENS STT 11 :
        BOUTEILLER Hugo 899 pts
        BEAUFRERE Florian 693 pts
        HAUW Joffrey 706 pts
        WALLON Enguerrand 625 pts

        Déroulement des matchs :

        Hugo bat Baptiste 11-8 11-5 11-9
        Florian bat Clément 11-4 11-2 11-3 
        Joffrey bat Matthieu 11-5 12-10 10-12 7-11 12-10 match très serré bravo
        Dominique bat Enguerrand 11-5 11-3 11-4

        Hugo bat Clément 11-3 11-4 11-4
        Florian bat Baptiste 11-7 7-11 11-8 7-11 11-1
        Matthieu bat Enguerrand 16-14 8-11 16-14 13-11 match très serré également
        Dominique bat Joffrey 11-9 11-9 11-8 

        Doubles :
        1er double : 
        Eppeville bat Amiens 11-9 11-7 9-11 11-8
        Amiens bat Eppeville 14-12 11-5 11-6

        Baptiste bat Enguerrand 11-3 11-7 13-11
        Joffrey bat Clément 11-4 11-5 11-2
        Dominique bat Hugo 8-11 8-11 11-8 11-5 11-7
        Florian bat Matthieu 11-6 11-7 11-0

        Joffrey bat Baptiste 11-7 10-12 11-5 11-6
        Enguerrand bat Clément 12-10 11-7 11-4
        Hugo bat Matthieu 11-7 11-8 11-1
        Florian bat Dominique 13-11 11-7 8-11 12-10

        Résultat satisfaisant 12-6 malgré quelques matchs qui auraient du être gagnés.
        Bravo à l\'équipe.

        Hugo BOUTEILLER'),
        array('id' => '199','equipe' => '12','journee' => '10','date' => '1328832000','lieu' => '/','adversaire' => 'Exempt','score' => '18','score_adv' => '0','commentaire' => ''),
        array('id' => '202','equipe' => '9','journee' => '10','date' => '1329004800','lieu' => 'Friville','adversaire' => 'TT FRIVILLE 3','score' => '8','score_adv' => '10','commentaire' => ''),
        array('id' => '203','equipe' => '1','journee' => '11','date' => '1330732800','lieu' => 'Pays Courvillois','adversaire' => 'PAYS COURVILLOIS 1','score' => '11','score_adv' => '5','commentaire' => 'Une rencontre pépère…

        Après notre dernière défaite 11/9 contre Monaco à domicile, la team avait à cœur de rectifier le tir et ainsi retrouver le chemin de la victoire.

        Rendez-vous était pris à la salle à 11H30. Là m’attendaient Denis CHATELAIN COLDPLAY ainsi que son fidèle acolyte, pour remplacer le Beegees HAIGNERE parti en vacances de ski à Tignes améliorer son planter du bâton et surtout son jeu de jambes. J’ai nommé : The Artist, le plus grand bloqueur de toutes les CAF (Contre Attaque Foudroyante), notre George Clooney (pour la couleur et non l’implantation capillaire !) le seul et l’unique………Pépère l’HOTE. Voila, tout ça pour ça, c’est beau…. Je sais !!

        1H30 de route plus tard, nous faisions une halte à St Pierre les Elbeuf pour prendre notre coéquipier Malin, un des poids lourds de l’équipe (pongistiquement je parle, attention !!). En attendant ce dernier (pas de l’équipe, on sait tous que c’est Alex!! oups), je décidais d’aller faire des courses, tant qu’à faire, et surtout de ramener quelques bonnes pâtisseries à manger, seulement ‘en cas’ de victoires individuelles (pour certains ça va être vite fait !!!).

        Plus tard encore sur la route, ne pouvant plus attendre pour pouvoir ‘taper’ dans mon sandwich (j’fais mon VAQUIER là !) je demandais à ‘papa’ Denis si je pouvais manger dans la voiture (presque obligé de lever le doigt), réponse : attend un pti peu pépère !!!   Défiant son autorité en ouvrant le paquet, j’ai eu le droit à « j’vais te refaire ton éducation ». Du coup ‘puni’, obligé d’attendre l’arrêt à une pompe à essence pour pouvoir enfin ‘taper dedans’ (c’est moche !!!).

        ‘On the road again’, juste avant d’arriver à la salle, Pépère et ‘Chris Martin’ commençaient à faire un pari (tient ça faisait longtemps !) sur l’état de la salle des adversaires. D’un coté Denis, qui sentait comme une salle de campagne, et de l’autre Pépère, plus optimiste pour sa 1ère fois en national qui lui sentait et voulait peut-être aussi jouer dans une belle salle. Verdict : Pépère winner, Denis looser… par contre pour les matchs là ce sera autre chose. Mais pour les kirs là, Pépère gagne encore haut la main.

        Enfin, tout ça pour arriver devant ……………..une maison de retraite et une ambulance (un signe pour nos 2 ‘archives’, Bruno likes this !!)



        Composition des équipes :
        Equipe Amiénoise (les éclairs)   
        A : MARAIS Yannick (n°192), PLOTUNA (n°200), CORRE Cédric (n°284)
        B : LHOTE Philippe (17), CHATELAIN Denis (n°876), LECOMTE Yohan (19)

        Equipe Courvilloise (les religieuses)
        A : ROULLEAU Stéphane (n°734), LIBERGE John (19), LECHIEN Karl (n°920)
        B : MORIN Cyril (19), MARIE François (14), COCHET Didier (19)

        Détails :

        MARAIS Yannick (2/2) : ‘l’homme qui claqua les biz’. Un 1er match serré mais Jaja sortait le coup de ROULLEAU qu’il fallait sur Stéphane pour s’imposer sans problème dans la manche décisive. Puis un 2nd match gagné aisément sur LECHIEN qui s’est enfoncé dans le MARAIS amiénois, victoire 3 à 0. Un Jaja quasi à domicile qui pour remercier ses adversaires leur fait la biz…

        PLOTUNA Malin (3/3) : ‘le poids lourd de la A’. 3 petits sets contre LIBERGE, 3 contre ROULLEAU puis 3 contre LECHIEN et puis c’est tout !!! s’il avait rasé ses cheveux et sa barbe on l’aurait appelé ‘monsieur propre’.

        CORRE Cédric (1/2) : 1er match, 1ère défaite, bonne petite contre sur LECHIEN qui avait du ‘mordant’ et qui n’a pas lâché le morceau à la manche décisive. S’est rattrapé par la suite sur LIBERGE 3 à 0 mais aussi pendant la rencontre en regardant des vidéos de soirée où on met des casques !!!

        LHOTE Philipe (0/2) :’ j’ai envie qui me rentre dedans’, ‘jveux pas attaquer’, ‘il a le même jeu que moi’ ‘jpeux le jouer 20 fois, jle battrai jamais… du coup défaite 3 à 0 sur COCHET. Ensuite défaite ‘9’ à la belle sur MORIN (sosie officieux de Timo Boll) après un match de toute beauté. Presque le 1er match en National de Pépère, du coup pas de pâtisserie mais 3 bons kirs d’après match pour se venger (c’est ça le tennis de table !).

        CHATELAIN Denis (3/3) : ‘le poids lourd de la B’. N’a perdu que 2 sets au cours des 3 matchs puis a gagné le double quasiment à lui tout seul (encore invaincu avec Yohan à ce jour !!), il semble que Denis a dû aiguiser fortement son picot contre le ‘rocher’ depuis la dernière fois. Résultat, nos amis Courvillois en ont fait les frais. Du coup a bien mérité un petit éclair au chocolat à la fin de la rencontre hummmm !!!

        LECOMTE Yohan (1/2) : ’le poids léger de la B’. 1er match, s’est fait ‘à COCHET’ par Didier, synonyme de défaite à la belle. Puis un 2nd match gagné sur MARIE qui n‘a pas gagné un seul set lors de toutes ses rencontres (le vierge MARIE !). A tenue compagnie a Denis sur la route du retour pour ne pas qu’il s’endorme, tout en refaisant le monde !!!

        (HAIGNERE Alexandre) : parti à Tignes skier dans la ‘peuf’, prendre du bon temps, se mettre des caisses et surtout se faire descendre en motoneige par l’équipe médicale (bein bravo !!)

        Evolution du score :
        AMIENS - COURVILLE
        1-1 / 3-1/ 3-3 / 8-3/ 8-5/ 11-5

        Au final :

        Une rencontre de championnat se joue en équipe et à 6, mais sache que pour la composition des joueurs seul JAJA est maître à bord !! OK Corrus…
        Une victoire de la team qui nous place 1ère de la poule.
        3 kirs à 0 et un perroquet pour Pépère.
        Un bon petit repas avec l’équipe adverse pour seulement 10 euros !! (on fait même gagner de l’argent au club, T’EN VEUX toi).

        Yohan LECOMTE'),
        array('id' => '204','equipe' => '2','journee' => '11','date' => '1330732800','lieu' => 'Amiens','adversaire' => 'JOUE LES TOURS TT 1','score' => '9','score_adv' => '11','commentaire' => 'Amiens - Joué les Tours, ça vaut le détour !

        Pour cette 11ème journée, Amiens recevait Joué les Tours, sympathique premier de la poule.
        Ca sentait la branlée à plein nez.
        De toute façon nous on s\'en fous, on est la pour Jouer.
        Les compos sont données et à la surprise générale ...
        On doit mettre 2 points sur le papier !
        Génial à 18h on est rentré pour l\'apéro!

        Les Joueurs
        En A : CHATELAIN Raphaël (N836), HARLE Christophe (N595), DUBOIS Lucas (17)
        En B : BLATRIX Maxime (18), RASSELET Vincent (18), VAQUIER Benoit (15)

        Les Déjoués
        En A : DUBOIS Cyril (N254), RAMOS David	(N490), RICHARD Gregory	(N331)
        En B : GUILLOT Romain (20), LEAUTE Louison (17), PASQUIER Ludovic (20)

        Premier moment fort avec le carton jaune de benoit après 18 points joués.
        Certainement perturbé, il a pas dépassé 5 du match.
        Comme prévu, malgré la resistance Amiénoise, nous sommes vite menés 4-0

        Max ouvre le score logiquement. On est pas fanny, on peut se lacher !
        5-2 après la victoire de Max et Vince pour le double en B.

        7-4 avec une nouvelle défaite de raphi à la belle. Un match balancé par Vaquier et la perf du siècle.
        On aura beau dire qu\'à chaque fois qu\'il fait un n° c\'est un exploit. Il arrive quand même à les reproduire.
        Dub\' nous fait donc ça spéciale. Une perf sur le n°490 qui lui vaut la palme du joueur du week-end.
        C\'est peut être ça photo en fond d\'écran qui le motive en fait.
        Une victoire 3-1 de Lulu qui nous booste bien!

        9-5 après la seconde victoire logique en B et la victoire du double en A. Une défaite à la belle de max sur Pasquier qui envoyait du très lourd.
        Et Dudu qui perd Dubois. Trop la loose quand même !

        Bonne série des Amiénois qui terminent fort, très fort.
        Le double en A gagner 3-0, la victoire de max qui me venge sur le 20. Puis la victoire de vince qui venge max à la belle au fight sur l\'autre 20.
        La victoire de raphi qui achève le n°490.
        Un travail d\'équipe reconnait raphi: "Lucas me l\'a bien cassé"
        Ch\'dub\' qui n\'aura pas cassé Dubois en fin de rencontre. N°254 ça reste fort quand même !

        10-9 pour Joué les tours.
        Manquait plus que le meilleur pour la fin.
        Vaquero sur Leaute pour offrir le nul. Un duel de J1.
        Premier set gagné facilement. Puis mène 6-2 dans le deuxième set, et balance 8 merveilleux gros top dans la bâche pour laisser filer le set.
        Gagne facilement le troisième set sans forcer.
        Se retrouve à 6-3 dans le quatrième. Temps mort adverse. Saint Benoit en mode simplet se pointe au coaching en se marrant.
        Il réedite ça performance en envoyant 7 merveilleux top dans la bâche, et prend 11-6 dans ce set.
        Leaute s\'est mis a jouer et Vaquier s\'est mis à raler et à stressé.
        Je vous laisse deviner la fin. J\'en pleure encore.
        Dans la douche s\'était encore une fois: "On s\'est fait Nick Hé"
        Fin de la rencontre à 21h45 donc. On aurait pu passer une bonne soirée...

        Bonne ambiance au bar durant l\'après match.
        On les aura fait douter. On était pas loin du hold up !
        Dommage presque... ça commence à faire beaucoup.

        La remarque de la soirée signée Vaquero: "On aurait pu gagner"
        Benoit tait toi et bois ton coca zero !

        Dudu (1V, 2D) La motivation de Dudu: Les 300 et l\'après match. Il tape pas dans le 200 ni dans le 400. La parole du sage en ce samedi soir: "On méritait le nul"

        Raphi (1V, 2D) Deux défaites à la belle sur 200/300. Un petit manque de fraicheur à la belle qui se paye. Mais bon quand on voit les effets du stage Courbevoie, on critique pas !

        Lulu (1V, 2D) Accroche encore ça photo sur le site de l\'ASTT, et cumule encore un +40 dans son album FFTT. Finira bientôt avec sa tête dans l\'Equipe !

        Double remporté 3-0 par Dud\' et Raph\'

        Max\' (2V, 1D) Aurait pu faire 4 + double. The coach de la journée ! S\'incline de peu contre le gaucher. Mais encore une fois, il a offert 3 belles prestations.

        Vince (2V, 1D) En mode survivor, a cotoyé les étoiles plus d\'une fois dans la journée. Cramé au deuxième match de la journée. Peut remercier Max, ses coéquipiers le public, et les pépitos de Lucas pour l\'avoir soutenu.

        Vaquero (3D) La j\'ai le choix entre:
        - Inexistant comme dans ses matchs.
        - The boulet 
        - ...  "blanc" ...
        On sait que t\'aime bien le coca zero, mais à un moment va falloir éviter les bulles !

        Double remporté par Max et accessoirement Vince à la belle.

        Un grand merci aux supporters venu juste pour nous, dont notre cher Président.
        On aura encore besoin de vous à la 13ème journée !
        Ca va etre chaud pour le maintien. Victoire impérative face à Saint-Julien à la prochaine journée ...
        Pour éviter la R1 !

        Vincent Rasselet'),
        array('id' => '205','equipe' => '3','journee' => '11','date' => '1329523200','lieu' => 'Amiens','adversaire' => 'COUDUN SL 1','score' => '10','score_adv' => '10','commentaire' => 'Tiens, voilà du Coudun

        Pour cette quatrième rencontre de la seconde phase, match incontournable pour espérer un éventuel maintien, Antoine HUON, 13 ans, s’était laissé pousser la barbe. Il portait le képi blanc, et avait enfilé ses rangers. Les regards qui se croisent. C’est toujours les mêmes gestes. D’abord la jambe gauche, toujours. Les chaussettes, les chaussures. Puis la jambe droite, toujours: http://www.youtube.com/watch?v=srk5xQ4Ny1k.

        Il portait la hache à l’épaule, pratique pour défoncer les crânes couduniens. Et avait enfilé le tablier de cuir du sapeur, protection idéale contre les giclées de sang. Marchant d’un pas lent, sa voix avait bizarrement mué depuis le début de la deuxième phase :  http://www.youtube.com/watch?v=qyoLv_HVFJE&feature=related

        Pour compléter le groupe, le premier consul SELLIER avait fait appel aux vieux grognards Jean TAQUET et Bruno MARYSSE. Ainsi qu’à Alexander CREUNET, BlackOp exilé dans le Nordikistan depuis le début de la saison.

        Pour ce match du maintien, les Prédator coudunois allaient forcément saigner du nez : http://www.youtube.com/watch?v=MP0yA3kTBn0&feature=related
        Oui, si tu es allé au bout du documentaire, tu auras remarqué que l’ASTT participe activement à la déforestation de la forêt amazonienne. Et qu’on parle désormais allemand dans l’équipe de R1.

        Le match débutait à 16 heures tapantes par un 2/0 pour Coudun (victoires de Julien LE DU et de Guillaume LEFEVRE sur Alexandre CREUNET et Antoine HUON). Puis 2/2, et succession d’égalités jusqu’à 9/9, avec le gain des deux doubles pour les coudunois. Coudun menait 10/9 après la victoire de Xavier DUPONT sur Alexandre CREUNET. Mais Antoine HUON, solide, arrachait in extremis l’égalisation contre Beranger AMBEZA, dans le money time.
        Match nul… Mais pas vraiment.

        Le tennis de table est un sport total. Alliant la vista, la grinta, le coup d’œil, la tatane coup droit et le calcul mental : 37 sets pour Amiens / 38 sets pour Coudun.
        Un petit set pour l’Homme, un grand set pour le maintien de l’Humanité coudunoise. Mais seulement si les deux équipes terminent à égalité à la fin de la phase.
        Bizarre, je viens de commencer à saigner du nez…

        Les calculés

        Christian HENON (3 victoires en A) : D’après Edith PIAF « Il était mince, il était beau, il sentait bon le sable chaud. Il a topé toute la nuit, mon Légionnaire ». 3 victoires : le coup du képi. Comme à Kolwezi : capitaine Hénon toujours présent sur les gros matchs.

        Alexandre CREUNET (0 victoire en A) : A court de souffle, a eu du mal à terminer son parcours du commando. Est resté accroché dans les barbelés contre Antoine LE DU (défaite 3/1). Puis a chuté du mur d’escalade sur Simon AMBEZA (défaite 3/0). Et a fini par tomber du pont de singe sur Xavier DUPONT (défaite 3/0).

        Jean TAQUET (3 victoires en A) : Pépé le Moko. A jeangabinisé tous ses adversaires, 3 sets à 0. Du travail d’expert-comptable: 9 sets pour Jean / 0 pour Coudun. Monsieur Propre.

        Pierre LE GALLOUDEC (1 victoire en B) : On accepte tout le monde dans la Légion. D’où que tu viennes, même de Bretagne. Quel que soit ton passé, surtout pongiste. Quels que soient les crimes, ou les frappes dans les bâches que tu aies pu commettre. Quelle que soit la main dans laquelle tu tiens ta raquette. Quoi que tu collectionnes, même les cartons jaunes. Mais bon, désormais avec 3 imagettes, ton album Panini est complet. Ce serait bien de faire un petit break jusqu’à la saison prochaine Pierrot.

        Antoine HUON (1 victoire en B) : Fidèle à sa nouvelle devise : « Ni Dieu ni maître ». A commencé par briser la statue de marbre de Jean-Philippe GATIEN. Puis s’est lancé dans un concours de whisky-coca cul-sec avec les coudunois. Un peu présomptueux... Toujours en réanimation. N’est pas encore sorti du coma depuis 3 jours.

        Bruno MARYSSE (2 victoires en B) : La campagne napoléonienne pour le maréchal MARYSSE : Wagram sur Béranger AMBEZA (victoire 3/0). Austerlitz sur Guillaume LEFEVRE (victoire 3/2). Mais Waterloo sur Julien LE DU (défaite 3/2, malgré une balle de match au 4ème set). On attendait Grouchy et ce fut Blücher, avec un bloc frappé coup droit à 11/10 qui a frôlé la bande. Dommage. Presque.

        Patrice CHAERLE (4 jaunes + 1 rouge) : Sais-tu, jeune bachelier, que si les terminales S inventent le carton, les STG le fabriquent, les terminales ES le vendent, et les terminales L dorment dessus ? Mais que c’est Patrice CHAERLE qui le brandit ?

        Philippe L’HOTE (Time-out) : Grièvement blessé au moral lors du dernier match. Son poignet en plastique et son genou en mousse trônent désormais comme des reliques à côté de la main en bois du capitaine Danjou, dans la crypte du musée de la Légion étrangère, à Aubagne.

        Christophe HARLE (The Dud) : A châtié dans la même soirée Johnny Walker, J&B et Chivas, aucun n’ayant dépassé les 5 points dans chaque set. Envisage de devenir un membre permanent de Whiskypédia.

        Benoît VAQUIER (Baker boy): Achète 4 baguettes, et distribue les pains à la table et maintenant en dehors. Comme un symbole de Jésus. Mais gaucher. Merci la mie.
        CRITICMAN : “You want to know my name ? You want to see my face? I’m the Devil !!! Mouhaha !!! »

        Les calculateurs

        Simon AMBEZA (1 victoire en A + double) : Christique. A salué ses anciens disciples amiénois. Puis est monté sur la croix, seul, sans qu’on lui fasse la courte. S’est lui-même planté les clous dans les mains, en silence. Craignant le carton de Ponce Chaerle-Pilate. Enfin, dans une ambiance de bibliothèque nord-coréenne, a donné son épaule droite à l’AS Coudun. Se luxant l’articulation acromio-claviculaire sur chaque coup droit. Martin RIGGS likes this : http://www.youtube.com/watch?v=A3OlFgr4SKA. 

        Antoine LE DU (1 victoire en A + double) : Expéditif sur Alexandre CREUNET (victoire 3/0). Expédié sur Jean TAQUET (défaite 3/0). Le temps s’est arrêté sur Christian HENON, vif comme une tortue parkinsonienne sous neuroleptiques. Entre chaque point, Antoine a eu le temps de prendre une douche, d’aller fumer une clope, et de lire deux chapitres de Guerre et Paix (défaite 3/1, en 12 heures 25 minutes).

        Xavier DUPONT (1 victoire en A) : Si dans le bourg de Coudun tu ne t’appelles pas AMBEZA ou LE DU, tu n’as que 33% de chances d’intégrer le club de tennis de table. Ouf, Xavier. Tu fais partie des heureux élus.

        Guillaume LEFEVRE (2 victoires en B + double) : Si dans le bourg de Coudun tu ne t’appelles pas AMBEZA ou LE DU, tu n’as que 30% de chances de gagner un match lors d’une journée de championnat. Congratulations tchiot Guy. Tu as pulvérisé les statistiques. Notamment après avoir remonté un 9/4 au 5ème set contre Pierre LE GALLOUDEC (victoire 3/2).

        Julien LE DU (3 victoires en B + double) : Quand Dieu s’ennuie au Paradis et qu’il a envie de faire un petit ping, il descend sur terre et revêt l’enveloppe corporelle de Julien LE DU. Fait 3 plus le double, puis remonte chanter avec les anges. Pendant que le Dju, lui, s’en va en retrouver d’autres, en boîte.

        Bérenger AMBEZA (0 victoire en B) : Lost in translation. Le Bill MURRAY coudunois n’a pu sortir de sa léthargie en ce samedi. Anesthésié par Pierre LE GALLOUDEC (défaite 3/2). Puis chloroformé par Bruno MARYSSE (défaite 3/0). Et enfin curarisé par Antoine HUON (défaite 3/1).

        Le détail

        Jean TAQUET (2010 points) : bat Simon AMBEZA (2031 points) (8,13,7), Antoine LE DU (1800 points) (7,6,10) et  Xavier DUPONT (1605 points) (8,3,8)
        Christian HENON (1882 points) : bat Simon AMBEZA (2031 points) (6, 3, 8), Antoine LE DU (1800 points) (4,-6,6,9) et  Xavier DUPONT (1605 points) (6,-5,-7,7,8)
        Alexandre CREUNET (1654 points) : perd Simon AMBEZA (2031 points) (-8,-7,-6), Antoine LE DU (1800 points) (11,-7,-9,-8) et Xavier DUPONT (1605 points) (-9,-4,-8).
        Christian et Jean perdent Simon et Antoine (-10,-9,-6)
        Pierre LE GALLOUDEC (1784 points) : bat Bérenger AMBEZA (1589 points) (6,5,-9,-6,5) et perd Guillaume LEFEVRE (1724 points) (7,-5,-10,-9) et  Julien LE DU (1647 points) (9,-6,9,-4,-9).
        Bruno MARYSSE (1797 points) : bat Bérenger AMBEZA (1589 points) (5,13,11) et Guillaume LEFEVRE (1724 points) (-8,8,-6,3,4) et perd Julien LE DU (1647 points) (2,10,-7,-11,-3).
        Antoine HUON (1349 points) : bat Bérenger AMBEZA (1589 points) (11,10,-8,9) et perd Guillaume LEFEVRE (1724 points) (-2,-9,-6) et  Julien LE DU (1647 points) (-7,-9,3,-5).
        Bruno et Pierre perdent Julien et Guillaume (-6,-10,-9).

        Denis CHATELAIN'),
        array('id' => '206','equipe' => '4','journee' => '11','date' => '1329523200','lieu' => 'Montdidier','adversaire' => 'MONTDIDIER PPC 1','score' => '13','score_adv' => '7','commentaire' => 'Une victoire contre Montdidier qui nous laisse en course pour le maintien.

        Amiens STT
        En A
        Bertrand Bathelot 17
        Herly François 15
        Berriat Lenny 14
        En B
        Lefevre Loïc 14
        Louis Vandewoestyne 14
        Jean Paul Poulain 13

        Montdidier
        A 
        Lapo Gauderic 16
        Letesse Vincent 16
        Tazibet Amine 14
        B
        Syoen Jean Charles 11
        Rouillard Emeric 14
        Lievin Emeric 14

        Les résultats :

        En A
        François bat Tazibet et Letesse 3/0 et 3/1 et s’incline 3/1 contre Lapo. Bon niveau de jeu pour François avec des points très spectaculaire contre Lapo.
        Leny s’incline 3/1 contre LApo et bat Tazibet et Letesse 3/1 et 3/0. Probablement le meilleur match de la saison (jusqu’à maintenant) notamment contre
        Letesse avec de beaux points.
        Bertrand bat Letesse 3/0, puis s’incline 3/2 et 3/1 contre Lapo et Tazibet. Défaite assez logique contre Lapo qui a fait peu de fautes en attaque et mauvais match
        contre Tazibet. Très soulagé que la mauvaise performance n’est finalement pas pénalisé l’équipe.
        François et Bertrand gagnent facilement 3/0 le double.

        En B
        Louis 3 victoires. A l’arrache en sauvant 2 balles de match contre Syoen et 3/1 pour les 2 autres. Des matchs moyens pour le niveau de Louis mais il a su les gagner et c’est l’essentiel.
        Loïc 3 victoires, dont un match serré contre Rouillard. Bon niveau de jeu malgré quelques absences.
        Jean Paul, une victoire à l’arrache 15/13 au cinquième contre Rouillard sur le dernier match et une défaite de  justesse 3/2 d’entrée sur Syon. Défaite 3/1 contre Lievin. JP à son niveau.
        Le double s’incline 3/2. En B le double n’est décidément pas la hauteur des performances individuelles.

        Une victoire qui nous laisse espérer pour le maintien mais qui ne suffira probablement pas, il faudra aller en chercher une autre.

        Bertrand Bathelot'),
        array('id' => '207','equipe' => '5','journee' => '11','date' => '1329609600','lieu' => 'Amiens','adversaire' => 'LONGUEAU ESC 1','score' => '6','score_adv' => '14','commentaire' => ''),
        array('id' => '208','equipe' => '6','journee' => '11','date' => '1329609600','lieu' => 'Vauchelles','adversaire' => 'VAUCHELLES ASV 1','score' => '10','score_adv' => '10','commentaire' => ''),
        array('id' => '209','equipe' => '7','journee' => '11','date' => '1329609600','lieu' => 'Amiens','adversaire' => 'CANCHY ASC 1','score' => '13','score_adv' => '7','commentaire' => ''),
        array('id' => '210','equipe' => '8','journee' => '11','date' => '1329609600','lieu' => 'Dreuil','adversaire' => 'DREUIL TT 1','score' => '9','score_adv' => '9','commentaire' => 'Dimanche 19 février,

        Aujourd\'hui pour cette 5ème journée on jouait contre Dreuil à Dreuil. Le rendez-vous était fixé à 8h20 à la salle et après 10 minutes de route on était déjà dans le gymnase... Ils ont installé les tables et on a commencé après avoir rempli la feuille de match...

        Compo de Dreuil TT 1 :
        VAGNIER Rodolphe 1250pts
        LEVALLOIS Serge 940pts
        RAMBURE Bastien 978pts
        COLLET Herouanne 628pts

        Chez nous la même équipe avec Benoît en premier, Floris en 2ème, Paul en 3ème et Jeoffrey en 4.
        Comme à chaque rencontre on commence bien, très bien même avec la victoire de Benoît contre Rodolphe en 5 sets et signe une perf à 388pts, puis la victoire en 5sets également de Floris contre Serge en 5sets ; enfin celle de Jeoffrey contre Herouanne et Paul contre Bastien en 3sets.
        Puis la défaite de Floris contre Rodolphe en 3sets et celle et Benoît contre Serge en 5sets ramènent le score à 4-2 pour Amiens mais avec la victoire de Paul contre Herouanne et celle de Jeoffrey contre Bastien on remonte à 6-2 avant les doubles !
        On lance donc les doubles Floris et Paul vont s\'imposer en 3sets face à Hérouanne et Bastien mais Benoît et Jeoffrey vont perdre en 3sets face à Rodolphe et Serge...
        Mais voilà on va vite se faire rattraper par Dreuil puisqu\'après une belle perf de Benoît celui-ci va faire une belle contre face à Herouanne et Floris va s\'incliner face à Bastien. Jeoffrey va perdre aussi face à Rodolphe mais Paul ramène 1 point supplémentaire en battant Serge.
        Plus que 8-6 pour Amiens ; Benoît perd face à Bastien, Paul face à Rodolphe et Jeoffrey face à Serge en 5 sets tous les trois, Floris gagne contre Herouanne en 5 sets et offre le nul finalement...

        Bilan :
        Benoît : 2
        Floris : 2 + double
        Paul : 2+ double
        Jeoffrey : 2

        Comme d\'habitude on commence bien et on termine mal, mais il nous faudra une victoire supplémentaire pour nous maintenir à coup sûr.

        Jeoffrey Stephan'),
        array('id' => '211','equipe' => '9','journee' => '11','date' => '1329609600','lieu' => 'Amiens','adversaire' => 'MOREUIL PPC 5','score' => '7','score_adv' => '11','commentaire' => ''),
        array('id' => '212','equipe' => '10','journee' => '11','date' => '1329609600','lieu' => 'Flixecourt','adversaire' => 'VILLE LE MARCLET / FLIXECOURT 7','score' => '10','score_adv' => '8','commentaire' => 'Victoire de l\'équipe 10, 10-08 contre Flixecourt.

        Dans le détail :
        - Goupil : 2 + double, bat un 719 et un 534.
        - Chhe : 3 + double, bat 534, 719 et 676.
        - Hénao : 1 bat 534.
        - Tran : 3 bat 534, 719 et 615.

        Greg et moi invaincus en double ... à signaler ! ;).

        Alexandre Goupil'),
        array('id' => '213','equipe' => '11','journee' => '11','date' => '1329609600','lieu' => 'Pierrepont','adversaire' => 'PIERREPONT USL 3','score' => '17','score_adv' => '1','commentaire' => 'La rencontre devait normalement se dérouler à pierrepont mais les salles étaient toutes prises donc le match s\'est déroulé en réalité a Amiens.

        De plus, Enguerrand ne pouvant pas jouer, nous avons fait appel à Christophe PENDANT (1083) pour le remplacer.

        Nous accueillons nos adversaires et découvrons leur équipe :

        Pierrepont USL 3 :
        VAN KERCKHOVE Vincent 770 pts
        CONTESSOTTO Philippe 819 pts
        CHANTRELLE Dominique 794 pts
        \'Franck\' 550 pts

        AMIENS STT 11 :
        PENDANT Christophe 1083 pts
        BOUTEILLER Hugo 899 pts
        BEAUFRERE Florian 693 pts
        HAUW Joffrey 706 pts

        Déroulement des matchs :

        Christophe bat Dominique 11-1 11-5 11-6
        Hugo bat Vincent 11-1 11-3 11-3
        Florian bat Franck 11-4 8-11 12-10 11-2
        Joffrey bat Philippe 11-13 11-8 11-5 4-11 11-6

        Christophe bat Vincent 11-9 11-3 11-7
        Hugo bat dominique 14-12 11-8 11-9
        Joffrey bat Franck 11-8 12-10 2-11 10-12 11-7
        Florian bat Philippe 7-11 12-10 12-10 11-8

        Doubles :
        Hugo/Florian battent Philippe/franck 9-11 11-8 11-7 11-3
        Joffrey/Christophe battent Dominique/Vincent 11-8 3-11 11-1 11-8

        Dominique bat Joffrey 11-9 11-5 11-9
        Florian bat Vincent 11-4 11-8 12-10 
        Christophe bat Philippe 11-6 11-9 11-9
        Hugo bat Franck 11-4 11-2 11-2

        Florian bat Dominique 13-11 11-3 11-9
        Joffrey bat Vincent 11-8 4-11 10-12 11-6 11-6
        Christophe bat Franck 1-2 11-9 11-5
        Hugo bat Philippe 11-6 11-9 11-6

        Score global très satisfaisant 17-1 grâce à Christophe merci à lui pour sa disponibilité !

        Hugo BOUTEILLER'),
        array('id' => '214','equipe' => '12','journee' => '11','date' => '1329436800','lieu' => 'Amiens','adversaire' => 'MUNICIPAUX AMIENS 1','score' => '8','score_adv' => '10','commentaire' => ''),
        array('id' => '215','equipe' => '13','journee' => '11','date' => '1330732800','lieu' => 'Seclin','adversaire' => 'SECLIN PPP 2','score' => '10','score_adv' => '4','commentaire' => 'Pour cette rencontre, notre équipe était incomplète. Notre petite Julia était partie au ski (pas de chute ! Juste une belle marque de lunettes !). Elle a donc été remplacée par Sophie TRAN.
        Départ pour Seclin 13h30
        - première étape : rue Gauthier de Rumilly pour prendre Sophie ;
        - deuxième étape : gare d\'Amiens où Charline nous attendait ;
        - troisième étape : maison de Caroline à Albert ;
        - et enfin, direction Seclin.

        Arrivée à Seclin 15h10... ouverture des portes 15h30... installation de la salle 16h... Nous avons eu le temps de faire notre séance "potins" dans les vestiaires !

        L\'équipe de Seclin : LEMAHIEU Sophie, 13, GROLLEAU Marion, 11, LEFEBVRE Corinne, 11 et MOUVAUX Margaux, 9.
        Les amiénoises : PETITPREZ Caroline, 14, CARLIE Hélène, 14, GRUGEON Charline, 12 et TRAN Sophie, 5.

        Sophie (3 défaites) : Sophie avait l\'envie de bien faire et a donné son maximum. Elle perdra ses trois matchs 3-0 face à GROLLEAU (-1/-4/-2), LEMAHIEU (-3/-1/-5) et LEFEBVRE (-2/-3/-5). Très bonne présence sur le banc pour les encouragements. Merci à toi d\'être venue jouer avec nous.

        Charline (3 victoires) : ce fût laborieux mais trois victoires quand même ! Elle fait une belle perf sur LEMAHIEU, victoire 3-2 (-6/8/-9/10/4). Après, victoire 3-1 sur GROLLEAU (6/8/-7/8) puis elle gagne contre MOUVAUX 3-2 (11/11/-8/-7/10) avec un très bon temps-mort de la part d\'Hélène à 11-10 au 5ème set.

        Caroline (4 victoires) : tout comme Charline : dur dur mais ça passe ! Elle remporte son match 3-2 face à LEFEBVRE (-6/8/9/-8/9). Elle bat MOUVAUX 3-1 (6/-7/5/6) et GROLLEAU 3-1 (-4/10/6/9). Pour finir, elle s\'impose 3-0 sur LEMAHIEU (3/10/10).

        Hélène (3 victoires) : je remporte mes trois matchs 3-0 sur MOUVAUX (6/5/9), LEFEBVRE (8/10/6) puis LEMAHIEU (5/5/10).

        Sophie et Hélène perdent leur double 3-0 contre LEMAHIEU et GROLLEAU (-5/-3/-8) alors que Charline et Caroline le remporte 3-1 face à LEFEBVRE et MOUVAUX (10/9/-11/7) avec une petite remontrance de ma part à la fin du 3ème set... elles se seront bien ressaisies pour le dernier set !

        Victoire 10-4 ! Maintien assuré !

        Hélène CARLIE'),
        array('id' => '216','equipe' => '14','journee' => '11','date' => '1330732800','lieu' => 'Alençon','adversaire' => 'ET ALENCON 1','score' => '5','score_adv' => '10','commentaire' => ''),
        array('id' => '217','equipe' => '15','journee' => '11','date' => '1329523200','lieu' => 'Amiens','adversaire' => 'TT MERS TREPORT EU 1','score' => '17','score_adv' => '1','commentaire' => ''),
        array('id' => '218','equipe' => '16','journee' => '11','date' => '1329523200','lieu' => 'Amiens','adversaire' => 'FOURDRINOY-CAVILLON 1','score' => '18','score_adv' => '0','commentaire' => ''),
        array('id' => '219','equipe' => '17','journee' => '11','date' => '1329523200','lieu' => 'Muille-Villette','adversaire' => 'MUILLOIS PPC 2','score' => '15','score_adv' => '3','commentaire' => ''),
        array('id' => '220','equipe' => '1','journee' => '12','date' => '1331942400','lieu' => 'Amiens','adversaire' => 'GOUVIEUX LAMORLAYE SOTT 1','score' => '11','score_adv' => '6','commentaire' => 'Aujourd’hui, c’est derby ! Pour le compte de la 12ème journée nous accueillons donc une équipe très compétitive de l’Oise avec le retour d’un de ces leadeurs, Arnaud AUGER. Après l’échauffement, grosse réunion au sein de la team pour savoir qui va en A et qui va en B. 
        Capitaine Yannick trancha !
        Ce sera les trois fantastiques en A et les trois fantaisistes en B. 

        Composition des équipes :
        Equipe Amiénoise :
        A : MARAIS Yannick (n°196), PLOTUNA Malin (n°200) et CORRE Cédric (n° 284)
        B : CHATEAIN Denis (n°879), LECOMTE Yohan (19) et HAIGNERE Alexandre (19)

        Équipe Gouvieux Lamorlaye :
        A : FALEK Hazedine (n°583), AUGER Arnaud (n°664) et GOBAT Alexandre (n°769)
        B : KOCK Alexandre (n°755), DUCHEMIN Kévin (n°854) et COQUEMAN Guillaume (20)

        Détails :

        MARAIS Yannick (3/3) : Le retour du Jédaï ! Yannick s’imposa facilement lors de ces trois rencontres. Bref, Yannick c’est costaud. S’est aussi bien marais sur le banc avec sieur GOUPIL, mais là … je n’ai pas tout compris…

        PLOTUNA Malin (2/3) : Malin s’imposa aisément en 3 sets lors de ces deux premiers matchs face à AUGER et GOBAT. Face à FALEK avec un système de jeu assez compliqué à négocier, il s’inclina 11/08 à la belle.

        CORRE Cédric (2/2) : Revenu de Chine dans la semaine, il a su parfaitement négocié le décalage horaire et les pâtes de fruits (ouh la balance !).  Cédric c’est en fait le joueur de A.  Après avoir perfé contre Monaco, là il s’imposa en 3 sets face à GOBAT et FALEK. Chapeau l’artiste !
        P.S : Il va falloir que tu aides mister GOUPIL, il n’a toujours pas compris à quoi servait la séparation « cornilleau » sur la photo. Nous t’en serions tous reconnaissants !

        CHATELAIN Denis (3/3): L’ex homme de la hérain. Et oui, « ex » car maintenant c’est lui qui tient la baraque en B de N3. Il s’imposa en 3 sets face à COQUEMAN, en 4 sets face à DUCHEMIN et KOCK. Le tout avec un soupçon de top-spins coup droit et une grosse louche de claquette revers avec son grand ami : le soft. Bref, efficace le man ! Encore une fois merci pour le repas d’après-match, tout était parfait aujourd’hui Monsieur « Nnni » (je n’ai pas encore vraiment compris ce surnom. Lol.)

        LECOMTE Yohan (0/2) : YOYO, le malheureux du jour, la petite pleureuse. Il s’inclina d’entrée en 4 sets face à DUCHEMIN après avoir mené 1-0 et eu 3 balles de sets dans le deuxième. Puis, il s’inclina également en 4 sets face à KOCK. Petit manque de confiance en ce moment mais son retour prochain fera mal … très mal !

        HAIGNERE Alexandre (1/3) : Alex s’inclina 13/11 à la belle pour son premier match face à KOCK. Puis se fit surprendre en 4 sets, tous aux avantages par COQUEMAN. Enfin, après avoir montré un bon niveau de jeu durant la journée il fut quand même temps de gagner un match ! Il s’imposa en 4 sets face à DUCHEMIN. Encore une fois, beaucoup de « presque » pour seulement 1 match gagné.

        Evolution du score :
        AMIENS – LAMORLAYE
        1-1 / 4-1 / 5-3 / 8-4 / 9-6 / 11-6

        Au final :
        Une victoire de plus qui nous conforte dans cette 1ère  place, synonyme de montée…
        Une invincibilité perdue en double pour Denis qui durait depuis quasiment 1 an, toutes les bonnes choses ont une fin.
        Ainsi que son fameux kock au 20 que nous attendons toujours d’ailleurs !!

        Alexandre HAIGNERE'),
        array('id' => '221','equipe' => '2','journee' => '12','date' => '1331942400','lieu' => 'Saint-Julien','adversaire' => 'SAINT JULIEN TT 1','score' => '5','score_adv' => '11','commentaire' => 'St-Julien - Amiens : un coup pour rien !

        En ce samedi matin 8h45 devant l\'ASTT, on s\'était dit rendez-vous à St-Julien, pour le maintien.
        Une victoire et on les plaçait derrière nous a coup sur.
        Pour l\'occasion on avait loué en plus du camion une chauffeur de luxe. Encore merci Catheriiiine !
        On était au taquet, près à faire trois + double comme Jean. 
        Pis finalement on s\'est fait broyer.
        Ils nous avaient mis dans l\'ambiance pourtant, une foule assommante pour applaudir Benito Vaquero. 
        Oui, juste pour lui. On a même cité son nom au micro, c\'est pour dire!
        Raphi a mis un point magique.
        Dud\' a mis une palette après sa 20ème biquette.
        Lulu a mis un petit set (pas loin de mener 2-0 sur le 400)
        Max\' a fait 1, mais s\'est surtout fait un copain !
        Ben\' perd 11-9 à la belle. Normaaal !
        Vince a mis 3 tops de suite, mais qu\'une seule fois.
        On s\'est tous fait une copine, hein Max\' ... on l\'aime bien notre S. notre Sainte Catherine !

        Bref on perdu, mais ... C\'est pas graaave !

        En face c\'était prenable, mais loin d\'être les plus mauvais.
        Pour infos les compos :

        Les "Amis et noix"
        En A : CHATELAIN Raphaël (N836/2099), HARLE Christophe (N595/2180), DUBOIS Lucas (17/1710)
        En B : BLATRIX Maxime	 (18/1896), RASSELET	Vincent	 (18/1885), VAQUIER Benoit (15/1583)

        Les "ça joue bien"
        En A : AGBETOGLO Komi-Mawussi (N262/2425), FER Yannick (19/1978), RICHARD Arnaud (N479/2212)
        En B : PICARDAT Nicolas (18/1898), PENOT Yoann (18/1846), BUXMAN Laurent	 (19/1986)

        Bon donc jusque là tout allait bien. Puis on perd 5 belles, on a encore joué au casse-brique en B, mais on s\'est fait broyé.
        On s\'est même légèrement frité, en tout bien tout honneur, parce que nous les pongistes on est exemplaire !

        Dud\' (1V,2D) Pas assez stressé par l\'enjeu, on aurait peut-être du le faire conduire à l\'aller finalement ! Auteur d\'une poigne de Fer pour s\'imposer d\'entrée. D\'un passage à vide sur Richard. Et d\'une magnifique prestation sur Komi-Mawussi dit "petit lapin" il s\'effondre à la belle. 

        Raph\' (1V,2D) Sublime prestation contre Agbetoglo. Je confirme que la balle était blanche, mais les tops c\'était des grêlons ! Il aurait pu mené 2-0, puis malheureusement, un faux départ à la belle. Assure le job d\'en Fer. Puis s\'incline face à Richard, petit manque de fight.

        Ch\'dub\' (0V,2D) Bonne entame, face à Richard, pas loin de mener 2-0, il s\'incline finalement en 4 manches disputées. Puis défaite sur Agbetoglo 3-0.

        Double perdu à la belle par Christophe et Raphael face à Abgetoglo et Richard.

        Vaquero (0V,2D) Pas loin, comme d\'hab, dommage pres... je vous laisse compléter. Cependant ya du progrès, cette fois-ci la balle a ripée sinon il aurait servi court et il aurait peut-être gagné. Encore une fois Penot de ne pas avoir pu gagner.

        Max (1V,2D +D) Penot lui aussi de contrer d\'entrée, il se reprend et l\'emporte sur Picardat, puis craque sur Bu-bux, Buxman ou bie  brusque man. The wall, zero bloc zero top raté ou comment te faire craquer.

        Vince (1V,1D+D) Victoire d\'entrée sur Picardat pour se rassurer, puis blocage également sur Buxman. 
        Bloqué à 10 sur les deux premiers sets, j\'ai pas réussi à conclure. http://www.youtube.com/watch?v=UBQfpdippMw

        Double remporté par Maxime et Vincent 3-0 sur Picardat et Penot.

        Bu-bux  (3V et un "tcho" (de trop) Aura traversé un mois de coma, surmonté trois crises cardiaques, retrouvé l\'usage de son côté droit qui était paralysé pour nous fouttre une branlée, et ça c\'est beau !

        Chatelain (0,0,0) Chatelain zéro, zéro, zéro !!! Chatelain zéro, zéro, zéro !!!  Chatelain zéro, zéro, zéro !!! (Hommage au bouffeur de Mc Do)

        On a donc grillé le joker 50-50
        Il nous reste une chance de nous sauver, et ça passe par une victoire la prochaine journée contre 7 îles Perros.
        Pour cela on fait appel à un ami...  pour remplacer Raphael. Bonne chance à lui aux championnats du monde UNSS.
        Et on fera appel au public pour une ambiance au rendez-vous.
        On a besoin de vous !

        Vincent Rasselet'),
        array('id' => '222','equipe' => '3','journee' => '12','date' => '1331942400','lieu' => 'Compiègne','adversaire' => 'COMPIEGNE TT 1','score' => '9','score_adv' => '11','commentaire' => ''),
        array('id' => '223','equipe' => '4','journee' => '12','date' => '1331942400','lieu' => 'Amiens','adversaire' => 'SOISSONS ASPTT 1','score' => '12','score_adv' => '8','commentaire' => 'Une victoire 12/8 qui est une très bonne opération mais qui ne suffit probablement pas pour assurer le maintien.

        Amiens

        A: Taquet J 20, Berrriat L 14, Bathelot B 17.
        B: Vandewoestyne L 14, Herly F 15, Deguingand Andrei 11

        Soissons 
        A DUMAY Florian 16, GIROD Jean rudhy 17,  LENORMAND Paul 17
        B SOULET Jean baptiste 17, LENORMAND Martin 12, MENUT Pierre 16

        Les résultats en A :

        Jean fait logiquement 3 et a seulement été inquiété par Paul Lenormand qui mène 2/0 mais qui n’a pas tenu physiquement lorsque Jean s’est réglé.

        Bertrand fait également 3 avec deux légères perfs en ayant nettement mieux joué qu’à Montdidier.

        Leny lui n’a pas réussi à reproduire son niveau de Montdidier et s’incline 3 fois.

        Jean et Bertrand gagnent le double de justesse en 5 sets.

        Les résultats en B :

        François impérial fait 3 avec 2 belles perfs et un bon niveau de jeu et devient probablement 16 virtuel !

        Louis fait 1/3 en perdant Soulet et Menu, un peu plus de “gnac” aurait pu lui permettre de faire 3 car le niveau de jeu est là.

        Andrei s’incline 3 fois avec cependant un excellent match contre le 17 perdu en 5 set. Ce match montre un potentiel intéressant pour Andrei lorsqu’il se force à être agressif.

        Louis et François assurant une bonne victoire en double à un moment ou le match pouvait encore basculer.

        Prochain match contre Moreuil qui s’annonce difficile, objectif aller chercher le point du match nul qui assurerait probablement le maintien.

        Bertrand Bathelot'),
        array('id' => '224','equipe' => '5','journee' => '12','date' => '1332028800','lieu' => 'Beauvais','adversaire' => 'BEAUVAIS TT 1','score' => '2','score_adv' => '18','commentaire' => ''),
        array('id' => '225','equipe' => '6','journee' => '12','date' => '1332028800','lieu' => 'Amiens','adversaire' => 'PINON-ANIZY TT 1','score' => '15','score_adv' => '4','commentaire' => ''),
        array('id' => '226','equipe' => '7','journee' => '12','date' => '1332028800','lieu' => 'Amiens','adversaire' => 'LL AMIENS 2','score' => '13','score_adv' => '7','commentaire' => ''),
        array('id' => '227','equipe' => '8','journee' => '12','date' => '1332028800','lieu' => 'Amiens','adversaire' => 'MOREUIL PPC 4','score' => '14','score_adv' => '4','commentaire' => 'Dimanche 18 mars,
        Aujourd\'hui on jouait à la salle contre une équipe de notre niveau : Moreuil. Comme à notre habitude tout le monde était là à l\'avance ; nous étions donc fin prêts pour attaquer la journée et l\'emporter si possible !
        Petit changement aujourd\'hui, Benoît et moi avons inversé nos places par rapport à notre dernière rencontre contre Dreuil qui s\'est terminé par un nul...
        En premier Jeoffrey, Floris en 2e, Paul en 3e et Benoît en dernier.

        Composition de Moreuil PPC 4 :
        BAUDHUIN Hugues 960pts
        MAHAUT Jean 912pts
        PEGARD Alexis 854pts
        DAMAY Véronique 834pts

        La rencontre débute par une victoire de Jeoffrey en 4sets contre Hugues et une défaite de Floris contre Jean en 3sets. Mais Paul, Benoît, Jeoffrey vont battre dans l\'ordre Alexis, Véronique, et Jean en 3sets chacun. Floris s\'incline face à Hugues mais la victoire de Paul contre Véronique et celle de Benoît contre Alexis nous donne une avance confortable de 4 points juste avant les doubles.
        On lance donc ceux-ci avec toujours les mêmes paires : Jeoffrey/Benoît qui vont battre Véronique et Hugues en 3sets, un bon match qui redonne confiance après 2mois et demi sans une victoire pour notre double !
        Floris et Paul gagnent après un beau match en 5 sets (15-13 à la belle)  face à Jean et Alexis et ramènent un nouveau point important pour le moral car après les doubles l\'équipe se fait souvent remonté par les adversaires ! Oui on se fait rattraper après les doubles, mais pas aujourd\'hui... 8-2 pour Amiens, la victoire est proche et le mot d\'ordre est le suivant : « on se déconcentre pas ! »
        On va continuer sur notre bonne lancée : une victoire de Benoît face à Hugues puis celle de Jeoffrey contre Véronique et enfin Floris contre Alexis en 5 sets qui ouvre son compteur de points pour la journée ! Cependant une défaite de Paul contre Jean ramène le score à 11-3 pour l\'ASTT 8. Paul va s\'incliner de nouveau contre Hugues cette fois après un match qu\'il semblait tenir jusqu\'au 5e set... Benoît va battre Jean en 3sets après un match parfait ! Jeoffrey va battre Alexis en 4sets malgré une douleur persistance dans la cuisse toute la journée ; le soulagement d\'avoir gagné ! Floris va lui aussi participer à la victoire en battant Véronique.

        Bilan :
        Jeoffrey : 4 + double
        Floris : 2 + double
        Paul : 2 + double
        Benoît : 4 + double

        Une victoire 14-4 au final contre une équipe de Moreuil un peu en-dessous de notre niveau mais pourtant très sympathique ! Une 2e victoire qui nous amène à la 3e place de la poule synonyme de maintient. On ne peut ni monter ni descendre donc les prochaines journées se feront sans pression !

        Jeoffrey Stéphan'),
        array('id' => '228','equipe' => '9','journee' => '12','date' => '1332028800','lieu' => 'Vauchelles','adversaire' => 'VAUCHELLES ASV 3','score' => '11','score_adv' => '7','commentaire' => ''),
        array('id' => '229','equipe' => '10','journee' => '12','date' => '1332028800','lieu' => 'Amiens','adversaire' => 'ASTT ST VALERY 3','score' => '14','score_adv' => '4','commentaire' => 'Victoire de l\'equipe 10 (D3) contre St Valéry 14-04 !

        Un sans faute de Erwan , Greg et Alex, les invaincus du jour !

        Alexandre Goupil'),
        array('id' => '230','equipe' => '11','journee' => '12','date' => '1332028800','lieu' => 'Amiens','adversaire' => 'LL AMIENS 5','score' => '12','score_adv' => '6','commentaire' => ''),
        array('id' => '231','equipe' => '12','journee' => '12','date' => '1331856000','lieu' => 'Amiens','adversaire' => 'BEAUVALOIS TT 3','score' => '9','score_adv' => '9','commentaire' => ''),
        array('id' => '232','equipe' => '13','journee' => '12','date' => '1331942400','lieu' => 'Amiens','adversaire' => 'ROUBAIX AP 1','score' => '10','score_adv' => '7','commentaire' => 'Samedi 17 mars : le retour fracassant de Julia !

        Cette journée était capitale pour nous pour la course à la montée. Nous recevions l’équipe de Roubaix qui se positionnée juste derrière nous à un point au classement général.

        Julia qui nous avait abandonné au match précédent pour cause de vacances au ski, était de retour parmi nous.

        L’équipe de Roubaix se composée de GODEFROY Marion, n°270 (1582), REBOUILLAT Alexandra, 14 (1445), BARITAUX Claire, 12 (1270) et LAGNEAU Katy, 12 (1243).

        Les amiénoises : PETITPREZ Caroline 14 (1466), CARLIE Hélène 14 (1406), GRUGEON Charline 12 (1253) et FLAHAUT Julia 9 (957).

        Les fervents supporters : Aurélie NEEL, Marion BERTHELOT, Stéphane FLAHAUT, Monsieur et Madame HUON, Monsieur et Madame CARLIE, Geoffroy GILOT, Thibault DE VISME, Camille TROUILLET et Théo VASSEUR.

        Evolution du score : 0-2 / 2-2 / 3-3 / 5-3 / 6-4 / 8-4 / 8-7 / 10-7.

        Julia, la grosse chieuse (1 victoire, 3 défaites) : premier match compliqué pour Julia qui entame ce début de rencontre face à GODEFROY. Défaite 3-0 (-4/-3/-6). Elle perd également contre REBOUILLAT 3-0 (-2/-5/-12). Après les doubles, Julia augmente son niveau de jeu et va réaliser deux très beaux matchs. Elle s’inclinera 3-2 sur LAGNEAU avec un point d’anthologie à la belle qu’elle perdra sur balle volée et au score de 13-14 ! (-5/-8/5/5/-13). Et pour finir, superbe perf car elle remporte son match face à BARITAUX 3-1 (9/-7/9/6) et apporte donc le point de la victoire à l’équipe.

        Charline, la massue (1 victoire, 3 défaites) : bonne entame de match pour Charline, blessée au mollet. Elle va perdre 3-2 face à REBOUILLAT (-9/9/10/-6 /-8) et réalise elle aussi une belle perf en s’imposant sur GODEFROY 3-1 (7/9/-9/7). Ensuite, Charline va retrouver ses vieux démons… Je n’ai plus envie de toper alors je vais frapper sur tout…. Elle va donc enchaîner deux défaites sur les 12 : 3-2 sur BARITAUX (5/-3/-4/8/-4) puis 3-1 sur LAGNEAU (-9/9/-10/-5).

        Caroline, ma cocotte (3 victoires, 1 défaite) : après un échauffement au bord de la catastrophe, Caroline a sauvé les meubles… Elle bat BARITAUX 3-0 (8/8/3), LAGNEAU 3-0 (6/6/5) et REBOUILLAT 3-0 (2/9/7). Ensuite, quelque peu excédée par la remontée de Roubaix à 8-6, elle s’est mis la pression sur son match sur GODEFROY qu’elle perdra 3-0 (-9/-5/-6).

        Hélène, chouchoute (4 victoires) : du grand Hélène ce week-end ! Je m’impose 3-0 sur LAGNEAU (7/3/5), 3-1 sur BARITAUX (8/-8/5/8). Ensuite, deux petites perfs qui font du bien : je bas GODEFROY 3-1 (-8/9/5/8) et REBOUILLAT 3-1 (10/-9/6/7).

        Caroline et Charline perdent leur double 3-1 face à GODEFROY et LAGNEAU (10/-6/-8/-5).
        Super double de la part de Julia et Hélène avec victoire à la clé 3-2 contre REBOUILLAT et BARITAUX (-6/6/8/-11/6).

        Belle victoire 10-7 ! 

        Je vous donne rendez-vous le 31 mars salle Labaume pour le match de la montée face à St Pierre !

        Hélène Carlié'),
        array('id' => '233','equipe' => '14','journee' => '12','date' => '1331856000','lieu' => 'Amiens','adversaire' => 'VILLERS ST PAUL 1','score' => '10','score_adv' => '0','commentaire' => ''),
        array('id' => '234','equipe' => '15','journee' => '12','date' => '1331942400','lieu' => 'Friville','adversaire' => 'TT FRIVILLE 1','score' => '13','score_adv' => '5','commentaire' => ''),
        array('id' => '235','equipe' => '16','journee' => '12','date' => '1331942400','lieu' => 'Amiens','adversaire' => 'DOULLENS / BERNAVILLE 1','score' => '10','score_adv' => '8','commentaire' => ''),
        array('id' => '236','equipe' => '17','journee' => '12','date' => '1331942400','lieu' => 'Amiens','adversaire' => 'Exempt','score' => '18','score_adv' => '0','commentaire' => ''),
        array('id' => '237','equipe' => '1','journee' => '13','date' => '1333148400','lieu' => 'Schiltigheim','adversaire' => 'SCHILTIGHEIM TT 2','score' => '11','score_adv' => '7','commentaire' => 'A l’Est........

        Avant-dernière journée du championnat pour cette année 2011/2012, et déplacement en banlieue strasbourgeoise, plus exactement à Schiltigheim (à vos souhaits !).

        1er rendez vous était donné à 8H par JAJA dans le quartier le plus ‘chaud’ d’Amiens (j’ai nommé ‘Sein’ Pierre) même que Mr LE GALLOUDEC likes this. Une fois que mon sac était posé à coté des affaires de golf de Jaja, nous partions en direction de France Cars pour aller chercher le minibus (pas Cécile bien-sûr). Voyant une bonne file d’attente devant nous, nous décidions de prendre un prospectus pour DENIS alias ‘le Niii’ sur la fête des géraniums ainsi qu’une soirée dansante afin de pimenter ses week-end (youhou c’est bon ça, il a dû être content…).

        2ème rendez-vous, 1H plus tard (décidément on ne sera jamais à l’heure), j’arrivais devant la salle pour prendre la team, avec comme station à l’écoute ‘Fréquence Gay’ (et oui encore !!), si ça c’est pas de radio virile pour foutre l’ambiance j’y connais rien. En parlant de Gay tiens (pas Florian), je voyais un super ALEX qui avait pris…………………….. ‘l’oreiller à maman’ pour se reposer pendant le trajet. Un oreiller qui aura ‘tourné’ sous toutes les têtes de la team pendant le trajet.

        En parlant de tourné, au fur et à mesure du trajet la température commençait à augmenter, avec des noms de ville tel que ‘Reims Tinqueux’ ‘Porcelette’, ‘Boucheporn’ et ‘Puttelange aux Lacs’, cela en devenait même obscène (en tout cas on en resta bouche bée !!). Que ce soit pour aller à Besançon ou à Strasbourg, les villes (pas les filles !!!) de l’EST sont chaudes…

        Mais pas les plats du Flunch sur l’heure du midi !! À peine ALEX et moi avions le temps d’arriver à la table que le NIII avait déjà fini son assiette de pâtes. Tellement c’était bon, que ce soit pour le riz (pour JAJA) ou la langue de bœuf (moi), nous nous vengions sur le dessert pour ainsi prendre des forces en direction des terres schilikoises.

        Alors, arriver à l’hôtel de Schiltigheim c’est bien, mais quand on a l’adresse avec la ville exacte c’est mieux. Car sur le papier c’était dans Strasbourg, donc pour trouver on pouvait toujours rouler. JAJA appela le responsable et ce dernier lui demandait où on était (si on demande c’est qu’on ne sait pas, voyons !!!), réponse de Jaja : je sais pas, je suis jamais venu. En même temps quelle idée d’écrire Strasbourg sur le papier alors que c’était Schiltigheim. C’est comme si on disait Amiens et Longueau ou Friville et Escarbotin ou bien encore Ville le Marclet et Flixecourt (non mais jte jure !).

        Maintenant, trouver l’hôtel c’est bien, mais trouver la salle c’est ENCORE mieux !!! Apres 5 tours de ville et des pointes a 35 km/h (oui oui j’allais trop vite, je sais !), nous réussissions à trouver la salle avec à l’intérieur une température….. tout sauf fraîche, pas comme certaines (une Vanessa il parait…). 

        A part ça, tout ce qui se passe à Schiltigheim……….. reste à Schiltigheim (j’ai envie de dire plus maintenant !!)

        Composition des équipes :

        Equipe Amiénoise (les brasseurs)   
        A : CORRE Cédric (n°284), MARAIS Yannick (n°192), PLOTUNA (n°200)
        B : HAIGNERE Alexandre (19), LECOMTE Yohan (19), CHATELAIN Denis (n°876)

        Equipe Schilikoise (les brassés)
        A : KOEHLER Sébastien (19), DIRMENT Laurentiu (n°133), SIMON Julien (19)
        B : PFLEGER Thomas (16), WILMOUTH Jordan (17), FULLENWARTH Ruben (17)

        Détails :

        Cherchez l’erreur !!!!!!!!!!!!

        MARAIS Yannick (2/3) : ‘la  tapette’. S’est fait taper lors de son 1er match sur le roumain de l’équipe adverse DIRMENT. Mais son 2ème match contre SIMON fût le plus dur en étant mené 2 sets à 0, il a su stopper l’hémorragie pour s’imposer finalement à la belle. Ensuite victoire plus aisée sur KOEHLER. Trop d’orgueil pour perdre un 19 le Jaja, ça c’est du tennis de table.

        PLOTUNA Malin (2/3) : victoire sur SIMON quasi en balle haute ainsi que sur KOEHLER. Par contre défaite à la belle sur son compatriote roumain DIRMENT (romano à mano) après avoir eu une balle de match dans la 4ème manche, j’ai envie de dire c’est moche !!

        CORRE Cédric (2/3) : ‘l’ambianceur’. A KOEHLER une ratatinée à Sébastien lors de son 1er match pour se faire ratatiner par la suite sur DIRMENT qui évoluait un cran au dessus. Du coup s’est rattrapé après sa défaite en regardant des vidéos ‘d’actu ping’ de GAUZY pour essayer de faire comme ce dernier. Résultat : victoire à la belle sur SIMON (pas GAUZY !) avec quelques balles de défenses de toutes beautés réalisées avec le style : oui monsieur !!    Un petit mot de félicitation de Jaja à l’issue de ce match accroché : ‘t’es vraiment qu’une chialeuse Corrus’.

        CHATELAIN Denis (3/3) : ‘t’en veux’, ‘mais ouiii monsieur’ ‘le poing sur le cœur’, ‘des sauts de cabris’, ‘les bras en l’air’, on n’était même pas loin de l’arrachage de maillot !!! Voilà un Niii omni présent qui en a bavé ce week end tout en faisant le show (il est encore là le pépère), mais qui a eu le mérite de ne rien lâcher pour s’imposer lors de ses 3 rencontres. Une volonté hors norme. Un peu à l’image de la choucroute à la brasserie Fischer : s’est fait plaisir !!

        LECOMTE Yohan (0/2) : a fait ‘son’ Very Bad Trip. A peine le temps d’arriver, 2..3 gorgées d’eau alsacienne avalées et quand le réveil sonnait………… les 2 matchs étaient perdus. La tapette avait un gros ventre ce week end ! (peut être à cause de la choucroute et de la bière aussi).

        HAIGNERE Alexandre (2/3) : ‘trop fraiche’. Malgré la température de la salle, était super frais sur PFLEGER et FULLENWARTH (3 à 0), par contre sentant le picon bière qui arrivait à la fin de la rencontre, n’était plus du tout frais sur WILMOUTH (défaite 3 à 1). Un Alex de plus en plus frais au fur et à mesure de la phase, ce qui ne lui empêche pas d’être un peu déphasé de temps en temps !

        Evolution du score :
        AMIENS - SCHILTIGHEIM
        2-0 / 2-2 / 4-2 / 6-3 / 8-4 / 8-7 /11-7

        Au final : 

        Encore une victoire de la team qui nous laisse sur notre siège de leader, et qui nous donnera l’honneur de jouer le match de montée à domicile face à Lys lez Lannoy avec peut-être dans ses rangs maître SECRETIN.

        Un bon repas à la brasserie FISCHER dans la plus pure tradition alsacienne, avec des cordons bleus aussi gros que des entrecôtes, des choucroutes maison bien garnies, des desserts ou tout le monde mange dans les assiettes des autres… bref, une convivialité aidée par les bières maisons ainsi que ‘les irish coffee’…… 

        Voici les mots qui ont été le plus utilisés au cours de ce week end :
        « Salut les tapettes »
        « Fraiche » 
        « T’en veux »
        Si chacun avait mis des droits d’auteur sur ces mots, en un weekend on serait déjà archi millionnaire….

        Rendez-vous la prochaine fois pour la dernière journée de championnat de cette année 2011/2012 à domicile, afin d’accéder à la Nationale 2.

        Yohan LECOMTE'),
        array('id' => '238','equipe' => '2','journee' => '13','date' => '1333148400','lieu' => 'Amiens','adversaire' => '7 ILES PERROS 1','score' => '11','score_adv' => '4','commentaire' => ''),
        array('id' => '239','equipe' => '3','journee' => '13','date' => '1333148400','lieu' => 'Amiens','adversaire' => 'VILLERS - BRETONNEUX PPC 1','score' => '1','score_adv' => '19','commentaire' => ''),
        array('id' => '240','equipe' => '4','journee' => '13','date' => '1333148400','lieu' => 'Moreuil','adversaire' => 'MOREUIL PPC 1','score' => '9','score_adv' => '11','commentaire' => ''),
        array('id' => '241','equipe' => '5','journee' => '13','date' => '1333234800','lieu' => 'Amiens','adversaire' => 'SERIFONTAINE TT 1','score' => '14','score_adv' => '6','commentaire' => ''),
        array('id' => '242','equipe' => '6','journee' => '13','date' => '1333234800','lieu' => 'Vénizel','adversaire' => 'VENIZEL TT 3','score' => '6','score_adv' => '14','commentaire' => 'Non vous ne rêvez pas, ceci est bien un résumé de match de R3. Bon je suis capitaine de d1 mais pour la R3, je peux bien faire un résumé. Pour ce match, nous nous déplaçions à Venizel dans la voiture à Yoann. Six dans la C4 picasso ça passe large même si ceux qui sont montés à l\'arrière à coté des sacs l\'ont paye CASH (on en reparlera). Après un départ du géant glisy à 11h45, nous arrivâmes à Venizel avec un bon  3/4 d\'heure d\'avance (hein Alex ?). Dans la voiture, on s\'était dis : "si on fait 5/5 en A et en B c\'est jouable !"mais tout ne se passa  pas comme prévu.

        Les compos d\'équipes :

        Amiens STT (6) :

        En A : Maximilien Lamour (1559), Cailloin Yoann (1321) aussi appelé le LEADER et Valentin Fendorf ou l\'homme qui aime la thermodynamique(1466)

        En B: Caudrelier Olivier (1306), Alexandre Menard (1313), Lamérant Matthieu(1216)

        Venizel TT(2) :

        En A : Justine Maertens (1611), Julien Fontaine (1491), Bayard Nicolas (1589)
        En B : Guerin Mickaël (1509), Legros Xavier (1509), Paradis Serge (1489)

        En A : 5-5

        Pour la A, ce fut une rencontre plutôt équilibrée avec de très beaux matchs :

        Maximilien remporte ses deux premiers matchs disputés en 5 et 4 sets face à Maertens et Bayard. Au dernier match, face à un adversaire au jeu différent des deux autres et qui a par ailleurs bien mieux joué que face à Valentin et Yoann, Max s\'incline en 4 sets de très bons niveau.

        Yoann : Le leader, l\'homme fort des dernières semaines a été très impressionnant lors de ses deux premiers match face à Fontaine (3-1) et surtout face à Maertens (gros gros match de Yoann avec une victoire 3-0 à la clé). Il ne réussit pas le 3/3 en s\'inclinant de justesse face à Bayard en 4 sets très disputés.

        Valentin : Valentin s\'incline de justesse pour son premier match 3-2 face à Bayard. Face à Fontaine, il se met en mode " je met des grosses claquettes revers/coup droit" et il l\'emporte 3-0. Face à Maertens et un style de jeu qui ne lui convient pas, il s\'incline en 3 sets mais bon il avait la thermodynamique à réviser.

        Le double "invincible" Max/val s\'incline en 3 sets face à la paire Maertens/bayard.

        En B : 9-1

        La branlée, la sanction on peut appeler ça comme on veut mais ce fut dur ( grosse différence de classement aussi...)

        Alex : Alex a montré de très belles choses sur certaines séquences de jeu mais il lui a manqué un peu de réussite pour faire trembler ses adversaire. Il s\'incline 3-1 face à Guerin et Legros et 3-0 face à Paradis.

        Olivier : Olivier n\'a pas réussi à imposer son jeu malgrè de bonnes intentions, il s\'incline 3 sets très serrés face à Guerin en ne réussissant pas à concrétier ses nombreuse occasions ( balles de sets dans le 1er et 2ème set et il menait au score au 3ème). Il s\'incline 3-0 face à Legros et 3-1 face à Paradis,

        Matthieu : Je m\'incline 3-1 face à Legros en étant trop inconstant. Face à Guerin, je négocie mal les fins de sets et je m\'incline 16-14,12-10,11-7 (ouais je me souviens que de mes scores xD).
        Pour mon dernier match, je sauve l\'honneur de la B en l\'emportant en 4sets face à Paradis. Ouf !

        La paire Alex/olivier s\'incline en 4sets face à la paire Guerin/Legros

        Bilan : Ceux qui sont montés à l\'arrière de la Picasso (Olivier,Alex) n\'ont pas réussi à gagner un match (la malédiction de la place du fond de la voiture ??). Sinon comme nous le répète le LEADER(Yoann) : l\'important c\'est d\'être tous ensemble et de prendre du plaisir et ce fut le cas ce dimanche et c\'est ça qu\'on aime dans le ping :)

        Matthieu Lamérant

        ps : Si Marseille bat Paris la semaine prochaine vous aurez droit à une surprise pour le résumé dans 2 semaines !

        Matthieu Lamérant'),
        array('id' => '243','equipe' => '7','journee' => '13','date' => '1333234800','lieu' => 'Flixecourt','adversaire' => 'VILLE LE MARCLET / FLIXECOURT 4','score' => '9','score_adv' => '11','commentaire' => ''),
        array('id' => '244','equipe' => '8','journee' => '13','date' => '1333234800','lieu' => 'Abbeville','adversaire' => 'ABBEVILLE AC 4','score' => '8','score_adv' => '10','commentaire' => ''),
        array('id' => '245','equipe' => '9','journee' => '13','date' => '1333234800','lieu' => 'Amiens','adversaire' => 'VILLE LE MARCLET / FLIXECOURT 5','score' => '8','score_adv' => '10','commentaire' => ''),
        array('id' => '246','equipe' => '10','journee' => '13','date' => '1333234800','lieu' => 'Dreuil','adversaire' => 'DREUIL TT 3','score' => '17','score_adv' => '1','commentaire' => 'Victoire de l\'équipe 10 (D3) , 17-01 contre Dreuil TT.

        Dans le détail : 

        Chhe fait 4/4

        Goupil fait 4/4

        Notre double est remporté! 

        Les deux nouvelles recrues qui sont Simon et Emmanuel (Manu pour les intimes) se sont bien debrouillé également! 
        Simon fait 4/4 et Manu fait 3/4 , une petite faiblesse sur un match , pas grave! 
        Ils battent tout les deux le 8(800points)! Ce qui fait d\'eux , les joueurs du
        week-end.... ;-)
        Merci a eux deux d\'avoir accepté le remplacement ! Sympas.

        Alexandre Goupil'),
        array('id' => '247','equipe' => '11','journee' => '13','date' => '1333234800','lieu' => 'Roye','adversaire' => 'ROYE PPC 8','score' => '18','score_adv' => '0','commentaire' => ''),
        array('id' => '249','equipe' => '13','journee' => '13','date' => '1333148400','lieu' => 'Amiens','adversaire' => 'ENT ST PIERRE 2','score' => '7','score_adv' => '11','commentaire' => 'Hélène, tais-toi !!!

        En ce samedi 31 mars, nous recevions l’équipe de St Pierre. Match au combien important puisque l’équipe victorieuse s’assure de la montée en N2.

        Bonne préparation mentale, bonne condition physique, bon esprit d’équipe et petit briefing d’avant match… mais cela n’a pas suffit !

        Grande déception à la fin de la rencontre !

        Composition équipe St Pierraise : MAHE Stéphanie, n°188 (1710), MARTIN Mathilde, 14 (1417), DUMONT Aurélie, 13 (1360) et CAVE Sophie, 13 (1315).

        Composition équipe Amiénoise : PETITPREZ Caroline, 14 (1466), CARLIE Hélène, 14 (1406), GRUGEON Charline, 12 (1253) et FLAHAUT Julia, 9 (957).

        Evolution du score : après la première partie de match nous menions 5-3, puis petit coup de massue : nous perdons les deux doubles ce qui permet aux adversaires de revenir à 5-5. Ensuite 6-6 puis 7-7  pour finalement nous incliner 10-7.

        Julia (1 victoire, 3 défaites) : Julia perd facilement sur MAHE 3-0 (-2/-3/-1) puis fait un très bon match sur MARTIN où elle s’inclinera 3-1 (8/-12/-8/-8). Ensuite superbe perf, elle bat CAVE 3-1 (3/-5/7/10) puis perd face à DUMONT 3-0 (-6/-4/-7).

        Charline (1 victoire, 3 défaites) : égale à elle-même, Charline va faire un super match et va s’imposer sur MARTIN 3-2 (-10/7/10/-8/5) puis enchaînera trois défaites successives face à MAHE 3-0 (-6/-9/-6), DUMONT 3-0 (-6/-6/-8) et CAVE 3-1 (-10/13/-8/-5).

        Caroline (3 victoires, 1 défaite) : Caroline remporte facilement ses matchs sur DUMONT 3-1 (-7/9/9/3), CAVE 3-0 (7/6/11) et MARTIN 3-1 (-7/7/8/1). Elle s’inclinera face à MAHE 3-1 après un excellent match (8/-7/-7/-8).

        Hélène (2 victoires, 2 défaites) : je bas facilement CAVE 3-1 (6/5/-7/9) et DUMONT 3-1 (7/2/-7/8). Ensuite mon monde s’écroule… ma rencontre sur MAHE me sera fatale… je perds les deux premiers sets logiquement 6 et 8. Ensuite je remporte le 3ème set 11-8. Après un début de 4ème set compliqué (je suis menée 5-1) je remonte à 6-6 pour ensuite mener 10-8. On arrive donc aux avantages. A 13-13, je fais un magnifique top revers en ligne et je cris « TCHO » croyant que mon adversaire n’était pas sur la balle et malheureusement elle était bien dessus… je donne donc le point puis m’incline 15-13… Ce qui me vaudra d’être bien charrier pendant toute la soirée et je pense pendant encore de nombreuses semaines…. Pour finir, je m’incline sur MARTIN 3-0 (n’étant toujours pas vraiment remise de mon match précédent) 11-8 / 11-8 /18-16. Le positif  à retenir est que j’avais quand même un très bon niveau de jeu.

        Caroline et Charline perdent leur double 3-2 face à DUMONT et CAVE (4/-7/-10/6/-7) encore une occasion loupée et Julia et moi nous nous inclinons 3-0 contre MAHE et MARTIN (-6/-8/-10).

        Défaite 10-7 !

        Hélène CARLIE'),
        array('id' => '250','equipe' => '14','journee' => '13','date' => '1333148400','lieu' => 'Beauvais','adversaire' => 'BEAUVAIS TT 1','score' => '9','score_adv' => '9','commentaire' => ''),
        array('id' => '251','equipe' => '15','journee' => '13','date' => '1333148400','lieu' => 'Amiens','adversaire' => 'LL AMIENS 1','score' => '14','score_adv' => '4','commentaire' => ''),
        array('id' => '252','equipe' => '16','journee' => '13','date' => '1333148400','lieu' => 'Pierrepont','adversaire' => 'PIERREPONT USL 1','score' => '16','score_adv' => '2','commentaire' => ''),
        array('id' => '253','equipe' => '17','journee' => '13','date' => '1333148400','lieu' => 'Albert','adversaire' => 'ALBERT BRAY 3','score' => '15','score_adv' => '3','commentaire' => ''),
        array('id' => '254','equipe' => '12','journee' => '13','date' => '1333062000','lieu' => 'Pierrepont','adversaire' => 'PIERREPONT USL 4','score' => '8','score_adv' => '10','commentaire' => ''),
        array('id' => '255','equipe' => '1','journee' => '14','date' => '1334358000','lieu' => 'Amiens','adversaire' => 'LYS LILLE METROPOLE CP 1','score' => '11','score_adv' => '4','commentaire' => 'La dernière pour une première

        Amiens Sport Tennis de Table – CP Lys Lille Métropole : La dernière ! Euuuhhh…..non ( http://youtu.be/V9wBtPWBbeo  ) en fait, c’était l’avant dernière. Et oui, grâce à cette victoire 11/04 nous allons participer aux play-off : un truc trop frais. 
        15H10 : je fais mon arrivée à la salle en même temps que Yohan, semble -t-il … 
        Denis était déjà en tenue et Benoit était en train de se changer : ça sentait le gros match !
        15H20 : Arrivée de Malin qui nous salua par un petit « T’en veux ? » 
        15H30 : Arrivée de Yannick qui, quant à lui est plutôt adepte du « Salut les tapettes ! » (made in Very Bad Trip). 
        Il manquait juste un petit « Salut les guys ! » et la recette du  cocktail amiénois était bonne.
        Allez, trêve de plaisanterie et un peu de sérieux !

        Composition des équipes :

        Amiens Sport Tennis de Table :
        A : MARAIS Yannick (n°192), PLOTUNA Malin (n°200) et LECOMTE Yohan (19)
        B : CHATELAIN Denis (n°879), HAIGNERE Alexandre (19) et VAQUIER Benoit (15)

        CP Lys Lille Métropole :
        A : LEFEVRE Patrick (n°474), GROULT Eric (18) et LAMON Quentin (17)
        B : BODERE Maxime (18), GALLAND Pierre-édouard (14) et  MAST Antoine (13)
        Plutôt surpris à la vue de la compo adverse, nous abordions tout de même le match avec sérieux.

        Détails :

        MARAIS Yannick (2/2) : Yannick s’impose très facilement dans son premier match face à LAMON. Ensuite, il se fait un peu accrocher face à LEFEVRE et s’impose aisément au 5ème set. En mode « Poke Attitude » cette après-midi, Yannick a fait le job pour sa dernière rencontre à domicile après 11 années de bons et loyaux services, tel le seigneur Perceval dans Kaamelott (http://youtu.be/-5NipHAtvHY ).

        PLOTUNA Malin (3/3) : Malin s’impose en 3 sets face à GROULT et LAMON. Puis en 4 sets face à LEFEVRE. Il a été sérieux durant ses matchs et va pouvoir s’exprimer en N2 l’année prochaine. Bravo !

        LECOMTE Yohan (0/2) : Aaahhh mister Lecomte : tant de chose à dire… Mais pour cette fois-ci ça ne sera que « Bref, il a fait 0. » Yohan s’incline en 3 sets face à LEFEVRE et GROULT. Dans une petite spirale noire en ce moment, il va reprendre la route de l’entraînement (mais sans tournois !) afin d’être prêt pour les plays-off. En attendant, quand on lui propose d’aller faire un petit tour au salon de l’érotisme, tout ce qu’il trouve à répondre c’est « Non merci, moi le salon de l’érotisme je l’ai ce soir en rentrant chez moi ». J’ai envie de dire : « il y en a qui ont de la chance ! ».

        CHATELIN Denis (3/3) : « Nnni » s’impose successivement en 4 sets, 3 sets et 3 sets face à GALLAND, MAST et BODERE : la force tranquille ! Encore une fois : « Maître Denis » ! A tout de même voulu battre le record de services ratés d’affilé en double ; mais il s’est arrêté à 3, alors que le record est de 4 et il est détenu par Benito Vaquero. Mais bon, le principal c’est la victoire !

        HAIGNERE Alexandre (2/2) : Je m’impose successivement face à MAST et BODERE en 3 et 5 sets. Niveau de jeu moyen mais suffisant ce jour. Par contre niveau largement suffisant pour faire des photos avec Yohan en fin de soirée….. quasi à poil !

        VAQUIER Benoit (0/2) : Benoit s’incline en 3 sets face à BODERE puis en 5 sets face à GALLAND dans un match plutôt chaud verbalement…  Manque de mobilité : et oui Benoit n’arrive pas à se déplacer jusqu’au banc de l’équipe avec laquelle il joue mais préfère rester sur le banc de la R2. En effet, c’est à l’entrée de la salle : ça doit être ça ! Cependant, il nous a tout de même montré de beaux échanges.

        Les paires MARAIS/PLOTUNA et CHATELAIN/HAIGNERE (invaincue en B : « Oui monsieur ! ») s’imposent toutes les deux.

        Evolution du score :
        AMIENS – LYS LES LANNOY
        2-0 / 2-2 / 8-2 / 8-3 / 10-3 / 11-4

        Nous attendons donc le mois de mai afin d’en découdre avec les meilleures équipes de N3, et aussi de présenter le dernier résumé de la saison qui promet d’être haut en couleur !

        Alexandre Haigneré'),
        array('id' => '256','equipe' => '2','journee' => '14','date' => '1334358000','lieu' => 'Rouen','adversaire' => 'ROUEN SPO 3','score' => '11','score_adv' => '9','commentaire' => 'Samedi 14 avril 2012, Rouen III / Amiens II, the come-back of the résumouche !

        Salle Henri Pélissier. Et ça sent déjà la poudre. Ce forçat de la route vainqueur du Tour en 1923, a en effet été lamentablement tué par sa maîtresse, après une course … en uniforme donc, parce que c’est beau, un Pélissier en uniforme, comme me l’a soufflé un spectateur rouennais. Espérons qu’il n’y ait pas trop de balles perdues pour les Samariens, que les Sex Pistols Rasselet et Blatrix mitraillent les normands, que les Colts Chatelain et Dubois, comme Sivers, tombent à pic, et que les 40 mm d’Harlé et Sellier, s’ils ont un peu de Mister Hyde en eux, fassent mouche : aïe pour moi !

        Aucun enjeu pour les locaux, sur le podium avant la rencontre. Deux numéros envoyés en N1 : l’espoir grandit du côté amiénois. Encore faut-il saisir l’occasion !

        C’est bon, cette atmosphère d’avant-match, 6 mois que je n’y ai pas goûté et des souvenirs me remontent … tous aussi explosifs : la roulette Russ Soissonnaise, cet autre Gouvieux / Amiens du 29 avril 2000 pour la montée en N3, alors que Bénito Vaquéro râlait déjà sur l’adhérence de sa tétine, la marque de son biberon, l’élasticité de sa couche-culotte … Les tirs au mortier de Romain Dècle, Mark Smith sans Wesson, mais avec Will ! Un Taquet toujours important en magasin … le doigt sur la détente de sa claquette revers.

        Lucas Dubois, un volcan à lui tout seul, nous le rappelle : « J’aime ces moments-là : on est là tous ensemble, des balles sur le sol … des regards qui se croisent. C’est toujours les mêmes gestes : d’abord le paquet de chips de gauche, toujours, fraises Tagada, frites, Coca, puis le paquet de chips de droite. Et puis une gorgée de Dragibus, toujours, parce qu’ils transmettent plus que les oligo-éléments et les forces des volcans, les Dragibus sont une chance ! »

        Les missiles amiénois :
        Sellier 448 Harlé 595 Chatelain 836 Blatrix 18 Rasselet 18 Dubois 17

        Les cibles normandes :
        Martin 19 Brochet 20 Leroux 759 Larochelle 19 Carpentier 18 Zede 19

        Je m’assois sur un banc à 3 lattes, classique, tandis que Christophe manque de tomber en posant son noble séant sur un banc un peu cassé, à deux lattes, gentiment laissé aux visiteurs, hé oui … apparemment là-bas, les Christophe ont qu’deux lattes … merci à mon spectateur du jour, décidément très inspiré !

        Les premiers à dégainer sont Arnaud et Maxime, sur Martin et Larochelle. Un Martin trop pécheur pour pouvoir espérer l’emporter sur un sérieux Sellier, et un Larochelle dont la franche folie se révèlera plus tard. Rock and roll ce début de partie ! Malheureusement nous nous apercevons vite qu’il aurait peut-être mieux valu venir avec nos gaules plutôt qu’avec nos armes à feu qui ont pris l’eau : après l’oiseau au long bec se présente un Brochet qui ne mord pas à l’hameçon d’Harlé, certainement monté trop fin … L’eau, encore elle, sur laquelle Vincent Rasselet n’a pas marché du tout en chantonnant une adaptation Hallydesque après sa défaite facile : « Si j’étais un Carpentier,  si tu t’appelais Maryyyyssssee, j’aurais peut-être gagné …  j’me s’rais fait mal aux cuisses …. » Oui mais voilà, ses chaussures ne lui permettaient déjà pas de faire un pas chassé, Vaquiérien !

        Nous alternons ensuite les coups d’épée dans l’eau  (Dubois sur Zédé et Larochelle, respectivement 8 et 9 à la belle, dommage, presque, pas loin) et les belles performances, notamment le joli match à suspense Chatelain / Leroux, Rafi nous confiant au coaching à 2/2 « Quel chic aurait Leroux de rater deux ou trois défenses ! J’en ai marc !» Fort de café ce Rafi … et victorieux au final.

        Chassé-croisé pendant des heures, retransmis en live sur facebook en exclusivité mondiale. Mais à deux, on est plus forts, et on empoche les doubles. Crucial. Zédé a beau les Zédé avec ses trois points, Zédé doute quant à l’issue finale quand il voit que Martin cale contre Rafi. Et quand Martin cale, ce n’est pas de chance pour lui !

        Zédé frissons enfin quand Arnaud joue avec nos nerfs dans son duel contre Brochet, avant d’inscrire le dixième, synonyme de maintien. Lui qui ne voulait pas jouer à 9/9 … aura joué à 9/8, ça change tout dans la tête ! La balle n’est pas passée loin.

        Puisque ses performances du jour m’y incitent, ne dîtes plus « Le pet de Vincent nous à frôlés » mais « On a senti le vent du boulet ».

        Maxime, détendu, n’a plus qu’à finir Carpentier à la 22 Long Rifle 8/7/7, une exécution sommaire.

        Les snipers :

        Arnaud Sellier 2+double : A rencontré Leroux, Larochelle et le truand, s’est fait désarmer par le premier, mais a gagné ses deux autres duels, avec une belle association à Rafi en double.

        Christophe Harlé 1 : Adore les défenseurs, et ça se voit ! Comme dirait Plotoune, il s’est juste fait un malin plaisir à rosser François Martin 5/6/5. Dudu score 33, Martin score 16 !

        Raphaël Chatelain 3+ double : Lucky Luke aurait tremblé, il a pris les Rouennais pour les Dalton, a bien joué avec eux, et entonne « I’m a poor lonesome table tennis player … »

        Maxime Blatrix 2+double : l’homme du début … et de la fin de rencontre, il ponctue la journée comme il ponctue les murs des vestiaires : de ses points … (poings ?) Fallait nous l’dire que c’était ta fête !

        Vincent Rasselet : 0+double : N’avait que des balles à blanc, et pas de gilet. Il faut sortir couvert jeune homme ! On peut souligner la confiance absolue en ses partenaires, c’est ça, l’esprit d’équipe. Il a de plus très bien vécu sa journée « sans », il laisse passer l’orage, et reviendra armé jusqu’aux dents pour chasser le pongiste de France et de Navarre en 2012/2013 !

        Lucas Dubois : 1 + 1 fois presque + 1 fois dommage : A tout de même essuyé un feu de 284 balles durant ses 15 manches, faites le calcul, c’est un miraculé ! Pas de secret, c’est bien son régime drastique qui le fait tenir un tel rythme. Allez j’vous aide, 19 projectiles de moyenne par manche, avouez que c’est nourri ! Remarquez, avec un tel orfèvre, normal qu’on se soit plus cru au 36 du quai qu’au gymnase Pélissier !

        Laurent Cany : 1 coaching gagnant à 0/2 avec Maxou, 1 résumouche et beaucoup de plaisir à avoir contribué à faire un peu tourner l’équipe !!! Une seule chose m’intrigue : 24 heures que je suis rentré et toujours personne …

        Dicton du jour : A la Saint Maxime, écris ta dernière rime.

        Laurent CANY'),
        array('id' => '257','equipe' => '3','journee' => '14','date' => '1334358000','lieu' => 'Abbeville','adversaire' => 'ABBEVILLE AC 2','score' => '7','score_adv' => '13','commentaire' => ''),
        array('id' => '258','equipe' => '4','journee' => '14','date' => '1334358000','lieu' => 'Amiens','adversaire' => 'ROYE PPC 1','score' => '11','score_adv' => '9','commentaire' => 'Mission maintien accomplie.

        Pour être sûr du maintien nous devions au moins faire match nul contre Roye jusqu’à présent invaincu. Nous avons fait mieux avec une belle victoire collective.

        Amiens

        A
        Jean Taquet 20
        Leny Berriat 14
        Bertrand Bathelot 17

        B
        Andrei Deguigand 11
        François Herly 15
        Loic Lefevre 14

        Roye

        Fabien Dufrenne N°678
        Yann Cerisier 16
        Eddy Gontarczyk 16

        Sébastien Baudry 16
        Boris Fiquet 15
        Charles Henry Grimaux 15

        En A
        Jean Taquet s’impose 3/1 et 3/0 contre Cerisier et Gontarczyk et s’incline 3/0 contre Dufrenne.
        Très belle prestation de Leny qui bat Gontarczyk 3/0 et Cerisier 3/2.
        Bertrand bat 3/0 Cerisier et Gontarczyk  et s’incline 3/1 contre Dufrenne.
        Jean et Bertrand s’inclinent de peu 3/2 en double

        En B
        Loic a un peu de mal à démarrer et s’incline 3/1 contre Fiquet et 3/0 contre Baudry. Victoire très utile contre Grimaux.
        François maintient son bon niveau de jeu et ne s’incline que contre Baudry 3/0. Bat Grimaux 3/0 et Fiquet 3/2.
        Andréi, l’homme du match, réalise deux superbes performances contre Baudry (16) et Grimaux (15) et confirme les très nets progrès entrevus contre Soissons.
        Loic et François s’inclinent 3/2 en double.

        Bilan de la phase :
        Nous finissons 4e avec 4 victoires.
        Une bonne ambiance collective et 8 joueurs ont participé à la phase, merci à Jean pour sa participation très utile.
        Tous les joueurs ont amené des points décisifs lors des rencontres importantes.
        A priori 6 joueurs vont progresser au classement et les 2 vétérans maintenir le leur.
        Un bilan très positif sur la phase.

        Bertrand Bathelot'),
        array('id' => '259','equipe' => '5','journee' => '14','date' => '1334444400','lieu' => 'Clermont','adversaire' => 'CLERMONT EP 2','score' => '2','score_adv' => '18','commentaire' => ''),
        array('id' => '260','equipe' => '6','journee' => '14','date' => '1334444400','lieu' => 'Amiens','adversaire' => 'BEAUVAIS TT 2','score' => '9','score_adv' => '11','commentaire' => ''),
        array('id' => '261','equipe' => '7','journee' => '14','date' => '1334444400','lieu' => 'Amiens','adversaire' => 'TT MERS TREP EU 3','score' => '11','score_adv' => '9','commentaire' => 'Oui je fais des résumés de matchs seulement quand je gagne et alors ? 

        Une belle rencontre se déroula ce dimanche matin, un match sans trop d\'enjeu pour la troisième place.

        Les compos :

        Amiens STT(7): 
        En A : Bodinel Paul (1142), Couturier Kevin (1084), Lamerant Matthieu (1216)
        En B : Bathelot Benjamin (816), Boinet (Bieber) Paul (825), Hersent Leo (985)

        Mers Treport (3) :
        En A : Laboulais Matthieu (1292), Poyen Aurelien (1225), Quentin Frederic (1206)
        En B : Dhedin Mathieu (867), Foulon Daniel(1221), Lepors Mickael (1067)

        Paul (1 victoire en A) : Pour probablement son dernier match avec nous, Paul commence doucement en s\'inclinant en 5 sets face à Laboulais (-09,08,11,-05,-07) puis il s\'incline en 4 sets face à Quentin (-10,-07,12,-03). Pour son dernier match, il se ressaisit parfaitement et il apporte le 10ème point face à Poyen (09,07,06). Bon l\'ambiance n\'était pas comme ça non plus(http://www.youtube.com/watch?v=SziKyAuK7-o) mais en tout cas ce fut super sympa de jouer avec Paul ces dernières années. 

        Kevin (0 victoire en A) : Pour lui aussi probablement son dernier match, Kevin n\'était pas trop en forme. Il s\'incline en 3 sets face à Quentin et Poyen. Face à Laboulais, il passe tout près de la victoire mais il s\'incline finalement en 5 sets (06,-08,09,-08,-07). Bon en même temps, il avait colle de Maths (http://www.youtube.com/watch?v=l4Ped5qvoeY). Bon courage à lui pour la prépa.

        Matthieu (3 victoires en A) : Le renouveau en cette fin de saison. Le plaisir revient et les performances aussi. Après avoir perdu 7 matchs à la belle vendredi à l\'entrainement (dont deux mémorables contre Valentin Fendorf) + une branlée contre Denis. Je gagne mes 3 matchs à la belle aujourd\'hui face à Quentin (08,06,-04,-09,09), Poyen (-06,09,-06,09,09) et j\'apporte le 11ème point face à Laboulais (-09,09,08,-08,03).

        Paul et moi perdons le double 3-1 face à la paire Laboulais/Poyen malgré un premier set de folie ou ça jouait un peu comme ça  (http://www.youtube.com/watch?v=_ISqC6yxtgA&feature=related)

        Benjamin (0 victoire en B) : diminuait par une blessure, Benji c\'est bien battu mais il s\'incline en 4 sets face à Dhedin, en 3 sets face à Foulon et en 5 sets face à Lepors (-06,10,-06,12,-05).

        Paul (Bieber) Boinet (3victoires en B +D): En grande forme, il réitère sa performance d\'il y a deux semaines en s\'imposant par 3 fois en 3 sets (sans pleurer cette fois !). Le seul problème c\'est ça : http://www.youtube.com/watch?v=kffacxfA7G4&ob=av2n  (peut heurter la sensibilité de nombreuses personnes). Bravo à lui tout de même, il va sûrement gagner plus de 400points en une saison. Chapeau !

        Léo (3 victoires en  B +D) : La force tranquille : je viens, je gagne et je repars jouer à la ds. Victoire 3-0 face à Lepors et Foulon (10,06,18). Et victoire 3-2 face à Dhedin (-06,03,-05,06,03). Bien joué !

        Très beau double des moins d\'1m40, Paul et léo s\'impose 3-0 face à la paire Dhedin/Lepors.

        Un tournant se passe après ce match, l\'ancienne génération laisse place à la nouvelle. Paul (Bieber) Boinet et Léo (tranquilou) Hersent nous ont montré toute l\'étendue de leur talent tandis que Paul et Kévin s\'en vont sûrement vers de nouveaux horizons.

        Matthieu Lamérant'),
        array('id' => '262','equipe' => '8','journee' => '14','date' => '1334444400','lieu' => 'Amiens','adversaire' => 'MUILLOIS PPC 2','score' => '12','score_adv' => '6','commentaire' => ''),
        array('id' => '263','equipe' => '9','journee' => '14','date' => '1334444400','lieu' => 'Doullens','adversaire' => 'DOULL/BERNAVILL 4','score' => '5','score_adv' => '13','commentaire' => ''),
        array('id' => '264','equipe' => '10','journee' => '14','date' => '1334444400','lieu' => 'Amiens','adversaire' => 'BETHENCOURT US 3','score' => '7','score_adv' => '11','commentaire' => 'L\'equipe 10(D3), perd contre Bethencourt 11/07.

        Dans le détail :
        - Goupil fait 3/4, bat deux 8 et un 7.
        - Tran Sophie fait 0/4.
        - Tran Richard fait 2
        - Bled fait 3/4, bat deux 8 et un 7.

        Alexandre Goupil'),
        array('id' => '265','equipe' => '11','journee' => '14','date' => '1334444400','lieu' => 'Amiens','adversaire' => 'ALBERT BRAY 3','score' => '5','score_adv' => '13','commentaire' => ''),
        array('id' => '266','equipe' => '12','journee' => '14','date' => '1334271600','lieu' => 'Amiens','adversaire' => 'ST SAUFLIEU ASL 1','score' => '3','score_adv' => '15','commentaire' => ''),
        array('id' => '267','equipe' => '13','journee' => '14','date' => '1334358000','lieu' => 'Rouen','adversaire' => 'SPO ROUEN 1','score' => '9','score_adv' => '9','commentaire' => 'Samedi 14 avril : objectif NUL !!

        Pour cette dernière journée de championnat, nous nous sommes déplacées à Rouen. Une bonne ambiance s\'annonçait étant donné que l\'équipe 2 masculine y allait également. Même objectif pour les deux équipes : un nul ! Le match nul nous permettrait d\'accéder à la N2 et pour les garçons le maintien en N3.

        Rendez-vous 13h45, départ 14h.

        Voiture n°1 : 
        - pilote : Arnaud SELLIER
        - co-pilote : Christophe HARLE
        - les jeunots : Maxime BLATRIX, Raphaël CHATELAIN, Vincent RASSELET

        Voiture n°2 :
        - pilote : Stéphane FLAHAUT
        - co-pilote : Hélène CARLIE
        - les jeunettes : Caroline PETITPREZ, Charline GRUGEON, Julia FLAHAUT et Lucas DUBOIS...... Cherchez l\'erreur !!

        Arrivée à Rouen 15h30. La voiture n°1 nous a devancé de quelques minutes... de longues minutes d\'inquiétude pour leur petit panda et le sac de Vincent... surtout à cause d\'une petite blague de ma part qui n\'était pas au goût de tout le monde !

        Les couples se formèrent pour l\'échauffement : Max et Noss / Dud et Raphi / Panda et Chouchou / Chacha et Juju / Caro et Chouchoute.

        Passons à la rencontre !

        Les rouennaises : HAMON Anne-Sophie, 1494 ; GRARD Viky, 1399 ; MUSSEAU Lise, 1222 ; TRICHARD Delphine, 1020.
        Les amiénoises : PETITPREZ Caroline, 1466 ; CARLIE Hélène, 1406, GRUGEON Charline, 1253 ; FLAHAUT Julia, 957.

        Evolution du score : Amiens - Rouen : 0-2 / 2-2 / 2-4 / 4-4 / 6-4 / 7-5 / 7-7 / 8-8 / 9-9 : objectif NUL, YOUPI !!!!

        Pendant le match : avant les doubles, je réunis mes joueuses et leur dis : "les filles, on tente un coup de poker : on change les doubles". On a assuré, on remporte les deux doubles. A 8-8, réunio de crise, "Chacha, Juju, il nous faut un match sur les deux ! Allez, on se bouge là !!". Charline apportera le 9ème point.

        Le détail

        Juju (4 défaites) : très bonne entame de match de sa part, elle va s\'incliner à la belle sur HAMON alors qu\'elle menait 2-1 (-4/11/6/-5/-4). Après se fut plus compliqué et Julia n\'était plus trop en jambes, elle va perdre sur GRARD 3-0 (-7/-2/-5), sur TRICHARD 3-1 (9/-6/-7/-3) et sur MUSSEAU 3-0 (-3/-5/-1).

        Chacha (1 victoire ; 3 défaites) : elle n\'a rien pu faire face à GRARD, défaite 3-0 (-9/-9/-6), ensuite elle ne passe pas loin de la victoire contre HAMON, défaite 3-2 (-5/7/9/-9/-9). Défaite 3-0 sur MUSSEAU (-3/-8/-8) et pour finir, elle remporte son dernier match 3-1 face à TRICHARD et nous sauve de la défaite (9/11/-7/8).

        Julia et Charline vont remporter leur double 3-1 contre MUSSEAU et TRICHARD (-11/8/5/7).

        Caro (2 victoires ; 2 défaites) : très stressée ma Caro aujourd\'hui ! Elle bat facilement MUSSEAU 3-0 (-6/-6/-8) puis gagne sur TRICHARD 3-1 (7/-10/10/9). Après, elle va s\'incliner sur GRARD 3-0 (-7/-10/-6) et match abominable face à HAMON : elle mène facilement 2-0 (les sets sont vraiment offerts par l\'adversaire) puis HAMON va resserrer le jeu au 3ème set et Caro va finalement perdre ce match 3-2 (6/4/-12/-11/-3) ce qui entraînera une séparation volante et un coupe de poing dans une porte (je crois qu\'elle peut serrer la main de Max !!)

        Chouchoute (4 victoires) : je me suis remise de mon dernier match et étais prête à placer mes "tchô" au bon moment ! Je bas TRICHARD 3-1 (5/9/-8/6) puis match plus compliqué sur MUSSEAU que je remporte 3-2 (7/-6/-5/2/3). Ensuite j\'enchaîne deux belles victoires face à HAMON 3-1 (-9/7/8/7) et GRARD 3-1 (-12/6/4/4).

        Caroline et moi gagnons notre double 3-1 sur HAMON et GRARD (6/-7/8/7).

        Bonne fin de saison et super après match : apéro avec ou sans alcool, hein les filles !!! Pizza à volonté, petite éclipse de quelques personnes, bataille d\'eau (certaines seront plus mouillées que d\'autres) et fous rires !

        Merci les filles pour cette seconde phase.

        Hélène CARLIE'),
        array('id' => '268','equipe' => '14','journee' => '14','date' => '1334358000','lieu' => 'Amiens','adversaire' => 'ENT ST PIERRE 3','score' => '5','score_adv' => '10','commentaire' => ''),
        array('id' => '269','equipe' => '15','journee' => '14','date' => '1334358000','lieu' => 'Péronne','adversaire' => 'TT PERONNE 1','score' => '14','score_adv' => '4','commentaire' => ''),
        array('id' => '270','equipe' => '16','journee' => '14','date' => '1334358000','lieu' => 'Amiens','adversaire' => 'POIX USTT 1','score' => '10','score_adv' => '8','commentaire' => ''),
        array('id' => '271','equipe' => '17','journee' => '14','date' => '1334358000','lieu' => 'Amiens','adversaire' => 'ROYE PPC 2','score' => '16','score_adv' => '2','commentaire' => '')
        );

        // `astt`.`Resumes`
        $Resumes = array(
        array('evenement' => '12','competition' => 'Cr','type' => '0','date' => '1319147567','texte' => '1er Tour des individuels Régional à Chauny !


        Après une bonne journée de coaching avec mon 2-4 (Cyril De Catheu), j\'ai failli oublié de me coucher.
        Ben oui c\'était la nuit blanche mais c\'était pas une raison pour rester chez soi le dimanche.
        Levé 6H, 1er tour d\'indiv à Chauny arrivé sur place a 8h30 les pieds gelés.
        A peine le temps de s\'échauffer pour les Amiénois que les poules étaient lancées.
        Le temps d\'enlever le survet que j\'étais déjà appelé. J\'ai opté pour l\'option allumage du cerveau et jambe de secours pour mon 1er match de poule.
        Face à Beegee Haignère en mode survie je n\'ai pas su me montrer incisif. 3-1 dans ma face.
        J\'enchaine avec une défaite sur Crnic 12-10 à la belle. J\'ai eu un méchant bug à 10-4 en ma faveur, mon cerveau m\'a laché.
        J\'assure mes 3 autres matchs pour finir 3eme de poule.
        Alex perds Crnic pour la 1ere place de la poule. La bête était déja à terre avant le début du match. Il aura bien essayé de se revolter mais même la bâche l\'a laissée tomber ;)
        Dans l\'autre poule les 2 BB Amiénois luttaient durement pour sortir de poule. Bertand accrocheur ne réussit pas à remporter un match. Bruno lui réussit l\'exploit de vaincre le vainqueur du tour.
        Dommage pour lui ça ne lui a pas permis de finir dans les 3 premiers, malgré 3 victoires en poule.
        Chez les juniors, Cyril accrocheur lui aussi ne parvient pas à gagner un match en poule. Pendant ce temps la Benoit finit 2eme de poule après un défaite dans le match des bucherons Juniors avec Mr Van Caemelbeke
        En barrage junior nous prions Saint Benito Vaquero, d\'avoir su renaitre au 5eme set, après avoir sauvé 1 balle de match au 4eme sur Girot
        Se pourrait-il qu\'il entende les conseils que nous lui confessons, nous qui somme si petit a ses pieds en essayant de le coacher ?!
        Puis touché par la grace il bat pépère Dufays en 1/4 de finale. "bon j\'ai tapé ma tchote rutasse" nous lache t-il tout content dans son analyse d\'après match.
        Il aurait également trouvé la foi: "J\'ai des sauts de concentration. Va falloir le travailler à l\'entrainement"
        D\'un coup j\'avais les yeux qui piquent, ils commençaient à briller. (J\'y ai cru, mais c\'etait à cause du soleil)
        Bref, ensuite il a coulé sur Robinet en 1/2 puis il perd Van Caemelbeke dans le match des bucherons juniors Acte 2 pour la place 3-4.
        Cyril perds son match de maintien et jouera le prochain tour en Départemental.
        En barrage sénior Alex bat Lision 3-0 et moi je bats Damay Emmanuel 3-1.
        Bruno lui perd Oudaille 12-10 à la belle ça pique. Puis remporte ses 2 matchs de classement et finit à la 17eme place 
        En 1/4 Je bats Trochut 11-9 à la belle dans un match fantafightinistique !
        Alex perd Damay Arnaud 3-1 (les 4 sets se sont joués aux avantages). Un petit manque de fraicheur physique;
        Pourtant on lui avait infligé cours de combat et cross cette semaine à la Fac. Mais il a préféré récupération et soins à l\'hopital nord pour préparer son week-end.
        Je perds moi aussi Damay Arnaud en 1/2 finale à la belle, en menant 2-0.
        Pas de bug cette fois-ci, mais un problème de connexion entre mes neurones et mes jambes. Je suis passé du HD (Hyper Déplacement) à l\'ADSL (Attention Déplacement Super Lent) pour finalement péter les cables à 7-7 à la belle.
        J\'ai rebranché les cables de secours pour rejouer Crnic pour la place 3-4, mais plus de batterie le débit a chuté jusqu\'a 1 ko /s (en gros à chaque top),  j\'étais vraiment plus dans le coup.
        Alexandre bat Trochut et Bouchoir dans le match des bucherons Séniors, pour finir à une belle 5eme place. Il a quand même pris le forfait illimiter table - bache avec en option les commentaires de matchs
        (Je vous épargne les détails c\'etait à en pleurer) 
        Un bilan mitigé (pour le sportif) en régional, puisque:
        En junior Benoit finit 4eme et Cyril  13eme ne se maintien pas. 

        En Sénior je finis 4eme, Alexandre 5 eme, Bruno 17eme et Bertrand 22eme
        Bruno et Bertand ne se maintiennent pas non plus à priori.

        Au niveau de l\'ambiance c\'était super. Merci les BB pour le coaching et les encouragements. Vous nous avez beaucoup aidé.
        Et bien sur Merci pour le transport à nos 2 chauffeurs de luxe 

        Aujourd\'hui c\'était plutôt Benoit Presque et Bruno Dommage, mais on se rattrapera au prochain tour à la maison !  =D 

        A la Saint Edwige on se retrouve entre beegees ! 

        Ps: A noter la participation en régionale de Yohan Lecomte, Léo Bodinel, Antoine Huon et Caroline Petitprez pour le prochain tour'),
        array('evenement' => '11','competition' => 'CS','type' => '0','date' => '1319455444','texte' => '63 joueurs de l’Amiens STT ont participé les 15 et 16 octobre au 1er tour du critérium fédéral.

        En N1 moins de 11 ans, Julien Martin finit 5e, Louis Chaerle et Tristan Hersent 9e, Léo Hersent ne sort pas des poules.
        En N1 moins de 12 ans, Louis Chaerle, Léo Hersent et Tristan Hersent terminent 33e, Andréï Deguingand et Julien Martin 17e.
        En N1 moins de 13 ans, Louis Chaerle et Andréï Deguingand terminent 2e de poule. Ils sont éliminés au tour suivant et finissent 33e.
        En N1 moins de 14 ans, Louis Chaerle termine 33e et Andréï Deguingand 65e.
        En N1 moins de 16 ans, Raphaël Chatelain termine 9e.
        En N1 moins de 18 ans, Raphaël Chatelain termine 1er de poule puis est éliminé. Il finit 33e.
        En N1 moins de 21 ans, Raphaël Chatelain termine 65e.
        En N1 Elite, Raphaël Chatelain termine 4e de poule (défaites contres les n°116, n°321 et n°543). Malin Plotuna termine 2e de poule (victoires contre les n°739 et n°867 et défaite contre le n°224). Il prend finalement la 17e place.

        En N2 benjamines, Elvire Vanier, Marine Huon et Eline Vanier terminent 3e, 6e et 9e.
        En N2 minimes filles, Léa Huré termine 4e.
        En N2 cadettes, Julia Flahaut termine 2e.
        En N2 cadets, Lucas Dubois finit 2e, Loïc Lefevre 4e, Antoine Huon 10e et Léo Bodinel 16e.
        En N2 juniors filles, Charline Grugeon finit 8e et Caroline Petitprez 9e.
        En N2 seniors messieurs, Yohan Lecomte termine 22e.

        En R1 benjamines, Clémence Steelandt finit 3e et Pauline Steelandt prend la 8e place.
        En R1 minimes filles, Sophie Tran termine 7e.
        En R1 minimes garçons, Paul Vandewoestyne termine 4e et Enguerrand Wallon, 13e.
        En R1 cadettes, Valentine Huré prend la 10e place.
        En R1 cadets, Floris Chartier termine 5e, Richard Tran 12e et Joffrey Hauw 13e.
        En R1 juniors garçons, Benoît Vaquier finit 4e et Cyril De Catheu 13e.
        En R1 seniors messieurs, Vincent Rasselet termine 4e, Alexandre Haigneré 5e, Bruno Marysse 17e et Bertrand Bathelot 22e.

        En D1 benjamins, Thomas Legris et Gustav Defosse terminent 1er et 2e. Ymad Hamdad est 12e et Keziah Desjonqueres 13e.
        En D1 minimes garçons, Paul Boinet termine 1er, Christophe De Catheu et Pierre-Philippe Nadau 5e, Benjamin Wilhem 10e.
        En D1 cadets, Ala-Edinne Chahir et Victor Hénao terminent 1er et 2e.
        En D1 juniors garçons, Louis Vandewoestyne termine 1er, Paul Bodinel 4e, Hugo Bouteiller et Benoît Bonté 5e, Jeoffrey Stephan 9e.
        En D1 seniors messieurs, Matthieu Lamérant termine 16e, Arnaud Feraud 17e, Jean-Paul Poulain 18e.

        En D2 juniors garçons, Rémi Couillet finit 1er et Sylvain Pruvot 4e.
        En D2 seniors messieurs : Groupe 1 : Marc Flament 4e, Thibault De Visme 12e, Olivier Cocquet 14e. Groupe 2 : Yoann Cailloin 2e, Ali Combo Combo 3e, Geoffroy Gilot 10e, Alexandre Goupil 18e, Grégory Chhe 20e.'),
        array('evenement' => '29','competition' => 'Cr','type' => '0','date' => '1323242733','texte' => 'Voici le résumé du tour d\'indiv\' du dimanche joué à l\'ASTT !

        Dimanche 4 décembre
        Se lever aux aurores pour jouer comme des Saints. Tel était l\'objectif des Amiénois en ce jour. Non pas pour accéder à la 1ère place du championnat de Pro A. 
        Mais plus humblement pour accéder à la haine de St-Pierre qui se déroulera chez les Elbeufs en Janvier prochain.

        Quatre Aménois étaient donc engagés en Sénior Messieurs, 2 en junior Messieurs et 1 demoiselle en junior Dames.
        Le Premier choc de la journée. Duel fratricide annoncé entre 2 beegees chaud comme la braise.
        Mr Lecomte l\'emporte au terme d\'une rencontre accrochée face à Mr Haigneré à la belle. Mais ça ça ne change rien pour Alex la journée était déjà "foirée"
        S\'enchaîna alors un récital offert par Alex qui se sentait comme à la maison.
        Entre les "ça me gave" , "même le tournoi du canton j\'le gagnerais pas" , "j\'vais me faire serrer", "je joue comme une brêle" , "aller", "j\'vais me mettre au baby-ping" et les "cholet", yavait pas de quoi s\'ennuyer.
        Yohan finit donc 1er de poule, alex 3 ème.
        Bruno 4ème dans une poule compliquée. T\'aurais pu faire l\'effort de finir devant Letellier quand même ...
        Vince finit 2 ème avec une seule défaite face à Archer ou il s\'est complétement craqué. Mais aura quand même offert en poule l\'un des plus beaux matchs de la journée face à Damay Olivier.

        En barrage Nous avions donc: 
        - Haigneré - Crnic
        - Letellier - Rasselet

        Du côté des juniors, Caro surboostée par l\'envie de gagner gérait tranquilement ça compét. Arriver la 2ème à la salle à 8h du mat\' alors que ya Rasselet qui est même pas lever ça mérite le respect !
        Chez les garçons Benoit et Louis font 2ème et 3ème de poule.
        En barrage Louis l\'emporte sur Leroy et Benoit sur Lefevre.
        En 1/4 Loulou était fou, il l\'emporte sur Dufays puis en 1/2 sur Lenormand au terme de 2 matchs sublimes, j\'avais pas encore jouer Letellier que j\'en avait les larmes aux yeux.
        Benoit perd en 1/4 sur Borgoo puis finit 7ème en perdant Van-Caemelbeke et en gagnant Dufays. Dommage Benoit t\'y était presque !
        Louis perd en finale sur Borgoo logiquement, mais aura fait une superbe journée. Il n\'a rien a se reprocher, superbe exemple, il s\'est bien déchiré.

        Pendant ce temps Caro disputait la finale face à Lahouel. Gros gros match.... sisi y\'avait du suspens.
        Caro l\'emporte à la belle avec de grosses frayeurs, puisqu\'elle est menée 2-1.


        Au même moment les barrages commençaient.
        Le miens c\'était du béton armée !
        Letellier: "A croire que se mec c\'est le dieu de la R1" m\'avait prévenu Denis Chatelain.
        J\'y ai pas cru et pourtant j\'aurais du.
        Je m\'incline 3-1 face à "Yves" en du rêve, avec un petit "Il joue 300" en fin de match.
        J\'ai pas trouvé de solution face à patator man, ou l\'homme qui frappe plus vite que son ombre.
        Je sais pas s\'il était atteint de Parkinson ou d\'hérésie mais j\'ai casqué.
        J\'ai pris un forfait illimité "ramasse balle dans la bâche et chiale un coup".
        Il aura joué 5 sets de rêve dans la journée, respect !

        Pendant ce temps Alex l\'emporte à la belle sur Crnic après avoir été mené 2-0.
        Beaucoup de fight et de "tcho" peut être même un peu trop de "tcho".

        En 1/4 Alex l\'emporte facilement sur Archer complètement fatigué après les poules. Et Yohan l\'emporte aussi mais à la belle après avoir été mené 2-1 sur Bouchoir.
        Je vous laisse deviné le resultat de mon nouveau maître face à dosière en 1/4.
        Il s\'incline à la belle en menant 2-0 face à Dosière.

        En 1/2 finale yohan gagne 3-1 sur Dosière en ratant 6 balles de match au 3ème set.
        Alex prend 3-0 sur Chadufaud.

        En match de classement Bruno bats Lematte puis perds Brochot et Heuclin, il finit 16ème et se maintien.
        Vince fait 9ème en battant Damay F et Crnic.
        Alex finit 3ème. Pour le récompenser de sa prestation tragico-dramatique de la journée Dosière l\'a gentillement consolé.
        Yohan finit 1er en battant chadufaud en finale.

        "T\'en veux" nous à lâché yohan heureux de ça journée.
        Oué oué on t\'en veux enfoiré. Malgré son air sympathique il gagne plus facile en indiv\' qu\'en par équipe ;)

        Bilan de la journée:

        Bravo Caro, belle journée à +0, encore une fois c\'est beau !

        Benoit le fantôme, en mode touriste toute la journée. On l\'a même pas vu partir. On aurait préféré ne pas le voir gagner...

        Louis. A un pas de decroché le grâal et d\'avoir sa statue à l\'entrée de l\'ASTT.

        Yohan. L\'homme fort, que des victoires pour lui aujourd\'hui. Un jour il fera la même en par équipe. Sisi on y croit !
        Spéciale dédicace "Yes papa c\'est cadeau !" Lucas Créange like this ;) 

        Bruno. A fait le boulot et se maintien. On change pas les bonnes habitudes. Auteur d\'un bon coaching en companie de Maximilien Lamour pour aider Loulou.

        Alex. "Tout m\'échappe" nous a t-il confié au terme de la journée. En tout cas t\'as pas raté la bâche et le carton jaune.
        A donc commandé sa bâche cornilleau pour noël, pour s\'entrainer à shooter élégament. Et plus important prendre des leçons par Mr L\'Hote pour shooter sans se faire griller.

        Vince. Ne dort plus depuis se dimanche 13h30, heure ou il s\'est fait victimiser en public et sans défense par LETELLIER.
        Peut heureusement compter sur le soutien de ses supporter pour le réconforter.

        Yves Letellier: Le Casse Bonbon de la journée de Vincent Rasselet. Maintenant je crois au miracle. On peut avoir 1600 points sur la licence et jouer 300 pendant 5sets puis rien faire de sa journée.
        A quand même gagné le droit de lui remettre sa volée en poule lors du prochain tour.

        Un grand merci au public venu nous soutenir. Prochain tour à Compiègne le 15 janvier.
        Ca nous laisse le temps de nous gaver de foie gras pendant les vacances pour envoyé du pâté à la rentrée !

        Vincent Rasselet')
        );
        
        
        
        
        // TRAITEMENT
        
        
        switch ($table) {
            case 'articles':
                $oldEntites = $Articles;
                break;
            case 'events':
                $oldEntites = $Evenements;
                break;
            case 'interviews':
                $oldEntites = $Interviews;
                break;
            case 'links':
                $oldEntites = $Liens;
                break;
            case 'messages':
                $oldEntites = $Commentaires;
                break;
            case 'news':
                $oldEntites = $Actualites;
                break;
            case 'players':
                $oldEntites = $Joueurs;
                break;
            case 'partners':
                $oldEntites = $Partenaires;
                break;
            case 'results':
                $oldEntites = $Resultats;
                break;
            case 'summaries':
                $oldEntites = $Resumes;
                break;
            case 'teams':
                $oldEntites = $Equipes;
                break;
            default:
                break;
        }
            
        $entities = array();
        $em = $this->getDoctrine()->getEntityManager();
        
        foreach ($oldEntites as $key => $values) {
            //exit(var_dump($values));
            
            $date = new \Datetime('now');
            switch ($table) {
                case 'articles':
                    $entities[$key]['id'] = $values['id'];
                    $EntityToAdd = new Article();
                    $EntityToAdd->setCreatedAt($entities[$key]['created_at'] = new \Datetime());
                    $EntityToAdd->setUpdatedAt($entities[$key]['updated_at'] = new \Datetime());
                    $EntityToAdd->setDeleted($entities[$key]['deleted'] = false);
                    $EntityToAdd->setTitle($entities[$key]['title'] = $values['titre']);
                    $EntityToAdd->setSubject($entities[$key]['subject'] = $values['sujet']);
                    $EntityToAdd->setDate($entities[$key]['date'] = $date->setTimestamp($values['date']));
                    $EntityToAdd->setFile($entities[$key]['file'] = $values['link']);
                    $em->getRepository('FSBASTTCoreBundle:Team');
                    break;
                case 'events':
                    $entities[$key]['id'] = $values['id'];
                    $EntityToAdd = new Event();
                    $EntityToAdd->setCreatedAt($entities[$key]['created_at'] = new \Datetime());
                    $EntityToAdd->setUpdatedAt($entities[$key]['updated_at'] = new \Datetime());
                    $EntityToAdd->setDeleted($entities[$key]['deleted'] = false);
                    $EntityToAdd->setTitle($entities[$key]['title'] = $values['nom']);
                    $EntityToAdd->setDescription($entities[$key]['description'] = $values['description']);
                    $EntityToAdd->setDate($entities[$key]['date'] = $date->setTimestamp($values['date']));
                    $EntityToAdd->setPlace($entities[$key]['place'] = $values['lieu']);
                    $EntityToAdd->setIsTournament($entities[$key]['isTournament'] = ($values['tournoi'] ? true : false));
                    $em->getRepository('FSBASTTCoreBundle:Event');
                    break;
                case 'interviews':
                    $entities[$key]['id'] = $values['id'];
                    $EntityToAdd = new Interview();
                    $EntityToAdd->setCreatedAt($entities[$key]['created_at'] = new \Datetime());
                    $EntityToAdd->setUpdatedAt($entities[$key]['updated_at'] = new \Datetime());
                    $EntityToAdd->setDeleted($entities[$key]['deleted'] = false);
                    $player = $em->getRepository('FSBASTTCoreBundle:Player')->findOneByLicence($values['joueur']);
                    $EntityToAdd->setPlayer($entities[$key]['player'] = $player);
                    $EntityToAdd->setDescription($entities[$key]['description'] = $values['texte']);
                    $EntityToAdd->setDate($entities[$key]['title'] = $date->setTimestamp($values['date']));
                    $em->getRepository('FSBASTTCoreBundle:Interview');
                    break;
                case 'links':
                    $entities[$key]['id'] = $values['id'];
                    $EntityToAdd = new Link();
                    $EntityToAdd->setCreatedAt($entities[$key]['created_at'] = new \Datetime());
                    $EntityToAdd->setUpdatedAt($entities[$key]['updated_at'] = new \Datetime());
                    $EntityToAdd->setDeleted($entities[$key]['deleted'] = false);
                    $EntityToAdd->setTitle($entities[$key]['title'] = $values['libelle']);
                    $EntityToAdd->setCategory($entities[$key]['category'] = $values['categorie']);
                    $EntityToAdd->setUrl($entities[$key]['url'] = $values['lien']);
                    $em->getRepository('FSBASTTCoreBundle:Link');
                    break;
                case 'messages':
                    $entities[$key]['id'] = $values['id'];
                    $EntityToAdd = new Message();
                    $EntityToAdd->setCreatedAt($entities[$key]['created_at'] = $date->setTimestamp($values['date']));
                    $EntityToAdd->setUpdatedAt($entities[$key]['updated_at'] = $date->setTimestamp($values['date']));
                    $EntityToAdd->setDeleted($entities[$key]['deleted'] = false);
                    $EntityToAdd->setAuthor($entities[$key]['author'] = $values['auteur']);
                    $EntityToAdd->setClub($entities[$key]['club'] = $values['club']);
                    $EntityToAdd->setDescription($entities[$key]['description'] = $values['message']);
                    $em->getRepository('FSBASTTCoreBundle:Message');
                    break;
                case 'news':
                    $entities[$key]['id'] = $values['id'];
                    $starttime = new \Datetime('now');
                    $endtime = new \Datetime('now');
                    $EntityToAdd = new News();
                    $EntityToAdd->setCreatedAt($entities[$key]['created_at'] = new \Datetime());
                    $EntityToAdd->setUpdatedAt($entities[$key]['updated_at'] = new \Datetime());
                    $EntityToAdd->setDeleted($entities[$key]['deleted'] = false);
                    $EntityToAdd->setStarttime($entities[$key]['starttime'] = $starttime->setTimestamp($values['debut_publication']));
                    $EntityToAdd->setEndtime($entities[$key]['endtime'] = $endtime->setTimestamp($values['fin_publication']));
                    $EntityToAdd->setTitle($entites[$key]['title'] = $values['nom']);
                    $EntityToAdd->setPlace($entities[$key]['place'] = $values['lieu']);
                    $EntityToAdd->setDate($entities[$key]['date'] = $date->setTimestamp($values['date']));
                    $EntityToAdd->setDescription($entities[$key]['description'] = $values['texte']);
                    $EntityToAdd->setPlace($entites[$key]['place'] = $values['lieu']);
                    $EntityToAdd->setPresentation($entites[$key]['presentation'] = $values['miseenpage']);
                    $EntityToAdd->setScreen($entities[$key]['screen'] = $values['screen']);
                    $em->getRepository('FSBASTTCoreBundle:News');
                    break;
                case 'players':
                    $EntityToAdd = new Player();
                    $civility = 'M';
                    switch ($values['sexe']) {
                        case 'H':
                            $civility = 'M';
                            break;
                        case 'F':
                            $civility = 'W';
                            break;
                        default:
                            break;
                    }
                    $EntityToAdd->setCreatedAt($entities[$key]['created_at'] = new \Datetime());
                    $EntityToAdd->setUpdatedAt($entities[$key]['updated_at'] = new \Datetime());
                    $EntityToAdd->setHidden($entities[$key]['hidden'] = false);
                    $birthday = explode('-', $values['date_naissance']);
                    $EntityToAdd->setLicence($entities[$key]['licence'] = $values['licence']);
                    $EntityToAdd->setCivility($entities[$key]['civility'] = $civility);
                    $EntityToAdd->setBirthday($entities[$key]['birthday'] = $date->setDate($birthday[0], $birthday[1], $birthday[2]));
                    $EntityToAdd->setCategory($entities[$key]['category'] = $values['categorie']);
                    $EntityToAdd->setFirstname($entities[$key]['firstname'] = $values['prenom']);
                    $EntityToAdd->setLastname($entities[$key]['lastname'] = $values['nom']);
                    $EntityToAdd->setPoints($entities[$key]['points'] = $values['points']);
                    $EntityToAdd->setClassement($entities[$key]['classement'] = $values['classement']);
                    if ($values['equipe']) {
                        $mainTeam = $em->getRepository('FSBASTTCoreBundle:Team')->findOneById($values['equipe']);
                        if ($mainTeam) {
                            $EntityToAdd->setMainTeam($entities[$key]['mainTeam'] = $mainTeam);
                        }
                    }
                    if ($values['equipe_m']) {
                        $secondTeam = $em->getRepository('FSBASTTCoreBundle:Team')->findOneById($values['equipe_m']);
                        if ($mainTeam) {
                            $EntityToAdd->setMainTeam($entities[$key]['secondTeam'] = $secondTeam);
                        }
                    }
                    if ($values['equipe_j']) {
                        $thirdTeam = $em->getRepository('FSBASTTCoreBundle:Team')->findOneById($values['equipe_j']);
                        if ($mainTeam) {
                            $EntityToAdd->setMainTeam($entities[$key]['thirdTeam'] = $thirdTeam);
                        }
                    }
                    $em->getRepository('FSBASTTCoreBundle:Player');
                    break;
                case 'partners':
                    $entities[$key]['id'] = $values['id'];
                    $EntityToAdd = new Partner();
                    $EntityToAdd->setCreatedAt($entities[$key]['created_at'] = new \Datetime());
                    $EntityToAdd->setUpdatedAt($entities[$key]['updated_at'] = new \Datetime());
                    $EntityToAdd->setDeleted($entities[$key]['deleted'] = false);
                    $EntityToAdd->setTitle($entities[$key]['title'] = $values['nom']);
                    $EntityToAdd->setLink($entities[$key]['link'] = $values['lien']);
                    $EntityToAdd->setPhone($entities[$key]['phone'] = $values['num_tel']);
                    $em->getRepository('FSBASTTCoreBundle:Partner');
                    break;
                case 'results':
                    $entities[$key]['id'] = $values['id'];
                    $EntityToAdd = new Result();
                    $EntityToAdd->setCreatedAt($entities[$key]['created_at'] = new \Datetime());
                    $EntityToAdd->setUpdatedAt($entities[$key]['updated_at'] = new \Datetime());
                    $EntityToAdd->setDeleted($entities[$key]['deleted'] = false);
                    $team = $em->getRepository('FSBASTTCoreBundle:Team')->findOneById($values['equipe']);
                    if ($team) {
                        $EntityToAdd->setTeam($entities[$key]['team'] = $team);
                    }
                    $EntityToAdd->setWeek($entities[$key]['week'] = $values['journee']);
                    $EntityToAdd->setDate($entities[$key]['date'] = $date->setTimestamp($values['date']));
                    $EntityToAdd->setPlace($entities[$key]['place'] = $values['lieu']);
                    $EntityToAdd->setTeamScore($entities[$key]['teamScore'] = $values['score']);
                    $EntityToAdd->setOpponent($entities[$key]['opponent'] = $values['adversaire']);
                    $EntityToAdd->setOpponentScore($entities[$key]['opponentScore'] = $values['score_adv']);
                    $EntityToAdd->setDescription($entities[$key]['description'] = $values['commentaire']);
                    $em->getRepository('FSBASTTCoreBundle:Result');
                    break;
                case 'summaries':
                    //$entities[$key]['id'] = $values['id'];
                    $EntityToAdd = new Summary();
                    $EntityToAdd->setCreatedAt($entities[$key]['created_at'] = new \Datetime());
                    $EntityToAdd->setUpdatedAt($entities[$key]['updated_at'] = new \Datetime());
                    $EntityToAdd->setDeleted($entities[$key]['deleted'] = false);
                    $event = $em->getRepository('FSBASTTCoreBundle:Event')->findOneById($values['evenement']);
                    if ($event) {
                        $EntityToAdd->setEvent($entities[$key]['event'] = $event);
                    }
                    $EntityToAdd->setType($entities[$key]['type'] = ($values['type'] == 1 ? 'T' : 'I'));
                    $EntityToAdd->setTournament($entities[$key]['tournament'] = $values['competition']);
                    $EntityToAdd->setDate($entities[$key]['date'] = $date->setTimestamp($values['date']));
                    $EntityToAdd->setDescription($entities[$key]['description'] = $values['texte']);
                    $em->getRepository('FSBASTTCoreBundle:Summary');
                    break;
                case 'teams':
                    $entities[$key]['id'] = $values['id'];
                    $EntityToAdd = new Team();
                    $EntityToAdd->setCreatedAt($entities[$key]['created_at'] = new \Datetime());
                    $EntityToAdd->setUpdatedAt($entities[$key]['updated_at'] = new \Datetime());
                    $EntityToAdd->setDeleted($entities[$key]['deleted'] = false);
                    $EntityToAdd->setNumber($entities[$key]['number'] = $values['numero']);
                    $civility = 'M';
                    switch ($values['genre']) {
                        case 'H':
                            $civility = 'M';
                            break;
                        case 'F':
                            $civility = 'W';
                            break;
                        case 'J':
                            $civility = 'Y';
                            break;
                        default:
                            break;
                    }
                    $EntityToAdd->setCivility($entities[$key]['civility'] = $civility);
                    $EntityToAdd->setDivision($entities[$key]['division'] = $values['division']);
                    $EntityToAdd->setNbPlayers($entities[$key]['nbPlayers'] = $values['nb_jrs']);
                    $EntityToAdd->setOfficialLink($entities[$key]['officialLink'] = $values['lien']);
                    //$leader = $em->getRepository('FSBASTTCoreBundle:Player')->findOneById($values['capitaine']);
                    //if ($leader) {
                        //$EntityToAdd->setLeader($entities[$key]['leader'] = $leader);
                    //}
                    $em->getRepository('FSBASTTCoreBundle:Team');
                    break;
                default:
                    break;
            }
            
            //exit(var_dump($EntityToAdd));
            $em->persist($EntityToAdd);
        }
        //echo '<pre>';
        //exit(var_dump($entities));
        $em->flush();

        return $this->render('FSBASTTFrontBundle:Dump:success.html.twig');
    }

}
