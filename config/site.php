<?php

return [


    //路由相关配置
    'route' => [

        #路由域名绑定
        'domain' => [
            'frontend' => 'http://frontend.laraveldemo.dev/',
            'api'     =>  'http://api.laraveldemo.dev/',
            'backend'   =>  'http://backend.laraveldemo.dev/',
            'doc'     =>  'http://doc.laraveldemo.dev/',
        ],

        #路由前缀绑定
        'prefix' => [
            'frontend' => '',
            'api'     => 'api',
            'backend'   => 'backend',
            'doc'     => 'docs',
        ],

    ],

    //站点多语言设置
    'lang' => [
        'backend' => [
            'zh-CN',
            'en',
        ],
    ],

];
