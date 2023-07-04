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
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title>Tasks Manager</title>
</head>

<body class="mb-12">
    <nav class="flex justify-between items-center py-4 bg-blue-400 mb-8">
        <a href="create.html" class="bg-black text-white py-2 px-5 ml-6 text-lg">Create Task</a>
        <ul class="flex space-x-6 mr-6 text-lg">
            <li>
                <a href="register.html" class="hover:text-white"><i class="fa-solid fa-user-plus"></i> Register</a>
            </li>
            <li>
                <a href="login.html" class="hover:text-white"><i class="fa-solid fa-arrow-right-to-bracket"></i>
                    Login</a>
            </li>
        </ul>
    </nav>
    <main>
        {{ $slot }}
    </main>

</body>

</html>
