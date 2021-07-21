# ECF - Part 4 - Projet blog - Thème Wordpress



Le but de cet exercice est de maîtriser la création d'un thème Wordpress de toute pièce.



## Cahier des charges



Vous devez créer un thème Wordpress qui affiche les type de page indiqués plus bas.



Attention : le thème doit impérativement être démarré de zéro, en ne se basant sur aucun framework.



## Livrables



Les fichiers doivent être livrées sous la forme d'un repository git en ligne sur un site comme github, gitlab ou autre.



Le repository doit contenir au minimum les fichiers suivants :



- un fichier `README.md` (voir ci-dessous)

- un fichier `functions.php`

- un fichier `style.css`

- un fichier `header.php` et un fichier `footer.php`

- un fichier `index.php`

- un fichier `single.php`

- un fichier `page.php`

- un fichier `404.php`



Le fichier `README.md` doit indiquer la procédure à suivre pour :



- si nécessaire, installer les dépendances (avec composer par exemple)

- si nécessaire, configurer le thème



## Prérequis



- MariaDB

- PHPMyAdmin

- PHP 7.x ou 8.x

- (optionnel) composer



## Les pages



### Entête



Un logo et le titre du blog qui doivent être des liens clickables qui pointent vers la page d'accueil.



### Pied de page



Pas d'informations particulières.



### La page d'accueil



Le fichier `index.php` fait office de page d'accueil.



Cette page doit afficher la liste des articles.

Voici les informations qui doivent figurer dans la liste :



- le titre de l'article, qui doit être un lien clickable qui pointe vers la page de l'article

- la date de publication de l'article

- la vignette de l'article



### La page d'article



Cette page doit afficher le contenu d'un article :



- le titre de l'article

- la date de publication de l'article

- la vignette de l'article

- le texte de l'article



### La page « page » (type contenu statique)



Cette page doit afficher le contenu d'une « page » (type de contenu statique) :



- le titre de l'article

- la vignette de l'article

- le texte de l'article



### La page 404



Cette page doit afficher un message d'erreur 404.