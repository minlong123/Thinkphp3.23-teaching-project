<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>导航管理</title>
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
<section class="container-fluid">
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

		 <div class="bs-example" data-example-id="table-within-panel">
		    <div class="panel panel-default">
		      <!-- Default panel contents -->
		      <div class="panel-heading">导航管理界面</div>
		      <div class="panel-body">
		        <p>可增加修改删除导航</p>
		        <a href="/index.php/Admin/Nav/add" class="btn btn-primary">添加导航</a>
		      </div>


		      	<div class="container nav-mess">



		      		<?php if(is_array($navlist)): foreach($navlist as $key=>$vo): ?><div class="panel-group" role="tablist">
					    <div class="panel panel-default">
					      <div class="panel-heading" id="collapseListGroupHeading">
					        <h4 class="panel-title">
					          <a class="collapsed" role="button" data-toggle="collapse" href="#collapseListGroup<?php echo ($vo['id']); ?>">
					            <?php echo ($vo['catename']); ?>
					          </a>
					          <button class="btn" style="visibility:hidden;">&nbsp;</button>
					          <a href="/index.php/Admin/Nav/edit/id/<?php echo ($vo['id']); ?>" class="btn btn-warning edit-nav">修改</a>
					          <a href="javascript:void(0)" class="btn btn-danger delte-nav" data-toggle="modal" onclick="nav.deleone(<?php echo ($vo['id']); ?>)">删除</a>
					        </h4>
					      </div>

					      <?php if(isset($vo['items'])): ?><div id="collapseListGroup<?php echo ($vo['id']); ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseListGroupHeading1">
						        <ul class="list-group">

						          <?php if(is_array($vo['items'])): foreach($vo['items'] as $key=>$voo): ?><li class="list-group-item">
						          	<button class="btn" style="visibility:hidden;">&nbsp;</button>
						          	<a href="javascript:void(0)"><?php echo ($voo['catename']); ?></a>				          
						          	<a href="/index.php/Admin/Nav/edit/id/<?php echo ($voo['id']); ?>" class="btn btn-warning edit-nav">修改</a>
						          	<a href="javascript:void(0)" class="btn btn-danger delte-nav" data-toggle="modal" onclick="nav.delenav(<?php echo ($voo['id']); ?>)">删除</a>
						      	  </li><?php endforeach; endif; ?>

						        </ul>
						      </div><?php endif; ?>

					    </div>
				  	</div><?php endforeach; endif; ?>
		      	</div>
		    </div>
		  </div>

		</div>
	</div>
</section>

<div class="modal fade" tabindex="-1" role="dialog" id="gridSystemModal">
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
        <button type="button" class="btn btn-primary detet">删除</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" tabindex="-1" role="dialog" id="gridSystemModalss">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridSystemModalLabel">警告</h4>
      </div>
      <div class="modal-body">
        如果删除一级导航，将删除一级导航下所有子导航,您可以选择修改或新增一个导航再删除更安全?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
        <button type="button" class="btn btn-danger detett">删除</button>
      </div>
    </div>
  </div>
</div>

	<script type="text/javascript" src="http://localhost:82/Application/Admin/public/js/jquery.min.js"></script>
	<script type="text/javascript" src="http://localhost:82/Application/Admin/public/js/bootstrap.js"></script>
	<script type="text/javascript">
		var nav={};
		nav.delenav=function(id){
		  $('#gridSystemModal').modal("show");
		  $('.detet').click(function(){
		  	 $.post("/index.php/Admin/Nav/dele",{id:id},function(res,tip){
		  	 	if(tip=="success"){
		  	 		window.history.go(0);
		  	 	}
		  	 })
		  })
		}


		// 删除一级导航
		nav.deleone=function(id){
		  $('#gridSystemModal').modal("show");
		  $('.detet').click(function(){
		  	$('#gridSystemModalss').modal("show");
		  	$('#gridSystemModal').modal("hide");
		  	$('.detett').click(function(){
			  	$.post("/index.php/Admin/Nav/deleone",{id:id},function(res,tip){
			  	 if(tip=="success"){
			  	 	window.history.go(0);
			  	 }
			  	})

		  	})
		  })
		}


	</script>
</body>
</html>