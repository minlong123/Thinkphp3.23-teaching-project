<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
		<title><?php echo ($metas['title']); ?></title>
	<meta name="description" content="<?php echo ($metas['descc']); ?>">
	<meta name="keywords" content="<?php echo ($metas['keywords']); ?>">
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="IE=edge" >
	<link rel="stylesheet" type="text/css" href="http://localhost:82/Application/Home/public/css/reset.css">
	<link rel="stylesheet" type="text/css" href="http://localhost:82/Application/Home/public/css/active.css">
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

	<!-- 会务活动策划banner图内容开始 -->
	<div id="banner9">
		<div class="banner9_img"></div>
	</div>
	<!-- 会务活动策划banner图内容结束 -->

	<!-- 会务活动策划第一栏内容开始 -->
	<div id="active_column">
		<div class="active_column_content">
			<div class="active_column_content1">服务<span>范畴</span></div>
			<div class="active_column_content2">让品牌成为消费者第一选择</div>
			<div class="active_column_content3">活动策划/执行</div>
			<div class="active_column_content4">广告策划、活动执行一体化，为您提供更精准、更便利的服务</div>

			<div class="active_column_content5">

				<div class="active_column_content6">
					<div><img src="http://localhost:82/Application/Home/public/images/active_one1.jpg" width="175" height="125"></div>
					<div>年会活动</div>
				</div>

				<div class="active_column_content6 active_column_content7">
					<div><img src="http://localhost:82/Application/Home/public/images/active_one2.jpg" width="175" height="125"></div>
					<div>庆典活动</div>
				</div>

				<div class="active_column_content6 active_column_content7">
					<div><img src="http://localhost:82/Application/Home/public/images/active_one3.jpg" width="175" height="125"></div>
					<div>会议活动</div>
				</div>

				<div class="active_column_content6 active_column_content7">
					<div><img src="http://localhost:82/Application/Home/public/images/active_one4.jpg" width="175" height="125"></div>
					<div>宴会活动</div>
				</div>

				<div class="active_column_content6 active_column_content7">
					<div><img src="http://localhost:82/Application/Home/public/images/active_one5.jpg" width="175" height="125"></div>
					<div>暖场活动</div>
				</div>

			</div>
		</div>
	</div>
	<!-- 会务活动策划第一栏内容结束 -->


	<!-- 会务活动策划第二栏内容开始 -->
	<div id="active_column2">
		<div class="active_column2_content">
			<div class="active_column2_content1">活动演艺</div>

			<div class="active_column2_content2">专业演艺的演出团队竭诚为您服务，为您打造绚丽夺目的视觉盛宴!</div>

			<div class="active_column2_content3">
				<div class="active_column2_content4"><img src="http://localhost:82/Application/Home/public/images/active_two1.jpg"></div>

				<div class="active_column2_content5"><img src="http://localhost:82/Application/Home/public/images/active_two2.jpg"></div>
			</div>
		</div>
	</div>

	<!-- 会务活动策划第二栏内容结束 -->

	<!-- 会务活动策划第三栏内容开始 -->
	<div id="active_column3">
		<div class="active_column3_content">
		 	<div class="active_column3_content1">舞台搭建</div>

			<div class="active_column3_content2">为企业提供整场活动的舞美设计、舞台搭建、灯光音响、视频设备等服务</div>

			<div class="active_column3_content3">

				<div class="active_column3_content4">
					<div><img src="http://localhost:82/Application/Home/public/images/three_details1.jpg"></div>

					<div>舞美设计与搭建</div>
				</div>


				<div class="active_column3_content4">
					<div><img src="http://localhost:82/Application/Home/public/images/three_details2.jpg"></div>

					<div>设备租赁</div>
				</div>

				<div class="active_column3_content4">
					<div><img src="http://localhost:82/Application/Home/public/images/three_details3.jpg"></div>

					<div>道具租赁</div>
				</div>

				<div class="active_column3_content4">
					<div><img src="http://localhost:82/Application/Home/public/images/three_details4.jpg"></div>

					<div>桌椅沙发等租赁</div>
				</div>

			</div>
		</div>
	</div>
	<!-- 会务活动策划第三栏内容结束 -->

	<!-- 会务活动策划第四栏内容开始 -->
	<div id="active_column3">
		<div class="active_column3_content">
		 	<div class="active_column3_content1">活动人员</div>

			<div class="active_column3_content2">强大的活动人员资源，为企业提供素质、经验丰富的活动团队，提高企业形象与竞争力。</div>

			<div class="active_column3_content3">

				<div class="active_column3_content4">
					<div><img src="http://localhost:82/Application/Home/public/images/four_details6.jpg"></div>

					<div>主持人</div>
				</div>


				<div class="active_column3_content4">
					<div><img src="http://localhost:82/Application/Home/public/images/four_details7.png"></div>

					<div>礼仪模特</div>
				</div>

				<div class="active_column3_content4">
					<div><img src="http://localhost:82/Application/Home/public/images/four_details8.png"></div>

					<div>演艺人员</div>
				</div>

				<div class="active_column3_content4">
					<div><img src="http://localhost:82/Application/Home/public/images/four_details9.jpg"></div>

					<div>传单派发</div>
				</div>

			</div>
		</div>
	</div>
	<!-- 会务活动策划第四栏内容结束 -->


	<!-- 会务活动策划第五栏内容开始 -->
	<div id="active_column5">
		<div class="active_column5_content">
			<div class="active_column5_content1">宣传设计</div>
			<div class="active_column5_content2">广告设计、广告印刷、广告宣传一体化、省时省力更让您省心放心!</div>
			<div class="active_column5_content3">
				<div class="active_column5_content4"><img src="http://localhost:82/Application/Home/public/images/five_details1.jpg"></div>
				<div class="active_column5_content5"><img src="http://localhost:82/Application/Home/public/images/five_details2.jpg"></div>
			</div>
		</div>
	</div>
	<!-- 会务活动策划第五栏内容结束 -->

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