<?php
namespace Admin\Controller;
use Think\Controller;
class MessController extends CommonController {
    public function index(){
    	$mes=D('Message');
        $count=$mes->count();// 查询满足要求的总记录数
        $Page= new \Think\Page($count,5);// 实例化分页类 
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $show= $Page->show();
    	$meslist=$mes->order('times desc')->limit($Page->firstRow.','.$Page->listRows)->select();
    	$this->assign("meslist",$meslist);
    	$this->assign('page',$show);
    	$this->display();
    }
    
    public function deleteMsg(){
    	$mes=D("Message");
    	$id=I("id");
    	$mes->delete($id);

    }
    public function deleteAllMsg(){
    	$mes=D("Message");
    	$mes->where("1")->delete();

    }
}