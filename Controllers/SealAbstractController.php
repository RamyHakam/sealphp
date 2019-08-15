<?php


namespace Controllers;

use App\Managers\RouteManager;
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

    protected  $routeManager;

    public function __construct()
    {
        $this->routeManager = new RouteManager();
    }


    /**
     * index
     * @param Request $request
     * @return Response
     */
    abstract function indexAction( Request $request ) :Response ;

    /**
     * @throws RouteNotValidException
     */
    abstract  function  registerRoute();

}