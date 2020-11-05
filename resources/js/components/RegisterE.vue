<template>
  <form>
    <hr />
    <h3 class="text-center">Endereço</h3>
    <br />

    <div class="form-group row">
      <label for="inputText3" class="col-sm-2 col-form-label td">País</label>
      <div class="col-md">
        <input
          type="text"
          class="form-control"
          id="inputText3"
          placeholder="Brasil"
        />
      </div>
      <label for="inputText3" class="col-form-label td">Estado</label>
      <div class="col-md-3">
        <input
          type="Text"
          class="form-control"
          id="inputText3"
          placeholder="Maranhão"
        />
      </div>
      <label for="inputText3" class="col-form-label td">Cidade</label>
      <div class="col-md">
        <input
          type="Text"
          class="form-control"
          id="inputText3"
          placeholder="São luís"
        />
      </div>
    </div>
    <div class="form-group row">
      <label for="inputText3" class="col-sm-2 col-form-label td">CEP</label>
      <div class="col-md-2">
        <input
          type="Text"
          class="form-control"
          id="inputText3"
          placeholder="12345-678"
        />
      </div>
      <label for="inputText3" class="col-form-label td">Endereçosdf</label>
      <div class="col-md">
        <input
          type="Text"
          class="form-control"
          id="inputText3"
          placeholder="Rua exemplo"
        />
      </div>
    </div>

    <div class="form-group row">
      <label for="inputText3" class="col-sm-2 col-form-label td">Bairro</label>
      <div class="col-md-2">
        <input
          type="text"
          class="form-control"
          id="inputText3"
          placeholder="Centro"
        />
      </div>
      <label for="inputText3" class="col-form-label td">Número</label>
      <div class="col-md-1">
        <input
          type="Text"
          class="form-control"
          id="inputTel3"
          placeholder="123"
        />
      </div>
      <label for="inputText3" class="col-form-label td">Complemento</label>
      <div class="col-md">
        <input
          type="Text"
          class="form-control"
          id="inputText3"
          placeholder="UFMA"
        />
      </div>
    </div>
  </form>
</template>


<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },
};
</script>