<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
		<title><?php echo ($metas['title']); ?></title>
	<meta name="description" content="<?php echo ($metas['descc']); ?>">
	<meta name="keywords" content="<?php echo ($metas['keywords']); ?>">
	<meta charset="utf-8">
	<!-- <meta http-equiv="x-ua-compatible" content="IE=edge" > -->
	<link rel="stylesheet" type="text/css" href="http://localhost:82/Application/Home/public/css/reset.css">
	<link rel="stylesheet" type="text/css" href="http://localhost:82/Application/Home/public/css/whole.css">
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

	<!-- 营销全案策划banner图内容开始 -->
	<div id="banner7">
		<div class="banner7_img"></div>
	</div>
	<!-- 营销全案策划banner图内容结束 -->

	<!-- 营销全案策划第一栏内容开始 -->	
	<div id="whole_column1">
		<div class="whole_column1_content">
			<div class="whole_column1_top">内容<span>与流程</span></div>

			<div class="whole_column1_bottom">


				<div class="whole_column1_left">
					<div class="whole_column1_left1"></div>
					<div class="whole_column1_left2"><img src="http://localhost:82/Application/Home/public/images/wholesale_one1.jpg" height="145" width="415"></div>
				</div>


				<div class="whole_column1_right">
					<div class="whole_column1_right1">WHOLE CASE</div>

					<div class="whole_column1_right2"><img src="http://localhost:82/Application/Home/public/images/planning_service.jpg"></div>

					<div class="whole_column1_right3">全案策划服务内容与流程</div>

					<div class="whole_column1_right4">全案策划的全称为企业全案策划，是对企业内容、外部进行全方位的系统策划，既包括企业内容的管理体系与优化(品牌定位、组织架构、人力资源战略、精神文化导向等等),又包括了企业对外的市场扩展策略与发展战略(客群定位、市场定位、营销策略等)。</div>
				</div>


			</div>
		</div>
	</div>
	<!-- 营销全案策划第一栏内容结束 -->

	<!-- 营销全案策划第二栏内容开始 -->
	<div id="whole_column2">
		<div class="whole_column2_content">
			<div class="whole_column2_content1">全案策划<span>服务体系</span>包含</div>

			<div class="whole_column2_content2">中国大健康产业的用户自主化、产业链复杂化、传播多样化。注定了单纯的广告、咨询和创意设计解决不了根本问题，所以，相道提供的是健康的全案品牌营销策划服务</div>

			<div class="whole_column2_content3"><img src="http://localhost:82/Application/Home/public/images/wholesale_two.png"></div>
		</div>
	</div>
	<!-- 营销全案策划第二栏内容结束 -->
	<!-- 营销全案策划第三栏内容开始 -->
	<div id="whole_column3">
		<div class="whole_column3_content">
			<div class="whole_column3_top">只做全案的<span>3大理由</span></div>

			<div class="whole_column3_bottom">
				
				<div class="whole_column3_bottom1">
					<div class="whole_column3_bottom2">一致性</div>
					<div class="whole_column3_bottom3">确保方向一致并且正确,让每个环节都以目标为导向</div>
				</div>


				<div class="whole_column3_bottom1">
					<div class="whole_column3_bottom2">系统性</div>
					<div class="whole_column3_bottom3">营销是一个体系，必须立足企业家全盘运营管理高度</div>
				</div>


				<div class="whole_column3_bottom1">
					<div class="whole_column3_bottom2">完整性</div>
					<div class="whole_column3_bottom3">以结果为导向确保策划、组织、执行和调整的完整性</div>
				</div>

			</div>
		</div>
	</div>

	<!-- 营销全案策划第三栏内容结束 -->

	<!-- 营销全案策划第四栏内容开始 -->
	<div id="whole_column4">
		<div class="whole_column4_content">
			<div class="whole_column4_top">全案策划<span>服务流程</span></div>

			<div class="whole_column4_bottom">

				<div class="whole_column4_bottom1 whole_column4_bottom2">
					<div><img src="http://localhost:82/Application/Home/public/images/four_details1.jpg"></div>
					<div class="whole_column4_bottom4">项目立案</div>
					<div class="whole_column4_bottom5">初步接触，深度面谈</div>
				</div>

				<div class="whole_column4_bottom1 whole_column4_bottom3"><img src="http://localhost:82/Application/Home/public/images/polygon.jpg"></div>

				<div class="whole_column4_bottom1 whole_column4_bottom2">
					<div><img src="http://localhost:82/Application/Home/public/images/four_details2.jpg"></div>
					<div class="whole_column4_bottom4">项目运作</div>
					<div class="whole_column4_bottom5">调研走访，工作分析，过程管理</div>
				</div>

				<div class="whole_column4_bottom1 whole_column4_bottom3"><img src="http://localhost:82/Application/Home/public/images/polygon.jpg"></div>

				<div class="whole_column4_bottom1 whole_column4_bottom2">
					<div><img src="http://localhost:82/Application/Home/public/images/four_details3.jpg"></div>
					<div class="whole_column4_bottom4">实施阶段</div>
					<div class="whole_column4_bottom5">方案提升，设计制作，市场销售跟进</div>
				</div>

				<div class="whole_column4_bottom1 whole_column4_bottom3"><img src="http://localhost:82/Application/Home/public/images/polygon.jpg"></div>

				<div class="whole_column4_bottom1 whole_column4_bottom2">
					<div><img src="http://localhost:82/Application/Home/public/images/four_details4.jpg"></div>
					<div class="whole_column4_bottom4">持续服务</div>
					<div class="whole_column4_bottom5">新产品开发</div>
				</div>
			</div>

		</div>
	</div>
	<!-- 营销全案策划第四栏内容结束 -->

	<!-- 营销全案策划第五栏内容开始-->
	<div id="whole_column5">
		<div class="whole_column5_content">


			<div class="whole_column5_content1">
				<div class="whole_column5_content2">工作方法</div>

				<div class="whole_column5_content3">在一个系统内解决所有问题，所有的事情是一件事，所有人一起做所有事。</div>
			</div>



			<div class="whole_column5_content1">
				<div class="whole_column5_content2">时间管理</div>

				<div class="whole_column5_content3">严格按照季、月、周计划工作，所有的事情都与客户的时间相结合。</div>
			</div>



			<div class="whole_column5_content1">
				<div class="whole_column5_content2">人员管理</div>

				<div class="whole_column5_content3">公司品太调配人手，资深人员亲自参与一线工作，全程全守。</div>
			</div>

		</div>
	</div>
	<!-- 营销全案策划第五栏内容结束 -->

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