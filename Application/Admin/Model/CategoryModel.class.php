<?php
namespace Admin\Model;
use Think\Model;
class CategoryModel extends Model{
	protected $_validate=array(
		array('catename','require',"导航名不能为空",1,'regex',3),
		array('catename','',"该导航名已存在",1,'unique',1),
		array('type','require',"导航类型不能为空",1,'regex',3),
		array('url','require',"",2,'regex',3),
		array('orders','require',"排序不能为空",1,'regex',3),
		array('title','require',"请换一个标题",2,'regex',3),
		array('descc','require',"请换一个描述",2,'regex',3),
		array('keywords','require',"请换一些关键词",2,'regex',3)
	);

}
	

?>