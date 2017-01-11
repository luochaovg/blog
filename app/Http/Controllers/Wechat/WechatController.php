<?php

namespace App\Http\Controllers\Wechat;
use App\Http\Controllers\Controller;
use EasyWeChat\Foundation\Application;

use EasyWeChat\Message\Voice;
use Log;
use Illuminate\Http\Request;

use App\Http\Requests;

class WechatController extends Controller
{

    /**
     * 处理微信的请求消息
     *
     * @return string
     */
    public function serve()
    {
        Log::info('request arrived.'); # 注意：Log 为 Laravel 组件，所以它记的日志去 Laravel 日志看，而不是 EasyWeChat 日志

        $wechat = app('wechat');

//        $message = $server->getMessage();
//        dd($message);
        $userApi  = $wechat -> user;
        $wechat->server->setMessageHandler(function($message) use ($userApi,$wechat){

            // $message->ToUserName // 改公众号id
            // $message->FromUserName // 用户的 openid
            // $message->CreatTime // 消息创建时间
            // $message->MsgType // 消息类型：event, text.

            switch ($message->MsgType) {
                case 'event':
                    # 事件消息..
                    if($message -> Event == 'subscribe'){
                        return '您好！欢迎来到泰管家！';
                    }
                    if($message -> Event == 'CLICK'){
                        if($message -> EventKey == 'YOU_CLICK_ME'){
                            return 'you click me';
                        }
                    }
                    break;
                case 'text':
                    # 文字消息...
                    return '你好！'. $userApi -> get($message -> FromUserName) -> nickname;
                    break;
                case 'image':
                    # 图片消息...
                    break;
                case 'voice':
                    # 语音消息...
                    break;
                case 'video':
                    # 视频消息...
                    $message = new Voice(['media_id' => 'dddddddddd.mp3']);
                    $wechat -> staff -> message($message) -> to($message -> FroUserName) -> send();
                    return 'enjoy';
                    break;
                case 'location':
                    # 坐标消息...
                    break;
                case 'link':
                    # 链接消息...
                    break;
                // ... 其它消息
                default:
                    # code...
                    break;
            }


            return "欢迎关注 overtrue！";
        });

        Log::info('return response.');

        return $wechat->server->serve();
    }
}
