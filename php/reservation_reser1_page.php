<?php
    define("DA",true);
	//if ($_POST['verti']!="ddd"){
		//exit("Wrong Access!");
	//}
   // else{
	$_page[6]='1';
	require dirname(_FILE_). "/public_function/database_init.php";
	//$_page=$_POST['name'];
	switch($_page[6]){
		case('1'):
		$sqlstr="Select Machine_Name,Machine_Appendix from Machine where Machine_id in (1,2,3,4,5,6,7,8)";
		break;
		case('2'):
		$sqlstr="Select Machine_Name,Machine_Appendix from Machine where Machine_id in (9,10,11,12,13,14,15,16)";
		break;
		case('3'):
		$sqlstr="Select Machine_Name,Machine_Appendix from Machine where Machine_id in (17,18,19,20,21,22,23,24)";
		break;
		case('4'):
		$sqlstr="Select Machine_Name,Machine_Appendix from Machine where Machine_id in (25,26,27,28,29,30,31,32)";
		break;
		case('5'):
		$sqlstr="Select Machine_Name,Machine_Appendix from Machine where Machine_id in (33,34,35,36,37,38,39,40)";
		break;
	}
	$result =mysqli_query($link,$sqlstr);
	$rows=array();
	while ($row = mysqli_fetch_array($result)) {
		$rows[]=$row;
    }
	echo json_encode($rows);
	mysqli_close($link);	
    //}





?>