<?php

use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::plugin(
    'YourPluginName',
    ['path' => '/your-plugin-routes'],
    function (RouteBuilder $routes) {
        // Add custom routes here

        $routes->fallbacks(DashedRoute::class);
    }
);
