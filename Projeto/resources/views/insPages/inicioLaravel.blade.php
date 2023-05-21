<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Instruções</title>
    </head>
    <body>
        <a href="/PageInstrucao">Instruções</a></br>
        <h1>Início com Laravel 10</h1>
        <h3>Instalações:</h3>
        <p>Instale nesta ordem:</br>
            1-Instalar o xampp;</br>
            2-Instalar composer;</br>
            3-Adicionar o php instalado pelo xampp às variáveis de sistema:</br>
            Com o xampp instalado, o php também o foi.</br>
            É necessário incluir o php.exe (instalado elo xampp) na variável do sistema.</br>
            Siga os passos:</br>
            Painel de Controle>Sistema de Segurança>Sistema>Configurações Avançadas do Sistema>Avançado>Variáveis de Ambiente</br>
            incluir na lista o Path do php. Local padrão para windows:</br>
            C:/xampp/php</br>
            Salvar>ok</br>
            4-Instalar o VSCode:
            Não use a loja de apps da Microsoft. A versão do site oficial acessada pelo browser possui a opção de configurar o VSCode para aparecer no menú de contexto do windows para pastas e arquivos.</br>
            5-Habilitar o extrator Zip de arquivos do php:</br>
            No explore do Windows, busque o arquivo:</br>
            C:/xampp/php/php.ini</br>
            Use o botão direito do mouse e abra este arquivo com o VSCode</br>
            Busque a linha:</br>
            ";extension=zip"</br>
            Pode ser achado na linha 952 do arquivo. Caso não, pode usar o CTRL+F para achá-lo.</br>
            Edite para "extension=zip". Salve e feche o arquivo.</br>
            O ambiente está preparado para receber o Laravel.</br>
            </p>
        <h3>Instanciando o Laravel:</h3>
            Na pasta:</br>
            C:/xampp/htdocs</br>
            Crie uma pasta onde o projeto será alocado.</br>
            <strong>Se for usar o GitHub ou GitKraken ou qualquer Git, este é o momento de dar um jump na pasta nova.</strong></br>
            <p>Este pode ser instanciado de duas formas:</br>
            Global ou Local.</br>
            Vamos seguir com a local.</br>
            Abra o terminal (pode ser o do VSCode) na pasta do projeto:</br>
            use o comando:</br>
            composer create-project <em>--prefer-dist</em> laravel/laravel <strong><em>example-app "7.0.0"<em></strong></br>
            <em>--prefer-dist</em> é opcional.</br>
            <strong><em>example-app<em></strong> Use o nome do projeto.</br>
            <strong><em>"7.0.0"<em></strong> Para forçar uma determinada versão passada do laravel.</br>
            </p>
    </body>
</html>
