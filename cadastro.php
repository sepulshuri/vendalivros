<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'Usuario.php';  

    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $dataNascimento = $_POST['dataNascimento'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];


    $usuario = new Usuario($nome, $endereco, $telefone, $dataNascimento, $login, $senha);
    $usuario->cadastrar();

    header("Location: login.php");
    exit();
}
?>

<form method="POST" action="cadastro.php">
    <h2>Cadastro</h2>
    Nome: <input type="text" name="nome" required><br>
    Endereço: <input type="text" name="endereco" required><br>
    Telefone: <input type="text" name="telefone" required><br>
    Data de Nascimento: <input type="date" name="dataNascimento" required><br>
    Login: <input type="text" name="login" required><br>
    Senha: <input type="password" name="senha" required><br>
    <button type="submit">Cadastrar</button>
</form>

<p>Já tem uma conta? <a href="login.php">Faça Login</a></p>
