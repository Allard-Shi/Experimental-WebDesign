<?php
     session_start();
	 define("C_K",true);
//
    if($_POST["action"]=="register")
	{
		if($_POST["signin_vertification"]!==$_SESSION["code"]){
		echo "验证码输入错误！";
		}
		else{
			$mysqli=mysqli_connect("localhost","root","12345678","web_project");
			if(mysqli_connect_errno()){
	           printf("connect failed:%s\n",mysqli_connect_errno());
	           exit();
            }else{
            	$_username=mysqli_real_escape_string($mysqli,$_POST['User_Name']);
            	$_userpassword=mysqli_real_escape_string($mysqli,$_POST['User_Password2']);
            	$_usermail=mysqli_real_escape_string($mysqli,$_POST['User_Mail']);
            	$_usertel=mysqli_real_escape_string($mysqli,$_POST['User_Tel']);
            	$_usersex=mysqli_real_escape_string($mysqli,$_POST['optionsRadiosinline']);
            	$_useranswer=mysqli_real_escape_string($mysqli,$_POST['User_Answer']);
            	$_userquestion=mysqli_real_escape_string($mysqli,$_POST['question']);
				$_usercredit=1;

            	$sql="INSERT INTO User(User_Name,User_Sex,User_Password,User_Mail,User_Tel,User_Question,User_Answer,User_Credit)
            	VALUES('".$_username."','".$_usersex."','".$_userpassword."','".$_usermail."','".$_usertel."','".$_userquestion."','".$_useranswer."','".$_usercredit."')";
            	$res=mysqli_query($mysqli,$sql);
	            if($res==TRUE){
		        //添加中间3秒
				include "./public_function/cookie_start.php";
				_setcookies($_username,$_userpassword,0);
				header("Location: ./../equipments.php"); 
	            }else{
		        printf("Could not insert record:%s\n",mysqli_error($mysqli));
	            }
	            mysqli_close($mysqli);
            }
		}
	}
	else{
		echo "错误！";
	}















?>