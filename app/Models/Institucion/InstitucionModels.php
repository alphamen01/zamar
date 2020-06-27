<?php

namespace app\Models\Institucion;
use app\Models\Sucursal\SucursalModels;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InstitucionModels extends Model
{

    protected $table = 'institucion';
    protected $primaryKey = 'id_institucion';
    public $timestamps = false;


    protected $fillable = [
        'id_institucion',
        'nombre_ies',
        'imagen',
        'direccion',
        'id_departamento',
        'id_provincia',
        'id_distrito',
        'telefono',
        'movil',
        'email',
        'sitio_web',
        'codigo_modular',
        'tipo_gestion',
        'dre_gre',
        'resolucion_lic',
        'resolucion_renova',
        'lugar_servicio',
        'facebook',
        'twitter',
        'estado',
        'user_created',
        'date_created',
        'user_update',
        'date_update',
        'user_deleted',
        'date_deleted',
        'state'
    ];

    public function sucursal()
    {
        return $this->belongsTo(SucursalModels::class);
    }

}


