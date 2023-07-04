<ul class="flex">
    <li class="flex items-center justify-center bg-blue-400 text-white rounded-md py-2 px-3 ml-16 text-md mb-6">
        <a href="{{ route('tasks.index') }}">All</a>
    </li>
    <li class="flex items-center justify-center bg-blue-400 text-white rounded-md py-2 px-3 ml-16 text-md mb-6">
        <a href="{{ route('tasks.index', ['filter' => 'completed']) }}">Completed</a>
    </li>
    <li class="flex items-center justify-center bg-blue-400 text-white rounded-md py-2 px-3 ml-16 text-md mb-6">
        <a href="{{ route('tasks.index', ['filter' => 'not-completed']) }}">Not Completed</a>
    </li>
</ul>
