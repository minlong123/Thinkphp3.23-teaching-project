<?php
namespace Home\Model;
use Think\Model\ViewModel;
class CateartViewModel extends ViewModel{
	protected $viewFields = array(
		'Cateart'=>array('*','_type'=>'LEFT'),
		'Category'=>array('catename','url','_on'=>'Cateart.cateid=Category.id')
	);
}
?>