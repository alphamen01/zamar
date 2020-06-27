<?php

namespace App\Models\DatosEstudiante;

use App\Models\Estudiante\EstudianteModels;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FacultadModels extends Model
{
    //
    protected $table      =   'facultad';
    protected $primaryKey =   'id_facultad';
    public $timestamps = false;

    protected $fillable   =   [
                                'id_facultad',
                                'nombre',
                                'descripcion',
                                'estado'
                               ];

     public function estudiantes()
     {
         return $this->hasMany(EstudianteModels::class,'facultad_id_facultad');
     }
}
