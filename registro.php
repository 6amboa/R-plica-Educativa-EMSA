<?php
$server = "localhost";
$usuario = "root";
$clave = "";
$base = "emsa";
$con = mysqli_connect($server, $usuario, $clave, $base) or die("problemas");
mysqli_set_charset($con, 'utf8');
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $correo = $_REQUEST["correo"];
    $nombre = $_REQUEST["nombre"];
    $fecha_nacimiento = $_REQUEST["fecha_nacimiento"];
    $contrasena = md5($_REQUEST["contrasena"]);
    $usuario = $_REQUEST["usuario"];
    $consulta = mysqli_query($con,"INSERT INTO usuarios(nombre,correo,fecha_nacimiento,contrasena,usuario) values('$nombre','$correo','$fecha_nacimiento','$contrasena','$usuario')");

    if($consulta){
        echo "<script>
                alert('Usuario Registrado correctamente');
                window.location.href = 'inicio_sesion.html';
              </script>";
    }else{
        echo("Error al registrar el Usuario");
    }
}   
?>