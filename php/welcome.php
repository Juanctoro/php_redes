<?php
// welcome.php

// Primero, se detecta si existen datos enviados por GET o POST
if ($_SERVER["REQUEST_METHOD"] === "GET" && !empty($_GET)) {
    $nombre   = isset($_GET["nombre"]) ? $_GET["nombre"] : "";
    $username = isset($_GET["username"]) ? $_GET["username"] : "";
    $password = isset($_GET["password"]) ? $_GET["password"] : "";
} elseif ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST)) {
    $nombre   = isset($_POST["nombre"]) ? $_POST["nombre"] : "";
    $username = isset($_POST["username"]) ? $_POST["username"] : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : "";
} else {
    // Si no se envían datos, se busca la cookie
    if (isset($_COOKIE["user_data"])) {
        $data = json_decode($_COOKIE["user_data"], true);
        $nombre = isset($data["nombre"]) ? $data["nombre"] : "";
        $username = isset($data["username"]) ? $data["username"] : "";
        $password = isset($data["password"]) ? $data["password"] : "";
    } else {
        $nombre = "";
        $username = "";
        $password = "";
    }
}

// Siempre se guarda la cookie con los valores actuales
$cookie_value = json_encode([
  "nombre"   => $nombre,
  "username" => $username,
  "password" => $password
]);
setcookie("user_data", $cookie_value, time() + 86400, "/");
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bienvenido</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
  <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden p-8">
    <h1 class="text-2xl font-bold text-center mb-6">Datos Recibidos</h1>
    <div class="space-y-4">
      <p><strong>Nombre:</strong> <?php echo htmlspecialchars($nombre); ?></p>
      <p><strong>Username:</strong> <?php echo htmlspecialchars($username); ?></p>
      <p><strong>Password:</strong> <?php echo htmlspecialchars($password); ?></p>
    </div>
    <p class="mt-6 text-gray-600 text-center">Los datos han sido almacenados en una cookie.</p>
    <div class="mt-8 flex justify-center">
      <a href="../index.html" class="px-6 py-3 bg-blue-600 text-white rounded hover:bg-blue-700 transition-colors">
        Volver al inicio
      </a>
    </div>
  </div>
</body>
</html>
