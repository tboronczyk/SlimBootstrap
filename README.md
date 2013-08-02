# SlimBootstrap

Bootstrap for a basic PHP application using Slim, Pimple, Twig, and NotORM

 - Copy `config/config.php.example` to `config/config.php` and supply values
 - Routing defined in `routes` directory - files inherit `$app` (Slim instance) and `$c`
   (Pimple container) when included into `public/index.php`
 - Resources/services in Pimple DI container defined in `include/services.php`
 - `composer.json` instructs Composer to build classmap from `include/` and `lib/`
