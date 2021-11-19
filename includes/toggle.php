<?php
session_start();

if (isset($_GET['id']) && isset($_GET['type'])) {
    
    require_once('../config/db.php');
    $id = $_GET['id'];
    $type = $_GET['type'];

    $sql = "SELECT status FROM $type WHERE id = $id";
    $result = $conn->query($sql);
    $status = $result->fetch_array(MYSQLI_ASSOC);

    if ($status['status'] == 'off') {
        $sql = "UPDATE $type SET status = 'on' WHERE id = $id";
    } else {
        $sql = "UPDATE $type SET status = 'off' WHERE id = $id";
    }

    $result = $conn->query($sql);
    header("Location: ../posts.php?type=".$type."");


} else {
    header("Location: ../dashboard.php");
}