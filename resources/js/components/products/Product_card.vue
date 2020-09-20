<template>
    <div class="card efect" style="width: 14rem;">
    <img class="card-img-top" src="/images/marcos.jpg" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">{{name}}</h5>
        <p class="card-text">{{texto}}....</p>
        <div class="price">
            <h3 class="price">$ {{price}}</h3>
        </div>
        <a v-bind:href="product_id" class="btn btn-primary">Ver más</a>
        
    </div>
    </div>
</template>

<script>
export default {
    name: "product-card",
    props:['name','description', 'price', 'product_id'],
    data(){
        return{
            texto: this.description.substring(1,50)
        }
    }

    
}
</script>

<style scoped>
.price{
    text-align: right;
}
</style>