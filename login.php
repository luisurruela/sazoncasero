<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<link rel="stylesheet" href="assets/css/lu-styles.css">
<title>Iniciar sesión | Sazón Casero</title>
</head>
<body class="bg-light pt-5">
    <div class="col-md-6 offset-md-3 col-lg-4 offset-lg-4 col-xl-3 offset-xl-4 m-auto text-center card shadow pl-3 pr-3 pb-4 pt-4">
        <div class="card-content">
            <img src="assets/img/chef-sazon-casero.png" class="img-fluid" width="180px">
            <form method="post" action="includes/signin.php" class="text-left">
                <div class="form-group">
                    <label for="username" class="lead text-muted small ml-2">Nombre de usuario</label>
                    <input id="username" class="form-control" type="text" name="username">
                </div>
                <div class="form-group">
                    <label for="password" class="lead text-muted small ml-2">Contraseña</label>
                    <input id="password" class="form-control" type="password" name="password">
                </div>
                <button class="btn btn-primary" type="submit">Iniciar sesión</button>
            </form>
        </div>

        <?php if(isset($_SESSION['response'])) : ?>
            <div class="alert alert-danger mt-3" role="alert">
                <span><?=$_SESSION['response']['message']?></span>
            </div>
        <?php unset($_SESSION['response']); endif ?>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>