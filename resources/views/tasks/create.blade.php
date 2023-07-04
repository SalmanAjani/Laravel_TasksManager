<x-layout>
    <div>
        <a href="/" class="text-2xl ml-16 border-1 bg-blue-400 text-white px-6 py-2 rounded">Back</a>
    </div>
    <div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">

        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-6">
                Create Task
            </h2>
        </header>

        <form action="/tasks" method="POST">
            @csrf
            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2">Title</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
                    placeholder="Title" value="{{ old('title') }}" />

                @error('title')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">Description</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="description"
                    placeholder="Description" value="{{ old('description') }}" />

                @error('description')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="bg-red-400 text-lg text-white rounded py-2 px-6">
                    Create Task
                </button>
            </div>
        </form>
    </div>
</x-layout>
