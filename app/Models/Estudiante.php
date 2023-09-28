<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $fillable = ['user_id','Nombres','Apellidos','CorreoElectronico','Sexo', 'Lenguaje','PreferenciasEducativas','Carrera'];
    protected $primaryKey = 'IdEstudiantes';
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function lenguaje()
    {
        return $this->belongsToMany(Lenguaje::class);
    }
    public function cita()
    {
        return $this->hasMany(Cita::class,'IdCita');
    }
    
}
