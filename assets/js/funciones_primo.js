
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
    var lista=['ver_primo',
    'apartir_n_mostrar_n',
    'rangos',
    'primo_distancia_abajo_arriba',
    'formula','criba','primo_primo',
    'num_perfect1'
    
    ];
    lista.forEach(i => {
        document.getElementById(i).style.display = "none";              
    });
}

function mostrar(div_id){
    var lista=['ver_primo',
    'apartir_n_mostrar_n',
    'rangos',
    'primo_distancia_abajo_arriba',
    'formula','criba','primo_primo',
    'num_perfect1'
    
    ];    
    switch (div_id) {
        case 'ver_primo':
            ocultt(lista,'ver_primo');
            break;
        case 'apartir_n_mostrar_n':
            ocultt(lista,'apartir_n_mostrar_n');
            break;
        case 'rangos':
            ocultt(lista,'rangos');
            break;
        case 'primo_distancia_abajo_arriba':
            ocultt(lista,'primo_distancia_abajo_arriba');
            break;
        case "formula":
            ocultt(lista,'formula');
            break;
        case "criba":
            ocultt(lista,'criba');            
            break;
        case "primo_primo":
            ocultt(lista,'primo_primo');            
            break;
        case "num_perfect1":
            ocultt(lista,'num_perfect1');            
            break;
        default:
            alert("datos incorrectos!!");         
            break;
    }
}
function accion(accionn)
{
var param={
    numero_prim: document.getElementById("numero").value,
    desde: document.getElementById("numero2").value,
    hasta: document.getElementById("numero3").value,
    menor: document.getElementById("menor").value,
    mayor: document.getElementById("mayor").value,
    combox_numero: document.getElementById("combox_numero").value,
    combox_distancia: document.getElementById("combox_distancia").value,
    combox: document.getElementById("combox").value,
    x: document.getElementById("x").value,
    num_criba: document.getElementById("num_criba").value,
    num_primo_primo: document.getElementById("num_primo_primo").value,
    acc: accionn
};
    $.ajax({
        method:"post", //aqui puede ser igual get
        url: "primo.php",//aqui va tu direccion donde esta tu funcion php
        data: param,//aqui tus datos
        success:function(data){
        if(data==false){
            alert("Datos incorrectos");
        }else{
            alert(data);
        }
    },
    error:function(data){
        
        //lo que devuelve si falla tu archivo mifuncion.php
    }
    });
}
