<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    public $timestamps = false;


    protected $fillable = [
        'Role_nombre',
        'Role_menu'
    ];


    public function users()
    {
        return $this->hasMany(User::class, 'Role_id');
    }
}
