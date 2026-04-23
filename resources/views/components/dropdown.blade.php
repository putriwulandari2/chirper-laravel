@props(['align' => 'right', 'width' => '48', 'contentClasses' => 'py-1 bg-white'])

<div class="relative inline-block text-left" x-data="{ open: false }">
    <div @click="open = !open">
        {{ $trigger }}
    </div>

    <div x-show="open" @click.away="open = false" class="absolute z-50 {{ $align === 'left' ? 'left-0' : 'right-0' }} mt-2 w-{{ $width }} rounded-md shadow-lg" style="display: none">
        <div class="rounded-md ring-1 ring-black ring-opacity-5 {{ $contentClasses }}">
            {{ $content }}
        </div>
    </div>
</div>
