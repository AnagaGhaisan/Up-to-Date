<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir dengan Flowbite</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css">
    @vite('resources/css/app.css')
</head>
<body class="font-sans antialiased">
    <div class="flex flex-col items-center justify-center h-screen">
        <div class="w-full max-w-md bg-white rounded-lg shadow-md p-6">
          <h2 class="text-2xl font-bold text-gray-900 mb-4">Create News</h2>
          <form action="{{ route('post.store')}}" method="POST" enctype="multipart/form-data" class="flex flex-col">
            @csrf
            @method('post')
            <input type="text" id="title" class="bg-gray-100 text-gray-900 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150" placeholder="Title Of News" name="title" required>
            <textarea id="description" name="description" class="bg-gray-100 text-gray-900 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150" placeholder="Enter Desciption"></textarea>
            <textarea id="content" name="content" class="bg-gray-100 text-gray-900 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150" placeholder="Enter Content"></textarea>
            <input type="file" id="image" name="image"  class="bg-gray-100 text-gray-900 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150" placeholder="Place A Image" required>
            <button type="submit" class="bg-gradient-to-r from-indigo-500 to-blue-500 text-white font-bold py-2 px-4 rounded-md mt-4 hover:bg-indigo-600 hover:to-blue-600 transition ease-in-out duration-150">Send</button>
          </form>
        </div>
      </div>
</body>
</html>