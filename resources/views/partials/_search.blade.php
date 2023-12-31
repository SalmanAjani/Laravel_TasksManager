<form action='{{ route('tasks.index') }}' method="GET">
    <div class="relative border-2 border-gray-100 rounded-lg mx-16 my-8">
        <div class="absolute top-4 left-3">
            <i class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i>
        </div>
        <input type="text" name="q" class="h-14 w-full pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none"
            placeholder="Search Tasks" />
        <div class="absolute top-2 right-2">
            <button type="submit" class="h-10 w-20 text-white rounded-md text-lg bg-blue-400 hover:bg-blue-600">
                Search
            </button>
        </div>
    </div>
</form>
