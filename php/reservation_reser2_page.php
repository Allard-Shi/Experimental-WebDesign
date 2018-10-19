<?php
    define("DA",true);
    if ($_POST['verti']!="eee"){
		exit("No Access!");
	}
    else{
	//header('content-type:application/json;charset=utf8'); 
	require dirname(_FILE_)."/public_function/database_init.php";
	$EX_num=$_POST["name"];
	if($EX_num=="reser1"){
		$_num="1";
	}
	else{
		$_num="2";
	}
	$sqlstr="Select Machine_Name from Machine where Machine_ID in (1,2,3,4,5,6,7,8)";
	$result =mysqli_query($link,$sqlstr);
    $row=mysqli_fetch_array($result);
	echo json_encode($row);
	mysqli_close($link);
    }
	
?>