<?php

namespace App\Models;

use App\Interfaces\RouteInterface;
use App\Traits\RouteTrait;
use Controllers\SealAbstractController;

/**
 * Route object for routes mapping
 * Class Route
 * @package App\Models
 */
class Route implements RouteInterface
{
    use RouteTrait;
    private $routeURL;
    private $controller;
    private $dataArray;
    private $routeName;
    private $method;

    public function setRouteURL($url)
    {
        $this->routeURL = $url;
        return $this;
    }

    public function setRoutMethod($method)
    {
        $this->method = $method;
        return $this;
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
    public function setRouteName(string $name)
    {
        // TODO: Implement setRouteName() method.
        $this->routeName = $name;
        return $this;
    }

    public function getRouteURL()
    {
        // TODO: Implement getRouteURL() method.
        return $this->routeURL;
    }

    public function getRouteMethod()
    {
        // TODO: Implement getRouteMethod() method.
        return $this->method;
    }


    public function getRouteController() :SealAbstractController
    {
        // TODO: Implement getRouteController() method.
        return $this->controller;
    }
    public function getRouteName()
    {
        // TODO: Implement getRouteName() method.
        return $this->routeName;
    }


}