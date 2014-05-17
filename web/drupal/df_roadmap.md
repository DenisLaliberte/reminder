road map
- coding standard
  * psr3
- librairie undescorephp
    voir plus de fonciton à utiliser
    change array_push to Arrays::append(array, value)
-  librairie get-in
    inspiré de clojure, pratique dans le cas de drupal
    remplace : $baz = (isset($data['foo']['bar']['baz'])) ? $data['foo']['bar']['baz'] : "";
    par :      $baz = get_in($data, ['foo', 'bar', 'baz'],"");
    [igorw/get-in](https://github.com/igorw/get-in)
    [Functional Library: Traversal](https://igor.io/2014/01/08/functional-library-traversal.html)
- ajouter les informations pour les admins dans les listing
- dépendencies injection
  * pimple
  [Inversion of Control Containers and the Dependency Injection pattern](http://martinfowler.com/articles/injection.html)
- refactorer le decorateur txonomy term
- utiliser un stratégie pattern pour les décorateurs
- utiliser un datagenerator dans les tests
  [fzaninotto/Faker](https://github.com/fzaninotto/Faker)
- gestion des déploiement
- test d'intégration (drupal api)
  * tester les drupal adapters
  * voir s'il est possible de tester les drupaladapter depuis simpletest
  * voir si on ne devrais pas mieux bootstraper drupal depuis les tests phpspec
- déploiement de contenu
  * génération de contenu dans drupal
- test d'intégration 
  * évaluer Behat
  * évaluer le besoin de tester avec le ui (web scraper goutte)
  * setup créer une node
    - bootstraper drupal
    - voir le code disponible dans l'extension drupal de behat ou dans les simpletest
  * cleanup détruire la node (ou détruire la database)
- librairie : option 
    utiliser option pour éviter les null check
    inspiré de scalla
    [schmittjoh/php-option](https://github.com/schmittjoh/php-option)
    [Functional Library: Null](https://igor.io/2014/01/10/functional-library-null.html)
    voir aussi [try-type](https://github.com/asm89/php-try)
[filp/whoops](https://github.com/filp/whoops)
- documenter : phpdoc, sami
- importation de contenu
  * importation depuis csv
  * importation depuis fichier html
  * importation d'item de menu
  * importation de markdown
  * gestion des sources de copy deck, (word, google doc, csv, gather content)
  [PHPOffice/PHPWord](https://github.com/PHPOffice/PHPWord)
- gérer le projet en subtree
- voir autre librairie
  [brianium/phunc](https://github.com/brianium/phunc)
  [igorw/compose](https://github.com/igorw/compose)
  [pablodip/felpado](https://github.com/pablodip/felpado)
  [lstrojny/functional-php](https://github.com/lstrojny/functional-php)
- évaluer un framework pour la gestion des erreures
- function mocking
  *[lstrojny/phpunit-function-mocker](https://github.com/lstrojny/phpunit-function-mocker)
