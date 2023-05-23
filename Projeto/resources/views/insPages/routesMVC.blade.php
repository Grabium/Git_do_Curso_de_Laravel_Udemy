<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Intruções</title>
    </head>
    <body>
        <a href="{{ route('instrucao') }}">Instruções</a></br>
        <h1>Tutorial</h1>
        <h3>Comandos úteis no terminal</h3>
        <p>
        php artisan .........................................mostra os comandos do artisan</br>
        php artisan serve ...................................inicia servidor na porta padrão 8000</br>
        php artisan serve --port=9000 ......................inicia servidor na porta escolhida 9000</br>
        php artisan down ....................................desvia para modo manutenção</br>
        php artisan up ......................................volta para modo normal, padronizado</br>
        </br>
        </br>
        Routes possui:</br>
        API ..........Quando o o front-end solicita http</br>
        Channels......uso do Broadcasting.....é quando a aplicação/site manda a notificação (tempo-real)para o front-end contendo uma informação.</br>
        Console.......comando personalizado para a classe Artisan</br>
        Web...........roteamento tradicional como submites e etc.</br></p>
    </body>
</html>
