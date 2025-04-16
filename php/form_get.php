<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Formulario GET</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
  <div class="max-w-md w-full bg-white rounded-xl shadow-md overflow-hidden p-8">
    <h1 class="text-2xl font-bold text-center mb-6">Formulario usando GET</h1>
    <form action="welcome.php" method="GET" class="space-y-4">
      <div>
        <label for="nombre" class="block text-gray-700 font-semibold mb-1">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>
      <div>
        <label for="username" class="block text-gray-700 font-semibold mb-1">Username:</label>
        <input type="text" name="username" id="username" required class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>
      <div>
        <label for="password" class="block text-gray-700 font-semibold mb-1">Password:</label>
        <input type="password" name="password" id="password" required class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>
      <div>
        <input type="submit" id="sapoperreitor" value="Enviar" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition-colors cursor-pointer">
      </div>
    </form>
    <p class="mt-4 text-center">
      <a href="../index.html" class="text-blue-600 hover:underline">Volver al inicio</a>
    </p>
  </div>
</body>
</html>
