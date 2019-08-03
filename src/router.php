<?php
/**
 * Auther:RamyHakam
 * Date: 8/3/19
 */

use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();
$routes->add('hello', new Routing\Route('/hello/{name}',
    ['name' => 'World',
        '_controller' => function ($request) {
            return render_template($request);
        }]
));

$routes->add('newpage', new Routing\Route('/newpage/{page}',
    ['page' => 'test page',
        '_controller' => function ($request) {
            return render_template($request);
        }]
));

return $routes;

