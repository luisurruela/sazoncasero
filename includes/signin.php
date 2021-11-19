<?php
session_start();

if (isset($_POST) && !empty($_POST['username']) && !empty($_POST['password'])) {

    require_once("../config/db.php");
    
    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM users WHERE username = '$username' LIMIT 1";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        
        $user =$result->fetch_array();
        if ($password == $user['password']) {
            
            $_SESSION['user'] = [
                'name'          => $user['nombre'],
                'username'      => $user['username'],
                'role'          => $user['role']
            ];
            
            header("Location: ../dashboard.php");

        } else {
            
            $response = [
                'status'    => 'error',
                'message'   => 'Contraseña incorrecta.'
            ];
            
            $_SESSION['response'] = $response;
            header("Location: ../login.php");
        }

    } else {
        $response = [
            'status'    => 'error',
            'message'   => 'El usuario no existe.'
        ];

        $_SESSION['response'] = $response;
        header("Location: ../login.php");    
    }

} else {
    header("Location: ../login.php");
}