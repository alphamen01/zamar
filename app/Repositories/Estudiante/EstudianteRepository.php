<?php


namespace App\Repositories\Estudiante;
use App\Models\Estudiante\EstudianteModels;

class EstudianteRepository
{
        public function combo(){
            $EstudianteModels = EstudianteModels::select('id_estudiante','apellidos','nombres','dni')->get();
            return $EstudianteModels;
        }
}
