<?php
namespace Home\Controller;
use Think\Controller;
class ExportController extends CommonController {
    public function export(){	
    	$cateid=I('cateid');
        if(empty($cateid)){
            $cateid=4;
        }
    	$cateart=D('Cateart');
    	$res=$cateart->where(array("cateid"=>$cateid))->select();
    	$this->assign("exportlist",$res);
    	$this->display();
    }

    public function export_article(){
		$cateart=D('Cateart');
		$cateid=I('cateid');
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