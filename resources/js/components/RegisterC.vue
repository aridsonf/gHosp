<template>
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
</template>


<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>