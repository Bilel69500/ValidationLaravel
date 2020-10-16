<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les Statues @yield('title')</title>
    <link rel="stylesheet" href="{!!  asset('css/styles.css') !!}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-lg  navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="/">{{ config('app.name') }} </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/ajout">Ajout d'une statues </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/liste">Liste des statues </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>
    <div class="footer fixed-bottom">
        <footer id="sticky-footer" class="py-4 bg-primary text-white-50">
            <div class="text-center">
                <small>Les Statues</small>
            </div>
        </footer>
    </div>
</body>

</html>
