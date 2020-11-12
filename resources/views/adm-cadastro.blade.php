@extends('template.app')

@section('conteudo')

    <div id="cadastro-paciente" class="conteiner-fluid ">
        <div class="card border-dark mb-3 ">
            <div class="header">
                <a class="logo">Nome do maluco</a>
                <div class="header-right">
                <li class="navbar">
                    <a class="active" href="#home">Home</a>
                      <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Cadastro
        </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#cadastro-funcionario">Cadastrar Funicionário</a>
                                <a class="dropdown-item" href="#cadastro-paciente">Cadastrar Paciente</a>
                            </div>
                        </div>
                    <a href="#about">Informações</a>
                </li>
                </div>
            </div>
            <div class="card-body text-dark bg-dark">
                <div class="conteiner-fluid py-3 px-lg-5 border rounded bg-gainsboro">
                    <div class="form">
                        <button @click="enviar()" class="btn btn-primary btn-lg btn-block">Enviar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
