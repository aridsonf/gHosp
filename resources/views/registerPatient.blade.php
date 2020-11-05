<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cadastro de Paciente</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">


    </head>
<body></body>
        <div class="conteiner-fluid ">
        <div class="card border-dark mb-3 ">
            <div class="card-header text-center" style="font-size:30px"><b>CADASTRO DE PACIENTE</b></div>
        <div class="card-body text-dark bg-dark">
            <div class="conteiner-fluid py-3 px-lg-5 border rounded bg-gainsboro">
    <div id="app">
        
        <registro-dp></registro-dp>
        <registro-ct></registro-ct>
        <registro-end></registro-end>
    </div>
    <hr/>
    <div class="form-group row ">
        <div class="col text-center">
        <button type="submit" class="btn btn-light shadow-sm">Cadastrar</button>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
 
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>