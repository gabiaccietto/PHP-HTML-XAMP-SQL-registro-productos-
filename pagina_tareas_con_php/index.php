<?php include("db.php")?>
<?php include("includes/header.php")?>


<h1 class=" text-primary text-uppercase text-center p-4"> BIENVENIDO REGISTRO PRODUCTO</h1>


<div class="container p-4">
    <div class="row">


        <div class="col-md-4">

        <?php if (isset($_SESSION['message'])){ ?> 
            <div class="alert alert-success alert-dismissible fade show" role="alert">

            <?=$_SESSION['message'] ?>
        
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
             <?php session_unset();


        }   ?>




            <div class="card card-body">
                <form action="savetarea.php" method="POST">

                    <div class="form-group pb-2">
                        <input type="text" name="titulo" class="form-control"
                        placeholder="Titulo Producto" autofocus>
                    </div>

                    <div class="form-group p-1">
                        <textarea name="descripcion" rows="2" class="form-control" placeholder="Descripcion Producto"></textarea>
                    </div>

                    <div class="form-group p-1">
                         <textarea name="stock" rows="2" class="form-control" placeholder="Stock Producto"></textarea>
                    </div>

                    <div class="form-group p-1">
                         <textarea name="precio_num" rows="2" class="form-control" placeholder="Precio Producto"></textarea>
                    </div>
              
                    <div class="pt-3"><input  type="submit" class="btn btn-success btn-block  " name="guardar_tarea" value= "Guardar Producto"></div>


                </form>
            </div>
        </div>




        <div class=".container-fluid col-md-8 ">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">TITULO PRODUCTO</th>
                    <th scope="col">DESCRIPCION</th>
                    <th scope="col">STOCK</th>
                    <th scope="col">PRECIO</th>
                    <th scope="col">INGRESO PRODUCTO</th>
                    <th scope="col">ACCIONES</th>
                 </tr>
            </thead>
            
                <tbody>
                    <?php 
                    $query="SELECT * FROM tareas";
                    $result_tareas= mysqli_query($conn, $query);

                    while($row= mysqli_fetch_array($result_tareas)){ ?>
                    <tr>
                        <td><?php echo $row['titulo'  ]    ?></td>
                        <td><?php echo $row['descripcion'  ]    ?></td>
                        <td><?php echo $row['stock'  ]    ?></td>
                        <td><?php echo $row['precio_num'  ]    ?></td>
                        <td><?php echo $row['fecha_creacion'  ]    ?></td>
                     
                        <td>
                            <a href="edit.php?id=<?php echo $row['id']  ?> " class="btn btn-secondary">
                                Editar
                            </a>
                            <a href="deletarea.php?id=<?php echo $row['id']  ?> " class="btn btn-danger">
                                Eliminar
                            </a>
                        </td>
                    </tr>

                    <?php
                     
                    }?>
                </tbody>


            </table>




        </div>




    </div>



</div>



<?php include("includes/footer.php")?>
