<?php include("conexion.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Las Drogas, Su Consumo y Las Adicciones</title>
    <link rel="stylesheet" href="diseño.css">
</head>
<body id="top">

<header>
    <h1>Las Drogas, Su Consumo y Las Adicciones</h1>
    <p>Una página informativa para la prevención, orientación y concientización.</p>
</header>

<nav>
    <a href="#definicion">¿Qué son?</a>
    <a href="#efectos">Efectos</a>
    <a href="#estadisticas">Estadísticas</a>
    <a href="#problemas">Problemas</a>
    <a href="#prevencion">Prevención</a>
    <a href="#ayuda">Ayuda a un amigo</a>

    <!-- Tus páginas -->
    <a href="encuesta.php">Encuesta</a>
    <a href="registro.php">Registro de Datos</a>
    <a href="reporte.php">Reporte</a>
</nav>

<section>

    <!-- INTRODUCCIÓN -->
    <div class="card" id="definicion">
        <h2>¿Qué son las drogas?</h2>
        <p>
            Las drogas son sustancias químicas que alteran el funcionamiento del sistema nervioso central,
            generando cambios en la conducta, percepción, emociones y estado de conciencia. Su consumo puede
            llevar a una dependencia física o psicológica, afectando gravemente la salud y la vida social.
        </p>
        <p>
            Existen drogas legales como el alcohol y el tabaco, e ilegales como la marihuana, cocaína,
            metanfetaminas y otras sustancias altamente adictivas.
        </p>
        <img src="img/drogas1.jpg" alt="Drogas definicion">
    </div>

    <!-- EFECTOS EN LOS ADOLESCENTES -->
    <div class="card" id="efectos">
        <h2>Efectos de las drogas en los adolescentes</h2>
        <p>
            La adolescencia es una etapa de formación emocional y cognitiva. El consumo de drogas en esta etapa
            aumenta el riesgo de daños en el cerebro, afecta la memoria, concentración, razonamiento y aumenta
            la posibilidad de desarrollar adicciones a temprana edad.
        </p>
        <ul>
            <li>Alteraciones en la memoria y el aprendizaje</li>
            <li>Cambios de humor, ansiedad y depresión</li>
            <li>Pérdida de motivación y bajo rendimiento académico</li>
            <li>Afectación en habilidades sociales y autoestima</li>
            <li>Mayor probabilidad de accidentes y conductas riesgosas</li>
        </ul>
        <img src="img/adicciones1.jpg" alt="Adiccion jovenes">
    </div>

    <!-- ESTADÍSTICAS -->
    <div class="card" id="estadisticas">
        <h2>Estadísticas en México</h2>
        <p>
            Según la ENCODAT (Encuesta Nacional de Consumo de Drogas, Alcohol y Tabaco), el consumo ha aumentado
            especialmente entre adolescentes y jóvenes.
        </p>
        <ul>
            <li>El 17% de los adolescentes ha probado alguna droga ilícita.</li>
            <li>La marihuana es la sustancia ilegal más consumida entre jóvenes (14%).</li>
            <li>El 8% de los adolescentes reporta haber consumido drogas sintéticas.</li>
            <li>El 28% de los jóvenes entre 15 y 24 años consumen alcohol de manera riesgosa.</li>
        </ul>
        <img src="img/estadisticas.jpg" alt="Estadísticas drogas">
    </div>

    <!-- PROBLEMAS GENERADOS POR LAS DROGAS -->
    <div class="card" id="problemas">
        <h2>Problemas asociados al consumo de drogas</h2>
        <p>
            El consumo de drogas no solo afecta la salud física y mental, también provoca problemas sociales,
            familiares, académicos y legales.
        </p>
        <ul>
            <li>Problemas familiares y pérdida de comunicación</li>
            <li>Bajo rendimiento escolar y deserción</li>
            <li>Riesgos legales por posesión o distribución</li>
            <li>Trastornos de ansiedad, depresión o psicosis</li>
            <li>Riesgo de sobredosis y daños permanentes en el cerebro</li>
        </ul>
        <img src="img/problemas.jpg" alt="Problemas asociados a drogas">
    </div>

    <!-- BENEFICIOS DE LA PREVENCIÓN -->
    <div class="card" id="prevencion">
        <h2>Beneficios de la prevención</h2>
        <p>
            La prevención es fundamental para evitar que los jóvenes caigan en el consumo y la adicción.
            Informar, educar y fortalecer la comunicación familiar puede salvar vidas.
        </p>
        <ul>
            <li>Mejor salud física y mental</li>
            <li>Mayor rendimiento académico y estabilidad emocional</li>
            <li>Relaciones sociales más sanas</li>
            <li>Reducción del riesgo de trastornos y adicciones</li>
            <li>Construcción de proyectos de vida sólidos</li>
        </ul>
        <img src="img/prevencion.jpg" alt="Prevencion drogas">
    </div>

    <!-- COMO AYUDAR A UN AMIGO -->
    <div class="card" id="ayuda">
        <h2>¿Cómo ayudar a un amigo que consume drogas?</h2>
        <p>
            Si sospechas o sabes que un amigo consume drogas, tu apoyo puede marcar la diferencia.
            Ayudar no significa juzgar, sino acompañar.
        </p>

        <h3>1. Habla con él sin juzgarlo</h3>
        <p>Escucha, muestra empatía y evita criticar o burlarte.</p>

        <h3>2. Motívalo a buscar ayuda profesional</h3>
        <p>Un psicólogo, orientador escolar o institución de apoyo puede intervenir correctamente.</p>

        <h3>3. Acompáñalo en el proceso</h3>
        <p>El cambio es gradual, no lo abandones.</p>

        <h3>4. Involucra a un adulto de confianza</h3>
        <p>Puedes hablar con un maestro, familiar o tutor si la situación es grave.</p>

        <h3>5. No pongas en riesgo tu seguridad</h3>
        <p>Ayudar no significa exponerte a ambientes peligrosos.</p>

        <img src="img/ayuda_amigo.jpg" alt="Como ayudar a un amigo">
    </div>

</section>

<!-- BOTÓN VOLVER AL INICIO -->
<a href="#top" class="btn-top">▲</a>

<footer>
    &copy; 2025 Página Sobre la Prevención de las Drogas.
</footer>

</body>
</html>
