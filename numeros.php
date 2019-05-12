<?php
switch ($_POST["acc"]) {
    case "num_perfect":
        $num=$_POST["num_perfecto"];
        num_perfect1($num);
        break;
    case "num_abundante":
        $num=$_POST["num_abundant"];
        num_abundante($num);
        break;
    case "num_amigos":
        $amigo1=$_POST["num_amigo1"];
        $amigo2=$_POST["num_amigo2"];
        num_amigos($amigo1,$amigo2);
        break;
    case "num_deficiente":
        $num=$_POST["num_deficiente"];
        num_deficiente($num);
        break;
    case "num_curioso":
        $num=$_POST["num_curioso"];
        num_curioso($num);
        break;
    case "num_malvado":
        $num=$_POST["num_malvado"];
        num_malvado($num);
        break;
    case "num_palindromo":
        $num=$_POST["num_palindromo"];
        num_palindromo($num);
        break;
    case "num_semiperfecto":
        $num=$_POST["num_semiperfecto"];
        num_semiperfecto($num);
        break;
    case "num_odioso":
        $num=$_POST["num_odioso"];
        num_odioso($num);
        break;
    default:
        echo("Datos invalidos!! php");         
        break;
}
#recibe un numero si la suma de sus divisores es igual a el numero

function num_perfect1($num){
    $total=0;
    for($i=1;$i<$num;$i++){
        if($num%$i==0){
            $total=$total+$i;
        }
    }
    if($total==$num){
        echo("número perfecto");
        return true;
    }else {
        echo("no es un número perfecto");
    }
}
function num_perfect2($num){
    $total=0;
    for($i=1;$i<$num;$i++){
        if($num%$i==0){
            $total=$total+$i;
        }
    }
   
    return $total;
}

#recibe un numero si la suma de sus divisores es mayor a el
function num_abundante($num){
    $a=num_perfect2($num);
    if($a>$num){
        echo("abundante");
        return true;
    }
    else {
        echo("no es abundante");
        return false;
    }
    
}
function num_abundante2($num){
    $a=num_perfect2($num);
    if($a>$num){
        return true;
    }
    else {
        return false;
    }
    
}
#num amigo
# recibe dos numero la suma de divisores de uno es el otro numero
function num_amigos($num1,$num2){
    $a=num_perfect2($num1);
    $b=num_perfect2($num2);
    if($a==$num2 and $b==$num1){
        echo("amigos");
        return true;
    }
    else {
        echo("no es amigos");
        return false;
    }
    
}
#numero deficiente
#recibe un numero si la suma de sus divisores es menor a el
function num_deficiente($num){
    $val=num_abundante2($num);
    if($val){
        echo(" es un número deficiente");
        return false;
    }
    else {
        echo("es un número deficiente");
        return true;
    }
}
#es aquel que cumple que n^2 tiene como ultima sifra a la propia n
#numero curioso
function num_curioso($num){
    $a=strval($num);
    $b=strval($num*$num);
    
    $val=strripos($b, $a);
    if($val != 0){
        echo($a." numero curioso ".strval($b));
        return(true);
    }else {
        echo($a." numero no curioso ".strval($b));
        return(false);
    }
}

#todo numero convertido en binario coniene al menos un par de unos consecutivos
#decbin ( int $number ) : string
#num_malvado
function num_malvado($num){
    $bin = decbin($num);    
    if(strstr($bin,'11')){
        echo($bin." es malvado");
        return true;
    }else {
        echo($bin." no es malvado");
        return false;
    }
}

#palindromo
function num_palindromo($num){
    $cad0=strval($num);
    $cad1=strrev($cad0);

    for($i=0;$i<strlen($cad0);$i++){
        if($cad0[$i] != $cad1[$i]){
            echo($cad0." no es palindromo");
            return false;
        }
    }
    echo($cad0." es palindromo");
    return true;
}
# es un numero que o es perfecto pero que la suma de algunos de sus divisores es igual a el mismo
#numero semiperfeto
#30=15+10+5+3+2+1

function num_semiperfecto($num){
    $total=0;
    for($i=$num-1;$i>0;$i--){
        if($num%$i==0){
            echo($total);
            $total=$total+$i;
            if($total == $num){
                echo($num." numero semiperfect");
                return true;
            }
        }
    }
    echo($num." numero perfecto o abundante");
    return false;
}
#en binario tiene un numero impar de unos
#numero odioso
#3314160970
function num_odioso($num){
    $bin = decbin($num);
    $total=0;
    $bin=str_split($bin);
    foreach($bin as $bi){
        if($bi=='1'){
            $total++;
        }
    }
    if($total%2==1){
        echo($num." numero odioso");
        return true;
    }else {
        echo($num." numero no odioso");
        return false;
    }
}

#si se suma los cuadrados de sus digitos y continuamos iterativamente este proceso
#llegamos como resultado al uno
#203 numero feliz
function num_feliz ($num){
	$cad=strval($num);
	$suma=0;
	while (strlen($cad)>1){
		$suma=0;
		for ($i = 0; $i < strlen($cad); $i++){
			$st=$cad[$i];
			$ent=intval($st);
			$cuad=$ent*$ent;
			$suma=$suma+$cuad;
		}		
		$cad=strval($suma);
	}
	if ($cad=="1"){
		echo $num," Es feliz";
	}
	else{
		echo $num,"Es infeliz";
	}
	
	
}

#igual al del amigo pero mas de dos
#12496,14288,15472,14536,14564
function num_sociable($num){

}
#es un numero que cumple que al sumar sus propios divisores y despues sumar sus divisores de su propia suma
#otra vez
function num_vicioso($num){

}