<?php

namespace App\Handlers;

use GuzzleHttp\Client;
use Overtrue\Pinyin\Pinyin;

use Illuminate\Support\Str;

class SlugTranslateHandler
{
    // 初始化配置信息
    protected $http;
    protected $api;
    protected $appid;
    protected $key;
    protected $salt;
    public function __construct()
    {
        $this->http = new Client();
        $this->api = 'http://api.fanyi.baidu.com/api/trans/vip/translate?';
        $this->appid = config('services.baidu_translate.appid');
        $this->key = config('services.baidu_translate.key');
        $this->salt = time();
    }
    public function translate($text)
    {
        if (empty($this->appid) || empty($this->key)) {
            return $this->pinyin($text);
        }
        $query = http_build_query($this->RequestParameters($text, 'zh', 'en'));

        $response = $this->http->get($this->api.$query);
        $result = json_decode($response->getBody(), true);

        if (isset($result['trans_result'][0]['dst'])) {
            return Str::slug($result['trans_result'][0]['dst']);
        } else {
            return $this->pinyin($text);
        }
    }
    public function pinyin($text)
    {
        return Str::slug(app(Pinyin::class))->permalink($text);
    }
    public function RequestParameters($text, $from, $to)
    {
        return [
            'q' => $text,
            'from'=> $from,
            'to' => $to,
            'appid' => $this->appid,
            'salt' => $this->salt,
            'sign' => md5($this->appid.$text.$this->salt.$this->key),
        ];
    }
}
