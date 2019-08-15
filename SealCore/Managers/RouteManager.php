<?php
/**
 * Auther:RamyHakam
 * Date: 8/12/19
 */

namespace App\Managers;

use App\Interfaces\RouteInterface;
use Symfony\Component\Routing;

/**
 * Manage routes Register
 * Class RouteManager
 * @package App\Managers
 */
class RouteManager
{
    /**
     * @var Routing\RouteCollection
     */
    private $routes;

    public function __construct()
    {
        $this->routes = new Routing\RouteCollection();
    }

    public function addRoute(RouteInterface $route)
    {
        $routeTemp = $route->getRouteController();
        $this->routes->add($route->getRouteName(), new Routing\Route($route->getRouteURL(),
            ['name' => 'data',
                '_controller' => [new $routeTemp(), 'indexAction']]
        ));

        return $this;
    }

    /**
     * @return Routing\RouteCollection
     */
    public function getRoutes()
    {
        return $this->routes;
    }
}