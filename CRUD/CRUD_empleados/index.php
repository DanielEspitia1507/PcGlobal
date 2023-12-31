<?php include("../includes/header2.php"); 
if (empty($_SESSION['username'])){
    header("location: ../login.php");
    die();
}
?>

<div class="mx-4 2xl:mx-44 mt-8 mb-8 text-white flex">
    <a class="bg-teal-500 p-2.5 rounded-md hover:text-stone-100 hover:bg-teal-600 hover:shadow-lg" href="agregar_empleado.php"><i class="fas fa-plus"></i> Agregar Empleado</a>
</div>
<div>
<?php if(isset($_SESSION['message'])){?>
    <div class="mx-96 font-bold alert alert-<?= $_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message'] ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fas fa-times text-xl"></i></button>
    </div>
    <?php unset($_SESSION['message']); } ?>        
</div>
<div class="container flex mx-auto my-6">
    <table class="table">
        <thead>
            <tr class="border-t-2 border-gray-900">
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Rol</th>
                <th>Tipo de Documento</th>
                <th>N° de Documento</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "CALL PA_consulta_empleados();";
            $result = mysqli_query($conn, $query);

            while($row = mysqli_fetch_array($result)){ ?>
                <tr>
                    <td><?php echo $row['Nombres'] ?></td>
                    <td><?php echo $row['Apellidos'] ?></td>
                    <td><?php echo $row['Rol'] ?></td>
                    <td><?php echo $row['Tipo de Documento'] ?></td>
                    <td><?php echo $row['N° de Documento'] ?></td>
                    <td><?php echo $row['Correo'] ?></td>
                    <td><?php echo $row['Telefono'] ?></td>
                    <td><?php echo $row['Estado']?></td>
                    <td>
                        <a class="btn btn-outline-primary" href="editar.php?id=<?php echo $row['id']?>"><i class="fas fa-marker"></i></a>
                        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modal<?php echo $row['id']?>"><i class="far fa-trash-alt"></i></button>
                    </td>
                </tr>

                <!-- Modal -->
                <div class="modal fade" id="modal<?php echo $row['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">¿Estás seguro de realizar esta acción? 😰</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                ¿Estás seguro que quieres cambiar el estado del empleado <?php echo $row['Nombres']." ".$row['Apellidos'] ?>?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn bg-gray-600 btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                <a href="eliminar.php?id=<?php echo $row['id']?>" class="btn bg-red-600 hover:bg-red-700 text-white font-medium">¡Cambiar estado!</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php include("../includes/footer.php"); ?>
