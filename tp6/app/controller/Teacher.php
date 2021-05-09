<?php
namespace app\controller;
use app\controller\Base;
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2021/5/2
 * Time: 20:26
 */
class Teacher extends Base
{
    public function getInfo()
    {
        $userid = input('id');
       isset($userid) ? $userid : 0;
        $user = model('teacher')->getInfo(['id' => $userid]);
        return success(1,'获取数据成功',$user);
    }
    public function stuScore()
    {
        $sutid = input('id');
        isset($stuid) ? $sutid : 0;
        $stuList = model('score')->getList(['uid' => $stuid]);
        return success(1,'获取成绩成功',$stuList);
    }
    public function upselfInfo()
    {
        $param = $this->request->param();
        $teacid = $param['id'];
        isset($teacid) ? $teacid : 0;
        $res = model('teacher');
    }
    public function test()
    {
        $arr = ['name' => 'zhangsan','age' => 23,'sex'=> 'f'];
        unset($arr['sex']);
        var_dump($arr);
    }
}