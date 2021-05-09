<?php 
namespace app\controller;
use think\facade\View;
use app\BaseController;

class Store extends BaseController
{
	public function middleware()
	{

	return View::fetch('middleware');
	}
}
 



 ?>