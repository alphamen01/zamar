<?php

namespace App\Models\DatosFamiliar;
use App\Models\AlumnoFamiliar\AlumnoFamiliarModels;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ViviendaModels extends Model
{
    //
    protected $table      =   'vivienda';
    protected $primaryKey =   'id_vivienda';
    public $timestamps = false;

    protected $fillable   =   [
                                'id_vivienda',
                                'nombre'
                               ];
     public function alumnofamiliars()
      {
          return $this->hasMany(AlumnoFamiliarModels::class,'id_vivienda');
      }
}
