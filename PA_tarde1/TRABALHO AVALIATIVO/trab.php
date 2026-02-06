<?php

abstract class Produto{     //classe produto
    protected string $nome;     //variavel nome do produto
    protected float $preco;     //variavel do preco do produto
    protected int $estoque;     //variavel da quantidade em estoque do produto

    public function __construct(string $nome, float $preco, int $estoque){      //função criado para que quando cadastre um novo produto ja puxe ele direto
        $this->nome = $nome;
        $this->preco = $preco;
        $this->estoque = $estoque;
    }

    protected function buscarprecopornome(){        //função que será usada na area de pedidos
        return $this->preco;
    }

    public function info(): void{       //função para puxar as informações do produto
        echo "Produto: {$this->nome}<br>";
        echo "Preço unitário: {$this->preco}<br>";
    }
}

class Clientes{     //clase clientes

    public string $nomecliente;     //variavel nome do cliente
    private int $cpf;       //variavel cpf do cliente
    private string $telefone;       //variavel telefone do cliente
    public string $tipo;        //variavel tipo do cliente (COMUM OU PREMIUM)

    public function __construct(string $nomecliente, int $cpf, string $telefone, string $tipo) {        //função criado para que quando cadastre um novo cliente ja puxe ele direto
        $this->nomecliente = $nomecliente;
        $this->cpf = $cpf;
        $this->telefone = $telefone;
        $this->tipo = $tipo;
    }

    public function cliente(){     //função que retorna as informações dos cliente
        echo "Nome cliente: {$this->nomecliente}<br>";
        echo "CPF: {$this->cpf}<br>";
        echo "Telefone: {$this->telefone}<br>";
        echo "Tipo: {$this->tipo}<br><br>";
    }
}

class Pedidos extends Produto{

    private string $status = "aberto";

    function buscarprecopornome($nome = null, $preco = null){       //função para que puxe o preço do produto só com o nome
        return $this->preco;
    }

    function precofinal($qtd, $tipo){   //função que calcula o preço final de compra com base se você é cliente premium ou comum
        echo "Quantidade: {$qtd}<br>";
        $total = $this->preco * $qtd;
        echo "Preço sem desconto: R$ {$total}<br>";

        if ($tipo == "cliente premium"){       
            $total = $total * 0.9;
            echo "Preço com desconto: R$ {$total}<br>";
        }
        else{
            echo "Nenhum desconto aplicado<br>";
        }

        $this->status = "pago";
        echo "Status do pedido: {$this->status}<br>";       //mostra o status do pedido (PEDIDOS SÓ SÃO REGISTRADOS NO SISTEMA APÓS SEREM PAGOS)
    }

    public function estoque($qtd){      //função que mostra o estoque atualizado
        $this->estoque -= $qtd;
        echo "Atual quantidade no estoque: {$this->estoque}<br><br>";
    }
}

$notebook = new Pedidos("Notebook", 3000.00, 5);        //adicionando novo objeto - NOTEBOOK

$mouse = new Pedidos("Mouse", 150.00, 20);      //adicionando novo objeto - MOUSE

$leo = new Clientes("Leonardo Tuleski", 123456789, "99999-1111", "cliente comum");      //adicionando novo cliente - LEONARDO
$bernardo = new Clientes("Bernardo", 987654321, "98888-2222", "cliente premium");       //adicionando novo cliente - BERNARDO

echo "{$leo->nomecliente}:<br>";        //mostra as informações do pedido
$notebook->info();      //mostra as informações do pedido
$notebook->precofinal(1, $leo->tipo);       //mostra as informações do pedido
$notebook->estoque(1);      //mostra as informações do pedido

echo "{$bernardo->nomecliente}:<br>";
$mouse->info();
$mouse->precofinal(2, $bernardo->tipo);
$mouse->estoque(2);

echo "{$bernardo->nomecliente}:<br>";       //mostra as informações do pedido
$notebook->info();      //mostra as informações do pedido
$notebook->precofinal(3, $bernardo->tipo);      //mostra as informações do pedido
$notebook->estoque(3);      //mostra as informações do pedido

?>
