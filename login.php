<?php

include 'dbi.php';

$usuariologin = $_POST['usuario'];
$senhalogin = $_POST['senha'];

$consulta_login = "SELECT * FROM USUARIO WHERE usuario = '$usuariologin' AND senha = '$senhalogin'";

$resultado_login = mysqli_query($conexao, $consulta_login);

if (mysqli_num_rows ($resultado_login) == 1){
    session_start();
    $_SESSION ['login'] = true;
    $_SESSION['usuario'] = $usuariologin;
    header('location: indexi.php?pagina=cadastro_empresai');
}
else{
    header('location: indexi.php?pagina=login_cadastro');
}
?>