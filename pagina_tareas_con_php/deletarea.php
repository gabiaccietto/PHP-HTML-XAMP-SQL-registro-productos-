<?php 

include("db.php");

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM tareas WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if (!$result){
        die("quey failed");

        $_SESSION['message'] = 'producto eliminado correctamente';
        $_SESSION ['message_type'] = 'danger';
        
        
    }
    header ("Location: index.php");
    
}


?>


