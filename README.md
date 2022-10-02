# TP SINGLETON 

## Sujet

[Lien du sujet disponible depuis Notion](https://www.notion.so/foujols/TP-Heritage-Interface-63f10bef7944452a8975cb9c36a2e781)

## Pré-requis
Les prérequis pour ce tp sont :
- PHP 8
- PHP cli
- Mysql ou Mariadb

## importation des la base de donnée
Creer une base de donnée nommé "bddqcm".
Dans le dossier "sql", importer la fichier SQL dans votre base de donnée.
Puis changer les parametres du fichier "src/mysql.connector.php"
Les parametres à changer sont : 
- dsn
- login
- password

## Résultat
Le resultat va se faire dans la page index.php qui doit se trouver à la racine du dossier public.
Vous pouvez démarrer un serveur depuis la racine avec un terminal et la commande suivante :
```
php -S localhost:8042 -t public
```

## Documentation
- [PHP - Les classes et les objets](https://www.php.net/manual/fr/language.oop5.php)