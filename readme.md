`Ce fichier me sert à me rapeler le role et l'organisation que j'ai addopter pour mes différents fichiers et dossiers. les fichiers et dossier ci nomer ne représente pas une liste exostives des fichier et dossiers présents.`
# Files

## .htaccess
C'est un fichier de configuartion d'apache.
Il va rediriger toutes nos requetes vers notre **Public/index.php**.

---
`File : .htacces`

---
## index
C'est la porte d'entrée de notre site.
Sont rôle est d'appeler le bon controller et luis fournir toute les donnés reçu en paramettres.

*Rooting, Autoload*

`File : public/index.php`

---

# Folders

## Public

On retrouve toute les ressources accessible publiquement au visiteurs du site.
- index.php
- CSS, JS, Images...

`Folder : public/`

---
## Assets
On place toutes les ressources utiles et accessible au visiteurs.
- css
- js
- images
- *Factures* 

*Je ne sais pas encore, si je vais le laisser ce dossiers dans le **dossier Public**.*

`Folder : public/Assets/`

---
## Contollers
On regroupe tous nos controllers.
On a une **interface générique** Controller.
cette interface donne la fonction Render(). cette méthode sera appeler par l'index pour afficher la page.
**Tous nos controller implemente Controller.**

`Folder : Controllers/`

---
## Models
On regroupe tous nos Models.
On a une **class générique** Model qui contient les methodes permetant d'intéragir avec les différentes donnés.
exemple :
- getAll() | recupere toute les donnés d'une table.
- get($id) | recupere une donée à l'indice $id
- etc...
Tous nos Models hirite de Model.

`Folder : Models/`

---
## Views
On regroupe toutes nos Vues.
Dans ce dossier on à toutes les classe nous permettant d'afficher du contenue.

`Folder : Views`

---

## ???
On regroupe toutes nos class.
qui peuvent être utiliser de projet en projet.
exemple : 
    - dataBase
    - mail
    - etc
Pour l'instant je n'ai pas d'idé pour le nom de ce dossier.
peut être *resources (english)*

`Folder : ???`

---
Voir aussi [MVC.md](MVC.md)

---
**L'organisation du projet pourrait évoluer comme ceci par la suite.**
- App
    - Controllers
    - Models
    - Views
        - Templates
    - ??? *(resources)*
- Public
    - Assets
        - Css
        - Js
        - Images
        - Bills | *factures*
    - *index.php* 
- Documentation
    - *MVC.md*
    - *wireframe.pdf*
    - ...
- *.htaccess*
- *.gitignore* -> on ignore le composer.lock et le dossier vendor
- *Composer.json*
- *Composer.lock*
- vendor
    - *autoload.php*
    - ...