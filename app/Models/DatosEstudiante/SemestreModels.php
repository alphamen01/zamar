<?php

namespace App\Models\DatosEstudiante;
use App\Models\Estudiante\EstudianteModels;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SemestreModels extends Model
{
    //
    protected $table      =   'semestre';
    protected $primaryKey =   'id_semestre';
    public $timestamps = false;

    protected $fillable   =   [
                                'id_semestre',
                                'nombre',
                                'descripcion',
                                'estado'
                               ];
     public function estudiantes()
      {
          return $this->hasMany(EstudianteModels::class,'semestre_id_semestre');
      }

}
