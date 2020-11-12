@extends('template.app')

@section('conteudo')
<div class="conteiner-fluid py-5 px-lg-5 border rounded bg-dark">
    <h1 class="tc text-white ">gHosp</h1>
</br>
    <div class="form col tc">
    <div class="form-group ">
        <input type="email" class="form-control mx-auto" style="width: 400px" id="inputEmail" aria-describedby="emailHelp" placeholder="Email">
    </div>
    <div class="form-group">
        <input type="password" class="form-control mx-auto" style="width: 400px" id="inputPassword" placeholder="Password">
    </div>
    <a type="submit" href="/adm-lobby" class="btn btn-light">Login</a>
    </div>
</div>

@endsection
