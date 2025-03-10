<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'Usuario.php';  

 
    $usuario = new Usuario("João Silva", "Rua X, 123", "987654321", "1990-01-01", "joao", "senha123");

    $login = $_POST['login'];
    $senha = $_POST['senha'];

    if ($usuario->autenticar($login, $senha)) {
        $_SESSION['usuario'] = $usuario;
        header("Location: escolher_livros.php");
    } else {
        echo "Login ou senha inválidos!";
    }
}
?>

<form method="POST" action="login.php">
    <h2>Login</h2>
    Login: <input type="text" name="login" required><br>
    Senha: <input type="password" name="senha" required><br>
    <button type="submit">Entrar</button>
</form>

<p>Não tem uma conta? <a href="cadastro.php">Cadastre-se</a></p>
