{{-- Oggi create un nuovo progetto Laravel 7
e tramite gli appositi comandi artisan
create un model con relativa migration
e un resource controller.
Iniziate a definire le operazioni CRUD per gestire un archivio di fumetti.
Bonus: creare il seeder per la tabella comics utilizzando il file in allegato. --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Laravel-DC-Comics - @yield('title')</title>
</head>

<body>
    @include('partials.header')
    <main>
        @yield('comics-content')
        @yield('comic-content')
    </main>

    @include('partials.footer')
</body>

</html>
