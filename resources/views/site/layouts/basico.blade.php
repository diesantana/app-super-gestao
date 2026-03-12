<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Super Gestão - @yield('titulo')</title>
    <meta charset="utf-8">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('site.layouts.partials.topo')
    @yield('conteudo')
</body>

</html>
