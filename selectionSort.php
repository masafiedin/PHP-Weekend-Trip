<?php

$numberData = $_GET['numbers'];

// turn string to array
$numbers = explode(',', $numberData);
$response =[];

if(count($numbers)>0){
    for ($i = 0; $i < count($numbers) - 1; $i++) {
        $min_index = $i;
        for ($j = $i + 1; $j < count($numbers); $j++) {
            if ($numbers[$j] < $numbers[$min_index]) {
                $min_index = $j;
            }
        }
        if ($min_index != $i) {
            $temp = $numbers[$i];
            $numbers[$i] = $numbers[$min_index];
            $numbers[$min_index] = $temp;
        }
    }
    $response["response"] = "string sorted";
    $response["numbers"] = $numbers;
}else{
    $response["response"] = "invalid input";
    $response["numbers"] = null;

}





echo json_encode($response);

?>
