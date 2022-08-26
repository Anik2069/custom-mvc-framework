<?php

namespace App\Controllers;

use App\Models\Product;
use Symfony\Component\Routing\RouteCollection;

class PageController
{
    // Homepage action
    public function indexAction(RouteCollection $routes)
    {
        $routeToSolution1 = str_replace('{id}', 1, $routes->get('solution')->getPath());
        $routeToSolution2 = str_replace('{id}', 2, $routes->get('solution')->getPath());
        $routeToSolution3 = str_replace('{id}', 3, $routes->get('solution')->getPath());

        require_once APP_ROOT . '/views/home.php';
    }

}
