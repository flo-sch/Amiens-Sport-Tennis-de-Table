<?php

namespace FSB\ASTT\FrontBundle\Controller;

use FSB\ASTT\FrontBundle\Controller\FrontController;
use FSB\ASTT\CoreBundle\Entity\News;
use FSB\ASTT\CoreBundle\Entity\Player;
use FSB\ASTT\CoreBundle\Entity\Team;
use FSB\ASTT\CoreBundle\Entity\Article;
use FSB\ASTT\CoreBundle\Entity\Event;
use FSB\ASTT\CoreBundle\Entity\Interview;
use FSB\ASTT\CoreBundle\Entity\Link;
use FSB\ASTT\CoreBundle\Entity\Message;
use FSB\ASTT\CoreBundle\Entity\Partner;
use FSB\ASTT\CoreBundle\Entity\Result;
use FSB\ASTT\CoreBundle\Entity\Summary;

// SELECT * FROM `news` WHERE `id` IN (2,4,29,33,11,17,16,39,51,53,65,70,71,85,60,74,79)

class DumpController extends FrontController {

    public function indexAction() {
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
  array('id' => '96','nom' => 'Challenge Poussins-Benjamins-Minimes Départemental','texte' => 'Huit joueurs de l\'Amiens Sport TT participeront le samedi 12 mai au challenge poussins-benjamins-minimes départemental qui se déroulera à l\'ASTT.

Liste des participants :
- Poussines : Pauline Steelandt, Jeanne André
- Poussins : Maël Ledoux, Adem Hamdad, Gauthier Brasseur
- Benjamins : Ymad Hamdad, Kéziah Desjonqueres
- Minimes garçons : Pierre-Philippe Nadau

Bonne chance à tous !

','lieu' => 'Amiens','date' => '1336773600','miseenpage' => '0','screen' => 'PBM ASTT.JPG','joueur_du_we' => '0','debut_publication' => '1336341600','fin_publication' => '1336773600'),
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
  array('id' => '91','nom' => 'Titres par équipes Nationale 3','texte' => 'Suite à sa première place dans sa poule de championnat par équipes, l\'équipe 1 messieurs participera les 12 et 13 mai à Tours aux titres par équipes Nationale 3.

Bonne chance à eux !','lieu' => 'Tours','date' => '1336773600','miseenpage' => '0','screen' => 'PlotunaM6.JPG','joueur_du_we' => '0','debut_publication' => '1336255200','fin_publication' => '1336860000'),
  array('id' => '92','nom' => 'Interclubs Nationaux','texte' => 'Trois équipes de l\'Amiens Sport TT participeront aux interclubs nationaux les 12 et 13 mai 2012 à Joué les Tours :

- l\'équipe benjamines sera composée de Marine Huon, Eline Vanier et Elvire Vanier.
- l\'équipe benjamins sera composée de Louis Chaerle, Gustav Defosse, Thomas Legris et Julien Martin.
- l\'équipe minimes garçons sera composée de Paul Boinet, Andréï Deguingand et Tristan Hersent.
- l\'équipe minimes filles était également qualifiée mais ne sera pas engagée.

Bonne chance à tous !','lieu' => 'Joué les Tours','date' => '1336773600','miseenpage' => '0','screen' => 'Interclubs.jpg','joueur_du_we' => '0','debut_publication' => '1336255200','fin_publication' => '1336860000'),
  array('id' => '97','nom' => 'Résultats des Interdépartementaux','texte' => 'Les interdépartementaux 2012 se sont déroulés le mardi 8 mai 2012 à Laon.

La délégation de la Somme, composée de 16 joueurs de l\'Amiens Sport TT, s\'impose devant l\'Oise et l\'Aisne.

Liste des participants amiénois :

Benjamines : Elvire Vanier, Eline Vanier, Marine Huon
Benjamins : Tristan Hersent, Léo Hersent, Gustav Defosse (Julien Martin, Louis Chaerle et Thomas Legris ont décliné la sélection)
Minimes filles : Léa Huré, Clémence Steelandt (BF), Sophie Tran
Minimes garçons : Andréï Deguingand, Paul Boinet, Paul Vandewoestyne
Cadets 1 : Loïc Lefevre, Antoine Huon, Léo Bodinel, Floris Chartier','lieu' => 'Laon','date' => '1336428000','miseenpage' => '0','screen' => 'photo.JPG','joueur_du_we' => '0','debut_publication' => '1336428000','fin_publication' => '1337032800')
);
        
        $entities = array();

        $em = $this->getDoctrine()->getEntityManager();
        $em->getRepository('FSBASTTCoreBundle:News');

        foreach ($Actualites as $key => $values) {
            //exit(var_dump($values));

            $EntityToAdd = new News();
            
            $date = new \Datetime('now');
            $starttime = new \Datetime('now');
            $endtime = new \Datetime('now');
            
            
            $entities[$key]['id'] = $values['id'];
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
            
            //exit(var_dump($EntityToAdd));

            $em->persist($EntityToAdd);
            //break;
        }
        //echo '<pre>';
        //exit(var_dump($entities));
        $em->flush();

        return $this->render('FSBASTTFrontBundle:Dump:success.html.twig');
    }

}
