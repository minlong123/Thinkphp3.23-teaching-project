<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
		<title><?php echo ($metas['title']); ?></title>
	<meta name="description" content="<?php echo ($metas['descc']); ?>">
	<meta name="keywords" content="<?php echo ($metas['keywords']); ?>">
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="IE=edge" >
	<link rel="stylesheet" type="text/css" href="http://localhost:82/Application/Home/public/css/reset.css">
	<link rel="stylesheet" type="text/css" href="http://localhost:82/Application/Home/public/css/case.css">
</head>
<body>
	<!-- 导航内容开始 -->
	<div id="header">
		<div class="navigator">
			
			<div class="navigator_logo"><img src="http://localhost:82/Application/Home/public/images/cehuaren.jpg" height="80"></div>
			
			<div class="navigator_nav">
				<ul class="navigator_nav_ul">


					
			<!-- 		<li class="select_black"><a href="/Home/index">首页</a></li>
					</volist> -->


					<?php if(is_array($navlist)): $i = 0; $__LIST__ = $navlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="navulli">
						<a class="onenav" <?php if(isset($vo['items'])): ?>href="javascript:void(0)" <?php else: if($vo["id"] == 1): ?>href="<?php echo ($vo["url"]); ?>"<?php else: ?>href="<?php echo ($vo["url"]); ?>/<?php echo ($vo["id"]); ?>"<?php endif; endif; ?>><?php echo ($vo["catename"]); ?></a>

						<!-- 判断如果有子导航的话，下面的元素才显示 -->
						<?php if(isset($vo['items'])): ?><ol class="hover_li">
							<?php if(is_array($vo['items'])): $i = 0; $__LIST__ = $vo['items'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($voo["url"]); ?>/<?php echo ($voo["id"]); ?>" data-url="<?php echo ($voo["url"]); ?>"><?php echo ($voo["catename"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
						</ol><?php endif; ?>

					</li><?php endforeach; endif; else: echo "" ;endif; ?>




	<!-- 				<li>
						<a href="#">策划服务</a>
						<ol class="hover_li">
							<li><a href="/Home/brand">品牌营销策划</a></li>
							<li><a href="/Home/whole">营销全案策划</a></li>
							<li><a href="/Home/extension">营销推广策划</a></li>
							<li><a href="/Home/active">会务活动策划</a></li>
						</ol>
					</li>
					<li><a href="/Home/export">专家顾问</a></li>
					<li>
						<a href="#">新闻动态</a>
						<ol class="hover_li">
							<li><a href="/Home/about">行业动态</a></li>
							<li><a href="/Home/about">公司动态</a></li>
						</ol>
					</li>
					<li>
						<a href="#">客户案例</a>
						<ol class="hover_li">
							<li><a href="/Home/about">营销策划案例</a></li>
							<li><a href="/Home/about">网站建设案例</a></li>
							<li><a href="/Home/about">小程序开发案例</a></li>
							<li><a href="/Home/about">电商运营案例</a></li>
						</ol>
					</li>
					<li class="last_child"><a href="/Home/about">关于世阳</a></li> -->



				</ul>
			</div>
		</div>
	</div>
	<!-- 导航栏内容结束 -->

	<!-- 营销策划案例banner图内容开始 -->

	<div id="banner12">
		<div class="banner12_img"></div>
	</div>

	<!-- 营销策划案例banner图内容结束 -->

	<!-- 主体内容第一部分 -->
	<div id="case4">
		<div class="case4_by_top">
			<img src="http://localhost:82/Application/Home/public/images/case_line.jpg"/>
			 客户<span>案例</span>
			<img src="http://localhost:82/Application/Home/public/images/case_line.jpg"/>
		</div>

		<div class="case4_by_middle">CUSTOMER CASE</div>
	</div>

	<div id="case4_one">
		<div class="case4_one1">
			<div class="case4_one_con">

				<div class="case4_one_con1">
					<a href="/casess/18"  class="case4_one_con2">
						<span>网站建设案例</span>
						<span><img src="http://localhost:82/Application/Home/public/images/case_img.png"></span>
					</a>
				</div>


				<div class="case4_one_con1">
					<a href="/casesss/25" class="case4_one_con2">
						<span>小程序开发案例</span>
						<span><img src="http://localhost:82/Application/Home/public/images/case_img.png"></span>
					</a>
				</div>


				<div class="case4_one_con1">
					<a href="/casessss/26" class="case4_one_con2">
						<span>电商运营案例</span>
						<span class="case4_select"><img src="http://localhost:82/Application/Home/public/images/case_img.png"></span>
					</a>
				</div>


				<div class="case4_one_con1">
					<a href="/casesssss/17" class="case4_one_con2">
						<span>营销策划案例</span>
						<span><img src="http://localhost:82/Application/Home/public/images/case_img.png"></span>
					</a>
				</div>


			</div>
		</div>
	</div>
	<!-- 主体内容第一部分 -->


	<!-- 主体内容第二部分  -->
	<div id="case4_two">
		<!-- 案例 -->
		<div class="case4_two_case">

			<?php if(is_array($artlist)): $i = 0; $__LIST__ = $artlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="case4_two_case1">
				<div class="case4_two_case2"><a href="/casepnews/<?php echo ($vo["cateid"]); ?>/<?php echo ($vo["id"]); ?>"><img src="/<?php echo ($vo["pic"]); ?>" width="300" height="190"/></a></div>
				<div class="case4_two_case3"><?php echo ($vo["shotitle"]); ?></div>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>

		</div>

		<div class="clearfix"></div>
		<!-- 分页 -->
		<div class="pagination"><?php echo ($page); ?></div>

		
	</div>

	<!-- 主体内容第二部分  -->

	<div class="clearfix"></div>
		<!-- 底部图片引入内容开始 -->
	<div id="banner1">
		<div class="banner1_img"></div>
	</div>
	<!-- 底部图片引入内容结束 -->

	<!-- 底部信息栏内容设置开始 -->
	<div id="footer">
		<div class="footer_content">
			<div class="footer_content_top">
				<div class="footer_top_left">

					<div class="footer_left_one">
						<ul class="footer_left_ul">
							<li>宜昌老板商务信息咨询服务有限公司
</li>
							<li>0717-6348888</li>
							<li>13871378888  1354537686</li>
							<li>duchaoping@ssdfsx.com</li>
							<li>湖北宜昌市西陵区西陵发展大道111号</li>
						</ul>
					</div>

					<div class="footer_left_two">
						<ul class="footer_left_ul">
							<li>About Us</li>
							<li><a href="">服务项目</a></li>
							<li><a href="">关于我们</a></li>
							<li><a href="">公司动态</a></li>
							<li><a href="">行业资讯</a></li>
							<li><a href="">专家顾问</a></li>
						</ul>
					</div>
				</div>

				<div class="footer_top_right">

					<div class="footer_right_one">
						<ul class="footer_left_ul">
							<li>Service</li>
							<li><a href="">品牌营销咨询</a></li>
							<li><a href="">营销推广策略</a></li>
							<li><a href="">会务活动策划</a></li>
							<li><a href="">营销全案策划</a></li>
						</ul>

					</div>


					<div class="footer_right_two">
						<div class="footer_right_top">关于我们</div>
						<div class="footer_right_bottom">
							<span><img src="http://localhost:82/Application/Home/public/images/footer1.jpg" height="97" width="114"></span>
							<span><img src="http://localhost:82/Application/Home/public/images/footer2.jpg" height="97" width="114"></span>
						</div>
					</div>


				</div>
			</div>

			<div class="footer_content_bottom">
				<div>宜昌老板商务信息咨询服务有限公司 服务电话：0717-6340809 版权所有 © 2008-2018 Inc.</div>
				<div>鄂ICP备17016655号-3</div>
			</div>
		</div>
	</div>
	<!-- 底部信息栏内容设置结束 -->





	<script type="text/javascript" src="http://localhost:82/Application/Home/public/js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="http://localhost:82/Application/Home/public/js/homejquery.js"></script>

</body>
</html>