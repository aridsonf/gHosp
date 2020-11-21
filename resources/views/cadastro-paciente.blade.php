@extends('template.app')

@section('conteudo')
    <div id="cadastro-paciente" class="conteiner-fluid ">
        <div class="card border-dark mb-3 ">
            <div class="card-header text-center" style="font-size:30px"><b>CADASTRO DE PACIENTE</b></div>
            <div class="card-body text-dark bg-dark">
                <div class="conteiner-fluid py-3 px-lg-5 border rounded bg-gainsboro">
                    <div class="form">
                        <h3 class="text-center">Dados Pessoais</h3>
                        <!-- <div v-if="errors." class="container alert alert-danger card-block " role="alert"
                            style="    max-width: 468px;">
                            <p>
                                <b>Por favor, corrija o(s) seguinte(s) erro(s):</b>
                            <ul>
                                <li v-for="error in errors"><b> @{{ error }}</b></li>
                            </ul>
                            </p>
                        </div> -->
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
                                <input class="form-control" type="date" id="dataNasc" max="2199-01-11" v-model="dados.data_nascimento">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputTipo1" class="col-sm-2 col-form-label td">Identidade</label>
                            <div class="col-md-4 ">
                                <!-- <label for="inputTipo1">Tipo</label> -->
                                <input type="text" class="form-control" id="inputTipo2" placeholder="Orgão Exp" v-model="dados.orgao_expedidor">
                            </div>
                            <div class="col-md">
                                <input type="text" class="form-control" id="inputTipo3" placeholder="Nº" v-model="dados.identidade">
                            </div>
                        </div>

                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-2 pt-0 td">Sexo</legend>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                            value="Masculino" v-model="dados.sexo" checked>
                                        <label class="form-check-label" for="gridRadios1">
                                            Masculino
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                                            value="Feminino" v-model="dados.sexo">
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
                                            value="Sim" v-model="dados.plano_saude" checked>
                                        <label class="form-check-label" for="gridRadio1">
                                            Sim
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gridRadio" id="gridRadio2"
                                            value="Nao" v-model="dados.plano_saude">
                                        <label class="form-check-label" for="gridRadio2">
                                            Não
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset>
                            <hr />
                            <h3 class="text-center">Dados para Contato</h3>
                            <br />
                            <div class="form-group row">
                                <label for="inputEmail" class="col-sm-2 col-form-label td">Email</label>
                                <div class="col-md">
                                    <input
                                    type="email"
                                    class="form-control"
                                    id="inputEmail"
                                    placeholder="exemple@email.com"
                                    v-model="dados.email"
                                    />
                                </div>
                                <label for="inputTel" class="col-form-label td">Telefone</label>
                                <div class="col-md-3">
                                    <input
                                    type="tel"
                                    class="form-control"
                                    id="inputTel"
                                    placeholder=""
                                    v-model="dados.telefone"
                                    />
                                </div>
                            </div>
                        </fieldset>

                        <fieldset>
                            <hr />
                            <h3 class="text-center">Endereço</h3>
                            <br />

                            <div class="form-group row">
                                <label for="inputPais" class="col-sm-2 col-form-label td">País</label>
                                <div class="col-md">
                                     <select v-model="dados.pais" class="form-control">
                                        <option v-for="pais in paises" v-bind:value="pais.id">
                                            @{{ pais.nome_pt }}
                                        </option>
                                    </select>
                                </div>
                                
                                <label for="inputEstado" class="col-form-label td">Estado</label>
                                <div v-if="dados.pais === 1" class="col-md" >
                                     <select v-model="dados.estado_id" class="form-control">
                                        <option v-for="estado in estados" v-bind:value="estado.id">
                                            @{{ estado.nome }}
                                        </option>
                                    </select>
                                </div>
                                <div class="col-md-3" v-if="dados.pais != 1">
                                    <input
                                    type="Text"
                                    class="form-control"
                                    id="inputEstado"
                                    placeholder=""
                                    v-model="dados.nome_estado"
                                    />
                                </div>
                                <label for="inputCidade" class="col-form-label td">Cidade</label>
                                <div class="col-md">
                                    <input
                                    type="Text"
                                    class="form-control"
                                    id="inputCidade"
                                    placeholder=""
                                    v-model="dados.cidade"
                                    />
                                </div>
                                </div>
                                <div class="form-group row">
                                <label for="inputCEP" class="col-sm-2 col-form-label td">CEP</label>
                                <div class="col-md-2">
                                    <input
                                    type="Text"
                                    class="form-control"
                                    id="inputCEP"
                                    placeholder="12345-678"
                                    v-model="dados.cep"
                                    />
                                </div>
                                <label for="inputRua" class="col-form-label td">Rua</label>
                                <div class="col-md">
                                    <input
                                    type="Text"
                                    class="form-control"
                                    id="inputEndereco"
                                    placeholder=""
                                    v-model="dados.rua"
                                    />
                                </div>
                                </div>

                                <div class="form-group row">
                                <label for="inputBairro" class="col-sm-2 col-form-label td">Bairro</label>
                                <div class="col-md-2">
                                    <input
                                    type="text"
                                    class="form-control"
                                    id="inputBairro"
                                    placeholder=""
                                    v-model="dados.bairro"
                                    />
                                </div>
                                <label for="inputNumero" class="col-form-label td">Número</label>
                                <div class="col-md-1">
                                    <input
                                    type="Text"
                                    class="form-control"
                                    id="inputNumero"
                                    placeholder=""
                                    v-model="dados.numero"
                                    />
                                </div>
                                <label for="inputComplemento" class="col-form-label td"
                                    >Complemento</label
                                >
                                <div class="col-md">
                                    <input
                                    type="Text"
                                    class="form-control"
                                    id="inputComplemento"
                                    placeholder=""
                                    v-model="dados.complemento"
                                    />
                                </div>
                            </div>
                        </fieldset>

                        <fieldset>
                            <hr />
                            <h3 class="text-center">Dados Médicos</h3>
                            <br />
                            <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-2 pt-0 td">Alergia</legend>
                                <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                    <input
                                    class="form-check-input"
                                    type="radio"
                                    name="gridAlergia"
                                    id="gridAlergia1"
                                    v-model="checkAlergia"
                                    value="true"
                                    />
                                    <label class="form-check-label" for="gridAlergia1"> Sim </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input
                                    class="form-check-input"
                                    type="radio"
                                    name="gridAlergia"
                                    id="gridAlergia2"
                                    v-model="checkAlergia"
                                    value="false"
                                    checked
                                    />
                                    <label class="form-check-label" for="gridAlergia2"> Não </label>
                                </div>
                                </div>
                            </div>
                            <div class="row" v-show="checkAlergia">
                                <label for="inputText3" class="col-form-label col-sm-2 td"
                                >Quais?</label
                                >
                                <div class="col-md">
                                <input type="text" class="form-control" id="inputText3" v-model="dados.alergias" />
                                </div>
                            </div>
                            </fieldset>
                            <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-2 pt-0 td">Doença Crônica</legend>
                                <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                    <input
                                    class="form-check-input"
                                    type="radio"
                                    name="gridDC"
                                    id="gridDC3"
                                    v-model="checkDoenca"
                                    value="true"
                                    />
                                    <label class="form-check-label" for="gridDC1"> Sim </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input
                                    class="form-check-input"
                                    type="radio"
                                    name="gridDC"
                                    id="gridDC4"
                                    v-model="checkDoenca"
                                    value="false"
                                    checked
                                    />
                                    <label class="form-check-label" for="gridDC2"> Não </label>
                                </div>
                                </div>
                            </div>
                            <div class="row" v-show="checkDoenca">
                                <label for="inputDC" class="col-form-label col-sm-2 td">Quais?</label>
                                <div class="col-md">
                                <input type="text" class="form-control" id="inputDC" v-model="dados.doencas_cronicas" />
                                </div>
                            </div>
                            </fieldset>
                        </fieldset>

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
            el: '#cadastro-paciente',
            data: {
                urlBase: "{{ url('') }}",
                checkAlergia: false,
                checkDoenca: false,
                paises: <?=json_encode($paises) ?>,
                estados: <?=json_encode($estados) ?>,
                dados: {
                    'nome_completo': '',
                    'cpf': '',
                    'data_nascimento': '',
                    'orgao_expedidor': '',
                    'identidade': '',
                    'sexo': '',
                    'plano_saude': '',
                    'email': '',
                    'telefone': '',
                    'pais_id': 1,
                    'estado_id': '',
                    'nome_estado': '',
                    'cidade': '',
                    'cep': '',
                    'rua': '',
                    'bairro': '',
                    'numero': '',
                    'complemento': '',
                    'doencas_cronicas': '',
                    'alergias': ''

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

                    //
                    url = this.urlBase + '/cadastrar-paciente';

                    this.$http.post(url, this.dados).then(response => {
                        if (response.status == 200) {
                            this.limparCampos();
                            Swal.fire('Paciente cadastrado com sucesso!', '', 'success');
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
                ,
                limparCampos: function() {
                    this.dados.nome_completo = "";
                    this.dados.cpf = "";
                    this.dados.data_nascimento = "";
                    this.dados.orgao_expedidor = "";
                    this.dados.identidade = "";
                    this.dados.sexo = "";
                    this.dados.email = "";
                    this.dados.telefone = "";
                    this.dados.pais_id = 1;
                    this.dados.estado_id = "";
                    this.dados.nome_estado = "";
                    this.dados.cidade = "";
                    this.dados.cep = "";
                    this.dados.rua = "";
                    this.dados.bairro = "";
                    this.dados.numero = "";
                    this.dados.complemento = "";
                    this.dados.doencas_cronicas = "";
                    this.dados.alergias = "";


                    this.checkAlergia = false;
                    this.checkDoenca = false;
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
