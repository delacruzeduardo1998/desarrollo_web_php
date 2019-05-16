
window.onload = ocultar;

function ocultar(){
    
    var lista=['registrar','buscar'
    ];
    lista.forEach(i => {
        document.getElementById(i).style.display = "none";              
    });
}
function ocultt(list,no){
    list.forEach(i => {
        if(i == no){
            document.getElementById(i).style.display = "block";            
        }else{
            document.getElementById(i).style.display = "none";              
        }
    });
}

function mostrar(div_id){
    var lista=['registrar','buscar'
    ];
    switch (div_id) {
        
        case 'registrar':
            ocultt(lista,'registrar');
            break;
        case 'buscar':
            ocultt(lista,'buscar');
            break;
        default:
            alert("datos incorrectos!!");         
            break;
    }
}

function accion(accionn)
{   
    var edad=0;
    var peso=0;
    var estatura=0;
    var optimist="";
    var introvertida="";
    var extravertida="";
    var rebelde="";
    var obsesiva="";
    if($("#optimista:checked").val()){
        optimist=$("#optimista:checked").val();
    }else{
        optimist="off";
    }
    if($("#introvertidas:checked").val()){
        introvertida=$("#introvertidas:checked").val();
    }else{
        introvertida="off";
    }
    if($("#extravertidas:checked").val()){
        extravertida=$("#extravertidas:checked").val();
    }else{
        extravertida="off";
    }
    if($("#rebeldes:checked").val()){
        rebelde=$("#rebeldes:checked").val();
    }else{
        rebelde="off";
    }
    if($("#obsesivas:checked").val()){
        obsesiva=$("#obsesivas:checked").val();
    }else{
        obsesiva="off";
    }
    if(document.getElementById("nombre").value==""){
        alert('Ingresa un nombre');
        return false;
    }

    if(document.getElementById("edad").value==""){
        alert('Ingresa una edad');
        return false;
    }
    else{
        try {
            edad=parseInt(document.getElementById("edad").value);
            if(edad){
                
            }else{
                alert('Ingresa una edad valida');
                return false;
            }
        }catch(error) {
            alert('Ingresa una edad valida');
            return false;
        }
    }
    if(document.getElementById("peso").value==""){
        alert('Ingresa un peso');
        return false;
    }
    else{
        try {
            peso=parseInt(document.getElementById("peso").value);
            if(peso){
                
            }else{
                alert('Ingresa un peso valida');
                return false;
            }
        }catch(error) {
            alert('Ingresa un peso valida');
            return false;
        }
    }
    if(document.getElementById("estatura").value==""){
        alert('Ingresa una estatura');
        return false;
    }
    else{
        try {
            estatura=parseInt(document.getElementById("estatura").value);
            if(estatura){
                
            }else{
                alert('Ingresa una estatura valida');
                return false;
            }
        }catch(error) {
            alert('Ingresa una estatura valida');
            return false;
        }
    }
   
var param={
    nombre: document.getElementById("nombre").value,
    edad: edad,
    sexo: $('input[name="sexo"]:checked').val(),
    color_ojos: $('input[name="color_ojos"]:checked').val(),
    peso: peso,
    estatura: estatura,
    optimista: optimist,
    introvertidas: introvertida,
    extravertidas: extravertida,
    rebeldes: rebelde,
    obsesivas: obsesiva,
    pasatiempo: document.getElementById("pasatiempo").value,
    foto: document.getElementById("foto").value,
    acc: accionn
};
    $.ajax({
        method:"post", //aqui puede ser igual get
        url: "parejas_log.php",//aqui va tu direccion donde esta tu funcion php
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
