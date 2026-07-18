@props(['title', 'description', 'image_path', 'status', 'id'])

<a href="/ideas/{{ $id }}">
    <div class="max-w-sm rounded overflow-hidden shadow-lg bg-gray-900">
        @if($image_path != null)
            <img class="w-full" src="{{ asset('storage/' . $image_path) }}">
        @endif
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2 text-gray-300">{{ $title }}</div>
            <p class="text-gray-500 text-base">{{ $description }}</p>
        </div>
        <div class="px-6 pt-4 pb-2">
            <span class="inline-block bg-blue-500 rounded-full px-3 py-1 text-sm font-semibold text-gray-100 mr-2 mb-2">#{{ $status }}</span>
        </div>
    </div>
</a>

