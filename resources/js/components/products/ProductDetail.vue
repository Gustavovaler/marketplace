<template>
    <div>
        <div class="container">
{{name}}<br> {{seller_data.nombres}}<br>
        <img v-bind:src="image2" alt="" class="">
        </div>
    </div>
</template>

<script>
export default {
    props:[ 'name', 'description', 'quantity', 
            'price', 'image1', 'image2', 'product_id',
            'created', 'is_new', 'seller'],
    data(){
        return{
            seller_data: JSON.parse(this.seller)
        }
    },
    mounted(){
        
    }
    
}
</script>