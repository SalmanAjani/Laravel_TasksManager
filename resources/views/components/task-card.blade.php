@props(['task'])

<x-card>
    <div>
        <h2 class="text-xl font-bold mb-2 text-red-400">#{{ $task->id }}</h2>
        <a href="/tasks/{{ $task->id }}" class="text-xl font-bold">{{ $task->title }}</a>
        <p class="my-2">{{ $task->description }}</p>
        <p>Status: {{ $task['completed'] ? 'Completed' : 'Not Completed' }}</p>
    </div>
</x-card>
