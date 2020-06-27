<?php

namespace App\Models\Ubigeo;

use Illuminate\Database\Eloquent\Model;

class DistritoModels extends Model
{
    protected $table         =  'Distrito';
    protected $primaryKey    =  'id';
    protected $fillable      =  [
                               'id',
                                'id_departamento',
                                'id_provincia',
                                'id_distrito',
                                'nombre'
                            ];
}
