<?php

require_once('koneksi.php');

date_default_timezone_set("Asia/Jakarta");

$jsonData = json_decode(file_get_contents("php://input"), true);

if (is_array($jsonData) && array_key_exists('power', $jsonData)) {
    $power = $jsonData['power'];
} else {
    $power = isset($_POST['power']) ? $_POST['power'] : null;
}


$time = date("Y-m-d H:i:s");
$update = mysqli_query($db, "INSERT INTO `led`(`power`, `time`) VALUES ('$power','$time')") or die(mysqli_error($db));

echo json_encode(['result' => $update]);
die();