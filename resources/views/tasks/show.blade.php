<x-layout>
    <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back </a>
    <div class="text-right mr-24 text-xl">
        <a href="/tasks/{{ $task->id }}/edit">
            <i class="fa-solid fa-pencil"></i> Edit
        </a>
        <form action="/tasks/{{ $task->id }}" method="POST" class="mt-4">
            @csrf
            @method('DELETE')
            <button class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button>
        </form>
    </div>
    <div
        class="flex flex-col items-center justify-center text-center bg-gray-50 border border-gray-200 rounded p-6 w-3/6 m-auto mt-16">
        <h3 class="text-xl font-bold">{{ $task->title }}</h3>
        <p class="my-4">{{ $task->description }}</p>
        <p>Status: {{ $task['completed'] ? 'Completed' : 'Not Completed' }}</p>
    </div>






</x-layout>
