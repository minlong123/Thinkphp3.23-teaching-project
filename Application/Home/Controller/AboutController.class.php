<?php
namespace Home\Controller;
use Think\Controller;
class AboutController extends CommonController {
    public function index(){
    	$this->display('about');
    }
    public function map(){
    	$this->display();
    }
}