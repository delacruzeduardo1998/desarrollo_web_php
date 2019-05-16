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
        if($_POST["foto"]){
            $foto=$_POST["foto"];
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
    default:
        echo("Datos invalidos!!");         
        break;
    }
function registrar($nombre,$edad,$sexo,$color_ojos,$peso,$estatura,$optimista,$introvertidas,$extravertidas,$rebeldes,$obsesivas,$pasatiempo,$foto){
    //echo( $nombre.
    //$edad.
    //$sexo.
    //$color_ojos.
    //$peso.
    //$estatura.
    //$optimista.
    //$introvertidas.
    //$extravertidas.
    //$rebeldes.
    //$obsesivas.
    //$pasatiempo.
    //$foto);
    //conexion de equipo
    $bd = new mysqli('localhost',  'root', '', 'buscar_parejas');
    if ($bd->connect_errno):
        echo "Fallo la conexión a MySQL: " .$bd -> error_reporting;
    endif;

    $sql="
    INSERT INTO `persona`(`nombre`, `edad`, `sexo`, `color_ojos`, `peso`, `estatura`, `optimista`, `introvertidas`, `extravertidas`, `rebeldes`, `obsesivas`, `pasatiempo`, `foto`) 
    VALUES ('".$nombre."','".$edad."','".$sexo."','".$color_ojos."','".$peso."','".$estatura."','".$optimista."','".$introvertidas."','".$extravertidas."','".$rebeldes."','".$obsesivas."','".$pasatiempo."','".$foto."')
    ";
    mysqli_query($bd,$sql);
    echo("registrado!!");
    

}
