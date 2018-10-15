<?php
return array(
	//'配置项'=>'配置值'
	'TMPL_PARSE_STRING'=>array(
		'__PUBLIC__'=>SITE_URL.'/Application/Home/public',
	),
	'URL_ROUTER_ON'         =>  true,   // 是否开启URL路由
	'URL_ROUTE_RULES'=>array(
		
		// 专家顾问文章页的路由
		'exportnews/:cateid\d/:id\d'  => 'Export/export_article',

		// 公司动态文章页
		'compnews/:cateid\d/:id\d'  => 'News/news_article',

		// 客户案例文章页
		'casepnews/:cateid\d/:id\d'  => 'Cases/case_article',

		// 单页的路由
		'Website/:cateid\d'    => 'Website/website',
		'Small/:cateid\d'    => 'Small/small',
		'Marketing/:cateid\d'    => 'Marketing/marketing',
		'Brand/:cateid\d'    => 'Brand/brand/',
		'Whole/:cateid\d'    => 'Whole/whole',
		'Extension/:cateid\d'    => 'Extension/extension',
		'Active/:cateid\d'    => 'Active/active',
		'Export/:cateid\d'    => 'Export/export',
		'About/:cateid\d'    => 'About/about',

		// 新闻动态列表页的路由
		'news/:cateid\d'    => 'News/news',
		'newss/:cateid\d'    => 'News/newss',

		// 客户案例列表页的路由
		'casesssss/:cateid\d'    => 'Cases/casesssss',
		'casess/:cateid\d'    => 'Cases/casess',
		'casesss/:cateid\d'    => 'Cases/casesss',
		'casessss/:cateid\d'    => 'Cases/casessss'

	),
	'MODULE_ALLOW_LIST' => array ('Home','Admin'),
    'DEFAULT_MODULE' => 'Home'

);