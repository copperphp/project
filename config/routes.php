<?php

use App\Controller\HomeController;

/**
 * Preconfigured Route Constants
 *
 * const ROUTE_index = 'index';
 * const ROUTE_get_copper_cp = 'get_copper_cp';
 * const ROUTE_copper_cp_action = 'copper_cp_action';
 */

return function ($routes) {

    // Default index page
    $routes->add(ROUTE_index, '/')
        ->controller([HomeController::class, 'getIndex'])
        ->methods(['GET']);

};