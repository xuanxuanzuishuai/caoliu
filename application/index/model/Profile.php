<?php
namespace app\index\model;
use think\Model;
class Profile extends Model
{
	public function avi()
	{
		return '666';
	}

	public function user()
	{
		return $this->belongsTo('User', 'user_id', 'id');
	}
}