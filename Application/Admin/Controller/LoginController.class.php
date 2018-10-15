<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
    	$this->display();
    }
    public function logins(){
        date_default_timezone_set('PRC');
    	$admin=D('Admins');
        $data['lasttime']=time();
        import('ORG.Net.IpLocation');
        $data['lastaddress']=get_client_ip();
    	if(IS_POST){
    		if($admin->create($_POST,4)){
    			if($admin->login()){
                    // 登陆验证通过之后，存储登录的时间和IP地址
                    $admin->where(array('id'=>session('id')))->save($data);
    				$this->success("登录成功",U('Index/index'));
    			}else{
    				$this->error("您的用户名或者密码错误!");
    			}
    		}else{
    			$this->error($admin->getError());
    		}
    	}
    	return;
    	if(session("id")){
    		$this->redirect("Index/index");
    	}else{
    		 $this->display("index");
    	} 
    }

    public function logout(){
        session(null);
        $this->success("退出成功...",U('index'));
    }
    public function verify(){
    	$Verify =     new \Think\Verify();
		$Verify->fontSize = 30;
		$Verify->length   = 4;
		$Verify->useNoise = false;
		$Verify->entry();
    }


}