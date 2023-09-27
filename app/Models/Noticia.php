<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $fillable = ['IdAdministrador','Titulo','Descripcion','Fecha', 'Imagen'];
    protected $primaryKey = 'IdNoticia';
    
    public function administrador()
    {
        return $this->belongsTo(Administrador::class, 'IdAdministrador');
    }
}
