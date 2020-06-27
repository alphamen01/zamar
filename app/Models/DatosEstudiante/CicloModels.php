<?php

namespace App\Models\DatosEstudiante;
use App\Models\Estudiante\EstudianteModels;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CicloModels extends Model
{
    //
    protected $table      =   'ciclo';
    protected $primaryKey =   'id_ciclo';
    public $timestamps = false;

    protected $fillable   =   [
                                'id_ciclo',
                                'nombre',
                                'descripcion',
                                'estado'
                               ];
     public function estudiantes()
      {
          return $this->hasMany(EstudianteModels::class,'ciclo_id_ciclo');
      }

}
