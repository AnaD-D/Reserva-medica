<?php
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $especialidad = $_POST['especialidad'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];

    $stmt = $conn->prepare("INSERT INTO citas (nombre, correo, especialidad, fecha, hora) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $nombre, $correo, $especialidad, $fecha, $hora);
    $stmt->execute();
    $stmt->close();
    $conn->close();

    echo "<script>alert('Cita reservada exitosamente.'); window.location='index.php';</script>";
}
?>