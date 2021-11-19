<?php
session_start();

if (isset($_GET['id']) && isset($_GET['type'])) {

    require_once('../config/db.php');
    $id = $_GET['id'];
    $type = $_GET['type'];

    $sql = "SELECT * FROM $type WHERE id = $id";
    $result = $conn->query($sql);

    $item = $result->fetch_assoc();
    $image_path_large = '../uploads/' . $type . '/' . $item[image];
    $image_path_cropped = '../uploads/' . $type . '-cropped/' . $item[image];
    unlink($image_path_large);
    unlink($image_path_cropped);

    $sql = "DELETE FROM $type WHERE id = $id";
    $result = $conn->query($sql);

    $_SESSION['response'] = [
        'status'            => 'success',
        'message'           => 'Se eliminó correctamente.'
    ];

    header("Location: ../posts.php?type=".$type."");

} else {
    header("Location: ../dashboard.php");
}