 <?php
 require_once 'config_session.inc.php';
 require_once 'registration_view.inc.php';
?> 

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
		<title>lab10</title>
		<meta name="description" content="Title of Site">
		<meta name="author" content="Author Name">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/normalize.css"> 
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/style.css ">
		<!--[if lt IE 9]>
	  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  
</head>
<body>
    <div class="registration_page">
        <section id="description">
            <h1>Lab 10</h1>	
        </section>
        <div class="content">
        <?php
            check_registration_errors();
            ?>
            <form class="registration" method="post" action="registration.inc.php">
                <h3>Registration Form</h3>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-6 col-sd-12">
                            <label for="firstName">First Name</label>
                            <span class="format">* Letters only (non-case-sensitive, can include a space)</span>
                            <br>
                            <input type="text" name="firstName" id="firstName" tabindex="0" class="form-control">
                            <div class="error"></div>
                            <br>
                            <label for="lastName">Last Name</label>
                            <span class="format">* Letters only (non-case-sensitive, can include an apostrophe or hyphen)</span>
                            <br>
                            <input type="text" name="lastName" id="lastName" class="form-control">
                            <br>
                            <label for="email">Email</label>
                            <span class="format">* Must follow the traditional email format (allow for 2, 3, and 4 character domains)</span>
                            <br>
                            <input type="email" name="email" id="email" class="form-control">
                            <br>
                            <!-- <label for="confrimEmail">Email</label>
                            <span class="format">* Re-Enter Email(Must match with given email)</span>
                            <br> -->
                            <!-- <input type="email" name="confrimEmail" id="confrimEmail" class="form-control">
                            <br> -->
                            <label for="password">Password</label>
                            <span class="format">* At least 8 characters, include at least one number, one uppercase letter, one lowercase letter, and one special character.</span>
                            <br>
                            <input type="password" name="password" id="password" class="form-control">
                            <br>
                            <label for="confirmpwd">Confirm Password</label>
                            <span class="format">* Must match password.</span>
                            <br>
                            <input type="password" name="confirmpwd" id="confirmpwd" class="form-control">
                            <br>
                            <input type="submit" id="register" value="Register"  class="form-control" > 
                            
                    </div>
                </div>
                </div>
            </form>
            
        </div>
    </div>
    <footer>
        <p>DGIN 5100 &copy;Rashik Mahmud Orchi</p>
    </footer>

    <script src="js/script.js"></script>
    
</body>
</html>