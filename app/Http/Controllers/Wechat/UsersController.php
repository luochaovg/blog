<?php

namespace App\Http\Controllers\Wechat;
use App\Http\Controllers\Controller;

use EasyWeChat\Foundation\Application;
use Illuminate\Http\Request;

use App\Http\Requests;

class UsersController extends Controller
{
    public $wechat;

    public function __construct(Application $wechat)
    {
        $this ->wechat = $wechat;
    }

    public function users()
    {
        $users = $this ->wechat->user->lists();
        return $users;
    }

    public function user($openId)
    {
        $user = $this ->wechat->user->get($openId);
        return $user;
    }

    public function remark()
    {
        $user = $this ->wechat->user->remark('openid','他是大神');
        return 'ok';
    }
}
