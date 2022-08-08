<?php

require_once('koneksi.php');

$sql = mysqli_query($db, "SELECT * FROM `led` ORDER BY `id` DESC LIMIT 1");

$result = mysqli_fetch_assoc($sql);

if($result['power']) {
    echo "on";
} else {
    echo "off";
}

die();