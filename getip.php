<?php

//gets the ip address of the client
$ip_address = $_SERVER['REMOTE_ADDR'];


$response = [];

if(filter_var($ip_address, FILTER_VALIDATE_IP)){
    $response['status'] = true;
    $response['ip_address'] = $ip_address;
    
}else{
    $response['status'] = false;
    $response['ip_address'] = null;
}

echo json_encode($response);


?>