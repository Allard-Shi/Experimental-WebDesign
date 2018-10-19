<?php
   $valid=true;
   header('Content-type: application/json');
   $link=mysqli_connect("localhost","root","12345678","web_project");
   $username=$_POST['User_Name'];
   $sql="select * from User where User_Name='$username'";
   $query=mysqli_query($link,$sql);
   $row=mysqli_num_rows($query);
   if($row>0){
	  $valid=false;
   	  echo json_encode(array('valid' => $valid,));
   }else{
	  
   	  echo json_encode(array('valid' => $valid,));
   }

  

?>