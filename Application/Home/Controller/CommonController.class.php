<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
    public function __construct(){
        parent::__construct();
    	$nav=D('category');
    	$res=$nav->order('orders asc')->select();

        //除首页单设外，其他页面的标题、描述、关键词设置,每个页面的url都会带上一个cateid。分类导航的id
        $id=I('cateid');
        $mets=$nav->where(array("id"=>$id))->field('title,keywords,descc')->find();
         //除首页单设外，其他页面的标题、描述、关键词设置

        // 处理查询出来的数据
    	$result=$this->sortA($res);
    	// print_r($result);
    	$this->assign("navlist",$result);

         //除首页单设外，其他页面的标题、描述、关键词设置
        $this->assign("metas",$mets);
    }


    // 对无限极分类数组进行处理
    public function sortA($data,$pid=0){
    	// 将数组id和字段id的值保持一致
    	$dat=array();
    	if(!empty($data)){
	    	foreach($data as $k=>$v){
	    		$dat[$v['id']]=$v;
	    	}
    	}
    	$arr=array();
    	foreach($dat as $v){
    		if($pid==$v['pid']){
    			$arr[]=&$dat[$v['id']];

    		}else if(isset($dat[$v['id']])){
    			$dat[$v['pid']]['items'][]=&$dat[$v['id']];
    		}
    	}
    	return $arr;
    }
}