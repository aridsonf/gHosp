<template>
  <form>
    <hr />
    <h3 class="text-center">Endereço</h3>
    <br />

    <div class="form-group row">
      <label for="inputPais" class="col-sm-2 col-form-label td">País</label>
      <div class="col-md">
        <input
          type="text"
          class="form-control"
          id="inputPais"
          placeholder="Brasil"
        />
      </div>
      <label for="inputEstado" class="col-form-label td">Estado</label>
      <div class="col-md-3">
        <input
          type="Text"
          class="form-control"
          id="inputEstado"
          placeholder="Maranhão"
        />
      </div>
      <label for="inputCidade" class="col-form-label td">Cidade</label>
      <div class="col-md">
        <input
          type="Text"
          class="form-control"
          id="inputCidade"
          placeholder="São luís"
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
        />
      </div>
      <label for="inputEndereco" class="col-form-label td">Endereço</label>
      <div class="col-md">
        <input
          type="Text"
          class="form-control"
          id="inputEndereco"
          placeholder="Rua exemplo"
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
          placeholder="Centro"
        />
      </div>
      <label for="inputNumero" class="col-form-label td">Número</label>
      <div class="col-md-1">
        <input
          type="Text"
          class="form-control"
          id="inputNumero"
          placeholder="123"
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
          placeholder="Proxíma à UFMA"
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