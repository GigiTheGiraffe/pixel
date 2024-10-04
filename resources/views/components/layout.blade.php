<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body class="px-10 bg-black text-white">
    <header>
        <nav class="flex justify-between items-center py-4 border-b border-white/20">
            <a href='/'>
                <img src=" {{ Vite::asset('resources/images/logo.svg')}}" alt="logo of Pixel">
            </a>
            <ul class='space-x-6 font-bold list-none flex gap-x-2'>
                <li class='hover:underline hover:text-blue-700 transition-colors duration-300 transition-underline underline-300'><a href=''>Jobs</a></li>
                <li class='hover:text-blue-700 transition-colors duration-300'><a href=''>Careers</a></li>
                <li class='hover:text-blue-700 transition-colors duration-300'><a href=''>Salaries</a></li>
                <li class='hover:text-blue-700 transition-colors duration-300'><a href=''>Company</a></li>
            </ul>
            <a href=''>Post a Job</a>
        </nav>
    </header>
    <main class="mt-10 max-w-[986px] mx-auto">
        {{ $slot }}
    </main>
</body>
</html>
