<?php

include("conexion.php");
$con=conectar();


$id=$_POST['id_empleado'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$fechadenacimiento=$_POST['fecha de nacimiento'];
$direccion=$_POST['direccion'];

$sql = "UPDATE empleados SET nombre='$nombre', apellido='$apellido', fecha de nacimiento='$fechadenacimiento', direccion='$direccion' 
WHERE id_empleado = '$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleados.php");
    }
?>