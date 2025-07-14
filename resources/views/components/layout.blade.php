<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Progetto Finale</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header>
        <x-navbar />
    </header>
    <main class="py-5">{{ $slot }}</main>
    <footer class="bg-dark ">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="{{ route('pages.homepage') }}" class="nav-link px-2 text-white">Homepage</a>
            </li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-white">Prodotti</a></li>
            <li class="nav-item"><a href="{{ route('contact.form') }}" class="nav-link px-2 text-white">Contatti</a>
            </li>
        </ul>
        <p class="text-center text-white my-0">© 2025 Aulab</p>
    </footer>
</body>

</html>
