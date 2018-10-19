<?php
    define("DA",true);
	if ($_POST['verti']!="ccc"){
		exit("Wrong Access!");
	}
    else{
	//header('content-type:application/json;charset=utf8'); 
	require dirname(_FILE_). "/public_function/database_init.php";
	$machine_name=$_POST["name"];
	$sqlstr="Select Machine_Name, Machine_Description, Machine_Use from Machine where Machine_Name='".$machine_name."'";
	$result =mysqli_query($link,$sqlstr);
    $row=mysqli_fetch_array($result);
	echo json_encode($row);
	mysqli_close($link);
    }

?>