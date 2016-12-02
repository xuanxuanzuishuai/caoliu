<?php
namespace app\index\model;

use think\Model;

class Article extends Model
{
	public function comment()
	{
		return $this->hasMany('Comment', 'article_id', 'id');
	}
}
