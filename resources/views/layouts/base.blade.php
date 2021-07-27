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
            <li><a href="/">Accueil</a></li>
            <li><a href="/page1">Lien 1</a></li>
            <li><a href="/page2">Lien 2</a></li>
        </ul>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>
