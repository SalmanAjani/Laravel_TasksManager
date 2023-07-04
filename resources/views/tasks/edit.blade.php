<x-layout>
    <div>
        <a href="/" class="text-xl ml-16 border-1 bg-blue-400 text-white px-6 py-2 rounded">Back</a>
    </div>
    <div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">

        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-6">
                Edit: {{ $task->title }}
            </h2>
        </header>

        <form action="/tasks/{{ $task->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2">Title</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
                    placeholder="Title" value="{{ $task->title }}" />

                @error('title')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">Description</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="description"
                    placeholder="Description" value="{{ $task->description }}" />

                @error('description')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <p class="text-lg mb-2">Status:</p>
                <input type="checkbox" name="completed">
                <label for="completed" class="text-lg">Completed</label>

                @error('completed')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="bg-red-400 text-lg text-white rounded py-2 px-6">
                    Update Task
                </button>
            </div>
        </form>
    </div>
</x-layout>
