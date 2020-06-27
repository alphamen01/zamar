<?php

namespace App\Models\AlumnoFamiliar;
use App\Models\Estudiante\EstudianteModels;
use App\Models\DatosFamiliar\ConquienViveModels;
use App\Models\DatosFamiliar\DependenciaModels;
use App\Models\DatosFamiliar\FinanciaModels;
use App\Models\DatosFamiliar\InstruccionModels;
use App\Models\DatosFamiliar\LaboraModels;
use App\Models\DatosFamiliar\OcupacionModels;
use App\Models\DatosFamiliar\PersonasViveModels;
use App\Models\DatosFamiliar\ViviendaModels;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AlumnoFamiliarModels extends Model
{

    protected $table = 'alumno_familiar';
    protected $primaryKey = 'id_alumno_familiar';
    public $timestamps = false;


    protected $fillable = [
        'id_alumno_familiar',
        'id_estudiante',
        'depedencia_ud',
        'movil',
        'telefono_fijo',
        'email',
        'email_institucion',
        'facebook',
        'twitter',
        'instagram',
        'tutoria',
        'id_persona_vive',
        'id_ocupacion',
        'id_dependencia',
        'id_instruccion',
        'id_labora',
        'id_vivienda',
        'id_financia',
        'id_conquien_vive',
        'date_create',
        'date_update'
    ];

    public function estudiante()
    {
        return $this->belongsTo(EstudianteModels::class,'id_estudiante');
    }

    public function conquienvive()
    {
        return $this->belongsTo(ConquienViveModels::class,'id_conquien_vive');
    }

    public function dependencia()
    {
        return $this->belongsTo(DependenciaModels::class,'id_dependencia');
    }

    public function financia()
    {
        return $this->belongsTo(FinanciaModels::class,'id_financia');
    }

    public function instruccion()
    {
        return $this->belongsTo(InstruccionModels::class,'id_instruccion');
    }

    public function labora()
    {
        return $this->belongsTo(LaboraModels::class,'id_labora');
    }

    public function ocupacion()
    {
        return $this->belongsTo(OcupacionModels::class,'id_ocupacion');
    }

    public function personasvive()
    {
        return $this->belongsTo(PersonasViveModels::class,'id_persona_vive');
    }

    public function vivienda()
    {
        return $this->belongsTo(ViviendaModels::class,'id_vivienda');
    }

}
