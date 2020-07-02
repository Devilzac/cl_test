<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    @foreach($grupos as $grupo)        
        @foreach($grupo as $clase) 
            <table border=1>
                <tr>
                    <td colspan=4>Aula {{$clase[0]->aula_id}} - grupo {{ $clase[0]->group_id}}</td>
                </tr>  
                @foreach($clase as $sesion)   
                        <tr>            
                            <td><?php echo date('l', strtotime($sesion->calendar_date_ini)) ;?></td>
                            <td>
                                <?php  
                                    echo date('H:i', strtotime($sesion->calendar_date_ini)) . " - ";
                                    echo date('H:i', strtotime($sesion->calendar_date_end)) ;
                                ?>
                            </td>
                        </tr>             
        
                @endforeach
            </table>
            <br><hr><br>
        @endforeach        
    @endforeach
</body>
</html>