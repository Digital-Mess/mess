<?php
session_start();

	include '../includes/db.php';

if ($_POST['hidden_parameter']=="username_operator") {
	$username = filter_var($_POST['username_operator'],FILTER_SANITIZE_STRING);
	$pass = filter_var($_POST['password'],FILTER_SANITIZE_STRING);
	$check = "select * from operator_login where username='$username' and password='$pass'";
	$result = mysqli_query($connection , $check);
	if(!$result){
		die('there is an error'.mysqli_error($connection));
	}
	$row=mysqli_num_rows($result);
	after_check($row,0,$username);
}
else {
	$username = filter_var($_POST['username_student'],FILTER_SANITIZE_STRING);
	$pass =filter_var( $_POST['password'],FILTER_SANITIZE_STRING);
	$check = "select * from stud_login where username='$username' and password='$pass'";
	$result = mysqli_query($connection , $check);
	$row=mysqli_num_rows($result);
	after_check($row,1,$username);
}

function after_check($x,$y,$z){
	if ($x==0) {
		echo "<script>window.location.href='login.php';</script>";
	}
	else {
		$_SESSION['user'] = $z;
		if ($y==0) {
			echo "<script>window.location.href='operator_chk.php';</script>";
		}
		else {
			echo "<script>window.location.href='student.php';</script>";
		}
	 }
}
mysqli_close($connection);
?>
