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
define("RP_CO",true);
define("C_K",true);
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Equipments</title>
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
  background-color: #33CC66;
  background-size: 100%;
  height: 400px
 }
     #bottom{
    	height: 50px;
    	background: white;
    	color:grey;
    	padding: 15px;
    }
    .nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover 
    {
    background-color: #33CC66;
}
a {
    color: grey;
    text-decoration: none;
}
.btn-success {
    color: #fff;
    background-color: rgb(51, 204, 102);
    border-color: #33cc66;
}
.btn-success:hover{
    background-color: rgb(126, 218, 156);
    border-color: #a8e4bc;
    color: #fff;
}
.modal-backdrop{z-index:0;}
.caption{
	height:150px;
	
}
</style>
</head>
<body>
<script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script>
$(document).ready (function(){
$("#1-1,#1-2,#1-3,#1-4,#1-5,#1-6,#1-7,#1-8").click(function(){
    $.post("php/reservation_demo.php",{name:$(this).attr("name"),verti:"ccc"},
	function(data,status){
	  var obj=$.parseJSON(data);
      var head="<h4>注意事项</h4><br>";
      $("#context_example").html(head);
      $("#context_example").append(obj.Machine_Description);
	  $("#context_head").html(obj.Machine_Name);
	  $("#useintro").html(obj.Machine_Use);
    });
	});
$("#page1-1,#page1-2,#page1-3,#page1-4,#page1-5,#reserv1").click(function(){
    $.post("php/reservation_reser1_page.php",{name:$(this).attr("id"),verti:"ddd"},
	function(data,status){
		var obj=JSON.parse(data);
		$("#1-1").html(obj[0].Machine_Name);$("#1-1").attr("name",obj[0].Machine_Name);$("#1-1").children(".small").html("lalala");
	    //$("#1-2").html(obj[1].Machine_Name);$("#1-2").attr("name",obj[1].Machine_Name);
	    //$("#1-3").html(obj[2].Machine_Name);$("#1-3").attr("name",obj[2].Machine_Name);
	    //$("#1-4").html(obj[3].Machine_Name);$("#1-4").attr("name",obj[3].Machine_Name);
	    //$("#1-5").html(obj[4].Machine_Name);$("#1-5").attr("name",obj[4].Machine_Name);
	    //$("#1-6").html(obj[5].Machine_Name);$("#1-6").attr("name",obj[5].Machine_Name);
	    //$("#1-7").html(obj[6].Machine_Name);$("#1-7").attr("name",obj[6].Machine_Name);
	    //$("#1-8").html(obj[7].Machine_Name);$("#1-8").attr("name",obj[7].Machine_Name);
    });
	});
/*$("#page2-1,#page2-2,#page2-3,#page2-4,#page2-5,#reserv2").click(function(){
    $.post("php/reservation_reser2_page.php",{name:$(this).attr("id"),verti:"eee"},
	function(data,status){
		var obj=JSON.parse(data);
		$("#2-1").html(obj[0].Machine_Name);
	    $("#2-2").html(obj[1].Machine_Name);
	    $("#2-3").html(obj[2].Machine_Name);
	    $("#2-4").html(obj[3].Machine_Name);
	    $("#2-5").html(obj[4].Machine_Name);
	    $("#2-6").html(obj[5].Machine_Name);
	    $("#2-7").html(obj[6].Machine_Name);
	    $("#2-8").html(obj[7].Machine_Name);
    });
	});*/
});
</script>

<!--导航栏-->
<?php
   //require dirname(_FILE_)."/php/root/header.inc.php";
