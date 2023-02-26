<?php 
		echo '<meta charset="utf-8">';
		include('condb.php');
		// echo "<pre>";
		// print_r($_POST);
		// echo "</pre>";
		// exit();

	$username = mysqli_real_escape_string($con,$_POST["username"]);
	$password = mysqli_real_escape_string($con, hash('sha512', $_POST["password"]));
	$u_name = mysqli_real_escape_string($con,$_POST["u_name"]);
	$u_lastname = mysqli_real_escape_string($con,$_POST["u_lastname"]);
	$u_tel = mysqli_real_escape_string($con,$_POST["u_tel"]);
	$u_email = mysqli_real_escape_string($con,$_POST["u_email"]);
	$user_level = mysqli_real_escape_string($con,$_POST["user_level"]);

	//เช็คซํ้า
	$check = "SELECT username, u_email FROM tbl_login
				WHERE username = '$username'
				OR u_email = '$u_email'
			";
	$result1 = mysqli_query($con, $check) or die ("Error in query: $check " . mysqli_error($con));
	$num = mysqli_num_rows($result1);

	if ($num > 0) {
		echo '<script>';
		echo "window.location='employee.php?do=check';";
		echo '</script>';
		exit();
		
	} else {

		$sql = "INSERT INTO tbl_login
		(
		username,
		password,
		u_name,
		u_lastname,
		u_tel,
		u_email,
		user_level
		)
		VALUES
		(
		'$username',
		'$password',
		'$u_name',
		'$u_lastname',
		'$u_tel',
		'$u_email',
		'$user_level'
		)";

	} // check

	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
	mysqli_close($con);

	if($result){
	echo '<script>';
    echo "window.location='employee.php?do=success';";
    echo '</script>';
	}else{
	echo '<script>';
    echo "window.location='employee.php?do=f';";
    echo '</script>';
}
?>