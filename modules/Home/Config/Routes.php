<?php
    namespace Home\Config;

    // Create a new instance of our RouteCollection class.
    $routes = \Config\Services::routes();
    $routes->add('home', 'Home\Controllers\Home');
    $routes->add('/', 'Home\Controllers\Home');