?>
<nav class="navbar navbar-default">
    <div class="container">
    <div class="top">
    <div class="logo">
      <a href="#"><h2>MEDEEP-AI</h2></a>
    </div>
  
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
      <div id="navbar" class="navbar-collapse navbar-right collapse hover-effect">
        <ul class="nav navbar-nav" style="float: right;">
          <li><a href="#home" class="scroll">首页</a></li>
          <li><a href="#about" class="scroll">简介</a></li>
          <li><a href="#services" class="scroll">服务</a></li>
          <li><a href="#contact" class="scroll">联系我们</a></li>
           <?php
		  include "./php/public_function/cookie_start.php";
          //include "./php/public_function/database_init.php";
          if(_judge()==3){
			  echo"
			  <li><a href='./usercenter.php'>".$_COOKIE['username']."</a></li>
			  <li class='dropdown'>
              <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
               <img src='photos/icon3.png' class='img-circle img-responsive img-thumbnail' height='35px' width='35px' style='margin-top:-10px;'> <span class='caret'></span>
                 </a>
			  <ul class='dropdown-menu'>
                <li><a href='./usercenter.php'>个人中心</a></li>
				<li><a href='./equipments.php'>开始预约</a></li>
                <li class='divider'></li>
                <li><a href='php/public_function/cookie_exit.php'>退出</a></li>
                </ul>
			  </li>
			  ";	  
          }
          else{
           echo "<li><a href='./login.php'>登录|注册</a></li>";
		}
		 ?>
        </ul>
      </div>
      <div class="header-search" >
        <div id="sb-search" class="sb-search" >
          <form action="#" method="post">
            <input class="sb-search-input" name="search" placeholder="Enter your search term..." id="search" required="">
            <input class="sb-search-submit" type="submit" value="">
            <span class="sb-icon-search"> </span>
          </form>
          <div class="clearfix"> </div>

          <!-- search-scripts -->
          <script src="js/classie.js"></script>
          <script src="js/uisearch.js"></script>
            <script>
              new UISearch( document.getElementById( 'sb-search' ) );
            </script>
          <!-- //search-scripts -->

        </div>
      </div>

      <div class="clearfix"></div>
      </div>
    </div>

  </nav>
<!--Banner-->
<div class="jumbotron masthead"  id="banner_1">
   <div class="container">
        <h1 id="title11" class="animate-box" style="color: white;margin-top: 150px;font-size: 50px" align="center">实验室预约管理系统</h1>
        <p style="color: white;" align="center">西安交通大学生物分析技术与仪器研究所</p>
		<p class="masthead-button-links">
        <!--<a class="btn btn-lg btn-primary btn-shadow" href="http://ibati.xjtu.edu.cn/" target="_blank" role="button" onclick="_hmt.push(['_trackEvent', 'masthead', 'click', 'know_more1'])">进入官网</a>-->
      </p>
   </div>
</div>
<!--中间主体部分-->
<div id="vertical nav">
<div class="container" style="margin-top: 30px;margin-bottom: 30px;background: white">
    <div class="row">
      <div class="col-xs-3" style="background: white;">
        <div class="span6">
            <ul class="nav nav-pills nav-stacked nav-list " role="navigation">
                <li class="nav-header" style="font-weight: bold;color: grey;font-size: 16px;margin-top: 30px" >实验室北110室</li>
                <li class="active"><a href="#intro1" data-toggle="pill" role="tab">实验室介绍</a></li>
                <li><a id="reserv1" href="#reservation1" data-toggle="pill" role="tab">实验室器材预约</a></li>
                <!--<li><a href="#">Applications</a></li>-->
                <li class="nav-header"  style="font-weight: bold;color: grey;font-size: 16px;margin-top: 30px">实验室236室</li>
                <li><a href="#intro2" data-toggle="pill" role="tab">实验室介绍</a></li>
                <li><a id="reserv2" href="#reservation2" data-toggle="pill" role="tab">实验室器材预约</a></li>
                <li class="nav-header"  style="font-weight: bold;color: grey;font-size: 16px;margin-top: 30px">实验室注意事项</li>
				<li><a href="#standard" data-toggle="pill" role="tab">实验室守则</a></li>
				<li><a href="#duty" data-toggle="pill" role="tab">实验室管理人员职责</a></li>
            </ul>
        </div>
     </div>
 <div class="col-xs-9">
 <div class="tab-content" id="mytable"><!--tab-content-->
<?php
  require dirname(_FILE_)."/lab/Lab_intro1.php";
  require dirname(_FILE_)."/lab/Lab_intro2.php";
  require dirname(_FILE_)."/reser/Reservation_ch1.php";
  require dirname(_FILE_)."/reser/Reservation1.php";
  require dirname(_FILE_)."/reser/Reservation2.php";
  require dirname(_FILE_)."/lab/Lab_Standard.php";
  require dirname(_FILE_)."/user/User_duty.php";
?>	  	
</div>
<!--pill-content-->
</div>
</div>
</div>
</div>
<!--Bottom Copyright-->
<?php
   require dirname(_FILE_)."/php/root/foot.inc.php";
?>
</body>
</html>