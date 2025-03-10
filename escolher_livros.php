<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

include 'Livro.php';

$livro1 = new Livro("Harry Potter", "Autor 1", 50.00, 5);
$livro2 = new Livro("Senhor dos Anéis", "Autor 2", 75.00, 0);  // Indisponível

?>

<h2>Escolha seus livros</h2>
<form method="POST" action="efetuar_compra.php">
    <input type="checkbox" name="livros[]" value="1"> Harry Potter - R$ 50,00<br>
    <input type="checkbox" name="livros[]" value="2"> Senhor dos Anéis - R$ 75,00 (indisponível)<br>
    <button type="submit">Efetuar Compra</button>
</form>
