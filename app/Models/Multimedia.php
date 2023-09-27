<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Multimedia extends Model
{
    protected $fillable = ['IdRecomendaciones','IdAdministrador','Nombres','Descripcion','Tipo', 'Idioma','Estado','Duracion','Lenguaje','Tecnologia','Precio','Certificado','Imagen','Video','FechaInicio','FechaFin'];
    protected $primaryKey = 'IdMultimedia';
    
    public function recomendacion()
    {
        return $this->belongsTo(Recomendacion::class, 'IdRecomendaciones');
    }
    public function administrador()
    {
        return $this->belongsTo(Administrador::class, 'IdAdministrador');
    }
    
}
