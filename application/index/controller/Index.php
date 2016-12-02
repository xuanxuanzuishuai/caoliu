<?php
/**
 * 首页的控制器
 *
 * 使用tp的数据库操作方式的优先级：模型、数据库（Db）、Sql
 * getByXXX的时候注意：xxx要遵循驼峰命名法，对应的表字段下划线后面的首字符要大写，自动帮你转换，如：getByCreateTime 对应的字段create_time
 * phpstorm编辑器，ide编辑器，ide就是集成开发环境。
 */
namespace app\index\controller;
use think\Controller;
use app\index\model\User;
use app\index\model\Article;
class Index extends Controller
{
	/**
	 * 构造函数来用
	 * @return [type] [description]
	 */
	public function _initialize()
	{
		//echo '6666';
	}

	// protected $beforeActionList = [
	// 	'checkLogin' => 'show,fireOut'
	// ];

    public function index(User $user, Article $article)
    {
        //$user = new User();
        //dump($user->find(10)->profile->age);
        //dump($user->find(10)->profile->avi());

        //User::get(11)->profile()->save(['age' => 13, 'sex'  => 1]);
        //
        
        //$article->get(1)->comment()->saveAll([['user_id' => 11, 'content' => 'shuangji666'],['user_id' => 12, 'content' => 'okok']]);
        //dump(Article::get(1)->comment);
        $userInfo = User::get(11);
        dump(User::getLastSql());
        $this->assign('name', '贱坤');
        $this->assign('userInfo', $userInfo);
        return $this->fetch();
    	//return view();
    }

    public  function show()
    {
    	$this->assign('sex', '男');
        return $this->fetch();
    }

    public function say()
    {
    	return $this->fetch();

    	//return json_encode(['status' =>1, 'msg' => '', 'data' => $this->fetch('comment_list')]);
    }

    public function outPut()
    {
    	return ['a' => 'b', 'b' => 'c'];
    }

    public function fireOut()
    {
    	return '双击';
    }

    public function checkLogin()
    {
    	echo '点我';
    	return true;
    }

    public function login()
    {
        return $this->fetch();
    }

    public function doLogin()
    {
        
    }
}
