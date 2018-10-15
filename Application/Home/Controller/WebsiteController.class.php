<?php
namespace Home\Controller;
use Think\Controller;
class WebsiteController extends CommonController {
    public function website(){
    	$art=D('Cateart');
    	$weblists=$art->where(array("cateid"=>18))->order("times desc")->select();
    	$this->assign("weblists",$weblists);
    	$this->display();
    }
}