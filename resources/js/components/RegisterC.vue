<template>
<form>    
        <h3 class="text-center">Contato</h3>
        <div class="form-group row">
            <div class="col-md-4 ">
                <label for="inputTipo1">Email</label>
                <input type="text" class="form-control" id="inputTipo3" placeholder="Email">
            </div>
            <div class="col-md">
                <label for="inputTipo1">Email</label>
                <input type="text" class="form-control" id="inputTipo3" placeholder="Telefone">
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