@props(['task'])

<x-card>
    <div>
        <a href="/tasks/{{ $task->id }}" class="text-xl font-bold">{{ $task->title }}</a>
        <p class="my-4">{{ $task->description }}</p>
        <p>Status: {{ $task['completed'] ? 'Completed' : 'Not Completed' }}</p>
    </div>
</x-card>
