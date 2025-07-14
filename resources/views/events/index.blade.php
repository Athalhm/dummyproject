@extends('layouts.app')

@section('title', 'Daftar Event')

@section('content')
<div class="max-w-6xl mx-auto">
  <h1 class="text-4xl font-bold text-center text-indigo-600 mb-10">📅 Daftar Event</h1>

  @if(session('success'))
    <div class="mb-6 bg-green-100 text-green-800 p-4 rounded-lg shadow">
        {{ session('success') }}
    </div>
  @endif

  @if($events->isEmpty())
    <p class="text-gray-500 text-center italic">Belum ada event yang dibuat.</p>
  @else
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
      @foreach ($events as $event)
        <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition border-l-4 border-indigo-600">
          <h2 class="text-xl font-bold text-indigo-700 mb-2">{{ $event->title }}</h2>
          <p class="text-gray-700 mb-3">{{ $event->description }}</p>
          <div class="text-sm text-gray-500 space-y-1">
            <p>📆 {{ \Carbon\Carbon::parse($event->event_time)->translatedFormat('l, d F Y H:i') }}</p>
            <p>📧 {{ $event->email }}</p>
          </div>
        </div>
      @endforeach
    </div>
  @endif
</div>
@endsection
