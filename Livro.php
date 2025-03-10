<?php
class Livro {
    private $titulo;
    private $autor;
    private $preco;
    private $estoque;

    public function __construct($titulo, $autor, $preco, $estoque) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->preco = $preco;
        $this->estoque = $estoque;
    }


    public function verificarDisponibilidade() {
        return $this->estoque > 0;
    }

    public function comprar() {
        if ($this->estoque > 0) {
            $this->estoque--;
            return true;
        }
        return false;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function getEstoque() {
        return $this->estoque;
    }
}
?>
