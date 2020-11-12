@extends('template.app')

@section('conteudo')

<div id="adm" class="conteiner-fluid ">
        <div class="card border-dark mb-3 ">
          <div class="card-header text-center"">
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
  <a class="navbar-brand" href="#">gHosp</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Cadastro
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/cadastro-funcionario">Cadastrar Funcionário</a>
          <a class="dropdown-item" href="/cadastro-paciente">Cadastrar Paciente</a>
        </div>
      </li>
      <li>
        <form>
          <a type="submit" class="btn btn-dark align-right" href="/adm-login">Sair</a>
        </form>
      </li>
    </ul>
  </div>

</nav>
</div>
            <div class="card-body text-dark imgbg">

                <img src="{{ asset('img/consu2.jpg') }}" class="img-fluid" style="width: 100% \9" alt="Responsive image"> 
</div>
</div>
</div>

@endsection
