<?php
if (file_exists("img/" . $_FILES["file"]["name"]))
    {
    echo $_FILES["file"]["name"] . " already exists. ";
    }
else
    {		
    move_uploaded_file($_FILES["file"]["tmp_name"], "fotos/" . $_FILES["file"]["name"]);
    $nombreArchivo = $_FILES["file"]["name"];
    $bd = new mysqli('localhost',  'root', '', 'buscar_parejas');
    if ($bd->connect_errno):
        echo "Fallo la conexión a MySQL: " .$bd -> error_reporting;
    endif;
   
    $sql="
    UPDATE `persona` SET `foto`='".$nombreArchivo."' WHERE `foto`='1'
    ";
    mysqli_query($bd,$sql);
    }
    ?>
    <script>
        alert("Guardado con exito");
        window.location = "parejas.php";
    </script>
    


