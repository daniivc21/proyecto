<?php
session_start();
include ('../Librerias/adodb5/adodb.inc.php');
include ('../Modelo/Conexion.php');
include ('../Modelo/Modelo.php');
//este se incluye dependiendo de la vista q sea, cada vista tiene su controlador
include ('../Controlador/login_controlador.php');
if (isset($_POST['login'])) {
    $control_login = new login_controlador();
    $datos = $control_login->validaUsuario($_POST['login'], $_POST['password']);
    echo '<pre>';
    print_r($datos);
    echo '</pre>';
    if ($datos != FALSE) {
        $_SESSION['id_usuario'] = $datos[0][0];
        $_SESSION['nombre'] = $datos[0][1];
        $_SESSION['clave'] = $datos[0][2];
        $_SESSION['correo'] = $datos[0][3];
        $_SESSION['privilegio'] = $datos[0][4];
        header("location:Principal_1.php");
    } else {
        echo "<script language='JavaScript'>alert('Error al iniciar sesión'); </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Dark Login Form</title>
        <link rel="stylesheet" href="../vistas/bootstrap/extras/style.css">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    </head>
    <body>
        <div class="containerfluid">
            <div class="margen">
                <div class="row fondomarg degradadoazul margen">      </div>
                <div class="row " style="height: 121px;">
                    <div class="col-lg-12 ">
                        <a class="thumbnail">                    
                            <img src="../recursos/imgs/header_logo.png" >                            
                        </a>
                    </div>
                </div>
                <div class="row fondomargb degradadoazul">
                </div>
            </div>
            <div class="row  col-lg-10 col-lg-offset-1">              
                <form method="post" action="" class="login">
                    <table>
                        <fieldset style="width:530px;padding-top: 5px;border-top-width: 20px;margin-top: 10px;padding-right: 5px;padding-bottom: 5px;                                     
                                  padding-left: 5px;border-right-width: 20px;border-bottom-width: 20px;border-left-width: 20px;border-color:#FDE43B;">

                            <legend style="width: 150px; color: #EEEEEE; font-size: 28px;" > Registro </legend>                
                            <p>
                                <label for="login">Email:</label>
                                <input type="text" name="login" id="login" placeholder="name@example.com">
                            </p>

                            <p>
                                <label for="password">Password:</label>
                                <input type="password" name="password" id="password" placeholder="***********">
                            </p>

                            <p class="login-submit" style="margin-top: 88px;">
                                <button type="submit" class="login-button myButton" style="padding-left: 17px; padding-top: 15px;"> 
                                    <img src="../recursos/img/arrow.png">
                                </button>
                            </p>

                            <p class="forgot-password"><a href="../vistas/Principal.php"><b>Forgot your password?</b></a></p>
                        </fieldset>
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>
</html>