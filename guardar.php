<?php

include("db.php");

if(isset($_POST['guardar'])){
    $title = $_POST['title'];
    $description = $_POST['description'];


    $query="INSERT INTO Personas(titulo, descripcion) VALUES('$title','$description')";

    $resultado = mysqli_query($conn,$query);

    if(!$resultado)
    {
        die("Consulta Fallo");
    }

    $_SESSION['message']='Noticia Guardada';
    $_SESSION['message_type']='success';


    header("Location: index.php");
}

?>