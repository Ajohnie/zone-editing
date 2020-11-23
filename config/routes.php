<?php

/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Http\Middleware\CsrfProtectionMiddleware;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

/**
 * The default class to use for all routes
 *
 * The following route classes are supplied with CakePHP and are appropriate
 * to set as the default:
 *
 * - Route
 * - InflectedRoute
 * - DashedRoute
 *
 * If no call is made to `Router::defaultRouteClass()`, the class used is
 * `Route` (`Cake\Routing\Route\Route`)
 *
 * Note that `Route` does not do any inflections on URLs which will result in
 * inconsistently cased URLs when used with `:plugin`, `:controller` and
 * `:action` markers.
 *
 * Cache: Routes are cached to improve performance, check the RoutingMiddleware
 * constructor in your `src/Application.php` file to change this behavior.
 *
 */
Router::defaultRouteClass(DashedRoute::class);

Router::scope('/', function (RouteBuilder $routes) {
    // Register scoped middleware for in scopes.
    $routes->registerMiddleware('csrf', new CsrfProtectionMiddleware(['httpOnly' => true]));
    $routes->applyMiddleware('csrf');
    $routes->connect('/', ['controller' => 'Pages', 'action' => 'display', 'home']);
    Router::scope('/pages', function (RouteBuilder $routes) {
        $routes->connect('/', ['controller' => 'Pages', 'action' => 'display', 'home']);
        
        $routes->connect('/about', ['controller' => 'Pages', 'action' => 'display','about']);
        $routes->connect('/who-we-are', ['controller' => 'Pages', 'action' => 'display','who-we-are']);
        $routes->connect('/our-mission', ['controller' => 'Pages', 'action' => 'display','our-mission']);
        $routes->connect('/our-vision', ['controller' => 'Pages', 'action' => 'display','our-vision']);
        $routes->connect('/our-objectives', ['controller' => 'Pages', 'action' => 'display','our-objectives']);
        $routes->connect('/our-goals', ['controller' => 'Pages', 'action' => 'display','our-goals']);
        $routes->connect('/our-policy', ['controller' => 'Pages', 'action' => 'display','our-policy']);
        
        $routes->connect('/blog', ['controller' => 'Pages', 'action' => 'display','blog']);
        
        $routes->connect('/join', ['controller' => 'Pages', 'action' => 'display','join']);
        $routes->connect('/project-background', ['controller' => 'Pages', 'action' => 'display','project-background']);
        $routes->connect('/project-justification', ['controller' => 'Pages', 'action' => 'display','project-justification']);
        $routes->connect('/project-outcomes', ['controller' => 'Pages', 'action' => 'display','project-outcomes']);
        $routes->connect('/project-partners', ['controller' => 'Pages', 'action' => 'display','project-partners']);
        
        $routes->connect('/projects', ['controller' => 'Pages', 'action' => 'display','projects']);
        $routes->connect('/water-and-sanitation', ['controller' => 'Pages', 'action' => 'display','water-and-sanitation']);
        $routes->connect('/fight-hiv-aids', ['controller' => 'Pages', 'action' => 'display','fight-hiv-aids']);
        $routes->connect('/malaria', ['controller' => 'Pages', 'action' => 'display','malaria']);
        $routes->connect('/community-development', ['controller' => 'Pages', 'action' => 'display','community-development']);
        
        $routes->connect('/contact', ['controller' => 'Pages', 'action' => 'display','contact']);
        $routes->connect('/gallery', ['controller' => 'Pages', 'action' => 'display','gallery']);
        $routes->connect('/contact', ['controller' => 'Pages', 'action' => 'contact']);
    });
   
    $routes->fallbacks(DashedRoute::class);
});

Router::scope('/messages', function (RouteBuilder $routes) {
    $routes->connect('/donate', ['controller' => 'Messages', 'action' => 'donate']);
    $routes->fallbacks(DashedRoute::class);
});

