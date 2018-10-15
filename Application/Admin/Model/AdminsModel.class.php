<?php
namespace Admin\Model;
use Think\Model;
class AdminsModel extends Model{
	protected $_validate=array(

		array('user','',"该用户名已存在，请重新添加",0,'unique',1),
		array('pwd','require','密码格式不正确',2,'regex',1),
		


		array('user','require',"修改的管理员用户名不能为空",1,'regex',2),
		array('user','require',"该用户名已存在，请重新添加",1,'unique',2),
		array('pwd','require','密码格式不正确',2,'regex',2),
		// array('jur','require',"请选择至少一项权限",1,'regex',2),

		array("user",'require',"登录用户名不能为空",1,'regex',4),
		array("pwd",'require',"登录密码不能为空",1,'regex',4),
		array("verify",'check_verify',"验证码错误",1,'callback',4)
	);

	public function login(){
		$pwd=$this->pwd;
		$info=$this->where(array("user"=>$this->user))->find();
		if($info){
			if($info['pwd']==md5($pwd)){
				session('id',$info['id']);
				session('user',$info['user']);
				session('jur',$info['jur']);
				session('expire',time()+6000);
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}

	function check_verify($code, $id = ''){
	    $verify = new \Think\Verify();
	    return $verify->check($code, $id);
	}

}
	

?>