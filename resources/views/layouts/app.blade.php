<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title', 'Event Reminder')</title>

  <!-- Tailwind CSS via Vite -->
  @vite('resources/css/app.css')

  <!-- Font: Poppins -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
  </style>
</head>
<body class="bg-blue-500 text-gray-800 min-h-screen flex flex-col">

  <!-- Navbar -->
  <header class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
      <h1 class="text-2xl font-bold text-indigo-600 flex items-center gap-2">
        📅 Event Reminder
      </h1>
      <nav class="space-x-4">
        <a href="{{ route('events.index') }}" class="text-gray-700 hover:text-indigo-600 font-medium">Daftar Event</a>
        <a href="{{ route('events.create') }}" class="bg-indigo-600 text-white px-4 py-2 rounded-full hover:bg-indigo-700 transition duration-200 shadow">
          + Buat Event
        </a>
      </nav>
    </div>
  </header>

  <!-- Main Content -->
  <main class="flex-grow py-10 px-4">
    <div class="max-w-6xl mx-auto">
      @yield('content')
    </div>
  </main>

  <!-- Footer -->
  <footer class="bg-white border-t py-4 text-center text-sm text-gray-500">
    © {{ date('Y') }} Event Reminder App. Dibuat dengan ❤️ oleh kamu.
  </footer>

</body>
</html>
