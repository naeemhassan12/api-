<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

    include "db.php";

    $stmt = "SELECT * FROM countries";
    $result = mysqli_query($conn, $stmt);

    if(mysqli_num_rows($result) > 0 ){
        $output = mysqli_fetch_all($result,MYSQLI_ASSOC);
        echo json_encode($output);
    }
    else {
    echo json_encode(array('message' => 'No Record Found.', 'status'=> false));
}


?>