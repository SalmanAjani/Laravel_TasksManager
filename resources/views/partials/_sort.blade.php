<ul class="flex mr-16">
    <li class="flex items-center justify-center bg-blue-400 text-white rounded-md py-2 px-3 ml-16 text-md mb-6">
        <a href="{{ route('tasks.index', ['filter' => request('filter'), 'sort' => 'asc']) }}">Sort
            Ascending</a>
    </li>
    <li class="flex items-center justify-center bg-blue-400 text-white rounded-md py-2 px-3 ml-16  text-md mb-6"><a
            href="{{ route('tasks.index', ['filter' => request('filter'), 'sort' => 'desc']) }}">Sort
            Descending</a>
    </li>
</ul>
