<?php
namespace app\controller;
use app\BaseController;
use app\model\Model;
use think\facade\Session;
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2021/5/2
 * Time: 13:26
 */
class Login extends BaseController
{
    public function login()
    {
        $username = input('name');
        $password = input('password');
        $group = input('group');
        if($username==''||$password =='')
           return json(['code' => '2001','msg' => '用户名或密码不能为空']);
          $model = new Model('user');
         $user = $model->getInfo(['name' =>$username]);
        if(!is_null($user)){
            if($user['password'] == $password) {
                $url  = '';
                switch($group){
                    case 1:
                        $url = '';
                    case 2;
                        $url = '';
                    case 3:
                        $url = '';
                }
                Session::set('isLogin',true);
                $data = ['url' => $url,'name' => $user['name'],'id' => $user['id']];
                return json(['code' => '2004','msg' => '登录成功','data' => $data]);
            }else{
                return json(['code' => '2003','msg' => '密码错误']);
            }
        }else{
            return json(['code' => '2002','msg' => '用户名不存在']);
        }

    }

    public function logoout()
    {

    }

}