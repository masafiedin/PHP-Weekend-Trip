<?php

include('connection.php');


$email = $_POST['email'];
$password = $_POST['password'];

$email_check = '/^\S+@\S+\.\S+$/';
$password_check= '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^\da-zA-Z]).{8,}$/';

$checkEmail = preg_match($email_pattern, $email);
$checkPass = preg_match($password_pattern, $password);

 if(checkEmail && $checkPass){
    $response['status'] = true;
 }else{
    $response['status'] = false;

 }
echo json_encode($response);

?>
