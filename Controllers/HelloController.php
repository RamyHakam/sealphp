<?php
/**
 * Auther:RamyHakam
 * Date: 8/3/19
 */

namespace  Controllers;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Handle hello request
 * Class HelloController
 * @package Controllers
 */
class HelloController
{

    public  function  index(Request $request){

        $name = $request->attributes->get('name');
        return new Response("hello {$name}");
    }
}