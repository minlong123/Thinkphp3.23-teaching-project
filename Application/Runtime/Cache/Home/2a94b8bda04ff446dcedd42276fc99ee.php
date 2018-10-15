<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title><?php echo ($hometit[0]['title']); ?></title>
	<meta name="description" content="<?php echo ($hometit[0]['descc']); ?>">
	<meta name="keywords" content="<?php echo ($hometit[0]['keywords']); ?>">
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="IE=edge" >
	<link rel="stylesheet" type="text/css" href="http://localhost:82/Application/Home/public/css/common.css">
	<link rel="stylesheet" type="text/css" href="http://localhost:82/Application/Home/public/css/style.css">
	<link rel="stylesheet" type="text/css" href="http://localhost:82/Application/Home/public/css/reset.css">
	<script type="text/javascript" src="http://localhost:82/Application/Home/public/js/home.js"></script>
	<script type="text/javascript" src="http://localhost:82/Application/Home/public/js/placeholders.min.js"></script>
</head>
<body>
	<!-- 导航内容开始 -->
	<div id="header">
		<div class="navigator">
			<div class="navigator_logo"><img src="http://localhost:82/Application/Home/public/images/cehuaren.jpg" height="80"></div>
			<div class="navigator_nav">
				<ul class="navigator_nav_ul">
					<?php if(is_array($navlist)): $i = 0; $__LIST__ = $navlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="navulli">
						<a class="onenav" <?php if(isset($vo['items'])): ?>href="javascript:void(0)" <?php else: if($vo["id"] == 1): ?>href="<?php echo ($vo["url"]); ?>"<?php else: ?>href="<?php echo ($vo["url"]); ?>/<?php echo ($vo["id"]); ?>"<?php endif; endif; ?>><?php echo ($vo["catename"]); ?></a>

						<!-- 判断如果有子导航的话，下面的元素才显示 -->
						<?php if(isset($vo['items'])): ?><ol class="hover_li">
							<?php if(is_array($vo['items'])): $i = 0; $__LIST__ = $vo['items'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($voo["url"]); ?>/<?php echo ($voo["id"]); ?>" data-url="<?php echo ($voo["url"]); ?>"><?php echo ($voo["catename"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
						</ol><?php endif; ?>

					</li><?php endforeach; endif; else: echo "" ;endif; ?>

				</ul>
			</div>
		</div>
	</div>
	<!-- 导航栏内容结束 -->
	<!-- 轮播图内容开始 -->
	<div id="play">
		<div class="play_img">
			<ul class="play_ul">
				<li class="play_select" style="background:url('http://localhost:82/Application/Home/public/images/ad-0.jpg') center"></li>
				<li style="background:url('http://localhost:82/Application/Home/public/images/ad-1.jpg') center"></li>
				<li style="background:url('http://localhost:82/Application/Home/public/images/ad-2.jpg') center"></li>
			</ul>
		</div>
		<div class="play_left play_common"><</div>
		<div class="play_right play_common">></div>
	</div>
	<!-- 轮播图内容结束 -->

	<!-- 策划服务内容开始 -->
	<div id="plan">
		<div class="plan_content">

			<div class="plan_content_top">
				<div class="plan_top_font">
					<div class="plan_top_font1">策划服务</div>
					<div class="plan_top_font2">PLANNING SERVICE</div>
				</div>
			</div>


			<div class="plan_content_bottom">
				

				<div class="plan_bottom_one spin">
					<div><a href="javascript:void(0)"><img src="http://localhost:82/Application/Home/public/images/plan.png"></a></div>
					<div class="plan_bottom_one1"><a href="javascript:void(0)">品牌营销策划</a></div>
				</div>


				<div class="plan_bottom_one spin">
					<div><a href="javascript:void(0)"><img src="http://localhost:82/Application/Home/public/images/plan1.jpg"></div>
					<div class="plan_bottom_one1"><a href="javascript:void(0)">营销全案策划</a></div>
				</div>


				<div class="plan_bottom_one spin">
					<div><a href="javascript:void(0)"><img src="http://localhost:82/Application/Home/public/images/plan2.png"></a></div>
					<div class="plan_bottom_one1"><a href="javascript:void(0)">营销推广策划</a></div>
				</div>


				<div class="plan_bottom_one spin">
					<div><a href="javascript:void(0)"><img src="http://localhost:82/Application/Home/public/images/plan3.png"></a></div>
					<div class="plan_bottom_one1"><a href="javascript:void(0)">会务活动策划</a></div>
				</div>

			</div>

		</div>
	</div>
	<!-- 策划服务内容结束 -->

	<!-- 企业营销内容开始 -->
	<div id="marketing">
		<div class="marketing_content">
			
			<div class="marketing_content_top">
				<div class="marketing_top_font">
					<div class="marketing_top_font1">企业营销</div>
					<div class="marketing_top_font2">PLANNING SERVICE</div>
				</div>
			</div>

			<div  class="marketing_content_bottom">


				<div class="marketing_content_children1 enlarge marketing_select">
					<span><a href="javascript:void(0)"><img src="http://localhost:82/Application/Home/public/images/marketing.jpg" width="308" height="190"></a></span>
					<p><a href="javascript:void(0)">网站建设</a></p>
				</div>

				<div class="marketing_content_children1 marketing_content_children2 enlarge">
					<span><a href="javascript:void(0)"><img src="http://localhost:82/Application/Home/public/images/marketing1.jpg" width="308" height="190"></a></span>
					<p><a href="javascript:void(0)">小程序开发</a></p>
				</div>

				<div class="marketing_content_children1 marketing_content_children2 enlarge">
					<span><a href="javascript:void(0)"><img src="http://localhost:82/Application/Home/public/images/marketing2.jpg" width="308" height="190"></a></span>
					<p><a href="javascript:void(0)">电商运营</a></p>
				</div>


			</div>

		</div>
	</div>
	<!-- 企业营销内容结束 -->

	<!-- 首页banner图内容开始 -->
	<div id="banner">
		<div class="banner_img"></div>
	</div>
	<!-- 首页banner图内容结束 -->

	<!-- 客户案例内容开始 -->
	<div id="case">
		<div class="case_content">

			<div class="case_content_top">
				<div class="case_top_left">
					<div>客户案例</div>
					<div>SERVICE ITEMS</div>
				</div>

				<div class="case_top_right">
					<a href="/Home/Cases/casess">查看更多</a>
					<a href="/Home/Cases/casess">></a>
				</div>
			</div>


			<div class="case_content_bottom">


				<?php if(is_array($caselist)): $i = 0; $__LIST__ = array_slice($caselist,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div <?php if($key == 0): ?>class="case_bottom_one topMove case_select"<?php else: ?>class="case_bottom_one case_bottom_two topMove"<?php endif; ?>>
					<div><a href="/Home/Cases/case_article/cateid/<?php echo ($vo["cateid"]); ?>/id/<?php echo ($vo["id"]); ?>"><img src="/<?php echo ($vo["pic"]); ?>" height="135" width="230"></a></div>
					<div><a href="/Home/Cases/case_article/cateid/<?php echo ($vo["cateid"]); ?>/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["shotitle"]); ?></a></div>
					<div><?php echo ($vo["shotitle"]); ?></div>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>

			</div>

		</div>
	</div>
	<!-- 客户案例内容结束 -->

	<!-- 公司简介内容开始 -->
	<div id="company">
		<div class="company_content">

			<div class="company_content_left">
				<img src="http://localhost:82/Application/Home/public/images/synopsis.jpg" width="403" height="243">
			</div>

			<div class="company_content_right">

				<div class="company_right_content">
					<div><h4>COMPANY</h4></div>
					<div><h1>PROFILE</h1></div>
					<div class="company_right_font"><h5>公司简介</h5></div>
					<div class="company_right_font"><h6>"宜昌世阳商务信息咨询服务有限公司"是湖北省策划行业协会副会长单位 董事长张世雄任湖北省策划行业协会副会长、宜昌分会首届会长、公司背靠湖北省策划行业协会，依托湖北省工商联全省工商领航系统及协会庞大的圈层结构，通过资源和市场有效配置和整合，集合了国内长期从事咨询策划行业的专家、学者、企业家、职业策划人、教育培训与认证机构、投融资机构和个人等为主体的湖北省策划行业系统的专家团队。</h6></div>
					<div><a href="/Home/About">MORE</a></div>
				</div>
			</div>
		</div>
	</div>

	<!-- 公司简介内容结束 -->

	<!-- 专家顾问栏目内容开始 -->
	<div id="export">
		<div class="export_content">
			<div class="export_content_top">
				<div class="export_top_content">
					<div class="export_content_font1">专家顾问</div>
					<div class="export_content_font2">EXPERT ADVISOR</div>
				</div>
			</div>


			<div class="export_content_bottom">


				<?php if(is_array($exportlist)): $i = 0; $__LIST__ = array_slice($exportlist,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="bottomMove">
					<div><a href="/Home/Export/export_article/cateid/<?php echo ($vo["cateid"]); ?>/id/<?php echo ($vo["id"]); ?>" style="border-radius:50%;display:inline-block;overflow:hidden;"><img src="/<?php echo ($vo["pic"]); ?>" width="174" height="174" style="display:block;"></a></div>
					<div class="export_content_name"><?php echo ($vo["shotitle"]); ?></div>
					<div class="export_content_newname"><?php echo ($vo["lartitle"]); ?></div>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>

			</div>
		</div>
	</div>
	<!-- 专家顾问栏目内容结束 -->

	<!-- 合作模式栏目内容开始 -->
	<div id="model">
		<div class="model_content">


			<div class="model_content_top">
				<div class="model_top_content">
					<div class="model_content_font1">合作模式</div>
					<div class="model_content_font2">COOPERATION MODEL</div>
				</div>
			</div>

			<div class="model_content_bottom">
				<div class="model_bottom_one">

					
					<div class="model_bottom_one1 shortLeft rightMove" data-img="http://localhost:82/Application/Home/public/images/model1.jpg" data-imgs="http://localhost:82/Application/Home/public/images/model-1.jpg">
						<div class="model_bottom_details1"><span><img src="http://localhost:82/Application/Home/public/images/model1.jpg" /></span></div>

						<div class="model_bottom_details2">
							<div class="model_details2_content">
								<div class="model_details2_left">01</div>
								<div class="model_details2_right">
									<div class="model_details2_font">基本目标</div>
									<div class="model_details2_font1">倾听客户需求，了解用户痛点</div>
								</div>
							</div>

						</div>
					</div>



					<div class="model_bottom_one1 shortBottom" data-img="http://localhost:82/Application/Home/public/images/model2.jpg" data-imgs="http://localhost:82/Application/Home/public/images/model-2.jpg">
						
						<div class="model_bottom_details1"><span><img src="http://localhost:82/Application/Home/public/images/model2.jpg" /></span></div>

						<div class="model_bottom_details2">
							<div class="model_details2_content">
								<div class="model_details2_left">02</div>
								<div class="model_details2_right">
									<div class="model_details2_font">思考路径</div>
									<div class="model_details2_font1">以客户及市场痛点，深度挖掘</div>
								</div>
								
							</div>
						</div>


					</div>


					<div class="model_bottom_one1 leftMove" data-img="http://localhost:82/Application/Home/public/images/model3.jpg" data-imgs="http://localhost:82/Application/Home/public/images/model-3.jpg">
						<div class="model_bottom_details1"><span><img src="http://localhost:82/Application/Home/public/images/model3.jpg" /></span></div>
						<div class="model_bottom_details2">
							<div class="model_details2_content">
								<div class="model_details2_left">03</div>
								<div class="model_details2_right">
									<div class="model_details2_font">策略结果</div>
									<div class="model_details2_font1">展开广域或区域调研，汇总调研报告</div>
								</div>
								
							</div>
						</div>
					</div>



				</div>


				<div class="model_bottom_one">
					<div class="model_bottom_one1 rightMove" data-img="http://localhost:82/Application/Home/public/images/model4.jpg" data-imgs="http://localhost:82/Application/Home/public/images/model-4.jpg">
						<div class="model_bottom_details1"><span><img src="http://localhost:82/Application/Home/public/images/model4.jpg" /></span></div>
						<div class="model_bottom_details2">
							<div class="model_details2_content">
								<div class="model_details2_left">04</div>
								<div class="model_details2_right">
									<div class="model_details2_font">合作协议</div>
									<div class="model_details2_font1">客观分析，提出项目策略性方案</div>
								</div>
								
							</div>
						</div>
					</div>


					<div class="model_bottom_one1 shortTop" data-img="http://localhost:82/Application/Home/public/images/model5.jpg" data-imgs="http://localhost:82/Application/Home/public/images/model-5.jpg">
						<div class="model_bottom_details1"><span><img src="http://localhost:82/Application/Home/public/images/model5.jpg" /></span></div>
						<div class="model_bottom_details2">
							<div class="model_details2_content">
								<div class="model_details2_left">05</div>
								<div class="model_details2_right">
									<div class="model_details2_font">优化进程</div>
									<div class="model_details2_font1">将策略性方案提报客户端沟通并完善</div>
								</div>
								
							</div>
						</div>
					</div>



					<div class="model_bottom_one1 leftMove" data-img="http://localhost:82/Application/Home/public/images/model6.jpg" data-imgs="http://localhost:82/Application/Home/public/images/model-6.jpg">
						<div class="model_bottom_details1"><span><img src="http://localhost:82/Application/Home/public/images/model6.jpg" /></span></div>
						<div class="model_bottom_details2">
							<div class="model_details2_content">
								<div class="model_details2_left">06</div>
								<div class="model_details2_right">
									<div class="model_details2_font">通报进度</div>
									<div class="model_details2_font1">阶段性对项目服务进行测评</div>
								</div>
								
							</div>
						</div>
					</div>


				</div>
			</div>

		</div>
	</div>

	<!-- 合作模式栏目内容结束 -->


	<!--新闻动态栏目内容开始 -->
	<div id="news">
		<div class="news_content">

			<div class="news_content_top">
				<div class="news_top_content">
					<div class="news_content_font1">新闻动态</div>
					<div class="news_content_font2">NEWS CENTER</div>
				</div>
			</div>

			<div class="news_content_bottom">

				<?php if(is_array($newlist)): $i = 0; $__LIST__ = array_slice($newlist,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="news_bottom_left rightD">
					<div><img src="/<?php echo ($vo["pic"]); ?>" width="490" height="160"></div>
					<div class="news_bottom_left1"><a href="/Home/News/news_article/cateid/<?php echo ($vo["cateid"]); ?>/id/<?php echo ($vo["id"]); ?>"><?php echo (msubstr($vo["shotitle"],0,30,'utf8')); ?></a></div>
					<div class="news_bottom_left2">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo (msubstr($vo["descs"],0,50,'utf8')); ?></div>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>



				<div class="news_bottom_right leftD">

					<?php if(is_array($newlist)): $i = 0; $__LIST__ = array_slice($newlist,1,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="news_bottom_right1">

						<div class="news_bottom_details">
							<span><?php echo (date("m-d",$vo["times"])); ?></span>
							<span><a href="/Home/News/news_article/cateid/<?php echo ($vo["cateid"]); ?>/id/<?php echo ($vo["id"]); ?>"> <?php echo (msubstr($vo["shotitle"],0,20,'utf8')); ?></a></span>
						</div>

						<div class="news_bottom_details1">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo (msubstr($vo["descs"],0,60,'utf8')); ?></div>
					</div><?php endforeach; endif; else: echo "" ;endif; ?>

				</div>
			</div>
		</div>
	</div>
	<!-- 行动动态栏目内容结束 -->

	<!-- 网站留言栏目内容开始 -->
	<div id="message">
		<div class="message_content">
			<div class="message_content_top">
				<div class="message_top_content">
					<div class="message_content_font1">免费获取网站建设与品牌策划方案报价</div>
					<div class="message_content_font2">*请认真填写需求信息，我们会在24小时与您取得联系</div>
				</div>
			</div>

			<div class="message_content_bottom">
				<form id="fm" action="/Home/Index/msg" method="post">

					<div class="message_bottom_details1">
						<input type="text" name="names" placeholder="称呼姓名">

						<input type="text" name="telelph" placeholder="联系电话" class="message_details1_input">
						<input type="text" name="content" placeholder="描述您需求，如网站、微信、电商、APP等" class="message_details1_input">
					</div>

					<input class="message_bottom_details2" type="submit" value="获取文案及报价">

				</form>
			</div>
		</div>
	</div>
	<!-- 网站留言栏目内容结束 -->
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
	<!-- 信息悬浮窗口 -->
	<div class="h-dialog">

		<div class="h-dialog-o">客户咨询</div>


		<div class="h-dialog-t">
			<div>项目经理 :<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=249650419&site=qq&menu=yes"><img border="0" src="http://localhost:82/Application/Home/public/images/qq.png" alt="点击这里给我发消息" title="点击这里给我发消息"/></a></div>




			<div class="h-dialog-t1"><span class="icon-phone1"></span>0717-6946609</div>
			<div class="h-dialog-t1"><span class="icon-phone1"></span>13871398760</div>
			<div class="h-dialog-t1"><span class="icon-phone1"></span>19845376862</div>

			<div class="h-dialog-t2"><img src="http://localhost:82/Application/Home/public/images/weixinn.jpg"></div>
		</div>


		<div class="h-dialog-th">
			<div class="h-dialog-th1"><span class="icon-arrow"></span></div>
			<div class="h-dialog-th2">返回顶部</div>
		</div>


	</div>

	<!-- 信息悬浮窗口 -->
	
	<script type="text/javascript" src="http://localhost:82/Application/Home/public/js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="http://localhost:82/Application/Home/public/js/homejquery.js"></script>

</body>
</html>