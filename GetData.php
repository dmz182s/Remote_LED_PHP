<?php

require_once('koneksi.php');

// $sql = "SELECT * FROM led ";

// $result = array();

// while($row = mysqli_fetch_array($r)){
//     array_push($result,array(
//         "id"=>$row['id'],
//         "power"=>$row['power'],
//         "time"=>$row['time']
//     ));
// }
// echo json_encode(array('result'=>$result));

$sql = mysqli_query($db, "SELECT * FROM `led` ORDER BY `id` DESC");

$result = array();

while ($row = mysqli_fetch_assoc($sql)) {
    $result[] = $row;
}

// var_dump($result);

echo json_encode([
    "status" => 'ok',
    "result" => $result
]);
die();