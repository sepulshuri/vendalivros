<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    die("Você precisa estar logado. <a href='login.php'>Login</a>");
}

if (!isset($_GET['id'])) {
    die("Livro inválido. <a href='index.php'>Voltar</a>");
}

echo "<h2>Compra do Livro</h2>";
echo "<form method='post'>";
echo "Número do Cartão: <input type='text' name='cartao' required><br>";
echo "<input type='submit' value='Finalizar Compra'>";
echo "</form>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<p>Compra realizada com sucesso!</p>";
}
?>

