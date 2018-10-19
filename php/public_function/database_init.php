<?php
if(!defined("DA")){
	exit("No Access!");
}
   $servername="localhost";
   $username="root";
   $password="12345678";
   $dbname="web_project";
   $link=mysqli_connect($servername,$username,$password,$dbname);
   mysqli_query($link,"set names utf8");
?>