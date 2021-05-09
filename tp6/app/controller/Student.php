<?php
namespace app\controller;

use app\controller\Base;
use app\model\Model;
use think\facade\Db;
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2021/5/2
 * Time: 12:57
 */
class Student extends Base
{

    public function index()
    {
        return 'index......';
    }
    public function getStudentGrade()
    {
        $userid = input('id');
        if(!empty($useid)){
            $model = new Model('score');
            $join =[['user u','u.id = score.uid','inner']];
            $data = $model->getList(['u.id'=> $userid],'a.*,u.*','','a',$join);
            return json($data);
        }
    }

    public function getUserInfo()
    {
        $userid = input('id');
        if (!empty($userid)) {
            $model = new Model('student');
            $user = $model->getInfo(['uid' => $userid]);
            return json($user);
        } else {

        }
    }
}
