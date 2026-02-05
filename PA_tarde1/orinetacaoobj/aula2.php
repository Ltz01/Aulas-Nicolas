<?php

    abstract class Automovel{
        
        protected string $marca;
        protected float $ano;
        protected string $nome;
        protected int $velocidade = 0;

        function __construct(string $marca, float $ano, string $nome){
            
            $this->marca = $marca;
            $this->ano = $ano;
            $this->nome = $nome;
        }

        abstract public function tipo(): string;

        public function andar(): void {
            $this->velocidade += 20;
            echo "{$this->nome} está andando a {$this->velocidade} km/h<br>";
        }

        public function virar(string $lado): void {
            echo "{$this->nome} virou para a {$lado}<br>";
        }

        public function frear(): void {
            $this->velocidade = 0;
            echo "{$this->nome} freou e parou<br><br>";
        }

        public function info(): void {
        echo "Marca: {$this->marca}<br>";
        echo "Nome: {$this->ano}<br>";
        echo "Modelo: {$this->nome}<br>";
        echo "Tipo: {$this->tipo()}<br>";
        }
    };

    class Carro extends Automovel{
        public function tipo(): string {
            return "Carro";
        }
    };

    class Moto extends Automovel{
        public function tipo(): string {
            return "Moto";
        }
    };

    class Onibus extends Automovel{
        public function tipo(): string{
            return "Ônibus";
        }
    };

    $civic = new Carro("Honda", 2019, "Civicão");
    $xj6 = new Moto("Yamaha", 2002, "Jotão");
    $busao = new Onibus("Mercedes-bens", 1998, "Busão");

    $civic->info();
    $civic->andar();
    $civic->virar("esquerda");
    $civic->frear();

    $xj6->info();
    $xj6->andar();
    $xj6->virar("esquerda");
    $xj6->frear();

    $busao->info();
    $busao->andar();
    $busao->virar("esquerda");
    $busao->frear();


    abstract class Animal{
        protected string $especie;
        protected int $idade;
        protected string $nome;

        function __construct(string $especie, int $idade, string $nome){
            
            $this->especie = $especie;
            $this->idade = $idade;
            $this->nome = $nome;
        }

        abstract public function tipo(): string;

        public function andar(): void {
            echo "{$this->nome} está andando<br>";
        }

        public function virar(string $lado): void {
            echo "{$this->nome} virou para a {$lado}<br>";
        }

        public function frear(): void {
            echo "{$this->nome} freou e parou<br><br>";
        }

        public function info(): void {
        echo "Espécie: {$this->especie}<br>";
        echo "idade: {$this->idade} anos<br>";
        echo "nome: {$this->nome}<br>";
        echo "Tipo: {$this->tipo()}<br>";
        }
    };

    class Cachorro extends Animal{
        public function tipo(): string {
            return "Cachorro";
        }
    };

    class Hiena extends Animal{
        public function tipo(): string {
            return "Hiena";
        }
    };

    class Taturana extends Animal{
        public function tipo(): string{
            return "Taturana";
        }
    };

    $cachorro = new Cachorro("Vira-lata", 15, "Pipoca");
    $Hiena = new Hiena("Parda", 26, "Roberto");
    $Taturana = new Taturana("Cabeluda", 10, "Jeff");

    $cachorro->info();
    $cachorro->andar();
    $cachorro->virar("Direita");
    $cachorro->frear();

    $Hiena->info();
    $Hiena->andar();
    $Hiena->virar("Direita");
    $Hiena->frear();

    $Taturana->info();
    $Taturana->andar();
    $Taturana->virar("Esquerda");
    $Taturana->frear();

    abstract class Filme{
        
        protected int $ano;
        protected string $genero;
        protected string $nome;

        function __construct(int $ano, string $nome){
            
            $this->ano = $ano;
            $this->nome = $nome;
        }

        abstract public function tipo(): string;

        public function info(): void {
        echo "Nome: {$this->nome}<br>";
        echo "ano: {$this->ano}<br>";
        echo "Gênero: {$this->tipo()}<br><br>";
        }

    };

    class Homemaranha extends Filme{
        public function tipo(): string {
            return "Ação";
        }
    };

    class quarteto extends Filme{
        public function tipo(): string {
            return "Ação";
        }
    };

    class vf extends Filme{
        public function tipo(): string {
            return "Ação";
        }
    };

    $homemaranha = new Homemaranha(2019, "Homem-Aranha");
    $quarteto = new quarteto(2024, "Quarteto Fantástico");
    $vf = new vf(2012, "Velozes e Furiosos");

    $homemaranha->info();
    $quarteto->info();
    $vf->info();