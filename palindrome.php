<?php



//same logic used in JS Assignment
$numberData = $_GET['numbers'];

  function isPalindrome($str) {
    // Remove non-alphanumeric characters and convert to lowercase
    $str = preg_replace("/[^A-Za-z0-9]/", "", strtolower($str));

    // Compare the original string with its reverse
    return ($str === strrev($str));
  }


  // Check if the input is a palindrome
  if (isPalindrome($numberData)) {
    $response['status'] = true;
    $response['string'] = $numberData;
  } else {
    $response['status'] = false;
    $response['string'] = $numberData;
  }
  echo json_encode($response);




?>