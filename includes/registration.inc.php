<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpwd= $_POST["confirmpwd"];
    // $bday = $_POST["bday"];


    try {
        require_once 'cred.php';
        require_once 'connect.php';
        require_once 'registration_model.inc.php';
        require_once 'registration_contr.inc.php';
        //Error Handlers
        $errors=[];
        if(is_input_empty($firstName, $lastName,$email,$password,$confirmpwd)){
            $errors["empty_input"]="Fill in all fields!";

        }
        if( is_email_invalid($email)){
            $errors["invalid_email"]="Enter a valid Email!";

        }
        if(validate_password($password)){
            $errors["invalid_password"]="Invalid Passowrd!";

        }
        if (!confirm_password($password, $confirmpwd)) {
            $errors["password_mismatch"] = "Passwords don't match!";
        }
        if( is_email_registered( $pdo, $email)){
            $errors["email_taken"]="Email Alreay Registered!";

        }

        require_once 'config_session.inc.php';

        if($errors){
            $_SESSION["errors_registration"]= $errors;
            header("location:registration.php");
            die();
        }
        $userInsertQuery = "INSERT INTO Users (email, password) VALUES (?, ?);";
        $stmt = $pdo->prepare($userInsertQuery);
        
        $options = [
            'cost' => 12
        ];
        $hashedPwd = password_hash($password, PASSWORD_BCRYPT, $options);
        
        $stmt->bindParam(1, $email);
        $stmt->bindParam(2, $hashedPwd);
        $stmt->execute();
        
        $userId = $pdo->lastInsertId();
        
        $contactInsertQuery = "INSERT INTO Contact (User_ID, first_name, last_name) VALUES (?, ?, ?);";
        $stmtContact = $pdo->prepare($contactInsertQuery);
        $stmtContact->execute([$userId, $firstName, $lastName]);
        
       
//   create_user($pdo, $firstName,  $lastName, $email, $password);
  header("location: ../index.php?signup=success");
  $pdo=null;
  $stmt=null;
   
die();
} catch (PDOException $e) {
    die("Query Failed: " . $e->getMessage());
}
} else {
header("Location:registration.php");
die();
}
