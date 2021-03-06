<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <title>修改导航</title>
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
<section class="container-fluid mana-edit">
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
        <div class="panel-heading">
        <ol class="breadcrumb">
          <li><a href="/Admin/Category/index">导航管理</a></li>
          <li class="active">修改导航</li>
        </ol>
        </div>
        <div class="panel-body">
          

          <form class="form-horizontal" method="post" action="/Admin/Category/edit">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-1 control-label">导航标题</label>
              <div class="col-sm-11">
                <input type="text" value="<?php echo ($editlist["catename"]); ?>" class="form-control" id="inputEmail3" placeholder="输入您的导航名" name="catename">
                <input type="hidden" name="id" value="<?php echo ($editlist["id"]); ?>">
              </div>
            </div>

            <div class="form-group">
              <label for="inputEmail3" class="col-sm-1 control-label">所属父类</label>
              <div class="col-sm-11">


                <select class="form-control" name="pid">
                  <option value="0">0(选0默认为一级导航)</option>
                  <!-- pid不等于0的话，就是当修改的不是一级导航的时候，条件判断内才生效 -->
                  <!-- 如果是修改的一级导航，下面就不会出现 -->
                  <?php if($editlist["pid"] != 0): if(is_array($yijinavs)): $i = 0; $__LIST__ = $yijinavs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>" <?php if($editlist["pid"] == $vo['id']): ?>selected="selected"<?php endif; ?>><?php echo ($vo["catename"]); ?></option><?php endforeach; endif; else: echo "" ;endif; endif; ?>
                </select>



              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-1 control-label">url</label>
              <div class="col-sm-11">
                <input type="text" name="url" class="form-control" id="inputEmail3" placeholder="输入该导航的url" value="<?php echo ($editlist["url"]); ?>">
              </div>
            </div>

            <div class="form-group">
              <label for="inputEmail3" class="col-sm-1 control-label">排序</label>
              <div class="col-sm-11">
                <input type="text" name="orders" class="form-control" id="inputEmail3" placeholder="排序" value="<?php echo ($editlist["orders"]); ?>">
              </div>
            </div>

            <div class="form-group">
              <label for="inputEmail3" class="col-sm-1 control-label">页面标题</label>
              <div class="col-sm-11">
                <input type="text" value="<?php echo ($editlist["title"]); ?>" name="title" class="form-control" id="inputEmail3" placeholder="请输入页面的标题">
              </div>
            </div>

            <div class="form-group">
              <label for="inputEmail3" class="col-sm-1 control-label">页面描述</label>
              <div class="col-sm-11">
                <input type="text" value="<?php echo ($editlist["descc"]); ?>" name="descc" class="form-control" id="inputEmail3" placeholder="请输入页面的描述">
              </div>
            </div>

            <div class="form-group">
              <label for="inputEmail3" class="col-sm-1 control-label">关键词</label>
              <div class="col-sm-11">
                <input type="text" value="<?php echo ($editlist["keywords"]); ?>" name="keywords" class="form-control" id="inputEmail3" placeholder="请输入页面的关键字">
              </div>
            </div>

              <div class="form-group">
              <label for="inputEmail3" class="col-sm-1 control-label">导航类型</label>
              <div class="col-sm-11">
                <label class="radio-inline">
                  <input type="radio" name="type" id="inlineRadio1" name="type" value="0" <?php if($editlist["type"] == 0): ?>checked="checked"<?php endif; ?>>单页
                </label>
                <label class="radio-inline">
                  <input type="radio" name="type" id="inlineRadio2" value="1" name="type"<?php if($editlist["type"] == 1): ?>checked="checked"<?php endif; ?>>列表页
                </label>  
                <p>该导航下如果有子导航,请一律修改单页</p>
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