<?php

namespace App\Models\Ubigeo;

use Illuminate\Database\Eloquent\Model;

class DepartamentoModels extends Model
{
    //
    protected $table      =   'departamento';
    protected $primaryKey =   'id';

    protected $fillable   =   [
                                'id',
                                'id_departamento',
                                'nombre'
                               ];
}
