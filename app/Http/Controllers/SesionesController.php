<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sesion;

class SesionesController extends Controller
{
    function sesiones(){ //en el controlador solicito estos datos y retorno una vista

        $asistencia = new Sesion();
        $grupo1 = $asistencia->get_listado_sesiones_Aula_grupo_uno();
        $grupo2 = $asistencia->get_listado_sesiones_Aula_grupo_dos();
        
        return view('sesiones', ['grupos' => [$grupo1,$grupo2]]);
    }//esto es la vista con los datos solicitados
}
