<?php

namespace App\SealAPP\Routes\Models;

use App\SealAPP\Interfaces\RouteInterface;
use App\Traits\RouteTrait;
use Controller\SealAbstractController;

class Route implements RouteInterface
{
    use RouteTrait;
    private $routeURL;
    private $controller;
    private $dataArray;
    private $method;

    public function setRouteURL($url)
    {
        $this->routeURL = $url;
        return $this;
    }

    public function setRoutMethod($method)
    {
        $this->method = $method;
    }

    public function setRouteController(SealAbstractController $controller)
    {
        $this->controller = $controller;
        return $this;
    }

    public function setRouteRequestArray(array $data)
    {
        // TODO: Implement setRouteRequestArray() method.
        $this->dataArray = $data;
        return $this;
    }

    public function validateRoute(): bool
    {
        $this->assertRouteMethod()

    }

    public function registerRoute()
    {
        // TODO: Implement registerRoute() method.
        global
    }

}