<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Http;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('events.index', compact('events'));
    }

    public function create()
    {
        return view('events.create');
    }

    
    public function store(Request $request)
    {
    // Validasi input terlebih dahulu
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'event_time' => 'required|date',
        'email' => 'required|email',
    ]);

    // Simpan ke database
    $event = Event::create($validated);

    // Kirim data ke Webhook n8n
    Http::post('http://localhost:5678/webhook-test/event-reminder', $validated);

    // Redirect ke halaman daftar event dengan flash message
    return redirect('/events')->with('success', 'Event berhasil ditambahkan!');
    }


}

