<?php

namespace Cblink\ChatGPT\Kernel;

class BaseApi extends \Cblink\Service\Foundation\BaseApi
{
    public function getBaseUrl()
    {
        return 'https://api.openai.com';
    }
}