<?php
require_once 'includes/login_view.inc.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
		<title>lab10</title>
		<meta name="description" content="Title of Site">
		<meta name="author" content="Author Name">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/normalize.css"> 
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<!--[if lt IE 9]>
	  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  
</head>
<body>
    <div class="page">
        <h1>Log In</h1>
        <div class="login">
            <form class="login-form" method="post" action="includes/login.inc.php">
                <div class="form-group">
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter Your Email">
                </div>
                <div class="form-group">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter Your Password">
                </div>
                <div class="form-group">
                    <input type="submit" id="login" value="LogIn" class="form-control">
                </div>
            </form>
            <?php
            check_login_errors();
            ?>
            <div class="reg-info">
                <p>Don't have an account? Register here</p>
                <a href="includes/registration.php">
                    <button>Register New Account</button>
                </a>
            </div>
        </div>
    </div>

    <footer>
        <p>DGIN 5100 &copy;Rashik Mahmud Orchi</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
