<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// Routes system
$routes = new RouteCollection();

$routes->add('/', new Route(constant('URL_SUBFOLDER') . '/', array('controller' => 'PageController', 'method'=>'indexAction'), array()));

$routes->add('solution', new Route(constant('URL_SUBFOLDER') . '/solution/{id}', array('controller' => 'SolutionController', 'method' => 'solution'), array('id' => '[0-9]+')));
