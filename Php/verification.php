<?php
session_start();

	include '../includes/db.php'; 

if (!$_POST['username_student']) {
	$username = filter_var($_POST['username_operator'],FILTER_SANITIZE_STRING);
	$pass = filter_var($_POST['password'],FILTER_SANITIZE_STRING);
	$check = "select * from operator_login where username='$username' and password='$pass'";
	$result = mysqli_query($con , $check);
	$row=mysqli_num_rows($result);
	after_check($row,0,$username);
}
else {
	$username = filter($_POST['username_student'],FILTER_SANITIZE_STRING);
	$pass =filter( $_POST['password'],FILTER_SANITIZE_STRING);
	$check = "select * from stud_login where username='$username' and password='$pass'";
	$result = mysqli_query($con , $check);
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
			echo "<script>window.location.href='dash1.php';</script>";
		}
		else {
			echo "<script>window.location.href='student.php';</script>";	
		}	
	 }
}
mysqli_close($con);
?>
