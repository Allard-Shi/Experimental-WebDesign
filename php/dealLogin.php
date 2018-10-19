<?php
   session_start();
   define("C_K",true);
   define("DA",true);
   if($_SESSION["code"]==$_POST["yzm_code"]){
	 include "./public_function/cookie_start.php";
	 include "./public_function/database_init.php";
	 _clearcookie();
     $inputnetid=mysqli_real_escape_string($link,$_POST['inputNetID']);
     $inputpassword=mysqli_real_escape_string($link,$_POST['inputPassword']);
     $remremberme=mysqli_real_escape_string($link,$_POST['remember-me']);
	 if($remremberme==1){
	   $remremberme=1;
	 }
     else{
	   $remremberme=0;
     }
     $sqlstr="select * from User where User_Name='".$inputnetid."' and User_Password='".$inputpassword."'";
     $result =mysqli_query($link,$sqlstr);
     $row=mysqli_fetch_array($result);
	   if($row['User_Name']==$inputnetid&&$row['User_Password']==$inputpassword){
           _setcookies($inputnetid,$inputpassword,$remremberme);
		  header("location:./../equipments.php"); 
		  //echo _judge();
		  
        }else{
        /*echo "		
		<script language=javascript>history.back();</script>";
		echo"
		<div id='alert_window'>
			<a class='close' href='#'>CloseWindow</a><br/>
		</div>
		<script type='text/javascript'>
			$('#login_buttom').popup({
				top:'50px',
				overlay:0.5,
				focus:'#input',
				close:'.close'
			});
		</script>
		
		";*/
        }
   mysqli_close($link);
   }
   else{
	   exit("No Access Error 302!!");//return back code installed
	   sleep(3);
	   header("location:./../login.php"); 
   }

?>