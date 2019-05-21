<?php

switch ($_POST["acc"]) {
    case "primo":
        $numero=$_POST["numero_prim"];
        if($numero==1){
            echo("no es primo");
        }else {
            ver_primoo($numero);
        }
        break;
    case "apartir_n_mostrar_n":
        $num1=$_POST["desde"];
        $num2=$_POST["hasta"];
        apartir_n_mostrar_n($num1,$num2);
        break;
    case "rangos":
        $num1=$_POST["menor"];
        $num2=$_POST["mayor"];
        rangos($num1,$num2);
        break;
    case "primo_distancia_abajo_arriba":
        if($_POST["combox"]=="abajo"){
            $num=$_POST["combox_numero"];
            $distancia=$_POST["combox_distancia"];
            primo_distancia_abajo($num,$distancia);
        }
        if($_POST["combox"]=="arriba"){
            $num=$_POST["combox_numero"];
            $distancia=$_POST["combox_distancia"];
            primo_distancia_arriba($num,$distancia);
        }
        break;
    case "formula":
        $x=$_POST["x"];
        formula($x);
        break;
    case "criba":
        $num=$_POST["num_criba"];
        criba($num);
        break;
    case "primo_primo":
        $num=$_POST["num_primo_primo"];
        primo_primo($num);
        break;
    default:
        echo("Datos invalidos!!");         
        break;
}
function ver_primoo($num){
    $c=0;
    for($i=1;$i<=$num;$i++){
        if($num%$i==0){
            $c=$c+1;
        }
    }
    if($c==2){
        echo("es primo");
        return true;
    }
    if($c>2){
        echo("no es primo");
        return false;
    }
}
function ver_primo($num){
    $c=0;
    for($i=1;$i<=$num;$i++){
        if($num%$i==0){
            $c=$c+1;
        }
    }
    if($c==2){
        return true;
    }
    if($c>2){
        return false;
    }
}
function apartir_n_mostrar_n($n0,$n1){
    $i=0;
    while($i<$n1){
        $ver=ver_primo($n0);
        if($ver){
            echo($n0);
            echo(",");
            $i=$i+1;
            $n0=$n0+1;
        }
        else {
            $n0=$n0+1;
        }
    }

}
function rangos($menor,$mayor){
    if($menor==0){
        $menor++;
    }
    for($i=$menor;$i<=$mayor;$i++){
        $ver=ver_primo($i);
        if($ver){
            echo($i);
            echo(",");
        }
    }
}
function primo_distancia_abajo($num,$distancia){
    $i=0;
    while($i<$distancia){
        $ver=ver_primo($num);
        if($ver){
            $i++;
            echo($num);
            echo(",");
            $num--;
        }
        else {
            $num--;
        }
    }
}
function primo_distancia_arriba($num,$distancia){
    $i=0;
    while($i<$distancia){
        $ver=ver_primo($num);
        if($ver){
            $i++;
            echo($num);
            echo(",");
            $num++;
        }
        else {
            $num++;
        }
    }
}
function formula($x){
    $primo=$x*$x-$x+41;
    $ver=ver_primo($primo);

    while($ver){
        echo($primo);
        echo(",");
        $x++;
        $primo=$x*$x-$x+41;
        $ver=ver_primo($primo);
    }
    echo($primo);
}
function criba($num){
    $lista=array();
    $lista2=array();
    
    for($i=3;$i<=$num;$i++){
        array_push($lista,$i);
    }
    for($i=3;$i<=$num;$i++){
        array_push($lista2,$i);
    }
    
    $ii=0;
    while(($lista[$ii]+$lista[$ii])<count($lista)){
        for($i=$ii;$i<=count($lista);$i+=$lista[$ii]){
            if($i!=$ii){
                $lista2[$i]=0;
                //echo($lista2["$i"]);
            }
        }
        $ii++; 
    }
    foreach($lista2 as $list){
        if($list==4 || $list==6 || $list==8 || $list==10){
            echo("0");
        }else {
            echo($list);            
        }
        echo(",");
    }
}

function primo_primo($num){
    for($i=2;$i<$num;$i++){
        $ver=ver_primo($i);
        if($ver){
            if($num%$i==0){

                echo("no es primo primo, lo divide el ".strval($i));
                return false;
            }
            else{
                $band = true;
            }
        }
    } 
    echo("es primo primo");

}
