<?php


namespace App\Traits;


use App\Interfaces\RouteInterface;

Trait RouteTrait
{

    protected function assertRouteURL(): bool
    {
        return true;
    }

    protected function assertRouteMethod(): bool
    {
        switch ($this->method) {
            case RouteInterface::HTTP_POST:
            case RouteInterface::HTTP_GET:
                return true;
            default :
                return false;
                break;
        }
    }

}