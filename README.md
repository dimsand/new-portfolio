# new-portfolio
Nouveau portfolio fait en laravel. Front pour le site vitrine et back avec authentification pour la gestion desprojets, compétences, média, ...

## Requirements
- PHP 7.1 minimum
- Extensions de PHP7 mbstrinng, intl, ...

    `apt install --no-install-recommends php7.1 libapache2-mod-php7.1 php7.1-mysql php7.1-curl php7.1-json php7.1-gd php7.1-mcrypt php7.1-msgpack php7.1-memcached php7.1-intl php7.1-sqlite3 php7.1-gmp php7.1-geoip php7.1-mbstring php7.1-redis php7.1-xml php7.1-zip`
- `php7.1-sqlite`
- Composer

## Installation développement
1. Cloner le projet
2. Aller dans le dossier du projet
3. Faire un `composer install` pour installer tous les packages dont laravel
4. Créer fichier .env à la racine du projet à partir du fichier .env.example
5. Modifier la config de la database dans le fichier .env
```
DB_CONNECTION=sqlite
DB_DATABASE=database/database.sqlite
```
6 . Créer un fichier dans `database/data.sqlite`

7 . Lancer un serveur avec `php artisan serve`

8 . Lancer un `php artisan `


### Problèmes
- Installation PHP7.1 : https://tecadmin.net/install-php7-on-debian/
- https://www.noobunbox.net/serveur/auto-hebergement/installer-php-7-1-sous-debian-et-ubuntu/