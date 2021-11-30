<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id_empleado'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$fechadenacimiento=$_POST['fecha de nacimiento'];
$direccion=$_POST['direccion'];


$sql="INSERT INTO empleados VALUES('$id','$nombre','$apellido','$fechadenacimiento','$direccion')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: empleados.php");
}
?>