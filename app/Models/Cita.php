<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $fillable = ['IdEstudiantes','IdCoach','Duracion','Estado','FechaHoraInicio','FechaHoraFin'];
    protected $primaryKey = 'IdCita';
    
    
    public function estudiante()
    {
        return $this->belongsTo(Estudiante::class, 'IdEstudiantes');
    }
    public function coach()
    {
        return $this->belongsTo(Coach::class, 'IdEstudiantes');
    }
}
