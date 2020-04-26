# Invoice Project

## Description
Application de gestion de PME

## Prérequis

* PHP
* Composer
* Node JS
* Mysql

## Installation

Lancer un terminal et exécuter séquentielles ces commandes

```shell
git clone https://github.com/desmond8500/Invoice-Project.git
cd Invoice-Project
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan storage:link
php artisan migrate
```

 Il faudra ensuite configurer l'accès à une base de donnée dan le fichier `.env`.  

Dans ce fichier il faudra personnaliser les éléments repésentés ci dessous : 

```php
DB_DATABASE=invoice
DB_USERNAME=root
DB_PASSWORD=
```


## Utilisation

pour lancer le server :

```shell
npm run dev
php artisan serve
```


