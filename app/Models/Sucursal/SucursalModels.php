<?php

namespace app\Models\Sucursal;
use app\Models\Institucion\InstitucionModels;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SucursalModels extends Model
{

    protected $table = 'sucursal';
    protected $primaryKey = 'id_sucursal';
    public $timestamps = false;


    protected $fillable = [
            'id_sucursal',
            'id_institucion',
            'nombre',
            'ubigeo',
            'direccion',
            'telefono',
            'sitio_web',
            'email',
            'user_created',
            'date_created',
            'user_update',
            'date_update',
            'user_deleted',
            'date_deleted',
            'state'
    ];
    public function institucion()
    {
        return $this->hasMany(InstitucionModels::class);
    }

}


