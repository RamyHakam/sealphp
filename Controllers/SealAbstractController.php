<?php


namespace Controller;

use App\Models\RouteNotValidException;
use App\Traits\RouteTrait;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
/**
 * The main controller for each SealPHP route controller
 * Class SealAbstractController
 * @package Controller
 */
abstract class SealAbstractController
{
    use RouteTrait;
    protected  $routeUrl;

    protected  $method;

    protected  $dataArray;
    /**
     * index
     * @param Request $request
     * @return Response
     */
    abstract function indexAction( Request $request ) :Response ;

    /**
     * @throws RouteNotValidException
     */
    protected  function  registerRoute(){
        $this->validateRoute();


    }

    /**
     * @return bool
     * @throws RouteNotValidException
     */
    protected  function  validateRoute(){
       if($this->assertRouteMethod() & $this->assertRouteURL()){
           return true;
           }
       throw new RouteNotValidException('Route Not valid please check route config',401);
    }

}