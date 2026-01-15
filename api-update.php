<?php
header('Content-type: Application/JSON');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Method: PUT');
$data = json_decode(file_get_contents("php://input"), true);

$id = $data['id'];
$city = $data['city'];
$code = $data['code'];

    include "db.php";

$stmt = "UPDATE students SET name = '{$name}',  city='{$city}' WHERE id = {$id} ";
$result = mysqli_query($conn,$stmt);

    if($result){
 echo json_encode(array('message' => 'Update Record Successfully.', 'status'=> true));

} 
else {
    echo json_encode(array('message' => 'No Record Update.', 'status'=> false));
}






?>


<p>
    testing
</p>
<p>tetete</p>
<p>
    tetetet
</p>