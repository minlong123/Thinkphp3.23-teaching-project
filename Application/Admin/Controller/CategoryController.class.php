<?php
namespace Admin\Controller;
use Think\Controller;
class CategoryController extends CommonController {
    public function index(){
    	$nav=D('category');
    	$res=$nav->order('orders asc')->select();
    	$result=$this->sortA($res);
    	$this->assign("navlist",$result);
        $this->display();
    }


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

    public function add(){
    	$nav=D('category');
    	$res=$nav->where(array("pid"=>0))->select();
    	$this->assign("yijinav",$res);
    	if(IS_POST){
    		if($nav->create()){
    			if($nav->add()){
    				$this->success("添加导航成功",U('index'));
    			}else{
    				$this->error("添加导航失败",U('index'));
    			}
    		}else{
    			$this->error($nav->getError());
    		}
    		return;
    	}
    	$this->display();
    }

    public function dele(){
        $nav=D('category');
        $id=trim(I('id'));
        $nav->delete($id);
    }

    public function deleone(){
        $nav=D('category');
        $id=trim(I('id'));
        $nav->delete($id);
        $nav->where(array('pid'=>$id))->delete();
    }

    public function edit(){
        $nav=D('category');
        $res=$nav->find(I('id'));
        $this->assign("editlist",$res);
        $ress=$nav->where(array("pid"=>0))->select();
        $this->assign("yijinavs",$ress);
        

        if(IS_POST){
            $data['catename']=trim(I('catename'));
            $data['pid']=trim(I('pid'));
            $data['type']=trim(I('type'));
            $data['orders']=trim(I('orders'));
            $data['url']=trim(I('url'));
            $data['title']=trim(I('title'));
            $data['descc']=trim(I('descc'));
            $data['keywords']=trim(I('keywords'));
            if($nav->create($data,2)){
                if($nav->where(array(('id')=>I('id')))->save()){
                    $this->success("修改成功",U("index"));
                }else{
                    $this->error("修改失败");
                }
            }else{
                $this->error($nav->getError());
            }
            return;
        }

        $this->display();



    }


}