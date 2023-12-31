<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    protected $fillable = ['user_id','Nombres','Apellidos','CorreoElectronico','Sexo','Lenguaje','LearningWay'];
    protected $primaryKey = 'IdCoach';
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function cita()
    {
        return $this->hasMany(Cita::class,'IdCita');
    }
}
