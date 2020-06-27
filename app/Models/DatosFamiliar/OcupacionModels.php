<?php

namespace App\Models\DatosFamiliar;
use App\Models\AlumnoFamiliar\AlumnoFamiliarModels;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OcupacionModels extends Model
{
    //
    protected $table      =   'ocupacion';
    protected $primaryKey =   'id_ocupacion';
    public $timestamps = false;

    protected $fillable   =   [
                                'id_ocupacion',
                                'nombre'
                               ];
                               
     public function alumnofamiliars()
      {
          return $this->hasMany(AlumnoFamiliarModels::class,'id_ocupacion');
      }
}
