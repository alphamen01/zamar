<?php

namespace App\Models\DatosFamiliar;
use App\Models\AlumnoFamiliar\AlumnoFamiliarModels;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FinanciaModels extends Model
{
    //
    protected $table      =   'financia';
    protected $primaryKey =   'id_financia';
    public $timestamps = false;

    protected $fillable   =   [
      'id_financia',
      'nombre'
     ];

     public function alumnofamiliars()
      {
          return $this->hasMany(AlumnoFamiliarModels::class,'id_financia');
      }
}
