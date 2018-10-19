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
session_start();
?>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<title>Findcode</title>
<link href="bootstrap/css/bootstrapValidator.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap.css" rel="stylesheet" >
<!--导入1-->
<style type="text/css">
.container
{

  width: 800px;
  background: rgba(255,255,255,0.5);
  height: 475px;
  border-radius: 10px 10px 10px 10px;
  margin:100px auto;
  padding-top: 50px;
  padding-bottom: 30px;
}
 body
 {
  background-color: #EDEDED;
  font-family: '微软雅黑' 'sans-serif';
  color: #333;
 }
 #banner_1
 {
  background-size: 100%;
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
<script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script><!--导入javascript-->
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrapValidator.js"></script>
<script type="text/javascript" src="js/create_code.js"></script>
<div class="navbar-wrapper">
<div class="container">
   <?php
   require dirname(_FILE_)."/php/root/header.inc.php";
   ?>
   <form id="form_register" class="form-horizontal" name="findcode" action="./php/codefind.php" method="post" role="form">
   <input class="form-control" type="hidden" name="action" value="findcode"><!--交互设计form_1-->

   <div class="form-group"><!--用户名-->
   <label class="col-lg-3 control-label">&nbsp;&nbsp;用&nbsp;户&nbsp;名</label>
   <div class="col-lg-5">
   <input id="User_Name" type="text" name="User_Name" maxlength="12" class="form-control" placeholder="UserName" required autofocus />
   </div>
   <label class="col-lg-4 control-label" style="text-align:left;"></label>
   </div>
   <br>
  
   <div class="form-group"><!--验证问题-->
   <label class="col-lg-3 control-label">&nbsp;&nbsp;密保问题</label>
   <div class="col-lg-5">
   <select name='question' class="form-control"><!--需要改进一下-->
   <option name="question1" id="Question1" value="1">您居住的城市叫什么？</option>
   <option name="question2" id="Question2" value="2">您曾在哪一所小学上课？</option>
   <option name="question3" id="Question3" value="3">您的父亲叫什么？</option>
   <option name="question4" id="Question4" value="4">您最早乘坐飞机是去哪里？</option>
   <option name="question5" id="Question5" value="5">您小时候的好友名字是什么？</option>
   
   
   
   
   
   <!--有问题可以添加-->
   </select>
   </div>
   <label class="col-lg-4 control-label"></label>
   </div>
   <br>
   
   <div class="form-group"><!--密保答案-->
   <label class="col-lg-3 control-label">&nbsp;&nbsp;密保答案</label>
   <div class="col-lg-5">
   <textarea class="form-control" rows="3" name="User_Answer" id="User_Answer"></textarea>
   </div>
   <label class="col-lg-4 control-label" style="text-align:left;">不超过30个字符</label>
   </div> 
   
   
   <div class="form-group"><!--验证码-->
   <label class="col-lg-3 control-label">&nbsp;验&nbsp;证&nbsp;码</label>
   <div class="col-lg-3"><input id="YZM" name="findcode_vertification" maxlength="4" class="form-control"  required autofocus></input></div>
   <div class="col-lg-2"><img style="height:30px;text-align:left;" id="signin_code" name="signin_code" src="php/vertification.php"></div>
   <div class="col-lg-4">
   <a onclick="create_signin_code();" style="text-align:left;">&nbsp;&nbsp;看不清?</a>
   </div>
   </div>
   
   <div class="form-group">
   <div class="col-lg-3"></div>
   <div class="col-lg-5">
   <button class="btn btn-lg btn-info btn-block" type="submit"  name="findcode_button" id="Findcode_Button" style="text-align:center;float:right;">下一步</button>
   </div>
   </div>
  
   </form>
</div>
</div>
<script>
$(document).ready(function() {
    $('#form_register')
        .bootstrapValidator({
            message: '',
            //live: 'submitted',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
			User_Answer: {
                validators: {
                    notEmpty: {
                        message: '此项不能为空'
                    },
                }
            },
            }
        })
});
</script>
<!--Bottom Copyright-->
    <div id="bottom" class="text-center">
    <span>Copyright© 2017 by soupee-sw</span>
    </div>	
</body>
</html>