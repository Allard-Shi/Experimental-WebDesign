<!DOCTYPE html>
<?php
/*
=====================================
Copyright:Xian Jiaotong University
Auther:Li Yamin  Shi Wen  Zhang Yifan
===================================== 
Date:2017-7-10
Web:


*/
define("PT_AT",true);
define("C_K",true);
?>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<title>关于</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="http://www.bootcss.com/p/buttons/css/buttons.css">
<style type="text/css">
 body
 {
  background-color: #EDEDED;
  font-family: '微软雅黑' 'sans-serif';
  color: #333;
 }
 #banner_1
 {
  background-image:url('photos/banner3.jpg');
  background-size: 100%;
  height: 300px;
 }
 ul.nav-tabs{
        width: 200px;
        margin-top: 20px;
        border-radius: 4px;
        border: 1px solid #ddd;
        box-shadow: 0 1px 4px rgba(0, 0, 0, 0.067);
    }
    ul.nav-tabs li{
        margin: 0;
        border-top: 1px solid #ddd;
    }
    ul.nav-tabs li.active a, ul.nav-tabs li.active a:hover{
        color: #fff;
        background: #0088cc;
        border: 1px solid #0088cc;
    }
</style>
</head>
<body data-spy="scroll" data-target="#scrollspy">
<script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<?php
   require dirname(_FILE_)."/php/root/header.inc.php";
?>

<div class="jumbotron masthead"  id="banner_1">
   <div class="container">
        <h1 class="animate-box" style="color: white;margin-top:50px;magrin-left:150px;">关于我们</h1>
        <p class="lead" style="color: white;">西安交通大学生物医学工程系学生开发团队</p>
   </div>
</div>
<div class="container" id="container_1">
    <div class="row">
      <div class="col-xs-3" id="scrollspy">
		<ul class="nav nav-tabs nav-stacked" data-spy="affix" data-offset-top="150">
		<li class="active"><a href="#section-1">关于我们</a></li>
        <li><a href="#section-2">特别鸣谢</a></li>
        <li><a href="#section-3">加入我们</a></li>
		</ul>
      </div>
      <div class="col-xs-9"><!--进行改善-->
        <article class="post page">
          <section class="post-content">
            <h2 id="section-1">关于我们</h2>
            <p>我们是西安交通大学2015届生物医学工程Web开发团队，致力于着手开发新型、可靠地网站框架结构。</p><!--（<a href="">xxx</a>）-->
			<p>欢迎参观或使用的该实验室预约管理系统的同学或老师为我们提出宝贵的建议! </p>
            <h2 id="section-2">特别鸣谢</h2>
            <p>特别鸣谢西安交通大学生物医学与仪器研究所的老师提供这次机会以及致力于Bootstrap开发的工作人员所提供的技术支持！ </p>
            <h2 id="section-3">加入我们</h2>
            <p>该平台致力于统筹管理位于西安交通大学生物医学与仪器研究所的几十台设备，实时了解其使用情况并跟新相关数据。 </p>
            <p>如果你也是西交大的一名普通学生，也热爱前端开发，欢迎和我们联系，更欢迎你加入我们的团队！</p>
            <p>Mail: </p>
          </section>
        </article>
      </div>
    </div>

  </div>



<!--Bottom Copyright-->
<?php
   require dirname(_FILE_)."/php/root/foot.inc.php";
?>
</body>
</html>