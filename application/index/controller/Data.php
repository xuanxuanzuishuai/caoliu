<?php
namespace app\index\controller;
use think\Db;
use think\Controller;
class Data extends Controller
{
	public function index()
	{
		$md5 = md5('123456');
		$time = time();
		Db::execute('insert into a_user (id, username,  password, create_time) values (?, ?, ?, ?)',[1, 'thinkphp', $md5, $time]);
	}


	public function select()
	{
		// $data = Db::table('a_user')->where('id', 1)->find();
		// dump($data);
		// $data = Db::name('user')->where(['id' => 1])->find();
		// dump($data);
		// $data = Db::name('user')->where('id=1')->find();
		// dump($data);
		// $data = Db::name('user')->where('id=1')->select();
		// dump($data);
		$data = Db::name('user')->where('id=1')->value('id');
		dump($data);
	}

	public function select1()
	{
		$data = db('user')->select();
		dump($data);
	}

	public function add()
	{
		//$result = Db::name('user')->insert(['username' => 'jiankun', 'password' => md5(654321), 'create_time' => time()]);
		dump(Db::name('user')->insertGetId(['username' => 'jiankun', 'password' => md5(654321), 'create_time' => time()]));
		if($result)
		{
			//$this->success('插入成功！');
		}else{
			//$this->error('写入失败！');
		}
	}

	public function sel()
	{
		// $data = Db::name('user')->where('username', 'like', '%i%')->select();
		// dump($data);

		$data = Db::name('user')->where('username', 'neq', 'jiankun')->select();
		// dump($data);
		// 
		//dump(Db::query("select * from a_user where username='thinkphp'"));


		Db::listen(function($sql, $time, $explain){
	// 记录SQL
	echo $sql. ' ['.$time.'s]';
// 查看性能分析结果
dump($explain);
});

	}

	// function dump($data)
	// {
	// 	echo '<pre>';
	// 	var_dump($data);
	// 	echo '</pre>';
	// }
}