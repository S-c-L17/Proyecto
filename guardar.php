<?php
include("conexion.php");

$nombre = $_POST["nombre"];
$edad = $_POST["edad"];
$tipo_droga = $_POST["tipo_droga"];
$frecuencia = $_POST["frecuencia"];
$comentario = $_POST["comentario"];

$sql = "INSERT INTO registros (nombre, edad, tipo_droga, frecuencia, comentario)
        VALUES ('$nombre', '$edad', '$tipo_droga', '$frecuencia', '$comentario')";

if ($conexion->query($sql)) {
    echo "<script>alert('Registro guardado correctamente'); window.location='registro.php';</script>";
} else {
    echo "Error: " . $conexion->error;
}
?>
