<?php
	require_once "koneksi.php";

	$id=$_POST['id'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$fullname=$_POST['fullname'];
	$level=$_POST['level'];

	mysqli_query($cn,"INSERT INTO tlogin values ('$id','$username','$password','$fullname','$level')");

	header('location: tampil_user.php');
?>