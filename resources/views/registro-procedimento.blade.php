@extends('template.app')

@section('conteudo')
    <div id="registro-procedimento" class="conteiner-fluid ">
        <div class="card border-dark mb-3 ">
            <div class="card-header text-center" style="font-size:30px"><b>CADASTRO DE PROCEDIMENTO</b></div>
            <div class="card-body text-dark bg-dark">
                <div class="conteiner-fluid py-3 px-lg-5 border rounded bg-gainsboro">
                    <div class="form">
                        <div class="form-group row">
                            <label for="inputNome3" class="col-sm-2 col-form-label td">Paciente</label>
                            <div class="col-sm-10">
                                <select v-model="dados.paciente_id" class="form-control">
                                    <option v-for="paciente in pacientes" v-bind:value="paciente.id_paciente">
                                        @{{ paciente.nome }}
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputCPF3" class="col-sm-2 col-form-label td">Tipo de Procedimento</label>
                            <div class="col-sm-10">
                                <select v-model="dados.tipo_procedimento_id" class="form-control">
                                    <option v-for="tipo_procedimento in tipos_procedimentos" v-bind:value="tipo_procedimento.id">
                                        @{{ tipo_procedimento.nome_procedimento }}
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputNomeProc" class="col-sm-2 col-form-label td">Nome do Procedimento</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputNomeProc" v-model="dados.nome_procedimento"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="dataProc" class="col-sm-2 col-form-label td">Data do Procedimento</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="date" id="dataNasc" max="2199-01-11" v-model="dados.data_procedimento">
                            </div>
                        </div>
                        <div class="form-group row" v-show="dados.tipo_procedimento_id == 1">
                            <label for="inputTipo1" class="col-sm-2 col-form-label td">Profissional Responsável</label>
                            <div class="col-md">
                            <select v-model="dados.funcionario_id" class="form-control">
                                <option v-for="funcionario in funcionarios" v-bind:value="funcionario.id_funcionario">
                                    @{{ funcionario.nome }}
                                </option>
                            </select>
                            </div>
                        </div>

                        <div class="form-group row ">
                            <div class="col text-center">
                                <button @click="enviar()" class="btn btn-light   shadow-sm">Enviar</button>
                                <a href="/adm-lobby" class="btn btn-light shadow-sm">Voltar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
       Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#csrf-token').getAttribute('content');
        var app = new Vue({
            el: '#registro-procedimento',
            data: {
                urlBase: "{{ url('') }}",
                pacientes: <?=json_encode($pacientes) ?>,
                funcionarios: <?=json_encode($funcionarios) ?>,
                tipos_procedimentos: <?=json_encode($tipos_procedimentos) ?>,
                dados: {
                    'paciente_id': '',
                    'funcionario_id': '',
                    'data_procedimento': '',
                    'tipo_procedimento_id': '',
                    'nome_procedimento': '',
                },
                errors: '',
            },
            methods: {
                idEmpty: function(str) {
                    return (!str || 0 === str.length || /^\s*$/.test(str) || str == 0);
                },
                enviar: function() {
                    url = this.urlBase + '/registrar-procedimento';

                    console.log(this.dados);
                   

                    this.$http.post(url, this.dados).then(response => {
                        if (response.status == 200) {
                            this.limparCampos();
                            Swal.fire('Procedimento cadastrado com sucesso!', '', 'success');
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: response.body.message
                            });
                            console.log('OI');
                        }
                    });
                    
                },
                limparCampos: function() {
                    this.dados.paciente_id = "";
                    this.dados.funcionario_id = "";
                    this.dados.data_procedimento = "";
                    this.dados.tipo_procedimento_id = "";
                    this.dados.nome_procedimento = "";
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
