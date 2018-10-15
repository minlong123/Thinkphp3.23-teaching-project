<?php
namespace Home\Controller;
use Think\Controller;
class EmptyController extends Controller {
    	public function index(){
    		$curren_name=CONTROLLER_NAME;
    		$this->errob($curren_name);
    	}
    	public function errob($name){
    		$this->error("该内容不存在",U('/'));
    	}
}