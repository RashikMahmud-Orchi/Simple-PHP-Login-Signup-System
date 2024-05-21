<?php
declare(strict_types=1);

function check_registration_errors(){
    if(isset($_SESSION["errors_registration"])){
    $errors = $_SESSION["errors_registration"];

    echo "<br>";
    foreach($errors as $error){
        echo '<p class="form-error">' . $error . '</p>';
    }
    unset($_SESSION["errors_registration"]);
    }elseif(isset($_GET["signup"])&& $_GET["signup"]==="success"){
         echo '<br>';
         echo '<p class="form-success"> Registration Successful! </p>' ;
    }
}