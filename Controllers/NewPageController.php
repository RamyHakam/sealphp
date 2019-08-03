<?php
/**
 * Auther:RamyHakam
 * Date: 8/4/19
 */

namespace Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * new Custom Controller
 * Class NewPageController
 * @package Controller
 */
class NewPageController
{
    public  function  index(Request $request){

        $page = $request->attributes->get('page');
        return new Response("new page for {$page}");
    }

}