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
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/Admin/Index/index">网站后台</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/Admin/Index/index">首页</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">       
        <li class="dropdown">
          <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['user']?><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/Admin/Index/editperson/id/<?php echo $_SESSION['id']?>">修改账户密码</a></li>
          </ul>
        </li>

        <li><a href="/Admin/Login/logout">退出</a></li>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<section class="container-fluid">
	<div class="row">
				<div class="col-lg-3">
			<ul class="list-group">

			  <?php if(session('jur') == '0'): ?><li class="list-group-item"><a href="/Admin/Admins/index">管理员管理</a></li><?php endif; ?>

			  <li class="list-group-item"><a href="/Admin/Category/index">导航管理</a></li>
			  <li class="list-group-item"><a href="/Admin/Cateart/index">文章管理</a></li>
			  <li class="list-group-item"><a href="/Admin/Mess/index">用户留言管理</a></li>
			  
			</ul>
		</div>

		<div class="col-lg-9">
			<div class="panel panel-default">
			  <div class="panel-heading">欢迎您的到来</div>
			  <div class="panel-body">
			   	   &nbsp;&nbsp;&nbsp;&nbsp;本套课程是一个完备的企业网站前后台开发教程。将从前端静态页面的布局到后端Thinkphp框架的开发，由浅入深，适合不同阶段的学习人员进行进阶，本套教程分为三部分
第一部分静态页面只涉及到html+css布局。适合初步掌握了html和css标签的同学们进行学习和进阶，通过该部分的学习可以帮助同学们掌握布局的思想，面对各种复杂的页面设计图，都能应对自如。
 第二部分是给第一部分所讲的静态页面添加js效果、css3动画。适合掌握了基本的javascript语法和jquery的同学们进行学习，该部分将分为两个内容，先通过原生jquery框架实现页面的动态效果。然后再通过原生的javascript来实现页面的动态效果以及动画效果。然后就是页面的兼容问题，帮助大家能够兼容IE8/9及以上的IE浏览器及其他大部分主流浏览器厂商。
第三部分适合掌握了基本的php语法、mysql数据库的一般性增删改查的同学们进行学习，将在前面的基础上，通过thinkphp3.23框架和bootstrap框架从0搭建后台管理系统。帮助同学们迅速从一名刚刚入门的新手进入到实战工作环境中的开发。
			  </div>

			</div>
		</div>

	</div>
</section>


	<script type="text/javascript" src="http://localhost:82/Application/Admin/public/js/jquery.min.js"></script>
	<script type="text/javascript" src="http://localhost:82/Application/Admin/public/js/bootstrap.js"></script>
</body>
</html>