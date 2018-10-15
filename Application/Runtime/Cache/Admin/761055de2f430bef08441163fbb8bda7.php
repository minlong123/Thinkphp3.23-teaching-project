<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>修改文章</title>
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
				  <li><a href="/index.php/Admin/Article/index">文章管理</a></li>
				  <li class="active">修改文章</li>
				</ol>
			  </div>
			  <div class="panel-body">
			   	

<form class="form-horizontal">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-1 control-label">长标题</label>
    <div class="col-sm-11">
      <input type="text" class="form-control" id="inputEmail3" placeholder="输入您的长标题">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-1 control-label">短标题</label>
    <div class="col-sm-11">
      <input type="text" class="form-control" id="inputEmail3" placeholder="输入您的短标题">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-1 control-label">分类</label>
    <div class="col-sm-11">
      <select class="form-control">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-1 control-label">文章描述</label>
    <div class="col-sm-11">
      <input type="text" class="form-control" id="inputEmail3" placeholder="输入您对文章的描述">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-1 control-label">浏览次数</label>
    <div class="col-sm-11">
      <input type="text" class="form-control" id="inputEmail3" placeholder="自定义浏览人数">
    </div>
  </div>

   <div class="form-group">
    <label for="exampleInputFile" class="col-sm-1 control-label">上传图片</label>
    <div class="col-sm-11">
      <input type="file" id="exampleInputFile" class="form-control">
      <p>请上传380*240长宽的图片</p>
    </div>
  </div>

   <div class="form-group">
    <label for="exampleInputFile" class="col-sm-1 control-label">文章内容</label>
    <div class="col-sm-11">
      <textarea id="containers" style="height:500px;"></textarea>
    </div>
  </div>


  <div class="form-group">
    <div class="col-sm-12">
      <button type="submit" class="btn btn-primary center-block">发表</button>
    </div>
  </div>
</form>


			  </div>

			</div>




		</div>
	</div>
</section>
    <script type="text/javascript" src="http://localhost:82/Application/Admin/public/uedit/ueditor.config.js"></script>
    <script type="text/javascript" src="http://localhost:82/Application/Admin/public/uedit/ueditor.all.min.js"> </script>
    <script type="text/javascript" src="http://localhost:82/Application/Admin/public/uedit/lang/zh-cn/zh-cn.js"></script>
	<script type="text/javascript">
	     var ue = UE.getEditor('containers');
	</script>
	
	<script type="text/javascript" src="http://localhost:82/Application/Admin/public/js/jquery.min.js"></script>
	<script type="text/javascript" src="http://localhost:82/Application/Admin/public/js/bootstrap.js"></script>
</body>
</html>