<?php
 define("C_K",true);
 require dirname(_FILE_). "/cookie_start.php";
 _clearcookie();
 header("location:./../../homepage.php");
?>