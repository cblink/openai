<h1 align="center"> OpenAI REST API Client </h1>

OpenAI 应用 ChatGPT

## 安装

```shell
$ composer require cblink/openai -vvv
```

## 使用

```php

// 传入配置
$config = [
    // openai的apikey
    'api_key' => '',
    // 请求的初始配置
    'guzzle' => [
        // 代理配置，如果没有的话可以不传入,配置参考 https://docs.guzzlephp.org/en/stable/request-options.html#proxy
        'proxy' => [],
    ],
];

$openai = new Cblink\ChatGPT\OpenAI($config);

// 查询可用的模型
$openai->models->lists();

// 创建对话
$openai->chat->create([
    'model' => 'gpt-3.5-turbo',
    'messages' => [
        ['role' => 'user', 'content' => 'hello!'],
    ],
]);

// 创建图片
$openai->image->create([
    'prompt' => 'A cute baby sea otter',
]);


// 未封装的接口请求

// get 请求
$openai->httpGet('v1/files')

// post 请求 ，参数： 路径，请求参数，文件
$openai->httpPost('v1/files', [
    'purpose' => 'fine-tune',
], [
    // 此处传入路径即可
    'file' => '/path/file'
])

// delete请求
$file_id = 'file-XjGxS3KTG0uNmNOK362iJua3';
$openai->httpDelete(sprintf('v1/files/%s', $file_id))

```

## Contributing

You can contribute in one of three ways:

1. File bug reports using the [issue tracker](https://github.com/cblink/chatgpt/issues).
2. Answer questions or fix bugs on the [issue tracker](https://github.com/cblink/chatgpt/issues).
3. Contribute new features or update the wiki.

_The code contribution process is not very formal. You just need to make sure that you follow the PSR-0, PSR-1, and PSR-2 coding guidelines. Any new code contributions must be accompanied by unit tests where applicable._

## License

MIT