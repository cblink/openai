<?php

namespace Cblink\ChatGPT\Kernel;

class AccessToken extends \Cblink\Service\Foundation\AccessToken
{
    public function getToken()
    {
        return $this->app['config']->get('api_key');
    }

}