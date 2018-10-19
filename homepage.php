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
define("PT_AT",true);//头尾调用
define("NI",true);//
define("C_K",true);//cookie调用
?>
<html>
<head>
<meta http-equiv="content-type" content="text/html" charset="utf-8">
<title>主界面</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="http://www.bootcss.com/p/buttons/css/buttons.css">
<style type="text/css">
 body
 {
  background-color: #EDEDED
  font-family: '微软雅黑' ,sans-serif;
  color: #333;
 }
 #banner_2
 {
  background-color:#FFFFFF
 }
  #bottom{
      height: 50px;
      background: white;
      color:grey;
      padding: 15px
    }
	
</style>
</head>
<body>
<script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
  function func_check(){
	   var keyword = document.getElementById('Web_Search').value;
	   if(keyword==null||keyword==""){
            alert("请输入你要检索的内容！");
            return false;
        }
  }
  </script>
<?php
   require dirname(_FILE_)."/php/root/header.inc.php";
   require dirname(_FILE_)."/php/root/headers.inc.php";
   
?>
<div class="bs-docs-featurette">
  <div class="container" id="banner_2">
  <h2 class="text-center" class="bs-docs-featurette-title">实验室设备预约流程</h2>
    <h4  class="text-center">只需三个步骤即可完成预约功能</h4>
	<div class="row">
	<div class="col-sm-4">
	<h4 class="text-center">步骤一</h3>
	<img style="height:200px;margin-left:80px; " src="./photos/logo/title1.jpg"><!--增添数字1-->
	<h3 class="text-center" style="color: ">注册登录</h3>
	</div>
	<div class="col-sm-4">
	<h4 class="text-center">步骤二</h4>
	<img style="height:200px;margin-left:80px;" src="./photos/logo/title2.jpg"><!-- 增添数字2-->
	<h3 class="text-center" style="color: ">选择仪器</h3>
	</div>
	<div class="col-sm-4">
	<h4 class="text-center">步骤三</h4>
	<img style="height:200px;margin-left:80px;" src="./photos/logo/title3.jpg"><!-- 增添数字3-->
	<h3 class="text-center" style="color: ">预约时间</h3>
	</div>
	</div>
	<form><!--判断登录状态-->
  <div align="center"> 
  <a href="./equipments.php" class="btn btn-lg btn-success" style="margin-top: 30px;margin-bottom: 50px;letter-spacing: 3px;width:200px;text-align: center;">开始预约</a>
  </div>
  </form>
  </div>
</div>
<!--Bottom Copyright-->
<?php
 require dirname(_FILE_)."/php/root/foot.inc.php";
?>
</body>
</html>