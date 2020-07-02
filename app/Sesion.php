<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Sesion extends Model
{
    // Esto es el modelo donde  selecciono las sesiones por clase / grupo
    function get_listado_sesiones_Aula_grupo_uno(){

        $aula1 = DB::table('cl_aulas_calendar')
                ->where("group_id","=",1)
                ->where("aula_id","=",13571)
                ->orderBy('aula_id', 'asc')
                ->orderBy('calendar_date_ini', 'asc')
                ->get();
                    
        $aula2 = DB::table('cl_aulas_calendar')
                ->where("group_id","=",1)
                ->where("aula_id","=",13572)
                ->orderBy('aula_id', 'asc')
                ->orderBy('calendar_date_ini', 'asc')
                ->get();

                $grupo_uno = [];
                // aqui controlo que si esta vacio no se añada al array
                if(count($aula1)>0){
                    array_push($grupo_uno, $aula1);
                }
                if(count($aula2)>0){
                    array_push($grupo_uno, $aula2);
                }
        
       // dd($grupo_uno); y finalmente lo devuelvo al controlador

        return $grupo_uno;
    }

    // esto es lo mismo pero para el aula y grupo 2
    
    function get_listado_sesiones_Aula_grupo_dos(){

        $aula1 = DB::table('cl_aulas_calendar')
                ->where("group_id","=",2)
                ->where("aula_id","=",13571)
                ->orderBy('aula_id', 'asc')
                ->orderBy('calendar_date_ini', 'asc')
                ->get();
                    
        $aula2 = DB::table('cl_aulas_calendar')
        ->where("group_id","=",2)
        ->where("aula_id","=",13572)
        ->orderBy('aula_id', 'asc')
        ->orderBy('calendar_date_ini', 'asc')
        ->get();
            
            $grupo_dos = [];
        
            if(count($aula1)>0){
                array_push($grupo_dos, $aula1);
            }
            if(count($aula2)>0){
                array_push($grupo_dos, $aula2);
            }

       // dd($grupo_dos);
        return $grupo_dos;
    }
}
