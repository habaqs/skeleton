# MVC *(Models Views Controllers)*
C'est un design pattern *(Organisation de code)* qui est à la base de beaucoup de Framework. 
Il a pour avantage de séparer la logique metier de l'affichage, rend le code plus simple à maintenir (il évite les répétiions), rend le code plus simple à faire évoluer

## Models
Le dossier models contiens tout les fichier qui intéragisent avec les données.

- CRUD (create Read Update Delete)
- Logique métier
- Validations, Conversions, Traitement... 

## Views *(vues)*
C'est dans ce dossier que l'on place le code nécessaire l'affichage des données.

- Retourne les données récupérer par le Model
- Le format peut varier (HTML, XML, JSon, PDF...)

## Controllers
Reçoit la requête et ce charge de fournir une reponse à l'aide des vue et des models.

## Assets *(publique)*
Dans ce dossier en retrouve tous ce qui est CSS,JS, images, videos, music... c'est les a coté du site.


## A savoir
**Index**
C'est la porte d'entrée de notre application.
Souvent c'est à lui qu'on attribue le rôle de routeur.

**Routeur**
C'est un objets qui fait le lien entre l'url et les controlleurs.
il appelle les controlleurs et vérifie les autorisations.

**Autoload**
s'occupe des `includes` et c'est lui qui appelera les classes.

---
**Vidéos qui mon aider à comprendre ce design pattern**
- **Smaine Milianni** : [MVC explication et démonstration (PHP)](https://www.youtube.com/watch?v=TfH3tcTVwfY) : `Buffer`?
- **Sandy Razafitrimo** : [Intégrer le MVC en PHP](https://www.youtube.com/playlist?list=PLCg7bb2BzkP3BjEkpMw7_ppGgDcc73oS
---