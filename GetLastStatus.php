<?php

require_once('koneksi.php');

$sql = mysqli_query($db, "SELECT * FROM `led` ORDER BY `id` DESC LIMIT 1");

$result = mysqli_fetch_assoc($sql);

echo json_encode([
    "status" => 'ok',
    "result" => $result
]);
