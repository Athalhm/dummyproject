@extends('layouts.app')

@section('title', 'Buat Event')

@section('content')
<div class="max-w-xl mx-auto bg-white p-8 rounded-xl shadow-md">
  <h1 class="text-3xl font-bold text-indigo-600 text-center mb-6">📝 Buat Event</h1>

  @if ($errors->any())
    <div class="mb-4 text-red-600 bg-red-100 p-4 rounded shadow">
      <ul class="list-disc list-inside">
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form method="POST" action="{{ route('events.store') }}" class="space-y-5">
    @csrf
    <div>
      <label class="block font-medium text-gray-700 mb-1">Judul Event</label>
      <input type="text" name="title" class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
    </div>

    <div>
      <label class="block font-medium text-gray-700 mb-1">Deskripsi</label>
      <textarea name="description" class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-indigo-500" rows="3"></textarea>
    </div>

    <div>
      <label class="block font-medium text-gray-700 mb-1">Tanggal & Waktu</label>
      <input type="datetime-local" name="event_time" class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
    </div>

    <div>
      <label class="block font-medium text-gray-700 mb-1">Email Penerima</label>
      <input type="email" name="email" class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
    </div>

    <div class="text-center">
      <button type="submit" class="bg-indigo-600 text-white px-6 py-3 rounded-full hover:bg-indigo-700 transition">
        Simpan Event
      </button>
    </div>
  </form>
</div>
@endsection
