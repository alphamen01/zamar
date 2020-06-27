<?php

namespace App\Models\Tutor;
use App\Models\Diagnostico\DiagnosticoModels;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TutorModels extends Model
{

    protected $table = 'tutor';
    protected $primaryKey = 'id_tutor';
    public $timestamps = false;


    protected $fillable = [
        'id_tutor',
        'apellido_paterno',
        'apellido_materno',
        'nombres',
        'numero',
        'id_tipo_documento',
        'usuario',
        'clave',
        'id_tipo_tutor'
    ];

    public function diagnosticos()
    {
        return $this->hasMany(DiagnosticoModels::class,'tutor_id_tutor');
    }

}
