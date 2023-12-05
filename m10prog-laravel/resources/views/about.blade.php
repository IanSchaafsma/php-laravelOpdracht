<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
<header class="bg-gray-800 text-white p-4">
    <div class="container mx-auto flex items-center justify-between">
      <!-- Logo -->
      <div class="flex items-center">
        <img src="https://www.npo3-senavideo-npo3.apps.senavideo.cluster.chp4.io/uploads/media_item/media_item/236/30/moffel-1520347361.jpg" alt="Logo" class="h-8 w-8 mr-2">
        <h1 class="text-lg font-semibold">Moffel</h1>
      </div>

      <!-- Navigation -->
      <nav class="space-x-4">
        <a href="#" class="hover:underline">Home</a>
        <a href="#" class="hover:underline">About</a>
        <a href="#" class="hover:underline">Services</a>
        <a href="#" class="hover:underline">Contact</a>
      </nav>
    </div>
  </header>
  <div class="flex items-center justify-center h-screen bg-cover" style="background-image: url(https://img.freepik.com/premium-photo/pastel-cotton-candy-clouds-backgrounds-cotton-candy-clouds-ai-generated_983574-563.jpg);">
        <div class="bg-white p-8 rounded shadow-lg">
            <h2 class="text-2xl font-semibold mb-4">Welcome bij moffel zijn website!</h2>
            <p class="text-gray-700 mb-6 text-center">Leer hem hier beter kennen!</p>

            <div class="flex justify-center space-x-4">
                <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Lees meer</a>
                <a href="#" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Meet moffel</a>
            </div>
        </div>
    </div>
    <footer class="text-center py-4 bg-gray-800 text-white">
        <p>&copy; {{ date('Y') }} Moffel. All rights reserved.</p>
    </footer>
</body>
</html>