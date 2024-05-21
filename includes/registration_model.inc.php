<?php
declare(strict_types=1);

 function get_email(object $pdo, string $email){
 $query = "SELECT email FROM Users WHERE email= :email;";
 $stmt=$pdo-> prepare($query);
 $stmt->bindParam(":email",$email);
 $stmt-> execute();

 $result= $stmt->fetch(PDO::FETCH_ASSOC);
 return $result;
 }

 function set_user(object $pdo, string $email,  string $password, string $firstName, string $lastName) {
    // $userQuery = "INSERT INTO Users (email, password ) VALUES (:email, :password)";
    // $userStmt = $pdo->prepare($userQuery);
    // 

    // $userID = $pdo->lastInsertId();

    // // Insert contact into Contact table with User_ID as foreign key
    // $contactQuery = "INSERT INTO Contact (User_ID, first_name, last_name) VALUES (:userID, :firstName, :lastName)";
    // $contactStmt = $pdo->prepare($contactQuery);
    // $contactStmt->bindParam(":userID", $userID);
    // $contactStmt->bindParam(":firstName", $firstName);
    // $contactStmt->bindParam(":lastName", $lastName);
    // $contactStmt->execute();
   
        // $userInsertQuery = "INSERT INTO Users (email,password) VALUES ( ?, ?);";
        // $stmt = $pdo->prepare($userInsertQuery);
        // $stmt->execute([$email, $password]);
        // $options= [
        //         'cost'=>12
        //     ];
        //     $hashedPwd = password_hash($password,PASSWORD_BCRYPT,$options);
        //     $stmt->bindParam(1, $email);
        //     $stmt->bindParam(2, $hashedPwd);
        //     $stmt->execute();

        // $userId = $pdo->lastInsertId();

        // $contactInsertQuery = "INSERT INTO Contact (User_ID, first_name, last_name) VALUES (?, ?, ?);";
        // $stmtContact = $pdo->prepare($contactInsertQuery);
        // $stmtContact->execute([$userId, $firstName, $lastName]);

 }
