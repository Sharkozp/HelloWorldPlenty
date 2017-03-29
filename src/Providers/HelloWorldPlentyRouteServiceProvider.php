<?php
/**
 * Created by PhpStorm.
 * User: oleksandr
 * Date: 29.03.17
 * Time: 17:53
 */

namespace HelloWorldPlenty\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

class HelloWorldPlentyRouteServiceProvider extends RouteServiceProvider
{
    public function map(Router $router)
    {
        $router->get('hello','HelloWorldPlenty\Controllers\ContentController@sayHello');
    }
}