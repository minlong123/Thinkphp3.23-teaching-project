<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>专家顾问管理</title>
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
<section class="container-fluid art-conss">
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
		      <div class="panel-heading">所有文章管理界面</div>
		      <div class="panel-body nav-lists">
		        <p>默认显示最近所有文章</p>

		        <?php if(is_array($catename)): $i = 0; $__LIST__ = $catename;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="/Admin/Cateart/index/id/<?php echo ($vo["id"]); ?>" class="btn btn-primary"><?php echo ($vo["catename"]); ?>文章管理</a>&nbsp;&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>

		        <a href="/Admin/Cateart/index" class="btn btn-success">最近所有文章</a>

		        <?php if(session('jur') == '0' or strstr(session('jur'),'Cateart-add')): ?><a href="/Admin/Cateart/add" class="btn btn-warning">添加文章</a><?php endif; ?>

		      </div>

		      <!-- Table -->
		      <div class="table-responsive">
			      <table class="table table-bordered">
			        <thead>
			          <tr>
			            <th>#</th>
			            <th>分类</th>
			            <th>缩略图</th>
			            <th>长标题</th>
			            <th>短标题</th>
			            <th>文章描述</th>
			            <th>发表时间</th>
			            <th>浏览人数</th>
			            <th>查看更多</th>
			            <th>操作</th>
			          </tr>
			        </thead>
			        <tbody>
			          <?php if(is_array($artlist)): $i = 0; $__LIST__ = $artlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
			            <td scope="row"><?php echo ($vo["id"]); ?></td>
			            <td><?php echo ($vo["catename"]); ?></td>
			            <td><img src="/<?php echo ($vo["larpic"]); ?>" /></td>
			            <td><?php echo ($vo["lartitle"]); ?></td>
			            <td><?php echo ($vo["shotitle"]); ?></td>
			            <td><?php echo ($vo["descs"]); ?></td>
			            <td><?php echo (date("Y-m-d H:i:s",$vo["times"])); ?></td>
			            <td><?php echo ($vo["browse"]); ?></td>
			            <td><a href="#" class="btn btn-info">查看更多</a></td>

			            <td class="dete-btn">

			            	<?php if(session('jur') == '0' or strstr(session('jur'),'Cateart-edit')): ?><a href="/Admin/Cateart/edit/id/<?php echo ($vo["id"]); ?>" class="btn btn-warning">修改</a><?php endif; ?>

			            	&nbsp;

			            	<?php if(session('jur') == '0' or strstr(session('jur'),'Cateart-dele')): ?><a href="#" type="button" class="btn btn-danger" data-toggle="modal" onclick="art.deteArt(<?php echo ($vo["id"]); ?>)">删除</a><?php endif; ?>
			            	 

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



  


<script type="text/javascript" src="http://localhost:82/Application/Admin/public/js/jquery.min.js"></script>
<script type="text/javascript" src="http://localhost:82/Application/Admin/public/js/bootstrap.js"></script>
<script type="text/javascript">
    var art={};

    // 删除文章
    art.deteArt=function(id){
    	$('#gridSystemModal').modal("show");
    	$('.detet').click(function(){
    		$.post("/Admin/Cateart/dele",{id:id},function(data,tip){
    			if(tip=="success"){
    				window.history.go(0);
    			}
    		})
    	})
    }
</script>
</body>
</html>