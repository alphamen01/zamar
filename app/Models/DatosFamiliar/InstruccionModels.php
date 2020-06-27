<?php

namespace App\Models\DatosFamiliar;
use App\Models\AlumnoFamiliar\AlumnoFamiliarModels;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InstruccionModels extends Model
{
    //
    protected $table      =   'instruccion';
    protected $primaryKey =   'id_instruccion';
    public $timestamps = false;

    protected $fillable   =   [
          'id_instruccion',
          'nombre'
     ];

      public function alumnofamiliars()
      {
          return $this->hasMany(AlumnoFamiliarModels::class,'id_instruccion');
      }
}
