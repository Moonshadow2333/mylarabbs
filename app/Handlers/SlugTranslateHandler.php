<?php

namespace App\Handlers;

use GuzzleHttp\Client;
use Overtrue\Pinyin\Pinyin;

use Illuminate\Support\Str;

class SlugTranslateHandler{
    public function translate($text){
        // 实例化 http 客户端
        $http = new Client;

        // 初始化配置信息
        $api = 'http://api.fanyi.baidu.com/api/trans/vip/translate?';
        $appid = config('services.baidu_translate.appid');
        $key = config('services.baidu_translate.key');
        $salt = time();
        // 如果没有配置百度翻译，自动使用兼容的拼音方案
        if(empty($appid) || empty($key)){
            return $this->pinyin($text);
        }

        $sign = md5($appid.$text.$salt.$key);
        $query = http_build_query([
            'q' => $text,
            'from'=> 'zh',
            'to' => 'en',
            'appid' => $appid,
            'salt' => $salt,
            'sign' => $sign,
        ]);

        $response = $http->get($api.$query);
        $result = json_decode($response->getBody(),true);

        if(isset($result['trans_result'][0]['dst'])){
            return Str::slug($result['trans_result'][0]['dst']);
        }else{
            return $this->pinyin($text);
        }
    }

    public function pinyin($text){
        return Str::slug(app(Pinyin::class))->permalink($text);
    }
}
