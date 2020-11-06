@extends('template.app')

@section('conteudo')
    <div id="cadastro-parciente" class="conteiner-fluid ">
        <div class="card border-dark mb-3 ">
            <div class="card-header text-center" style="font-size:30px"><b>CADASTRO DE PACIENTE</b></div>
            <div class="card-body text-dark bg-dark">
                <div class="conteiner-fluid py-3 px-lg-5 border rounded bg-gainsboro">
                    <div class="form">
                        <h3 class="text-center">Dados Pessoais</h3>
                        <div v-if="errors.length" class="container alert alert-danger card-block " role="alert"
                            style="    max-width: 468px;">
                            <p>
                                <b>Por favor, corrija o(s) seguinte(s) erro(s):</b>
                            <ul>
                                <li v-for="error in errors"><b> @{{ error }}</b></li>
                            </ul>
                            </p>
                        </div>
                        <div class="form-group row">
                            <label for="inputNome3" class="col-sm-2 col-form-label td">Nome Completo</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputNome3" v-model="dados.nome_completo"
                                    placeholder="Nome">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputCPF3" class="col-sm-2 col-form-label td">CPF</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputCPF3" v-model="dados.cpf"
                                    placeholder="CPF">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="dataNasc" class="col-sm-2 col-form-label td">Data de Nascimento</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="date" id="dataNasc" max="2199-01-11">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputTipo1" class="col-sm-2 col-form-label td">Identidade</label>
                            <div class="col-md-4 ">
                                <!-- <label for="inputTipo1">Tipo</label> -->
                                <select class="form-control" id="inputTipo1">
                                    <option>Orgão Expeditor</option>
                                    <option>SSP</option>
                                    <option>SPP</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="col-md">
                                <input type="text" class="form-control" id="inputTipo3" placeholder="Nº">
                            </div>
                        </div>

                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-2 pt-0 td">Sexo</legend>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                            value="opcao1" checked>
                                        <label class="form-check-label" for="gridRadios1">
                                            Masculino
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                                            value="opcao2">
                                        <label class="form-check-label" for="gridRadios2">
                                            Feminino
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-2 pt-0 td">Plano de Saúde</legend>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gridRadio" id="gridRadio1"
                                            value="opca1" checked>
                                        <label class="form-check-label" for="gridRadio1">
                                            Sim
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gridRadio" id="gridRadio2"
                                            value="opca2">
                                        <label class="form-check-label" for="gridRadio2">
                                            Não
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <button type="button" @click="enviar()" class="btn btn-primary btn-lg btn-block">Enviar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#csrf-token').getAttribute('content');
        var app = new Vue({
            el: '#cadastro-parciente',
            data: {
                urlBase: "{{ url('') }}",
                dados: {
                    'nome_completo': '',
                    'cpf': '',
                },
                errors: '',
            },
            methods: {
                idEmpty: function(str) {
                    return (!str || 0 === str.length || /^\s*$/.test(str) || str == 0);
                },
                enviar: function() {
                    this.errors = [];
                    if (this.idEmpty(this.dados.nome_completo)) {
                        this.errors.push('O Nome Completo é obrigatório.');
                    }
                    if (this.idEmpty(this.dados.cpf)) {
                        this.errors.push('O CPF é obrigatório.');
                    }

                    if (this.errors.length > 0) {
                        return false;
                    }
                    Swal.fire('olha o console', '', 'success');

                    setTimeout(() => {
                        Swal.fire('olha o console agora arrombado', '', 'error');

                    }, 1000);

                    console.log(this.dados);

                    /// logica de um post ()a biblioteca é vue-resource, qualquer duvida da um google
                    //
                    url = this.urlBase + '/cadastrar-parciente';

                    this.$http.post(url, this.dados).then(response => {
                        if (response.body.stts == 1) {

                            Swal.fire(response.body.msg, '', 'success');
                        } else {
                            Swal.fire(response.body.msg, '', 'error');

                        }
                    });
                }
            },
            filters: {
                formataData: function(value) {
                    if (value) {
                        return moment(String(value)).format('DD/MM/YY HH:mm');
                    }
                    return "";
                }
            },
            created: function() {
                console.log(this.urlBase);
            }
        });

    </script>


@endsection
