<?php

switch ($_POST["acc"]) {
    case "registra":
        //echo($_POST["color_ojos"]);
        //echo($_POST["peso"]);
        //echo($_POST["estatura"]);
        //echo($_POST["optimista"]);
        //echo($_POST["introvertidas"]);
        //echo($_POST["extravertidas"]);
        //echo($_POST["rebeldes"]);
        //echo($_POST["obsesivas"]);
        //echo($_POST["pasatiempo"]);
        //echo($_POST["foto"]);
        $b=0;
        $nombre="";
        $edad="";
        $sexo="";
        $color_ojos="";
        $peso="";
        $estatura="";
        $optimista="";
        $introvertidas="";
        $extravertidas="";
        $rebeldes="";
        $pasatiempo="";
        $foto="";
        if($_POST["nombre"]){
            $nombre=$_POST["nombre"];
        }else {
            $b=1;
        }
        if($_POST["edad"]){
            $edad=$_POST["edad"];
        }else {
            $b=1;
        }
        if($_POST["peso"]){
            $peso=$_POST["peso"];
        }else {
            $b=1;
        }
        if($_POST["estatura"]){
            $estatura=$_POST["estatura"];
        }else {
            $b=1;    
        }
        if($_POST["pasatiempo"]){
            $pasatiempo=$_POST["pasatiempo"];
        }else {
            $b=1;    
        }
        
        if ($b==1){
            echo("Complete los campos");
        }else {
            $sexo=$_POST["sexo"];
            $color_ojos=$_POST["color_ojos"];
            $optimista=$_POST["optimista"];
            $introvertidas=$_POST["introvertidas"];
            $extravertidas=$_POST["extravertidas"];
            $rebeldes=$_POST["rebeldes"];
            $obsesivas=$_POST["obsesivas"];
            $foto=$_POST["foto"];
            registrar(
                $nombre,
                $edad,
                $sexo,
                $color_ojos,
                $peso,
                $estatura,
                $optimista,
                $introvertidas,
                $extravertidas,
                $rebeldes,
                $obsesivas,
                $pasatiempo,
                $foto);
        }
        break;
    case "buscar":
        $sexo=$_POST["sexo"];
        $edad_min=$_POST["edad_min"];
        $edad_max=$_POST["edad_max"];
        $color_ojos=$_POST["color_ojos"];
        $peso_min=$_POST["peso_min"];
        $peso_max=$_POST["peso_max"];
        $estatura_min=$_POST["estatura_min"];
        $estatura_max=$_POST["estatura_min"];
        $optimista=$_POST["optimista"];
        $introvertidas=$_POST["introvertidas"];
        $extravertidas=$_POST["extravertidas"];
        $rebeldes=$_POST["rebeldes"];
        $obsesivas=$_POST["obsesivas"];
        $pasatiempo=["pasatiempo"];
        buscar(
            $sexo,
            $edad_min,
            $edad_max,
            $color_ojos,
            $peso_min,
            $peso_max,
            $estatura_min,
            $estatura_max,
            $optimista,
            $introvertidas,
            $extravertidas,
            $rebeldes,
            $obsesivas,
            $pasatiempo);
        break;
    default:
        echo("Datos invalidos!!");         
        break;
    }
