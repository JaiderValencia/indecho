<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $table = 'users';

    public $timestamps = false;

    protected $fillable = [
        'Usu_NombreUsuario',
        'Usu_Usuario',
        'Usu_Password',
        'role_id',
    ];

    protected $hidden = [
        'password'
    ];

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }
}
