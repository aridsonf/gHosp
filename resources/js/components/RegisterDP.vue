<template>
  <form>
    <h3 class="text-center">Dados Pessoais</h3>
    <br />

    <div class="form-group row">
      <label for="inputNome" class="col-sm-2 col-form-label td"
        >Nome Completo</label
      >
      <div class="col-sm-10">
        <input
          type="text"
          class="form-control"
          id="inputNome"
          placeholder="Boku no Pico"
        />
      </div>
    </div>
    <div class="form-group row">
      <label for="inputCPF" class="col-sm-2 col-form-label td">CPF</label>
      <div class="col-sm-10">
        <input
          type="text"
          class="form-control"
          id="inputCPF"
          placeholder="666.666.666-66"
        />
      </div>
    </div>
    <div class="form-group row">
      <label for="dataNasc" class="col-sm-2 col-form-label td"
        >Data de Nascimento</label
      >
      <div class="col-sm-10">
        <input
          class="form-control"
          type="date"
          id="dataNasc"
          max="2199-01-11"
          placeholder="31/10/1999"
        />
      </div>
    </div>
    <div class="form-group row">
      <label for="inputIdent" class="col-sm-2 col-form-label td"
        >Identidade</label
      >
      <div class="col-md-4">
        <!-- <label for="inputTipo1">Tipo</label> -->
        <select class="form-control" id="inputIdent">
          <option>Orgão Expeditor</option>
          <option>SSP</option>
          <option>SPP</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>
      <div class="col-md">
        <input
          type="text"
          class="form-control"
          id="inputIdent"
          placeholder="Nº"
        />
      </div>
    </div>

    <fieldset class="form-group">
      <div class="row">
        <legend class="col-form-label col-sm-2 pt-0 td">Sexo</legend>
        <div class="col-sm-10">
          <div class="form-check form-check-inline">
            <input
              class="form-check-input"
              type="radio"
              name="gridSexo"
              id="gridSexoM"
              value="opcao1"
              checked
            />
            <label class="form-check-label" for="gridSexoM"> Masculino </label>
          </div>
          <div class="form-check form-check-inline">
            <input
              class="form-check-input"
              type="radio"
              name="gridSexo"
              id="gridSexoF"
              value="opcao2"
            />
            <label class="form-check-label" for="gridSexoF"> Feminino </label>
          </div>
        </div>
      </div>
    </fieldset>

    <fieldset class="form-group">
      <div class="row">
        <legend class="col-form-label col-sm-2 pt-0 td">Plano de Saúde</legend>
        <div class="col-sm-10">
          <div class="form-check form-check-inline">
            <input
              class="form-check-input"
              type="radio"
              name="gridPlanSaude"
              id="gridPlanSaudeS"
              value="opca1"
              checked
            />
            <label class="form-check-label" for="gridRadio1"> Sim </label>
          </div>
          <div class="form-check form-check-inline">
            <input
              class="form-check-input"
              type="radio"
              name="gridPlanSaude"
              id="gridPlanSaudeN"
              value="opca2"
            />
            <label class="form-check-label" for="gridPlanSaudeN"> Não </label>
          </div>
        </div>
      </div>
    </fieldset>
  </form>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },
};
</script>