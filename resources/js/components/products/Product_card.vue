<template>
    <div class="card efect" style="width: 14rem;">
    <img class="card-img-top" src="/images/marcos.jpg" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">{{name}}</h5>
        <p class="card-text">{{description}}</p>
        <a href="#" class="btn btn-primary">Ver más</a>
    </div>
    </div>
</template>

<script>
export default {
    name: "product-card",
    props:['name','description']
    
}
</script>

<style scoped>

</style>