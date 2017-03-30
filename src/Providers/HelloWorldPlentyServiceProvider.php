<?php
/**
 * Created by PhpStorm.
 * User: oleksandr
 * Date: 29.03.17
 * Time: 17:34
 */

namespace HelloWorldPlenty\Providers;

use Plenty\Plugin\ServiceProvider;

class HelloWorldPlentyServiceProvider
{

    /**
     * Register the service provider.
     */

    public function register()
    {
        $this->getApplication()->register(HelloWorldPlentyRouteServiceProvider::class);
    }
}