<?php 
		echo '<meta charset="utf-8">';
		include('condb.php');
		// echo "<pre>";
		// print_r($_POST);
		// echo "</pre>";
		// exit();
			$user_id = mysqli_real_escape_string($con,$_POST["user_id"]);	
			$username = mysqli_real_escape_string($con,$_POST["username"]);
			$password = mysqli_real_escape_string($con, hash('sha512', $_POST["password"]));
			$u_name = mysqli_real_escape_string($con,$_POST["u_name"]);
			$u_lastname = mysqli_real_escape_string($con,$_POST["u_lastname"]);
			$u_tel = mysqli_real_escape_string($con,$_POST["u_tel"]);
			$u_email = mysqli_real_escape_string($con,$_POST["u_email"]);
			$user_level = mysqli_real_escape_string($con,$_POST["user_level"]);

			$sql = "UPDATE tbl_login SET 
				username='$username',
				password='$password',
				u_name='$u_name',
				u_lastname='$u_lastname',
				u_tel='$u_tel',
				u_email='$u_email',
				user_level='$user_level'
				WHERE user_id=$user_id
				 ";

	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
	mysqli_close($con);
	
	if($result){
	echo '<script>';
    echo "window.location='employee.php?do=finish';";
    echo '</script>';
	}else{
	echo '<script>';
    echo "window.location='employee.php?act=add&do=f';";
    echo '</script>';
}
?>