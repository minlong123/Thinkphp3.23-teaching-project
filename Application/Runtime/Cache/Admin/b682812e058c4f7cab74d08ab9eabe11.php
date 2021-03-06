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
			  <li class="list-group-item"><a href="/index.php/Admin/Category/index">导航管理</a></li>
			  <li class="list-group-item"><a href="/index.php/Admin/Cateart/index">文章管理</a></li>
			  <li class="list-group-item"><a href="/index.php/Admin/Mess/index">用户留言管理</a></li>
			  
			</ul>
		</div>

		<div class="col-lg-9">

		 <div class="bs-example" data-example-id="table-within-panel">
		    <div class="panel panel-default">
		      <!-- Default panel contents -->
		      <div class="panel-heading">管理员管理</div>
		      <div class="panel-body">
		        <p>管理员增删板块</p>
		        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">添加管理员</a>
		      </div>

		      <!-- Table -->
		      <div class="table-responsive">
			      <table class="table table-bordered">
			        <thead>
			          <tr>
			            <th>#</th>
			            <th>用户名</th>
			            <th>上一次登录时间</th>
			            <th>上一次登录地址</th>
			            <th>操作</th>
			          </tr>
			        </thead>
			        <tbody>

			         <?php if(is_array($adminlist)): $i = 0; $__LIST__ = $adminlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
			            <th scope="row"><?php echo ($vo["id"]); ?></th>
			            <td><?php echo ($vo["user"]); ?></td>
			            <td><?php echo ($vo["lasttime"]); ?></td>
			            <td><?php echo ($vo["lastaddress"]); ?></td>
			            <td><a href="/index.php/Admin/Admin/edit/id/<?php echo ($vo["id"]); ?>" class="btn btn-warning">修改</a>&nbsp;<a href="javascript:void(0)" type="button" class="btn btn-danger" data-toggle="modal" onclick="deleadmin(<?php echo ($vo["id"]); ?>);">删除</a></td>
			          </tr><?php endforeach; endif; else: echo "" ;endif; ?>

			        </tbody>
			      </table>
		  	  </div>
		    </div>
		    <div class="pagination"><?php echo ($page); ?></div>
		  </div>

		</div>
	</div>
</section>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">增加新管理员</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="/index.php/Admin/Admin/add">
          <div class="form-group">
            <label for="recipient-name" class="control-label">用户名:</label>
            <input type="text" name="user" placeholder="输入用户名……" class="form-control" id="recipient-name">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="control-label">密码:</label>
            <input type="password" placeholder="不输入密码默认为123456" class="form-control" id="recipient-name" name="pwd">
          </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
	        <button type="submit" class="btn btn-primary">提交</button>
	      </div>
        </form>
      </div>
    </div>
  </div>
</div>


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
		function deleadmin(id){
			$('#gridSystemModal').modal("show");
			$('.detet').click(function(){
				$.post('/index.php/Admin/Admin/deteAdmin',{id:id},function(data,tip){
					if(tip=="success"){
						window.history.go(0);
					}
				})
			})
		}
	</script>
</body>
</html>