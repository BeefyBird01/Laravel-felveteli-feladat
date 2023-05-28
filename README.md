# Laravel felvételi feladat
## Készítette Keszte Márton
### Indítás előtt futtatandó parancsok

```
composer install
npm install
php artisan key:generate
php artisan migrate
php artisan db:seed
(ha cégekkel is fel akarjuk tölteni: php artisan db:seed --class=CompanySeeder)
npm run dev
```
Ezeket futtatva a terminálon kiírásra kerül a belépéshez szükséges email cím és jelszó, de új felhasználót is regisztrálhatunk.
