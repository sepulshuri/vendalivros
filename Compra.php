<?php
class Compra {
    private $usuario;
    private $livros = [];
    private $total;

    public function __construct($usuario) {
        $this->usuario = $usuario;
        $this->total = 0;
    }

    public function adicionarLivro($livro) {
        if ($livro->verificarDisponibilidade()) {
            $this->livros[] = $livro;
            $this->total += $livro->getPreco();
        }
    }


    public function efetuarCompra($cartaoCredito) {

        if ($this->validarCartao($cartaoCredito)) {
            foreach ($this->livros as $livro) {
                $livro->comprar();
            }
            echo "Compra realizada com sucesso!";
        } else {
            echo "Falha na validação do cartão de crédito!";
        }
    }

    private function validarCartao($cartaoCredito) {
        return true; 
    }

    public function getTotal() {
        return $this->total;
    }
}
?>
