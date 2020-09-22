<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombres','apellidos', 'email', 'password','is_vendedor', 'is_active', 'is_premium',
        'edad', 'fecha_nacimiento', 'dni', 'celular', 'telefono', 'id_provincia', 'id_ciudad',
        'localidad', 'calle' , 'numero_puerta', 'piso', 'departamento', 'codigo_postal', 'id_vendedor', 'id_comprador',
        'id_cuenta', 'avatar', 'email_secundario', 'nick_usuario'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
