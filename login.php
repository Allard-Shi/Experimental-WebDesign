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
session_start();
?>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="Login" content="登录页面">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Login</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<!--jQuery code initial-->
	<link rel="stylesheet" type="text/css" href="jquery.popup.css">
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript" src="jquery.popup.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script type="text/javascript" src="js/create_code.js"></script><!--处理验证码-->
	
    <style type="text/css">
    .container{
    	width: 400px;
    	margin-left: auto;
    	margin-right: auto;
    	background: rgba(243,243,243,0.5);
    	height: 340px;
    	border-radius: 10px 10px 10px 10px;
    	margin-top: 150px;
    }
    body{background: #F7FAFC;overflow: hidden;background: #fff;color: #333;}
    #canvas{
    	/*display: inline-block;*/
    	position: absolute;
    	z-index: -1;
    	top: 0px;
    	left: 0px;
    }
    #bottom{
    	height: 100px;
    	text-align: center;
    	background: #b8b8b8;
    	margin-top: 150px;
    	color: white;
    	line-height: 20px;
    	padding: 5px;
    }
    body{
    	font-family: '微软雅黑' 'sans-serif';
    }
	<!--Error-->
	alert_buttom {	
		color: #FFF;
		display:  block;
		padding: 20px;
		margin: 20px;
		text-decoration: none;
		background-color: #3A75B8;
		text-align:center;
	}

	alert_win {
		display:none;
		background:#7AB0DE;
		padding:30px;
		text-align:center;
	}

    </style>
  </head>

  <body>
  <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  	<canvas id="canvas" ></canvas>
	<script type="text/javascript" src="js/activebackground.js"></script>
<?php
   require dirname(_FILE_)."/php/root/header.inc.php";
?>
    <div class="container">
     <form class="form-signin" name="login_action" method="post" action="php/dealLogin.php"><!--处理登录表单-->
        <h2 class="form-signin-heading" style="text-align: center;">Reservation</h2>
        </br>
		<div class="form-group">
        <label for="inputNetID" class="sr-only"></label>
        <input id="inputNetID" name="inputNetID" class="form-control" placeholder="NetID" required autofocus style="margin-bottom:8px">
        <label for="inputPassword" class="sr-only"></label>
        <input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Password" required>
		</div>
		<div class="form-group">
        <input class="col-lg-5" type="text" style="height:30px;"id="input_yzm" name="yzm_code" maxlength="4" class="form-control" placeholder="vertification" required autofocus></input>
		<div class="col-lg-7"><div style="float:right;"><img style="width:120px;height:30px;"id="code" name="code" src="php/vertification.php"><a onclick="create_code();">&nbsp;&nbsp;看不清？</a></div>
		</div></div>
		<div class="form-group">
        <div class="checkbox" style="float:left;">
          <label><input name="remember-me" type="checkbox" value="1">记住我</label>
        </div>
		<div style="float:right;margin-top:10px;"><a href="./findcode.php">忘记密码?</a></div><!网址指定>	
		</div>
        <button id="login_buttom" class="btn btn-lg btn-info btn-block" type="submit">登录</button>
	</form>
	<br>
	<!--注册功能实现-->
    <a class="btn btn-lg btn-info btn-block" type="summbit" href="signin.php">注册</a>
    </div> <!-- /container -->     
    <div id="bottom">
    <span>Copyright© 2017 by soupee-sw version 2.0</span>
    </div>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>