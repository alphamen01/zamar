<?php

namespace App\Models\Estudiante;
use App\Models\Diagnostico\DiagnosticoModels;
use App\Models\AlumnoFamiliar\AlumnoFamiliarModels;
use App\Models\DatosEstudiante\CicloModels;
use App\Models\DatosEstudiante\EscuelaModels;
use App\Models\DatosEstudiante\FacultadModels;
use App\Models\DatosEstudiante\UniversidadModels;
use App\Models\DatosEstudiante\SemestreModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EstudianteModels extends Model
{

    protected $table = 'estudiante';
    protected $primaryKey = 'id_estudiante';
    public $timestamps = false;


    protected $fillable = [
        'id_estudiante',
        'nombres',
        'apellidos',
        'fecha_nacimiento',
        'lugar_nacimiento',
        'direccion',
        'distrito',
        'provincia',
        'departamento',
        'referencia',
        'genero',
        'email',
        'dni',
        'carne_universitario',
        'telefono',
        'facebook',
        'twitter',
        'estado',
        'universidad_id_universidad',
        'facultad_id_facultad',
        'escuela_id_escuela',
        'ciclo_id_ciclo',
        'semestre_id_semestre',
        'modalidad_ingreso',
        'nivel_instruccion_padre',
        'ocupacion_padre',
        'ocupacion_madre',
        'usuario',
        'clave',
        'diagnostico'
    ];

    public function diagnosticos()
    {
        return $this->hasMany(DiagnosticoModels::class,'id_estudiante');
    }

    public function alumnofamiliar()
    {
        return $this->hasOne(AlumnoFamiliarModels::class,'id_estudiante');
    }

    public function ciclo()
    {
        return $this->belongsTo(CicloModels::class,'ciclo_id_ciclo');
    }

    public function escuela()
    {
        return $this->belongsTo(EscuelaModels::class,'escuela_id_escuela');
    }

    public function facultad()
    {
        return $this->belongsTo(FacultadModels::class,'facultad_id_facultad');
    }


    public function universidad()
    {
        return $this->belongsTo(UniversidadModels::class,'universidad_id_universidad');
    }

    public function semestre()
    {
        return $this->belongsTo(SemestreModels::class,'semestre_id_semestre');
    }
}
