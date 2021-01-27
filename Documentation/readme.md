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
- *.gitignore* -> on ignore le composer.lock/phar et le dossier vendor
- *Composer.json*
- *Composer.lock*
- *readme.md*
- vendor
    - *autoload.php*
    - ...

---
# installation
`composer install`
# Start
`php -S localhost:8000 -t Public/`
