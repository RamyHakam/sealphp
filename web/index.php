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

try {
//import the list variables from the matcher result
    extract($matcher->match($request->getPathInfo()), EXTR_SKIP);

//start internal buffering
    ob_start();

//get the routing file
    include sprintf(__DIR__ . '/../src/pages/%s.php', $_route);

//create the response form buffering data
    $response = new Response(ob_get_clean());

}catch (Exception $exception){
    $response = new Response('not found',404);
}

//send the response
$response->send();