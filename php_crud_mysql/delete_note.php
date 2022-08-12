<?php
include("db.php");

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM notas WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Error 404 No Encontrado");
    }
    $_SESSION['message'] = 'Nota Eliminada Correctamente';
    $_SESSION['message_type'] = 'danger';

    header("location: index.php");
}

?>