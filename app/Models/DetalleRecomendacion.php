<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleRecomendacion extends Model
{
    protected $fillable = ['IdRecomendacion','IdEstudiante'];
    protected $primaryKey = 'IdDetalleRecomendacion';
    
    public function recomendacion()
    {
        return $this->belongsTo(Recomendacion::class, 'IdRecomendacion');
    }
    public function estudiante()
    {
        return $this->belongsTo(Estudiante::class, 'IdEstudiante');
    }
}
