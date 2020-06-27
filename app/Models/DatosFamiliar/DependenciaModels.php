<?php

namespace App\Models\DatosFamiliar;
use App\Models\AlumnoFamiliar\AlumnoFamiliarModels;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DependenciaModels extends Model
{
    //
    protected $table      =   'dependencia';
    protected $primaryKey =   'id_dependencia';
    public $timestamps = false;

    protected $fillable   =   [
      'id_dependencia',
      'nombre'
     ];

     public function alumnofamiliars()
      {
          return $this->hasMany(AlumnoFamiliarModels::class,'id_dependencia');
      }

}
