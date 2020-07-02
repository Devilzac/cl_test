<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Asistencia extends Model
{
    //
    function get_asistencias_by_alumno(){
                    
        $asistencia = DB::select('SELECT a_att.attendance_date, a_att.attendance_status,a_att.student_id,  stud.student_name, stud.student_lastname, att_status.status 
        FROM cl_aulas_attendance a_att
        JOIN cl_students stud ON a_att.student_id=stud.student_id
        JOIN cl_attendance_status att_status ON att_status.id = a_att.attendance_status ORDER BY a_att.student_id');
        
        return $asistencia;
    }

    
    function get_retrasos_by_alumno(){ 
                    
        $retrasos = DB::select('SELECT COUNT(cl_aulas_attendance.attendance_status) as Retraso, cl_aulas_attendance.student_id FROM cl_aulas_attendance WHERE cl_aulas_attendance.attendance_status = 1 GROUP BY cl_aulas_attendance.student_id');

        //dd($retrasos);
        return $retrasos;
    }
    function get_presente_by_alumno(){
                    
        $retrasos = DB::select('SELECT COUNT(cl_aulas_attendance.attendance_status) as Presente, cl_aulas_attendance.student_id FROM cl_aulas_attendance WHERE cl_aulas_attendance.attendance_status = 2 GROUP BY cl_aulas_attendance.student_id');
      //  dd($retrasos);
        return $retrasos;
    }
    function get_ausente_by_alumno(){
                    
        $retrasos = DB::select('SELECT COUNT(cl_aulas_attendance.attendance_status) as Ausente, cl_aulas_attendance.student_id FROM cl_aulas_attendance WHERE cl_aulas_attendance.attendance_status = 3 GROUP BY cl_aulas_attendance.student_id');
       // dd($retrasos);
        return $retrasos;
    }
    function get_justificado_by_alumno(){
                    
        $retrasos = DB::select('SELECT COUNT(cl_aulas_attendance.attendance_status) as Justificado, cl_aulas_attendance.student_id FROM cl_aulas_attendance WHERE cl_aulas_attendance.attendance_status = 4 GROUP BY cl_aulas_attendance.student_id');
     //   dd($retrasos);
        return $retrasos;
    }
}
