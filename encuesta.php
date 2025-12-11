<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $problema = $_POST['problema'];
    $informacion = $_POST['informacion'];
    $preparado = $_POST['preparado'];
    $escuela = $_POST['escuela'];

    $sql = "INSERT INTO encuesta (problema, informacion, preparado, escuela)
            VALUES ('$problema', '$informacion', '$preparado', '$escuela')";

    $guardado = $conexion->query($sql);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Encuesta</title>
    <link rel="stylesheet" href="diseño.css">
</head>
<body>

<header>
    <h1>Encuesta</h1>
    <p>Tu opinión nos ayuda a mejorar la prevención de adicciones.</p>
</header>

<nav>
    <a href="index.php">Inicio</a>
    <a href="registro.php">Registro de Datos</a>
    <a href="reporte.php">Reporte</a>
    <a href="encuesta.php">Encuesta</a>
</nav>

<section>
    <?php if (isset($guardado) && $guardado) { ?>
        <h2>¡Gracias por responder la encuesta!</h2>
        <p>Tu participación es muy importante.</p>
        <br>
        <a class="btn" href="index.php">Regresar al inicio</a>

    <?php } else if (isset($guardado)) { ?>
        <h2>Error al guardar la encuesta</h2>
        <p><?php echo $conexion->error; ?></p>
        <a class="btn" href="index.php">Regresar</a>

    <?php } else { ?>

    <!-- FORMULARIO DE LA ENCUESTA -->
    <form action="encuesta.php" method="POST">

        <label>1. ¿Consideras que las adicciones representan un riesgo serio para la salud física y emocional?</label>
        <select name="problema" required>
            <option value="">Seleccione</option>
            <option value="Totalmente">Sí, totalmente</option>
            <option value="Parcialmente">Sí, en parte</option>
            <option value="No seguro">No estoy seguro</option>
            <option value="No">No lo considero un riesgo</option>
        </select>

        <label>2. ¿Crees que cuentas con información suficiente para identificar situaciones relacionadas con el consumo de drogas?</label>
        <select name="informacion" required>
            <option value="">Seleccione</option>
            <option value="Suficiente">Tengo suficiente información</option>
            <option value="Regular">Tengo algo de información</option>
            <option value="Limitada">Muy poca información</option>
            <option value="Nula">No tengo información</option>
        </select>

        <label>3. ¿Qué tan preparado te sientes para evitar caer en una adicción ante presión social?</label>
        <select name="preparado" required>
            <option value="">Seleccione</option>
            <option value="Bien preparado">Muy preparado</option>
            <option value="Algo preparado">Algo preparado</option>
            <option value="Inseguro">No estoy seguro</option>
            <option value="Nada preparado">Nada preparado</option>
        </select>

        <label>4. ¿Consideras que tu escuela ofrece programas efectivos de prevención y orientación sobre adicciones?</label>
        <select name="escuela" required>
            <option value="">Seleccione</option>
            <option value="Buenos">Sí, son buenos programas</option>
            <option value="Regulares">Son regulares</option>
            <option value="Insuficientes">Son insuficientes</option>
            <option value="Nulos">No existen programas</option>
        </select>

        <button type="submit">Enviar Encuesta</button>
    </form>

    <?php } ?>
</section>

<footer>
    &copy; 2025 Página Sobre la Prevención de las Drogas.
</footer>

</body>
</html>
