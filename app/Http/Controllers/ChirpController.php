<?php

namespace App\Http\Controllers;

use App\Models\Chirp;
use App\Models\User;
use Illuminate\Http\Request;

class ChirpController extends Controller
{
    public function index()
    {
        $chirps = Chirp::with('user')
            ->latest()
            ->take(50) // Limit to 50 most recent chirps
            ->get();

        return view('home', ['chirps' => $chirps]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'message' => ['required', 'string', 'max:255'],
        ]);

        $user = auth()->user() ?? User::firstOrCreate(
            ['email' => 'guest@example.com'],
            ['name' => 'Guest User', 'password' => bcrypt('password')]
        );

        $chirp = new Chirp(['message' => $validated['message']]);
        $chirp->user()->associate($user);
        $chirp->save();

        return redirect()->route('home')->with('status', 'Chirp published successfully.');
    }

    public function edit(Chirp $chirp)
    {
        return view('chirps.edit', ['chirp' => $chirp]);
    }

    public function update(Request $request, Chirp $chirp)
    {
        $validated = $request->validate([
            'message' => ['required', 'string', 'max:255'],
        ]);

        $chirp->update($validated);

        return redirect()->route('home')->with('status', 'Chirp updated successfully.');
    }

    public function destroy(Chirp $chirp)
    {
        $chirp->delete();

        return redirect()->route('home')->with('status', 'Chirp deleted successfully.');
    }
}