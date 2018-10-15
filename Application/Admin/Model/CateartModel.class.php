<?php
namespace Admin\Model;
use Think\Model;
class CateartModel extends Model{
	protected $_validate=array(
		array('lartitle','require',"文章长标题不能为空",1,'regex',3),
		array('shotitle','require',"文章短标题不能为空",1,'regex',3),
		array('cateid','check_cateid',"请选择一个文章分类",1,'callback',3),
		array('descs','require',"文章描述不能为空",1,'regex',3),
		array('browse','check_isnumber',"浏览次数必须为一个数字",1,'callback',3),
		array('con','require',"文章内容不能为空",1,'regex',3),

	);
	protected function check_isnumber($data){
		if($data==0){
			return false;
		}else{
			return is_int($data);
		}
		
	}
	protected function check_cateid($data){
		return is_numeric($data);
	}
}
	

?>