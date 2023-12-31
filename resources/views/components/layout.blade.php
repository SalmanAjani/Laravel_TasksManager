<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Tasks Manager</title>
</head>

<body class="mb-12">
    <nav class="flex justify-between items-center py-8 bg-blue-400 mb-8">
        <div>
            <a href="/tasks/create" class="bg-black text-white py-2 px-5 ml-6 text-lg rounded">Create Task</a>
            @auth
                <a href="/tasks" class="bg-black text-white py-2 px-5 ml-6 text-lg rounded">Dashboard</a>
            @else
                <a href="/" class="bg-black text-white py-2 px-5 ml-6 text-lg rounded">Home</a>
            @endauth
        </div>
        <div>
            <ul class="flex space-x-6 mr-6 text-lg">

                @auth
                    {{-- Manage Tasks and User Info --}}
                    <li>
                        <span class="font-bold">Welcome <span class="text-white">{{ auth()->user()->name }}</span></span>
                    </li>
                    {{-- <li>
                        <a href="/tasks/manage" class="hover:text-white"><i class="fa-solid fa-gear"></i>
                            Manage Tasks</a>
                    </li> --}}
                    <li>
                        <form action="/logout" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="hover:text-white">
                                <i class="fa-solid fa-door-closed"></i> Logout
                            </button>
                        </form>
                    </li>
                @else
                    <li>
                        <a href="/register" class="hover:text-white"><i class="fa-solid fa-user-plus"></i> Register</a>
                    </li>
                    <li>
                        <a href="/login" class="hover:text-white"><i class="fa-solid fa-arrow-right-to-bracket"></i>
                            Login</a>
                    </li>

                @endauth
            </ul>
        </div>
    </nav>
    <main>
        {{ $slot }}
    </main>

    <x-flash-message />
</body>

</html>
