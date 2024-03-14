document.getElementById('consultaForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    var nombre = document.getElementById('nombre').value;
    var fecha = document.getElementById('fecha').value;
    var registro = { nombre: nombre, fecha: fecha };
    console.log("Consulta generada:", registro);

    // Aquí puedes enviar los datos a un servidor o almacenarlos localmente
    // Por ejemplo, mediante una petición AJAX o almacenamiento en localStorage

    // Una vez almacenados los datos, puedes mostrar un mensaje de éxito o hacer otra acción
    alert("Consulta generada con éxito.");
});
