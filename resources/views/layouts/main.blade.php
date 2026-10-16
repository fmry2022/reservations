<!DOCTYPE html>
<html lang="fr">
<head>
        <meta charset="utf-8">
        <title>Projet Réservations - @yield('title')</title>
{{--"@yield. Le @ signale une directive Blade, une instruction spéciale du moteur de templates. @yield('nom') veut dire : « ici, il y a un trou nommé nom, que chaque page remplira avec son propre contenu "--}}
</head>
<body>
        <div class="container">
                @yield('content')
        </div>
</body>
</html>