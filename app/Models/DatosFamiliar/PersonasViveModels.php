<?php

namespace App\Models\DatosFamiliar;
use App\Models\AlumnoFamiliar\AlumnoFamiliarModels;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PersonasViveModels extends Model
{
    //
    protected $table      =   'personas_vive';
    protected $primaryKey =   'id_persona_vive';
    public $timestamps = false;

    protected $fillable   =   [
                                'id_persona_vive',
                                'nombre'
                               ];
     public function alumnofamiliars()
      {
          return $this->hasMany(AlumnoFamiliarModels::class,'id_persona_vive');
      }
}
