<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

include 'Livro.php';
include 'Compra.php';

$usuario = $_SESSION['usuario'];

$livro1 = new Livro("Harry Potter", "Autor 1", 50.00, 5);
$livro2 = new Livro("Senhor dos Anéis", "Autor 2", 75.00, 0);

$compra = new Compra($usuario);

if (isset($_POST['livros'])) {
    foreach ($_POST['livros'] as $livroId) {
        if ($livroId == 1) {
            $compra->adicionarLivro($livro1);
        } elseif ($livroId == 2) {
            $compra->adicionarLivro($livro2);
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cartaoCredito'])) {
    $cartaoCredito = $_POST['cartaoCredito'];
    $compra->efetuarCompra($cartaoCredito);
}
?>

<form method="POST" action="efetuar_compra.php">
    <h2>Efetuar Compra</h2>
    Número do Cartão de Crédito: <input type="text" name="cartaoCredito" required><br>
    <button type="submit">Finalizar Compra</button>
</form>
