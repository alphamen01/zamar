<?php

namespace App\Models\DatosFamiliar;
use App\Models\AlumnoFamiliar\AlumnoFamiliarModels;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LaboraModels extends Model
{
    //
    protected $table      =   'labora';
    protected $primaryKey =   'id_labora';
    public $timestamps = false;

    protected $fillable   =   [
                                'id_labora',
                                'nombre'
                               ];
     public function alumnofamiliars()
     {
         return $this->hasMany(AlumnoFamiliarModels::class,'id_labora');
     }
}
