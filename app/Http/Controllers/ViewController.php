<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ViewController extends Controller
{
    public function index(){
        $data = [
            'name' => 'luochao',
            'age' => '50',
            'num' => '10',
            'article' => [
                'new 1',
                'new 2',
                'new 3',
                'new 4',
                'new 5',
            ],
            'news' => array(),

        ];

        $title = 'law learn laravel X';
        $str = '<script>document.write("luochao ing")</script>';
//        $name = 'law';
//        $age = '25';
        return view('my_laravel',compact('data','title','str'));
    }

    public function view(){
        echo config('database.connections.mysql.prefix');
        echo 'ddd';
    }

    public function news(){

        return view('news');
    }

    public function article(){
        return view('article');
    }
    public function layouts(){
        return view('layouts');
    }

    
    

}
