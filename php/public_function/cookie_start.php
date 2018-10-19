<?php
define("DA",true);
if(!defined("C_K")){
	exit("No Access!");
}
else{
function _setcookies($_username,$_userpassword,$_time){
	if($_time==1){
		setcookie("username",$_username,time()+864000,'/');
	setcookie("userpassword",$_userpassword,time()+864000,'/');
	}elseif($_time==0){
		setcookie("username",$_username,time()+3600,'/');
	setcookie("userpassword",$_userpassword,time()+3600,'/');
	}
} 
function _judge(){
	if(isset($_COOKIE['username'])==1){
		if(isset($_COOKIE['userpassword'])==1){
			include "database_init.php";
			$sql="select * from User where User_Name='".$_COOKIE['username']."' and User_Password='".$_COOKIE['userpassword']."'";
			 $result =mysqli_query($link,$sql);
			 $row=mysqli_fetch_array($result);
			 if($row['User_Name']==$_COOKIE['username']&&$row['User_Password']==$_COOKIE['userpassword']){
			 	return 3;
			 }else{
			 	return 2;
			 }
			    mysql_close($link);
        }else{
	         return 1;
        }
		}else{
			 return 0;
		}
	}
function _clearcookie(){
	setcookie("username","",time()-1,'/');
	setcookie("userpassword","",time()-1,'/');
}


}
?>