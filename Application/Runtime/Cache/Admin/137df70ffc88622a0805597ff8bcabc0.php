<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>添加导航</title>
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
        <li><a href="#">管理员</a></li>
        <li><a href="#">退出</a></li>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<section class="container-fluid mana-edit">
	<div class="row">
				<div class="col-lg-3">
			<ul class="list-group">
			  <li class="list-group-item"><a href="/index.php/Admin/Admin/index">管理员管理</a></li>
			  <li class="list-group-item"><a href="/index.php/Admin/Nav/index">导航管理</a></li>
			  <li class="list-group-item"><a href="/index.php/Admin/Article/index">文章管理</a></li>
			  <li class="list-group-item"><a href="/index.php/Admin/Mess/index">用户留言管理</a></li>
			  
			</ul>
		</div>

		<div class="col-lg-9">

			<div class="panel panel-default">
			  <div class="panel-heading">
				<ol class="breadcrumb">
				  <li><a href="/index.php/Admin/Nav/index">导航管理</a></li>
				  <li class="active">添加导航</li>
				</ol>
			  </div>
			  <div class="panel-body">
			   	

<form class="form-horizontal" method="post" action="/index.php/Admin/Nav/add">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-1 control-label">导航标题</label>
    <div class="col-sm-11">
      <input type="text" name="catename" class="form-control" id="inputEmail3" placeholder="输入您的导航名">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-1 control-label">分类</label>
    <div class="col-sm-11">
      <select class="form-control" name="pid">
        <option value="0">0(选0默认为一级导航)</option>
        
        <?php if(is_array($yijinav)): $i = 0; $__LIST__ = $yijinav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["catename"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>

      </select>
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-1 control-label">url</label>
    <div class="col-sm-11">
      <input type="text" name="url" class="form-control" id="inputEmail3" placeholder="该导航下如果还有子导航,无需设置url">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-1 control-label">排序</label>
    <div class="col-sm-11">
      <input type="text" name="orders" class="form-control" id="inputEmail3" placeholder="排序">
    </div>
  </div>
    <div class="form-group">
    <label for="inputEmail3" class="col-sm-1 control-label">导航类型</label>
    <div class="col-sm-11">
      <label class="radio-inline">
        <input type="radio" name="type" id="inlineRadio1" value="0">单页
      </label>
      <label class="radio-inline">
        <input type="radio" name="type" id="inlineRadio2" value="1">列表页
      </label>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-12">
      <button type="submit" class="btn btn-primary center-block">提交</button>
    </div>
  </div>
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