<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asistencia;

class AsistenciasController extends Controller
{
    //
    function asistencias(){
        $asistencia = new Asistencia();
        $asistencias_alumno = $asistencia->get_asistencias_by_alumno();
        $retrasos_alumno = $asistencia->get_retrasos_by_alumno();
        $presente_alumno = $asistencia->get_presente_by_alumno();
        $ausente_alumno = $asistencia->get_ausente_by_alumno();
        $justificado_alumno = $asistencia->get_justificado_by_alumno();
      //  dd($retrasos_alumno);
        return view("asistencia", compact("asistencias_alumno","retrasos_alumno","presente_alumno","ausente_alumno","justificado_alumno"));
    }
}
