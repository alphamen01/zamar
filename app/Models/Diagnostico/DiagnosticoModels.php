<?php

namespace App\Models\Diagnostico;
use App\Models\Tutor\TutorModels;
use app\Models\Estudiante\EstudianteModels;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DiagnosticoModels extends Model
{

    protected $table = 'diagnostico_alumno';
    protected $primaryKey = 'id_diagnostico_alumno';
    public $timestamps = false;


    protected $fillable = [

            'id_diagnostico_alumno',
            'id_estudiante',
            'fecha',
            'p_salud',
            'h_alimentos',
            'con_sus_aluci',
            'con_bebidas_alco',
            'p_emocionales',
            'p_familiares',
            'p_economico',
            'p_academicos',
            'tutor_id_tutor',
            'estado',
            'date_create',
            'date_update'
    ];
    public function tutor()
    {
        return $this->belongsTo(TutorModels::class,'tutor_id_tutor');
    }

    public function estudiante()
    {
        return $this->belongsTo(EstudianteModels::class,'id_estudiante');
    }
}
