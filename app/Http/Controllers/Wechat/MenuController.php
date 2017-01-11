<?php

namespace App\Http\Controllers\Wechat;
use App\Http\Controllers\Controller;

use EasyWeChat\Foundation\Application;
use Illuminate\Http\Request;

use App\Http\Requests;

class MenuController extends Controller
{
    public  $menu;

    public function __construct(Application $app)
    {
        $this -> menu = $app -> menu;
    }

    public function menu()
    {
        $buttons = [
            [
                "name"       => "泰管家",
                "sub_button" => [
                    [
                        "type" => "view",
                        "name" => "公司简介",
                        "url"  => "http://tgjcare.kuaizhan.com"
                    ],
                    [
                        "type" => "view",
                        "name" => "产品介绍",
                        "url"  => "http://mp.weixin.qq.com/mp/homepage?__biz=MzA3MjgwNTY1NA==&hid=4&sn=331002d57edf4a7fc3668075720e5116#wechat_redirect"
                    ],
                    [
                        "type" => "view",
                        "name" => "报告解读",
                        "url"  => ""
                    ],
                ],
            ],
            [
                "type" => "view",
                "name" => "健康频道",
                "url"  => "http://mp.weixin.qq.com/mp/homepage?__biz=MzA3MjgwNTY1NA==&hid=1&sn=1db41fdc64db25a104cb6a8cccecb493#wechat_redirect"
            ],
            [
                "type" => "view",
                "name" => "APP下载",
                "url"  => "http://www.tgjcare.com/xiazai-h5/"
            ],
        ];
        $this->menu->add($buttons);

    }
}
