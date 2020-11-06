@extends('template.app')

@section('conteudo')
    <div id="cadastro-parciente" class="conteiner-fluid ">
        <div class="card border-dark mb-3 ">
            <div class="card-header text-center" style="font-size:30px"><b>CADASTRO DE PACIENTE</b></div>
            <div class="card-body text-dark bg-dark">
                <div class="conteiner-fluid py-3 px-lg-5 border rounded bg-gainsboro">
                    <form>
                        <h3 class="text-center">Dados para Contato</h3>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label td">Email</label>
                            <div class="col-md">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="exemple@email.com">
                            </div>
                            <label for="inputTel3" class="col-form-label td">Telefone</label>
                            <div class="col-md-3">
                                <input type="tel" class="form-control" id="inputTel3" placeholder="(99) 99999-9999">
                            </div>
                        </div>
                    </form>
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
            },
            methods: {

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
