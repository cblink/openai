<?php

namespace Cblink\ChatGPT\Models;


use Cblink\ChatGPT\Kernel\BaseApi;

class Client extends BaseApi
{

    /**
     * 列出模型
     * 列出当前可用的模型，并提供有关每个模型的基本信息，例如所有者和可用性。
     * @see https://platform.openai.com/docs/api-reference/models/list
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function lists(array $query = [])
    {
        return $this->httpGet('v1/models', $query);
    }

    /**
     * 检索模型
     * 检索模型实例，提供有关模型的基本信息，例如所有者和权限。
     * @see https://platform.openai.com/docs/api-reference/models/retrieve
     *
     * @param $model
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function show($model)
    {
        return $this->httpGet(sprintf('v1/models/%s', $model));
    }
}