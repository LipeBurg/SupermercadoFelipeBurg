<?php
class Pagamento {
    private $pedido;
    private $valor;
    private $status;
    private $tipo;
    private $data;

    public function __construct(Pedido $pedido) {
        $this->pedido   = $pedido;
        $this->valor    = $this->calcularValor();
        $this->status   = 'pendente';
    }
    private function calcularValor() {
        $valorTotal = 0;
        foreach ($this->pedido->getProdutos() as $produto) {
            $valorTotal += $produto->getValor();
        }
        return $valorTotal;
    }
    public function getPedido() {
        return $this->pedido;
    }
    public function getValor() {
        return $this->valor;
    }
    public function getStatus() {
        return $this->status;
    }
    public function confirmarPagamento() {
        $this->status = 'pago';
    }
    public function cancelarPagamento() {
        $this->status = 'cancelado';
    }
    public function getTipo() {
        return $this->tipo;
    }
    public function getData() {
        return $this->data;
    }
}
?>
