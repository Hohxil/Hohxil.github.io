<?php
namespace app\controller;

use app\BaseController;
use app\model\User;
class Index extends BaseController
{
    public function index()
    {
        return '<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:) </h1><p> ThinkPHP V' . \think\facade\App::version() . '<br/><span style="font-size:30px;">14载初心不改 - 你值得信赖的PHP框架</span></p><span style="font-size:25px;">[ V6.0 版本由 <a href="https://www.yisu.com/" target="yisu">亿速云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=64890268" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="ee9b1aa918103c4fc"></think>';
    }

    public function hello($name = 'ThinkPHP6')
    {
        return 'hello,' . $name;
    }
    public function test()
    {
      $user = new User();
        $user->account = 'admin';
        $user->password = 'password';
        $user->status = '1';
        $user->save();
        echo 'success';
    }
    public function find()
    {
       // $name = $this->request->get('name');
        $username = input('name');
        $user = User::where('name',$username)->find();
     //   print_r($user);
        echo is_null($user->name);

    }
    public function tt(){
        $s = '';
        $ss = $this->request->get('ss');
        echo 'ss'.$ss;
        if( $ss === ''){
            echo 'succes';
        }
    }
}
