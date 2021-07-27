# Laravel

## Configutation du serveur
### Installation des paquets
```bash
sudo apt update
sudo apt -y install software-properties-common
sudo add-apt-repository ppa:ondrej/php
sudo apt-get update
sudo apt install php8.0
sudo apt install apache2 libapache2-mod-php8.0 mysql-server php8.0-mysql php8.0-mbstring php8.0-dom
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

## Exercices
### Exo 1
Reprendre notre système en intégrant un Controller qui fera la passerelle entre le web.php et les vues.