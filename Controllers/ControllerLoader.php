<?php
/**
 * Auther:RamyHakam
 * Date: 8/12/19
 */

namespace Controllers;


use App\Managers\RouteManager;

/**
 * Class to load controllers and create routes list
 * Class ControllerLoader
 * @package Controllers
 */
class ControllerLoader
{
    /**
     * list of controllers
     * @var array
     */
    private  $Controllers;
    /**
     * Route Manager to register routes
     * @var RouteManager
     */
    private  $routeManager;

    public function __construct()
    {
        $this->Controllers=[
            '\Controllers\HelloController'];
        $this->routeManager = new RouteManager();
    }




    final  public  function  loader(){
     foreach ($this->Controllers as $controller){
         $class = $controller;
         /**
          * @var $class SealAbstractController
          */
         $class =new $class();
         $this->routeManager=$class->registerRoute();
     }
     return $this->routeManager->getRoutes();


}

}