<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Student Portal</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" href="favicon.png">
</head>
<body class="body-login">
	<nav class="navbar navbar-expand-lg custom-navbar-bg">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#"><img src="white-logo.png" width="150"></a>
	    <div class="logo-text">Pioneer and Largest Network of Colleges in Asia</div>
	    <div class="title">Student Portal</div>
	  </div>
	</nav>
	<div class="d-flex justify-content-center align-items-center flex-column">
    	<form class="login" method="post" action="request/login_action.php">
    	  <h3>Login</h3>
    	  <?php if (isset($_GET['error'])) { ?>
    	  
    	  <div class="alert alert-danger" role="alert">
    	  	<?=$_GET['error']?>
    	  </div>
    	  <?php } ?>
		  <div class="mb-3">
		    <label class="form-label">Student ID</label>
		    <input type="text" 
		    class="form-control" name="stid">
		  </div>
		  
		  <div class="mb-3">
		    <label class="form-label">Password</label>
		    <input type="password" 
		    class="form-control" name="pass">
		  </div>

		  <button type="submit" class="custom-signin-button">
		  Sign In</button>
		</form>
	</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>	
</body>
</html>