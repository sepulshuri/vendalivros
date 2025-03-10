<?php
session_start();

$usuarios = ["admin" => "123"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    if (isset($usuarios[$login]) && $usuarios[$login] === $senha) {
        $_SESSION['usuario'] = $login;
        header("Location: index.php");
        exit;
    } else {
        echo "<p>Login ou senha incorretos!</p>";
    }
}
?>

<h2>Login</h2>
<form method="post">
    Login: <input type="text" name="login" required><br>
    Senha: <input type="password" name="senha" required><br>
    <input type="submit" value="Entrar">
</form>
