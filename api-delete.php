<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Method: DELETE');

$data = json_decode(file_get_contents("php://input"), true);

$id = $data['sid'];

include "db.php";

$stmt = "DELETE FROM countries WHERE id = {$id}";
$result = mysqli_query($conn,$stmt);

if($result){
 echo json_encode(array('message' => 'Delete Record Successfully.', 'status'=> true));

} 
else {
    echo json_encode(array('message' => 'Delete Not Record .', 'status'=> false));
}