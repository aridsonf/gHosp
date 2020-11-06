<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cadastro de Paciente</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


</head>

<body>


    <registro-dp></registro-dp>
    <registro-ct></registro-ct>
    <registro-ct></registro-ct>
    <registro-end></registro-end>

    
    </div>
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

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
