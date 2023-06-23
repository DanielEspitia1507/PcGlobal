<?php

include("db.php");

$name = $_POST['name'];
$password = md5($_POST['password']);

$sql = "SELECT COUNT(*) contar FROM usuarios WHERE usuNombre = '$name' and usuContrasena = '$password' ";
$result = mysqli_query($conn,$sql);
$array = mysqli_fetch_array($result);


if(isset($_POST['submit'])){
    if(empty($name) && empty($password)){
        $_SESSION['mensaje'] = "Llena todos los campos";
        $_SESSION['tipo_mensaje'] = "danger";
        header("location: ../login.php");
    }elseif(empty($name)){
        $_SESSION['mensaje'] = "Ingresa el usuario";
        $_SESSION['tipo_mensaje'] = "danger";
        header("location: ../login.php");
    }elseif(empty($password)){
        $_SESSION['mensaje'] = "Ingresa la contraseña";
        $_SESSION['tipo_mensaje'] = "danger";
        header("location: ../login.php");
    }elseif($array['contar']==1){
        header("location: ../index.php");
        $_SESSION['username'] = $name;
    }else{
        $_SESSION['mensaje'] = "Datos incorrectos";
        $_SESSION['tipo_mensaje'] = "danger";
        header("location: ../login.php");
    }
}

?>