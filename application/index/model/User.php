<?php
/**
 * 定义一个user模型，对应的是user表
 */
namespace app\index\model;

use think\Model;
use think\Db;
use traits\model\SoftDelete;
class User extends Model
{
	use SoftDelete;
	protected static $deleteTime = 'delete_time';

	/**
	 * 与profile表一对一
	 * @return [type] [description]
	 */
	public function profile()
	{
		return $this->hasOne('Profile', 'user_id', 'id');
	}

	public function getStatusAttr($value)
	{
		$data = [-1=>'禁用',0=>'删除',1=>'正常',2=>'待审核'];
		return $data[$value];
	}


	public function avi()
	{
		return Db::name('user')->select();
	}
}