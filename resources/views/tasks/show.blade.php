<x-layout>
    <a href="/tasks" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back </a>
    <div
        class="flex flex-col items-center justify-center text-center bg-gray-50 border border-gray-200 rounded p-6 w-3/6 m-auto mt-16">
        <h3 class="text-xl font-bold">{{ $task->title }}</h3>
        <p class="my-4">{{ $task->description }}</p>
        <p>Status: {{ $task['completed'] ? 'Completed' : 'Not Completed' }}</p>
    </div>

</x-layout>
