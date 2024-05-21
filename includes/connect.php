<?php
 include_once "cred.php";
try {                                           //try-catch is used for handling exceptional situations, especially those that might cause the script to terminate unexpectedly
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//setAttribute: Method to set attributes on a PDO instance. PDO::ATTR_ERRMODE: Attribute controlling error reporting mode.PDO::ERRMODE_EXCEPTION: Value indicating that PDO should throw exceptions on errors.

} catch (PDOException $e) {
    echo "Connection Failed: " . $e->getMessage();//getMessage() is a built-in method of the \Exception class in PHP. When an exception is thrown, it contains information about the error, and getMessage() is a method that allows  to retrieve the error message associated with the exception.   
}

