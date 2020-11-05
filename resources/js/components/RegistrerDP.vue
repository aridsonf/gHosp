<template>
<form>    
        <h3 class="text-center">Dados Pessoais</h3>
            <div class="form-group row">
            <label for="inputNome3" class="col-sm-2 col-form-label td">Nome Completo</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="inputNome3" placeholder="Nome">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputCPF3" class="col-sm-2 col-form-label td">CPF</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="inputCPF3" placeholder="CPF">
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
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="opcao1" checked>
                <label class="form-check-label" for="gridRadios1">
                    Masculino
                </label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="opcao2">
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
                <input class="form-check-input" type="radio" name="gridRadio" id="gridRadio1" value="opca1" checked>
                <label class="form-check-label" for="gridRadio1">
                    Sim
                </label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gridRadio" id="gridRadio2" value="opca2">
                <label class="form-check-label" for="gridRadio2">
                    Não
                </label>
                </div>
            </div>
            </div>
        </fieldset>


</form> 
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>