<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
		<title><?php echo ($metas['title']); ?></title>
	<meta name="description" content="<?php echo ($metas['descc']); ?>">
	<meta name="keywords" content="<?php echo ($metas['keywords']); ?>">
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="http://localhost:82/Application/Home/public/css/reset.css">
	<link rel="stylesheet" type="text/css" href="http://localhost:82/Application/Home/public/css/export_art.css">
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


					<?php if(is_array($navlist)): $i = 0; $__LIST__ = $navlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
						<a <?php if(isset($vo['items'])): ?>href="javascript:void(0)"<?php else: if($vo["id"] == 1): ?>href="<?php echo ($vo["url"]); ?>"<?php else: ?>href="<?php echo ($vo["url"]); ?>/<?php echo ($vo["id"]); ?>"<?php endif; endif; ?>><?php echo ($vo["catename"]); ?></a>
						<?php if(isset($vo['items'])): ?><ol class="hover_li">
							<?php if(is_array($vo['items'])): $i = 0; $__LIST__ = $vo['items'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($voo["url"]); ?>/<?php echo ($voo["id"]); ?>"><?php echo ($voo["catename"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
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

	<!-- 专家顾问banner图内容开始 -->
	<div id="banner11">
		<div class="banner11_img"></div>
	</div>
	<!-- 专家顾问banner图内容结束 -->

	<!-- 专家顾问文章页主体内容 -->
	<div id="exar">
		<div class="exar_con">
			<!-- 左边盒子 -->
			<div class="exar_con_left">
				<div class="exar_left_top">
					<div class="exar_left_top1"><span><?php echo ($cons[0]['shotitle']); ?></span></div>
					<div class="exar_left_top2">时间：<?php echo (date("Y-m-d",$cons[0]['times'])); ?> | 点击：<?php echo ($cons[0]['browse']); ?>次</div>
					<div class="exar_left_top3">
						<?php echo htmlspecialchars_decode($cons[0]['con']);?>
					</div>
				</div>
				

								<div class="exar_left_bottom">

					<div class="exar_left_bottom1">
						<div>客户案例</div>
						<div><a href="/casesssss/17">MORE</a></div>
					</div>
					<div class="exar_left_bottom2">
						<?php if(is_array($caselists)): $i = 0; $__LIST__ = $caselists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="exar_left_bottom3">
							<div class="exar_left_bottom4"><a href="/casepnews/<?php echo ($vo["cateid"]); ?>/<?php echo ($vo["id"]); ?>"><img src="/<?php echo ($vo["pic"]); ?>" width="300" height="194"></a></div>
							<div class="exar_left_bottom5"><?php echo ($vo["shotitle"]); ?></div>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
					</div>
				</div>
				
			</div>

			<!-- 右边盒子 -->
			<div class="exar_con_right">
				<div class="exar_right_top">
					<div class="exar_right_top1">专家顾问</div>
					<div class="exar_right_top2"><a href="/Export/<?php echo ($cons[0]['cateid']); ?>">MORE</a></div>
				</div>


				<div class="exar_right_middle">
					<ul>
						<?php if(is_array($exportlist)): $i = 0; $__LIST__ = $exportlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="/exportnews/<?php echo ($vo["cateid"]); ?>/<?php echo ($vo["id"]); ?>"><?php echo (date("Y-m",$vo["times"])); ?> · <?php echo ($vo["shotitle"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>

					</ul>
				</div>


				<div class="exar_right_bottom">
					<div class="exar_right_bottom1">扫码下方二维码，关注我们！</div>

					<div class="exar_right_bottom2"><img src="http://localhost:82/Application/Home/public/images/footer1.jpg"></div>

					<div class="exar_right_bottom3">
<div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"24"},"share":{},"image":{"viewList":["qzone","tsina","tqq","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
					</div>
				</div>



			</div>


		</div>
	</div>

	<!-- 专家顾问文章页主体内容 -->

<div class="clearfix"></div>
<!-- 底部图片引入内容开始 -->

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