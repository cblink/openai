<?php

namespace Cblink\ChatGPT\Models;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['models'] = function ($app) {
            return new Client($app);
        };
    }
}