<?php
session_start();

if (isset($_POST['stid']) && isset($_POST['pass'])) {
	$stid = $_POST['stid'];
	$pass = $_POST['pass'];

	include "../connection.php";

	if (empty($stid)) {
		$em = "Student ID is required";
		header("Location: ../login.php?error=$em");
		exit;
	} else if (empty($pass)) {
		$em = "Password is required";
		header("Location: ../login.php?error=$em");
		exit;
	} else {
		$sql = "SELECT * FROM students WHERE username = ?";

        $stmt = $conn->prepare($sql);
        $stmt->execute([$stid]);

        if ($stmt->rowCount() == 1) {
        	$user = $stmt->fetch();
        	$username = $user['username'];
        	$password = $user['password'];
        	$fname = $user['fname'];
        	$lname = $user['lname'];
        	$id = $user['id'];

        	if ($username == $stid) {
        		if (password_verify($pass, $password)) {
        			$_SESSION['id'] = $id;
        			$_SESSION['username'] = $username;
        			$_SESSION['fname'] = $fname;
        			$_SESSION['lname'] = $lname;
        			header("Location: ../student-portal/home.php");
        			exit;

        		} else {
		        	$em = "Student id or password is incorrect";
		        	header("Location: ../login.php?error=$em");
		        	exit;
	        	}

        	} else {
        	$em = "Student id or password is incorrect";
        	header("Location: ../login.php?error=$em");
        	exit;
        	}

        } else {
        	$em = "Student id or password is incorrect";
        	header("Location: ../login.php?error=$em");
        	exit;
        }
	} 

} else {
	header("Location: ../login.php");
	exit;
}