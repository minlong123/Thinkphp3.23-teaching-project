<?php
namespace Home\Controller;
use Think\Controller;
class CasesController extends CommonController {
	 // 网站建设案例
    public function casess(){
    	$cateid=I('cateid');
        if(empty($cateid)){
            $cateid=18;
        }
    	$cateart=D('Cateart');
        $count=$cateart->where(array("cateid"=>$cateid))->count();// 查询满足要求的总记录数
        $Page= new \Think\Page($count,3);// 实例化分页类 
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $show= $Page->show();
    	$adminlist=$cateart->where(array("cateid"=>$cateid))->order('times desc')->limit($Page->firstRow.','.$Page->listRows)->select();
    	$this->assign("artlist",$adminlist);
    	$this->assign('page',$show);
    	$this->display();
    }

    // 小程序开发案例25
    public function casesss(){
    	$cateid=I('cateid');
        if(empty($cateid)){
            $cateid=25;
        }
    	$cateart=D('Cateart');
        $count=$cateart->where(array("cateid"=>$cateid))->count();// 查询满足要求的总记录数
        $Page= new \Think\Page($count,3);// 实例化分页类 
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $show= $Page->show();
    	$adminlist=$cateart->where(array("cateid"=>$cateid))->order('times desc')->limit($Page->firstRow.','.$Page->listRows)->select();
    	$this->assign("artlist",$adminlist);
    	$this->assign('page',$show);
    	$this->display();
    }

    // 电商运营案例26
    public function casessss(){
    	$cateid=I('cateid');
        if(empty($cateid)){
            $cateid=26;
        }
    	$cateart=D('Cateart');
        $count=$cateart->where(array("cateid"=>$cateid))->count();// 查询满足要求的总记录数
        $Page= new \Think\Page($count,3);// 实例化分页类 
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $show= $Page->show();
    	$adminlist=$cateart->where(array("cateid"=>$cateid))->order('times desc')->limit($Page->firstRow.','.$Page->listRows)->select();
    	$this->assign("artlist",$adminlist);
    	$this->assign('page',$show);
    	$this->display();
    }

    // 营销策划案例17
    public function casesssss(){
    	$cateid=I('cateid');
        if(empty($cateid)){
            $cateid=17;
        }
    	$cateart=D('Cateart');
        $count=$cateart->where(array("cateid"=>$cateid))->count();// 查询满足要求的总记录数
        $Page= new \Think\Page($count,3);// 实例化分页类 
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $show= $Page->show();
    	$adminlist=$cateart->where(array("cateid"=>$cateid))->order('times desc')->limit($Page->firstRow.','.$Page->listRows)->select();
    	$this->assign("artlist",$adminlist);
    	$this->assign('page',$show);
    	$this->display();
    }

    public function case_article(){
		$cateid=I('cateid');
    	$category=D('Category');
		$cateart=D('CateartView');
		$id=I('id');
    	$con=$cateart->where(array("id"=>$id))->select();
    	$exportlist=$cateart->order("times desc")->where(array("cateid"=>$cateid))->select();
    	$caselists=$cateart->order("times desc")->limit(0,6)->select();
    	$this->assign("cons",$con);
    	$this->assign("exportlist",$exportlist);
    	$this->assign("caselists",$caselists);
    	$this->display();
    }
}