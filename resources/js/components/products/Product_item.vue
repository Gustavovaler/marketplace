<template>
    
            <div class="card">
                <div class="card-body">
                    <a :href="'/products/'+id"><img :src="foto" alt="" class="thumb"></a>
                    <a  :href="'/products/'+id" class="titulo">{{titulo}}  </a><span class="precio">$ {{price}}</span>
                </div>
            </div>           
          
    
</template>

<script>
export default {
    props: ['titulo','foto', 'price', 'id']
}
</script>
<style scoped>

.thumb{
    width: 90px;
}
.titulo{
    font-size: 1rem;
    /* font-weight: bold; */
    padding-left: 10px;
    color: black;
    text-decoration-line: none;
    text-decoration-style: none;
    
}

.precio{
    font-size: 1.5rem ;
    font-style: bolder;
    float: right;
    margin-right: 10px;
    vertical-align: middle;
}

</style>