<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    protected $fillable = ['user_id','Nombres','Apellidos','CorreoELectronico','Sexo'];
    protected $primaryKey = 'IdAdministrador';
    protected $table = 'Administradores';
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
