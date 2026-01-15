<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Method: POST');

$data = json_decode(file_get_contents("php://input"), true);

$city = $data['city'];
$code = $data['code'];

include "db.php";

    $stmt = "INSERT INTO countries (name,code) VALUES('{$city}','{$code}')";
    $result = mysqli_query($conn, $stmt);

    if ($result) {
        echo json_encode(array('message' => ' Record Add Successfully.', 'status' => true));
    } else {
        echo json_encode(array('message' => 'No Record Added.', 'status' => false));
    }


?>
