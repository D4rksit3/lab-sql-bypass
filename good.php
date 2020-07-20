<?php
########## imagen_agregar.php ##########
# http://www.lawebdelprogramador.com
 
/*
La base de datos utilizada para el ejemplo se llama imagenes

CREATE TABLE IF NOT EXISTS `imagephp` (
  `id` smallint(6) NOT NULL auto_increment,
  `anchura` smallint(6) NOT NULL,
  `altura` smallint(6) NOT NULL,
  `tipo` char(15) NOT NULL,
  `imagen` mediumblob NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM;
*/
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <style>
    .error {font-weight: bold; color:red;}
    .mensaje {color:#030;}
    .listadoImagenes img {float:left;border:1px solid #ccc; padding:2px;margin:2px;}
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="https://i.ibb.co/n8vnfKV/76186115-113005950156580-4262482852022583296-o.jpg" />
    <style>
    .good {
        width: 100px;
        height: 100px;
        
        position: relative;
        animation: mymove 3s infinite;
        animation-delay:1s;
    }
    @keyframes mymove {
        from {left: 370px;}
        to {left: 500px;}
    }
    </style>


</head>
 
<body>
<div class="container">
<?php
# Conectamos con MySQL
$mysqli=new mysqli("localhost","root","","challenges");
if (mysqli_connect_errno()) {
    die("Error al conectar: ".mysqli_connect_error());
}
$username = $password = "";
$param_username = $username;
$_SESSION["username"] = $username; 



// Los posible valores que puedes obtener de la imagen son:
//echo "<BR>".$_FILES["userfile"]["name"];      //nombre del archivo
//echo "<BR>".$_FILES["userfile"]["type"];      //tipo
//echo "<BR>".$_FILES["userfile"]["tmp_name"];  //nombre del archivo de la imagen temporal
//echo "<BR>".$_FILES["userfile"]["size"];      //tamaño
 
# Comprobamos que se haya subido un fichero


//if (is_uploaded_file($_FILES["userfile"]["tmp_name"]))
//{
    # verificamos el formato de la imagen
//    if ($_FILES["userfile"]["type"]=="image/jpeg" || $_FILES["userfile"]["type"]=="image/pjpeg" || $_FILES["userfile"]["type"]=="image/gif" || $_FILES["userfile"]["type"]=="image/bmp" || $_FILES["userfile"]["type"]=="image/png")
//    {
        # Cogemos la anchura y altura de la imagen
//        $info=getimagesize($_FILES["userfile"]["tmp_name"]);
        //echo "<BR>".$info[0]; //anchura
        //echo "<BR>".$info[1]; //altura
        //echo "<BR>".$info[2]; //1-GIF, 2-JPG, 3-PNG
        //echo "<BR>".$info[3]; //cadena de texto para el tag <img
 
        # Escapa caracteres especiales
//        $imagenEscapes=$mysqli->real_escape_string(file_get_contents($_FILES["userfile"]["tmp_name"]));
 
        # Agregamos la imagen a la base de datos
//        $sql="INSERT INTO `imagephp` (anchura,altura,tipo,imagen) VALUES (".$info[0].",".$info[1].",'".$_FILES["userfile"]["type"]."','".$imagenEscapes."')";
//        $mysqli->query($sql);
 
        # Cogemos el identificador con que se ha guardado
//        $id=$mysqli->insert_id;
 
        # Mostramos la imagen agregada
        //echo "<div class='mensaje'>Imagen agregada con el id ".$id."</div>";
//    }else{
//        echo "<div class='error'>Error: El formato de archivo tiene que ser JPG, GIF, BMP o PNG.</div>";
//    }
//}
?>
<br>
<div class="good">
<center><h1>Felicitaciones!</h1></center> 
</div>


<br> 
<h2>Lograste acceder ah este laboratorio de nivel basico.</h2>

<br> 
<hr>
<center><p>Escribeme al privado habrán mas sorpresas y mas laboratorios. </p></center>
<center><span style="color: green;"> <a href="https://wa.me/51912490133"> <button class="btn btn-success"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-chat-dots" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
  <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
</svg> Escribeme por privado al WhatsApp.</button> </a></span></center>
<br>
<center><span style="color: red;"><a href="https:Facebook.com/d4rksit3"> <button class="btn btn-primary"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-person-badge" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M12 1H4a1 1 0 0 0-1 1v11.755S4 12 8 12s5 1.755 5 1.755V2a1 1 0 0 0-1-1zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
  <path fill-rule="evenodd" d="M8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM6 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5z"/>
</svg> Siguenos en Facebook.</button> </a></span></center>
<br>
<center><span style="color: red;"><a href="https:youtube.com/c/d4rksit3"> <button  class="btn btn-danger">

<svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-play" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M10.804 8L5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z"/>
</svg>
 Siguenos en Youtube.</button> </a></span></center>

<!--<form enctype="multipart/form-data" action="good.php" method="POST">
    <input name="userfile" type="file">
    <p><input type="submit" value="Guardar Imagen">
</form>-->
 
<!--<h2>Usuarios Ganadores</h2>-->


<hr>
<!--<div class="listadoImagenes">
    <?php
    $result=$mysqli->query("SELECT * FROM imagephp ORDER BY id DESC");
    if($result)
    {
        while($row=$result->fetch_array(MYSQLI_ASSOC))
        {
            echo "<br><div class='container'><div class='card' style='whidth: 18rem;'><img src='imagen_mostrar.php?id=".$row["id"]."' width='130px".$row["anchura"]."' height='130px".$row["altura"]."' class='card-img-top'><div class='card-body'><center><p class='card-text'>
            User
            </p></center></div></div></div>";
            //echo "<img src='imagen_mostrar.php?id=".$row["id"]."' width='130px".$row["anchura"]."' height='130px".$row["altura"]."'>";
        }
    }
    ?>
</div>-->
</div>
</body>
</html>
 
 
 
 
 
 
 
 
 
 