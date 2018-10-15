
# Thinkphp3.23-teaching-project

该项目来源于52自学网的Thinkphp整站开发教程的录制,该项目视频教程地址：http://www.52zxw.com/kecheng_141.html

>简介：前台由html/css/javascript/jquery代码构成，涉及到了很多css3动画的讲解、兼容的处理、页面的布局技术。
后台由thinkphp3.23/mysql/bootstrap构成,涉及到前后台分离、模版引擎渲染、响应式开发、php的无限极分类、权限管理系统等重要知识点。


# 安装

**第一步：环境的配置，在官网下载：wamp3.0进行php环境搭建，这里默认下载到E盘，使用IIS的童鞋需要清除所有IIS的设置之后方能安装成功，同时安装过程中，会提醒童鞋们有一些缺失的文件，需要去下载，在百度上搜索下载下来，然后卸载重新安装wamp3.0，循环往复。直到安装过程中不再报错。这这里一定要非常有耐心。同时在我爱自学网的thinkphp整站开发视频教程当中也有配置的视频教程:http://www.52zxw.com/kecheng_141.html**


**第二步：在E:\wamp3.0目录下会看到www文件夹，清空www文件夹内所有内容将github下载的所有文件放到www文件夹内**


**第三步：数据库配置：将数据库帐号密码都设置为root,具体配置如下：打开命令行工具cmd.将路径切换到E:\wamp\bin\mysql\mysql5.7.14\bin  然后输入命令：mysqladmin -uroot password root 回车后，重启wamp,在浏览器打开localhost/phpmyadmin帐号和密码都用root登录。新建一个数据库，数据库名为tinkps 排序规则选择为utf8_general_ci  将下载的项目文件中的tinkps.sql导入该创建的数据库中**


**第四步：配置thinkphp项目的入口文件index.php,将下面代码中的SITE_URL常量的定义改为http://localhost**
<pre>

// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);

// 定义应用目录
define('APP_PATH','./Application/');


define('SITE_URL','http://localhost:82');

// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';

</pre>

**第五步：重启wamp,浏览器地址栏上搜索localhost即可看到前台页面搜索http://localhost/Admin/Login/可看到后台管理的登录页面：账户：admin 密码：12 有验证码，小心多输入几次，即可登录**


>对该项目如有任何想法，请在github上评论，或添加微信minlongdemeng，期待您的评论


# 其他
1. thinkphp3.23的API手册：https://www.kancloud.cn/manual/thinkphp/1716
2. bootstrap的中文手册：https://v3.bootcss.com/css/
3. 因为该项目采用了伪静态的处理，所以需要对wamp的文件稍微配置下，参考该文件：https://www.cnblogs.com/qlone/p/7676768.html
.htaccess请勿变动，其他都可以照此配置
4. 因为该项目涉及到了很多css3动画效果，童鞋们可以在该网址学到动画的入门知识：http://www.w3school.com.cn/css3/index.asp

