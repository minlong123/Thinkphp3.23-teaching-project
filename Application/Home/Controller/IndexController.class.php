<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
        $case=D('Cateart');

        // 首页单独设置标题、关键词、描述
        $catego=D('Category');
        $cateids=1;
        $hometit=$catego->where(array("id"=>$cateids))->select();
        $this->assign('hometit',$hometit);



        // 首页客户案例
        $caselist=$case->where(array('cateid'=>18))->order("times desc")->select();
        $this->assign('caselist',$caselist);

        // 专家顾问案例
        $exports=$case->where(array('cateid'=>4))->order("times desc")->select();
        $this->assign('exportlist',$exports);

        // 新闻动态案例
        $newlist=$case->where(array('cateid'=>31))->order("times desc")->select();
        $this->assign('newlist',$newlist);
        $this->display();
    }
    public function msg(){
    	date_default_timezone_set('PRC');
    	$msg=D('Message');
    	if(IS_POST){
    		$data['names']=I('names');
    		$data['telelph']=I('telelph');
    		$data['content']=I('content');
			$data['times']=time();
	        import('ORG.Net.IpLocation');
			$data['address']=get_client_ip();
    		if($msg->create($data,1)){
    			if($msg->add()){
    				$this->success("留言成功,管理员会很快联系您！");
    			}else{
    				$this->error("留言失败");
    			}
    		}else{
    			$this->error($msg->getError());
    		}
    	}
    }





}