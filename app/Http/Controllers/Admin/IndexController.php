<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
//IndexController 继承 Controller控制器，所有要引进继承的控制器

class IndexController extends Controller{
    public function index()
    {
     echo 'ddddddd';
//        return view('welcome');
        //
    }

    public function login()
    {
        session(['admin'=>'1']);
        return '登录';
    }


}