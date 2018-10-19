<?php
   session_start();
   define("C_K",true);
   define("DA",true);
if($_SESSION["code"]==$_POST["findcode_vertification"]){
	 include "./public_function/cookie_start.php";
	 include "./public_function/database_init.php";
	 _clearcookie();
	 $remremberme=1;
	 $inputnetid=mysqli_real_escape_string($link,$_POST['User_Name']);
	 $question=mysqli_real_escape_string($link,$_POST['question']);
	 $Answer=mysqli_real_escape_string($link,$_POST['User_Answer']);
	 $sqlstr="select * from User where User_Name='".$inputnetid."'";
     $result =mysqli_query($link,$sqlstr);
	 $row=mysqli_fetch_array($result);
	   if($row['User_Name']==$inputnetid&&$row['User_Question']==$question&&$row['User_Answer']==$Answer){
           _setcookies($inputnetid,$row['User_Password'],$remremberme);
		   mysqli_close($link);
		  header("location:./../renewcode.php"); 	  
        }
		else{
		//修改
		echo'错误答案！！';
			
		}
		
		
		
		
}





else{
	  exit("验证码错误!!!"); 
}
?>