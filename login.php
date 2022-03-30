<?php
session_start();
if (isset($_SESSION['nombre'])) {

    header('Location:index.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN APP GESTION</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
        integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

</head>

<body>


    <div class="p-5 bg-light">
        <h1 class="display-3">ACCESO A APLICACIÓN</h1>
        <hr class="my-2">

    </div>
    <div class="container">

        <div class="row text-center login-page">
            <div class="col-md-12 login-form">

                <form action="login_proceso.php" method="post">

                <br>

                    <div class="row">
                        <div class="col-md-12 login-from-row">
                            <input type="text" name="usuario" placeholder="USUARIO"/>
                        </div>
                    </div>
                    <br>
               
                    <div class="row">
                        <div class="col-md-12 login-from-row">
                            <input type="password" name="password" placeholder="CONTRASEÑA"/>

                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col-md-12 login-from-row">

                            <input type="submit" class="btn btn-info" value="INICIAR SESIÓN">
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>









    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>