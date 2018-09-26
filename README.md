# Projet Wordsmith
Jeu de rôle plateau & textuel

# 1. Objectifs
Le jeu de rôle (ou JdR) traditionnel rassemble plusieurs joueurs (appelés rôlistes) et un Maître de Jeu (MJ) autour d’une table pour des parties lors desquelles chacun se crée un personnage et lui fait vivre des aventures dont le scénario est monté de toutes pièces par le Maître de Jeu et souvent basé sur un univers qui lui fournit un contexte général et des règles. Lors des parties, le Maître de Jeu met les rôlistes dans des situations difficiles dont ils doivent se sortir à l’aide de tests (jets de dés) qui dépendent des compétences de leur personnage. Le jeu de rôle textuel se situe à mi-chemin entre le jeu de rôle papier (ou plateau) traditionnel et le roman collectif. Notre objectif est de créer un site qui mélange ces deux façons de pratiquer le jeu de rôle à partir d’un univers créé de toutes pièces. La partie textuelle se fera sur un forum dédié, la partie plateau se fera dans une salle de jeu interactive.

# 2. Types d’utilisateurs
 Nous avons prévu cinq types d’utilisateurs. Le visiteur non enregistré, le membre, le modérateur, l’administrateur, et le super administrateur (ou développeur).

# 3. Fonctionnalités et technologies envisagées

A. Fonctionnalités générales
Nous créerons une page d’accueil qui présente le site et centralise les liens vers les différentes parties du site, des pages de CGU, A propos et Contact, une barre de navigation commune à toute les pages (à l’exception de la room) et une page de profil de l’utilisateur qui contient ses infos personnelles et sa fiche de personnage.

B. Codex
Notre projet doit donc contenir la création d’un codex qui regroupe les règles, l’histoire de l’univers et les règles du jeu de rôle. Certains textes écrits par les membres susceptibles de faire avancer l’intrigue principale seront sélectionnés et publiés par les administrateurs. Les articles seront triés par tags, de la même façon qu’un blog, et les utilisateurs inscrits pourront poster des commentaires.

C. Forum
La mise en place d’un forum servira de support pour le jeu de rôle textuel. Il permettra aux membres d’écrire leur fiche de personnage et d’écrire leurs aventures ensemble. D’autres membres pourront répondre au fil de discussion et faire vivre l’histoire. Il contiendra une multitudes de sujets triés en catégories et sous-catégories. Les sujets et réponses seront éditables grace a CKEditor, il y aura des groupes qui permettent de trier les utilisateurs par la classe de leur personnage.
Le contenu du forum sera entièrement modéré, un modérateur pourra supprimer, déplacer ou archiver des sujets ou réponses.

D. Room
La room servira de support de jeu de plateau. Elle y contiendra un plateau avec mini-carte ou fond d’écran interchangeable, un système de lancé de dés, une fiche de personnage modifiable directement connectée à la base de données du projet, un whiteboard interactif pour planifier une stratégie, un système de gestion de pions (création, suppression, personnalisation, déplacement en drag & drop).
Un chat sera présent également et permettra aux joueurs de communiquer entre eux par écrit. Les lancés de dés y seront affichés à la manière d’un log, qui peut changer lorsque le lancer est critique ou non.
Une barre d’action à droite du chat sera là pour pouvoir naviguer entre les onglets de lancer de dés, de fiche de personnage, ou d’aide, symbolisée par des points d'interrogations mis en évidence à plusieurs endroits de l’écran afin d’en expliquer le contenu.

Pour réaliser notre projet, nous utiliserons le framework Symfony pour la partie back-end du forum et du codex, twig et css pour le côté front. La room sera totalement gérée en JS, Le front en React/Sass, le back en Node.

E. Panneau d’administration
Le panneau d’administration sera disponible sur le menu de la page d’accueil, pour l’administrateur uniquement. Il y contiendra la liste de tous les utilisateurs inscrits, des articles et des tags du codex, des sujets et réponses du forum, ainsi que la liste des rooms. Tout ceci sera entièrement modifiable ou supprimable par l’administrateur.
