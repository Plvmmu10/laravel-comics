## Inizializzazione Progetto Laravel

``` php
#Installare e creare una cartella con la struttura Laravel

composer create-project --prefer-dist laravel/laravel:^9.2 "Nome progetto"
```

``` php
#Una volta che sono all'interno della cartella "Nome progetto" apriamomola su VS

code . -r
```
``` php
#Ed impostiamo il preset

composer require pacificdev/laravel_9_preset   
```

``` php
#Installiamo Bootstrap

php artisan preset:ui bootstrap
```

``` php
npm install         


npm install --save @fortawesome/fontawesome-free  
```

_________________________________________
``` php
Inserire all'interno di vite.config.js su "alias"


-'~@fortawesome': path.resolve(__dirname, 'node_modules/@fortawesome'),
```
___________________________________________


_____________________________________
``` php
Verificare che ci sia all'interno di app.scss

"@use './partials/variables' as *;


$fa-font-path: "../fonts/webfonts" !default;

@import "~@fortawesome/fontawesome-free/scss/fontawesome";
@import "~@fortawesome/fontawesome-free/scss/regular";
@import "~@fortawesome/fontawesome-free/scss/solid";
@import "~@fortawesome/fontawesome-free/scss/brands";

@import '~bootstrap/scss/bootstrap';"
```
____________________________

### Server Vite 
-npm run dev

### Server Laravel
-php artisan serve
