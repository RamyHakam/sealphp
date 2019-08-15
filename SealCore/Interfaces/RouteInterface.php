<?php

namespace  App\Interfaces;

use Controllers\SealAbstractController;

/**
 * interface to create a new route
 * Interface RouteInterface
 */
Interface RouteInterface
{
    const HTTP_GET = "GET";
    const HTTP_POST = "POST";

    /**
     * @param string $url
     * @return mixed
     */
    public  function  setRouteURL( $url);

    /**
     * @param SealAbstractController $controller
     * @return mixed
     */
    public  function setRouteController(SealAbstractController $controller);

    /**
     * @param string $method
     * @return mixed
     */
    public  function setRoutMethod( $method);

    /**
     * @param array $data
     * @return mixed
     */
    public  function setRouteRequestArray(array  $data);

    /**
     * @param string $name
     * @return mixed
     */
    public  function  setRouteName(string $name);

    public  function getRouteURL();

    /**
     * @return SealAbstractController
     */
    public  function getRouteController() :SealAbstractController;
    public  function getRouteMethod();
    public  function getRouteName();
}