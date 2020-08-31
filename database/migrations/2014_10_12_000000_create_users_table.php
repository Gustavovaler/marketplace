<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nombres');
            $table->string('apellidos');
            $table->integer('edad')->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('dni')->nullable(); 
            $table->string('telefono')->nullable();
            $table->string('celular')->nullable(); 
            $table->unsignedBigInteger('id_provincia')->nullable();
            $table->unsignedBigInteger('id_ciudad')->nullable();
            $table->string('localidad')->nullable();
            $table->string('calle')->nullable();
            $table->integer('numero_puerta')->nullable();
            $table->string('piso')->nullable();
            $table->string('departamento')->nullable();  
            $table->integer('codigo_postal')->nullable();   
            $table->boolean('is_vendedor')->default(0);
            $table->unsignedBigInteger('id_vendedor')->nullable();
            $table->unsignedBigInteger('id_comprador')->nullable();
            $table->boolean('is_active')->default(0);
            $table->boolean('is_premium')->default(0);
            $table->unsignedBigInteger('id_cuenta')->nullable();
            $table->string('avatar')->nullable();
            $table->string('email')->unique();
            $table->string('email_secundario');
            $table->string('nick_usuario')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
