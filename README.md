# new-portfolio
Nouveau portfolio fait en laravel. Front pour le site vitrine et back avec authentification pour la gestion desprojets, compétences, média, ...

## Requirements
- PHP 7.1 minimum
- Extensions de PHP7 mbstrinng, intl, ...

    `apt install php7.0 libapache2-mod-php7.0 php7.0-mysql php7.0-curl php7.0-json php7.0-gd php7.0-mcrypt php7.0-msgpack php7.0-memcached php7.0-intl php7.0-sqlite3 php7.0-gmp php7.0-geoip php7.0-mbstring php7.0-xml php7.0-zip`
- php7.1-sqlite
- Composer

## Installation développement
1. Cloner le projet
2. Aller dans le dossier du projet
3. Faire un `composer install` pour installer tous les packages dont laravel
4. Créer fichier .env à la racine du projet à partir du fichier .env.example
5. Modifier la config de la database dans le fichier .env
```
DB_CONNECTION=sqlite
DB_DATABASE=database/data.sqlite
```
6 . Créer un fichier dans `database/data.sqlite`

7 . Lancer un serveur avec `php artisan serve`

8 . Lancer un `php artisan `