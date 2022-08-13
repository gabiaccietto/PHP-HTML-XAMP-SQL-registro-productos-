<?php

include('db.php');

if (isset($_POST["guardar_tarea"])){
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];

    $stock = $_POST['stock'];
    $precio_num = $_POST['precio_num'];
   
    
    $query = "INSERT INTO tareas(titulo, descripcion, stock, precio_num) VALUES ('$titulo','$descripcion','$stock', '$precio_num')";
  

    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("fallo");

 
    }

    $_SESSION['message']= 'Tu producto se guardo ';
    $_SESSION[ 'message_type'] ='success';

    
    header("location: index.php");
}


?>