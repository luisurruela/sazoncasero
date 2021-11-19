<?php
session_start();

// include composer autoload
require '../vendor/autoload.php';
require '../libraries/Zebra_Image-master/Zebra_Image.php';

if (isset($_POST) && isset($_POST['add'])) {

    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $img = $_POST['image'];
    $type = $_POST['type'];

    if ($type == 'platillo') {
        $db_table = 'specials';
        $destino = '../uploads/specials/';
        $thumbs_path = '../uploads/specials-cropped/';
        $msg = "Platillo guardado correctamente.";
    }

    if ($type == 'guarnicion') {
        $db_table = 'sides';
        $destino = '../uploads/sides/';
        $thumbs_path = '../uploads/sides-cropped/';
        $msg = "Guarnición guardada correctamente.";
    }

    if ($type == 'bebida') {
        $db_table = 'drinks';
        $destino = '../uploads/drinks/';
        $thumbs_path = '../uploads/drinks-cropped/';
        $msg = "Bebida guardada correctamente.";
    }

    if ($type == 'postre') {
        $db_table = 'deserts';
        $destino = '../uploads/deserts/';
        $thumbs_path = '../uploads/deserts-cropped/';
        $msg = "Postre guardado correctamente.";
    }

    if (isset($_FILES) && $_FILES['image']['size'] > 0) {
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
    }

    $img = new Zebra_Image();
    $img->source_path = $destino . $filename;
    $img->target_path = $thumbs_path. $filename;
    $img->resize(300, 300, ZEBRA_IMAGE_CROP_CENTER);

    require_once("../config/db.php");

    $sql = "INSERT INTO $db_table (title, description, image, status) VALUES ('$title', '$desc', '$filename', 'off')";
    $result = $conn->query($sql);

    if (!$result) {
        $response = [
            'status'        => 'error',
            'message'       => 'Error al guardar el platillo.'
        ];

        $_SESSION['response'] = $response;
        header("Location: ../dashboard.php");
    } else {
        $response = [
            'status'        => 'success',
            'message'       => $msg
        ];

        $_SESSION['response'] = $response;
        header("Location: ../dashboard.php");
    }

} else {
    header("Location: ../dashboard.php");
}