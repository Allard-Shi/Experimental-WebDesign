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
<title>用户中心</title>
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
  background-color: #33CC66;<!--背景可改-->
  background-size: 100%;
  height: 300px
 }
 .nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover 
 {
    color: #fff;
    background-color:rgb(115, 181, 135);
}

a {
    color: #65756a;
}

.nav-pills>li>a {
    border-radius: 0px;
}
</style>
</head>

<body >
<script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<?php
   require dirname(_FILE_)."/php/root/header.inc.php";
?>

<div class="jumbotron masthead"  id="banner_1">
   <div class="container">
        <div class="col-sm-6" style="color: white">
        <div id="icon" style="float: left;">
    <img src="photos/icon3.png" class="img-circle img-responsive img-thumbnail" height="150px" width="150px" style="margin-top:50px;">
    </div>
    <div id="personal info" style="float: left;margin-left: 30px;margin-top: 40px">
	  <h2 id="User_Name">张三</h2>
    <span id="Occupation">游客</span><span>&nbsp;|&nbsp;</span>
    <span id="Detail">所属团体未知</span>
    </div>

		</div>
		<div class="col-sm-6" >

		
		
		
		
		</div>
		
   </div>
</div>

<div id="nav2">
<div class="container" style="background: white;">
<ul class="nav nav-pills" style="margin: 10px">
  <li class="active"><a href="#User_Info" data-toggle="pill" role="tab">个人信息</a></li>
  <li><a href="#Rese_Record" data-toggle="pill" role="tab">预约记录</a></li>
  <li><a href="#User_Sggst" data-toggle="pill" role="tab">意见反馈</a></li>
  <li><a href="#User_Cre" data-toggle="pill" role="tab">信用评级</a></li>
</ul>
</div>
</div>

<div class="container" style="background: white; height: 500px;margin: 0 auto">
<div class="tab-content" id="mytable">
<div id="User_Info" class="tab-pane fade in active">
<?php
  require dirname(_FILE_)."/user/User_info.php";
?>
</div>
<div id="Rese_Record" class="tab-pane fade">
<?php
  require dirname(_FILE_)."/user/User_ReservationRecord.php";
?>
</div>

<div id="User_Sggst" class="tab-pane fade">
<?
  require dirname(_FILE_)."/user/User_Suggestion.php";
?>
  
</div>

<div id="User_Cre" class="tab-pane fade">


</div>

</div>
</div><!--mytable-->
<?php
   require dirname(_FILE_)."/php/root/foots.inc.php";
?>
</body>