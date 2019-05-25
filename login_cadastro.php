<?phpif(isset ($_POST['button']))
    echo "click";
endif;
?>

<div class = "login">
<form method ="post" action = "login.php">
    <br><label>Usuário</label><br>
    <input class = "input is-small" type = "text" name = "usuario" placeholder = "Nome de usuário"><br>
    <label>Senha</label><br>
    <input class = "input is-small" type = "password" name = "senha" placeholder = "Digite a senha"><br>
    <br>
    <input type = "submit" value = "Entrar" class = "button is-white">
</form>
</div>


