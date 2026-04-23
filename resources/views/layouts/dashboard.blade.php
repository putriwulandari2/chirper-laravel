<x-layout>
    <x-slot:title>
        Dashboard
    </x-slot:title>

    <div class="max-w-xl mx-auto mt-12 rounded-xl border border-gray-200 bg-white p-6 shadow-sm">
        <h1 class="text-3xl font-bold">Dashboard</h1>

        <p class="mt-4 text-gray-700">Welcome, <strong>{{ auth()->user()->name }}</strong>!</p>
        <p class="mt-2 text-gray-600">You are logged in and ready to post chirps.</p>

        <div class="mt-6">
            <a href="{{ route('home') }}" class="inline-flex items-center rounded-xl bg-blue-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-700">Go to Chirps</a>
        </div>
    </div>
</x-layout>
