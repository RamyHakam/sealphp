<?php
/**
 * Auther:RamyHakam
 * Date: 8/3/19
 */

namespace Controllers;

use App\Models\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Handle hello request
 * Class HelloController
 * @package Controllers
 */
class HelloController extends SealAbstractController
{


    public function __construct()
    {
        parent::__construct();
    }

    public function indexAction(Request $request): Response
    {
        // TODO: Implement indexAction() method.
        $name = $request->attributes->get('name');
        return new Response("hello {$name}");
    }

    public function registerRoute()
    {
        $route = new Route();
        $route->setRouteController($this)
            ->setRouteURL('/hello/{name}')
            ->setRouteName('hello')
            ->setRoutMethod($route::HTTP_GET)
            ->setRouteRequestArray([]);
        $this->routeManager->addRoute($route);
        return $this->routeManager;
    }
}