<?php

namespace app\index\controller;
use think\View;
use think\Request;
class User
{
	public function login()
	{	

		$request = Request::instance();
		return $request->has('id');
		return $request->pathinfo();
		dump($request);
		$v = new View();
	
		return $v->fetch();
	}

	public function register($id, $name='jiankun')
	{
		dump($id);
		dump($name);
		return input('server.REMOTE_ADDR');
		return input('get.name');
		return input('param.id');
	}

	public function logout(Request $request)
	{
		return $request->param('id');
	}


}