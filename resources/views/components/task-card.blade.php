@props(['task'])

<x-card>
    <div class="flex justify-between">
        <div>
            <h2 class="text-xl font-bold mb-2 text-red-400">#{{ $task->id }}</h2>
            <a href="/tasks/{{ $task->id }}" class="text-xl font-bold">{{ $task->title }}</a>
            <p class="my-2">{{ $task->description }}</p>
            <p>Status: {{ $task['completed'] ? 'Completed' : 'Not Completed' }}</p>
        </div>
        <div>
            <a href="/tasks/{{ $task->id }}/edit">
                <i class="fa-solid fa-pencil"></i> Edit
            </a>
            <form action="/tasks/{{ $task->id }}" method="POST" class="mt-4">
                @csrf
                @method('DELETE')
                <button class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button>
            </form>
        </div>
    </div>
</x-card>
