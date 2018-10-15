<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>账户密码修改</title>
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
      <a class="navbar-brand" href="/index.php/Admin/Index/index">网站后台</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/index.php/Admin/Index/index">首页</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">       
        <li class="dropdown">
          <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['user']?><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/index.php/Admin/Index/editperson/id/<?php echo $_SESSION['id']?>">修改账户密码</a></li>
          </ul>
        </li>

        <li><a href="/index.php/Admin/Login/logout">退出</a></li>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<section class="container-fluid mana-edit">
	<div class="row">
				<div class="col-lg-3">
			<ul class="list-group">

			  <?php if(session('jur') == '0'): ?><li class="list-group-item"><a href="/index.php/Admin/Admins/index">管理员管理</a></li><?php endif; ?>

			  <li class="list-group-item"><a href="/index.php/Admin/Category/index">导航管理</a></li>
			  <li class="list-group-item"><a href="/index.php/Admin/Cateart/index">文章管理</a></li>
			  <li class="list-group-item"><a href="/index.php/Admin/Mess/index">用户留言管理</a></li>
			  
			</ul>
		</div>

		<div class="col-lg-9">

			<div class="panel panel-default">
			  <div class="panel-heading">
				<ol class="breadcrumb">
				  <li class="active">管理员信息修改</li>
				</ol>
			  </div>
			  <div class="panel-body">
			   	   
				<form class="form-inline" method="post" action="/index.php/Admin/Index/editperson">
				  <div class="form-group">
				    <label for="exampleInputName2">用户名：</label>
				    <input type="text" class="form-control form-user" placeholder="填写您的用户名" name="user" value="<?php echo ($editres['user']); ?>">
				  </div>


				  <div class="form-group">
				    <label for="exampleInputEmail2">密码：</label>
				    <input type="password" class="form-control form-pwd" placeholder="未填默认不修改" name="pwd">
				    <input type="hidden" name="id" class="form-id" value="<?php echo ($editres['id']); ?>">
				  </div>


				  <button type="submit" class="btn btn-default edit-dmin">提交</button>
				  
				</form>


			  </div>
			</div>
		</div>
	</div>
</section>
	<script type="text/javascript" src="http://localhost:82/Application/Admin/public/js/jquery.min.js"></script>
	<script type="text/javascript" src="http://localhost:82/Application/Admin/public/js/bootstrap.js"></script>
</body>
</html>