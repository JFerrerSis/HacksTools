
<?php 
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$Phone = $_POST['phone'];
$age = $_POST['age'];
$user = $_POST['user'];
$tool = $_POST['tool'];
$linux = $_POST['linux'];

include "conexion.php";

$insertar = "INSERT INTO form (nombre, correo, numero, edad, usuario, id_tools, id_linux, feha_creacion) VALUES ('$nombre', '$email', '$Phone', '$age', '$user' , '$tool', '$linux', CURRENT_TIMESTAMP())";

if ($conexion -> query($insertar) == true) {
    header('location: ../views/contactos.php');
    echo '<script> Swal.fire({
  title: "Good job!",
  text: "You clicked the button!",
  icon: "success"
});</script>';
}else{
    header('location: ../index.php');
}

$conexion -> close();
?>
