<?php
/*session_start();

require_once '../libraries/Zebra_Image-master/Zebra_Image.php';
require_once("../config/db.php");

$img = new Zebra_Image();
$img->source_path = $destino . $filename;
$img->target_path = $thumbs_path. $filename;
$img->resize(300, 300, ZEBRA_IMAGE_CROP_CENTER);

$sql = "SELECT * FROM drinks";
$result = $conn->query($sql);
$items = $result->fetch_all(MYSQLI_ASSOC);

foreach ($items as $item) {
    
    $filename = $item[image];
    $destino = '../uploads/drinks/';
    $thumbs_path = '../uploads/drinks-cropped/';

    $img = new Zebra_Image();
    $img->source_path = $destino . $filename;
    $img->target_path = $thumbs_path . $filename;
    $img->resize(300, 300, ZEBRA_IMAGE_CROP_CENTER);

}

die();*/