<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    die("Você precisa estar logado. <a href='login.php'>Login</a>");
}

if (!isset($_GET['id'])) {
    die("Livro inválido. <a href='index.php'>Voltar</a>");
}

echo "<h2>Reserva realizada com sucesso!</h2>";
?>
