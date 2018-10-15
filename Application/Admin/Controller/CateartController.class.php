<?php
namespace Admin\Controller;
use Think\Controller;
class CateartController extends CommonController {
    public function index(){
    	// 遍历出来只有type=1(列表页)的导航的id和name
    	$category=D('Category');
    	$catename=$category->field('id,catename')->where("type",1)->select();
    	$this->assign("catename",$catename);

    	$id=I('id');
    	$art=D('CateartView');
    	if(!empty($id)){
	        $count=$art->where(array("cateid"=>$id))->count();// 查询满足要求的总记录数
	        $Page= new \Think\Page($count,10);// 实例化分页类 
	        $Page->setConfig('prev','上一页');
	        $Page->setConfig('next','下一页');
	        $show= $Page->show();
	    	$adminlist=$art->where(array("cateid"=>$id))->order('times desc')->limit($Page->firstRow.','.$Page->listRows)->select();
	    	$this->assign("artlist",$adminlist);
	    	$this->assign('page',$show);
    	}else{
	        $count=$art->count();// 查询满足要求的总记录数
	        $Page= new \Think\Page($count,10);// 实例化分页类 
	        $Page->setConfig('prev','上一页');
	        $Page->setConfig('next','下一页');
	        $show= $Page->show();
	    	$adminlist=$art->order('times desc')->limit($Page->firstRow.','.$Page->listRows)->select();
	    	$this->assign("artlist",$adminlist);
	    	$this->assign('page',$show);
	    	
    	}
    	$this->display();

    }
    public function edit(){
    	$arts=D('Category');
    	$res=$arts->where('type=1')->select();
    	$this->assign('types',$res);
    	$art=D('Cateart');
    	$id=I('id');
    	$ress=$art->find($id);
    	$this->assign('artcon',$ress);
    	
    	if(IS_POST){
		    $data["lartitle"]=I('lartitle');
		    $data["shotitle"]=I('shotitle');
		    $data["cateid"]=I('cateid');
		    $data["descs"]=I('descs');
		    $data["browse"]=intval(I('browse'));
		    $data["con"]=I('con');
		    $data['id']=I('id');
		    if($art->create($data)){
			    $upload = new \Think\Upload();// 实例化上传类
			    $upload->maxSize   =     3145728 ;// 设置附件上传大小
			    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			    $upload->rootPath  =     './'; // 设置附件上传根目录
			    $upload->savePath  =     'Public/Uploads/'; // 设置附件上传（子）目录
			    $upload->autoSub = false;//不新建日期子目录保存图片
			    $upload->saveName = 'time';//使用时间戳命名
			    // 图片上传
	            $info=$upload->uploadOne($_FILES['pic']);
				if(!$info) {
					if($art->save()){
						$this->success("修改文章成功",U("index"));
					}else{
						$this->error("修改文章失败");
					}
	            }else{
			    	$pic=$ress['pic'];
			    	$larpic=$ress['larpic'];
			    	unlink('./'.$pic);
			    	unlink('./'.$larpic);
	                $data['pic']=$info['savepath'].$info['savename'];//保存大图
		            // 生成图片缩略图
		            $image = new \Think\Image();
		            $image->open('./'.$data['pic']);
		            $type = ".".$image->type();
		            $timestam=time()+1;
		            // 裁剪缩略图
		            $image->thumb(50,50,\Think\Image::IMAGE_THUMB_FILLED)->save('./'.$info['savepath'].$timestam.$type);
		            //保存缩略图
		            $data['larpic']=$info['savepath'].$timestam.$type;
		            // 大图右下角加水印
					$image->open('./'.$data['pic'])->text('www.我爱自学网教学.cn','./Public/Uploads/1.ttf',10,'#000000',\Think\Image::IMAGE_WATER_SOUTHEAST)->save('./'.$data['pic']); 
					// 缩略图右下角加水印
					$image->open('./'.$data['larpic'])->text('www.我爱自学网教学.cn','./Public/Uploads/1.ttf',2,'#000000',\Think\Image::IMAGE_WATER_SOUTHEAST)->save('./'.$info['savepath'].$timestam.$type);
					if($art->save($data)){
						$this->success("修改文章成功",U("index"));
					}else{
						$this->error("修改文章失败");
					}
	            }
		    }else{
		    	$this->error($art->getError());
		    }
		    return;

    	}
    	$this->display();
    }
    public function add(){
    	date_default_timezone_set('PRC');
    	$arts=D('Category');
    	$res=$arts->where('type=1')->select();
    	$this->assign('types',$res);
    	$art=D('Cateart');
    	if(IS_POST){
		    $data["lartitle"]=I('lartitle');
		    $data["shotitle"]=I('shotitle');
		    $data["cateid"]=I('cateid');
		    $data["descs"]=I('descs');
		    $data["browse"]=intval(I('browse'));
		    $data["con"]=I('con');
		    $data['times']=time();
		    if($art->create($data)){
			    // 在上方的数据验证成功之后，并做个判断，用户是否上传图片，再执行图片处理这一步
			    $upload = new \Think\Upload();// 实例化上传类
			    $upload->maxSize   =     3145728 ;// 设置附件上传大小
			    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			    $upload->rootPath  =     './'; // 设置附件上传根目录
			    $upload->savePath  =     'Public/Uploads/'; // 设置附件上传（子）目录
			    $upload->autoSub = false;//不新建日期子目录保存图片
			    $upload->saveName = 'time';//使用时间戳命名
			    // 图片上传
	            $info=$upload->uploadOne($_FILES['pic']);
	            if(!$info) {
	                $this->error($upload->getError());
	            }else{
	                $data['pic']=$info['savepath'].$info['savename'];//保存大图
		            // 生成图片缩略图
		            $image = new \Think\Image();
		            $image->open('./'.$data['pic']);
		            $type = ".".$image->type();
		            $timestam=time()+1;
		            // 裁剪缩略图
		            $image->thumb(50,50,\Think\Image::IMAGE_THUMB_FILLED)->save('./'.$info['savepath'].$timestam.$type);
		            //保存缩略图
		            $data['larpic']=$info['savepath'].$timestam.$type;
		            // 大图右下角加水印
					$image->open('./'.$data['pic'])->text('www.我爱自学网教学.cn','./Public/Uploads/1.ttf',10,'#000000',\Think\Image::IMAGE_WATER_SOUTHEAST)->save('./'.$data['pic']); 
					// 缩略图右下角加水印
					$image->open('./'.$data['larpic'])->text('www.我爱自学网教学.cn','./Public/Uploads/1.ttf',2,'#000000',\Think\Image::IMAGE_WATER_SOUTHEAST)->save('./'.$info['savepath'].$timestam.$type);
					if($art->add($data)){
						$this->success("添加文章成功",U("index"));
					}else{
						$this->error("添加文章失败");
					}
	            }
		    }else{
		    	$this->error($art->getError());
		    }
		    return;
    	}
    	$this->display();
    }
    // 通过http://localhost:82/index.php/Admin/Cateart/dele/id/6调试
    public function dele(){
    	$art=D('Cateart');
    	$id=I('id');
    	$res=$art->where(array("id"=>$id))->field('pic,larpic')->find();
    	$pic=$res['pic'];
    	$larpic=$res['larpic'];
    	$art->delete($id);
    	unlink('./'.$pic);
    	unlink('./'.$larpic);
    }
}