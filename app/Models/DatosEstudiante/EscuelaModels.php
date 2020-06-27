<?php

namespace App\Models\DatosEstudiante;
use App\Models\Estudiante\EstudianteModels;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EscuelaModels extends Model
{
    //
    protected $table      =   'escuela';
    protected $primaryKey =   'id_escuela';
    public $timestamps = false;


    protected $fillable   =   [
                                'id_escuela',
                                'nombre',
                                'descripcion',
                                'estado'
                               ];

     public function estudiantes()
      {
          return $this->hasMany(EstudianteModels::class,'escuela_id_escuela');
      }
}
