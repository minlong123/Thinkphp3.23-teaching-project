<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
        $this->display();
    }

    // 修改登录管理员个人资料
    public function editperson(){
        $admin=D('Admins');
        $id=I("id");
        $res=$admin->find($id);
        $password=$res['pwd'];
        $this->assign("editres",$res);
        if(IS_POST){
           $data['user']=trim(I('user'));
           $data['pwd']=trim(I('pwd')) ? md5(trim(I('pwd'))) : $password;
           $data['id']=trim(I('id'));
           $res=$admin->create($data,2);
           if($res){
             if($admin->save()){
                    $this->success("修改成功,请重新登录");
                    session(null);
             }else{
                $this->error("请修改至少一项表单后再提交");
             }
           }else{
             $this->error($admin->getError());
           }
           return;
        }
        $this->display();
    }


    
}