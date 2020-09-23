<template>
    <div>
        <div class="container mt-2">
            <!-- MAIN ROW -->
            <div class="row">
               <!-- LEFT COLUMN -->
                <div class="col-md-9" id="center_content"> 
                    <!-- TITLE ROW -->
                    <div class="row-md-12 title mb-2">
                        <h2>{{name}}</h2>
                    </div>
                    <!-- TOP CONTENT ROW -->
                    <div class="row content-row">
                        <div class="col-md-6">
                            <img v-bind:src="image1" alt="" class="img-center">
                        </div>
                        <div class="col-md-6">
                            <span class="badge badge-secondary">Marca </span> {{marca}}<br>
                            <span class="badge badge-secondary">Condicion </span><span v-if="is_new == 0 "> Usado</span><span  v-else> Nuevo</span><br>
                            <span class="badge badge-secondary">Stock </span> <span class="quantity-box"> {{quantity}}</span> 
                        </div>
                    </div>
                    <!-- MIDDLE CONTENT ROW -->
                    <div class="row content-row">
                        <div class="col-md-7 p-2 ">
                            <img v-bind:src="image2" alt="" class="thumbnail">
                            <img v-bind:src="image2" alt="" class="thumbnail">
                            <img v-bind:src="image2" alt="" class="thumbnail">
                            <img v-bind:src="image2" alt="" class="thumbnail">

                        </div>
                        <div class="col-md-5">
                            
                        </div>
                    </div>
                <!-- BOTTOM CONTENT ROW -->
                    <hr>
                    <div class="row content-row">
                        <div class="col-md-12 p-2 ">
                            <div class="subtitle">
                                <h5>Descripción</h5>
                            </div>
                          <p>
                              {{description}}
                          </p>

                        </div>
                        
                    </div>
                    <hr>
                </div>
                <div class="col-md-3" id="aside">
                    <div class="row">
                        <div class="guarda">

                        </div>
                        <div class="col pt-3 text-center">
                            <h2 >Tuyo por solo:</h2>
                            <h1 class="price bg-success text-white">$ {{price}}</h1>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col pt-3 text-center">
                            <h5>Datos del vendedor</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col pt-3 text-center">
                            <p><b>Nombre: </b>{{seller_data.nombres}}</p>
                            <p><b>Apellido: </b>{{seller_data.apellidos}}</p>
                            <p><b>Telefono: </b>{{seller_data.telefono}}</p>
                            <p><b>Provincia: </b>{{provincia}}</p>
                            <p><b>Ciudad: </b>{{localidad}}</p>
                            <div class="comprar">
                                <a href="" class="btn btn-primary btn-block">Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
export default {
    props:[ 'name', 'description', 'quantity', 
            'price', 'image1', 'image2', 'product_id',
            'created', 'is_new', 'seller', 'provincia', 'localidad',
            'marca'],
    data(){
        return{
            seller_data: JSON.parse(this.seller)
        }
    },
    mounted(){
        
    }
    
}
</script>

<style >
.guarda{
    min-height: 6px;
    width: 100%;
    background-color:rgb(211, 72, 8) ;
}
.title{
    /* background-color: rgb(216, 236, 245); */
    background: rgb(211, 72, 8);
    color: snow;
    padding: .2rem .7rem;
    border-radius: 4px;
}
.price{
    padding: .4rem;
    border-radius: 4px;
}
.quantity-box{
    background-color: rgb(228, 224, 224);
    padding: 1px 4px;
    border-radius: 3px;
}
.img-center{
    border-radius: 8px;
    border: 1px solid rgb(196, 196, 196);
    max-width: 100%;
}
.img-center:hover{
    border: 1px solid #03578f;
    box-shadow: 1px 2px 2px rgba(5, 247, 222, 0.4);
}
/* .content-row{
    background-color: rosybrown;
} */
#aside{
    /* background-color: royalblue; */
    box-shadow: 1px 3px 3px 1px rgba(0, 0, 0, 0.3);
}
.thumbnail{
    width: 65px;
    border-radius: 4px;
    border: 1px solid transparent;
}
.thumbnail:hover{
    border: 1px solid #03578f;
    box-shadow: 1px 2px 2px  rgba(5, 247, 222, 0.4);
}
</style>