<?php

$router = new AltoRouter();

$router->setBasePath('');
$router->addMatchTypes([
    'code' => '[a-z0-9-]+',
    'transporteur' => '[a-z0-9-]+',
    'id' => '[0-9-]+',
]);

$router->map('GET', '/', ['controller' => 'HomeController', 'method' => 'index', 'title' => 'Accueil']);
