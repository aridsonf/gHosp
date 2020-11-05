<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cadastro de Profissional</title>
        <script rel="stylesheet" href="{{asset('css/app.css')}}"></script>

        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    </head>
<body>
    <div id="app">
        <registroDP></registroDP>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>