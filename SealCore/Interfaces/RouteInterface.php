<?php

namespace  App\SealAPP\Interfaces;

use Controller\SealAbstractController;

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
     * @return bool
     */
    public  function  validateRoute() :bool ;

    /**
     * @return mixed
     */
    public  function  registerRoute();
}