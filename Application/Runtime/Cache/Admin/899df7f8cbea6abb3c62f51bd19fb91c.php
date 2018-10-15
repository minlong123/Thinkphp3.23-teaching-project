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
				  <li><a href="/index.php/Admin/Admins/index">管理员管理</a></li>
				  <li class="active">管理员修改</li>
				</ol>
			  </div>
			  <div class="panel-body">
			   	   
				<form class="form-inline">
				  <div class="form-group">
				    <label for="exampleInputName2">用户名：</label>
				    <input type="text" class="form-control form-user" placeholder="填写您的用户名" name="user" value="<?php echo ($editres['user']); ?>">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail2">密码：</label>
				    <input type="password" class="form-control form-pwd" placeholder="未填默认不修改" name="pwd">
				    <input type="hidden" name="id" class="form-id" value="<?php echo ($editres['id']); ?>">
				  </div>


		          	<div class="form-jurs" title="<?php echo ($editres['jur']); ?>">权限管理：</div>
			          <?php if(is_array($aitylist)): $i = 0; $__LIST__ = $aitylist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="form-group" style="display:block;margin:8px 0;">
					      <div class="checkbox">
					        <label>
					          <input type="checkbox" class="form-jur" value="<?php echo ($vo["auto"]); ?>" name="jur" title="<?php echo ($vo["auto"]); ?>">&nbsp;&nbsp;<?php echo ($vo["names"]); ?>
					        </label>
					      </div>
			          </div><?php endforeach; endif; else: echo "" ;endif; ?>

				  <button type="submit" class="btn btn-default edit-dmin">提交</button>
				</form>



			  </div>

			</div>
		</div>
	</div>
</section>




	<script type="text/javascript" src="http://localhost:82/Application/Admin/public/js/jquery.min.js"></script>
	<script type="text/javascript" src="http://localhost:82/Application/Admin/public/js/bootstrap.js"></script>
	<script type="text/javascript">
		$(function(){
			var jurs=$('.form-jurs').attr('title');
			$('.form-jur').each(function(index,item){
				if(jurs.indexOf($(this).val())!=-1){
					$(this).prop("checked",true);
				}
			})

			$('.edit-dmin').click(function(){
				var arr=[];
				var user=$('.form-user').val();
				var pwd=$('.form-pwd').val();
				var id=$('.form-id').val();
				$('.form-jur').each(function(){
					if($(this).is(":checked")){
						arr.push($(this).attr("title"));
					}
				})
				if(arr.length<1){
					alert("请选择至少一项权限");
				}else{
					var jur=arr.join(",");
					$.post("/index.php/Admin/Admins/edit",{user:user,pwd:pwd,id:id,jur:jur},function(data,tip){
						console.log(data);
						if(data.status==1){
							window.location.href="/index.php/Admin/Admins/index";
						}else{
							window.location.href="/index.php/Admin/Admins/index";
						}
						if(data.status==0){
							alert(data.info);
						}

						
					})
				}
			})
		})
	</script>
</body>
</html>