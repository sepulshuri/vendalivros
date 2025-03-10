<?php
session_start();

$livros = [
    1 => ["titulo" => "Livro A", "preco" => 50.00, "disponivel" => true],
    2 => ["titulo" => "Livro B", "preco" => 40.00, "disponivel" => false],
    3 => ["titulo" => "Livro C", "preco" => 30.00, "disponivel" => true]
];

echo "<h2>Loja de Livros</h2>";

if (!isset($_SESSION['usuario'])) {
    echo "<p><a href='login.php'>Fazer Login</a></p>";
} else {
    echo "<p>Bem-vindo, {$_SESSION['usuario']} | <a href='logout.php'>Sair</a></p>";

    echo "<h3>Livros Disponíveis:</h3>";
    foreach ($livros as $id => $livro) {
        echo "<p>{$livro['titulo']} - R$ {$livro['preco']} ";
        if ($livro['disponivel']) {
            echo "<a href='comprar.php?id=$id'>[Comprar]</a>";
        } else {
            echo "<a href='reservar.php?id=$id'>[Reservar]</a>";
        }
        echo "</p>";
    }
}
?>

