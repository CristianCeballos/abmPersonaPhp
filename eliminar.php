<?php

include("db.php");


if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query="DELETE FROM Personas WHERE id = $id";
    $resulado=mysqli_query($conn, $query);
    if(!$resulado){
       die("Consulta Fallo");
    }

    $_SESSION['message']='Noticia eliminada correctamente';
    $_SESSION['message_type']='danger';

    header("Location: index.php");
}


?>