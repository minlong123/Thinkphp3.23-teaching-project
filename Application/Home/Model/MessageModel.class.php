<?php
namespace Home\Model;
use Think\Model;
class MessageModel extends Model{
	protected $_validate=array(
		array('name','require','姓名不能为空','1','regex',1),
		array('tel','require','电话不能为空','1','regex',1),
		array('con','require','留言内容不能为空','1','regex',1),
	);
    protected $_map = array(
        'names' =>'name', 
        'telelph'  =>'tel', 
        'content'  =>'con', 
    );
}
	

?>