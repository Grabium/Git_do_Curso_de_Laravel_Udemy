<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
    <h1>Saiba Mais Sobre Nós</h1>
    <ul>
    <li>
        <a href="{{ route('home') }}">Home</a>
    </li>
    <li>
        <a href="{{ route('instrucao') }}">Instruções</a>
    </li>
    <li>
        <a href="{{ route('contato') }}">Contate-nos</a>
    </li>
    </ul>
    </body>
</html>
