<?php

namespace Cblink\ChatGPT\Image;


use Cblink\ChatGPT\Kernel\BaseApi;

class Client extends BaseApi
{

    /**
     * 创建图像
     * @see https://platform.openai.com/docs/api-reference/images/create
     *
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function create(array $data = [])
    {
        return $this->httpPost('v1/images/generations', $data);
    }


}