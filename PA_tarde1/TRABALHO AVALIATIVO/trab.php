<?php

abstract class Produto {
    protected string $nome;
    protected float $preco;
    protected int $estoque;

    public function __construct(string $nome, float $preco, int $estoque) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->estoque = $estoque;
    }

    protected function buscarprecopornome() {
        return $this->preco;
    }
}

class Clientes {

    public string $nomecliente;
    private int $cpf;
    private string $telefone;
    public string $tipo;

    public function __construct(string $nomecliente, int $cpf, string $telefone, string $tipo) {
        $this->nomecliente = $nomecliente;
        $this->cpf = $cpf;
        $this->telefone = $telefone;
        $this->tipo = $tipo;
    }

    public function cliente() {
        echo "Nome cliente: {$this->nomecliente}<br>";
        echo "CPF: {$this->cpf}<br>";
        echo "Telefone: {$this->telefone}<br>";
        echo "Tipo: {$this->tipo}<br><br>";
    }
}

class Pedidos extends Produto {

    private string $status = "aberto";

    function buscarprecopornome($nome = null, $preco = null) {
        return $this->preco;
    }

    function precofinal($qtd, $tipo) {
        $total = $this->preco * $qtd;

        echo "Preço sem desconto: R$ {$total}<br>";

        if ($tipo == "cliente premium") {
            $total = $total * 0.9;
            echo "Preço com desconto: R$ {$total}<br>";
        } else {
            echo "Nenhum desconto aplicado<br>";
        }

        $this->status = "pago";
        echo "Status do pedido: {$this->status}<br><br>";
    }
}

$notebook = new Pedidos("Notebook", 3000.00, 5);

$mouse = new Pedidos("Mouse", 150.00, 20);


$leo = new Clientes("Leonardo Tuleski", 123456789, "99999-1111", "cliente comum");
$bernardo = new Clientes("Bernardo", 987654321, "98888-2222", "cliente premium");

echo "{$leo->nomecliente}:<br>";
$notebook->precofinal(1, $leo->tipo);

echo "{$bernardo->nomecliente}:<br>";
$mouse->precofinal(2, $bernardo->tipo);

?>
