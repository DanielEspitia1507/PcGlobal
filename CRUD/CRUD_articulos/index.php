<?php include("../includes/header3.php"); 
    if(empty($_SESSION['username'])){
        header("location: ../login.php");
        die();
    }
?>

    <div class="mx-4 2xl:mx-44 mt-8 mb-8 text-white"><a class="bg-teal-500 p-2.5 rounded-md hover:text-stone-100 hover:bg-teal-600 hover:shadow-lg" href="agregar_empleado.php"><i class="fas fa-plus"></i> Agregar Empleado</a></div>
    <div>
    <?php if(isset($_SESSION['message'])){?>
                <div class="mx-96 font-bold alert alert-<?= $_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message'] ?>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fas fa-times text-xl"></i></button>
                </div>
            <?php unset($_SESSION['message']); } ?>        
    </div>
<div class="container flex mx-auto my-6">
    <table class="table text-center">
        <thead>
            <tr class="border-t-2 border-gray-900">
                <th>Nombre del Artículo</th>
                <th>Precio</th>
                <th>Imágen</th>
                <th>Categoría</th>
                <th>Marca</th>
                <th>Cantidad</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $query = "CALL PA_consulta_articulos();";
                $result = mysqli_query($conn, $query);
                

                while($row = mysqli_fetch_array($result)){ ?>
                    <tr>
                        <td><?php echo $row['Nombre'] ?></td>
                        <td>$<?php echo $row['Precio']?> COP</td>
                        <td><img src="<?php echo $row['Imágen'] ?>" width="100px"></td>
                        <td><?php echo $row['Categoría']?></td>
                        <td><?php echo $row['Marca'] ?></td>
                        <td><?php echo $row['Cantidad'] ?> unidades</td>
                        <td>
                            <a class="btn btn-outline-primary" href="editar.php?id=<?php echo $row['id']?>"><i class="fas fa-marker"></i></a>
                            <a class="btn btn-outline-danger" href="eliminar.php?id=<?php echo $row['id']?>"><i class="far fa-trash-alt"></i></a>
                        </td>
                    </tr>

            <?php } ?>

            
        </tbody>
    </table>
</div>

<?php include("../includes/footer.php"); ?>


    
