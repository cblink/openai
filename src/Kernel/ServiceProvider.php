<?php

namespace Cblink\ChatGPT\Kernel;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['access_token'] = function ($app){
            return new AccessToken($app);
        };
    }
}