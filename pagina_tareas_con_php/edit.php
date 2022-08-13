<?php

    include("db.php");
    
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $query="SELECT * FROM tareas WHERE id= $id";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $titulo = $row['titulo'];
        $descripcion = $row['descripcion'];
        $stock = $row['stock'];
        $precio_num = $row['precio_num'];
      
        }

    }
    if (isset($_POST[ 'update'])) {
        $id= $_GET[ 'id' ];
        $titulo= $_POST[ 'titulo' ];
        $descripcion = $_POST[ 'descripcion'];
        $stock = $_POST[ 'stock'];
        $precio_num = $_POST[ 'precio_num'];
  
        $query= "UPDATE tareas set titulo ='$titulo', descripcion ='$descripcion', stock= '$stock', precio_num ='$precio_num' WHERE id = $id";
        mysqli_query ($conn, $query);

        $_SESSION [ 'message'] = 'Producto Actualizado';
        $_SESSION [ 'message_type']= 'warning';
        header("location: index.php");

    }





?>            


<?php include("includes/header.php")?>




<div class=".container-fluid p-3">
    <div class="row">
        <div class="col-md-4mx-auto">
            <div class="card card-body">
                <form action="edit.php?id=<?php echo $_GET['id'];?> " method="POST">
                     <div class="form-group">
                        <input name="titulo" type="text" class="form-control" value="<?php echo $titulo; ?>" placeholder="Update Title">
                     </div>
                    <div class="form-group">
                        <textarea name="descripcion" class="form-control" cols="30" rows="10"><?php echo $descripcion;?></textarea>
                    </div>


                    <div class="form-group">
                        <textarea name="stock" class="form-control" ><?php echo $stock;?></textarea>
                    </div>

                    <div class="form-group">
                        <textarea name="precio_num" class="form-control" ><?php echo $precio_num;?></textarea>
                    </div>


                    <button class="btn-success" name="update">
                        Guardar
                     
                </form>
                              
            </div>   
        </div>
    </div>
</div>
<?php include("includes/footer.php")?>


