<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Intruções</title>
    </head>
    <body>
        <a href="{{ route('inicioLaravel') }}">Inicio com Laravel</a><br/>
        <a href="{{ route('routesMVC') }}">Rotas MVC</a><br/>
        <a href="{{ route('comentarios') }}">Comentários php e blade.</a><br/>
        <a href="/PageParamPorController/abcd/1234">Testes de parâmetros</a><br/>
        <a href="{{ route('home') }}">Home Page</a><br/>
        
    </body>
</html>
