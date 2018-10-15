<?php
namespace Home\Controller;
use Think\Controller;
class ActiveController extends CommonController {
    public function index(){
    	$this->display('active');
    }
}