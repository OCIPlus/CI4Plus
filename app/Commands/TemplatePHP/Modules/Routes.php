<?php
    namespace ucfirst.{routeName}\Config;

    // Create a new instance of our RouteCollection class.
    $routes = \Config\Services::routes();
    $routes->add('strtolower.{routeName}', 'ucfirst.{routeName}\Controllers\ucfirst.{routeName}::index');