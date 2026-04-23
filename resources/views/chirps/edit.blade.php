<x-layout>
    <x-slot:title>
        Edit Chirp
    </x-slot:title>

    <div class="max-w-2xl mx-auto">
        <h1 class="text-3xl font-bold mt-8">Edit Chirp</h1>

        <form action="{{ route('chirps.update', $chirp) }}" method="POST" class="mt-8">
            @csrf
            @method('PATCH')

            <div class="rounded-xl border border-gray-200 bg-white p-6 shadow-sm">
                <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                <textarea
                    id="message"
                    name="message"
                    rows="4"
                    class="mt-2 block w-full rounded-xl border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                >{{ old('message', $chirp->message) }}</textarea>
                @error('message')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror

                <div class="mt-4 flex items-center justify-between gap-3">
                    <a href="{{ route('home') }}" class="text-sm text-gray-600 hover:text-gray-900">Cancel</a>
                    <button type="submit" class="inline-flex items-center rounded-xl bg-blue-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-700">
                        Update Chirp
                    </button>
                </div>
            </div>
        </form>
    </div>
</x-layout>