function buscar($sexo,$edad_min,$edad_max,$color_ojos,$peso_min,$peso_max,$estatura_min,$estatura_max,$optimista,$introvertidas,$extravertidas,$rebeldes,$obsesivas,$pasatiempo){
    $bd = new mysqli('localhost',  'root', '', 'buscar_parejas');
    if ($bd->connect_errno):
        echo "Fallo la conexión a MySQL: " .$bd -> error_reporting;
    endif;
   
    $sql="SELECT * FROM `persona`";
    $datos=mysqli_query($bd,$sql);
    $todos_ponderados=array();
    while ($fila = mysqli_fetch_array($datos)){
          $ponde=0;
          if($fila['sexo']==$sexo){
            $ponde=$ponde+9;
          }
          if($edad_min<=intval($fila['edad']) && intval($fila['edad'])<=$edad_max){
            $ponde=$ponde+9;
          }
          if($fila['color_ojos']==$color_ojos){
            $ponde=$ponde+9;
          }
          if($peso_min<=intval($fila['peso']) && intval($fila['peso'])<=$peso_max){
            $ponde=$ponde+9;
          }
          if($estatura_min<=intval($fila['estatura']) && intval($fila['estatura'])<=$estatura_max){
            $ponde=$ponde+9;
          }
          if($fila['optimista']==$optimista){
            $ponde=$ponde+9;
          }
          if($fila['introvertidas']==$introvertidas){
            $ponde=$ponde+9;
          }
          if($fila['extravertidas']==$extravertidas){
            $ponde=$ponde+9;
          }
          if($fila['rebeldes']==$rebeldes){
            $ponde=$ponde+9;
          }
          if($fila['obsesivas']==$obsesivas){
            $ponde=$ponde+9;
          }
          if($fila['pasatiempo']==$pasatiempo){
            $ponde=$ponde+9;
          }
          if($ponde!=0){
              
              array_push($fila,$ponde);
              array_push($todos_ponderados,$fila);
          }
          $ponde=0;
    }
    $b=0;
    for($i=0;$i<=sizeof($todos_ponderados)-1;$i++){
        if($sexo == $todos_ponderados[$i]['sexo']){
            echo('
            <tr>
            <td>'.$todos_ponderados[$i]['nombre'].'</td>
            <td>'.$todos_ponderados[$i]['edad'].'</td>
            <td>'.$todos_ponderados[$i]['sexo'].'</td>
            <td>'.$todos_ponderados[$i][13].'%</td>
            <td>
                <div class="input-group-append">
                    <input class="btn btn-outline-secondary" href="#" value="perfil completo" onclick="ver_perfil_t(
                        \''.$todos_ponderados[$i]['nombre'].'\',
                        \''.$todos_ponderados[$i]['edad'].' años\',
                        \''.$todos_ponderados[$i]['sexo'].'\',
                        \''.$todos_ponderados[$i]['color_ojos'].'\',
                        \''.$todos_ponderados[$i]['peso'].' Kg\',
                        \''.$todos_ponderados[$i]['estatura'].' cm\',
                        \''.$todos_ponderados[$i]['optimista'].'\',
                        \''.$todos_ponderados[$i]['introvertidas'].'\',
                        \''.$todos_ponderados[$i]['extravertidas'].'\',
                        \''.$todos_ponderados[$i]['rebeldes'].'\',
                        \''.$todos_ponderados[$i]['obsesivas'].'\',
                        \''.$todos_ponderados[$i]['pasatiempo'].'\',
                        \''.$todos_ponderados[$i][13].'\',
                        \''.$todos_ponderados[$i]['foto'].'\',
                        )" type="button"/>
                </div>    
            </td>
            </tr>
        ');
        $b=1;
        }
    }
    if($b==0){
        echo('<tr>
        <td>None</td>
        <td>None</td>
        <td>None</td>
        <td>None</td>
        <td>None</td>
        </tr>');
    }
}
function registrar($nombre,$edad,$sexo,$color_ojos,$peso,$estatura,$optimista,$introvertidas,$extravertidas,$rebeldes,$obsesivas,$pasatiempo,$foto){
    $bd = new mysqli('localhost',  'root', '', 'buscar_parejas');
    if ($bd->connect_errno):
        echo "Fallo la conexión a MySQL: " .$bd -> error_reporting;
    endif;
   
    $sql="
    INSERT INTO `persona`(`nombre`, `edad`, `sexo`, `color_ojos`, `peso`, `estatura`, `optimista`, `introvertidas`, `extravertidas`, `rebeldes`, `obsesivas`, `pasatiempo`, `foto`) 
    VALUES ('".$nombre."',".$edad.",'".$sexo."','".$color_ojos."',".$peso.",".$estatura.",'".$optimista."','".$introvertidas."','".$extravertidas."','".$rebeldes."','".$obsesivas."','".$pasatiempo."','1')
    ";
    mysqli_query($bd,$sql);
    echo("Guardado con exito");

}
