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
        </div>
    </div>
</x-card>
