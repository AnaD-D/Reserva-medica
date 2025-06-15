<?php include 'conexion.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Reserva de Citas - Clínica</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Clínica Salud Total</h1>
    <p>Reserva tu cita médica fácilmente</p>
  </header>
  <main>
    <form action="guardar_cita.php" method="POST">
      <input type="text" name="nombre" placeholder="Tu nombre completo" required>
      <input type="email" name="correo" placeholder="Correo electrónico" required>
      <select name="especialidad" required>
        <option value="">Selecciona especialidad</option>
        <option value="Medicina General">Medicina General</option>
        <option value="Pediatría">Pediatría</option>
        <option value="Ginecología">Ginecología</option>
      </select>
      <input type="date" name="fecha" required>
      <input type="time" name="hora" required>
      <button type="submit">Reservar Cita</button>
    </form>
  </main>
</body>
</html>