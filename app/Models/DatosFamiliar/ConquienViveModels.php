<?php

namespace App\Models\DatosFamiliar;
use App\Models\AlumnoFamiliar\AlumnoFamiliarModels;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ConquienViveModels extends Model
{
    //
    protected $table      =   'conquien_vive';
    protected $primaryKey =   'id_conquien_vive';
    public $timestamps = false;

    protected $fillable   =   [
        'id_conquien_vive',
        'nombre'
       ];

    public function alumnofamiliars()
     {
         return $this->hasMany(AlumnoFamiliarModels::class,'id_conquien_vive');
     }
}
