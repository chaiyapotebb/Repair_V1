<?php

include('condb.php');

	$status_id  = mysqli_real_escape_string($con,$_GET["status_id"]);
	$sql = "DELETE FROM tbl_status WHERE status_id=$status_id";
	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));	
	mysqli_close($con);

		
	if($result) {
		echo '<script>';
		echo "window.location='status.php?do=delete';";
		echo '</script>';	
	} else {
		echo '<script>';
		echo "window.location='status.php?act=add&do=f';";
		echo '</script>';
	}

?>