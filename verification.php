<?php
session_start();
$con = mysqli_connect('localhost','root');
mysqli_select_db($con , 'dtumess');

if (!$_POST['username_stud']) {
	$username = $_POST['username_operator'];
	$pass = $_POST['password'];
	$check = "select * from operator_login where username='$username' and password='$pass'";
	$result = mysqli_query($con , $check);
	$row=mysqli_num_rows($result);
	after_check($row,,0,$username);
}
else {
	$username = $_POST['username_student'];
	$pass = $_POST['password'];
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
