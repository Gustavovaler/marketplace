<template>
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="guarda"></div>                        
                <div class="card-header">
                   <h3> Publica tu producto</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Titulo</label>
                        
                            <div class="col-md-6">
                                <input id="nombres" type="text" class="form-control" name="titulo" value="" required autocomplete="titulo" autofocus>                               
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>        
    </div>
</template>

<script>
export default {
    
}
</script>

<style scoped>
.guarda{
    min-height: 6px;
    width: 100%;
    background-color:rgb(211, 72, 8) ;
}
</style>