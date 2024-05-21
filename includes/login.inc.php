<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $pwd = $_POST["password"];
     try {
        require_once 'cred.php';
        require_once 'connect.php';
        require_once 'login_model.inc.php';
        require_once 'login_contr.inc.php';
        require_once 'config_session.inc.php';

        $errors = [];
        if (empty($email) || empty($pwd)) {
            $errors["empty_input"] = "Fill in both email and password!";
        }
        if (empty($errors)) {
            // Continue with the database query only if there are no input errors
            $query = $pdo->prepare("SELECT * FROM Users WHERE email = ?");
            $query->execute([$email]);
            $result = $query->fetch(PDO::FETCH_ASSOC);
            if (empty($result) || !password_verify($pwd, $result['password'])) {
                $errors["login_incorrect"] = "Incorrect Login Info!";
            }
        }
        

        // $query = $pdo->prepare("SELECT * FROM Users WHERE email = ?");
        // $query->execute([$email]);
        // $result = $query->fetch(PDO::FETCH_ASSOC);
        // $result = get_user($pdo, $email);
    
    //   if (is_email_wrong($result) || password_verify($password, $result['password']) ) {
    //         $errors["login_incorrect"] = "Incorrect Login Info!";
    //     }

        

        // if (is_password_wrong($pwd, $result["password"])) {
        //     $errors["login_incorrect"] = "Incorrect Login Info!";
        // && is_password_wrong($pwd, $result["password"])}
        

        if (!empty($errors)) {
            // Redirect with errors if any
            $_SESSION["errors_login"] = $errors;
            header("location:../index.php");
            die();
        }
        // if ($errors) {
        //     $_SESSION["errors_login"] = $errors;
        //     header("location:../index.php");
        //     die();
        // }

        $newSessionId = session_create_id();
        $sessionId = $newSessionId . "_" . $result["User_ID"];
        session_id($sessionId);
        $_SESSION["user_id"] = $result["User_ID"];
        $_SESSION["user_email"] = htmlspecialchars($result["email"]);
        $_SESSION["last_regeneration"] = time();
        header("Location:profile.php");
        exit();
    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }
} else {
    header("location:../index.php");
    die();
}
?>
