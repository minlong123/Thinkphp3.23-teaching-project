<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
		<title><?php echo ($metas['title']); ?></title>
	<meta name="description" content="<?php echo ($metas['descc']); ?>">
	<meta name="keywords" content="<?php echo ($metas['keywords']); ?>">
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="IE=edge" >
	<link rel="stylesheet" type="text/css" href="http://localhost:82/Application/Home/public/css/reset.css">
	<link rel="stylesheet" type="text/css" href="http://localhost:82/Application/Home/public/css/extension.css">
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
	<!-- 营销推广策划banner图内容开始 -->
	<div id="banner8">
		<div class="banner8_img"></div>
	</div>
	<!-- 营销推广策划banner图内容结束 -->

	<!-- 营销推广策划第一栏内容开始 -->
	<div id="extension_column1">
		<div class="extension_column1_content">

			<div class="extension_column1_left">
				<div class="extension_column1_left1">教你如何做<span>网络营销推广</span></div>

				<div class="extension_column1_left2">MARKETING PLANNING</div>

				<div class="extension_column1_left3"><img src="http://localhost:82/Application/Home/public/images/scheme2.jpg" width="377" height="36"></div>

				<div class="extension_column1_left4">营销策划推广内容与流程</div>

			</div>

			<div class="extension_column1_right">
				<div class="extension_column1_right1">网络营销就是以互联网为主要手段进行，为达到一定营销目的的营销活动，网站运营，SEO(搜索引擎营销)是网络营销的四个方式与阶段。网络营销的方法还包括博客营销、口碑营销、网络广告、软文营销、视频营销、论坛营销、SNS营销(社区)、事件营销、邮件营销、数据库营销、病毒营销。</div>

				<div class="extension_column1_right2">网络推广就是利用互联网进行宣传推广活动。是网络营销的一种方式，也是网络运营的重中之重，被推广对象可以是企业、产品、政府以及个人等等。</div>

			</div>


		</div>
	</div>

	<!-- 营销推广策划第一栏内容结束 -->

	<!-- 营销推广策划第二栏内容开始 -->
	<div id="extension_column2">
		<div class="extension_column2_content">
			<div class="extension_column2_top">网络<span>推广</span></div>

			<div class="extension_column2_bottom"><img src="http://localhost:82/Application/Home/public/images/extension100.png"></div>
		</div>
	</div>
	<!-- 营销推广策划第二栏内容结束 -->


	<!-- 营销推广策划第三栏内容开始 -->
	<div id="extension_column3">
		<div class="extension_column3_content"></div>
	</div>

	<!-- 营销推广策划第三栏内容结束 -->

	<!-- 营销推广策划第四栏内容开始-->
	<div id="extension_column4">
		<div class="extension_column4_content">
			<div class="extension_column4_top">推广<span>方法</span></div>



			<div class="extension_column4_bottom">



				<div class="extension_column4_left">
					

					<div class="extension_column4_bottom2">
						<div class="extension_column4_bottom3"><img src="http://localhost:82/Application/Home/public/images/10.jpg"></div>
						<div class="extension_column4_bottom4">微信网络推广法</div>
						<div class="extension_column4_bottom5">微信能够为企业提供一个塑造品牌的平台，并在此平台上实现销售，为企业提供一个搭建自有网络营销渠道的机会，将其它方式引进来的流量，沉淀到微信上实现转化。</div>
					</div>



					<div class="extension_column4_bottom2">
						<div class="extension_column4_bottom3"><img src="http://localhost:82/Application/Home/public/images/30.jpg"></div>
						<div class="extension_column4_bottom4">搜索引擎推广法</div>
						<div class="extension_column4_bottom5">用户寻找产品信息习惯直接在搜索引擎输入框中敲入相应关键词，若企业产品能在搜索引擎搜索结果中出现且排名靠前位置，势必会增加用户进入网站。</div>
					</div>



					<div class="extension_column4_bottom2">
						<div class="extension_column4_bottom3"><img src="http://localhost:82/Application/Home/public/images/50.jpg"></div>
						<div class="extension_column4_bottom4">论坛网站推广法</div>
						<div class="extension_column4_bottom5">注册多个论坛，每个论坛多个账号，把签名设为自己的网站。发表热门内容，自己顶自己帖子。注意换马甲，发布有争议性的标题内容。好的标题是论坛推广成败的100%。</div>
					</div>


					<div class="extension_column4_bottom2">
						<div class="extension_column4_bottom3"><img src="http://localhost:82/Application/Home/public/images/70.jpg"></div>
						<div class="extension_column4_bottom4">EDM邮件网站推广法
</div>
						<div class="extension_column4_bottom5">定期不定期的给网民送电子邮件，如我们的世阳动态就可以通过EDM的方式送给用户。世阳有新品了，我们可以把新品制作成一起EDM发出去。</div>
					</div>

				</div>







				<div class="extension_column4_right">

					<div class="extension_column4_bottom2">
						<div class="extension_column4_bottom3"><img src="http://localhost:82/Application/Home/public/images/20.jpg"></div>
						<div class="extension_column4_bottom4">及时通知QQ群网站推广法</div>
						<div class="extension_column4_bottom5">目前，客服订购组就采用这样方式在推广平台。效果甚佳 忍辱负重，不怕被踢。另外就是在QQ群是可以发群邮件的，例如你可以把你的网站的精彩内容在邮件中推荐。</div>
					</div>

					<div class="extension_column4_bottom2">
						<div class="extension_column4_bottom3"><img src="http://localhost:82/Application/Home/public/images/40.jpg"></div>
						<div class="extension_column4_bottom4">博客网站推广法</div>
						<div class="extension_column4_bottom5">软文要有发飙地方。一个是发到论坛，文章帖，一个是发到博客里。发到博客里有个好处，不会被乱删除。</div>
					</div>


					<div class="extension_column4_bottom2">
						<div class="extension_column4_bottom3"><img src="http://localhost:82/Application/Home/public/images/60.jpg"></div>
						<div class="extension_column4_bottom4">媒体网络推广法</div>
						<div class="extension_column4_bottom5">让传统的媒体，报纸，电视，广播等等报道。现在基本上所有的传统媒体都有网络版，比如央视cntv，解放日报。</div>
					</div>

					<div class="extension_column4_bottom2">
						<div class="extension_column4_bottom3"><img src="http://localhost:82/Application/Home/public/images/80.jpg"></div>
						<div class="extension_column4_bottom4">软文网站推广法</div>
						<div class="extension_column4_bottom5">微信能够为企业提供一个塑造品牌的平台，并在此平台上实现销售，为企业提供一个搭建自有网络营销渠道的机会，将其它方式引进来的流量，沉淀到微信上实现转化</div>
					</div>

				</div>

			</div>

		</div>
	</div>

	<!-- 营销推广策划第四栏内容结束 -->

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