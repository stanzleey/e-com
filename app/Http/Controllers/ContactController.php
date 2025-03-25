<?php

// app/Http/Controllers/ContactController.php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Menampilkan form kontak
    public function create()
    {
        return view('home.contact.create');
    }

    // Menyimpan data kontak
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Contact::create($validated);

        return redirect()->route('home.contact.create')
            ->with('success', 'Pesan Anda telah terkirim. Terima kasih!');
    }

    // Menampilkan daftar pesan (admin)
    public function index()
    {
        $contacts = Contact::latest()->paginate(10);
        return view('home.contact.index', compact('contacts'));
    }

    // Menampilkan detail pesan
    public function show(Contact $contact)
    {
        // Tandai sebagai sudah dibaca
        if (!$contact->is_read) {
            $contact->update(['is_read' => true]);
        }

        return view('contact.show', compact('contact'));
    }

    // Menghapus pesan
    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('home.contact.index')
            ->with('success', 'Pesan berhasil dihapus');
    }
}