<?php
session_start();

if (isset($_SESSION["user_id"])) {
    $user_id = $_SESSION["user_id"];
    $user_email = $_SESSION["user_email"];

    try {
        require_once 'cred.php';
        require_once 'connect.php';

        // Query the Contact table to get first name and last name
        $contactQuery = $pdo->prepare("SELECT first_name, last_name FROM Contact WHERE User_ID = ?");
        $contactQuery->execute([$user_id]);
        $contactResult = $contactQuery->fetch(PDO::FETCH_ASSOC);

        if ($contactResult) {
            $first_name = $contactResult['first_name'];
            $last_name = $contactResult['last_name'];
        }
    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }
} else {
    header('Location:../index.php');
    exit();
}

$hour = date('G');
$greeting = 'Good ';
if ($hour >= 5 && $hour < 12) {
    $greeting .= 'Morning';
} elseif ($hour >= 12 && $hour < 17) {
    $greeting .= 'Afternoon';
} else {
    $greeting .= 'Evening';
}
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
		<link rel="stylesheet" href="../css/style.css">
		<!--[if lt IE 9]>
	  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  
</head>
<body>
<header>
  <h2><?php echo $greeting; ?>!!</h2>
    <h1>Welcome to Your Profile Page</h1>
   
</header>
    <div class="profile_page">

        <main>
        <div class="profile-info">
            <h3>User Information</h3>
            <div class="display"><strong> Email:</strong><?php echo htmlspecialchars($user_email); ?></div>
            <div class="display"><strong>First Name: </strong><?php echo htmlspecialchars($first_name); ?></div>
            <div class="display"> <strong>Last Name: </strong><?php echo htmlspecialchars($last_name); ?></div>
       <a href="logout.inc.php"><button>Logout</button></a>
    </main>
    </div>
    <footer>
        <p>DGIN 5100 &copy;Rashik Mahmud Orchi</p>
    </footer>

    <script src="js/script.js"></script>
    
</body>
</html>

