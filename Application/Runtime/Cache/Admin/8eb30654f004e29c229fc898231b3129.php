<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>专家顾问管理</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="http://localhost:82/Application/Admin/public/css/bootstrap.css">
	<style type="text/css">
		
	</style>
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
      <a class="navbar-brand" href="#">网站后台</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">首页</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">       
        <li><a href="#">管理员</a></li>
        <li><a href="#">退出</a></li>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<section class="container-fluid">
	<div class="row">
				<div class="col-lg-3">
			<ul class="list-group">
			  <li class="list-group-item"><a href="/index.php/Admin/Admin/index">管理员管理</a></li>
			  <li class="list-group-item"><a href="#">导航管理</a></li>
			  <li class="list-group-item"><a href="/index.php/Admin/Export/index">文章管理</a></li>
			  <li class="list-group-item"><a href="/index.php/Admin/Mess/index">用户留言管理</a></li>
			  
			</ul>
		</div>

		<div class="col-lg-9">

		 <div class="bs-example" data-example-id="table-within-panel">
		    <div class="panel panel-default">
		      <!-- Default panel contents -->
		      <div class="panel-heading">专家顾问管理</div>
		      <div class="panel-body">
		        <p>专家顾问的文章增删板块</p>
		        <a href="/index.php/Admin/Export/add" class="btn btn-primary">添加专家</a>
		      </div>

		      <!-- Table -->
		      <div class="table-responsive">
			      <table class="table table-bordered">
			        <thead>
			          <tr>
			            <th>#</th>
			            <th>缩略图</th>
			            <th>长标题</th>
			            <th>短标题</th>
			            <th>文章描述</th>
			            <th>发表时间</th>
			            <th>查看更多</th>
			            <th>操作</th>
			          </tr>
			        </thead>
			        <tbody>

			          <tr>
			            <th scope="row">1</th>
			            <td>Mark</td>
			            <td>Otto</td>
			            <td>@mdo</td>
			            <td>Mark</td>
			            <td>Otto</td>
			            <td><a href="#" class="btn btn-info">查看更多</a></td>
			            <td><a href="/index.php/Admin/Export/edit" class="btn btn-warning">修改</a>&nbsp;<a href="#" type="button" class="btn btn-danger" data-toggle="modal" data-target="#gridSystemModal">删除</a></td>
			          </tr>

			          <tr>
			            <th scope="row">2</th>
			            <td>Jacob</td>
			            <td>Thornton</td>
			            <td>@fat</td>
			            <td>Mark</td>
			            <td>Otto</td>
			            <td><a href="#" class="btn btn-info">查看更多</a></td>
			            <td><a href="/index.php/Admin/Export/edit" class="btn btn-warning">修改</a>&nbsp;<a href="#" type="button" class="btn btn-danger" data-toggle="modal" data-target="#gridSystemModal">删除</a></td>
			          </tr>
			          <tr>
			            <th scope="row">3</th>
			            <td>Larry</td>
			            <td>the Bird</td>
			            <td>Mark</td>
			            <td>Otto</td>
			            <td>@mdo</td>
			            <td><a href="#" class="btn btn-info">查看更多</a></td>
			            <td><a href="/index.php/Admin/Export/edit" class="btn btn-warning">修改</a>&nbsp;<a href="#" type="button" class="btn btn-danger" data-toggle="modal" data-target="#gridSystemModal">删除</a></td>
			          </tr>
			        </tbody>
			      </table>
		  	  </div>
		    </div>
		  </div>

		</div>
	</div>
</section>

  
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" id="gridSystemModal">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridSystemModalLabel">信息框</h4>
      </div>
      <div class="modal-body">
        确认要删除吗？
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
        <button type="button" class="btn btn-primary">删除</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

	<script type="text/javascript" src="http://localhost:82/Application/Admin/public/js/jquery.min.js"></script>
	<script type="text/javascript" src="http://localhost:82/Application/Admin/public/js/bootstrap.js"></script>
</body>
</html>