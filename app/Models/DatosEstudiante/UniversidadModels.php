<?php

namespace App\Models\DatosEstudiante;
use App\Models\Estudiante\EstudianteModels;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UniversidadModels extends Model
{
    //
    protected $table      =   'universidad';
    protected $primaryKey =   'id_universidad';
    public $timestamps = false;

    protected $fillable   =   [
                                'id_universidad',
                                'nombre',
                                'descripcion',
                                'estado'
                               ];

   public function estudiantes()
    {
        return $this->hasMany(EstudianteModels::class,'universidad_id_universidad');
    }
}
