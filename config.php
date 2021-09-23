<?php

include 'connect.php';

session_start();

if(isset($_POST['saveBtn'])){

	$name = $_POST['name'];
	$email    = $_POST['email'];
	$phone    = $_POST['phone'];
	$desc    = $_POST['desc'];


		$query = "INSERT into enquiry (fullname,email,phone,detail) VALUES ('$name','$email','$phone','$desc')";

		$str = mysqli_query($conn,$query);
		Print_r($str);

		if($str)
		{
			//echo "success";
			$_SESSION['success'] = "Form Submit Successfully";
			header("location:enquiry.php");
		}
		else
		{
			$_SESSION['status'] = "Form not Submitted";
			header("location:enquiry.php");
		}
}

if(isset($_POST['registerbtn'])){

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$phone    = $_POST['phone'];
	$password = $_POST['password'];
	$cpassword= $_POST['confirmpassword'];

	if($password === $cpassword)
	{

		$query = "INSERT into user_tbl (fname,lname,gender,email,phone,password) VALUES ('$fname','$lname','$gender','$email','$phone','$password')";

		$str = mysqli_query($conn,$query);
//Print_r($str);
		if($str)
		{
			//echo "success";
			$_SESSION['success'] = "User profile added Successfully";
			header("location:register.php");
		}
		else
		{
			Print_r($str);
			$_SESSION['success'] = "User profile not added";
			header("location:register.php");
		}

	} else {
			$_SESSION['success'] = "Password and confirm password does not match";
			header("location:register.php");
	}
}

if(isset($_POST['loginbtn'])) {
	
	$email_login = $_POST['email'];
	$password_login = $_POST['password'];
	

	$query = "SELECT * from user_tbl where email='$email_login' AND password='$password_login'";

	$query_run = mysqli_query($conn,$query);

	if(mysqli_fetch_array($query_run)) 
	{
		$_SESSION['username'] = $email_login;
		
	    header("location:index.php");
	}
	else
	{
		$_SESSION['error'] = "Email id / Password Invalid";
	    header("location:login.php");
	}
}

if (isset($_POST['logout_btn'])) 
{
	session_destroy();
	unset($_SESSION['username']);
}




?>