<?php

include("db.php");

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query= "SELECT * FROM Personas WHERE id= $id";
    $resultado=mysqli_query($conn,$query);

    if(mysqli_num_rows($resultado)==1){

       $row=mysqli_fetch_array($resultado);
       $titulo=$row['titulo'];
       $descripcion=$row['descripcion'];
       echo $titulo;
    }
}

if(isset($_POST['actualizar']))
{
    $id=$_GET['id'];
    $titulo=$_POST['title'];
    $descripcion=$_POST['description'];

    $query= "UPDATE Personas set titulo='$titulo', descripcion='$descripcion' WHERE id= $id";
    mysqli_query($conn, $query);

    $_SESSION['message']='Noticia editada correctamente';
    $_SESSION['message_type']='warning';

    header("Location: index.php");



}

?>

<?php include("includes/header.php") ?>

<div class="container p-4">
<div class="row">
<div class="col-md-4 mx-auto">
<div class="card card-body">
<form action="editar.php?id=<?php echo $_GET['id']; ?>" method="POST">
<div class="form-group">
<input type="text" name="title" value="<?php echo $titulo; ?>" class="form-control" placeholder="Actualiza el titulo">
</div>

<div class="form-group">
<textarea name="description" rows="4" class="form-control"><?php echo $descripcion; ?></textarea>
</div>

<button class="btn btn-success" name="actualizar">
Actualizar
</button>
</form>


</div>
</div>
</div>
</div>

