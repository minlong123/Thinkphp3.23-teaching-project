<?php
namespace Home\Controller;
use Think\Controller;
class SmallController extends CommonController {
    public function small(){
    	$art=D('Cateart');
    	$weblists=$art->where(array("cateid"=>25))->order("times desc")->select();
    	$this->assign("weblists",$weblists);
    	$this->display();
    }
    public function mobile(){
    	$this->display();
    }
}