<x-layouts.layout>
    <div class="flex flex-col container">
        <div class="flex gap-8 underline p-6 text-gray-300">
            <a href="/ideas">All</a>
            <a href="/ideas?status=pending" class="underline">Pending</a>
            <a href="/ideas?status=in_progress">In progress</a>
            <a href="/ideas?status=completed">Completed</a>
        </div>

        <div class="grid md:grid-cols-4 gap-8">
            @forelse($ideas as $idea)
                <x-layouts.card 
                    title="{{ $idea->title }}"
                    description="{{ $idea->description }}" 
                    image_path="{{ $idea->image_path }}"
                    status="{{ $idea->status->label() }}"
                    id="{{ $idea->id }}">
                </x-layouts.card>
            @empty
                <h5 class="mb-3 text-2xl tracking-tight text-heading leading-8 font-bold text-gray-200">Currently no ideas available</h5>
            @endforelse 
        </div>
    </div>
</x-layouts>