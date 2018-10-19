<?
session_start();
/*
=====================================
Copyright:Xian Jiaotong University
Auther:Li Yamin  Shi Wen  Zhang Yifan
===================================== 
Date:2018-4-10
Web:


*/
define("PT_AT",true);
define("C_K",true);
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
  height: 305px;
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
<div class="navbar-wrapper">
<div class="container">
   <?php
   require dirname(_FILE_)."/php/root/header.inc.php";
   if (_judge()!=3){
	exit("错误代码301"
	);
}
   ?>
   <form id="form_reset" class="form-horizontal" name="resetcode" action="./php/coderenew.php" method="post" role="form">
   <input class="form-control" type="hidden" name="action" value="resetcode"><!--交互设计form_1-->

  <div class="form-group"><!--密码1-->
   <label class="col-lg-3 control-label">&nbsp;&nbsp;新&nbsp;密&nbsp;码</label>
   <div class="col-lg-5">
   <input id="newcode1" type="text" name="Code1" maxlength="12" class="form-control" placeholder="New Code" required autofocus />
   </div>
   <label class="col-lg-4 control-label" style="text-align:left;"></label>
   </div>
   <br>
  
   <div class="form-group"><!--密码2-->
   <label class="col-lg-3 control-label">&nbsp;重&nbsp;置&nbsp;密&nbsp;码</label>
   <div class="col-lg-5">
   <input id="newcode2" type="text" name="Code2" maxlength="12" class="form-control" placeholder="Code" required autofocus />
   </div>
   <label class="col-lg-4 control-label" style="text-align:left;"></label>
   </div>
   <br>
   
   <div class="form-group">
   <div class="col-lg-3"></div>
   <div class="col-lg-5">
   <button class="btn btn-lg btn-info btn-block" type="submit"  name="findcode_button" id="Findcode_Button" style="text-align:center;float:right;">更改密码</button>
   </div>
   </div>
  
   </form>
</div>
</div>
<script>
$(document).ready(function() {
    $('#form_reset')
        .bootstrapValidator({
            message: '',
            //live: 'submitted',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: 
			{
				
			    Code1: {
                validators: {
                    notEmpty: {
                        message: '密码不能为空'
                    },
					stringLength: {
                            min: 8,
                            max: 16,
                            message: '密码长度为8-16字符'
                        },
                    }
                },
                Code2: {
                validators: {
                    notEmpty: {
                        message: '密码不能为空'
                    },
                    identical: {
                        field: 'User_Password1',
                        message: '密码不一致'
                    },
					stringLength: {
                            min: 8,
                            max: 16,
                            message: '密码长度为8-16字符'
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