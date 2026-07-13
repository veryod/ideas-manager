<x-layouts.layout>
    <div class="max-w-xl bg-white rounded-lg shadow-sm dark:bg-gray-900">
        <a href="#">
            <img class="rounded-t-lg" src="/images/blog/image-1.jpg" alt="" />
        </a>
        <div class="p-5">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $idea->title }}</h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $idea->description }}</p>

            <div class="flex gap-4">
                <form action="" method="post">
                    @method('DELETE')
                    @csrf
                    <button class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                        Delete
                    </button>
                </form>
                <a href="/ideas/edit/{{ $idea->id }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Edit
                </a>
            </div>
        </div>
    </div>
</x-layouts.layout>