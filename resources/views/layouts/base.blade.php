<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/@yield('css').css">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <ul>
            <li>Accueil</li>
            <li>Lien 1</li>
            <li>Lien 2</li>
        </ul>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>
