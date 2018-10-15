<?php
namespace Admin\Model;
use Think\Model\ViewModel;
class CateartViewModel extends ViewModel{
	protected $viewFields = array(
		'Cateart'=>array('*','_type'=>'LEFT'),
		'Category'=>array('catename','_on'=>'Cateart.cateid=Category.id')
	);
}
?>