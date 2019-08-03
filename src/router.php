<?php
/**
 * Auther:RamyHakam
 * Date: 8/3/19
 */

namespace App\Config;

use Controller\NewPageController;
use Controllers\HelloController;
use Symfony\Component\Routing;

include  __DIR__.'/../Controllers/HelloController.php';

$routes = new Routing\RouteCollection();

$routes->add('hello', new Routing\Route('/hello/{name}',
    ['name' => 'World',
        '_controller' => [new HelloController(),'index']]
));

$routes->add('newpage', new Routing\Route('/newpage/{page}',
    ['page' => 'test page',
        '_controller' => [new NewPageController(),'index']]
));

return $routes;

