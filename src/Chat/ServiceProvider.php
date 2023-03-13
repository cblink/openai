<?php

namespace Cblink\ChatGPT\Chat;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['chat'] = function ($app) {
            return new Client($app);
        };
    }
}