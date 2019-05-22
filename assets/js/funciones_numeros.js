
window.onload = ocultar;


function ocultt(list,no){
    list.forEach(i => {
        if(i == no){
            document.getElementById(i).style.display = "block";            
        }else{
            document.getElementById(i).style.display = "none";              
        }
    });
}

function ocultar(){
    
    var lista=['num_perfect1',
    'num_abundante',
    'num_amigos',
    'num_deficiente',
    'num_curioso',
    'num_malvado',
    'num_palindromo',
    'num_semiperfecto',
    'num_odioso',
    'num_sociables'
    
    ];
    lista.forEach(i => {
        document.getElementById(i).style.display = "none";              
    });
}
function mostrar(div_id){
    var lista=['num_perfect1',
    'num_abundante',
    'num_amigos',
    'num_deficiente',
    'num_curioso',
    'num_malvado',
    'num_palindromo',
    'num_semiperfecto',
    'num_odioso',
    'num_sociables'
    
    ];
    switch (div_id) {
        
        case 'num_perfect1':
            ocultt(lista,'num_perfect1');
            break;
        case 'num_abundante':
            ocultt(lista,'num_abundante');
            break;
        case 'num_amigos':
            ocultt(lista,'num_amigos');
            break;
        case 'num_deficiente':
            ocultt(lista,'num_deficiente');
            break;
        case 'num_curioso':
            ocultt(lista,'num_curioso');
            break;
        case 'num_malvado':
            ocultt(lista,'num_malvado');
            break;
        case 'num_palindromo':
            ocultt(lista,'num_palindromo');
            break;
        case 'num_semiperfecto':
            ocultt(lista,'num_semiperfecto');
            break;
        case 'num_odioso':
            ocultt(lista,'num_odioso');
            break;
        case 'num_sociables':
            ocultt(lista,'num_sociables');
            break;
        default:
            alert("datos incorrectos!! switch");         
            break;
    }
}

function accion(accionn)
{
var param={
    num_perfecto: document.getElementById("num_perfectoo").value,
    num_abundant: document.getElementById("num_abundant").value,
    num_amigo1: document.getElementById("num_amigo1").value,
    num_amigo2: document.getElementById("num_amigo2").value,
    num_deficiente: document.getElementById("num_deficient").value,
    num_curioso: document.getElementById("num_curios").value,
    num_malvado: document.getElementById("num_mal").value,
    num_palindromo: document.getElementById("num_pali").value,
    num_semiperfecto: document.getElementById("num_semi").value,
    num_odioso: document.getElementById("num_odio").value,
    num_soc1: document.getElementById("num_soc1").value,
    num_soc2: document.getElementById("num_soc2").value,
    num_soc3: document.getElementById("num_soc3").value,
    num_soc4: document.getElementById("num_soc4").value,
    num_soc5: document.getElementById("num_soc5").value,
    acc: accionn
};
    $.ajax({
        method:"post", //aqui puede ser igual get
        url: "numeros.php",//aqui va tu direccion donde esta tu funcion php
        data: param,//aqui tus datos
        success:function(data){
        if(data==false){
            alert("Datos incorrectos acion");
        }else{
            alert(data);
        }
    },
    error:function(data){
        
        //lo que devuelve si falla tu archivo mifuncion.php
    }
    });
}
