<?php
// 应用公共文件
use app\model\Model;
function model($table = '')
{
    return new Model($table);
}

function success($code= 0,$message = '',$data = '')
{
    $index = 1000;
    return json( [
        'code' => $code + $index,
        'msg' => $message,
        'data' => $data
    ]);
}
function data_md5($str)
{
    return '' === $str ? '' : md5(md5($str).'NiuCloud');
}
function error($code = -1,$message = '',$data = '',$error_code = '')
{
     $index = 1000;
    return [
        'code' => $code + $index,
        'message' => $message,
        'data' => $data,
        'error_code' => $error_code
    ];
}