<?php

namespace Cblink\ChatGPT;

use GuzzleHttp\Psr7;
use Cblink\ChatGPT\Kernel\AccessToken;
use Cblink\Service\Foundation\Container;

/**
 * @property AccessToken $access_token
 * @property Chat\Client $chat
 * @property Image\Client $image
 * @property Models\Client $models
 */
class OpenAI extends Container
{
    protected array $providers = [
        Kernel\ServiceProvider::class,
        Chat\ServiceProvider::class,
        Models\ServiceProvider::class,
        Image\ServiceProvider::class,
    ];

    /**
     * @param $url
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function httpGet($url, array $query = [])
    {
        return $this->base->httpGet($url, $query);
    }

    /**
     * @param $url
     * @param array $data
     * @param array $files
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function httpPost($url, array $data = [], array $files = [], array $query = [])
    {
        $multipart = [];

        foreach ($data as $key => $item) {
            $multipart[] = [
                'name'     => $key,
                'contents' => $item,
            ];
        }

        foreach ($files as $name => $file) {
            $multipart[] = [
                'name'     => $name,
                'contents' => Psr7\Utils::tryFopen($file, 'r'),
            ];
        }

        return $this->base->request('POST', $url, [
            'query' => $query,
            'multipart' => $multipart,
        ]);
    }

    /**
     * @param $url
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function httpDelete($url, array $query = [])
    {
        return $this->base->httpDelete($url, $query);
    }
}