<?php
session_start();

if (isset($_POST)) {

    require_once('../config/db.php');
    
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $img = !empty($_FILES['image']['name']) ? $_FILES['image']['name'] : 'default.jpg';
    $type = $_POST['type'];
    $id = $_POST['id'];

    if (isset($_FILES) && $_FILES['image']['size'] > 0) {

        $sql = "UPDATE $type SET title = '$title', description = '$desc', image = '$img' WHERE id = $id";
        $result = $conn->query($sql);

        $mime_type = $_FILES['image']['type'];
        if ($mime_type == 'image/jpeg' || $mime_type == 'image/png' || $mime_type == 'image/gif') {
            $file = $_FILES['image']['tmp_name'];
            $filename = $_FILES['image']['name'];

            if (!move_uploaded_file($file, $destino . $filename)) {

                $response = [
                    'status'        => 'error',
                    'message'       => 'Error al guardar subir la imagen.'
                ];

                $_SESSION['response'] = $response;
                header("Location: ../dashboard.php");
                
            }
        }
    } else {

        $sql = "UPDATE $type SET title = '$title', description = '$desc' WHERE id = $id";
        $result = $conn->query($sql);
        
    }

    $_SESSION['response'] = [
        'status'            => 'success',
        'message'           => 'Se actualizó correctamente.'
    ];

    header("Location: ../edit.php?id=".$id."&type=".$type."");

} else {
    header("Location: ../dashboard.php");
}