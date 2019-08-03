<?php
/**
 * @author Ramy Hakam
 * web/index.php
 * Application root
 */

require_once __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\HttpKernel;

/**
 * simple function to render templates
 * @param $request
 * @return Response
 */
function render_template($request)
{
    extract($request->attributes->all(), EXTR_SKIP);
    ob_start();
    include sprintf(__DIR__.'/../src/pages/%s.php', $_route);

    return new Response(ob_get_clean());
}



/**
 * create a new Request if it is not passed from other files like test
 * @var Request $request
 */
$request = $request? $request : Request::createFromGlobals();

/**
 * contain the routes list
 * @var  RouteCollection $routes
 */
$routes = include __DIR__ . '/../src/router.php';

$router =

/**
 * contain the Request info
 * @var  RequestContext $context
 */
$context = new RequestContext();

//get the context from the request
$context->fromRequest($request);

/**
 * match the request url with the router list
 * @var  UrlMatcher $matcher
 */
$matcher = new UrlMatcher($routes, $context);

/**
 * @var  HttpKernel\Controller\ControllerResolver $controllerResolver
 */
$controllerResolver = new HttpKernel\Controller\ControllerResolver();

/**
 * @var  HttpKernel\Controller\ArgumentResolver $argumentResolver
 */
$argumentResolver = new HttpKernel\Controller\ArgumentResolver();

try {

     //adding path data to the request
    $request->attributes->add($matcher->match($request->getPathInfo()));

    $controller = $controllerResolver->getController($request);

    $argument = $argumentResolver->getArguments($request, $controller);

     //create the response from route function
    $response= call_user_func($request->attributes->get('_controller'),$request);

}catch (Exception $exception){
    $response = new Response('not found',404);
}

//send the response
$response->send();