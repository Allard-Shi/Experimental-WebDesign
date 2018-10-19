<?
   session_start();
   define("C_K",true);
   define("DA",true);
   include "./public_function/cookie_start.php";
   include "./public_function/database_init.php";
   $_code=mysqli_real_escape_string($link,$_POST['Code2']);
   $_username=$_COOKIE['username'];
   $sqlstr="select * from User where User_Name='".$_username."'";
   $result =mysqli_query($link,$sqlstr);
   $row=mysqli_fetch_array($result);
   _clearcookie();
   $sql="UPDATE User SET User_Password='".$_code."' where User_Name='".$_username."'";
   $res=mysqli_query($link,$sql);
   _setcookies($_username,$_code,0);
   mysqli_close($link);
   header("Location: ./../equipments.php"); 
?>