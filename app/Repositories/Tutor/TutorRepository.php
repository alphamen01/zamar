<?php


namespace App\Repositories\Tutor;
use App\Models\Tutor\TutorModels;

class TutorRepository
{
        public function combo(){
            $TutorModels = TutorModels::select('id_tutor','apellido_paterno','apellido_materno','nombres')->get();
            return $TutorModels;
        }
}
