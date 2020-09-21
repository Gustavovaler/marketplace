<template>
    <div class="ccard efect" >
        <div class="">
            <div class="row top">
                <div class="col">
                    <a v-bind:href="product_id"><img class="card-img-top" :src="image" alt="Card image cap"></a>
                </div>
            </div>
            <div class="row ">
                <div class="col text-center data">
                    {{name}}
                </div>
                
            </div>
            
        </div>

   
    </div>
     <!-- <a v-bind:href="product_id"><img class="card-img-top" src="/images/marcos.jpg" alt="Card image cap"></a>
    <div class="card-body">
        <h5 class="card-title">{{desc}}</h5>
        <p class="card-text">{{texto}}....</p>
        <div class="price">
            <h3 class="price">$ {{price}}</h3>
        </div>
        <a v-bind:href="product_id" class="btn btn-primary">Ver más</a>
        
    </div> -->
</template>

<script>
export default {
    name: "product-card",
    props:['name','description', 'price', 'product_id','image'],
    data(){
        return{
            texto: this.description.substring(0,30),
            desc: this.name.substring(0,25)
        }
    }

    
}
</script>

<style scoped>
.price{
    text-align: right;    
}
.efect{
    box-shadow: 1px 5px 5px rgba(0, 0, 0, .4);
}
.data{
    max-width: 100%;
}
.data:hover{
    box-sizing: border-box;
    background-color: orangered;
}
</style>