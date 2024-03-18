<?php
session_start(); // Iniciar sesión

$server = "localhost";
$usuario = "root";
$clave = "";
$base = "emsa";
$con = mysqli_connect($server, $usuario, $clave, $base) or die("problemas");
mysqli_set_charset($con, 'utf8');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $contrasena = md5($_POST["contrasena"]);

    // Consulta para obtener la información del usuario
    $consulta = mysqli_prepare($con, "SELECT id, nombre, contrasena FROM usuarios WHERE usuario = ?");
    mysqli_stmt_bind_param($consulta, "s", $usuario);
    mysqli_stmt_execute($consulta);
    mysqli_stmt_store_result($consulta);

    if (mysqli_stmt_num_rows($consulta) > 0) {
        // El usuario existe, comprobamos la contraseña
        mysqli_stmt_bind_result($consulta, $id_usuario, $nombre_usuario, $contrasena_guardada);
        mysqli_stmt_fetch($consulta);

        if ($contrasena == $contrasena_guardada) {
            // Contraseña correcta, almacenamos información en la sesión y redirige a la página de inicio
            $_SESSION['id_usuario'] = $id_usuario;
            $_SESSION['nombre_usuario'] = $nombre_usuario;
            header("Location: inicio.php");
            exit();
        } else {
            // Contraseña incorrecta, muestra el mensaje
            echo "<script>
                    alert('Contraseña incorrecta.');
                    window.location.href = 'inicio_sesion.html';
                  </script>";
            exit();
        }
    } else {
        // Usuario no existe, redirige al formulario de registro con un mensaje
        echo "<script>
                alert('Usuario no existe, por favor regístrese.');
                window.location.href = 'registro.html';
              </script>";
        exit();
    }
}

mysqli_close($con);
?>

