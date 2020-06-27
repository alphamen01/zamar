<?php

namespace App\Models\Ubigeo;

use Illuminate\Database\Eloquent\Model;

class ProvinciaModels extends Model
{
    //
    protected $table      =  'Provincia';
    protected $primaryKey =  'id';
    protected $fillable   =  [
                               'id',
                                'id_departamento',
                                'id_provincia',
                                'nombre'
                             ];
}
