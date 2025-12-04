<?php 
session_start();
if (isset($_SESSION['id'])) { ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home Page - Student Hub</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" href="favicon.png">
</head>
<body class="body-home">
    <div class="container-fluid" style="margin-top: 10px">
    	<div id="id_picture">
    		<img src="default_picture.jpeg" height="200" 
    		width="200 ">
    	</div>
    	<div id="student_info" style="margin-top: 10px;">
    		<h5><?=$_SESSION['username']?></h5>
    		<h4><?=$_SESSION['fname']?> <?=$_SESSION['lname']?></h4>
    	</div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>	
</body>
</html>
<?php 
} else {
	header("Location: ../what.php");
	exit;
} ?>