<?php
namespace app\controller;
use app\BaseController;

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2021/5/2
 * Time: 13:05
 */
abstract class Base extends BaseController
{

    protected  $middleware = [
     // 'checkLogin'
    ];

}