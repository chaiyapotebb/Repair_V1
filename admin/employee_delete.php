<?php

include('condb.php');

	$user_id  = mysqli_real_escape_string($con,$_GET["user_id"]);

	// remove Remove image in folder
	$sql_delete = "SELECT * FROM tbl_login WHERE user_id = '".$user_id."'"; //คิวรี่ข้อมูลออกมา
	$result_delete = mysqli_query($con, $sql_delete) or die ("Error in query: $sql_delete " . mysqli_error($con));	
	$row = mysqli_fetch_array($result_delete);
	$path = "upload/"; //path ที่ไว้เก็บรูปภาพ		
	$newname = $row['u_img']; //ฟิวที่ใว้เก็บชื่อรูปภาพในฐานข้อมูล			 
	$file=$path.$newname;
	if (unlink($file)){  
		echo ("deleted $file");
	} else {
		echo ("error");
	}
	
	$sql = "DELETE FROM tbl_login WHERE user_id=$user_id";
	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));	
	mysqli_close($con);

		
	if($result){
	echo '<script>';
    echo "window.location='employee.php?do=delete';";
    echo '</script>';
	}else{
	echo '<script>';
    echo "window.location='employee.php?act=add&do=f';";
    echo '</script>';
}

?>