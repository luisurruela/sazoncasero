<?php

function getAllPosts($conn, $type) {
    $sql = "SELECT * FROM $type WHERE 1 ORDER BY created_at DESC";
    $result = $conn->query($sql);

    return $result;
}

function get_post($conn, $id, $type) {
    $sql = "SELECT * FROM $type WHERE id = '$id'";
    $result = $conn->query($sql);

    return $result->fetch_array();
}

function get_category($type) {
    switch($type) {
        case 'specials':
            $result = 'platillo';
            break;
        
        case 'sides':
            $result = 'guarnicion';
            break;

        case 'drinks':
            $result = 'bebida';
            break;

        case 'deserts':
            $result = 'postre';
            break;
    }

    return $result;
}

function get_active_posts($conn, $type) {
    $sql = "SELECT * FROM $type WHERE status = 'on'";
    $result = $conn->query($sql);
    
    return $result;
}

function get_status_name($status) {
    
    if ($status == 'on') {
        $result = 'Desactivar';
    } else {
        $result = 'Activar';
    }

    return $result;
}