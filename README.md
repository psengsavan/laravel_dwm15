# Laravel

## Documentation
Retrouvez de la doc utile sur :
- le site de [Laravel](https://laravel.com/docs/8.x)
- le site du [sillo](https://laravel.sillo.org/laravel-8/)

## Récupérer rapidement ce projet
```bash
git clone https://github.com/jperaudon/laravel_dwm15.git .
composer install
cp .env.example .env
php artisan migrate --seed
```

## Configutation du serveur

### Box Vagrant à utiliser
> ubuntu/bionic64

### Installation des paquets
```bash
sudo apt update
sudo apt -y install software-properties-common
sudo add-apt-repository ppa:ondrej/php
sudo apt-get update
sudo apt install php8.0
sudo apt install apache2 libapache2-mod-php8.0 mysql-server php8.0-mysql php8.0-mbstring php8.0-dom zip
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '756890a4488ce9024fc62c56153228907f1545c228516cbf63f885e036d37e9a59d27d63f46af1d4d07ee0f76181c7d3') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
sudo mv composer.phar /usr/local/bin/composer
git clone https://github.com/jperaudon/laravel_dwm15.git .
composer install
cp .env.example .env
```

### Activer les erreurs PHP
```bash
sudo apt /etc/php/8.0/apache2/php.ini
```

### Activer la ré-écriture d'URL
```bash
sudo a2enmod rewrite
```

Changer le DocumentRoot pour faire pointer le serveur sur le dossier __*public*__ :
```bash
sudo nano /etc/apache2/sites-available/000-default
```

Ajouter, dans ce même fichier, les lignes suivantes :
```
<Directory /var/www/html>
    Options Indexes FollowSymLinks MultiViews
    AllowOverride All
    Require all granted
</Directory>
```
Vous trouverez [ici](https://www.digitalocean.com/community/tutorials/how-to-rewrite-urls-with-mod_rewrite-for-apache-on-ubuntu-16-04) un site explicatif sur la question.

### Changer les permissions
Changer les ```www-data``` par ```vagrant``` dans le fichier :
```bash
sudo nano /etc/apache2/envvars
```

### Recharger apache2
```bash
sudo service apache2 restart
```

### Gérérer une clé
Si besoin, utiliser la commande suivante pour générer une nouvelle clé : 
```bash
php artisan key:generate
```

### Autoriser l'accès à Mysql depuis un outil tier
Utiliser le script interne de mysql :
```bash
sudo mysql_secure_installation
```
Lors de ce script, accepter de paramétrer le composant *VALIDATE PASSWORD* et suivre la procédure.  
Puis :
```bash
sudo mysql
```
```mysql
ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY '00000000';
FLUSH PRIVILEGES;
```

Retrouver toutes ces infos [ici](https://www.digitalocean.com/community/tutorials/how-to-install-mysql-on-ubuntu-20-04-fr).

## Exercices
### Exo 1
Reprendre notre système en intégrant un Controller qui fera la passerelle entre le web.php et les vues.

## Exo 2 : les migrations
Mettre en place une migration pour créer une table ```books```.
Cette table comprend :
- id
- title (string)
- author (string)
- publication_year (int)
- genre (string)
- synopsis (string)

## Exo 3 : seeder
Utliser les seeders pour intégrer 3 livres dans la base de donnée.

## Exo 4 : CRUD - Read
Nous allons maintenant essayé d'afficher la liste de tous les livres dans une nouvelle vue.
Ainsi, nous allons devoir créer :
- 1 Model
- 1 vue
- 1 route
- 1 méthode dans NavController
- Mettre à jour notre menu de navigation

## Exo 5 : CRUD - Create
Ainsi, pour accéder à un formulaire, nous allons devoir créer :
- 1 vue
- 1 route
- 1 méthode dans NavController
- Mettre à jour notre menu de navigation

Enregistrer le nouveau livre :
- 1 route
- 1 méthode dans ActionController

## Exo 6 : CRUD - Delete
On va maintenant mettre en place la suppression des livres.

## Exo 7 : Détails des livres
Lorsque l'on clique sur le titre d'un livre, on est dirigé sur un page avec les informations complètes dudit livre.

## Exo 8 : CRUD - Update
Enfin, il faut maintenant pouvoir modifier les livres existants !

## Exo 9 : clé étrangère
Nous allons maintenant distinguer les livres des auteurs et créer un nouvelle table ```authors```.
Les auteurs auront :
- ID
- Un nom

Pour l'exercice, nous partirons du principe que chaque livre n'est lié qu'à un seul auteur, mais que les auteurs peuvent avoir écris plusieurs livres.

Nous en profiterons aussi pour améliorer le front en ajouter un menu déroulant pour l'intégration de ces derniers.
Bien entendu, nous ajouterons aussi migration et seeder pour cette nouvelle table.