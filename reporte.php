<?php include("conexion.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reporte de Registros</title>
    <link rel="stylesheet" href="diseño.css">
</head>
<body>

<header>
    <h1>Reporte General</h1>
    <p>Consulta de datos almacenados en el sistema.</p>
</header>

<nav>
    <a href="index.php">Inicio</a>
    <a href="encuesta.php">Encuesta</a>
    <a href="registro.php">Registrar Datos</a>
    <a href="reporte.php">Reporte</a>
</nav>

<section>

    <!-- ===================== -->
    <!-- REPORTE DE REGISTROS -->
    <!-- ===================== -->
    <div class="card">
        <h2>Registros almacenados</h2>

        <table>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Droga</th>
                <th>Frecuencia</th>
                <th>Comentario</th>
                <th>Fecha</th>
            </tr>

            <?php
            $sql = "SELECT * FROM registros ORDER BY id DESC";
            $resultado = $conexion->query($sql);

            while ($row = $resultado->fetch_assoc()) {
                echo "<tr>
                        <td>".$row['id']."</td>
                        <td>".$row['nombre']."</td>
                        <td>".$row['edad']."</td>
                        <td>".$row['tipo_droga']."</td>
                        <td>".$row['frecuencia']."</td>
                        <td>".$row['comentario']."</td>
                        <td>".$row['fecha']."</td>
                      </tr>";
            }
            ?>
        </table>
    </div>



    <!-- ===================== -->
    <!-- REPORTE DE ENCUESTA -->
    <!-- ===================== -->
    <div class="card">
        <h2>Respuestas de la Encuesta</h2>

        <table>
            <tr>
                <th>ID</th>
                <th>¿Son un problema?</th>
                <th>Información recibida</th>
                <th>Preparación para decir NO</th>
                <th>¿Escuela debe hablar más?</th>
            </tr>

            <?php
            $sql2 = "SELECT * FROM encuesta ORDER BY id DESC";
            $resultado2 = $conexion->query($sql2);

            while ($row = $resultado2->fetch_assoc()) {
                echo "<tr>
                        <td>".$row['id']."</td>
                        <td>".$row['problema']."</td>
                        <td>".$row['informacion']."</td>
                        <td>".$row['preparado']."</td>
                        <td>".$row['escuela']."</td>
                      </tr>";
            }
            ?>
        </table>
    </div>

</section>

<footer>
    &copy; 2025 Página Sobre la Prevención de las Drogas.
</footer>

</body>
</html>
