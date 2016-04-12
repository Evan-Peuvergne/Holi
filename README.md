### Introduction
---
Ce projet est un web-documentaire sur la Holi, la fête des couleurs se déroulant en Inde.
Vous allez traverser ce magnifique festival à travers les yeux d’un touriste visitant la ville de Kanpur, de sa descente d’avion jusqu’au point final de la Holi dans le Gange. Vous allez rencontrer de manière immersive la culture indienne dans toute sa diversité ainsi que les rites et coutumes de l’hindouisme. De somptueuses ressources graphiques viendront appuyer votre découverte durant l’intégralité du web-documentaire.

### Equipe
---
Ce projet a été réalisé dans le cadre de la pédagogie d’HETIC par :
* Lucas Lemahieu - Rédactions et contenus
* Evan Peuvergne - Développement et design
* Tom Bonnike - Contenus et développement
* Rodolphe Grivet - Montage des ressources audios et vidéos
* Leslie Achour - Montage des ressources vidéos et design

### Technologies utilisées
---

* Langages: HTML5 / CSS3 / JavaScript
* Librairie: jQuery
* One page full Ajax

### Architecture
---
Modèle Vue Controlleur (MVC)

**Controllers**

* Objet App 	
    * Objet Home
    * Object Doc
        * Objet Chapter
        * Objet Personna
        *  Objet Annex

Les objets contrôlent généralement des objets enfants et rendent des comptes sous forme de callbacks aux objets parents.

**Models**

Les models sont représentés par des fichiers .json permettant de structurer les différents chapitres. Cette séparation et organisation permet une grande modularité du projet: ajouter ou modifier du contenu peut se faire en ne modifiant qu'un seul fichier.

**Views**

Plusieurs templates, le plus souvent statiques, sont appellées par les controlleurs avant d'être injectés dans l'application.
