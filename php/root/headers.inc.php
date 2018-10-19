<?php
 if (!defined("PT_AT")){
	 exit("No Qulification！");
 }
 if (PHP_VERSION<"4.5.0"){
	exit("Low PHP Version!");
 }
 define("C_K",true);
?>
<style type="text/css">
#banner1
 {
  background-color: #33CC66;
  background-size: 100%;
  height: 400px
 }
 #banner2
 {
  background-color: #20B2AA;
  background-size: 100%;
  height: 400px
 }
 #banner3
 {
  background-image:url("photos/banner1.jpg");
  background-size: 100%;
  height: 400px
 }
</style>
<div id="myCarousel" class="carousel slide">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>   
    <div class="carousel-inner">
        <div class="item active">
        <div class="jumbotron masthead"  id="banner1">
        <div class="container">
        <h1 class="animate-box" style="color: white;;margin-top: 150px;font-size: 50px" align="center">实验室预约管理系统</h1>
        <p style="color: white;" align="center">西安交通大学生物分析技术与仪器研究所</p>
		<p class="masthead-button-links">
        <!--<a class="btn btn-lg btn-primary btn-shadow" href="http://ibati.xjtu.edu.cn/" target="_blank" role="button" onclick="_hmt.push(['_trackEvent', 'masthead', 'click', 'know_more1'])">进入官网</a>-->
        </p></div>
        </div>
        </div>
        <div class="item">
        <div class="jumbotron masthead"  id="banner2">
        <div class="container">
        <h1 class="animate-box" style="color: white;;margin-top: 150px;font-size: 50px" align="center">实验室预约管理系统</h1>
        <p style="color: white;" align="center">西安交通大学生物分析技术与仪器研究所</p>
		</div>
        </div>
        </div>
		
        <div class="item">
        <div class="jumbotron masthead"  id="banner3">
        <div class="container">
        <h1 class="animate-box" style="color: white;;margin-top: 150px;font-size: 50px" align="center">实验室预约管理系统</h1>
        <p style="color: white;" align="center">西安交通大学生物分析技术与仪器研究所</p>
		</div>
        </div>
        </div>
    </div>
	<a class="carousel-control left" href="#myCarousel" 
        data-slide="prev">&lsaquo;
    </a>
    <a class="carousel-control right" href="#myCarousel" 
        data-slide="next">&rsaquo;
    </a>
</div>
<script type="text/javascript">
   $('#myCarousel').carousel({
     interval:4500
   });
</script>