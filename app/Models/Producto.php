<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Producto extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function categoria() {
        return $this->belongsTo(\App\Models\Categoria::class);
    }

    public function setNombreAttribute($value){
        $this->attributes['nombre'] = ucfirst(strtolower($value));
    }

    public function setConceptoAttribute($value){
        $this->attributes['concepto'] = ucfirst(strtolower($value));
    }

    public function setDescripcionAttribute($value){
        $this->attributes['descripcion'] = ucfirst(strtolower($value));
    }

    public function getNombreAttribute($value){
        return ucfirst(strtolower($value));
    }

    public function getConceptoAttribute($value){
        return ucfirst(strtolower($value));
    }

    public function getDescripcionAttribute($value){
        return ucfirst(strtolower($value));
    }
}
