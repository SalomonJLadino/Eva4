<?php
include("db.php");

if (isset($_POST['save_note'])){
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    
    $query = "INSERT INTO notas(titulo, descripcion) VALUES ('$titulo', '$descripcion')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Error 404 No Encontrado");
    }

    $_SESSION['message'] = 'Nota Guardada Correctamente';
    $_SESSION['message_type'] = 'success';

    header("location: index.php");
}

?>