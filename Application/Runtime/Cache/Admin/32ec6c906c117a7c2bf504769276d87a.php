<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>网站后台</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="http://localhost:82/Application/Admin/public/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="http://localhost:82/Application/Admin/public/css/common.css">

<!--[if lt IE 9]>
  <script src="js/html5shiv.min.js"></script>
  <script src="js/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div class="jumbotron logins">
	<div class="container">
	  <h1 class="text-center">Hello, world!</h1>
		<form class="form-horizontal" method="post" action="/Admin/Login/logins">
		  <div class="form-group">
		    <label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
		    <div class="col-sm-10">
		      <input type="text" name="user" class="form-control" id="inputEmail3" placeholder="Username">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
		    <div class="col-sm-10">
		      <input type="password" name="pwd" class="form-control" id="inputPassword3" placeholder="Password">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputPassword3" class="col-sm-2 control-label">验证码</label>
		    <div class="col-sm-10">
		    	<div class="row" style="margin-right:0;">
		    		<div class="col-sm-10"><input type="text" name="verify" id="verify" size="15" class="form-control" id="inputPassword3" placeholder="Verification"></div>
		    		<div class="col-sm-2 verss">
		    			<img src="/Admin/Login/verify" style="width:100%;cursor:pointer;" onclick="this.src='/Admin/Login/verify'">
		    		</div>
		    	</div>
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="btn btn-default">登 录</button>
		    </div>
		  </div>
		</form>
	</div>
</div>
	<script type="text/javascript" src="http://localhost:82/Application/Admin/public/js/jquery.min.js"></script>
	<script type="text/javascript" src="http://localhost:82/Application/Admin/public/js/bootstrap.js"></script>
	<script type="text/javascript">
		$(function(){
			$(window).on('resize',function(){
				hie();
			})
			function hie(){
				$('.jumbotron').css("height",$(window).height());
			}
			hie();
		})
	</script>
</body>
</html>