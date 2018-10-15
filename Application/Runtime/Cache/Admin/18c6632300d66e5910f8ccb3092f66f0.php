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

		 <div class="bs-example" data-example-id="table-within-panel">
		    <div class="panel panel-default">
		      <!-- Default panel contents -->
		      <div class="panel-heading">用户留言管理</div>
		      <div class="panel-body">
		      	<?php if(session('jur') == '0' or strstr(session('jur'),'Mess-deleteAllMsg')): ?><a href="#" class="btn btn-danger deleteAll" data-toggle="modal">删除所有留言</a><?php endif; ?>
		      </div>

		      <!-- Table -->
		      <div class="table-responsive">
			      <table class="table table-bordered">
			        <thead>
			          <tr>
			            <th>id</th>
			            <th>留言姓名</th>
			            <th>留言电话</th>
			            <th>留言内容</th>
			            <th>留言时间</th>
			            <th>留言IP</th>
			            <th>操作</th>
			          </tr>
			        </thead>
			        <tbody>
			         <?php if(is_array($meslist)): $i = 0; $__LIST__ = $meslist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
			            <th><?php echo ($vo["id"]); ?></th>
			            <td><?php echo ($vo["name"]); ?></td>
			            <td><?php echo ($vo["tel"]); ?></td>
			            <td><?php echo ($vo["con"]); ?></td>
			            <td><?php echo (date("Y-m-d h:i:s",$vo["times"])); ?></td>
			            <td><?php echo ($vo["address"]); ?></td>

			            <td>
			            	<?php if(session('jur') == '0' or strstr(session('jur'),'Mess-deleteMsg')): ?><a href="#" type="button" class="btn btn-danger" data-toggle="modal" onclick="delemes(<?php echo ($vo["id"]); ?>);">删除</a><?php endif; ?>
			            </td>
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




<div class="modal fade" tabindex="-1" role="dialog" id="gridSystemModals">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridSystemModalLabel">信息框</h4>
      </div>
      <div class="modal-body">
        确认要删除所有留言吗？
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
        <button type="button" class="btn btn-primary deletal">删除</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

	<script type="text/javascript" src="http://localhost:82/Application/Admin/public/js/jquery.min.js"></script>
	<script type="text/javascript" src="http://localhost:82/Application/Admin/public/js/bootstrap.js"></script>
	<script type="text/javascript">
		function delemes(id){
			$('#gridSystemModal').modal("show");
			$('.detet').click(function(){
				$.post('/Admin/Mess/deleteMsg',{id:id},function(data,tip){
					if(tip=="success"){
						window.history.go(0);
					}
				})
			})
		}
		$(function(){
			$('.deleteAll').click(function(){
				$('#gridSystemModals').modal("show");
				$('.deletal').click(function(){
					$.post('/Admin/Mess/deleteAllMsg',function(data,tip){
						if(tip=="success"){
							window.history.go(0);
						}
					})
				})
			})
		})
	</script>
</body>
</html>