<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $tipo = $_POST['tipo_droga'];
    $frecuencia = $_POST['frecuencia'];
    $comentario = $_POST['comentario'];

    $sql = "INSERT INTO registros (nombre, edad, tipo_droga, frecuencia, comentario)
            VALUES ('$nombre', '$edad', '$tipo', '$frecuencia', '$comentario')";

    $guardado = $conexion->query($sql);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Datos</title>
    <link rel="stylesheet" href="diseño.css">
</head>
<body>

<header>
    <h1>Registro de Información</h1>
    <p> ¿Necesitas ayuda? Da el primer paso y regístrate.</p>
</header>

<nav>
    <a href="index.php">Inicio</a>
    <a href="encuesta.php">Encuesta</a>
    <a href="registro.php">Registro de Datos</a>
    <a href="reporte.php">Reporte</a>
</nav>

<section>

<?php if (isset($guardado) && $guardado) { ?>
        
        <h2>¡Registro guardado con éxito!</h2>
        <p>Tu información ha sido almacenada correctamente.</p>
        <br>
        <a class="btn" href="registro.php">Registrar otro</a>
        <a class="btn" href="index.php">Regresar al inicio</a>

<?php } else if (isset($guardado)) { ?>

        <h2>Error al guardar el registro</h2>
        <p><?php echo $conexion->error; ?></p>
        <a class="btn" href="registro.php">Intentar de nuevo</a>

<?php } else { ?>

    <!-- FORMULARIO ORIGINAL -->
    <form action="registro.php" method="POST">
        <label>Nombre completo:</label>
        <input type="text" name="nombre" required>

        <label>Edad:</label>
        <input type="number" name="edad" min="10" max="80" required>

        <label>Tipo de droga consumida:</label>
        <select name="tipo_droga">
            <option value="Ninguna">Ninguna</option>
            <option value="Alcohol">Alcohol</option>
            <option value="Tabaco">Tabaco</option>
            <option value="Marihuana">Marihuana</option>
            <option value="Cocaína">Cocaína</option>
            <option value="Inhalantes">Inhalantes</option>
            <option value="Cristal">Cristal</option>
        </select>

        <label>Frecuencia de consumo:</label>
        <select name="frecuencia">
            <option value="Nunca">Nunca</option>
            <option value="Ocasional">Ocasional</option>
            <option value="Semanal">Semanal</option>
            <option value="Diario">Diario</option>
        </select>

        <label>Comentario adicional:</label>
        <textarea name="comentario"></textarea>

        <button type="submit">Guardar Registro</button>
    </form>

<?php } ?>

</section>

<footer>
    &copy; 2025 Página Sobre la Prevención de las Drogas.
</footer>

</body>
</html>