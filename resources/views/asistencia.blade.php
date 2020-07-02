<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="display:flex;justify-content:space-around;">
    <table border=1>
    @foreach($retrasos_alumno as $alumno)
        <tr>
                <td>Retrasos: {{ $alumno->Retraso}}</td>
                <td>ID alumno: {{ $alumno->student_id}}</td>
        </tr>
    @endforeach  
    
    </table>  
    <table border=1>
    @foreach($presente_alumno as $alumno)
        <tr>
                <td>Presente: {{ $alumno->Presente}}</td>
                <td>ID alumno: {{ $alumno->student_id}}</td>
        </tr>
    @endforeach
    
    </table>
    <table border=1>
    @foreach($ausente_alumno as $alumno)
        <tr>
                <td>Ausente: {{ $alumno->Ausente}}</td>
                <td>ID alumno: {{ $alumno->student_id}}</td>
        </tr>
    @endforeach
    
    </table>
    <table border=1>
    @foreach($justificado_alumno as $alumno)
        <tr>
                <td>Justificado: {{ $alumno->Justificado}}</td>
                <td>ID alumno: {{ $alumno->student_id}}</td>
        </tr>
    @endforeach
    
    </table>
</body>
</html>