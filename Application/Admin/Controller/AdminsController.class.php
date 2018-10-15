<?php
namespace Admin\Controller;
use Think\Controller;
class AdminsController extends CommonController {
    public function index(){
        $aity=D('Authority');
        $cons=$aity->select();
        $this->assign("aitylist",$cons);

    	$admin=D('Admins');
        $count=$admin->count();// 查询满足要求的总记录数
        $Page= new \Think\Page($count,5);// 实例化分页类 
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $show= $Page->show();
    	$adminlist=$admin->limit($Page->firstRow.','.$Page->listRows)->select();
    	$this->assign("adminlist",$adminlist);
    	$this->assign('page',$show);
    	$this->display();
    }

    public function edit(){
        $aity=D('Authority');
        $cons=$aity->select();
        $this->assign("aitylist",$cons);
        $admin=D('Admins');
        $id=I("id");
        $res=$admin->find($id);
        $password=$res['pwd'];
        $this->assign("editres",$res);
        if(IS_POST){
           $data['user']=trim(I('user'));
           $data['pwd']=trim(I('pwd')) ? md5(trim(I('pwd'))) : $password;
           $data['id']=trim(I('id'));
           $data['jur']=I('jur');
           $res=$admin->create($data,2);
           if($res){
             if($admin->save()){
                    $this->success("修改成功");
             }else{
                $this->error("请修改至少一项表单再提交");
             }
           }else{
             $this->error($admin->getError());
           }
           return;
        }
        $this->display();
    }
    public function deteAdmin(){
        $admin=D('Admins');
        $id=intval(I("id"));
        $admin->delete($id);

    }


    public function add(){
        header("Content-Type:text/html; charset=utf-8");
        $aity=D('Authority');
        $cons=$aity->select();
        $this->assign("aitylist",$cons);
        $admin=D('Admins');
        if(IS_AJAX){
            $data['user']=I('user');
            $data['pwd']=I('pwd') ? I('pwd'):md5("123456");
            $jurs=implode(",",I('jur'));
            if(!$admin->create($data,1)){
                $this->error($admin->getError());
            }else{
                $data['jur']=$jurs;
                if($admin->add($data)){
                    $this->success("添加成功");
                }else{
                    $this->error("添加失败");
                }
            }
            return;

        } 
        $this->display();
    }
}