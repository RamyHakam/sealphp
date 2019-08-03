<?php
/**
 * @author Ramy Hakam
 * web/index.php
 * Application root
 */

require_once __DIR__ . '/../vendor/autoload.php';


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = $request? $request : Request::createFromGlobals();

$map = [
    '/hello' => 'helloWorld',
];

$path = $request->getPathInfo();
if (isset($map[$path])) {
    ob_start();
    extract($request->query->all(), EXTR_SKIP);
    include sprintf(__DIR__.'/../src/pages/%s.php', $map[$path]);
    $response= new Response(ob_get_clean());
} else {
     $response = new Response('Not Found',404);
}

$response->send();