<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected  $table="user";  // 设定User模型为user，中外差距，外国用户表不一定都是user
    protected  $primaryKey="uid";  //find()   设置主键为uid 默认为id
    public $timestamps = false;   //update更新数据，屏蔽默认的时间的字段
}
