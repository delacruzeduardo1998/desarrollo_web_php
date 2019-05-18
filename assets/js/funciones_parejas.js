
window.onload = ocultar;
function previewFile() {
    var preview = document.querySelector('img');
    var file    = document.querySelector('input[type=file]').files[0];
    var reader  = new FileReader();
  
    reader.onloadend = function () {
      preview.src = reader.result;
    }
  
    if (file) {
      reader.readAsDataURL(file);
    } else {
      preview.src = "";
    }
}
function ver_perfil_t(nombre,edad,sexo,color_ojos,peso,estatura,optimista,introvertidas,extravertidas,rebeldes,obsesivas,pasatiempos,porcentaje,foto){
    ocultar();
    var lista=['registrar','buscar','ver_persona','ver_perfil'];
    ocultt(lista,'ver_perfil');
    $('#elemento_nombre').html(nombre);
    $('#elemento_edad').html(edad);
    $('#elemento_sexo').html(sexo);
    $('#elemento_color_ojos').html(color_ojos);
    $('#elemento_peso').html(peso);
    $('#elemento_estatura').html(estatura);
    var caracteristicas="";
    if(optimista != "off"){
        caracteristicas=caracteristicas.concat("Optimista <br>");
    }
    if(introvertidas != "off"){
        caracteristicas=caracteristicas.concat("Introvertid@ <br>");
    }
    if(extravertidas != "off"){
        caracteristicas=caracteristicas.concat("Extravertid@ <br>");
    }
    if(rebeldes != "off"){
        caracteristicas=caracteristicas.concat("Rebelde <br>");
    }
    if(obsesivas != "off"){
        caracteristicas=caracteristicas.concat("Obsesiv@ <br>");
    }
    if(pasatiempos=="video_juegos"){
        pasatiempos="Jugar video juegos";
    }
    if(pasatiempos=="rompecabezas"){
        pasatiempos="Armar rompecabezas";
    }
    if(pasatiempos=="leer"){
        pasatiempos="Leer";
    }
    if(pasatiempos=="t_instrumento"){
        pasatiempos="Tocar un instrumento";
    }
    if(pasatiempos=="bailar"){
        pasatiempos="Bailar";
    }

    $('#elemento_caracteristicas').html(caracteristicas);
    $('#elemento_pasatiempos').html(pasatiempos);
    $('#elemento_porcentaje').html(porcentaje.concat("%"));
    $('#elemento_foto').html('<img src="'.concat('fotos/',foto,'" width="430" height="341">'));

}
function regresar(){
    var lista=['registrar','buscar','ver_persona','ver_perfil'];
    ocultt(lista,'ver_persona');
}
function ocultar(){
    
    var lista=['registrar','buscar','ver_persona','ver_perfil'];
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
    var lista=['registrar','buscar','ver_persona','ver_perfil'];
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
function previewFile() {
    var preview = document.querySelector('img');
    var file    = document.querySelector('input[type=file]').files[0];
    var reader  = new FileReader();
  
    reader.onloadend = function () {
      preview.src = reader.result;
    }
  
    if (file) {
      reader.readAsDataURL(file);
    } else {
      preview.src = "";
    }
}
function buscar(accionn){
    var bus_min=0;
    var bus_max=0;
    var bus_min_peso=0;
    var bus_max_peso=0;
    var bus_min_estatura=0;
    var bus_max_estatura=0;
    var optimist="";
    var introvertida="";
    var extravertida="";
    var rebelde="";
    var obsesiva="";
    if(document.getElementById("bus_min").value==""){
        alert('Ingresa una edad minima');
        return false;
    }
    else{
        try {
            bus_min=parseInt(document.getElementById("bus_min").value);
            if(bus_min && bus_min>=18){
                
            }else{
                alert('Ingresa una edad minimo valida');
                return false;
            }
        }catch(error) {
            alert('Ingresa una edad minimo valida');
            return false;
        }
    }
    if(document.getElementById("bus_max").value==""){
        alert('Ingresa una edad maxima');
        return false;
    }
    else{
        try {
            bus_max=parseInt(document.getElementById("bus_max").value);
            if(bus_max && bus_min <= bus_max){
                
            }else{
                alert('Ingresa una edad maxima valida');
                return false;
            }
        }catch(error) {
            alert('Ingresa una edad maxima valida');
            return false;
        }
    }
    if(document.getElementById("bus_min_peso").value==""){
        alert('Ingresa una peso minimo');
        return false;
    }
    else{
        try {
            bus_min_peso=parseInt(document.getElementById("bus_min_peso").value);
            if(bus_min_peso){
                
            }else{
                alert('Ingresa una peso minimo valido');
                return false;
            }
        }catch(error) {
            alert('Ingresa una peso minimo valido');
            return false;
        }
    }
    if(document.getElementById("bus_max_peso").value==""){
        alert('Ingresa una peso maximo');
        return false;
    }
    else{
        try {
            bus_max_peso=parseInt(document.getElementById("bus_max_peso").value);
            if(bus_max_peso && bus_min_peso<=bus_max_peso){
                
            }else{
                alert('Ingresa una peso maximo valido');
                return false;
            }
        }catch(error) {
            alert('Ingresa una peso maximo valido');
            return false;
        }
    }
    if(document.getElementById("bus_min_estatura").value==""){
        alert('Ingresa una estatura minima');
        return false;
    }
    else{
        try {
            bus_min_estatura=parseInt(document.getElementById("bus_min_estatura").value);
            if(bus_min_estatura){
                
            }else{
                alert('Ingresa una estatura minima valida');
                return false;
            }
        }catch(error) {
            alert('Ingresa una estatura minima valida');
            return false;
        }
    }
    if(document.getElementById("bus_max_estatura").value==""){
        alert('Ingresa una estatura maxima');
        return false;
    }
    else{
        try {
            bus_max_estatura=parseInt(document.getElementById("bus_max_estatura").value);
            if(bus_max_estatura && bus_min_estatura<=bus_max_estatura){
                
            }else{
                alert('Ingresa una estatura maxima valida');
                return false;
            }
        }catch(error) {
            alert('Ingresa una estatura maxima valida');
            return false;
        }
    }
    if($("#bus_optimista:checked").val()){
        optimist=$("#bus_optimista:checked").val();
    }else{
        optimist="off";
    }
    if($("#bus_introvertidas:checked").val()){
        introvertida=$("#bus_introvertidas:checked").val();
    }else{
        introvertida="off";
    }
    if($("#bus_extravertidas:checked").val()){
        extravertida=$("#bus_extravertidas:checked").val();
    }else{
        extravertida="off";
    }
    if($("#bus_rebeldes:checked").val()){
        rebelde=$("#bus_rebeldes:checked").val();
    }else{
        rebelde="off";
    }
    if($("#bus_obsesivas:checked").val()){
        obsesiva=$("#bus_obsesivas:checked").val();
    }else{
        obsesiva="off";
    }
    var param={
        sexo: $('input[name="bus_sexo"]:checked').val(),
        edad_min: bus_min,
        edad_max: bus_max,
        color_ojos: $('input[name="bus_color_ojos"]:checked').val(),
        peso_min:bus_min_peso,
        peso_max:bus_max_peso,
        estatura_min:bus_min_estatura,
        estatura_max:bus_max_estatura,
        optimista: optimist,
        introvertidas: introvertida,
        extravertidas: extravertida,
        rebeldes: rebelde,
        obsesivas: obsesiva,
        pasatiempo: document.getElementById("pasatiempo").value,
        acc: accionn
    };
    $.ajax({
        method:"post", //aqui puede ser igual get
        url: "parejas_log.php",//aqui va tu direccion donde esta tu funcion php
        data: param,//aqui tus datos
        success:function(data){
        if(data==false){
            alert("Datos incorrectos");
        }else{
            $('#filas_tabla').html(data);
            var lista=['registrar','buscar','ver_persona'];
            ocultt(lista,'ver_persona');

        }
    },
    error:function(data){
        
        //lo que devuelve si falla tu archivo mifuncion.php
    }
    });
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
            if(edad && edad >= 18){
                
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
    var num=1;
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
        foto: num,
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
            document.location.href="foto.php";
        }
    },
    error:function(data){
        
        //lo que devuelve si falla tu archivo mifuncion.php
    }
    });
}
