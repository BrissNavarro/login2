<?php @include 'user_page.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Médica</title>
    <link rel="stylesheet" type="text/css" href="consulta.css">
</head>
<body>
    <div class="container">
        <h2>Consulta Médica</h2>
        <form id="consultaForm">
            <label for="nombre">Nombre del paciente:</label>
            <input type="text" id="nombre" name="nombre" required>
            <label for="fecha">Fecha y hora de la consulta:</label>
            <input type="datetime-local" id="fecha" name="fecha" required>
            <label for="motivo">Motivo de consulta:</label>
            <textarea id="motivo" name="motivo" rows="4" cols="50" required></textarea>
            <label for="estatus">Estatus:</label>
            <select id="estatus" name="estatus" required>
                <option value="nueva">Nueva consulta</option>
                <option value="proceso">En proceso</option>
                <option value="finalizada">Finalizada</option>
            </select>
            <input type="submit" value="Generar Consulta">
        </form>
    </div>

    <script src="consulta.js"></script>
</body>
</html>
