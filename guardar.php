<?php
include("conexion.php");

// Obtener los valores del formulario
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$TELEFONO = $_POST['telefono'];
$PRUEBA = $_POST['prueba'];

// Insertar en la base de datos
$sql = "INSERT INTO usuarios (nombre, correo, telefono, prueba) VALUES ('$nombre', '$correo','$TELEFONO','$PRUEBA ')";

if ($conn->query($sql) === TRUE) {
    echo "<h2>Datos guardados correctamente ✅</h2>";
    echo "<a href='index.html'>Volver al formulario</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
