<template>
    <div class="row">
        <div class="col-md-9 offset-3">
            <div class="card">
                <div class="card-body">
                    <img :src="foto" alt="" class="thumb">
                    <span class="titulo">{{titulo}}  </span><span class="precio">$ {{price}}</span>
                </div>
            </div>           
        </div>   
    </div>
</template>

<script>
export default {
    props: ['titulo','foto', 'price']
}
</script>
<style scoped>

.row{
    /* background: pink; */
}
.thumb{
    width: 75px;
}
.titulo{
    font-size: 1.2rem;
    font-weight: bold;
    padding-left: 10px;
}
.precio{
    font-size: 1.5rem ;
    font-style: bolder;
    float: right;
    margin-right: 10px;
    vertical-align: middle;
}

</style>