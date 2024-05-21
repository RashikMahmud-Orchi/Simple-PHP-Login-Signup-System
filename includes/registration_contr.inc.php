<?php
declare(strict_types=1);

function is_input_empty(string $firstname, string $lastname,string $email,string $password,string $confirmpwd){
    if(empty($firstname) ||empty($lastname) || empty($email) ||empty($password) ||empty($confirmpwd)  ){
        return true;
    }else{
        return false;
    }

}

function is_email_invalid(string $email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

function is_email_taken(object $pdo, string $email) {
    if (get_email($pdo, $email)) {
        return true;
    } else {
        return false;
    }
}

function is_email_registered(object $pdo, string $email) {
    $result = get_email($pdo, $email);

    if (!empty($result)) {
        return true;
    } else {
        return false;
    }
} 

function validate_password($password) {
    $pattern = '/^(?=.*[A-Z])(?=.*\d)(?=.*[^\w\d\s]).{8,}$/';

    if (!preg_match($pattern, $password)) {
        return true;
    }

    return false;  
}

function confirm_password(string $password, string $confirmpwd) {
    if ($password===$confirmpwd) {
        return true;
    } else {
        return false;
    }
}

// function create_user(object $pdo, string $firstname, string $lastname,string $email,string $password) {
//     set_user( $pdo,$email, $password, $firstname, $lastname);
// } 