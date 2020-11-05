<template>
  <form>
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
              value="opcao1"
              checked
            />
            <label class="form-check-label" for="gridAlergia1"> Sim </label>
          </div>
          <div class="form-check form-check-inline">
            <input
              class="form-check-input"
              type="radio"
              name="gridAlergia"
              id="gridAlergia2"
              value="opcao2"
            />
            <label class="form-check-label" for="gridAlergia2"> Não </label>
          </div>
        </div>
      </div>
      <div class="row">
        <label for="inputText3" class="col-form-label col-sm-2 td"
          >Quais?</label
        >
        <div class="col-md">
          <input type="text" class="form-control" id="inputText3" />
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
              value="opcao3"
              checked
            />
            <label class="form-check-label" for="gridDC1"> Sim </label>
          </div>
          <div class="form-check form-check-inline">
            <input
              class="form-check-input"
              type="radio"
              name="gridDC"
              id="gridDC4"
              value="opcao4"
            />
            <label class="form-check-label" for="gridDC2"> Não </label>
          </div>
        </div>
      </div>
      <div class="row">
        <label for="inputDC" class="col-form-label col-sm-2 td">Quais?</label>
        <div class="col-md">
          <input type="text" class="form-control" id="inputDC" />
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