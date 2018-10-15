<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller{
    public function __construct(){
        parent::__construct();
		if(!empty(session("expire"))){
            if(session("expire")<time()){
                session(null);
            }else{
//                刷新时间戳
                session("expire",time()+6000);
            }
        }
        //如果session("id")不存在的话，说明已经过期或退出了，就跳到登录页面
        if(!session('id')){
            $this->redirect('Login/index');
            // 否则就是还在登陆状态的时候进行判断权限等操作
        }else{
	        $url=CONTROLLER_NAME."-".ACTION_NAME;//获取当前用户访问的控制器和方法拼接为字符串
	        $index=CONTROLLER_NAME."-"."index";
	        // echo session('jur');

	        // 如果是超级管理员放过，有所有权限
	        if(session('jur')=="0"){
	        	// echo 2;
	        	return true;
	        }
	        // 放过所有主界面display("index")的界面，除了管理员管理界面
	        else if($url==$index){
	        	if(CONTROLLER_NAME=="Admins"){
	        		$this->error("非法访问");
	        	}else{
	        		// echo 4;
	        		return true;
	        	}
	        }
	        // 放过管理员修改个人帐号和密码设置
	        else if($url=="Index-editperson"){
	        	return true;
	        	// echo 5;
	        }
	        else{
	        	//如果当前的控制器-方法在session中,就放过，不在则报错
	        	if(strstr(session('jur'),$url)){
	        		return true;
	        		// echo 3;//你有权限
	        	}else{
	        		// print_r("你没有权限");
	        		$this->error("非法访问");
	        	}
	        } 
        }
    }
}

?>