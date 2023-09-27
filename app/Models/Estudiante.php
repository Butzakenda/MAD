<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $fillable = ['user_id','Nombres','Apellidos','CorreoELectronico','Sexo', 'Lenguaje','PreferenciasEducativas','Carrera'];
    protected $primaryKey = 'IdEstudiante';
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function languages()
    {
        return $this->belongsToMany(Language::class);
    }
}
