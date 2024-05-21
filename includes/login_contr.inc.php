<?php
declare(strict_types=1);

function is_input_empty(string $email,string $password){
    if( empty($email) && empty($password)){
        return true;
    }else{
        return false;
    }

}
function is_email_wrong( $result){
    if(!$result){
        return true;
    }else{
        return false;
    }
    
}

function is_password_wrong(string $pwd, string $hashedPwd){
    if(!password_verify($pwd, $hashedPwd)){
        return true;
    }else{
       return false;
    }  
}